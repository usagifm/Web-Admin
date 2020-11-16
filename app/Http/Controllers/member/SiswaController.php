<?php

namespace App\Http\Controllers\member;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Member::where('is_teacher' ,0)->paginate(20);
        $currentPage = $siswa->currentPage();

  
        return view('member.siswa' , compact('siswa','currentPage'));
    }

    public function changePassword(Request $request,$id)
    {
        $validator = $this->passwordValidator($request);
        $member = Member::findOrFail($id);

        $member->update([
            'password' => Hash::make($request->password),
        ]);
        
        if ($member->is_teacher == 0) {
            return redirect('member/siswa')->with('msg', 'Password '.$member->name.' berhasil diperbaharui');
        } else { 
            return redirect('member/siswa')->with('msg', 'Password '.$member->name.' berhasil diperbaharui');
        }

    }

    public function deleteMember(Request $request,$id)
    {
        $member = Member::findOrFail($id);
        $member_type = $member->is_teacher;
        $member_name = $member->name;
        $member->delete();

        if ($member_type == 0) {
            return redirect('member/siswa')->with('msg', 'Member '.$member_name.' berhasil dihapus');
        } else { 
            return redirect('member/siswa')->with('msg', 'Member '.$member_name.' berhasil dihapus');
        }
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

    protected function passwordValidator(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|string|min:8|confirmed',
        ],[
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password harus 8 karakter',
            'password.confirmed' => 'Password tidak sama',
        ]);
    }
}
