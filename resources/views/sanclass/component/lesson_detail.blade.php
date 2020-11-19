<div class="section-heading clearfix">
    <div class="col-12 col-md-6 col-lg-6 p-0">



        <div class="row">
            <b><div class="col-md-6 col-lg-4">Nama Materi</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->name}}</div>
            </b>
        </div> 
        <div class="row">
            <div class="col-md-6 col-lg-4">Nama Pertemuan</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->meeting->name}}</div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4">Nama Kelas</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->meeting->class->name}}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">Link</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->link}}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">Youtube</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
        <div class="col-md-6 col-lg-4 p-0"> {{$datas->youtube}} </div>
        </div>
    </div>
</div>