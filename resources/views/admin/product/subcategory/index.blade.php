@extends('admin.layouts.main')
@section('title', 'Admin Panel | Category')
@section('content')
<style>

</style>

<div class="wrapper" style="padding-top: 30px">

    @include("admin.components.message")

    <div class="col-md-9 offset-md-1">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create SubCategory</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin#subcategory#create')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="categoryName" class="form-control" id="name"
                            placeholder="Enter Category Name">
                        @error('categoryName')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2" name="category" style="width: 100%;">
                                    <option value="">--- SELECT CATEGORY ---</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                        </div>

                    </div>




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
                    <th>Category</th>
                    <th style="width: 260px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subCategories as $data=>$item)
                <tr>
                    <td>{{ ++$data }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['category']['name'] }}</td>
                    <td>

                        <span class="btn btn-success" data-toggle="modal" data-target="#category-detail"> <i
                                class="fa fa-info-circle" aria-hidden="true"></i></span>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#category-edit"> <i
                                class="fa fa-wrench" aria-hidden="true"></i></span>
                        <a href="{{route('admin#subcategory#delete',$item['id'])}}"><span class="btn btn-danger"
                                onclick="return confirm('Are You Sure To Delete This Category?')">
                                <i class="fa fa-minus-circle" aria-hidden="true"></i></span></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class="modal fade" id="category-detail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
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
<div class="modal fade" id="category-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
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
$(function () {
//Initialize Select2 Elements
$('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
theme: 'bootstrap4'
})

@endsection
