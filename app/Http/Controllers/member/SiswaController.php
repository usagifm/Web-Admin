<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Member::where('is_teacher' ,0)->paginate(20);

        $currentPage = $siswa->currentPage();
        // dd($siswa);

  
        return view('member.siswa' , compact('siswa','currentPage'));
    }

    


    public function siswa(){
    }


    public function search(Request $request){

        $search = $request->Key;
        
        // mengambil data dari table pegawai sesuai pencarian data
        $siswa = Member::where('name','like',"%".$search."%")
        ->orWhere('username', 'like',"%".$search."%")
        ->orWhere('province_name', 'like',"%".$search."%")
        ->orWhere('city_name', 'like',"%".$search."%")
        ->orWhere('whatsapp', 'like',"%".$search."%")
        ->orWhere('school', 'like',"%".$search."%")
        ->paginate(20);


        $currentPage = $siswa->currentPage();

        // mengirim data pegawai ke view index
        return view('member.siswa',compact('siswa','currentPage'));

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
