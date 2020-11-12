@extends('layouts.main')

@section('title')
Data Member Siswa | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'SISWA',
'search_button' => true,
'tag_search_placeholder' => 'Cari Siswa',
'action_url' => '/member/siswa/cari',
'form_method' => 'GET',
'tag_search_id' => '',
'tag_search_name'=> 'Key'
])
@endcomponent

{{-- component table --}}
@component('member/component/table_member',[
'type' => 'Siswa',

'datas' => $siswa,


])
@endcomponent

{{-- component pagination --}}
@component('layouts/component/pagination',[
'datas' => $siswa

])
@endcomponent

@endsection