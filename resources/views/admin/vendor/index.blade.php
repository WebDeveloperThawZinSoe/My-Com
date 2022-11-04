@extends('admin.layouts.main')
@section('title', 'Vendor Home')
@section('content')
@include("admin.components.message")
<script type="text/javascript">
    $(document).ready(function() {

      $("#posts-table").TableCheckAll();

      $('#multi-delete').on('click', function() {
        var button = $(this);
        var selected = [];
        $('#posts-table .check:checked').each(function() {
          selected.push($(this).val());
        });

        Swal.fire({
          icon: 'warning',
            title: 'Are you sure you want to delete selected record(s)?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            $.ajax({
              type: 'post',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: button.data('route'),
              data: {
                'selected': selected
              },
              success: function (response, textStatus, xhr) {
                Swal.fire({
                  icon: 'success',
                    title: response,
                    showDenyButton: false,
                    showCancelButton: false,
                    confirmButtonText: 'Yes'
                }).then((result) => {
                  window.location='/posts'
                });
              }
            });
          }
        });
      });

      $('.delete-form').on('submit', function(e) {
        e.preventDefault();
        var button = $(this);

        Swal.fire({
          icon: 'warning',
            title: 'Are you sure you want to delete this record?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Yes'
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            $.ajax({
              type: 'post',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: button.data('route'),
              data: {
                '_method': 'delete'
              },
              success: function (response, textStatus, xhr) {
                Swal.fire({
                  icon: 'success',
                    title: response,
                    showDenyButton: false,
                    showCancelButton: false,
                    confirmButtonText: 'Yes'
                }).then((result) => {
                  window.location='/posts'
                });
              }
            });
          }
        });

      })
    });
  </script>
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
                {{-- <button class="btn btn-danger" id="multi-delete" data-route="{{ route('vendor#multi#delete') }}">Delete All Selected</button> --}}
                <div class="row">
                    <div class="col-md-1">
                        <a href="{{route('vendor#excel#export')}}" class="btn btn-primary">Export</a>
                    </div>
                    <div class="col-md-5">
                        <form action="{{route('vendor#excel#import')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" required>
                            <input type="submit" class="btn btn-primary" value="Import">
                        </form>
                    </div>
                  
                </div>
               

                <br>
                {{-- <button style="margin-bottom: 10px" class="btn btn-danger delete_all" data-url="{{ url('vendor#all#delete') }}">Delete All Selected</button> --}}
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            {{-- <th width="50px"><input type="checkbox" id="master"></th> --}}
                            {{-- <th scope="col"><input type="checkbox" class="check-all"></th> --}}
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
                                <tr id="tr_{{$vendor->id}}">
                                    {{-- <td><input type="checkbox" class="sub_chk" data-id="{{$vendor->id}}"></td> --}}
                                    {{-- <td><input type="checkbox" class="check" value="{{ $post->id }}"></td> --}}
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

    {{-- <script type="text/javascript">
        $(document).ready(function () {
    
    
            $('#master').on('click', function(e) {
             if($(this).is(':checked',true))  
             {
                $(".sub_chk").prop('checked', true);  
             } else {  
                $(".sub_chk").prop('checked',false);  
             }  
            });
    
    
            $('.delete_all').on('click', function(e) {
    
    
                var allVals = [];  
                $(".sub_chk:checked").each(function() {  
                    allVals.push($(this).attr('data-id'));
                });  
    
    
                if(allVals.length <=0)  
                {  
                    alert("Please select row.");  
                }  else {  
    
    
                    var check = confirm("Are you sure you want to delete this row?");  
                    if(check == true){  
    
    
                        var join_selected_values = allVals.join(","); 
    
    
                        $.ajax({
                            url: $(this).data('url'),
                            type: 'DELETE',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            data: 'ids='+join_selected_values,
                            success: function (data) {
                                if (data['success']) {
                                    $(".sub_chk:checked").each(function() {  
                                        $(this).parents("tr").remove();
                                    });
                                    alert(data['success']);
                                } else if (data['error']) {
                                    alert(data['error']);
                                } else {
                                    alert('Whoops Something went wrong!!');
                                }
                            },
                            error: function (data) {
                                alert(data.responseText);
                            }
                        });
    
    
                      $.each(allVals, function( index, value ) {
                          $('table tr').filter("[data-row-id='" + value + "']").remove();
                      });
                    }  
                }  
            });
    
    
            $('[data-toggle=confirmation]').confirmation({
                rootSelector: '[data-toggle=confirmation]',
                onConfirm: function (event, element) {
                    element.trigger('confirm');
                }
            });
    
    
            $(document).on('confirm', function (e) {
                var ele = e.target;
                e.preventDefault();
    
    
                $.ajax({
                    url: ele.href,
                    type: 'DELETE',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data['success']) {
                            $("#" + data['tr']).slideUp("slow");
                            alert(data['success']);
                        } else if (data['error']) {
                            alert(data['error']);
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                    }
                });
    
    
                return false;
            });
        });
    </script> --}}

@endsection
