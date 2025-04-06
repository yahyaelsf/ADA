<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Brand;
use App\Models\News;
use App\Models\Program;
use App\Models\Project;
use App\Models\Vedio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $pageTitle = trans('navigation.dashboard');
        $pageDescription = trans('navigation.dashboard');
        $news = News::count();
        $articles = Article::count();
        $activities = Activity::count();
        $vedios = Vedio::count();
        $programs = Program::count();
        $projects = Project::count();
        $partners = Brand::count();


        return view('admin.home', compact('pageTitle', 'pageDescription','news','vedios','articles','activities','programs' , 'projects','partners'));
    }
}
