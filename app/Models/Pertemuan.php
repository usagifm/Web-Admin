<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{

    protected $table = 'tbl_class_meetings';

    public function class() {
        return $this->belongsTo('App\Models\Kelas', 'class_id')->withDefault();
    }
    public function lessons() {
        return $this->hasMany('App\Models\Materi', 'class_meeting_id');
    }


    public function quiz() {
        return $this->hasOne('App\Models\Quiz', 'meeting_id');
  	}

    public function questions() {
        return $this->belongsToMany('App\Models\QuizQuestion', 'tbl_quizs', 'meeting_id', 'id');
  	}

    //   public function students() {
    //     return $this->belongsToMany('App\Models\Member', 'tbl_class_students', 'class_id', 'student_id');
  	// }

    public function attendances() {
        return $this->hasMany('App\Models\Pertemuan', 'class_id');
    }



    public function classes(){
        return $this->belongsToMany('App\Models\Kelas', 'tbl_class_students', 'student_id', 'class_id');
      }
 
    
}
