<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resourse;
use App\Models\Role;
use App\Models\ModelPermission;
use App\Models\RolePermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $create_role = check_permission('role', 'index');
        if ($create_role == 0) {
            return redirect()->back()->with('message', 'Permissions insuffisantes !')->with('message_type', 'warning');
        } else {
            $roles = Role::get();
            return view('admin.role.index', compact('roles'))->with('loader',true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create_role = check_permission('role', 'create');
        if ($create_role == 0) {
            return redirect()->back()->with('message', 'Permissions insuffisantes !')->with('message_type', 'warning');
        } else {
            $get_all_actions = Resourse::with(['permission'])
                ->where('resourses.status', '1')
                ->get()
                ->toArray();

            $master_module = [];
            $user_module = [];
            $common_module = [];
            $wed_updation_module = [];

            foreach ($get_all_actions as $key => $value) {

                if ($value['is_parent'] == '1') {
                    $master_module['master_module'][$key] = $value;
                    unset($get_all_actions[$key]);
                }
            }
            $get_all_permission = array_merge($master_module, $user_module, $wed_updation_module, $common_module);
            $get_all_action = $this->methodRename($get_all_permission);
            return view('admin.role.create', compact('get_all_action'))->with('loader',true);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'role' => 'required',
                'description' => 'required',
                'permission_id' => 'required',
                'status' => 'required',
            ],
            [
                'name.required' => 'Role name should not be blank.',
                'description.required' => 'Description should not be blank',
                'permission_id.required' => 'Please select role permission.',
                'status.required' => 'Please select role status',
            ]
        );
        $input = $request->all();

        $input_ = \Arr::except($input, ['_method', '_token', 'save_button']);

        $slug = str_slug($input_['role']);
        $input_['slug'] = $slug;



        $role = Role::create($input_);
        if (isset($input['permission_id'])) {
            foreach ($input['permission_id'] as $key => $value) {
                $permission = [
                    'role_id' => $role->id,
                    'permission_id' => $value,
                ];
                $save_permission = RolePermission::create($permission);
            }
        }
        return redirect()->route('roles.index')
            ->with('message', 'Role created successfully.')->with('loader',true);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $role = Role::findOrFail($role->id);
        $edit_existing_permission = RolePermission::where('role_id', $role->id)->get();
        $module_permission = [];

        foreach ($edit_existing_permission as $key => $value) {
            $module_permission[] = $value['permission_id'];
        }
        $get_all_actions = Resourse::with(['permission'])
            ->where('resourses.status', '1')
            ->get()
            ->toArray();
        $master_module = [];
        $user_module = [];
        $common_module = [];
        $wed_updation_module = [];

        foreach ($get_all_actions as $key => $value) {
            if ($value['is_parent'] == '1') {
                $master_module['master_module'][$key] = $value;
                unset($get_all_actions[$key]);
            }
        }
        $get_all_permission = array_merge($master_module, $user_module, $wed_updation_module, $common_module);
        $get_all_action = $this->methodRename($get_all_permission);
        return view('admin.role.edit', compact('role', 'module_permission', 'get_all_action'))->with('loader',true);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $u_id = Auth::user()->id;
        $input = $request->all();
        $this->validate($request, [
            'role' => 'required',
            'description' => 'required',
            'status' =>'required'

        ]);

        $role->update($request->all());

        $input_ = Arr::except($input, ['_method', '_token', 'save_button', 'name', 'description', 'status']);

        $get_role = RolePermission::where('role_id', $role->id)->first();

        if (isset($get_role)) {
            $delete_permission = RolePermission::where('role_id', $role->id)->delete();
        }

        if (isset($input['permission_id'])) {
            foreach ($input['permission_id'] as $key => $value) {
                $permission = [
                    'role_id' => $role->id,
                    'permission_id' => $value,
                ];

                $save_permission = RolePermission::create($permission);
            }
        }


        return redirect()->route('roles.index')->with('message', 'Role Has Been updated successfully')->with('loader',true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')
            ->with('message', 'Role deleted successfully')->with('loader',true);
    }

    public function getAllAction()
    {
        Resourse::where('status', '1')->update(['status' => '0']);

        foreach (\Route::getRoutes() as $key => $route) {
            
         
            $action = $route->getAction();

            if (array_key_exists('controller', $action)) {
                if (strpos($action['controller'], 'Controllers\Admin')) {

                    $path = substr($action['controller'], strrpos($action['controller'], '\\') + 1);
                    $pathArr = explode('@', $path);
                    $ctrl = substr($path, strrpos($path, '@') + 1);
                    $mthd = substr($path, strrpos($path, '@') + 1);
                    $controllers[$pathArr[0]]['method'][] = $pathArr[1];
                    $controllers[$pathArr[0]]['path'][] = $action['controller'];
                }
            }
        }

     
        $controllers_ = \Arr::except($controllers, ['loginController', 'ForgotPasswordController']);

        foreach ($controllers_ as $key => $value) {

            $curre_module = substr(trim($key), 0, -10);

            $name = [
                'name' => $curre_module,
            ];

            $filtered = array_unique($value['method']);

            if (($k1 = array_search('store', $filtered)) !== false) {
                unset($filtered[$k1]);
            }

            if (($k1 = array_search('update', $filtered)) !== false) {
                unset($filtered[$k1]);
            }



            if (($k1 = array_search('getAllAction', $filtered)) !== false) {
                unset($filtered[$k1]);
            }

            $get_reso = Resourse::where('name', $name)->first();
            if (!isset($get_reso->id)) {
                $save_controller = Resourse::create($name);
                $res_id = $save_controller->id;
            } else {
                $res_id = $get_reso->id;
                Resourse::where('id', $get_reso->id)->update(['status' => '1']);
            }

            foreach ($filtered as $k => $v) {

                $all_method = [
                    'resources_id' => $res_id,
                    'method' => $v,
                ];

                $get_method = ModelPermission::where(['resources_id' => $res_id, 'method' => $v])->first();

                if (!isset($get_method->id)) {
                    $save_method = ModelPermission::create($all_method);
                } else {
                    ModelPermission::where(['resources_id' => $res_id, 'method' => $v])->update(['status' => '1']);
                }
            }
        }
        return;
    }


    public function methodRename($get_all_permission)
    {

        foreach ($get_all_permission['master_module'] as $keys => $values) {

            foreach ($values['permission'] as $resource_key => $permission) {

                if ($permission['method'] == 'index') {
                    $get_all_permission['master_module'][$keys]['permission'][$resource_key]['method'] = 'View';
                }

                if ($permission['method'] == 'create') {
                    $get_all_permission['master_module'][$keys]['permission'][$resource_key]['method'] = 'Add';
                }

                if ($permission['method'] == 'edit') {
                    $get_all_permission['master_module'][$keys]['permission'][$resource_key]['method'] = 'Update';
                }

                if ($permission['method'] == 'destroy') {
                    $get_all_permission['master_module'][$keys]['permission'][$resource_key]['method'] = 'Delete';
                }
            }
        }

        return $get_all_permission;
    }
}
