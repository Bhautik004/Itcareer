<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'points',
        'question_id',
        'option_text',
    ];

    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id');
    }


   
}
