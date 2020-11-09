<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // public function index()
    // {
    //     return view('member.siswa');
    // }

    


    public function siswa(){

        $siswa = Member::find(1);

        die($siswa);

  
        return view('member.siswa' , $siswa);
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
