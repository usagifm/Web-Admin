<?php

namespace App\Http\Controllers\sanclass;


use App\Models\Pertemuan;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\QuizNilai;
use App\Models\Member;
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

    public function deleteAttempt(Request $request,$id)
    {
        $attempt = QuizNilai::findOrFail($id);
        // $attempt = $member->is_teacher;
        $quiz = Quiz::find($attempt->quiz_id);
        
        $meeting = Pertemuan::find($quiz->meeting_id);

        $student = Member::find($attempt->student_id);

        $attempt->delete();

        return redirect('sanclass/class/'.$meeting->class_id.'/meet/'.$meeting->id)->with('msg', 'Attempt milik '.$student->name.' berhasil dihapus');
  
    }


    public function deleteMember(Request $request,$id)
    {
        $member = Member::findOrFail($id);
        $member_type = $member->is_teacher;
        $member_name = $member->name;
        $member->delete();

    
            return redirect('states/'.$id.'/regions')->with('message', 'State saved correctly!!!');

            return redirect('sanclass/class/'.$meeting->class_id.'/meet/'.$meeting->id)->with('msg', 'Attempt '.$member_name.' berhasil dihapus');
    
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
