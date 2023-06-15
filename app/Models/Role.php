<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'role',
        'status',
        'description',
        'slug'

    ];

    public function setNameAttribute($value) {
        $this->attributes['name'] = ucwords($value);
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\AclPermission','role_permissions','role_id','permission_id','role','route_name');
    }
}
