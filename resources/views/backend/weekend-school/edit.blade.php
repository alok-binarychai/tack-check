<form action="{{ route('admin.weekend-school.update', $weekendSchool->id) }}" method="POST" id="weekend-school-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#weekend-school-table" data-modal="#ajax_model">
    @csrf
    @method('put')
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Update Weekend School</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        
    
        <div class="form-group">
            <label class="form-label" for="email-address-1">Name</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Full Name" class="form-control" value="{{$weekendSchool->name}}" name="name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="where">Where</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Where" class="form-control" value="{{$weekendSchool->where}}" name="where">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="when">When</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter When" class="form-control" value="{{$weekendSchool->when}}" name="when">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="term_file">Term File</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="term_file" id="term_file">
                    <label class="custom-file-label" for="term_file">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="classrooms_file">Classrooms File</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="classrooms_file" id="classrooms_file">
                    <label class="custom-file-label" for="classrooms_file">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <div class="form-control-wrap">
                <textarea name="description" data-feature="all" id="summernote" required>{!! $weekendSchool->description !!}</textarea>
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
