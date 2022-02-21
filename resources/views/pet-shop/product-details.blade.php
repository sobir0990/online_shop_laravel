@extends('layouts.master')

@section('title','Product details')

@section('content')
    <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(assets/img/banner/banner-2.jpg);">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Product Details</h2>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li class="active">Product Details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-img">
                        <img id="zoompro" src="/storage/{{$product->image}}"
                             data-zoom-image="/storage/{{$product->image}}" alt="zoom"/>
                        <div id="gallery" class="mt-12 product-dec-slider owl-carousel">
                            <a data-image="/storage/{{$product->image}}"
                               data-zoom-image="/storage/{{$product->image}}">
                                <img src="/storage/{{$product->image}}" alt="">
                            </a>
                            <a data-image="/storage/{{$product->image}}"
                               data-zoom-image="/storage/{{$product->image}}">
                                <img src="/storage/{{$product->image}}" alt="">
                            </a>
                            <a data-image="/storage/{{$product->image}}"
                               data-zoom-image="/storage/{{$product->image}}">
                                <img src="/storage/{{$product->image}}" alt="">
                            </a>
                            <a data-image="/storage/{{$product->image}}"
                               data-zoom-image="/storage/{{$product->image}}">
                                <img src="/storage/{{$product->image}}" alt="">
                            </a>
                            <a data-image="/storage/{{$product->image}}"
                               data-zoom-image="/storage/{{$product->image}}">
                                <img src="/storage/{{$product->image}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content">
                        <h2>{{$product->name}}</h2>
                        <div class="product-rating">
                            <i class="ti-star theme-color"></i>
                            <i class="ti-star theme-color"></i>
                            <i class="ti-star theme-color"></i>
                            <i class="ti-star"></i>
                            <i class="ti-star"></i>
                            <span> ( 01 Customer Review )</span>
                        </div>
                        <div class="product-price">
                            <span class="new">${{$product->price}}</span>
                            {{--                            <span class="old">$50.00</span>--}}
                        </div>
                        <div class="in-stock">
                            <span><i class="ion-android-checkbox-outline"></i> In Stock</span>
                        </div>
                        <div class="sku">
                            <span>SKU#: MS04</span>
                        </div>
                        <p>Founded in 1989, Jack & Jones is a Danish brand that offers cool, relaxed designs that
                            express a strong visual style through their diffusion lines, Jack & Jones intelligence and
                            Jack & Jones vintage.</p>
                        <div class="product-details-style shorting-style mt-30">
                            <label>color:</label>
                            <select>
                                <option value=""> Choose an option</option>
                                <option value=""> orange</option>
                                <option value=""> pink</option>
                                <option value=""> yellow</option>
                            </select>
                        </div>
                            <div class="quality-wrapper mt-30 product-quantity">
                                <label>Qty:</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qty" id="qty" value="2">
                                </div>
                            </div>

                            <input type="hidden" name="id" id="product_id" value="{{$product->id}}">
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a class="addtocart-btn" href="" id="cart" title="Add to cart">
                                        <i class="ion-bag"></i>
                                        Add to cart
                                    </a>
{{--                                    <button class="order-button" type="submit"><i class="ion-bag"></i>Add to cart--}}
{{--                                    </button>--}}
                                </div>
{{--                                <button class="btn btn-success" id="cart">Cart</button>--}}

                                <div class="product-list-action-right">
                                    <a href="#" title="Wishlist">
                                        <i class="ti-heart" style="margin-top: 4px"></i>
                                    </a>
                                </div>
                            </div>
                        <div class="social-icon mt-30">
                            <ul>
                                <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-social-skype"></i></a></li>
                                <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area pb-100">
        <div class="container">
            <div class="description-review-wrapper gray-bg pt-40">
                <div class="description-review-topbar nav text-center">
                    <a class="active" data-toggle="tab" href="#des-details1">DESCRIPTION</a>
                    <a data-toggle="tab" href="#des-details2">MORE INFORMATION</a>
                    <a data-toggle="tab" href="#des-details3">REVIEWS (2)</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            <p>This stewpot is part of the Scanpan Classic cookware range, which boasts GreenTek
                                non-stick coating which is 100% PFOA free, meaning it's safer for your family and the
                                environment. The heavy-duty, pressure-cast aluminum body has an extra-thick base for
                                quick, even heating and it is compatible with all cooking surfaces (excluding
                                induction). The extraordinarily hard exterior surface is a combination of ceramic and
                                titanium nonstick cooking surface which is impossible to scrape away, even with metal
                                utensils. Patented spring-lock handle stays cool during normal stove top use and the
                                stewpot is also oven safe from up to 260°C. It's also dishwasher safe for easy
                                cleanup. </p>
                            <p>Scanpan is designed and manufactured in Denmark and offers a lifetime warranty.</p>
                            <ul>
                                <li>Key Features:</li>
                                <li>Heavy duty, pressure cast aluminium with extra thick base for quick heat up</li>
                                <li>Ceramic titanium surface with PFOA-free GreenTek non-stick coating</li>
                                <li>Fat-free frying, metal utensils safe</li>
                                <li>Suitable for all stove tops, except induction</li>
                                <li>Guaranteed not to warp</li>
                                <li>Fast and even heat distribution</li>
                                <li>Ovenproof up to 260°C</li>
                                <li>Dishwasher safe - but not recommended</li>
                                <li>Designed and manufactured in Denmark</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details2" class="tab-pane">
                        <div class="product-anotherinfo-wrapper">
                            <ul>
                                <li><span>name:</span> Scanpan Classic Covered</li>
                                <li><span>color:</span> orange , pink , yellow</li>
                                <li><span>size:</span> xl, l , m , sl</li>
                                <li><span>length:</span> 102cm, 110cm , 115cm</li>
                                <li><span>Brand:</span> Nike, Religion, Diesel, Monki</li>
                            </ul>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="rattings-wrapper">
                            <div class="sin-rattings">
                                <div class="star-author-all">
                                    <div class="product-rating f-left">
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="ratting-author f-right">
                                        <h3>tayeb rayed</h3>
                                        <span>12:24</span>
                                        <span>9 March 2018</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                            </div>
                            <div class="sin-rattings">
                                <div class="star-author-all">
                                    <div class="product-rating f-left">
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star theme-color"></i>
                                        <i class="ti-star"></i>
                                        <span>(4)</span>
                                    </div>
                                    <div class="ratting-author f-right">
                                        <h3>farhana shuvo</h3>
                                        <span>12:24</span>
                                        <span>9 March 2018</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</p>
                            </div>
                        </div>
                        <div class="ratting-form-wrapper">
                            <h3>Add your Comments :</h3>
                            <div class="ratting-form">
                                <form action="#">
                                    <div class="star-box">
                                        <h2>Rating:</h2>
                                        <div class="product-rating">
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star theme-color"></i>
                                            <i class="ti-star"></i>
                                            <i class="ti-star"></i>
                                            <span>(3)</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="rating-form-style mb-20">
                                                <input placeholder="Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rating-form-style mb-20">
                                                <input placeholder="Email" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="rating-form-style form-submit">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <input type="submit" value="add review">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product-area pt-95 pb-80 gray-bg">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h4>Most Populer</h4>
                <h2>Related Products</h2>
            </div>
            <div class="related-product-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{asset('assets/img/product/product-4.jpg')}}" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-action-wishlist">
                            <a title="Wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="product-details.html">Dog Calcium Food</a></h4>
                        <div class="product-price">
                            <span class="new">$20.00 </span>
                            <span class="old">$50.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-5.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-action-wishlist">
                            <a title="Wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="product-details.html">Cat Buffalo Food</a></h4>
                        <div class="product-price">
                            <span class="new">$22.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-6.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-action-wishlist">
                            <a title="Wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="product-details.html">Legacy Dog Food</a></h4>
                        <div class="product-price">
                            <span class="new">$50.00 </span>
                            <span class="old">$70.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-7.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-action-wishlist">
                            <a title="Wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="product-details.html">Chicken Dry Cat Food</a></h4>
                        <div class="product-price">
                            <span class="new">$60.00 </span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-8.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-action-wishlist">
                            <a title="Wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="product-details.html">Stomach Dog Food</a></h4>
                        <div class="product-price">
                            <span class="new">$70.00 </span>
                            <span class="old">$90.00</span>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="assets/img/product/product-9.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="ti-plus"></i>
                            </a>
                            <a title="Add To Cart" href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        <div class="product-action-wishlist">
                            <a title="Wishlist" href="#">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="product-details.html">Nourish Puppy Food</a></h4>
                        <div class="product-price">
                            <span class="new">$80.00 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .order-button {
        background-color: #7e4c4f;
        color: #fff;
        display: inline-block;
        font-size: 14px;
        font-weight: bold;
        line-height: 1;
        padding: 12px 22px;
        text-transform: uppercase;
    }

    .order-button:hover {
        background-color: #333;
    }
</style>
{{--@push('scripts')--}}
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    let qty = $('#qty').val();
    let id = {{$product->id}}
    $(document).on("click", "#cart", function (e) {
        e.preventDefault();
        $.ajax({
            url: '/add-cart',
            type: 'get',
            data: {
                'id': id,
                'qty': qty
            },
            success: function () {
                location.reload();
            },
            error: function () {
                console.log('error');

            }
        });


    })
</script>
{{--@endpush--}}
@endsection
