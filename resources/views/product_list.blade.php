@extends('layouts.app')

@section('content')
<div class="row">
    <div class="sidebar col-md-3">
        <div id="category-heading">
            <h3 id="category-title">
                Category list
            </h3>
        </div>
        <div class="list-group">
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        App
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Games
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Mpvies
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Books
                    </span>
                </a>
            </div>
            <div class="list-group-item">
                <a href="#">
                    <span class="list-group-item-text">
                        Newspaper
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="main-content col-md-9">
        <div>
            @if (Auth::check()&&Auth::user()->isAdmin())
                <a href="{{route('create_product')}}">
                    <button class="btn btn-primary add-product-btn">Add new product</button>
                </a>
            @endif
        </div>
        <div class="category-list">
            <h3 class="category-name">
                .
            </h3>
        </div>
        <div class="content-product-list">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="box box-solid limit-p-width">
                        <div class="box-body affiliate product-item">
                            <div class="product-heading">
                                <a href="{{route('view_product',$product->id)}}">
                                    {{$product->name}}
                                </a>
                            </div>
                            <a href="{{route('view_product',$product->id)}}">
                                <img src="{{asset($product->feature_image)}}" class="img-responsive">
                            </a>

                            <div class="caption">
                                <h3>{{$product->price}}$</h3>

                                <p>{{$product->description}}</p>

                                <p>
                                    <a href="" class="btn btn-primary" role="button">
                                        Preview
                                    </a>
                                    <a href="" class="btn btn-success" role="button">
                                        Buy Now
                                    </a>
                                </p>
                                <p>
                                    @if (Auth::check()&&Auth::user()->isAdmin())
                                        <a href="{{route('delete_product',$product->id)}}" class="btn btn-danger" role="button">
                                            Delete
                                        </a>
                                    @endif
                                </p>
                                <p><i class="fa fa-shopping-cart margin-r5"></i> 47+ purchases</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection
