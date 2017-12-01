@extends('layouts.app')
@section('css')
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-face.css') }}" rel="stylesheet">
@endsection
@section('body')
<body class="tiki-categories chrome">
<div class="wrap">
    <div class="container">
        <div class="side-bar">
            <div class="box-left-wrap visible-lg-block" id="boxleft-wrap">
                <div class="panel-group box-left" id="boxleft" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="heading-category">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#collapse-category"
                                   aria-expanded="true" aria-controls="collapse-category">
                                    Category list
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-category" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="heading-category">
                            <div class="list-group js-cat-nav">
                                @foreach ($categories as $category)
                                    <div class="list-group-item book-home-catlink">
                                        <a href="{{route('product_list_by_category', $category->id)}}">
                                            <span class="list-group-item-text">
                                                {{$category->name}}
                                            </span>
                                        </a>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="product-listing">
            <div class="product-box no-mg">
                <div class="filter-list-box">
                    <h1>
                        Found {{$products->count()}} result for '{{$key}}' 
                    </h1>
                </div>
            </div>
            <div class="product-box no-mg">
                <div class="option-box-wrap">
                    <div class="option-box">
                    </div>
                </div>
                <div class="product-box-list" data-impress-list-title="Category | Sách kinh tế">
                    @foreach ($products as $product)
                        <div class="product-item" style="text-align: center;">
                            <a href="{{route('view_product', $product->id)}}" title="{{$product->name}}" class="">
                                <span class="image">
                                <img class="product-image img-responsive" src="{{URL::to('/')}}/{{$product->feature_image}}" alt="">
                                </span>
                                <span class="title" 
                                style="text-align: center;
                                        color: blue;
                                        font-size: 18px;
                                        font-weight: 700;">
                                    {{$product->name}}
                                </span>
                                <p class="price-sale" style="text-align: center;">
                                    <span class="sale-tag sale-tag-square">
                                        {{$product->price}} USD
                                    </span>
                                </p>
                            </a>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection