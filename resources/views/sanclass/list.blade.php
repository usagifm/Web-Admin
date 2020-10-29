@extends('layouts.main')

@section('title')
Daftar Kelas | Admin Sanedu
@endsection

@section('content')

{{-- component header --}}
@component('layouts/component/content-header',[
'page_name' => 'Daftar Kelas',
'search_button' => true,
'tag_search_placeholder' => 'Cari Kelas',
'action_url' => '',
'form_method' => '',
'tag_search_id' => '',
'tag_search_name'=> ''
])
@endcomponent

{{-- component table --}}
@component('sanclass/component/table_list',[

])
@endcomponent


{{-- component pagination --}}
@component('layouts/component/pagination')

@endcomponent


@endsection