<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tbl_users';

    protected $fillable = [
        'role_id','name','email','username','password','birth_date','province_id','province_name',
        'city_id','city_name','school','nip','grade_level','is_teacher','parent_phone_number','whatsapp','profile_image'
    ];
}
