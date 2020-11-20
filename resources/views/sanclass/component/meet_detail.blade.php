<div class="section-heading clearfix">
    <div class="col-12 col-md-6 col-lg-6 p-0">



        <div class="row">
            <b><div class="col-md-6 col-lg-4">Nama Pertemuan</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->name}}</div>
            </b>
        </div> 
        <div class="row">
            <div class="col-md-6 col-lg-4">Nama Kelas</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
        <div class="col-md-6 col-lg-4 p-0"><a class="text-center" href="/sanclass/class/{{$datas->class->id}}"> {{$datas->class->name}} </a></div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-lg-4">Tanggal Pertemuan</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->date}}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">Waktu</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
            <div class="col-md-6 col-lg-4 p-0">{{$datas->start_time}} - {{$datas->finish_time}}</div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">Quiz</div>
            <div class="col-md-1 col-lg-1 p-0">:</div>
        <div class="col-md-6 col-lg-4 p-0"> {{$datas->quiz->name ?? '-'}} </div>
        </div>
    </div>
</div>