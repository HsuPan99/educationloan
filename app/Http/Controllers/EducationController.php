<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education_Detail;
// use App\Student_Info;



class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations=Education_Detail::all();

        return view('backend.educations.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.educations.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
           
        //     'rollno' =>'required',
        //     'university' =>'required',
        //     'year' =>'required',
        //     'semester' =>'required',
             

        // ]);
        
        // //Data insert
        // $education=new Education_Detail;
        
        // $education->rollno=$request->rollno;
        // $education->university=$request->university;
        // $education->year=$request->year;
        // $education->semester=$request->semester;
        
        // $education->save();
        // //Redirect
        // return redirect()->route('educations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $education=Education_Detail::find($id);

        return view('backend.educations.show',compact('education'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
