<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Questions;
use App\Models\Course;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $create_role = check_permission('questions','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $questions = Questions::orderBy('id','DESC')->get();
            return view('admin.questions.index', compact('questions'));
        }
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['courses'] = Course::get(["name","id"]);
       
        return view('admin.questions.create',$data)->with('loader',true);
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
            'course_id'          => 'required|not_in:0',
            'question'          => 'required|',
        ],
        [
            'course_id.required'=>'Please Select Course',
            'question.required'=>'Question should not be blank.',
          
        ]);
        $input = $request->all();
        $branch = Questions::create($input);

        return redirect()->route('questions.index')
        ->with('message', 'Question created successfully.')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions,$id)
    {

        $questions = Questions::findOrFail($id);
        $data['courses'] = Course::get(["name","id"]);
         
        return view('admin.questions.edit', compact('questions'),$data)->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions,$id)
    {
        //
         $question = Questions::findOrFail($id);

        
        $request->validate([
            'course_id'          => 'required|not_in:0',
            'question'          => 'required|',
        ],
        [
            'course_id.required'=>'Please Select Course',
            'question.required'=>'Question should not be blank.',
          
        ]);

        
            $a = $request->all();
            
        $question->update($a);
        return redirect()->route('questions.index')->with('message', 'Question Has Been updated successfully')->with('loader',true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Questions  $questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->get('id');
        Questions::where('id',$id)->delete();
        Option::where('question_id',$id)->delete();
        return response()->json(array('success' => 'Question Delete successfully.'));
    }


    function questionData(Request $request)
    {

        $this->validate($request, [
        'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        $path = $request->file('select_file')->getRealPath();


     $data = Excel::toArray([],$path);

        if(count($data) > 0)
        {
            foreach($data as $key => $value)
            {

                
                foreach($value as $row)
                {   
                        $insert_data[] = array(
                                'course_id' =>$row['0'],
                                'question' => $row['1'],
                        );
                }

                if(!empty($insert_data))
                {
                    DB::table('questions')->insert($insert_data);
                }

            }
            return back()->with('success', 'Excel Data Imported successfully.');
        }
    }
}
