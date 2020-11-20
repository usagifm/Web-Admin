<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{

    protected $table = 'tbl_class_meeting_lessons';

    public function attendance() {
        return $this->hasMany('App\Models\Absensi', 'lesson_id');
    }

 
    public function meeting() {
        return $this->belongsTo('App\Models\Pertemuan', 'class_meeting_id');
    }
}
