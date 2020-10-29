@extends('layouts.main')

@section('title')
Kelas Memasak | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'PERTEMUAN 1',
'search_button' => false,
'tag_search_placeholder' => 'Cari Kelas',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
])
@endcomponent

{{-- component detail class --}}
@component('sanclass/component/meet_detail',[
'tanggal' => '23/10/2020',
'waktu' => '8:30 - 10:30',
'jenis_pertemuan' => 'disertai materi'
])

@endcomponent

<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#materi" role="tab" data-toggle="tab">Materi</a></li>
    <li><a href="#soal" role="tab" data-toggle="tab">Soal</a></li>
    <li><a href="#absensi" role="tab" data-toggle="tab">Absensi</a></li>
    <li><a href="#nilai" role="tab" data-toggle="tab">Nilai</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade in active" id="materi">
        @component('sanclass/component/meet_materi_table',[

        ])
        @endcomponent
    </div>
    <div class="tab-pane fade" id="soal">
        @component('sanclass/component/meet_soal_table',[

        ])
        @endcomponent
    </div>
    <div class="tab-pane fade" id="absensi">
        {{-- Catatan
        Ganti komponen menjadi meet_absensi_ujian untuk tipe pertemuan ujian --}}
        @component('sanclass/component/meet_absensi_materi_table',[

        ])
        @endcomponent
    </div>
    <div class="tab-pane fade" id="nilai">
        @component('sanclass/component/meet_nilai_table',[

        ])
        @endcomponent
    </div>
</div>


@endsection