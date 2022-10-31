@extends('admin.layouts.main')
@section('title', 'Vendor Update')
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
                <form method="POST" action="{{ route('admin#vendor#update') }}">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="vendorId" value="{{ $vendor->id }}">
                        <div class="form-group">
                            <label for="vendorName">Name</label>
                            <input type="text" id="vendorName" class="form-control" value="{{ old('vendorName', $vendor->name) }}" name="vendorName" placeholder="Enter Name" required>
                        </div>
                        @error('vendorName')
                            {{ $message }}
                        @enderror
                        <div class="form-group">
                            <label for="vendorPhone">Phone</label>
                            <input type="text" id="vendorPhone" class="form-control" value="{{ old('vendorPhone', $vendor->phone) }}" name="vendorPhone" placeholder="Enter Phone" required>
                        </div>
                        @error('vendorPhone')
                            {{ $message }}
                        @enderror
                        <div class="form-group">
                            <label for="vendorEmail">Email</label>
                            <input type="text" id="vendorEmail" class="form-control" value="{{ old('vendorEmail', $vendor->email) }}" name="vendorEmail" placeholder="Enter Email" required>
                        </div>
                        @error('vendorEmail')
                            {{ $message }}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Website</label>
                            <input type="text" class="form-control" name="vendorWebsite" value="{{ old('vendorWebsite', $vendor->website) }}"
                                placeholder="Enter Website">
                        </div>
                        @error('vendorWebsite')
                            {{$message}}
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <textarea class="form-control" name="vendorAddress" placeholder="Enter Address" required>value="{{ old('vendorAddress', $vendor->address) }}"</textarea>
                        </div>
                        @error('vendorAddress')
                            {{ $message }}
                        @enderror
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
