<div class="panel-content">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">
                            <a href="" class="btn btn-danger btn-xs m-0 p-0" type="button" title="edit"><i
                                    class="fa fa-trash text-light fa-lg"></i></a>
                        </th>
                        <th class="">Nomor</th>
                        <th class="">Nama Kelas</th>
                        <th class="">Kode Kelas</th>
                        <th class="">Nama Guru</th>
                        <th class="">Jumlah Siswa</th>
                        <th class="">Asal Sekolah Siswa</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $num = ($datas->currentPage() - 1 ) * $datas->perPage() + 1;
                    @endphp

                        @foreach ($datas as $data)


                    <tr>
                        <th class="text-center">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        </th>
                        <th>{{$num++}}</th>
                        <td class="text-primary">
                            <a href="{{ url('sanclass/class', [$data->id]) }}">
                            {{$data->name}}
                            </a>
                        </td>
                        <td>{{$data->class_code}}</td>
                        <td>{{$data->creator->name}}</td>
                        <td>{{$data->students->count()}}</td>
                        <td>{{$data->school}}</td>
                        <td class="text-center">
                            {{-- component button delete --}}
                            @component('layouts/component/button_delete')

                            @endcomponent
                            <a href="" class="btn btn-light btn-xs" type="button" title="edit" data-toggle="modal"
                                data-target="#edit"><i class="fa fa-download text-primary fa-lg"></i></a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>