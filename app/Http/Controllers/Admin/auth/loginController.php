<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\City;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

class loginController extends Controller
{
    use AuthenticatesUsers;

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function getlogin()
    {
        return view('admin.auth.index');
    }

    public function login(Request $request)
    {

        $localIP = request()->ip();
        $request->request->add(['username'=>$request->get('email')]);
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $remember = $request->has('remember') ? true : false;

        if (auth()->attempt(array('email' => $request->email, 'password' => $input['password'],'status'=>1), $remember) ||
            auth()->attempt(array('username' => $request->username, 'password' => $input['password'],'status'=>1), $remember)) {

          
                $getUserRole = Role::where('id', Auth::user()->role)->first();
                if ($getUserRole['status'] == 1 ) {
                    setcookie('login_email', $input['email'], time() + 60 * 60 * 60);
                    setcookie('login_password', $input['password'], time() + 60 * 60 * 60);
                    return redirect()->route('admin.home')->with('message', 'login Successfully');
                }else {
                    Session::flush();
                    Auth::logout();
                    return redirect()->route('home')->with('message', 'Your role has been deactivated.');
                }
        }
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['email' => 'These credentials do not match our records.'])->with('message', 'Your role has been deactivated.');;
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('home')->with('message', 'loged out !');
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

  
}
