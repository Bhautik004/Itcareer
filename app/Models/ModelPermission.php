<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPermission extends Model
{
     use HasFactory;

    protected $fillable = [
        'resources_id','method','status'
    ];
}
