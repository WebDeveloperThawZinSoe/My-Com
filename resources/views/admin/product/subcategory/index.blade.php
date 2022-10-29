@extends('admin.layouts.main')
@section('title','Admin Panel | Category')
@section('content')
<style>

</style>

<div class="wrapper" style="padding-top: 30px">


<div class="col-md-9 offset-md-1" >
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create SubCategory</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Category Name">
        </div>
    
        <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Category</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
             
            </div>

          </div>

        
        

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
  <!-- /.card -->



 

</div>

<div class="col-md-9 offset-md-1">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>Name</th>
        <th>Category</th>
        <th style="width: 260px">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>SubCategory</td>
        <td>Categroy</td>
        <td>
         
          <span class="btn btn-success" data-toggle="modal" data-target="#category-detail"> <i class="fa fa-info-circle" aria-hidden="true"></i></span>
          <span class="btn btn-primary"  data-toggle="modal" data-target="#category-edit"> <i class="fa fa-wrench" aria-hidden="true"></i></span>
          <span class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This Category?')"> <i class="fa fa-minus-circle" aria-hidden="true"></i></span>
         
        </td>
      </tr>

    </tbody>
  </table>
</div>

</div>

<div class="modal fade" id="category-detail">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="category-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection

@section('js')
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

@endsection
