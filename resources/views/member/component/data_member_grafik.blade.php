<div class="card">
    <div class="card-header bg-info"
        style="padding: 20px; color:white;background: linear-gradient(355deg, rgba(86,165,245,1) 0%, rgba(3,129,255,1) 100%);">
        <h4>{{$type}}</h4>
        <span>Total {{$type}} : <b class="pl-3">{{number_format($data->count())}}</b></span>
    </div>
    <div class="card-body" style="padding: 10px">
        @foreach ($provinces as $key=>$provinceData)
        @if ($key != "")
        <div class="row">
            <div class="col-md-4 col-lg-4 col-4">
                {{$key}}
            </div>

            <div class="col-md-6 col-lg-6 col-6">
                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                        aria-valuenow="{{$provinceData->count() / $data->count() *100}}" aria-valuemin="0"
                        aria-valuemax="100" data-transitiongoal="60"
                        style="width: {{$provinceData->count() / $data->count() *100}}%">
                        {{number_format($provinceData->count() / $data->count() *100,2)}}%
                        <span class="sr-only">45% Complete</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-2">
                {{number_format($provinceData->count())}}
            </div>
        </div>
        @endif

        @endforeach

    </div>
</div>