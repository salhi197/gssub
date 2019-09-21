@extends('layouts.app')


@section('content')
<div class="page-header page-title-left">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title">{{$produit[0]->nom}}</h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i>Accueil</a>
                                </li>
                                <li>
                                    <a href="shop.html">Produit</a>
                                </li>
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
                                        <img id="zoom-product" src="{{ asset('Storage/'.$produit[0]->path)}}" width="380" height="538" data-zoom-image="img/sections/shop/1.jpg" />
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
                                        <span class="price">{{$produit[0]->nom}}</span></div>
                                    <div class="description">
                                        <p>{{$produit[0]->description}}.</p>
                                    </div>
                                    <ul class="arrow-style ls1">
                                        <li>Point de Ventes : @if($produit[0]->pointdevente4 == 0) pointdevente4, @endif  @if($produit[0]->pointdevente1 == 0) pointdevente1, @endif  @if($produit[0]->pointdevente2 == 0) pointdevente2, @endif  @if($produit[0]->pointdevente3 == 0) pointdevente3 @endif , </li>
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
                            <br>
                            <div class="row">
                                <div class="owl-carousel margin-15 navigation-1 opacity text-left" data-pagination="false" data-items="3" data-autoplay="true" data-navigation="true">
                                            @foreach($produit as $p)
                                            <div class="product-img">
                                                <img src="{{ asset('Storage/'.$p->path)}}" alt="{{$p->path}}" width="265" height="276" />
                                            </div>
                                            @endforeach
                                </div>
                            </div>                            
                            <div class="section-title text-left">
                                <h3 class="title">Related Products</h3>
                            </div>
                            <div class="row">
                                <div class="owl-carousel margin-15 navigation-1 opacity text-left" data-pagination="false" data-items="3" data-autoplay="true" data-navigation="true">
                                    @foreach($produit as $p)
                                    <div class="item">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="shop-single.html"> <img src="{{ asset('Storage/'.$p->path)}}" alt="" width="265" height="276" /></a>
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
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- request -->
         @endsection  