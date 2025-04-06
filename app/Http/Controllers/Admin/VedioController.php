<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVedioRequest;
use App\Models\TCource;
use App\Models\Vedio;
use Illuminate\Http\Request;

class VedioController extends Controller
{
    protected $model;

    public function __construct(Vedio $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.vedios');
        $pageDescription = trans('navigation.vedios');

        return view('admin.vedios.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $vedio = null;

        if ($id) {
            $vedio = $this->model->findOrFail($id);
        }

        $inputs = [
            [
                'name' => 's_title',
                'type' => 'text',
                'label' => __('general.title'),
            ],
            // [
            //     'name' => 's_description',
            //     'type' => 'textarea',
            //     'label' => __('general.description'),
            //     'rows' => '2',
            //     'id' =>'summernote',
            //     'class' => 'summernote'
            // ]
        ];

        return response()->json(
            [
                'title' => trans('general.add_edit'),
                'page' => view('admin.vedios.form', compact('vedio', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreVedioRequest $request)
    {

        $input = $request->except(['s_cover','s_vedio']);
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/vedios');
        }
        if ($request->hasFile('s_vedio')) {
            $input['s_vedio'] = $request->file('s_vedio')->store('uploads/vedios');
        }

        if ($id = $request->get('pk_i_id')) {
            $vedio = $this->model->find($id);
            $vedio->update($input);
        } else {
            $vedio = $this->model->create($input);
        }

        $vedio->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $vedio
        ]);
    }

    public function updateStatus(Request $request)
    {
        $vedio = $this->model->findOrFail($request->id);
        $vedio->b_enabled = (int)$request->enabled;
        $vedio->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }
    public function updateFree(Request $request)
    {
        $admin = $this->model->findOrFail($request->id);
        $admin->is_free = (int) $request->enabled;
        $admin->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Vedio $vedio)
    {
        $vedio->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $vedios = $this->model->filter($filters)->distinct();

        return datatables($vedios)->addColumn('actions_column', function ($row) {
            return view('admin.vedios.datatable.actions', compact('row'));
        })
        ->addColumn('video_column', function ($row) {
            $videoUrl = asset($row->s_vedio);
            if (!empty($row->s_vedio)) {
                return '<a href="' . $videoUrl . '" target="_blank">Open Video</a>';
            }
            return 'No Video';
        })
        ->rawColumns(['enabled_html', 'actions_column','video_column'])->make(true);
    }
}
