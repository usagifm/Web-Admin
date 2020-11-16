<?php

namespace App\Http\Controllers\member;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataWilayahController extends Controller
{
    public function index()
    {
        $siswa = Member::where('is_teacher' ,0)->get();
        $guru = Member::where('is_teacher' ,1)->get();

        $siswaByProvince = Member::where('is_teacher' ,0)->get()->groupBy('province_name');
        $guruByProvince = Member::where('is_teacher' ,1)->get()->groupBy('province_name');

        return view('member.data_wilayah',compact('siswa','guru','siswaByProvince','guruByProvince'));
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
