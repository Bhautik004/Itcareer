<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onDemandExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_no',
        'f_name',
        'l_name',
        'm_name',
        'gender',
        'dob',
        'address',
        'state',
        'city',
        'pincode',
        'phone',
        'last_qualification',
        'last_marksheet',
        'signature',
        'course_id',
        'email',
        'status',
        'profile_pic',
        'branch_id',
        'board_name','passing_year','percentage','exam_date','trx_no','status'
    ];

    public static function generateSerialNumber()
    {
       
        $lastRecord = self::orderBy('id', 'desc')->first();

        if (! $lastRecord) {
            return 'ODE0001';
        }

        $string = preg_replace("/[^0-9\.]/", '', $lastRecord->register_no);

        return 'ODE' . sprintf('%04d', $string+1);
    }

    public function setDobAttribute($value) {
        $this->attributes['dob'] = date('Y-m-d', strtotime($value));
    }

    public function getDobAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }


    public function setExamDateAttribute($value) {
        $this->attributes['exam_date'] = date('Y-m-d', strtotime($value));
    }

    public function getExamDateAttribute($value) {
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
