@extends('layouts.main')

@section('title')
Kelas Memasak | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'Detail Kelas',
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
'datas' => $kelas
])

@endcomponent

<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#meet" role="tab" data-toggle="tab">Pertemuan</a></li>
    <li><a href="#student" role="tab" data-toggle="tab">Daftar Siswa</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="meet">
        @component('sanclass/component/class_meet_table',[
            'datas' => $kelas->meetings
        ])
        @endcomponent
    </div>
    <div class="tab-pane fade" id="student">
        @component('sanclass/component/class_student_table',[
             'datas' => $kelas->students
        ])
        @endcomponent
    </div>
</div>



@endsection