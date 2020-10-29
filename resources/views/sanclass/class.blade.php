@extends('layouts.main')

@section('title')
Kelas Memasak | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'KELAS MEMASAK',
'search_button' => false,
'tag_search_placeholder' => 'Cari Kelas',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
])
@endcomponent

{{-- component detail class --}}
@component('sanclass/component/class_detail',[
'nama_kelas' => 'Kelas Memasak',
'kode_kelas' => 'MMSK1123',
'nama_guru' => 'Abdul Wawan',
'jumlah_siswa' => '30',
'asal_sekolah' => 'SMAN 1 Wanjay'
])

@endcomponent

<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#meet" role="tab" data-toggle="tab">Pertemuan</a></li>
    <li><a href="#student" role="tab" data-toggle="tab">Daftar Siswa</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="meet">
        @component('sanclass/component/class_meet_table',[

        ])
        @endcomponent
    </div>
    <div class="tab-pane fade" id="student">
        @component('sanclass/component/class_student_table',[

        ])
        @endcomponent
    </div>
</div>


@endsection