@extends('layouts.app')
@section('css')
<link href="{{ asset('css/order2.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-face.css') }}" rel="stylesheet">
@endsection
@section('body')
<body class="tiki-cart chrome">
<div class="wrap">
    <div class="container">
        <h3>
            2. Address to ship
        </h3>
        <div class="row row-style-2">
                <div class="container">
                    <h5 class="visible-md-block visible-lg-block">
                        Choose the address to ship
                    </h5>
                </div>
                <div class="row-address-list">
                    <div class="col-lg-6 col-md-6 col-sm-6 item" id="item-2145769">
                        <div class="panel panel-default address-item is-default">
                            <div class="panel-body">
                                <p class="name">{{Auth::user()->name}}</p>
                                <p class="address">
                                    Adress:{{Auth::user()->adress}}         
                                </p>
                                <p class="phone">Phone: {{Auth::user()->phone}}</p>
                                <p class="action">
                                    <button type="button" class="btn btn-default btn-custom1 saving-address is-blue" data-id="2145769">
                                        <a href="{{route('create_payment', $cart_id) }}">
                                            Ship to this adress
                                        </a>
                                    </button>
                                    <button type="button" class="btn btn-default btn-custom1 edit-address" id="change-btn">Sửa</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-lg-6 col-md-6 col-sm-6 item" id="change-form" style="display: none" >
            <div class="panel panel-default address-item is-default">
                <div class="panel-body">
                    <form action="{{route('change_address')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="cart_id" value="{{$cart_id}}">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{Auth::user()->name}}"><br><br>
                        <label for="adress">Address:</label>
                        <input type="text" name="adress" value="{{Auth::user()->adress}}"><br><br>
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" value="{{Auth::user()->phone}}"><br><br>
                        <button type="submit">Update</button>
                    </form>
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