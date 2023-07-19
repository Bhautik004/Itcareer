<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExam extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id','student_user_id','student_password','exam_status','branch_id','status'];

    public function userInfo() {
        return $this->belongsTo(User::class,'student_id','id'); // don't forget to add your full namespace
    }

}
