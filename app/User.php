<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'avatar', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sheets_owned()
    {
        return $this->hasMany('App\Sheet', 'user_id');
    }

    public function sheets()
    {
        return $this->belongsToMany('App\User');
    }

    public function classrooms_owned()
    {
        return $this->hasMany('App\Classroom', 'user_id');
    }

    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom');
    }

    public function teachers()
    {
      return $this->belongsToMany('App\User','student_teacher','student_user_id','teacher_user_id');
    }

    public function students()
    {
      return $this->belongsToMany('App\User','student_teacher','teacher_user_id','student_user_id');
    }
}
