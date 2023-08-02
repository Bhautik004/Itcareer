<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Manager;
use App\Models\Branch;
use App\Models\State;
use Illuminate\Support\Carbon;
use App\Models\Role;
use Mail;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $create_role = check_permission('manager','index');
        if($create_role == 0){
            return redirect()->back()->with('message','Permissions insuffisantes !')->with('message_type','warning');
        }else{
            $get_manager_role_id = Role::select('id')->where('slug','=','manager')->first();
            $managers = User::with('branchs')->where('role','=',$get_manager_role_id->id)->orderBy('status', 'DESC')->orderBy('id','DESC')->get();

            return view('admin.manager.index', compact('managers'));
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
        $data['branchs'] = Branch::get(["name","id"]);
        return view('admin.manager.create',$data)->with('loader',true);
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
                'gender'                    => 'required|not_in:0',
                'state'                     => 'required|not_in:0',
                'city'                      => 'required|not_in:0',
                'alter_phone'               => 'required|numeric|digits:10',
                'pincode'                   => 'required|numeric|digits:6',
                'branch_id'                 => 'required|not_in:0',
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
                    'branch_id'                  =>'Please select Branch',
                ]);

            $input = $request->all();

            $branch_name = Branch::select('name')->where('id',$input['branch_id'])->pluck('name');
            $dob_u = Carbon::parse($request->dob);
            $input['dob'] = $dob_u;
            $get_manager_role_id = Role::select('id')->where('slug','=','manager')->first();
            $input['role'] = $get_manager_role_id->id;
            $input['password'] = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi" ; // password
            $managers = User::create($input);


            $name = $input['f_name']." ".$input['l_name'];
            $email = $input['email'];
            $password = "password";    
            $company_email = "itcareer.help4you@gmail.com";
            $title = "You are selected for our Branch Head";
            $brnchname = $branch_name[0];

            Mail::send('admin.email.manager', ['title'=>$title,'name'=>$name,'email'=>$email,'password'=>$password,'brnchname'=>$brnchname], 
                function ($message) use ($name,$email,$password,$title,$company_email,$brnchname){
                $message->from($company_email);
                $message->to($email);
                $message->subject('Congratulations '.$name);
            });

            return redirect()->route('managers.index')
            ->with('message', 'Manager Register successfully.')->with('loader',true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        $user = User::with('stateName','cityName','branchs')->where('id',$id)->first();
   
        return response()->json(['success' => 'Task Status successfully.','user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users,$id)
    { 
        $manager = User::findOrFail($id);
         
        $data['states'] = State::get(["name","id"]);
        $data['branchs'] = Branch::get(["name","id"]);
        return view('admin.manager.edit', compact('manager'),$data)->with('loader',true);
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
        $user = User::findOrFail($id);
        $request->validate([
                'f_name'                    => 'required',
                'm_name'                    => 'required',
                'l_name'                    => 'required',
                'email'                     => 'required|',
                'phone'                     => 'required|numeric|digits:10',
                'address'                   => 'required',
                'gender'                    => 'required|not_in:0',
                'state'                     => 'required|not_in:0',
                'city'                      => 'required|not_in:0',
                'alter_phone'               => 'required|numeric|digits:10',
                'pincode'                   => 'required|numeric|digits:6',
                'branch_id'                 => 'required|not_in:0',
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
                    'branch_id'                  =>'Please select Branch',
                ]);

            $input = $request->all();

            $dob_u = Carbon::parse($request->dob);
            $input['dob'] = $dob_u;

            $get_manager_role_id = Role::select('id')->where('slug','=','manager')->first();
            $input['role'] = $get_manager_role_id->id;
            $user->update($input);
            
            return redirect()->route('managers.index')
            ->with('message', 'Manager Update successfully.')->with('loader',true);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->get('id');
        User::where('id',$id)->delete();

        return response()->json(array('success' => 'Manager Delete successfully.'));
    }

    public function UserApprove(Request $request){
        $id = $request->get('id');
        $user = User::where('id',$id)->first();

        if($user->status == 1){
            User::where('id',$request->id)->update(['status'=>0]);
        }else{
            User::where('id',$request->id)->update(['status'=>1]);
        }
        return response()->json(array('success' => 'Manager Status Change successfully.'));

    }
}
