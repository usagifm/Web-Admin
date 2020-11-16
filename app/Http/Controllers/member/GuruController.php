<?php

namespace App\Http\Controllers\member;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Member::where('is_teacher' ,1)->paginate(20);
        $currentPage = $guru->currentPage();
        return view('member.guru',compact('guru'));
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
