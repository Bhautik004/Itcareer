<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resourse;
use App\Models\Role;
use App\Models\ModelPermission;
use App\Models\RolePermission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
            foreach($get_all_action['master_module'] as $key => $acl_permissions)
            {
                foreach($acl_permissions['permission'] as $key1 => $methods){                   
                    $permission = [
                        'role_id' => '1',
                        'permission_id' => $methods['id'],
                    ];
                    $save_permission = RolePermission::create($permission);
                }
            }
            
           
            



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
