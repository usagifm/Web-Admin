<?php

namespace App\Http\Controllers\sanclass;

use App\Models\Kelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarKelasController extends Controller
{
    public function list()
    {
        $kelas = Kelas::paginate(20);
        $currentPage = $kelas->currentPage();

        // dd($kelas);

        return view('sanclass.list', compact('kelas','currentPage'));
    }

    public function class($id)
    {

        $kelas = Kelas::find($id);

        // dd($kelas);

        return view('sanclass.class', compact('kelas'));
    }

    
    public function search(Request $request){

        $search = $request->Key;
        
        // mengambil data dari table kelas sesuai pencarian data
        $kelas = Kelas::where('name','like',"%".$search."%")
        ->orWhere('class_code', 'like',"%".$search."%")
        ->orWhere('school', 'like',"%".$search."%")
        ->orWhere('grade_level', 'like',"%".$search."%")
        ->paginate(20);


        $currentPage = $kelas->currentPage();

        // mengirim data pegawai ke view index
        return view('sanclass.list',compact('kelas','currentPage'));

    }



    public function meet()
    {
        return view('sanclass.meet');
    }

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
