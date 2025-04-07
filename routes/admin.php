<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AgricultrelController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AssemblyController;
use App\Http\Controllers\Admin\AssemblyFolderController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CkeEditorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ItemFolderController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\MailingListController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VedioController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/', HomeController::class)->name('home');

    Route::get('slider/data', [SliderController::class, 'datatable'])->name('slider.data')->can('slider-view');
    Route::get('slider/form', [SliderController::class, 'form'])->name('slider.form')->can('slider-store');
    Route::get('slider/update_status', [SliderController::class, 'updateStatus'])->name('slider.status')->can('slider-status');
    Route::get('slider', [SliderController::class, 'index'])->name('slider.index')->can('slider-view');
    Route::post('slider', [SliderController::class, 'store'])->name('slider.store')->can('slider-store');
    Route::delete('slider/{slider}', [SliderController::class, 'destroy'])->name('slider.delete')->can('slider-delete');

    
    Route::get('admins/data', [AdminController::class, 'datatable'])->name('admins.data')->can('admins-view');
    Route::get('admins/form', [AdminController::class, 'form'])->name('admins.form')->can('admins-store');
    Route::get('admins/update_status', [AdminController::class, 'updateStatus'])->name('admins.status')->can('admins-status');
    Route::get('admins', [AdminController::class, 'index'])->name('admins.index')->can('admins-view');
    Route::post('admins', [AdminController::class, 'store'])->name('admins.store')->can('admins-store');
    Route::delete('admins/{admin}', [AdminController::class, 'destroy'])->name('admins.delete')->can('admins-delete');

    Route::get('agricultrels/data', [AgricultrelController::class, 'datatable'])->name('agricultrels.data')->can('agricultrels-view');
    Route::get('agricultrels/form', [AgricultrelController::class, 'form'])->name('agricultrels.form')->can('agricultrels-store');
    Route::get('agricultrels/update_status', [AgricultrelController::class, 'updateStatus'])->name('agricultrels.status')->can('agricultrels-status');
    Route::get('agricultrels', [AgricultrelController::class, 'index'])->name('agricultrels.index')->can('agricultrels-view');
    Route::post('agricultrels', [AgricultrelController::class, 'store'])->name('agricultrels.store')->can('agricultrels-store');
    Route::delete('agricultrels/{agricultrel}', [AgricultrelController::class, 'destroy'])->name('agricultrels.delete')->can('agricultrels-delete');

    Route::get('news/data', [NewsController::class, 'datatable'])->name('news.data')->can('news-view');
    Route::get('news/form', [NewsController::class, 'form'])->name('news.form')->can('news-store');
    Route::get('news/update_status', [NewsController::class, 'updateStatus'])->name('news.status')->can('news-status');
    Route::get('news', [NewsController::class, 'index'])->name('news.index')->can('news-view');
    Route::post('news', [NewsController::class, 'store'])->name('news.store')->can('news-store');
    Route::delete('news/{new}', [NewsController::class, 'destroy'])->name('news.delete')->can('news-delete');

    Route::get('articles/data', [ArticleController::class, 'datatable'])->name('articles.data')->can('articles-view');
    Route::get('articles/form', [ArticleController::class, 'form'])->name('articles.form')->can('articles-store');
    Route::get('articles/update_status', [ArticleController::class, 'updateStatus'])->name('articles.status')->can('articles-status');
    Route::get('articles', [ArticleController::class, 'index'])->name('articles.index')->can('articles-view');
    Route::post('articles', [ArticleController::class, 'store'])->name('articles.store')->can('articles-store');
    Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.delete')->can('articles-delete');

    Route::get('activities/data', [ActivityController::class, 'datatable'])->name('activities.data')->can('activities-view');
    Route::get('activities/form', [ActivityController::class, 'form'])->name('activities.form')->can('activities-store');
    Route::get('activities/update_status', [ActivityController::class, 'updateStatus'])->name('activities.status')->can('activities-status');
    Route::get('activities', [ActivityController::class, 'index'])->name('activities.index')->can('activities-view');
    Route::post('activities', [ActivityController::class, 'store'])->name('activities.store')->can('activities-store');
    Route::delete('activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.delete')->can('activities-delete');

    Route::get('albums/data', [AlbumController::class, 'datatable'])->name('albums.data')->can('albums-view');
    Route::get('albums/update_status', [AlbumController::class, 'updateStatus'])->name('albums.status')->can('albums-status');
    Route::get('albums', [AlbumController::class, 'index'])->name('albums.index')->can('albums-view');
    Route::post('albums', [AlbumController::class, 'store'])->name('albums.store')->can('albums-store');
    Route::get('albums/create', [AlbumController::class, 'create'])->name('albums.create')->can('albums-store');
    Route::get('albums/{album}', [AlbumController::class, 'show'])->name('albums.show')->can('albums-view');
    Route::delete('albums/{album}', [AlbumController::class, 'destroy'])->name('albums.delete')->can('albums-delete');

     Route::delete('/resources/{resource}', [ResourceController::class, 'destroy']);

      Route::get('programs/data', [ProgramController::class, 'datatable'])->name('programs.data')->can('programs-view');
    Route::get('programs/form', [ProgramController::class, 'form'])->name('programs.form')->can('programs-store');
    Route::get('programs/update_status', [ProgramController::class, 'updateStatus'])->name('programs.status')->can('programs-status');
    Route::get('programs', [ProgramController::class, 'index'])->name('programs.index')->can('programs-view');
    Route::post('programs', [ProgramController::class, 'store'])->name('programs.store')->can('programs-store');
    Route::delete('programs/{program}', [ProgramController::class, 'destroy'])->name('programs.delete')->can('programs-delete');

    Route::get('projects/data', [ProjectController::class, 'datatable'])->name('projects.data')->can('projects-view');
    Route::get('projects/form', [ProjectController::class, 'form'])->name('projects.form')->can('projects-store');
    Route::get('projects/update_status', [ProjectController::class, 'updateStatus'])->name('projects.status')->can('projects-status');
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index')->can('projects-view');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store')->can('projects-store');
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.delete')->can('projects-delete');

    Route::get('partners/data', [BrandController::class, 'datatable'])->name('brands.data')->can('brands-view');
    Route::get('partners/form', [BrandController::class, 'form'])->name('brands.form')->can('brands-store');
    Route::get('partners/update_status', [BrandController::class, 'updateStatus'])->name('brands.status')->can('brands-status');
    Route::get('partners', [BrandController::class, 'index'])->name('brands.index')->can('brands-view');
    Route::post('partners', [BrandController::class, 'store'])->name('brands.store')->can('brands-store');
    Route::delete('partners/{brand}', [BrandController::class, 'destroy'])->name('brands.delete')->can('brands-delete');

    Route::get('vedios/data', [VedioController::class, 'datatable'])->name('vedios.data')->can('vedios-view');
    Route::get('vedios/form', [VedioController::class, 'form'])->name('vedios.form')->can('vedios-store');
    Route::get('vedios/update_status', [VedioController::class, 'updateStatus'])->name('vedios.status')->can('vedios-status');
    Route::get('vedios/update_free', [VedioController::class, 'updateFree'])->name('vedios.free')->can('vedios-status');
    Route::get('vedios', [VedioController::class, 'index'])->name('vedios.index')->can('vedios-view');
    Route::post('vedios', [VedioController::class, 'store'])->name('vedios.store')->can('vedios-store');
    Route::delete('vedios/{vedio}', [VedioController::class, 'destroy'])->name('vedios.delete')->can('vedios-delete');

    Route::get('users/data', [UserController::class, 'datatable'])->name('users.data')->can('users-view');
    Route::get('users/form', [UserController::class, 'form'])->name('users.form')->can('users-store');
    Route::get('users/update_status', [UserController::class, 'updateStatus'])->name('users.status')->can('users-status');
    Route::get('users', [UserController::class, 'index'])->name('users.index')->can('users-view');
    Route::post('users', [UserController::class, 'store'])->name('users.store')->can('users-store');
    Route::delete('users/{slider}', [UserController::class, 'destroy'])->name('users.delete')->can('users-delete');



    Route::get('roles', [RoleController::class, 'index'])->name('roles.index')->can('roles-view');
    Route::get('roles/data', [RoleController::class, 'datatable'])->name('roles.data')->can('roles-view');;
    Route::post('roles', [RoleController::class, 'process'])->name('roles.process')->can('roles-store');
    Route::get('roles/form', [RoleController::class, 'form'])->name('roles.form')->can('roles-store');
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')->can('roles-delete');;


    Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('permissions/data', [PermissionController::class, 'datatable'])->name('permissions.data');
    Route::post('permissions', [PermissionController::class, 'process'])->name('permissions.process');
    Route::get('permissions/form', [PermissionController::class, 'form'])->name('permissions.form');
    Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');



    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit')->can('settings-edit');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update')->can('settings-edit');

    Route::post('ckeditor/upload', [CkeEditorController::class, 'uploadFile'])->name('ckeditor.upload');



});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('post_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



