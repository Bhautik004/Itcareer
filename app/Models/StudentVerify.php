<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentVerify extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id','trx_date','trx_amount','branch_id','trx_no','status'
    ];

    public function setTrxDateAttribute($value) {
        $this->attributes['trx_date'] = date('Y-m-d', strtotime($value));
    }

    public function getTrxDateAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }


}
