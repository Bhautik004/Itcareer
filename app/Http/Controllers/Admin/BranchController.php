<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Branch;
use App\Models\State;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $create_role = check_permission('branch','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $branchs = Branch::orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            return view('admin.branch.index', compact('branchs'));
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
        $data['states'] = State::get(["name","id"]);
        return view('admin.branch.create',$data)->with('loader',true);
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
            'email'          => 'required|email|unique:branches,email',
            'phone'          => 'required|numeric|digits:10',
            'address'          => 'required|',
            'state'          => 'required|not_in:0',
            'city'          => 'required|not_in:0',
            'area'          => 'required|',
            'branch_code'    => 'required|',
        ],
        [
            'name.required'=>'Branch name should not be blank.',
            'email.required'=>'Email id should not be blank.',
            'phone.required'=>'Phone No. should not be blank.',
            'address.required'=>'Address should not be blank.',
            'state.required'=>'Please select state',
            'city.required'=>'Please Select District',
            'area.required'=>'Area should not be blank.',
            'branch_code.required'=>'Branch Code should not be blank.',
        ]);
        $input = $request->all();
        $branch = Branch::create($input);

        return redirect()->route('branchs.index')
        ->with('message', 'Branch created successfully.')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        $branch = Branch::findOrFail($branch->id);
         
        $data['states'] = State::get(["name","id"]);
        return view('admin.branch.edit', compact('branch'),$data)->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        //

        $branch = Branch::findOrFail($branch->id);

        $request->validate([
            'name'          => 'required',
            'email'          => 'required|email|unique:branches,email',
            'phone'          => 'required|numeric|digits:10',
            'address'          => 'required|',
            'state'          => 'required|not_in:0',
            'city'          => 'required|not_in:0',
            'area'          => 'required|',
            'branch_code'    => 'required|',

        ],
        [
            'name.required'=>'Branch name should not be blank.',
            'email.required'=>'Email id should not be blank.',
            'phone.required'=>'Phone No. should not be blank.',
            'address.required'=>'Address should not be blank.',
            'state.required'=>'Please select state',
            'city.required'=>'Please Select District',
            'area.required'=>'Area should not be blank.',
            'branch_code.required'=>'Branch Code should not be blank.',

        ]);


        $branch->update($request->all());
        return redirect()->route('branchs.index')->with('message', 'Branch Has Been updated successfully')->with('loader',true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        Branch::where('id',$id)->delete();
        return response()->json(array('success' => 'Branch Delete successfully.'));
    }

     public function branchApprove(Request $request){
        $id = $request->get('id');
        $branch = Branch::where('id',$id)->first();

        if($branch->status == 1){
            Branch::where('id',$request->id)->update(['status'=>0]);
        }else{
            Branch::where('id',$request->id)->update(['status'=>1]);
        }
        return response()->json(array('success' => 'Branch Status Change successfully.'));

    }
}
