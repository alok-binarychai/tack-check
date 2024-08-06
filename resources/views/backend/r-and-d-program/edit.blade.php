<form action="{{ route('admin.r-and-d-program.update', $rAndDProgram->id) }}" method="POST" id="r-and-d-program-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#r-and-d-program-table" data-modal="#ajax_model">
    @csrf
    @method('put')
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Update R & D Program</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        
    
        <div class="form-group">
            <label class="form-label" for="email-address-1">Name</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Full Name" class="form-control" value="{{$rAndDProgram->name}}" name="name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="card_img">Card Img</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="card_img" id="card_img">
                    <label class="custom-file-label" for="card_img">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="detail_page_img_1">Detail Page Img 1</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="detail_page_img_1" id="detail_page_img_1">
                    <label class="custom-file-label" for="detail_page_img_1">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="detail_page_img_2">Detail Page Img 2</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="detail_page_img_2" id="detail_page_img_2">
                    <label class="custom-file-label" for="detail_page_img_2">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <div class="form-control-wrap">
                <textarea name="description" data-feature="all" id="summernote" required>{!! $rAndDProgram->description !!}</textarea>
            </div>
        </div>
        


    </div><!-- .modal-body -->
    <div class="modal-footer bg-white">
        <ul class="btn-toolbar g-3">
            <li><a href="#" data-dismiss="modal" class="btn btn-outline-light btn-dark">Discard</a></li>
            <li><button href="#" type="submit" class="btn btn-primary">Update</button></li>
        </ul>
    </div><!-- .modal-footer -->
</form>

<script>
$(document).ready(function() {
    $('#summernote').summernote({
      placeholder: '',
      height: 400
    });
});
  </script>
