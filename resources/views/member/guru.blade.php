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
'search_button' => false,
'tag_search_placeholder' => 'Cari Guru',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
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