@extends('layouts.main')

@section('title')
Kelas Memasak | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'Detail Materi',
'search_button' => false,
'tag_search_placeholder' => 'Cari Kelas',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
])
@endcomponent

{{-- component detail class --}}
@component('sanclass/component/lesson_detail',[
// 'tanggal' => '23/10/2020',
// 'waktu' => '8:30 - 10:30',
// 'jenis_pertemuan' => 'disertai materi'

'datas' => $materi,
'absensi' => $absensi


])

@endcomponent


<ul class="nav nav-tabs" role="tablist">
    <li><a href="#absensi" role="tab" data-toggle="tab">Absensi</a></li>
</ul>
<div class="tab-content">


    <div class="tab-pane fade in active" id="absensi"> 
    
            @component('sanclass/component/lesson_absensi_materi_table',[
                'datas' => $absensi
            ])
            @endcomponent
        </div>


    </div>
@endsection