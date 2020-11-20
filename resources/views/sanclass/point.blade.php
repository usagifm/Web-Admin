@extends('layouts.main')

@section('title')
Daftar Point | Admin Sanedu
@endsection

@section('content')

{{-- component Header --}}
@component('layouts/component/content-header',[
'page_name' => 'Daftar Point',
'search_button' => false,
'tag_search_placeholder' => 'Cari Guru',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
])
@endcomponent

{{-- component table point --}}
@component('sanclass/component/table_point',[

])
@endcomponent

{{-- component pagination --}}
@component('layouts/component/pagination')

@endcomponent


@endsection