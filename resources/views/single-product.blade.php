@extends('layouts.app')


@section('content')
<div class="page-header page-title-left">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title">Financial For the Non Financial Manager II</h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li class="active">Shop Single View</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page-header -->
            <section class="shop-page shop page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-product">
                                        <img id="zoom-product" src="img/sections/shop/1.jpg" width="380" height="538" data-zoom-image="img/sections/shop/1.jpg" />
                                    </div>
                                </div>
                                <!-- .product -->
                                <div class="col-md-8 col-sm-6">
                                    <div class="product-rating pull-right">
                                        <div class="star-rating">
                                            <i class="fa fa-star text-color"></i>
                                            <i class="fa fa-star text-color"></i>
                                            <i class="fa fa-star text-color"></i>
                                            <i class="fa fa-star text-color"></i>
                                            <i class="fa fa-star-half-o text-color"></i></div>
                                    </div>
                                    <div class="price-details">
                                        <span class="actual-price">$18.00</span>
                                        <span class="price">$9</span></div>
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec posuere odio.Phasellus odio lectus, ultrices non pretium ac, mollis id elit.Fusce tempor tellus non felis tempus vestibulum. Donec molestie purus sem. Suspendisse a neque quam.</p>
                                    </div>
                                    <ul class="arrow-style ls1">
                                        <li>Type : Finance</li>
                                        <li>Author : Duncan Willams</li>
                                        <li>Publisher: Bookboom</li>
                                    </ul>
                                    <div class="product-regulator">
                                        <button id="minus" type="button">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <div id="output">1</div>
                                        <button id="plus" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <a href="cart.html" class="btn btn-default btn-md">Add To Cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            
                            <div class="section-title text-left">
                                <h3 class="title">Related Products</h3>
                            </div>
                            <div class="row">
                                <div class="owl-carousel margin-15 navigation-1 opacity text-left" data-pagination="false" data-items="3" data-autoplay="true" data-navigation="true">
                                    <div class="item">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop-single.html"> <img src="img/sections/shop/1.jpg" alt="" width="265" height="276" /></a>
                                            </div>
                                            <div class="product-details">
                                                <h4>Financial Manager II</h4>
                                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                                <div class="price-box">
                                                    <span class="price-old">$18</span>
                                                    <span class="price">$9</span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="shop-single.html#" class="btn btn-default btn-block"> Add to Cart <i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product -->
                                    <div class="item">
                                        <div class="product-item">
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon red white no-gradiant">50% off*</div>
                                            </div>
                                            <div class="product-img">
                                                <a href="shop-single.html"><img src="img/sections/shop/2.jpg" alt="" width="265" height="276" /></a>
                                            </div>
                                            <div class="product-details">
                                                <h4>Financial Market</h4>
                                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                                <div class="price-box">
                                                    <span class="price-old">$32</span>
                                                    <span class="price">$27</span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="shop-single.html#" class="btn btn-default btn-block"> Add to Cart <i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product -->
                                    <div class="item">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop-single.html"><img src="img/sections/shop/3.jpg" alt="" width="265" height="276" /></a>
                                            </div>
                                            <div class="product-details">
                                                <h4>Service Consultant</h4>
                                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                                <div class="price-box">
                                                    <span class="price-old">$19</span>
                                                    <span class="price">$13</span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="shop-single.html#" class="btn btn-default btn-block"> Add to Cart <i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product -->
                                    <div class="item">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop-single.html"><img src="img/sections/shop/4.jpg" alt="" width="265" height="276" /></a>
                                            </div>
                                            <div class="product-details">
                                                <h4>Book Shelf</h4>
                                                <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                                <div class="price-box">
                                                    <span class="price-old">$48</span>
                                                    <span class="price">$21</span>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <a href="shop-single.html#" class="btn btn-default btn-block"> Add to Cart <i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- request -->
         @endsection  