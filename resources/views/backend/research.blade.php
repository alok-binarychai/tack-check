
@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Research Page</h5>
            </div>
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="research">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Banner</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="banner" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="heading"
                                    value="{{settings('research', 'heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Description</label>
                            <div class="form-control-wrap">
                                <textarea name="description" class="form-control summernote" data-feature="all">{!! settings('research', 'description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-0 heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_zero_heading"
                                    value="{{settings('research', 'section_zero_heading')}}">
                            </div>
                        </div>
                    </div>
                    {{-- section 0 --}}

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-0 Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_zero_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-0 description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_zero_description" class="form-control summernote" data-feature="all">{!! settings('research', 'section_zero_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_one_heading"
                                    value="{{settings('research', 'section_one_heading')}}">
                            </div>
                        </div>
                    </div>
                    {{-- section 1 --}}

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-I Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_one_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_one_description" class="form-control summernote" data-feature="all">{!! settings('research', 'section_one_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 2 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_two_heading"
                                    value="{{settings('research', 'section_two_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-II Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_two_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_two_description" class="form-control summernote" data-feature="all">{!! settings('research', 'section_two_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    {{-- section 3 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-III heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_three_heading"
                                    value="{{settings('research', 'section_three_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-III Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_three_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-III description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_three_description" class="form-control summernote" data-feature="all">{!! settings('research', 'section_three_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 4 --}} 
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-IV heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_four_heading"
                                    value="{{settings('research', 'section_four_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-IV Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_four_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-IV description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_four_description" class="form-control summernote" data-feature="all">{!! settings('research', 'section_four_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Publication heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="publication_heading"
                                    value="{{settings('research', 'publication_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Publication Description</label>
                            <div class="form-control-wrap">
                                <textarea name="publication_description" class="form-control summernote" data-feature="all">{!! settings('research', 'publication_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Publication Details</label>
                            <div class="form-control-wrap">
                                <textarea name="publication_details" class="form-control summernote" data-feature="all">{!! settings('research', 'publication_details') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('.summernote').summernote({
          placeholder: '',
        //   tabsize: 2,
          height: 150
        });
    });
      </script>
@endsection
<!-- include libraries(jQuery, bootstrap) -->
