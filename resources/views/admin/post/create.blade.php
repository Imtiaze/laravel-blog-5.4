@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
@endsection

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Text Editors</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <form role="form" action="{{ url('admin/post/store') }}" method="POST" id="postForm">
        {{ csrf_field() }}
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Write Post</h3>
                            </div>

                            <div class="card-body">
                                <!-- Title -->
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control {{ $errors->get('title') ? 'is-invalid' : ''}}" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Title">

                                    @foreach($errors->get('title') as $error)
                                    <span class="error invalid-feedback" style="">{{ $error }}</span>
                                    @endforeach
                                </div>

                                <!-- Sub Title -->
                                <div class="form-group">
                                    <label for="subtitle">Post Subtitle</label>
                                    <input type="text" class="form-control {{ $errors->get('subtitle') ? 'is-invalid' : ''}}" id="subtitle" name="subtitle" value="{{ old('title') }}" placeholder="Enter Subtitle">

                                    @foreach($errors->get('subtitle') as $error)
                                    <span class="error invalid-feedback" style="">{{ $error }}</span>
                                    @endforeach
                                </div>

                                <!-- Slug -->
                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" readonly>
                                </div>

                                <!-- File -->
                                <div class="form-group">
                                    <label for="image">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="form-check">
                                    <div class="icheck-info d-inline">
                                        <input type="checkbox" id="status" name="status">
                                        <label for="status">Publish</label>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-block bg-gradient-success" id="post-submit-button">
                                    <!-- <i style="color:white;" class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>-->
                                    <i class="fas fa-circle-notch fa-spin" style="display:none;"></i>&nbsp&nbsp
                                    <span id="post-submit-text">Submit</span>
                                </button>
                            </div>

                        </div>
                    </div>


                    <!-- <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Categories and Tags</h3>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Text</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Text Disabled</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Post Body
                                    <small>Simple and fast</small>
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <textarea name="body" class="textarea" placeholder="Place some text here" style="width: 100%; height: 450px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                @foreach($errors->get('body') as $error)
                                <span style="color:red;">{{ $error }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</div>
@endsection


@section('js')
<script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js' )}}"></script>
<script>
    $(function() {
        // Summernote
        $('.textarea').summernote();
    });

    $(document).ready(function() {
        bsCustomFileInput.init();
    });

    /**
     *  Validation Post Form
     */
    $('#postForm').validate({
        rules: {
            title: {
                required: true,
                maxlength: 255,
            },
            subtitle: {
                required: true,
            },
        },
        messages: {
            title: {
                required: "Please enter title for the post",
            },
            subtitle: {
                required: "Please enter subtitle for the post",
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) { 
            $('#post-submit-button').attr('disabled', true);
            $('.fa-spin').show();
            $('#post-submit-text').text('Submitting...');
            form.submit();
        }
    });

    /**
     *   Making Slug
     */
    $('#title').on('keyup', function() {
        let title = $('#title').val();

        title = (title.trim) ? title.trim() : title.replace(/^\s+|\s+$/g, '');
        let slug = title.split(/\s+/).join('-');

        $('#slug').val(slug);

    });
</script>
@endsection