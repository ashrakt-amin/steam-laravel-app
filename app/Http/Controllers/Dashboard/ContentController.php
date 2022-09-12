<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseContent;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //  $locale=App::getLocale();
        // $contents =ContentTranslation::where('locale',"=",$locale)->get();
        $contents =CourseContent::all();
       

       //  dd($contents);
        return view('dashboard.contents.index',['contents'=>$contents]);
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
    public function store(Request $request )
    {
        //  dd($request);

  $requestData=$request->except(['_token','_method']);
    // return $requestData;
  CourseContent::create($requestData);
        session()->flash('add');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function update(Request $request, $id)
    {
       // dd($request);

            $requestData=$request->except(['_token','_method']);
          //   dd($requestData);
        $content =CourseContent::findOrFail($id);
        $content->update($requestData);
        session()->flash('edit');
        return redirect()->back();
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = CourseContent::findOrFail($id);
         $content->delete();
        return redirect()->back();

    }
}
