<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\studentEnquiry;
use Illuminate\Http\Request;

class StudentEnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $create_role = check_permission('studentEnquiry','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{

            if(auth()->user()->roles->slug == "super-admin"){
                $studentenquirys = studentEnquiry::orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }else{
                $branch_id = auth()->user()->branch_id;
                $studentenquirys = studentEnquiry::where('branch_id','=',$branch_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }

            return view('admin.studentenquiry.index', compact('studentenquirys'));
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
         $request->validate([
            'surname'          => 'required',
            'name'          => 'required',
            'f_name'          => 'required|',
            'dob'          => 'required|',
            'phone'          => 'required|numeric|digits:10',
            'address'          => 'required|',
            'state'          => 'required||not_in:0',
            'city'          => 'required|not_in:0',
            'pincode'          => 'required|numeric|digits:6',
            'education'          => 'required|',
            'branch_id'          => 'required|not_in:0',
            'course_id'          => 'required|not_in:0',
        ],
        [
            'surname.required'=>'Surname should not be blank.',
            'name.required'=>'Name should not be blank.',
            'f_name.required'=>'Father name should not be blank.',
            'dob.required'=>'Please select Date of birth',
            'phone.required'=>'Phone should not be blank.',
            'address.required'=>'Address should not be blank.',
            'state'                  =>'Please Select State',
            'city'                  =>'Please Select City',
            'pincode'                  =>'Pincode should not be blank.',
            'education.required'=>'Education By should not be blank.',
            'branch_id.required'=>'Please Select Nearest Center',
            'course_id.required'=>'Please Select Course',
        ]);
        $input = $request->all();
        
        if($request->admission_form == 1){
            $input['admission_form'] = 1;
            $studentEnquiry = studentEnquiry::create($input);
        }else{
             $studentEnquiry = studentEnquiry::create($input);
        }

        return redirect()->route('form.index')
            ->with('message', 'Student Form submit successfully.')->with('loader',true);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentEnquiry  $studentEnquiry
     * @return \Illuminate\Http\Response
     */
    public function show(studentEnquiry $studentEnquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentEnquiry  $studentEnquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(studentEnquiry $studentEnquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentEnquiry  $studentEnquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studentEnquiry $studentEnquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentEnquiry  $studentEnquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentEnquiry $studentEnquiry)
    {
        //
    }
}
