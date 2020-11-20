<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizNilai extends Model
{

    protected $table = 'tbl_attempts';



    public function students() {
        return $this->belongsTo('App\Models\Member', 'student_id')->withDefault();
    }


    public function quiz() {
        return $this->belongsTo('App\Models\Quiz', 'quiz_id')->withDefault();
    }


}
