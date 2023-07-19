<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $create_role = check_permission('course','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $courses = Course::orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            return view('admin.course.index', compact('courses'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create')->with('loader',true);
        
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
            'name'          => 'required',
            'duration'          => 'required|',
            'content'          => 'required|',
            'course_img'          => 'required|',
        ],
        [
            'name.required'=>'Course name should not be blank.',
            'duration.required'=>'Course Duration should not be blank.',
            'content.required'=>'Course Content should not be blank.',
            'course_img.required'=>'Please select Course Image ',
            
        ]);
        $input = $request->all();
        

        if($request->course_img != ''){
            $fileName = $request->name.time().'.'.$request->course_img->getClientOriginalExtension();
            $request->course_img->move(public_path('course_img'), $fileName);
            $input['course_img'] =$fileName;
        }
        $course = Course::create($input);

        return redirect()->route('courses.index')
            ->with('message', 'Course Added successfully.')->with('loader',true);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        $course = Course::findOrFail($course->id);
         
        return view('admin.course.edit', compact('course'))->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //

        $course = Course::findOrFail($course->id);

         $request->validate([
            'name'          => 'required',
            'duration'          => 'required|',
            'content'          => 'required|',
           
        ],
        [
            'name.required'=>'Course name should not be blank.',
            'duration.required'=>'Course Duration should not be blank.',
            'content.required'=>'Course Content should not be blank.', 
        ]);

         if($request->course_img != ''){
                $path = public_path('images');
                //code for remove old file
                if($course->course_img != ''  && $course->course_img != null){
                     $file_old = $path.'/'.$course->course_img;
                     unlink($file_old);
                }
                //upload new file
                $fileName = time().'.'.$request->course_img->getClientOriginalExtension();

                $course->update(['course_img' => $fileName]);

                $request->course_img->move(public_path('course_img'), $fileName);

           }else{
                unset($request->course_img);
           }
            $a = $request->all();
            unset($a['course_img']);
           
        $course->update($a);
        return redirect()->route('courses.index')->with('message', 'Course Has Been updated successfully')->with('loader',true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->get('id');
        Course::where('id',$id)->delete();
        return response()->json(array('success' => 'Course Delete successfully.'));
    }

    
    public function courseApprove(Request $request){
        $id = $request->get('id');
        $course = Course::where('id',$id)->first();

        if($course->status == 1){
            Course::where('id',$request->id)->update(['status'=>0]);
        }else{
            Course::where('id',$request->id)->update(['status'=>1]);
        }
        return response()->json(array('success' => 'Course Status Change successfully.'));

    }

    public function courseSearch(Request $request)
    {
        
        $duration = $request->testId;
         $course = Course::where('duration','=',$duration)->get();

            // return json_encode($course);

            
    $html = view('frontend.partical.course')->with(compact('course'))->withDetails($course,$request)->render();
    return response()->json(['success' => true, 'html' => $html]);
        // if(count($course) > 0)
            // return view('frontend.courses.index',compact('request'))->withDetails($course,$request);
            
        // else return view ('frontend.courses.index')->withMessage('No Details found. Try to search again !');

    }
}
