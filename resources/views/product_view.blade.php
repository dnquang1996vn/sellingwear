@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="text-align: center;">
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
        <div class="row">
            <h1>Detail Imformation</h1>
            <div class="col-md-10 col-md-offset-1" style="text-align: justify;">
                {!!$product->detail_information!!}
            </div>
        </div>
@endsection