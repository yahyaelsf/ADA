<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
     protected $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.articles');
        $pageDescription = trans('navigation.articles');

        return view('admin.articles.index', compact('pageTitle', 'pageDescription'));
    }


    public function form()
    {
        $id = request('id');
        $article = null;

        if ($id) {
            $article = $this->model->findOrFail($id);
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
                'page' => view('admin.articles.form', compact('article', 'inputs'))->render()
            ]
        );
    }

    public function store(StoreArticleRequest $request)
    {
        // dd($request->all());
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/articles');
        }

        if ($id = $request->get('pk_i_id')) {
            $article = $this->model->find($id);
            $article->update($input);
        } else {
            $article = $this->model->create($input);
        }
        // $article->focus()->sync($request->get('focus'));
        $article->syncTranslations($localizable);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $article
        ]);
    }

    public function updateStatus(Request $request)
    {
        $article = $this->model->findOrFail($request->id);
        $article->b_enabled = (int)$request->enabled;
        $article->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Article $article)
    {
        $article->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $articles = $this->model->select('t_articles.*')->filter($filters)->distinct();

        return datatables($articles)
        ->addColumn('actions_column', function ($row) {
            return view('admin.articles.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
