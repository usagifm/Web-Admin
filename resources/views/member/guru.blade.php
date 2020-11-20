@extends('layouts.main')

@section('title')
Data Member Guru | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/allert',[
])
@endcomponent

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'GURU',
'search_button' => true,
'tag_search_placeholder' => 'Cari Guru',
'action_url' => '/member/siswa/cari',
'form_method' => 'GET',
'tag_search_id' => '',
'tag_search_name'=> 'Key'
])
@endcomponent

{{-- component table --}}
@component('member/component/table_member',[
'type' => 'Siswa',
'datas' => $guru,
])
@endcomponent

{{-- component pagination --}}
@component('layouts/component/pagination',[
'datas' => $guru
])
@endcomponent
@endsection