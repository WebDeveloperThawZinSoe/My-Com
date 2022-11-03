{{-- @if (session('message'))
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
@endif --}}

@if (session('message'))
 <script>
    $(document).ready(function(){
        swal({
            title: "Good job!",
            text: "{{ session('message') }}",
            icon: "success",
            button: "Close",
            });
    });
 </script>
@endif