@extends('admin.layouts.main')
@section('title', 'Admin Panel | Product Model')
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

    @include('admin.components.message')

    <div class="col-md-9 offset-md-1">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Product Model</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('admin#productModel#create')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Product Model Name</label>
                        <input type="text" class="form-control" name="productModelName"
                            placeholder="Enter Category Name">
                    </div>
                    @error('productModelName')
                    <p class="text text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <div class="main-img-preview">
                            <img class="thumbnail img-preview"
                                src="http://farm4.static.flickr.com/3316/3546531954_eef60a3d37.jpg"
                                title="Preview Logo">
                        </div>
                        <div class="input-group">
                            <input name="" class="form-control fake-shadow" placeholder="Choose Image">
                            <div class="input-group-btn">
                                <div class="fileUpload btn btn-danger fake-shadow">
                                    <span><i class="glyphicon glyphicon-upload"></i> Upload Image</span>
                                    <input id="logo-id" name="productModelImage" type="file" class="attachment_upload">
                                </div>
                            </div>
                        </div>
                        @error('productModelImage')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea type="text" class="form-control" id="desc" name="productModelDescription"
                            placeholder="Enter Product Description"></textarea>
                        @error('productModelDescription')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="cate">Category</label>
                        <select name="inputCategory" class="form-control" id="cate">
                            <option value="">Choose Category</option>
                            @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('inputCategory')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="cate">Sub Category</label>
                        <select name="inputSubCategory" class="form-control" id="cate">
                            <option value="">Choose Sub Category</option>
                            @foreach ($subCategories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('inputSubCategory')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- /.card-body -->
                </div>
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
                {{-- @foreach ($categories as $data => $category) --}}

                {{-- @endforeach --}}
            </tbody>
        </table>
        {{-- {{ $categories->links() }} --}}
    </div>

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
