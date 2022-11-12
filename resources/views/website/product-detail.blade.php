@extends('website.layout.main')
@section('title','Product Details')
@section('content')

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-9">
                        <div id="colorlib-logo"><a href="index.html">Footwear</a></div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <form action="#" class="search-wrap">
                            <div class="form-group">
                                <input type="search" class="form-control search" placeholder="Search">
                                <button class="btn btn-primary submit-search text-center" type="submit"><i
                                        class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="has-dropdown active">
                                <a href="men.html">Men</a>
                                <ul class="dropdown">
                                    <li><a href="product-detail.html">Product Detail</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="order-complete.html">Order Complete</a></li>
                                    <li><a href="add-to-wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="women.html">Women</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart
                                    [{{count($cart)}}]</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sale">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 text-center">
                        <div class="row">
                            <div class="owl-carousel2">
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col">
                                        <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="bread"><span><a href="index.html">Home</a></span> / <span>Product Details</span></p>
                </div>
            </div>
        </div>
    </div>


    <div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg product-detail-wrap">
                <div class="col-sm-8">
                    <div class="owl-carousel">
                        <div class="item">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="{{asset('productModelImage/'.$data->image)}}" class="img-fluid"
                                        alt="Free html5 bootstrap 4 template">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="images/item-2.jpg" class="img-fluid"
                                        alt="Free html5 bootstrap 4 template">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="images/item-3.jpg" class="img-fluid"
                                        alt="Free html5 bootstrap 4 template">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="images/item-4.jpg" class="img-fluid"
                                        alt="Free html5 bootstrap 4 template">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-desc">
                        <h3>{{$data->title}}</h3>
                        <p class="price">
                            <span>$68.00</span>
                            <span class="rate">
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-full"></i>
                                <i class="icon-star-half"></i>
                                (74 Rating)
                            </span>
                        </p>
                        <p><b>Category : </b>{{$data->category->name}}</p>
                        <p><b>Sub-Category : </b>{{$data->subcategory->name}}</p>

                        <input type="hidden" value="{{Auth::user()->id}}" id="userId">
                        <input type="hidden" value="{{$data->id}}" id="productId">
                        <div class="size-wrap">
                            <div class="block-26 mb-2">
                                <h4>Size</h4>
                                <ul>
                                    <li><a href="#">7</a></li>
                                    <li><a href="#">7.5</a></li>
                                    <li><a href="#">8</a></li>
                                    <li><a href="#">8.5</a></li>
                                    <li><a href="#">9</a></li>
                                    <li><a href="#">9.5</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">10.5</a></li>
                                    <li><a href="#">11</a></li>
                                    <li><a href="#">11.5</a></li>
                                    <li><a href="#">12</a></li>
                                    <li><a href="#">12.5</a></li>
                                    <li><a href="#">13</a></li>
                                    <li><a href="#">13.5</a></li>
                                    <li><a href="#">14</a></li>
                                </ul>
                            </div>
                            <div class="block-26 mb-4">
                                <h4>Width</h4>
                                <ul>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">W</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-btn">
                                <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                    <i class="icon-minus2"></i>
                                </button>
                            </span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                min="1" max="100">
                            <span class="input-group-btn ml-1">
                                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                    <i class="icon-plus2"></i>
                                </button>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="col-sm-12 text-center">
                                    <button type="button" class="btn btn-primary" id="addCartBtn">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                            href="#pills-description" role="tab" aria-controls="pills-description"
                                            aria-expanded="true">Description</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                            href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                            aria-expanded="true">Manufacturer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-review-tab" data-toggle="pill"
                                            href="#pills-review" role="tab" aria-controls="pills-review"
                                            aria-expanded="true">Review</a>
                                    </li> --}}
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel"
                                        aria-labelledby="pills-description-tab">
                                        {{$data->description}}
                                    </div>

                                    {{-- <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel"
                                        aria-labelledby="pills-manufacturer-tab">
                                        <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                            almost unorthographic life One day however a small line of blind text by the
                                            name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view
                                            back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                            Village and the subline of her own road, the Line Lane. Pityful a rethoric
                                            question ran over her cheek, then she continued her way.</p>
                                    </div>

                                    <div class="tab-pane border fade" id="pills-review" role="tabpanel"
                                        aria-labelledby="pills-review-tab">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h3 class="head">23 Reviews</h3>
                                                <div class="review">
                                                    <div class="user-img"
                                                        style="background-image: url(images/person1.jpg)"></div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">Jacob Webb</span>
                                                            <span class="text-right">14 March 2018</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-half"></i>
                                                                <i class="icon-star-empty"></i>
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i
                                                                        class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p>When she reached the first hills of the Italic Mountains, she
                                                            had a last view back on the skyline of her hometown
                                                            Bookmarksgrov</p>
                                                    </div>
                                                </div>
                                                <div class="review">
                                                    <div class="user-img"
                                                        style="background-image: url(images/person2.jpg)"></div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">Jacob Webb</span>
                                                            <span class="text-right">14 March 2018</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-half"></i>
                                                                <i class="icon-star-empty"></i>
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i
                                                                        class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p>When she reached the first hills of the Italic Mountains, she
                                                            had a last view back on the skyline of her hometown
                                                            Bookmarksgrov</p>
                                                    </div>
                                                </div>
                                                <div class="review">
                                                    <div class="user-img"
                                                        style="background-image: url(images/person3.jpg)"></div>
                                                    <div class="desc">
                                                        <h4>
                                                            <span class="text-left">Jacob Webb</span>
                                                            <span class="text-right">14 March 2018</span>
                                                        </h4>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-half"></i>
                                                                <i class="icon-star-empty"></i>
                                                            </span>
                                                            <span class="text-right"><a href="#" class="reply"><i
                                                                        class="icon-reply"></i></a></span>
                                                        </p>
                                                        <p>When she reached the first hills of the Italic Mountains, she
                                                            had a last view back on the skyline of her hometown
                                                            Bookmarksgrov</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="rating-wrap">
                                                    <h3 class="head">Give a Review</h3>
                                                    <div class="wrap">
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                (98%)
                                                            </span>
                                                            <span>20 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (85%)
                                                            </span>
                                                            <span>10 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (70%)
                                                            </span>
                                                            <span>5 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (10%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (0%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="colorlib-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col footer-col colorlib-widget">
                    <h4>About Footwear</h4>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                        unorthographic life</p>
                    <p>
                    <ul class="colorlib-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
                <div class="col footer-col colorlib-widget">
                    <h4>Customer Care</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Returns/Exchange</a></li>
                        <li><a href="#">Gift Voucher</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Special</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">Site maps</a></li>
                    </ul>
                    </p>
                </div>
                <div class="col footer-col colorlib-widget">
                    <h4>Information</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Order Tracking</a></li>
                    </ul>
                    </p>
                </div>

                <div class="col footer-col">
                    <h4>News</h4>
                    <ul class="colorlib-footer-links">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Exhibitions</a></li>
                    </ul>
                </div>

                <div class="col footer-col">
                    <h4>Contact Information</h4>
                    <ul class="colorlib-footer-links">
                        <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                        <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                        <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        <li><a href="#">yoursite.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        <span>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                        <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a
                                href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
@section('scriptSource')
<script>
    $(document).ready(function () {

                    var quantitiy = 0;
                    $('.quantity-right-plus').click(function (e) {

                        // Stop acting like a button
                        e.preventDefault();
                        // Get the field name
                        var quantity = parseInt($('#quantity').val());

                        // If is not undefined

                        $('#quantity').val(quantity + 1);


                        // Increment

                    });

                    $('.quantity-left-minus').click(function (e) {
                        // Stop acting like a button
                        e.preventDefault();
                        // Get the field name
                        var quantity = parseInt($('#quantity').val());

                        // If is not undefined

                        // Increment
                        if (quantity > 0) {
                            $('#quantity').val(quantity - 1);
                        }
                    });

                    $('#addCartBtn').click(function (e) {
                        e.preventDefault();
                        // alert($('#quantity').val());
                        $data = {
                            'orderCount' : $('#quantity').val(),
                            'userId' : $('#userId').val(),
                            'productId' : $('#productId').val(),
                        }
                        // console.log($data);

                        $.ajax({
                        type: "get",
                        url: "/home/product/ajax/addtocart",
                        data: $data,
                        dataType: 'json',
                        success: function (response) {
                           if(response.status == 'success'){
                            window.location.href = "http://localhost:8000"
                           }
                        }
                        });
                    });
                });
</script>
@endsection
