<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\studentEnquiry;
use App\Models\StudentExam;
use App\Models\Questions;
use App\Models\Option;
use App\Models\Course;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;
use Hash;
use Auth;
use Session;
use App\Notifications\SendResultsPdfNotification;
use Illuminate\Support\Facades\File;
use PDF;

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

    public function ExamData(Request $request){
       
        $request->validate([
            'student_user_id'          => 'required',
            'student_password'          => 'required|',
        ],
        [
            'student_user_id.required'=>'User Id should not be blank.',
            'student_password.required'=>'Password should not be blank.', 
        ]);

        $user_id = $request->student_user_id;
        $password =  $request->student_password;

       
       
       

        if (auth()->attempt(array('username' => $user_id, 'password' => $password))) {

                $getUserRole = StudentExam::where('student_user_id',$user_id)->where('student_password',$password)->get();
                $encrypted = Crypt::encryptString($getUserRole[0]->student_id);          
                return redirect()->route('questionPaper',$encrypted);
        }else{

            return back();
        }

        // $getUserRole = StudentExam::where('student_user_id',$user_id)->where('student_password',$password)->get();
        // $encrypted = Crypt::encryptString($getUserRole[0]->student_id);
        // if ($getUserRole->isNotEmpty()) {
        //     // return view('frontend.exam.questionAns');
        //       return redirect()->route('questionPaper',$encrypted);
        // }else {
        //     return back();
        // }        
    }

    public function questionPaper($id){

        $student_id = Crypt::decryptString($id);
        // $categories = Course::with(['categoryQuestions' => function ($query) {
        //         $query->inRandomOrder()
        //             ->with(['questionOptions' => function ($query) {
                        
        //             }]);
        //     }])
        //     ->whereHas('categoryQuestions')
        //     ->get();

        $questions = Questions::with(['questionOptions' => function ($query) {
                        // $query->inRandomOrder();
                    }])->whereHas('questionOptions')->get();

        // dd($question);

        return view('frontend.exam.questionAns',compact('questions'));
    }


    public function Examstore(Request $request)
    {
        $options = Option::find(array_values($request->input('questions')));

      

        $result = auth()->user()->userResults()->create([
            'total_points' => $options->sum('points')
        ]);


        $questions = $options->mapWithKeys(function ($option) {
            return [$option->question_id => [
                        'option_id' => $option->id,
                        'points' => $option->points
                    ]
                ];
            })->toArray();

        

        $result->questions()->sync($questions);


        return redirect()->route('client.results.show', $result->id);
    }


    public function show($result_id)
    {
        $result = Result::whereHas('user', function ($query) {
                $query->whereId(auth()->id());
            })->findOrFail($result_id);
        
        return view('frontend.exam.result', compact('result'));
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('main')->with('message', 'loged out !');
    }

    public function send($result_id)
    {
        $result = Result::whereHas('user', function ($query) {
                $query->whereId(auth()->id());
            })->findOrFail($result_id);
        $filename = $result->id . '.pdf';
        $pdf = PDF::loadView('frontend.exam.pdf', compact('result'));
        $pdf->save(storage_path($filename));

        auth()->user()->notify(new SendResultsPdfNotification($result));
        File::delete(storage_path($filename));

        return redirect()->route('client.results.show', $result->id)->withStatus('Your test result has been sent successfully!');
    }
}
