<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Objective;
use Illuminate\Http\Request;
use App\Models\CourseObjective;
use App\Http\Controllers\Controller;

class ObjectiveController extends Controller
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
        $objectives =CourseObjective::all();
       //  dd($contents);
        return view('dashboard.objectives.index',['objectives'=>$objectives]);
    
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
         // dd($request);

        
      
     $requestData=$request->except(['_token','_method']);
    //   dd($requestData);
    CourseObjective::create($requestData);
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
    public function update(Request $request, $id)
    {
       
            $requestData=$request->except(['_token','_method']);
              //   dd($requestData);
            $objective =CourseObjective::findOrFail($id);
            $objective->update($requestData);
            session()->flash('edit');
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseObjective $objective)
    {
        
            $objective->delete();
            session()->flash('delete');
            return redirect()->back();
    
        
    }
}
