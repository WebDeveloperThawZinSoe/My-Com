@extends('admin.layouts.main')
@section('title', 'Vendor Home')
@section('content')
@include("admin.components.message")
    <div class="wrapper" style="padding-top: 30px">

        <div>
            <div class="col-12 col-sm-12">
                <div>
                    <form action="{{ route('admin#vendor') }}" method="GET">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="text" name="key" value="{{ request('key') }}" id=""
                                        placeholder="Search" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" class="btn btn-primary" value="Search">
                                </div>
                            </div>


                        </div>

                    </form>
                    <h4>Search Key : {{ request('key') }}</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-1">
                        <a href="{{route('vendor#excel#export')}}" class="btn btn-primary">Export</a>
                    </div>
                    <div class="col-md-5">
                        <form action="{{route('vendor#excel#import')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file">
                            <input type="submit" class="btn btn-primary" value="Import">
                        </form>
                    </div>
                  
                </div>
               

                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Address</th>
                            <th style="width: 260px">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @if (count($vendors) > 0)
                            @foreach ($vendors as $no => $vendor)
                                <tr>
                                    <td>{{ ++$no }}</td>
                                    <td>{{ $vendor->name }}</td>
                                    <td>{{ $vendor->phone }}</td>
                                    <td>{{ $vendor->email }}</td>
                                    <td>{{ $vendor->website }}</td>
                                    <td>{{ $vendor->address }}</td>
                                    <td>
                                        <a href="{{ route('admin#vendor#update#route', $vendor->id) }}"
                                            class="text-decoration-none">
                                            <button class="btn btn-warning" title="Edit"><i
                                                    class="fa fa-wrench"></i></button>
                                        </a>
                                        <form action="{{ route('admin#vendor#delete') }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $vendor->id }}">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are You Sure To Delete This Category?')"> <i
                                                    class="fa fa-minus-circle" aria-hidden="true"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" style="text-align: center"> <b>There is no data</b> </td>
                            </tr>

                        @endif
                    </tbody>
                </table>
            </div>
            {{ $vendors->links() }}

        </div>




    </div>

@endsection
