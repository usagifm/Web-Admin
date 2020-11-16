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
                        <td>{{ucfirst(strtolower($data->name))}}</td>
                        <td>{{$data->username}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->school ?? 'Tidak Ada' }} </td>
                        <td>{{$data->whatsapp}}</td>
                        <td class="text-center">
                            <a href="https://api.whatsapp.com/send?phone=0{{$data->whatsapp}}" target="_blank">
                                <i class="fa fa-whatsapp text-success fa-lg"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="" class="btn-edit-variant" data-toggle="modal" data-target="#update-pass"
                                data-modal-id="{{$data->id}}" data-modal-name="{{ucfirst(strtolower($data->name))}}">
                                <i class="fa fa-key text-info fa-lg"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            {{-- component button delete --}}
                            <a href="" class="btn btn-light btn-xs btn-delete" type="button" title="edit"
                                data-toggle="modal" data-target="#delete-modal" data-modal-id="{{$data->id}}"
                                data-modal-name="{{ucfirst(strtolower($data->name))}}">
                                <i class="fa fa-trash text-danger fa-lg">
                                </i>
                            </a>
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
            <form id="editForm" method="POST" action='' enctype="multipart/form-data" style="margin:0px">
                {{ csrf_field() }}
                <div class="modal-body text-center">
                    <h4><b>Ganti Password<div id="modal-header" class="text-primary"></div></b></h4>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-4">
                            Password Baru :
                        </div>
                        <div class="col-md-8 col-lg-8 col-8">
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-4">
                            Ulangi Password :
                        </div>
                        <div class="col-md-8 col-lg-8 col-8">
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Ulangi Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">
                        <i class="fa fa-times-circle"></i>
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary-border">
                        <i class="fa fa-check-circle"></i>
                        Ganti Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL --}}
<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    style="top: 20%">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content p-3">
            <form id="deleteform" method="POST" action='' enctype="multipart/form-data" style="margin:0px">
                {{ csrf_field() }}
                <div class="modal-body text-center">
                    <i class="fa fa-exclamation-triangle text-danger" style="font-size: 70px"></i>
                    <h4 id='delete-header'><b>Yakin Menghapus Item Ini ?</b></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">
                        <i class="fa fa-times-circle"></i>
                        Batal
                    </button>
                    <button type="submit" class="btn btn-primary-border">
                        <i class="fa fa-check-circle"></i>
                        Hapus
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).on('click touchstart', '.btn-delete', function (){
       var _this = $(this);
       var _id = _this.attr('data-modal-id');
       var _name = _this.attr('data-modal-name');
       var _url = "/member/delete/member/" +_id;

       $('#delete-header').text('Apakah Anda Yakin Menghapus ' + _name + ' ?');
       $('#deleteform').attr('action',_url);
    });
</script>

<script>
    $(document).on('click touchstart', '.btn-edit-variant', function (){
        var _this = $(this);
        var _id = _this.attr('data-modal-id');
        var _name = _this.attr('data-modal-name');
        var _url = "/member/change/password/" + _id;

        $('#modal-header').text(_name);
        $('#editForm').attr('action',_url);
    });
</script>