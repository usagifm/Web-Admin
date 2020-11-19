<div class="card">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">
                    <a href="" class="btn btn-danger btn-xs m-0 p-0" type="button" title="edit"><i
                            class="fa fa-trash text-light fa-lg"></i></a>
                </th>
                <th class="">Nomor</th>
                <th class="">Pertanyaan</th>
                <th class="">Gambar Pertanyaan</th>
                <th class="">A</th>
                <th class="">B</th>
                <th class="">C</th>
                <th class="">D</th>
                <th class="">E</th>
                <th class="">Kunci Jawaban</th>
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
                <th class="text-center">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </th>
                <th>{{$num++}}</th>
                <th>{{$data->question}}</th>
                <th>http://storage.sanedu.id/{{$data->question_image}}</th>
                <th>{{$data->a}}</th>
                <th>{{$data->b}}</th>
                <th>{{$data->c}}</th>
                <th>{{$data->d}}</th>
                <th>{{$data->e}}</th>
                <th>{{$data->answer}}</th>
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