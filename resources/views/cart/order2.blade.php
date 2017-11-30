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
            <form id="form-address">
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
                                    Giao đến địa chỉ này
                                    </button>
                                    <button type="button" class="btn btn-default btn-custom1 edit-address" data-id="2145769">Sửa</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 item" id="item-2145769">
                      <div class="panel panel-default address-item is-default">
                        <div class="panel-body">
                          <form class="form-horizontal" id = "register-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name (*)</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                                <span class="help-block" id="name-error">
                                </span>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        @foreach ($errors->get('name') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ Auth::user()->adress }}"  autofocus>

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        @foreach ($errors->get('adress') as $message)
                                            <ul>
                                                {{$message}}
                                            </ul>
                                        @endforeach
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ ($errors->has('phone')&& (old('phone') != null)) ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ Auth::user()->phone }}"  autofocus >

                                @if ($errors->has('phone')&& (old('phone') != null))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
@endsection