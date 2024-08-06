<form action="{{ route('admin.contact-enquiry.update', $contactEnquiry->id) }}" method="POST" id="contactEnquiry-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#contactEnquiry-table" data-modal="#ajax_model">
    @csrf
    @method('put')
    <div class="modal-header align-center">
        <div class="nk-file-title">
            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">View Contact Enquiry</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label class="form-label" for="name-1">Name</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" value="{{$contactEnquiry->name}}" disabled name="name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="email-1">Email</label>
            <div class="form-control-wrap">
                <input type="text" class="form-control" value="{{$contactEnquiry->email}}" name="email" disabled required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="message-1">Message</label>
            <div class="form-control-wrap">
                <textarea class="form-control" rows="5" disabled>{{$contactEnquiry->message}}</textarea>
            </div>
        </div>
    </div><!-- .modal-body -->
    <div class="modal-footer bg-white">
        <ul class="btn-toolbar g-3">
            <li><a href="#" data-dismiss="modal" class="btn btn-outline-light btn-dark">Discard</a></li>
        </ul>
    </div><!-- .modal-footer -->
</form>