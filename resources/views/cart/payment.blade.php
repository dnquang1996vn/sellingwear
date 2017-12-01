@extends('layouts.app')
@section('css')
<link href="{{ asset('css/payment.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-face.css') }}" rel="stylesheet">
@endsection
@section('body')
<body class="tiki-cart chrome">
    <div class="wrap">
   <div class="container">
      <div class="wrap">
         <!-- Flash message -->
         <!-- End flash message -->
         <div class="row row-style-2">
            <div class="col-lg-8 has-padding">
               <div class="panel panel-default payment">
                  <div class="panel-body">
                     <form class="form-horizontal hide-block" role="form" id="form-payment" action="/checkout/payment/place_order" method="post">
                        <div id="choose_payment_method" class="">
                           <h3 class="step-title">Chose method</h3>
                           <div class="panel panel-default">
                              <div class="panel-body">
                                 <input type="radio" name="vehicle" value="Bike"> Payment after recieved product<br>

                                <input type="radio" name="vehicle" value="Car" checked> Payment by visa<br>
                              </div>
                           </div>
                        </div>
                        <!-- Sent As Gift -->
                        <div class="form-group row end">
                           <div class="col-lg-6">
                              <button type="button" id="btn-placeorder" class="btn btn-block btn-default btn-checkout">Order</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="panel panel-default cart">
                  <div class="panel-body">
                     <div class="order">
                        <span class="title">
                        Shipping address
                        </span>
                        <a href="{{route('order_cart', $cart->id)}}">edit</a>
                     </div>
                     <div class="information">
                        <h6>{{$cart->user->name}}</h6>
                        <p class="end">{{$cart->user->adress}}<br>T: {{$cart->user->phone}}<br></p>
                     </div>
                  </div>
               </div>
               <div id="panel-cart">
                  <div class="panel panel-default cart">
                     <div class="panel-body">
                        <div class="order">
                           <span class="title">Product</span>
                           <span class="title"></span>
                           <a href="{{route('show_cart')}}" class="btn btn-default btn-custom1">Edit</a>
                        </div>
                        <div class="product">
                           <div class="item">
                              <p class="title">
                                 <a href="{{route('view_product', $cart->product->id)}}" target="_blank">{{$cart->product->name}}</a>
                              </p>
                           </div>
                        </div>
                        <p class="total2">
                           Price:
                           <span>{{$cart->product->price}} USD </span>
                        </p>
                        <p class="text-right">
                        </p>
                     </div>
                  </div>
               </div>
               <!-- Tam thoi khong hien thi THoi GIan GIao Hang du kien - Theo Yeu cau cua PM quang.nguyendang -->
            </div>
         </div>
      </div>
   </div>
</div>
</body>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $("#change-btn").click(function(){
                $('#change-form').show();
            });
        });
    </script>
@endsection