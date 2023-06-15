<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resourse extends Model
{
    use HasFactory;
      protected $fillable = [
        'name','status','scope','is_parent'
    ];

    public function permission() {

        return $this->hasMany('App\Models\ModelPermission', 'resources_id','id')->where('status','1');

    }
}
