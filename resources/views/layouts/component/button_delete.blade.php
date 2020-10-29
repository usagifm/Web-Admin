<a href="" class="btn btn-light btn-xs" type="button" title="edit" data-toggle="modal" data-target="#delete-modal"
    data-modal-id="">
    <i class="fa fa-trash text-danger fa-lg"></i></a>

{{-- MODAL --}}
<div id="delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    style="top: 20%">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content p-3">
            <form method="POST" action='' enctype="multipart/form-data" style="margin:0px">
                {{ csrf_field() }}
                <div class="modal-body text-center">
                    <h4><b>Yakin Menghapus Item Ini ?</b></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary-outline" data-dismiss="modal">
                        <i class="fa fa-check-circle"></i>
                        Hapus
                    </button>
                    <button type="button" class="btn btn-primary-border">
                        <i class="fa fa-times-circle"></i>
                        Batal
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
       var _url = "/adminku/event/delete/" +_id;
       $('#deleteData').attr('action',_url);
    });
</script>