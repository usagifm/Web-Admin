<div class="section-heading clearfix">
    <div class="col-12 col-md-6 col-lg-6 p-0">
        <div class="row">
            <div class="col-md-6 col-lg-5"><h4><b>Nama Kelas</b></h4></div>
            <div class="col-md-1 col-lg-1 p-0"><h4>:</h4></div>
            <div class="col-md-6 col-lg-6 p-0"><h4>{{$datas->name }}</h4></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><h4><b>Kode Kelas</b></h4></div>
            <div class="col-md-1 col-lg-1 p-0"><h4>:</h4></div>
            <div class="col-md-6 col-lg-6 p-0"><h4>{{$datas->class_code }}</h4></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><h4><b>Nama Guru</b></h4></div>
            <div class="col-md-1 col-lg-1 p-0"><h4>:</h4></div>
            <div class="col-md-6 col-lg-6 p-0"><h4>{{$datas->creator->name}}</h4></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><h4><b>Jumlah Siswa</b></h4></div>
            <div class="col-md-1 col-lg-1 p-0"><h4>:</h4></div>
            <div class="col-md-6 col-lg-6 p-0"></div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-5"><h4><b>Asal Sekolah</b><h4></div>
            <div class="col-md-1 col-lg-1 p-0"><h4>:</h4></div>
            <div class="col-md-6 col-lg-6 p-0"><h4>{{$datas->school}}</h4></div>
        </div>
    </div>
</div>