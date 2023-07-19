<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $create_role = check_permission('franchise','index');
        
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $franchises = franchise::orderBy('status', 'DESC')->orderBy('id','DESC')->get();
            return view('admin.franchise.index', compact('franchises'));
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
            'prop_name'          => 'required',
            'f_name'          => 'required|',
            'dob'          => 'required|',
            'phone'          => 'required|numeric|digits:10',
            'email'          => 'required|',
            'center_name'          => 'required|',
            'center_address'          => 'required|',
            'state'          => 'required||not_in:0',
            'city'          => 'required||not_in:0',
            'pincode'          => 'required|numeric|digits:6',
            'ref_by'          => 'required|',
        ],
        [
            'prop_name.required'=>'Prop name should not be blank.',
            'f_name.required'=>'Father name should not be blank.',
            'dob.required'=>'Please select Date of birth',
            'phone.required'=>'Phone should not be blank.',
            'email.required'=>'Email should not be blank.',
            'center_name.required'=>'Center Name should not be blank.',
            'center_address.required'=>'Center Address should not be blank.',
            'state'                  =>'Please Select State',
            'city'                  =>'Please Select City',
            'pincode'                  =>'Pincode should not be blank.',
            'ref_by.required'=>'Reference By should not be blank.',
        ]);
        $input = $request->all();
        

        $franchise = franchise::create($input);

        return redirect()->route('franchise.index')
            ->with('message', 'Franchise Form submit successfully.')->with('loader',true);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function show(franchise $franchise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function edit(franchise $franchise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, franchise $franchise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function destroy(franchise $franchise)
    {
        //
    }
}
