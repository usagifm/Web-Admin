<div class="section-heading clearfix">
    <h2 class="section-title">{{$page_name}}</h2>
    <div class="right">
        @if ($search_button == true)
        <div class="row">
            <form action="{{$action_url}}" method="{{$form_method}}">
                <div class="col-md-8 col-lg-8 col-8">
                    <input type="text" class="form-control" id="{{$tag_search_id}}" name="{{$tag_search_name}}"
                        placeholder="{{$tag_search_placeholder}}">
                </div>
                <div class="col-md-4 col-lg-4 col-4">
                    <button class="btn btn-sm btn-primary">Cari</button>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>