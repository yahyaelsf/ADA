<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    protected $model;

    public function __construct(Program $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.programs');
        $pageDescription = trans('navigation.programs');

        return view('admin.programs.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $program = null;

        if ($id) {
            $program = $this->model->findOrFail($id);
        }

        $inputs = [
            [
                'name' => 's_name',
                'type' => 'text',
                'label' => __('general.title'),
            ],
            [
                'name' => 's_description',
                'type' => 'textarea',
                'label' => __('general.description'),
                'rows' => '2'
            ]
        ];


        return response()->json(
            [
                'title' => trans('general.add_edit'),
                'page' => view('admin.programs.form', compact('program', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreProgramRequest $request)
    {
        // dd($request->all());
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/programs');
        }

        if ($id = $request->get('pk_i_id')) {
            $program = $this->model->find($id);
            $program->update($input);
        } else {
            $program = $this->model->create($input);
        }
        // $program->focus()->sync($request->get('focus'));
        $program->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $program
        ]);
    }

    public function updateStatus(Request $request)
    {
        $program = $this->model->findOrFail($request->id);
        $program->b_enabled = (int)$request->enabled;
        $program->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Program $program)
    {
        $program->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $programs = $this->model->select('t_programs.*')->filter($filters)->distinct();

        return datatables($programs)
        ->addColumn('actions_column', function ($row) {
            return view('admin.programs.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
