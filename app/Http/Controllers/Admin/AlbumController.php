<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ParentFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAlbumRequest;
use App\Http\Requests\Admin\StoreCampaignRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    protected $model;

    public function __construct(Album $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $pageTitle = trans('navigation.albums');
        $pageDescription = trans('navigation.albums');

        return view('admin.albums.index', compact('pageTitle', 'pageDescription'));
    }

    public function create()
    {
        $id = request('id');
        $album = null;

        if ($id) {
            $album = $this->model->findOrFail($id);
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
                'rows' => '3',
            ]
        ];

        $pageTitle = trans('navigation.add_edit_albums');
        $pageDescription = trans('navigation.add_edit_albums');


        return view('admin.albums.create', compact('inputs', 'album', 'pageTitle', 'pageDescription'));
    }


    public function store(StoreAlbumRequest $request)
    {
        $input = $request->except('s_cover');
        $localizable = $request->get('localizable');

        if ($request->hasFile('s_cover')) {
            $input['s_cover'] = $request->file('s_cover')->store('uploads/albums');
        }


        DB::beginTransaction();

        try {

            if ($id = request('pk_i_id')) {
                $album = $this->model->find($id);
                $album->update($input);
                $action = 'update';
            } else {
                $album = $this->model->create($input);
                $action = 'create';
            }

            $album->syncTranslations($localizable);

            if ($files = $request->file('files')) {
                foreach ($files as $file) {
                    $type = strtoupper(explode('/', $file->getMimeType())[0]);
                    $album->resources()->create([
                        's_filename' => $file->store('uploads/albums'),
                        'e_type' => $type,
                    ]);
                }
            }

        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => trans('alerts.validation_errors'),
            ]);
        }

        DB::commit();

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'action' => $action,
            'album' => $album->with('resources')
        ]);
    }


    public function show(Album $album)
    {
        $pageTitle = $album->s_title;
        $pageDescription = $album->s_title;

        return view('admin.albums.show', compact('job', 'pageTitle', 'pageDescription'));
    }


    public function updateStatus(Request $request)
    {
        $album = $this->model->findOrFail($request->id);
        $album->b_enabled = (int)$request->enabled;
        $album->save();

        return response()->json(['message' => 'User status updated successfully.']);
    }


    public function destroy(Album $album)
    {
        $album->delete();

        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', trans('alerts.successfully_deleted'));
    }


    public function datatable(ParentFilter $filters)
    {
        $albums = $this->model->select('t_albums.*')->filter($filters)->distinct();
        return datatables($albums)->addColumn('actions_column', function ($row) {
            return view('admin.albums.datatable.actions', compact('row'));
        })->rawColumns(['enabled_html', 'actions_column'])->make(true);
    }
}
