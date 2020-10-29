<div class="panel-content">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Nomor</th>
                        <th class="">Nama Guru</th>
                        <th class="">ID Guru</th>
                        <th class="">Asal Sekolah</th>
                        <th class="">Total Point</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php
                    $num = ($data->currentPage() - 1 ) * $data->perPage() + 1;
                    @endphp --}}

                    <tr>
                        <th class="text-center">1</th>
                        <td>Abdul Wawan</td>
                        <td>XR24521111</td>
                        <td>SMAN 1 Legenda</td>
                        <td>41</td>
                        <td class="text-center">
                            <a href="" class="btn btn-light btn-xs" type="button" title="edit" data-toggle="modal"
                                data-target="#edit"><i class="fa fa-download text-primary fa-lg"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>