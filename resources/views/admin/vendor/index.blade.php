@extends('admin.layouts.main')
@section('title', 'Vendor Home')
@section('content')
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
                @if (session('message'))
                    <div class="col-md-12">

                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Success</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                            class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{ session('message') }}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @endif

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
