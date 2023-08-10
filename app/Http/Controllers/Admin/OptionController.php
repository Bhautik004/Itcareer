<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Option;
use App\Models\Questions;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $create_role = check_permission('option','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $options = Option::select('question_id', DB::raw('GROUP_CONCAT(option_text) as options'),DB::raw('GROUP_CONCAT(points) as points'))
                    ->groupBy('question_id')
                    ->get();
            return view('admin.option.index', compact('options'));
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
        $data['quetions'] = Questions::get(["question","id"]);
       
        return view('admin.option.create',$data)->with('loader',true);
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
            'question_id'          => 'required|not_in:00',
            'points'          => 'required|',
            'option_text'          => 'required|',
        ],
        [
            'question_id.required'=>'Please Select Question',
            'points.required'=>'Point should not be blank.',
            'option_text.required'=>'Option should not be blank.',
          
        ]);
        $input = $request->all();
        $branch = Option::create($input);

        return redirect()->route('options.index')
        ->with('message', 'Option created successfully.')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //

         $options = Option::findOrFail($option->id);
        $data['questions'] = Questions::get(["question","id"]);
         
        return view('admin.option.edit', compact('options'),$data)->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        //
         $option = Option::findOrFail($option->id);

         $request->validate([
            'question_id'          => 'required|not_in:00',
            'points'          => 'required|',
            'option_text'          => 'required|',
        ],
        [
            'question_id.required'=>'Please Select Question',
            'points.required'=>'Point should not be blank.',
            'option_text.required'=>'Option should not be blank.',
          
        ]);
           $a = $request->all();
            
        $option->update($a);
        return redirect()->route('options.index')->with('message', 'Options Has Been updated successfully')->with('loader',true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
         $id = $request->get('id');
        Option::where('id',$id)->delete();
        return response()->json(array('success' => 'Option Delete successfully.'));
    }

    function Optioninport(Request $request)
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
                                'option_text' => $row['0'],
                                'points' =>$row['1'],
                                'question_id' => $row['2'],
                        );
                }

                if(!empty($insert_data))
                {
                    DB::table('options')->insert($insert_data);
                }

            }
            return back()->with('success', 'Excel Data Imported successfully.');
        }
    }
}
