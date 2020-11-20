@if ($datas == null)
<div class="card">
    <h4 class="text-center">Tidak Ada Data</h4>
</div>
@else

<div class="card">
    <table class="table table-striped">
        <thead>
            <tr>
                {{-- <th class="text-center"> --}}
                    {{-- <a href="" class="btn btn-danger btn-xs m-0 p-0" type="button" title="edit"><i
                            class="fa fa-trash text-light fa-lg"></i></a>
                </th> --}}
                <th class="">Nomor</th>
                <th class="">Nama Siswa</th>
                <th class="">Nama Quiz</th>
                <th class="">Nama Pertemuan</th>
                <th class="">Nama Kelas</th>
                <th class="">Nilai</th>
                <th class="">Waktu Mulai Quiz</th>
                <th class="">Waktu Selesai Quiz</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @php
                    $num = ($data->currentPage() - 1 ) * $data->perPage() + 1;
                    @endphp --}}

                @php
                    $num = 1;
                    @endphp
    @foreach ($datas as $data)

            <tr>
                {{-- <th class="text-center">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </th> --}}
            <th>{{$num++}}</th>
                <td>{{$data->students->name}}</td>
                <td>{{$data->quiz->name}}</td>
                <td>{{$data->quiz->meeting->name}}</td>
                <td>{{$data->quiz->meeting->class->name}}</td> 
                <td> {{$data->score}} </td>
                <td> {{$data->started_at}} </td>
                <td> {{$data->finished_at}} </td>


                <td class="text-center">
                    {{-- component button delete --}}
                    <a href="" class="btn btn-light btn-xs btn-delete" type="button" title="edit"
                                data-toggle="modal" data-target="#delete-modal" data-modal-id="{{$data->id}}"
                                data-modal-name="{{ucfirst(strtolower($data->students->name))}}">
                                <i class="fa fa-trash text-danger fa-lg">
                                </i>
                            </a>
                   </td>
            </tr>


            @endforeach
        </tbody>
    </table>
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
       var _url = "/sanclass/delete/attempt/" +_id;

       $('#delete-header').text('Apakah Anda Yakin Menghapus Attempt Milik ' + _name + ' ?');
       $('#deleteform').attr('action',_url);
    });
</script>


@endif