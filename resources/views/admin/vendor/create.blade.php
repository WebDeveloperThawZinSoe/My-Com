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
        <div class="col-9 offset-1 mt-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Vendor | <a href="{{ route('admin#vendor') }}">View All Vendor </a> </h3>
                </div>
                <form>
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
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Website">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea class="form-control" id="exampleInputPassword1" placeholder="Enter Address"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
