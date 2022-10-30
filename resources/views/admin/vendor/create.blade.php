@extends('admin.layouts.main')
@section('title', 'Admin Home')
@section('content')
    <div class="row">
        {{--
        name (required)
        phone (required)
        email (required)
        website
        address(required)
        --}}
        <div class="col-6 offset-3 mt-5">
            <form class="shadow-sm">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Website</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Website">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
