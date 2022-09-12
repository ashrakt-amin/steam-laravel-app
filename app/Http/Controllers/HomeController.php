<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Team;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\WaysOfLearning;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::with(['contents','languages'])->where('view','true')
        ->orderBy('order', 'asc')->get();
        // dd($courses);
        $home = Home::all();
        $ways = WaysOfLearning::all();
        return view('user.index',compact('courses','home','ways'));
    }

    public function aboutUs(){
        $home = Home::all();

        return view('user.aboutUs',compact('home'));
    }

    public function courses(){
        $courses = Course::with(['contents','languages'])->where('view','true')
        ->orderBy('order', 'asc')->get();
        // dd($courses);
        return view('user.courses',compact('courses'));
    }

    public function Details($id){
        $courses = Course::with(['contents','languages','objectives'])->findOrFail($id);
        //  dd($courses);
        return view('user.coursesDetails',compact('courses'));
    }

    public function team(){
        $teams = Team::all();
        return view('user.team',compact('teams'));
    }

    public function accomplishments(){
        $home = Home::all();

        return view('user.accomplishments',compact('home'));
    }

    public function gallary(){
        return view('user.gallary');
    }

    public function contact(){
        return view('user.contact');
    }

   
}
