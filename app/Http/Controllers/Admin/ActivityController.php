<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    protected $model;

    public function __construct(Activity $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.activities');
        $pageDescription = trans('navigation.activities');

        return view('admin.activities.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $activity = null;

        if ($id) {
            $activity = $this->model->findOrFail($id);
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
                'page' => view('admin.activities.form', compact('activity', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreActivityRequest $request)
    {
        // dd($request->all());
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/activities');
        }

        if ($id = $request->get('pk_i_id')) {
            $activity = $this->model->find($id);
            $activity->update($input);
        } else {
            $activity = $this->model->create($input);
        }
        // $activity->focus()->sync($request->get('focus'));
        $activity->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $activity
        ]);
    }

    public function updateStatus(Request $request)
    {
        $activity = $this->model->findOrFail($request->id);
        $activity->b_enabled = (int)$request->enabled;
        $activity->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Activity $activity)
    {
        $activity->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $activities = $this->model->select('t_activities.*')->filter($filters)->distinct();

        return datatables($activities)
        ->addColumn('actions_column', function ($row) {
            return view('admin.activities.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
