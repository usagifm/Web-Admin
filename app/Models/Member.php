<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tbl_users';

    // public function classes(){
    //     return $this->belongsToMany('App\Models\Member', 'student_id');

    //     // return $this->belongsToMany('App\Models\Kelas', 'tbl_class_students', 'student_id', 'class_id');
    //   }


    public function classes(){
        return $this->belongsToMany('App\Models\Kelas', 'tbl_class_students', 'student_id', 'class_id');
      }


    protected $fillable = [
        'role_id','name','email','username','password','birth_date','province_id','province_name',
        'city_id','city_name','school','nip','grade_level','is_teacher','parent_phone_number','whatsapp','profile_image'
    ];


}
