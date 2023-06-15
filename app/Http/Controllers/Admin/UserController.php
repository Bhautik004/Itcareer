<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function viewProfile($id){
        $user = User::where('id',$id)->first();
        $data['states'] = State::get(["name","id"]);
        return view('admin.user.viewProfile',compact('user'),$data)->with('loader',true);
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


    public function update(Request $request)
    {

        $user = User::findOrFail($request->id);
        if($request->changeprofile == 1 ){
            $request->validate([
                'f_name'          => 'required',
                'm_name'          => 'required',
                'l_name'          => 'required',
                'email'                      => 'required|',
                'phone'                         => 'required|numeric|digits:10',
                'address'                => 'required',
                'dob'                             => 'required',
                'gender'                           => 'required|not_in:0',
                'state'                           => 'required|not_in:0',
                'city'                           => 'required|not_in:0',
                'alter_phone'                   => 'required|numeric|digits:10',
                'pincode'                   => 'required|numeric|digits:6',
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
                    'pincode'                  =>'Pincode should not be blank.'

                ]);

        }else{

            // $request->validate(  [
            //     'f_name'          => 'required',
            //     'm_name'          => 'required',
            //     'l_name'          => 'required',
            //     'email'                      => 'required|email|',
            //     'company_email'              => 'required|email',
            //     'phone'                         => 'required|numeric|digits:10',
            //     'current_address'                => 'required',
            //     'permanent_address'               => 'required',
            //     'DOB'                             => 'required',
            //     'gender'                           => 'required|not_in:0',
            //     'emergency_no_1'                   => 'required|numeric|digits:10',
            //     'relation_with_emergency_no_1'     => 'required|not_in:0',
            //     'status'                           =>'required',
            //     'married_status'       =>'required',
            //     'relation_with_emergency_name_1'       =>'required',
            //     ],
            //     [
            //         'f_name.required'=>'First name should not be blank.',
            //         'm_name.required'=>'Middle name should not be blank.',
            //         'l_name.required'=>'Last name should not be blank.',
            //         'email.required'=>'Personal Email id should not be blank.',
            //         'company_email.required'=>'Company Email id should not be blank.',
            //         'phone.required'=>'Phone No. should not be blank.',
            //         'pan_no.required'=>'Pan No. should not be blank.',
            //         'current_address.required'=>'Current address should not be blank.',
            //         'permanent_address.required'=>'Permanent address should not be blank.',
            //         'DOB.required'=>'Date of birth should not be blank.',
            //         'gender.required'=>'Gender should not be blank.',
            //         'emergency_no_1.required'=>'Emergency No. should not be blank.',
            //         'status.required'=>'Please Select Status',
            //         'married_status.required'=>'Please Select Married Status',
            //         'relation_with_emergency_name_1.required'=>'Emergency conatct name should not be blank.',
            //     ]);

        }


            if($request->profile_pic != ''){
                $path = public_path('images');
                //code for remove old file
                if($user->profile_pic != ''  && $user->profile_pic != null){
                     $file_old = $path.'/'.$user->profile_pic;
                     unlink($file_old);
                }
                //upload new file
                $fileName = time().'.'.$request->profile_pic->getClientOriginalExtension();

                $user->update(['profile_pic' => $fileName]);

                $request->profile_pic->move(public_path('images'), $fileName);

           }else{
                unset($request->profile_pic);
           }

            $dob = Carbon::parse($request->dob);
            $request['dob'] = $dob;
            $a = $request->all();
            unset($a['profile_pic']);
            $user->update($a);

            if($request->changeprofile == 1 ){
                return redirect()->back()->with('message', 'User Has Been updated successfully')->with('loader',true);
            }else{
                return response()->json(['status'=>"updated successfully"]);

            }
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
}
