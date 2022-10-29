@extends('admin.layouts.main')
@section('title', 'Admin Panel | Product')
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


        html * {
            box-sizing: border-box;
        }

        p {
            margin: 0;
        }

        .upload {
            &__box {
                padding: 40px;
            }

            &__inputfile {
                width: .1px;
                height: .1px;
                opacity: 0;
                overflow: hidden;
                position: absolute;
                z-index: -1;
            }

            &__btn {
                display: inline-block;
                font-weight: 600;
                color: #fff;
                text-align: center;
                min-width: 116px;
                padding: 5px;
                transition: all .3s ease;
                cursor: pointer;
                border: 2px solid;
                background-color: #4045ba;
                border-color: #4045ba;
                border-radius: 10px;
                line-height: 26px;
                font-size: 14px;

                &:hover {
                    background-color: unset;
                    color: #4045ba;
                    transition: all .3s ease;
                }

                &-box {
                    margin-bottom: 10px;
                }
            }

            &__img {
                &-wrap {
                    display: flex;
                    flex-wrap: wrap;
                    margin: 0 -10px;
                }

                &-box {
                    width: 200px;
                    padding: 0 10px;
                    margin-bottom: 12px;
                }

                &-close {
                    width: 24px;
                    height: 24px;
                    border-radius: 50%;
                    background-color: rgba(0, 0, 0, 0.5);
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    text-align: center;
                    line-height: 24px;
                    z-index: 1;
                    cursor: pointer;

                    &:after {
                        content: '\2716';
                        font-size: 14px;
                        color: white;
                    }
                }
            }
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
        .upload__img-box{
            width: 200px !important;
            height: 200px !important;
            display: inline-block;
        }
    </style>

    <div class="wrapper" style="padding-top: 30px">


        <div class="col-md-9 offset-md-1">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Product</h3>
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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sub Category</label>
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

                        <div class="form-group">
                            <div class="main-img-preview">
                                <img class="thumbnail img-preview"
                                    src="http://farm4.static.flickr.com/3316/3546531954_eef60a3d37.jpg"
                                    title="Preview Logo">
                            </div>
                            <div class="input-group">
                                <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File"
                                    disabled="disabled">
                                <div class="input-group-btn">
                                    <div class="fileUpload btn btn-danger fake-shadow">
                                        <span><i class="glyphicon glyphicon-upload"></i> Upload Feature Image</span>
                                        <input id="logo-id" name="logo" type="file" class="attachment_upload">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="buy_price">Buy Price</label>
                                    <input type="number" class="form-control" id="buy_price" placeholder="Enter Buy Price">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sell_price">Sell Price</label>
                                    <input type="number" class="form-control" id="sell_price"
                                        placeholder="Enter Selll Price">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="disc_price">Discount Price</label>
                                    <input type="number" class="form-control" id="disc_price"
                                        placeholder="Enter Discount Price">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="qty">Stock Quantity</label>
                                    <input type="number" class="form-control" id="qty" placeholder="Enter Quantity">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="number" class="form-control" id="size" placeholder="Enter Size">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="width">Width</label>
                                    <input type="number" class="form-control" id="width" placeholder="Enter Width">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="height">Height</label>
                                    <input type="number" class="form-control" id="height" placeholder="Enter Height">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="product_code">Product Code</label>
                                    <input type="number" class="form-control" id="product_code"
                                        placeholder="Enter Product Code">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="width">Color</label>
                                    <input type="color" class="form-control" id="width" placeholder="Enter Width">
                                </div>
                            </div>

                        </div>


                        <div class="upload__box">
                            <div class="upload__btn-box">
                                <label class="upload__btn">
                                    <p>Upload images</p>
                                    <input type="file" multiple=""  data-max_length="20" class="upload__inputfile btn btn-primary">
                                </label>
                            </div>
                            <div class="upload__img-wrap"></div>
                        </div>

                        <label for="desc">Description</label>
                        <textarea id="summernote" id="desc" placeholder="Product Description"></textarea>

           
                        <p  class="btn btn-info" onclick="addNewVariant()">Add Variant</button>

                        <div id="new_fields"></div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
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

    $(document).ready(function () {
        ImgUpload();
      });
      
      function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];
      
        $('.upload__inputfile').each(function () {
          $(this).on('change', function (e) {
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = $(this).attr('data-max_length');
      
            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function (f, index) {
      
              if (!f.type.match('image.*')) {
                return;
              }
      
              if (imgArray.length > maxLength) {
                return false
              } else {
                var len = 0;
                for (var i = 0; i < imgArray.length; i++) {
                  if (imgArray[i] !== undefined) {
                    len++;
                  }
                }
                if (len > maxLength) {
                  return false;
                } else {
                  imgArray.push(f);
      
                  var reader = new FileReader();
                  reader.onload = function (e) {
                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                    imgWrap.append(html);
                    iterator++;
                  }
                  reader.readAsDataURL(f);
                }
              }
            });
          });
        });
      
        $('body').on('click', ".upload__img-close", function (e) {
          var file = $(this).parent().data("file");
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
              imgArray.splice(i, 1);
              break;
            }
          }
          $(this).parent().parent().remove();
        });
      }


      $(document).ready(function() {
        $('#summernote').summernote();
      });

      function addNewVariant(){
        var div1=document.getElementById("new_fields");
        div1.innerHTML +="";
      }
@endsection
