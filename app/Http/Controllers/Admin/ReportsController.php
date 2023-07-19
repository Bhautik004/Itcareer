<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Reports;
use App\Models\Course;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }

    public function courseWiseReports(){
        
        $data['courses'] = Course::get(["name","id"]);
        $get_student_role_id = Role::where('slug','=','user')->pluck('id');
        $students = User::with('courseName')->where("role",'=',$get_student_role_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
        return view('admin.reports.courseWise',$data,compact('students'))->with('loader',true); 
    }

    
    public function durationWiseReports(){
        
        $data['courses'] = Course::get(["name","id"]);
        $get_student_role_id = Role::where('slug','=','user')->pluck('id');
        $students = User::with('courseName')->where("role",'=',$get_student_role_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
        return view('admin.reports.durationWise',$data,compact('students'))->with('loader',true); 
    }
}
