<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBrandRequest;
use App\Http\Requests\Admin\StoreSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $model;

    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.slider');
        $pageDescription = trans('navigation.slider');

        return view('admin.slider.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $slider = null;

        if ($id) {
            $slider = $this->model->findOrFail($id);
        }

        $inputs = [
            [
                'name' => 's_title',
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
                'page' => view('admin.slider.form', compact('slider', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreSliderRequest $request)
    {
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/slider');
        }

        if ($id = request('pk_i_id')) {
            $slider = $this->model->find($id);
            $slider->update($input);
        } else {
            $slider = $this->model->create($input);
        }

        $slider->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $slider
        ]);
    }

    public function updateStatus(Request $request)
    {
        $slider = $this->model->findOrFail($request->id);
        $slider->b_enabled = (int)$request->enabled;
        $slider->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Slider $slider)
    {
        $slider->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $sliders = $this->model->select('t_sliders.*')->filter($filters)->distinct();

        return datatables($sliders)->addColumn('actions_column', function ($row) {
            return view('admin.slider.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
