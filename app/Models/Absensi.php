<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{

    protected $table = 'tbl_class_meeting_attendees';

    public function class() {
        return $this->belongsTo('App\Models\Kelas', 'class_id');
    }

    public function meeting() {
        return $this->belongsTo('App\Models\Pertemuan', 'class_meeting_id');
    }

    public function student() {
        return $this->belongsTo('App\Models\Member', 'student_id');
    }

}
