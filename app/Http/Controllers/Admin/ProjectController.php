<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $model;

    public function __construct(Project $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.projects');
        $pageDescription = trans('navigation.projects');

        return view('admin.projects.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $project = null;

        if ($id) {
            $project = $this->model->findOrFail($id);
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
                'page' => view('admin.projects.form', compact('project', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreProjectRequest $request)
    {
        // dd($request->all());
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/projects');
        }

        if ($id = $request->get('pk_i_id')) {
            $project = $this->model->find($id);
            $project->update($input);
        } else {
            $project = $this->model->create($input);
        }
        // $project->focus()->sync($request->get('focus'));
        $project->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $project
        ]);
    }

    public function updateStatus(Request $request)
    {
        $project = $this->model->findOrFail($request->id);
        $project->b_enabled = (int)$request->enabled;
        $project->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Project $project)
    {
        $project->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $projects = $this->model->select('t_projects.*')->filter($filters)->distinct();

        return datatables($projects)
        ->addColumn('actions_column', function ($row) {
            return view('admin.projects.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
