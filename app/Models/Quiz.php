<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

protected $table = 'tbl_quizs';

public function questions() {
    return $this->hasMany('App\Models\QuizQuestion', 'quiz_id');
  }

  public function meeting() {
    return $this->belongsTo('App\Models\Pertemuan', 'meeting_id');
  }

  public function attempts() {
    return $this->hasMany('App\Models\QuizNilai', 'quiz_id');
  }


}
