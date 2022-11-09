@extends('admin.layouts.main')
@section('title','Purchase Create')
@section('content')
<div class="col-md-12 ">
    <br>
    @include("admin.components.message")
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Purchase Vouncher</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin#purchase#create') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"> Vouncher ID <span style="color:red">@error('voucherId')
                                {{ $message }}
                            @enderror</span> </label>
                            <input type="text" class="form-control" name="voucherId"
                                placeholder="Enter Vouncher ID">
                        </div>

                        <div class="form-group">
                            <label for="name"> Quantity <span style="color:red">@error('qty')
                                {{ $message }}
                            @enderror</span> </label>
                            <input type="number" class="form-control" name="qty"
                                placeholder="Enter Quantity">
                        </div>

                        <div class="form-group">
                            <label for="name"> Payment Method <span style="color:red">@error('paymentMethod')
                                {{ $message }}
                            @enderror</span> </label>
                            <select name="paymentMethod" class="form-control" id="">
                                <option value="" disabled selected>--- Select Payment Method ---</option>
                                <option value="cash">Cash</option>
                                <option value="kbz">KBZ Pay</option>
                                <option value="wave">Wave Money</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name"> Voucnher Images  </label> <span style="color:red">@error('voucherImages')
                                {{ $message }}
                            @enderror</span>
                            <input type="file" multiple class="form-control" name="voucherImages[]" multiple
                                >
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"> Vendor Shop <span style="color:red">@error('vendorId')
                                {{ $message }}
                            @enderror</span> </label>
                            <select type="text" class="form-control" name="vendorId"
                                placeholder="Enter Vouncher ID">
                                <option disabled selected >--- SELECT VENDOR SHOP ---</option>
                                @foreach($vendors as $vendor)
                                    <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name"> Total Price <span style="color:red">@error('total')
                                {{ $message }}
                            @enderror</span> </label>
                            <input type="number" class="form-control" name="total"
                                placeholder="Enter Price">
                        </div>
                        <div class="form-group">
                            <label for="name"> Translation Id <span style="color:red">@error('translationId')
                                {{ $message }}
                            @enderror</span></label>
                            <input type="number" class="form-control" name="translationId"
                                placeholder="Enter Translation ID">
                        </div>
                        <div class="form-group">
                            <label for="name"> Translation Image  <span style="color:red">@error('translationImage')
                                {{ $message }}
                            @enderror</span></label>
                            <input type="file" multiple class="form-control" name="translationImage"
                                >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="products">Products</label>
                        <textarea id="summernote" name="product" class="form-control" placeholder="Enter Products" cols="30" rows="10"></textarea>
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
