<div class="section-heading clearfix">
    <div class="col-12 col-md-6 col-lg-6 p-0">
        <div class="row">
            <div class="col-md-6 col-lg-5"><b>Nama Kelas</b></div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-6 p-0"><b>{{$datas->name }}</b></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><b>Kode Kelas</b></div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-6 p-0">{{$datas->class_code }}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><b>Nama Guru</b></div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-6 p-0">{{$datas->creator->name}}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><b>Jumlah Siswa</b></div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-6 p-0">{{$datas->students->count()}}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><b>Asal Sekolah</b></div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-6 p-0">{{$datas->school}}</div>
        </div>
    </div>
</div>