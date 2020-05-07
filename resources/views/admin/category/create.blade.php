@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category</h1>
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


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form role="form" id="categoryForm" action="{{ url('admin/category/store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <div class="card-body">

                                <!-- category Name -->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control {{ $errors->get('name') ? 'is-invalid' : ''}}" id="name" name="name" value="{{ old('name') }}" placeholder="Enter category name">

                                    @foreach($errors->get('name') as $error)
                                    <span class="error invalid-feedback" style="">{{ $error }}</span>
                                    @endforeach
                                </div>

                                <!-- Category Slug -->
                                <div class="form-group">
                                    <label for="slug">Category Slug</label>
                                    <input type="text" class="form-control {{ $errors->get('slug') ? 'is-invalid' : ''}}" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Enter slug" readonly>

                                    @foreach($errors->get('slug') as $error)
                                    <span class="error invalid-feedback" style="">{{ $error }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-block bg-gradient-success" id="category-submit-button">
                                    <i class="fas fa-circle-notch fa-spin" style="display:none;"></i>&nbsp&nbsp
                                    <span id="category-submit-text">Submit Category</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
<script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js' )}}"></script>
<script>
    /**
     *  Validation Category Form
     */
    $('#categoryForm').validate({
        rules: {
            name: {
                required: true,
                maxlength: 30,
            },
            slug: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Please enter title for the category",
            },
            subtitle: {
                required: "Please enter slug for the category",
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
            $('#category-submit-button').attr('disabled', true);
            $('.fa-spin').show();
            $('#category-submit-text').text('Submitting...');
            form.submit();
        }
    });

    /**
     *   Making Slug
     */
    $('#name').on('keyup', function() {
        let title = $('#name').val();
        title = (title.trim) ? title.trim() : title.replace(/^\s+|\s+$/g, '');
        let slug = title.split(/\s+/).join('-');
        $('#slug').val(slug);
    });
</script>
@endsection