<?php

namespace App\Http\Controllers\sanclass;


use App\Models\Pertemuan;

use App\Models\Kelas;
use App\Models\Absensi;

use App\Models\Materi;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    
    public function index($class_id,$meeting_id,$id)
    {
        
        $materi = Materi::find($id);

        // dd($materi);

        $absensi = Absensi::where('lesson_id' , '=' , $id)->get();

        
        // dd($absensi);

        return view('sanclass.lesson', compact('materi' ,'absensi'));

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
