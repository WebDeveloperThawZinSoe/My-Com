@extends('admin.layouts.main')
@section('title', 'Vendor Detail')
@section('content')
    <div class="wrapper">
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        {{-- main content --}}
        <div class="row">
            <div class="col-8 offset-2 mt-3">
                <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="{{ asset('admin/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Nina Mcintire</h3>

                    <p class="text-muted text-center">Vendor</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fa-solid fa-phone"></i> Phone</strong>

                    <p class="text-muted">
                        09252628293
                    </p>

                    <hr>

                    <strong><i class="fa-regular fa-envelope"></i> Email</strong>

                    <p class="text-muted">mto@gmail.com</p>

                    <hr>

                    <strong><i class="fa-solid fa-earth-asia"></i> Website</strong>

                    <p class="text-muted">
                        https://mto.com
                    </p>

                    <hr>

                    <strong><i class="fa-regular fa-map"></i> Address</strong>

                    <p class="text-muted">
                        Yangon
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            </div>
        </div>
        {{-- main content end --}}
    </div>
    {{-- end vendor table --}}
    </div>
@endsection
