<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resourse;
use App\Models\ModelPermission;
use App\Models\RolePermission;

class RoleAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $role_id = Auth::user()->role;


        if(isset($role_id)){
            $routeArray = app('request')->route()->getAction();
            $controllerAction = class_basename($routeArray['controller']);
            list($controller, $action) = explode('@', $controllerAction);

            if($action == "store"){
                $action = "create";
            }else if($action == "update"){
                $action = "edit";
            }

            if($action == "updateUser"){
                $action = "editUser";
            }

            $controllerName = substr(trim($controller), 0, -10);

            if($controllerName == 'Dashboard'){

                if($action == "viewGraph"){
                    $action = "index";
                }
            }
            if($controllerName == 'User'){

                if($action == "getUserList"){
                    $action = "index";
                }
            }

            $get_reso = Resourse::where('name',$controllerName)->first();


            $get_method = ModelPermission::where(['resources_id' => $get_reso['id'] ,'method' => $action])->firstOrFail();

            $is_per = RolePermission::where(['role_id' => $role_id, 'permission_id' => $get_method->id])->count();

            if($is_per != 0){

                if($is_per){
                    return $next($request);
                }else{

                    if($request->ajax()){
                        return response( 'Permissions insuffisantes !', 401 );

                    }else {
                        return redirect()->route('admin.home')->with('message','Permissions insuffisantes !')->with('message_type','warning');
                    }
                }
            }else {
                return $next($request);
            }
        }
        return $next($request);
    }
}
