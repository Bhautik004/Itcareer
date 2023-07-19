<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\studentAdmission;
use App\Models\studentEnquiry;
use Illuminate\Http\Request;

class StudentAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $create_role = check_permission('studentAdmission','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{

            if(auth()->user()->roles->slug == "super-admin"){
                $studentenquirys = studentEnquiry::where('admission_form','=',1)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }else{
                $branch_id = auth()->user()->branch_id;
                $studentenquirys = studentEnquiry::where('admission_form','=',1)->where('branch_id','=',$branch_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }

            return view('admin.studentadmission.index', compact('studentenquirys'));
        }
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
     * @param  \App\Models\studentAdmission  $studentAdmission
     * @return \Illuminate\Http\Response
     */
    public function show(studentAdmission $studentAdmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentAdmission  $studentAdmission
     * @return \Illuminate\Http\Response
     */
    public function edit(studentAdmission $studentAdmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentAdmission  $studentAdmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentAdmission $studentAdmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentAdmission  $studentAdmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentAdmission $studentAdmission)
    {
        //
    }
}
