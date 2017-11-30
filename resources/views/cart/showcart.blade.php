@extends('layouts.app')
@section('css')
<link href="{{ asset('css/order.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-face.css') }}" rel="stylesheet">
@endsection
@section('body')
<body class="tiki-cart chrome">
<div class="wrap">
   <div class="container have-height">
      <div class="row">
         <div class="col-xs-12">
            <h5 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Your cart <span>({{$carts->count()}} product)</span></h5>
         </div>
         <div class="col-xs-8 cart-col-1">
            @foreach ($carts as $cart)
            <div id="shopping-cart">
               <div class="row shopping-cart-item">
                  <div class="col-xs-3 img-thumnail-custom">
                     <p class="image">
                        <img class="img-responsive" src="{{URL::to('/')}}/{{$cart->product->feature_image}}">
                     </p>
                  </div>
                  <div class="col-right">
                     <div class="box-info-product">
                        <p class="name">
                           <a href="{{route('view_product', $cart->product->id)}}" target="_blank">{{$cart->product->name}}</a>
                        </p>
                        <p class="action">
                            <a href="{{route('order_cart', $cart->id)}}" class="btn btn-success">
                                <button class="btn btn-success">
                                  Order
                                </button>
                            </a>
                            <a href="{{route('delete_cart', $cart->id)}}" class="btn btn-danger">
                                <button class="btn btn-danger">
                                       Cancel
                                </button>
                            </a>
                        </p>
                     </div>
                     <div class="box-price">
                        <p class="price">{{$cart->product->price}} USD</p>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
      <div id="cart-message">
      </div>
   </div>
</div>

</body>
@endsection