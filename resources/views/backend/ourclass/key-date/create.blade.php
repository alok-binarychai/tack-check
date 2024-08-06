<form action="{{ route('admin.key-date.store') }}" method="POST" id="key-date-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#key-date-table" data-modal="#ajax_model">
    @csrf
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Add Key Date</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label class="form-label" for="day-1">Day</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Day" class="form-control" name="day" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="timing-1">Timing</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Timing" class="form-control" name="timing" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="school_name-1">School Name</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter School Name" class="form-control" name="school_name" required>
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