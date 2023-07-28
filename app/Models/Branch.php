<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
            'name','state','city','district','phone','email','status','address','area'
    ];

     public function stateName() {
        return $this->belongsTo(State::class,'state','id'); // don't forget to add your full namespace
    }

    
    public function cityName() {
        return $this->belongsTo(City::class,'city','id'); // don't forget to add your full namespace
    }

     public function user() {
        return $this->hasOne(User::class,'branch_id'); // don't forget to add your full namespace
    }
}
