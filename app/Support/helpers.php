<?php


use App\Models\Resourse;
use App\Models\RolePermission;
use App\Models\ModelPermission;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
// use DateTime;

if(!function_exists('check_permission')){

    function check_permission($controller , $action){

        $user = Auth::user();
        if(!empty($user))
        {
            $role_id = Auth::user()->role;

            if($role_id){
                $get_reso = Resourse::where('name',$controller)->first();


                if($action == "store"){
                    $action = "create";
                }else if($action == "update"){
                    $action = "edit";
                }

                $get_method = ModelPermission::where(['resources_id' => $get_reso['id'] ,'method' => $action])->firstOrFail();
                $is_per = RolePermission::where(['role_id' => $role_id, 'permission_id' => $get_method->id])->count();

                if($is_per > 0){
                    return 1;
                }else{
                    return 0;
                }
            }
        }

        return 1;

    }

}

