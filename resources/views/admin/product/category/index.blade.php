@extends('admin.layouts.main')
@section('title', 'Admin Panel | Category')
@section('content')
    <style>
        /* File Upload */
        .fake-shadow {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .fileUpload {
            position: relative;
            overflow: hidden;
        }

        .fileUpload #logo-id {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 33px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .img-preview {
            max-width: 100%;
        }
    </style>

    <div class="wrapper" style="padding-top: 30px">

        @include("admin.components.message")

        <div class="col-md-9 offset-md-1">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('admin#category#create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="categoryName"
                                placeholder="Enter Category Name">
                        </div>

                        @error('categoryName')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <div class="main-img-preview">
                                <img class="thumbnail img-preview"
                                    src="http://farm4.static.flickr.com/3316/3546531954_eef60a3d37.jpg"
                                    title="Preview Logo">
                            </div>
                            <div class="input-group">
                                <input name="categoryImage" class="form-control fake-shadow" placeholder="Choose Image">
                                <div class="input-group-btn">
                                    <div class="fileUpload btn btn-danger fake-shadow">
                                        <span><i class="glyphicon glyphicon-upload"></i> Upload Image</span>
                                        <input id="logo-id" name="logo" type="file" class="attachment_upload">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea type="text" class="form-control" id="desc" name="categoryDescription"
                                placeholder="Enter Category Description"></textarea>
                        </div>
                        @error('categoryDescription')
                           <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>

        <div class="col-md-9 offset-md-1">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th style="width: 260px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $data=>$category)
                        <tr>
                            {{-- <input type="hidden" name="categoryId" value="{{ $category->id }}"> --}}
                            <td>{{ ++$data }}</td>
                            <td>{{ $category->name }}</td>
                            <td>

                                <span class="btn btn-success" data-toggle="modal" data-target="#category-detail_{{ $category->id }}"> <i
                                        class="fa fa-info-circle" aria-hidden="true"></i></span>
                                <form action="" method="GET" class="d-inline">
                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                    <input type="hidden" name="categoryName" value="{{ $category->name }}">
                                    <input type="hidden" name="categoryImage" value="{{ $category->image }}">
                                    <input type="hidden" name="categoryDescription" value="{{ $category->description }}">
                                    <span class="btn btn-primary" data-toggle="modal" data-target="#category-edit"> <i
                                        class="fa fa-wrench" aria-hidden="true"></i></span>
                                </form>

                                <form action="{{ route('admin#category#delete') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Are You Sure To Delete This Category?')"> <i
                                            class="fa fa-minus-circle" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links() }}
        </div>

    </div>
    @foreach ($categories as $data=>$category)
    <div class="modal fade" id="category-detail_{{ $category->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Category Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Name : {{ $category->name }} </p>
                    <img src="{{ asset('storage/category/'.$category->image) }}" class="img-thumbnail" alt="Category Image">
                    <p>Description : {{ $category->description }} </p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endforeach
    <div class="modal fade" id="category-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="categoryName">Name</label>
                            <input type="text" name="categoryName" id="categoryName" class="form-control" value="{{ request('categoryName') }}">
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('storage/category/'.request('categoryImage')) }}" class="img-thumbnail" alt="">
                            <input type="file" name="logo" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Description</label>
                            <textarea type="text" name="categoryDescription" id="categoryDescription" class="form-control">{{ request('categoryName') }}</textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('js')
    $(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
    document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };


    function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
    $('.img-preview').attr('src', e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
    }
    }
    $("#logo-id").change(function() {
    readURL(this);
    });
    });

@endsection
