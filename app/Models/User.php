<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
        'alter_phone',
        'last_qualification',
        'id_proof',
        'last_marksheet',
        'signature',
        'course_id',
        'email',
        'password',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setDobAttribute($value) {
        $this->attributes['dob'] = date('Y-m-d', strtotime($value));
    }

    public function getDobAttribute($value) {
        return date('d-m-Y', strtotime($value));
    }
}
