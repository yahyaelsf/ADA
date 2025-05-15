<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Brand;
use App\Models\Program;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Vedio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $sliders = Slider::where('b_enabled' , 1)->get();
        $activities = Activity::skip(1)->take(3)->get();
        $last_activity = Activity::first();
        $projects = Project::where('b_enabled' , 1)->get();
        $vedios = Vedio::skip(1)->take(3)->get();
        $last_vedio = Vedio::first();
        $brands = Brand::where('b_enabled' , 1)->get();
        // return $activities;
        return view('front.home',compact(['sliders','activities','last_activity','projects','vedios' ,'last_vedio','brands']));
    }
     public function about(){
        return view('front.about');
    }
    public function vision(){
        return view('front.vision');
    }
     public function mission(){
        return view('front.mission');
    }
     public function value(){
        return view('front.value');
    }
     public function news(){
        return view('front.news');
    }
     public function article(){
        $first_article = Article::first();
        $first_three_articles = Article::skip(1)->take(3)->get();
        $sec_three_articles = Article::skip(4)->take(3)->get();
        $last_article = Article::skip(7)->first();
        return view('front.article',compact(['first_article','first_three_articles','sec_three_articles','last_article']));
    }
     public function project(){
        $projects = Project::where('b_enabled' , 1)->get();
        return view('front.project',compact('projects'));
    }
     public function program(){
         $programs = Program::where('b_enabled' , 1)->get();
        return view('front.program',compact('programs'));
    }
     public function governance(){
        return view('front.governance');
    }
     public function boardOfDirectore(){
        return view('front.board-of-directore');
    }
     public function partners(){
        $brands = Brand::where('b_enabled' , 1)->get();
        return view('front.partners',compact('brands'));
    }
}
