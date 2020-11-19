<?php

namespace App\Http\Controllers\sanclass;


use App\Models\Pertemuan;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarPertemuanController extends Controller
{
    
    public function index($class_id,$id)
    {
        
        $pertemuan = Pertemuan::find($id);

        

        // $quiz = Quiz::where("meeting_id" , '=' , $pertemuan->id)->first();
        // // dd($quiz);

        // $quizQuestion = QuizQuestion::where("quiz_id" ,'=', $quiz->id)->get();

        // dd($quizQuestion);

        // return view('sanclass.meet', compact('pertemuan' ,'quizQuestion'));

        // $quiz = $pertemuan->quiz->questions;
        // dd($quiz);

        return view('sanclass.meet', compact('pertemuan' ));
    }



    // public function point()
    // {
    //     return view('sanclass.point');
    // }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
