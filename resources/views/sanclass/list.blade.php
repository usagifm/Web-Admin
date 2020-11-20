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
'action_url' => '/sanclass/list/cari',
'form_method' => 'GET',
'tag_search_id' => '',
'tag_search_name'=> 'Key'
])
@endcomponent

{{-- component table --}}
@component('sanclass/component/table_list',[
    'datas' => $kelas
])
@endcomponent


{{-- component pagination --}}
@component('layouts/component/pagination',[

'datas' => $kelas
])

@endcomponent


@endsection