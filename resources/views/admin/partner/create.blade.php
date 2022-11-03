@extends('admin.layouts.main')
@section('title','Partner Create')
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

  @include('admin.components.message')

    <div class="col-md-12" >
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create Partner</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name <span style="color:red">*</span></label>
              <input type="text" name="name"  class="form-control" id="name" placeholder="Enter Name">
            </div>
            @error('name')
              <p class="text text-danger">{{ $message }}</p>
            @enderror
        
            <div class="form-group">
              <div class="main-img-preview">
                <img class="thumbnail img-preview" src="http://farm4.static.flickr.com/3316/3546531954_eef60a3d37.jpg" title="Preview Logo">
              </div>
              <div class="input-group">
                <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                <div class="input-group-btn">
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload Logo <span style="color:red">*</span></span>
                    <input id="logo-id"  name="logo" type="file" class="attachment_upload">
                  </div>
                </div>
              </div>
            
            </div>

            @error('logo')
            <p class="text text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
              <label for="phone">Phone <span style="color:red">*</span></label>
              <input type="number" name="phone"  class="form-control" id="phone" placeholder="Enter Phone">
            </div>

            @error('phone')
            <p class="text text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
              <label for="name">Password <span style="color:red">*</span></label>
              <input type="text" name="password"  class="form-control" id="name" placeholder="Enter Password">
            </div>
            @error('password')
            <p class="text text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
              <label for="refer">Refer Point <span style="color:red">*</span></label>
              <input type="number" name="refer_point" class="form-control" id="refer" placeholder="Enter Point" value="0">
            </div>

            @error('refer_point')
            <p class="text text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
              <label for="refer_code">Refer Code <span style="color:red">*</span></label>
              <input type="text" name="refer_code"  class="form-control" id="refer_code" placeholder="Enter Refer Code" >
            </div>
            @error('refer_code')
            <p class="text text-danger">{{ $message }}</p>
            @enderror
    
            <div class="form-group">
              <label for="desc">Address <span style="color:red">*</span></label>
              <textarea  type="text" class="form-control" id="desc" placeholder="Enter Address"></textarea>
            </div>
    
            @error('address')
            <p class="text text-danger">{{ $message }}</p>
            @enderror
            
    
          </div>
          <!-- /.card-body -->
    
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Partner</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    
    
    
     
    
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
