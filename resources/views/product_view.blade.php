@extends('layouts.app')
@section('content')
<style>
    table#chi-tiet {
        width: 610px !important;
    }



    .row {
        display: table;
    }

    .product-summary {
        background: #fff;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        border-radius: 0 0 4px 4px;
    }

    .product-image {
        width: 527px;
        border-right: 2px solid #f7f7f7;
        padding: 24px 24px 20px 20px;
    }

    .product-cart {
        width: 711px !important;
        padding: 0 24px;
    }
</style>
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
