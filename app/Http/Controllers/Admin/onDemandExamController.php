<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\onDemandExam;
use App\Models\Course;
use App\Models\Branch;
use App\Models\State;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use PDF;

use Illuminate\Support\Facades\Redirect;
class onDemandExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $create_role = check_permission('onDemandExam','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
             if(auth()->user()->roles->slug == "super-admin"){
                $onDemandExam = onDemandExam::orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }else{
                $branch_id = auth()->user()->branch_id;
                $onDemandExam = onDemandExam::where('branch_id','=',$branch_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }

            return view('admin.onDemandExam.index', compact('onDemandExam'));
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
        $prefix = 'ODE'; // Replace with your desired prefix
        $data['serialNumber'] = onDemandExam::generateSerialNumber();
        $data['states'] = State::get(["name","id"]);
        $data['courses'] = Course::get(["name","id"]);
        $data['branches'] = Branch::get(["name","id"]);
        return view('admin.onDemandExam.create',$data)->with('loader',true);
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
                'f_name'                    => 'required',
                'm_name'                    => 'required',
                'l_name'                    => 'required',
                'email'                     => 'required|',
                'phone'                     => 'required|numeric|digits:10',
                'address'                   => 'required',
                'dob'                       => 'required',
                'gender'                    => 'required|not_in:0',
                'state'                     => 'required|not_in:0',
                'city'                      => 'required|not_in:0',
                'pincode'                   => 'required|numeric|digits:6',
                'last_qualification'        => 'required|',
                'course_id'                 => 'required|not_in:0',
                'last_marksheet'            => 'required',
                'signature'                 => 'required',
                'profile_pic'                 => 'required',
                
                'board_name'                 => 'required',
                'passing_year'                 => 'required',
                'percentage'                 => 'required',
                'exam_date'                 => 'required',
                'trx_no'                 => 'required',

                ],
                [
                    'f_name.required'=>'First name should not be blank.',
                    'm_name.required'=>'Middle name should not be blank.',
                    'l_name.required'=>'Last name should not be blank.',
                    'email.required'=>'Email id should not be blank.',
                    'phone.required'=>'Phone No. should not be blank.',
                    'address.required'=>'Address should not be blank.',
                    'dob.required'=>'Date of birth should not be blank.',
                    'gender.required'=>'Gender should not be blank.',
                    
                    'state'                  =>'Please Select State',
                    'city'                  =>'Please Select City',
                    'pincode'                  =>'Pincode should not be blank.',
                    'last_qualification'                  =>'Last Qualification should not be blank.',
                    'course_id'                  =>'Please Select Course',
                    
                    'last_marksheet'                  =>'Please upload Last Marksheet',
                    'signature'                  =>'Please upload Signature',
                    'profile_pic'                  =>'Please upload Profile Photo',

                    'board_year'                  =>'Board Name should not be blank.',
                    'passing_year'                  =>'Passing Year should not be blank.',
                    'percentage'                  =>'Percentage should not be blank.',
                    'exam_date'                  =>'Exam Date should not be blank.',
                    'trx_no'                  =>'Transaction should not be blank.',
            ]);

            $input = $request->all();

            if(auth()->user()->roles->slug == "super-admin"){
                $input['branch_id'] = 0;
            }else{
                 $input['branch_id'] =auth()->user()->branch_id;
            }

            if($request->profile_pic != ''){
                $fileName = $request->register_no.time().'.'.$request->profile_pic->getClientOriginalExtension();
                $request->profile_pic->move(public_path('images'), $fileName);
                $input['profile_pic'] =$fileName;
            }

            
            if($request->last_marksheet != ''){
                $fileName = $request->register_no.time().'.'.$request->last_marksheet->getClientOriginalExtension();
                $request->last_marksheet->move(public_path('last_marksheet'), $fileName);
                $input['last_marksheet'] =$fileName;
            }

            
            if($request->signature != ''){
                $fileName = $request->register_no.time().'.'.$request->signature->getClientOriginalExtension();
                $request->signature->move(public_path('signature'), $fileName);
                $input['signature'] =$fileName;
            }

            $dob_u = Carbon::parse($request->dob);
            $input['dob'] = $dob_u;

            $exam_date = Carbon::parse($request->exam_date);
            $input['exam_date'] = $exam_date;
            
            $student = onDemandExam::create($input);

            return redirect()->route('onDemandExams.index')
            ->with('message', 'Exam Register successfully.')->with('loader',true);
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

    public function formDownoad(Request $request)
    {   
        $decryptedID = Crypt::decryptString($request->id);
        $data = onDemandExam::with('courseName','branchName')->find($decryptedID)->toArray();

        return view('admin.onDemandExam.formDownload', compact('data'));

        // //share data to view
        // view()->share('data', $data);
        // $pdf = PDF::loadView('admin.onDemandExam.formDownload', $data)->setPaper('a4')->setWarnings(false)->save('myfile.pdf');

        // return $pdf->download($data['f_name'].".pdf");

        // return Redirect::to('/admin/onDemandExams');
        // return $pdf->download('FormDownload.pdf');
        

    }

}
