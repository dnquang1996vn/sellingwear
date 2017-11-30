@extends('layouts.app')
@section('css')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="tiki-product chrome">
<div class="wrap">
    <div class="container product-container">
        <div class="row product-summary" itemscope="" itemtype="http://schema.org/Product">
            <div class="product-image">
                <div class="image-box js-image-box">
                    <div class="magiczoom  ">
                        <a class="zoom-wrap-link">
                            <div style="height:387px;width:387px;" class="zoomWrapper"><img id="product-magiczoom" src="{{URL::to('/')}}/{{$product->feature_image}}" style="position: absolute;"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="product-cart">
                <div class="item-box">
                    <h1 class="item-name" itemprop="name" id="product-name">
                        {{$product->name}}          
                    </h1>
                    <div class="product-brand-block">
                        <div class="item-row1 brand-block">
                            <div class="item-price">
                                <div class="brand-block-row">
                                    <div itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
                                        <meta itemprop="name" content="Samsung">
                                        <meta itemprop="url" content="http://tiki.vn/thuong-hieu/samsung.html">
                                    </div>
                                    <div class="item-brand">
                                        <h6>Lable: </h6>
                                        <p>
                                            <a target="_blank" href="">
                                                {{$product->label}}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-xs-7 no-padding-right product-info-block">
                            <div class="item-row1">
                                <div class="item-price">
                                    <div class="price-block show-border">
                                        <p class="special-price-item">    
                                            <span>Price: </span>
                                            <span id="span-price">{{$product->price}}&nbsp;USD</span>
                                        </p>
                                    </div>
                                    <div class="top-feature-item bullet-wrap">
                                        <p>
                                            {{$product->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                                <div class="item-product-options">
                                    <div id="add-cart-action">
                                        <div class="add-cart-action" style="display: block">
                                            <div class="quantity-box">
                                                <div class="cta-box">
                                                    <button class="add-to-cart  js-add-to-cart is-css" type="button">
                                                        <span class="text">
                                                            Add to cart
                                                        </span>
                                                    </button>
                                                    <br><br>
                                                    @isAdmin
                                                        <button class="btn btn-primary">
                                                            <a href="{{route('create_product', $product->id)}}"
                                                            style="color: white">Update</a>
                                                        </button>
                                                        <button class="btn btn-danger">
                                                            <a href="{{route('delete_product', $product->id)}}" style="color: white">Delete</a>
                                                        </button>
                                                    @endisAdmin
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END INSTALLMENT -->
                                </div>
                            <!--bbbb-->
                        </div>
                    </div>
                    <div class="read-more-branch">
                        <p>
                            Watch more <a href="{{route('product_list_by_category', $product->category->id)}}">{{$product->category->name}}</a> category
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END JAVASCRIPT FOR IMAGE ENTRY -->
        <div class="row">
            <div class="col-xs-12">
                <!-- <div class="box-bought-related-product"></div> -->
                <div class="box-recentlyviewed-product" id="box-recentlyviewed-product" data-impress-list-title="Product Detail | Sản phẩm bạn đã xem">
                    <div data-reactroot=""></div>
                </div>
                <div class="product-content-box">
                    <div class="left">
                        <h3 class="product-table-title">detail information</h3>
                        <div class="white-panel">
                            {!!$product->detail_information!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection