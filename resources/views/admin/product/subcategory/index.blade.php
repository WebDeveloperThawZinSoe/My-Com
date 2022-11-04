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
                        <input type="text" name="categoryName" class="form-control" id="categoryName"
                            placeholder="Enter Category Name" value="{{old('categoryName')}}">
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

                        <span class="btn btn-success" data-toggle="modal" data-target="#category-detail_{{$item->id}}">
                            <i class="fa fa-info-circle" aria-hidden="true"></i></span>
                        <span class="btn btn-primary" data-toggle="modal" data-target="#category-edit_{{$item->id}}"> <i
                                class="fa fa-wrench" aria-hidden="true"></i></span>
                        <a href="{{route('admin#subcategory#delete',$item['id'])}}"><span class="btn btn-danger"
                                onclick="return confirm('Are You Sure To Delete This Category?')">
                                <i class="fa fa-minus-circle" aria-hidden="true"></i></span></a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $subCategories->links()}}
    </div>

</div>

@foreach ($subCategories as $data => $item)
<div class="modal fade" id="category-detail_{{$item->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Subcategory</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Name : </b> {{$item->name}} </p>
                <p><b>Category : </b> {{$item['category']['name']}} </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
@foreach ($subCategories as $data => $item)
<div class="modal fade" id="category-edit_{{$item->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Subcategory</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form action="{{route('admin#subcategory#update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="subCategoryId" value="{{ $item->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="categoryName" class="form-control" id="categoryName"
                                placeholder="Enter Category Name" value="{{$item->name}}">
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
                                        <option value="{{$category->id}}" @if ($item->category_id == $category->id)
                                            selected @endif>{{$category->name}}</option>
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

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
            {{-- from end  --}}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
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
