<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentEnquiry extends Model
{
    use HasFactory;
     protected $fillable = [
        'surname','name','f_name','dob','phone','address','state','city','pincode','education','branch_id','course_id','admission_form','trx_no'
    ];

    public function setDobAttribute($value) {
        $this->attributes['dob'] = date('Y-m-d', strtotime($value));
    }

    public function getDobAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }


    
    public function stateName() {
        return $this->belongsTo(State::class,'state','id'); // don't forget to add your full namespace
    }

    
    public function cityName() {
        return $this->belongsTo(City::class,'city','id'); // don't forget to add your full namespace
    }

    public function branchName() {
        return $this->belongsTo(Branch::class,'branch_id','id'); // don't forget to add your full namespace
    }

    
    public function courseName() {
        return $this->belongsTo(Course::class,'course_id','id'); // don't forget to add your full namespace
    }
}
