@extends('admin.layouts.main')
@section('title','Admin Panel | Category')
@section('content')
<style>
  /* File Upload */
.fake-shadow {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload #logo-id {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.img-preview {
    max-width: 100%;
}
</style>

<div class="wrapper" style="padding-top: 30px">


<div class="col-md-9 offset-md-1" >
  <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Category Name">
        </div>
    
        <div class="form-group">
          <div class="main-img-preview">
            <img class="thumbnail img-preview" src="http://farm4.static.flickr.com/3316/3546531954_eef60a3d37.jpg" title="Preview Logo">
          </div>
          <div class="input-group">
            <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
            <div class="input-group-btn">
              <div class="fileUpload btn btn-danger fake-shadow">
                <span><i class="glyphicon glyphicon-upload"></i> Upload Logo</span>
                <input id="logo-id" name="logo" type="file" class="attachment_upload">
              </div>
            </div>
          </div>
        
        </div>

        <div class="form-group">
          <label for="desc">Description</label>
          <textarea type="text" class="form-control" id="desc" placeholder="Enter Category Description"></textarea>
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
        <th style="width: 260px">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1.</td>
        <td>Update software</td>
        {{-- <td>
          <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
          </div>
        </td> --}}
        <td>
         
          <span class="btn btn-success"> <i class="fa fa-info-circle" aria-hidden="true"></i></span>
          <span class="btn btn-primary"> <i class="fa fa-wrench" aria-hidden="true"></i></span>
          <span class="btn btn-danger"> <i class="fa fa-minus-circle" aria-hidden="true"></i></span>
         
        </td>
      </tr>

    </tbody>
  </table>
</div>

</div>

@endsection

@section('js')
$(document).ready(function() {
  var brand = document.getElementById('logo-id');
  brand.className = 'attachment_upload';
  brand.onchange = function() {
      document.getElementById('fakeUploadLogo').value = this.value.substring(12);
  };


  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function(e) {
              $('.img-preview').attr('src', e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
      }
  }
  $("#logo-id").change(function() {
      readURL(this);
  });
});

@endsection
