<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




class Kelas extends Model
{
    protected $table = 'tbl_classes';

    public function creator() {
        return $this->belongsTo('App\Models\Member', 'creator_id')->withDefault();
    }

    public function meetings() {
        return $this->hasMany('App\Models\Pertemuan', 'class_id');
    }

    public function students() {
        return $this->belongsToMany('App\Models\Member', 'tbl_class_students', 'class_id', 'student_id');
  	}


}
