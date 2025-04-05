<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $model;

    public function __construct(Brand $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.brands');
        $pageDescription = trans('navigation.brands');

        return view('admin.brands.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $brand = null;

        if ($id) {
            $brand = $this->model->findOrFail($id);
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
                'page' => view('admin.brands.form', compact('brand', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreBrandRequest $request)
    {

        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/brands');
        }

        if ($id = $request->get('pk_i_id')) {
            $brand = $this->model->find($id);
            $brand->update($input);
        } else {
            $brand = $this->model->create($input);
        }

        $brand->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $brand
        ]);
    }

    public function updateStatus(Request $request)
    {
        $brand = $this->model->findOrFail($request->id);
        $brand->b_enabled = (int)$request->enabled;
        $brand->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $brands = $this->model->select('t_brands.*')->filter($filters)->distinct();

        return datatables($brands)->addColumn('actions_column', function ($row) {
            return view('admin.brands.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
