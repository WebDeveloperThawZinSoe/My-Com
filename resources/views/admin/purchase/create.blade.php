@extends('admin.layouts.main')
@section('title','Purchase Create')
@section('content')
<div class="col-md-12 ">
    <br>
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Purchase Vouncher</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"> Vouncher ID <span style="color:red">*</span> </label>
                            <input type="text" class="form-control" name="categoryName"
                                placeholder="Enter Vouncher ID">
                        </div>
                      
                        <div class="form-group">
                            <label for="name"> Quantity <span style="color:red">*</span> </label>
                            <input type="number" class="form-control" name="qty"
                                placeholder="Enter Quantity">
                        </div>

                        <div class="form-group">
                            <label for="name"> Payment Method <span style="color:red">*</span> </label>
                            <select name="payment_method" class="form-control" id="">
                                <option value="" disabled selected>--- Select Payment Method ---</option>
                                <option value="cash">Cash</option>
                                <option value="cash">KBZ Pay</option>
                                <option value="cash">Wave Money</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name"> Voucnher Images  </label>
                            <input type="file" multiple class="form-control" name="qty"
                                >
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"> Vendor Shop <span style="color:red">*</span> </label>
                            <select type="text" class="form-control" name="categoryName"
                                placeholder="Enter Vouncher ID">
                                <option disabled selected >--- SELECT VENDOR SHOP ---</option>
                                @foreach($vendors as $vendor)
                                    <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name"> Total Price <span style="color:red">*</span> </label>
                            <input type="number" class="form-control" name="price"
                                placeholder="Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="name"> Translation Id </label>
                            <input type="number" class="form-control" name="price"
                                placeholder="Enter Translation ID">
                        </div>
                        <div class="form-group">
                            <label for="name"> Translation Image  </label>
                            <input type="file" multiple class="form-control" name="qty"
                                >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="products">Products <span style="color:red">*</span> </label>
                        <textarea id="summernote" name="" class="form-control" placeholder="Enter Products" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
             
            
                {{-- @error('categoryName')
                <p class="text text-danger">{{ $message }}</p>
                @enderror --}}



            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <!-- /.card -->

</div
@endsection

@section('js')
$(document).ready(function() {
    $('#summernote').summernote();
  });
@endsection