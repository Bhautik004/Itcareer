<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\State;
use App\Models\City;
use App\Models\Role;
use App\Models\Branch;

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
        'profile_pic',
        'branch_id',
        'verify_status',
        'board_name',
        'passing_year',
        'percentage',
        'board_name','passing_year','percentage','exam_date','trx_no','username'
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

    public static function generateSerialNumber($branch_id)
    {
       
        $get_student_role_id = Role::select('id')->where('slug','=','user')->first();
        $lastRecord = self::where('role','=',$get_student_role_id->id)->where('branch_id',$branch_id)->orderBy('id', 'desc')->first();

        if (! $lastRecord) {
            return '0001';
        }
        $string = preg_replace("/[^0-9\.]/", '', $lastRecord->register_no);
        return sprintf('%04d', $string+1);
    }

    public function stateName() {
        return $this->belongsTo(State::class,'state','id'); // don't forget to add your full namespace
    }

    
    public function cityName() {
        return $this->belongsTo(City::class,'city','id'); // don't forget to add your full namespace
    }

    public function branchs() {
        return $this->belongsTo(Branch::class,'branch_id','id'); // don't forget to add your full namespace
    }

    public function roles()
    {
        return $this->belongsTo('App\Models\Role','role','id');
    }

    public function courseName() {
        return $this->belongsTo(Course::class,'course_id','id'); // don't forget to add your full namespace
    }

    public function branchName() {
        return $this->belongsTo(Branch::class,'branch_id','id'); // don't forget to add your full namespace
    }

    public function verifyInfo() {
        return $this->hasOne(StudentVerify::class,'student_id'); // don't forget to add your full namespace
    }

    public function examInfo() {
        return $this->hasOne(StudentExam::class,'student_id'); // don't forget to add your full namespace
    }

    public function userResults()
    {
        return $this->hasMany(Result::class, 'user_id', 'id');
    }


}
