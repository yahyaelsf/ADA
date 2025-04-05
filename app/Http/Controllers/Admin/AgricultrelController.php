<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAgricultrelRequest;
use App\Models\Agricultrel;
use Illuminate\Http\Request;

class AgricultrelController extends Controller
{
     protected $model;

    public function __construct(Agricultrel $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.agricultrels');
        $pageDescription = trans('navigation.agricultrels');

        return view('admin.agricultrels.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $agricultrel = null;

        if ($id) {
            $agricultrel = $this->model->findOrFail($id);
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
                'page' => view('admin.agricultrels.form', compact('agricultrel', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreAgricultrelRequest $request)
    {
        // dd($request->all());
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/agricultrels');
        }

        if ($id = $request->get('pk_i_id')) {
            $agricultrel = $this->model->find($id);
            $agricultrel->update($input);
        } else {
            $agricultrel = $this->model->create($input);
        }
        // $agricultrel->focus()->sync($request->get('focus'));
        $agricultrel->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $agricultrel
        ]);
    }

    public function updateStatus(Request $request)
    {
        $agricultrel = $this->model->findOrFail($request->id);
        $agricultrel->b_enabled = (int)$request->enabled;
        $agricultrel->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Agricultrel $agricultrel)
    {
        $agricultrel->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $agricultrels = $this->model->select('t_agricultrels.*')->filter($filters)->distinct();

        return datatables($agricultrels)
        ->addColumn('actions_column', function ($row) {
            return view('admin.agricultrels.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
