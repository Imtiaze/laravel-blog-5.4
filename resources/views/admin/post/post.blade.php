@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
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

    <form role="form">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Write Post</h3>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="subtitle">Post Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Subtitle">
                                </div>
                                <div class="form-group">
                                    <label for="image">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <div class="icheck-info d-inline">
                                        <input type="checkbox" id="checkboxDanger1">
                                        <label for="checkboxDanger1">Publish</label>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-block bg-gradient-success">Submit</button>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6">
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
                    </div>
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
                                    <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 450px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
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
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(function() {
        // Summernote
        $('.textarea').summernote();
    });

    $(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
@endsection