@extends('admin.layouts.main')
@section('title','Vendor Home')
@section('content')
<div class="wrapper">
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    {{-- vendor table --}}
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Vandor List</h3>
        </div>
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
            <tr>
              <td>Minn Thit Oo</td>
              <td>09818992739</td>
              <td>mto@gmail.com</td>
              <td>https://mto.com</td>
              <td>Myanmar</td>
              <td>
                <a href="{{ route('admin#vendor#details') }}">
                    <button class="btn btn-outline-secondary" title="See"><i class="fa-regular fa-eye"></i></button>
                </a>
                <button class="btn btn-outline-secondary" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                <button class="btn btn-outline-secondary" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
              </td>
            </tr>
            <tr>
                <td>Minn Thit Oo</td>
                <td>09818992739</td>
                <td>mto@gmail.com</td>
                <td>https://mto.com</td>
                <td>Myanmar</td>
                <td>
                  <button class="btn btn-outline-secondary" title="See"><i class="fa-regular fa-eye"></i></button>
                  <button class="btn btn-outline-secondary" title="Edit"><i class="fa-regular fa-pen-to-square"></i></button>
                  <button class="btn btn-outline-secondary" title="Delete"><i class="fa-regular fa-trash-can"></i></button>
                </td>
            </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    {{-- end vendor table --}}
  </div>
@endsection
