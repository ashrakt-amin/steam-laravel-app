<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index',['teams'=>$teams]);
        
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
        $Data= $request->except(['_token','_method','image']);
        if($image = $request->file('image')) {
        $file_name = time().Str::slug($request->input('en')['name']).".".$image->getClientOriginalExtension();
        $path = public_path('dashboard/img/team');
        $request->image->move($path, $file_name);
        $Data['image'] = $file_name;
    }
       Team::create($Data);
       return redirect()->route('allteam.index')
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
        // dd($request);
        $teams = Team::findOrFail($id);
        //  dd( $course);
        $Data= $request->except(['_token','_method','image']);

        if ($image = $request->file('image')) {
            if ($teams->image != null && File::exists('dashboard/img/team/'.$teams->image)){
                unlink('dashboard/img/team/'.$teams->image);
            }
            $file_name = time().Str::slug($request->input('en')['name']).".".$image->getClientOriginalExtension();
            $path = public_path('dashboard/img/team');
            $request->image->move($path, $file_name);
            $Data['image'] = $file_name;
        }
            $teams->update($Data);
            return redirect()->route('allteam.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team =Team::findOrFail($id);
        if(isset($team->image)){
        Storage::disk('public')->delete($team->image);
        }
        $team->delete();
        return redirect()->route('allteam.index');
    }
    
}
