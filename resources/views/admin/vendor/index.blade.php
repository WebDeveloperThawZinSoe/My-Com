@extends('admin.layouts.main')
@section('title', 'Vendor Home')
@section('content')
    <div class="wrapper">
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        {{-- vendor table --}}
        @if (session('message'))
            {{ session('message') }};
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Vandor List</h3>
            </div>
            <div>
                <form action="{{ route('admin#vendor') }}" method="GET">
                    @csrf
                    <input type="text" name="key" value="{{ request('key') }}" id="" placeholder="Search">
                    <input type="submit" value="Search">
                </form>
                <h3>Search Key : {{ request('key') }}</h3>
            </div>
            @if (count($vendors) > 0)
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="col-2">Name</th>
                                <th class="col-1">Phone</th>
                                <th class="col-2">email</th>
                                <th class="col-2">Website</th>
                                <th class="col-3">Address</th>
                                <th class="col-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vendors as $vendor)
                                <tr>
                                    <td>{{ $vendor->name }}</td>
                                    <td>{{ $vendor->phone }}</td>
                                    <td>{{ $vendor->email }}</td>
                                    <td>{{ $vendor->website }}</td>
                                    <td>{{ $vendor->address }}</td>
                                    <td>
                                        <button class="btn btn-outline-secondary" title="See"><i
                                                class="fa-regular fa-eye"></i></button>
                                        <a href="{{ route('admin#vendor#update#route', $vendor->id) }}"
                                            class="text-decoration-none">
                                            <button class="btn btn-outline-secondary" title="Edit"><i
                                                    class="fa-regular fa-pen-to-square"></i></button>
                                        </a>
                                        <form action="{{ route('admin#vendor#delete') }}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $vendor->id }}">
                                            <button class="btn btn-outline-secondary" title="Delete"><i
                                                    class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $vendors->links() }}
                <!-- /.card-body -->
            @else
                <h3>There is no data</h3>
            @endif
        </div>
        {{-- end vendor table --}}
    </div>
@endsection
