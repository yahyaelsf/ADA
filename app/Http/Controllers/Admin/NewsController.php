<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $model;

    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.news');
        $pageDescription = trans('navigation.news');

        return view('admin.news.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $new = null;

        if ($id) {
            $new = $this->model->findOrFail($id);
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
                'page' => view('admin.news.form', compact('new', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreNewsRequest $request)
    {
        // dd($request->all());
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/news');
        }

        if ($id = $request->get('pk_i_id')) {
            $new = $this->model->find($id);
            $new->update($input);
        } else {
            $new = $this->model->create($input);
        }
        // $new->focus()->sync($request->get('focus'));
        $new->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $new
        ]);
    }

    public function updateStatus(Request $request)
    {
        $new = $this->model->findOrFail($request->id);
        $new->b_enabled = (int)$request->enabled;
        $new->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(News $new)
    {
        $new->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $news = $this->model->select('t_news.*')->filter($filters)->distinct();

        return datatables($news)
        ->addColumn('actions_column', function ($row) {
            return view('admin.news.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
