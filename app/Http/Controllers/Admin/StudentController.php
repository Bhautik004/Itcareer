<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use App\Models\State;
use App\Models\StudentExam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Role;
use App\Models\Course;
use App\Models\StudentVerify;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Shared;
use PDF;
use App\Models\CertificateRecord;
use Illuminate\Support\Facades\Crypt;
use App\Exports\UsersExport; 
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $create_role = check_permission('student','index');
        $auth_id = Auth()->user()->id;
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $get_student_role_id = Role::where('slug','=','user')->pluck('id');
            if(auth()->user()->roles->slug == "super-admin"){
                $students = User::with('courseName')->where("role",'=',$get_student_role_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();

            }else{
                $branch_id = auth()->user()->branch_id;
                $students = User::with('courseName')->where("role",'=',$get_student_role_id)->where('branch_id',$branch_id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            }

            return view('admin.student.index', compact('students'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Replace with your desired prefix
        if(auth()->user()->roles->slug == "super-admin"){
            $branch_id = 0;
        }else{
            $branch_id = auth()->user()->branch_id;
        }

        $data['serialNumber'] = User::generateSerialNumber($branch_id);
        $data['states'] = State::get(["name","id"]);
        $data['courses'] = Course::get(["name","id"]);

        return view('admin.student.create',$data)->with('loader',true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
                'alter_phone'               => 'required|numeric|digits:10',
                'pincode'                   => 'required|numeric|digits:6',
                'last_qualification'        => 'required|',
                'course_id'                 => 'required|not_in:0',
                'id_proof'                  => 'required',
                'last_marksheet'            => 'required',
                'signature'                 => 'required',
                'profile_pic'                 => 'required',
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
                    'alter_phone.required'=>'Alternate phone should not be blank.',
                    'state'                  =>'Please Select State',
                    'city'                  =>'Please Select City',
                    'pincode'                  =>'Pincode should not be blank.',
                    'last_qualification'                  =>'Last Qualification should not be blank.',
                    'course_id'                  =>'Please Select Course',
                    'id_proof'                  =>'Please upload Id Proof',
                    'last_marksheet'                  =>'Please upload Last Marksheet',
                    'signature'                  =>'Please upload Signature',
                    'profile_pic'                  =>'Please upload Profile Photo',
            ]);

            $input = $request->all();

            if($request->profile_pic != ''){
                $fileName = $request->register_no.time().'.'.$request->profile_pic->getClientOriginalExtension();
                $request->profile_pic->move(public_path('images'), $fileName);
                $input['profile_pic'] =$fileName;
            }

            if($request->id_proof != ''){
                $fileName = $request->register_no.time().'.'.$request->id_proof->getClientOriginalExtension();
                $request->id_proof->move(public_path('id_proof'), $fileName);
                $input['id_proof'] =$fileName;
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
            $input['branch_id'] = auth()->user()->branch_id;
            $get_student_role_id = Role::select('id')->where('slug','=','user')->first();

            $input['role'] = $get_student_role_id->id;
            $input['password'] = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi" ; // password

            $student = User::create($input);

            return redirect()->route('students.index')
            ->with('message', 'Students Register successfully.')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $user = User::with('stateName','cityName')->where('id',$id)->first();
        
        return response()->json(['success' => 'Task Status successfully.','user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users,$id)
    { 
        $student = User::findOrFail($id);
         
        $data['states'] = State::get(["name","id"]);
        return view('admin.student.edit', compact('student'),$data)->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user = User::findOrFail($id);
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
                'alter_phone'               => 'required|numeric|digits:10',
                'pincode'                   => 'required|numeric|digits:6',
                'last_qualification'        => 'required|',
                'course_id'                 => 'required|not_in:0',
                
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
                    'alter_phone.required'=>'Alternate phone should not be blank.',
                    'state'                  =>'Please Select State',
                    'city'                  =>'Please Select City',
                    'pincode'                  =>'Pincode should not be blank.',
                    'last_qualification'                  =>'Last Qualification should not be blank.',
                    'course_id'                  =>'Please Select Course',
                    
            ]);        
                 

            $input = $request->all();

            if($request->profile_pic != ''){
                $fileName = $request->register_no.time().'.'.$request->profile_pic->getClientOriginalExtension();
                $request->profile_pic->move(public_path('images'), $fileName);
                $input['profile_pic'] =$fileName;
            }

            if($request->id_proof != ''){
                $fileName = $request->register_no.time().'.'.$request->id_proof->getClientOriginalExtension();
                $request->id_proof->move(public_path('id_proof'), $fileName);
                $input['id_proof'] =$fileName;
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

            $get_student_role_id = Role::select('id')->where('slug','=','user')->first();
            $input['role'] = $get_student_role_id->id;

            $user->update($input);
            
            return redirect()->route('students.index')
            ->with('message', 'Students Update successfully.')->with('loader',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        User::where('id',$id)->delete();

        return response()->json(array('success' => 'Student Delete successfully.'));
    }


    public function UserApprove(Request $request){
        $id = $request->get('id');
        $user = User::where('id',$id)->first();

        if($user->status == 1){
            User::where('id',$request->id)->update(['status'=>0]);
        }else{
            User::where('id',$request->id)->update(['status'=>1]);
        }
        return response()->json(array('success' => 'User Status Change successfully.'));

    }

    public function download(Request $request){
        // dd($request->id);
        $decryptedID = Crypt::decryptString($request->id);
        $data = User::with('branchName','courseName')->find($decryptedID)->toArray();
        
        return view('admin.onDemandExam.formDownload', compact('data'));

        // return view('admin.onDemandExam.formDownload', compact('data'));
    }

    public function verifyStudent(Request $request){

        $student_id = $request->student_id;
        $branch_id = $request->branch_id;
        $trx_no = $request->trx_no;

        StudentVerify::create([
            'student_id'=>$student_id,
            'trx_no'=>$trx_no,
            'trx_date'=>now(),
            'branch_id'=>$branch_id,
        ]);

        User::where('id',$student_id)->update(['verify_status'=>'1']);
        return redirect()->route('students.index')
            ->with('message', 'Students Verify successfully.')->with('loader',true);
        
    }

    public function verifyStudentList(){

        if(auth()->user()->roles->slug == "super-admin"){
            $branch_id = 0;
            $studentList =  StudentVerify::select('student_id')->where('status',0)->get();
            $students = User::with('verifyInfo')->whereIn('id',$studentList)->get();

        }else{
            $branch_id = auth()->user()->branch_id;
            $studentList =  StudentVerify::where('branch_id',$branch_id)->where('status',0)->get();
            $students = User::with('verifyInfo')->whereIn('id',$studentList)->get();
        }
        return view('admin.student.verifystudent', compact('students'));
    }

    public function generatePassword(Request $request){
        
        $selected_ids = $request->selected;

       
         if(auth()->user()->roles->slug == "super-admin"){
            $branch_id = 0;

        }else{
            $branch_id = auth()->user()->branch_id;  
        }

        foreach ($selected_ids as $k => $v) {
            $info = User::select('id','f_name')->where('id',$v)->where('verify_status',1)->get()->first();
           
            $password = $info['f_name'].'@'.$info['id'];
            StudentExam::create([
                'student_id'=>$info['id'],
                'student_user_id'=>$info['f_name'],
                'student_password'=>$password,
                'exam_status'=>0,
                'branch_id'=>$branch_id,
                'status'=>1
            ]);
            User::where('id',$v)->update(['verify_status'=>'2']);
            StudentVerify::where('student_id',$v)->update(['status'=>1]);
        }
        
        StudentVerify::whereNotIn('student_id',[$v])->update(['status'=>2]);
        
        return Excel::download(new UsersExport, 'Students.xlsx');

    }

    public function examSchedule(){

        if(auth()->user()->roles->slug == "super-admin"){
            $branch_id = 0;
            $studentList =  StudentVerify::select('student_id')->get();
            $students = User::with('verifyInfo','examInfo')->whereIn('id',$studentList)->get();

        }else{
            $branch_id = auth()->user()->branch_id;
            $studentList =  StudentVerify::where('branch_id',$branch_id)->get();
            $students = User::with('verifyInfo','examInfo')->whereIn('id',$studentList)->get();
        }
        return view('admin.student.examschedule', compact('students'));
    }
    
    


    function importData(Request $request)
    {

        $this->validate($request, [
        'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        $path = $request->file('select_file')->getRealPath();

    
        //  $data = Excel::load($path)->get();

     $data = Excel::toArray([],$path);

        if(count($data) > 0)
        {
            foreach($data as $key => $value)
            {

                
                foreach($value as $row)
                {
                    
                        $insert_data[] = array(
                                'register_no' =>$row['0'],
                                'student_name' => $row['1'],
                                'son_of_dauther_of_wife_of' => $row['2'],
                                'course_name' => $row['3'],
                                'medium' => $row['4'],
                                'center_name' =>$row['5'],
                                'center_address' =>$row['6'],
                                'area' => $row['7'],
                                'center_district' =>$row['8'],
                                'exam_date' =>Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['9'])),
                                'issue_date' =>Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['10'])),
                                'certificate_no' =>sprintf('%04d', $row['11']),
                                'grade' => $row['12'],
                                'photo_name' => $row['13'],
                                'birth_date' => Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['14'])),
                        );
                }

                if(!empty($insert_data))
                {
                    
                   
                    DB::table('certificate_records')->insert($insert_data);
                }

            }
            return back()->with('success', 'Excel Data Imported successfully.');
        }
    }

   
}
