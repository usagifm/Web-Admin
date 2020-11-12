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
                        <th class="">Nama {{$type}}</th>
                        <th class="">Username </th>
                        <th class="">ID</th>
                        <th class="">Asal Sekolah</th>
                        <th class="">Nomor Whatsapp</th>
                        <th class="text-center">Hubungi</th>
                        <th class="text-center">Ganti Password</th>
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
                    <td>{{$data->name}}</td>
                    <td>{{$data->username}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->school ?? 'Tidak Ada' }} </td>
                        <td>{{$data->whatsapp}}</td>
                        <td class="text-center"><a href=""><i class="fa fa-whatsapp text-success fa-lg"></i></a></td>
                        <td class="text-center"><a href="" data-toggle="modal" data-target="#update-pass"><i
                                    class="fa fa-key text-info fa-lg"></i></a></td>
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

{{-- MODAL --}}
<div id="update-pass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    style="top: 20%">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <form method="POST" action='' enctype="multipart/form-data" style="margin:0px">
                {{ csrf_field() }}
                <div class="modal-body text-center">
                    <h4><b>Ganti Password</b></h4>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-4">
                            Password Baru :
                        </div>
                        <div class="col-md-8 col-lg-8 col-8">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">
                        <i class="fa fa-check-circle"></i>
                        Update
                    </button>
                    <button type="button" class="btn btn-primary-border">
                        <i class="fa fa-times-circle"></i>
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>