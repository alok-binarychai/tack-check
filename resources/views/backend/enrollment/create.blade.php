<form action="{{ route('admin.enrollment.store') }}" method="POST" id="enrollment-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#enrollment-table" data-modal="#ajax_model">
    @csrf
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Add Enrollment</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label class="form-label" for="date-1">Date</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Date" class="form-control" name="date" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="class-1">Class</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Class" class="form-control" name="class" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="description-1">Description</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Description" class="form-control" name="description" required>
            </div>
        </div>
    </div><!-- .modal-body -->
    <div class="modal-footer bg-white">
        <ul class="btn-toolbar g-3">
            <li><a href="#" data-dismiss="modal" class="btn btn-outline-light btn-dark">Discard</a></li>
            <li><button href="#" type="submit" class="btn btn-primary">Add</button></li>
        </ul>
    </div><!-- .modal-footer -->
</form>