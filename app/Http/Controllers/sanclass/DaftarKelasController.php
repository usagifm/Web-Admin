<?php

namespace App\Http\Controllers\sanclass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarKelasController extends Controller
{
    public function list()
    {
        return view('sanclass.list');
    }

    public function class()
    {
        return view('sanclass.class');
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
