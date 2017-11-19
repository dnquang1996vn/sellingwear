@extends('layouts.app')
@section('css')
<link href="{{ asset('css/content/productList.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="row product-summary">
    <div class="product-image">
        <div class="col-md-6 " style="text-align: center; width: 387px; height: 387px">
            <h1 style="color: blue">{{$product->name}}</h1>
            <div class="box-body affiliate product-item">
                <a href="{{route('view_product',$product->id)}}">
                    <img src="{{asset($product->feature_image)}}" class="img-responsive">
                </a>
                <h2>
                    Price:{{$product->price}}$
                </h2>
                <h2>
                    {{$product->description}}
                </h2>
            </div>
        </div>
    </div>
    <div class="product-cart">
        <h1>Detail Imformation</h1>
        <div>
            {!!$product->detail_information!!}
        </div>
    </div>
</div>

@endsection
