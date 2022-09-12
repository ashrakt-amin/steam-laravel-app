<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use App\Models\Content;
use App\Models\Language;
use App\Models\Objective;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseContent;
use App\Models\CourseObjective;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $courses = Course::all();
         $languages=Language::all();
         return view('dashboard.courses.index',['courses'=>$courses,'languages'=>$languages]);
    }
    
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $Data= $request->except(['_token','_method','image','name']);
        if($image = $request->file('image')) {
        $file_name = Str::slug($request->input('en')['title']).".".$image->getClientOriginalExtension();
        $path = public_path('dashboard/img/courses');
        $request->image->move($path, $file_name);
        $Data['image'] = $file_name;
    }
       $courses =Course::create($Data);
       $languages = $request->input('name');
       $courses->languages()->sync($languages);
       return redirect()->route('allcourses.index')
       ->with('success','course created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Course::with(['contents','objectives'])->findOrFail($id);
        //  dd($course);
        return view('dashboard.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($request);
        $course = Course::findOrFail($id);
        //  dd( $course);
        $Data= $request->except(['_token','_method','image','name']);

        if ($image = $request->file('image')) {
            if ($course->image != null && File::exists('dashboard/img/courses/'.$course->image)){
                unlink('dashboard/img/courses/'.$course->image);
            }
            $file_name = Str::slug($request->input('en')['title']).".".$image->getClientOriginalExtension();
            $path = public_path('dashboard/img/courses');
            $request->image->move($path, $file_name);
            $Data['image'] = $file_name;
        }
            $course->update($Data);
            $languages = $request->input('name');
            //dd($languages);
            $course->languages()->sync($languages); 
            return redirect()->route('allcourses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course =Course::findOrFail($id);
        if(isset($course->image)){
        Storage::disk('public')->delete($course->image);
        }
        $course->delete();
        return redirect()->route('allcourses.index');
    }

   
}
