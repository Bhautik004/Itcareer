<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateRecord extends Model
{
    use HasFactory;

     protected $fillable = [
        
                                'register_no',
                                'student_name',
                                'son_of_dauther_of_wife_of',
                                'course_name',
                                'medium',
                                'center_name',
                                'center_address',
                                'area',
                                'center_district',
                                'exam_date',
                                'issue_date','certificate_no',
                                'grade',
                                'photo_name',
                                'birth_date'
    ];



    public function setExamDateAttribute($value) {
        $this->attributes['exam_date'] = date('Y-m-d', strtotime($value));
    }

    public function getExamDateAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }

    public function setIssueDateAttribute($value) {
        $this->attributes['issue_date'] = date('Y-m-d', strtotime($value));
    }

    public function getIssueDateAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }
}
