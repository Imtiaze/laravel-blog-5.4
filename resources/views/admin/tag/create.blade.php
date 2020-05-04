@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tags</h1>
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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Tag</h3>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter tag name">
                            </div>
                            <div class="form-group">
                                <label for="slug">Tag Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-block bg-gradient-success">Submit Tag</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection