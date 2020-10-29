@extends('layouts.main')

@section('title')
Data Member Perwilayah | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'DATA PERWILAYAH',
'search_button' => true,
'tag_search_placeholder' => 'Cari',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
])
@endcomponent

<div class="row">
    <div class="col-md-6 col-lg-6 col-6">
        {{-- component data --}}
        @component('member/component/data_member_grafik',[
        'type' => 'Siswa'
        ])
        @endcomponent
    </div>
    <div class="col-md-6 col-lg-6 col-6">
        {{-- component data --}}
        @component('member/component/data_member_grafik',[
        'type' => 'Guru'
        ])
        @endcomponent
    </div>
</div>

@endsection