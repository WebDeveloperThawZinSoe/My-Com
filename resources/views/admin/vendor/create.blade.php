@extends('admin.layouts.main')
@section('title', 'Vendor Create')
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
                <form method="POST" action="{{ route('admin#vendor#create') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" name="vendorName" placeholder="Enter Name" required>
                        </div>
                        @error('vendorName')
                        <p class="text text-danger">{{ $message }}</p>
                            
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="text" class="form-control" name="vendorPhone" placeholder="Enter Phone" required>
                        </div>
                        @error('vendorPhone')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" name="vendorEmail" placeholder="Enter Email" required>
                        </div>
                        @error('vendorEmail')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Website</label>
                            <input type="text" class="form-control" name="vendorWebsite"
                                placeholder="Enter Website">
                        </div>
                        @error('vendorWebsite')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea class="form-control" name="vendorAddress" placeholder="Enter Address" required></textarea>
                        </div>
                        @error('vendorAddress')
                        <p class="text text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
