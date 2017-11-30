<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HighFashion</title>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>

<div id="app">
    <nav class="navbar navbar-default navbar-static-top" id="header-top"
         style="background: #189eff; min-width: 1270px!important; font-family: Roboto,Helvetica,Arial,sans-serif;">
        <div class="navbar-header">
            <!--                 Branding Image -->
            <a class="navbar-brand" id="logo-web" href="{{ url('/') }}">
                HighFashion
            </a>
        </div>

        <div class="form-search" style="display: inline-block;
            position: relative;
            z-index: 1;
            float: left;">
            <form id="search_form" action="" method="get">
                <div class="search-wrap" style="
                display: table;
                vertical-align: middle;
                width: 100%;
                z-index: 1;
                position: relative;
                 width: 475.9px;
                height: 40px;
                border-radius: 4px;
                background-color: #fff;
                box-shadow: ">
                    <div class="input" style="display: table-cell;
                width: calc(100% - 105px);
                max-width: none;
                float: left;">
                        <div class="flex" style="display: flex;">
                            <input style=" height: 40px;
                border: 0;
                font-size: 13px;
                flex: 1;
                width: 229px;
                max-width: 100%;
                border-radius: 3px;
                font-size: 13px;
                border: 1px solid #efefef;
                padding: 0 8px;
                color: #333;" type="text" name="q" autocomplete="off" value=""
                                   placeholder="search">
                        </div>
                    </div>

                    <button style="padding: 0 11px 0 32px;display: table-cell; width: auto;
                    float: right;
                    vertical-align: top;
                    color: #4a4a4a;float: right;
                    height: 40px;
                    border: 0;
                    font-size: 14px;
                    /*padding: 0 16px;*/
                    background: #EFF1F5;
                    border-radius: 0 4px 4px 0;
                    cursor: pointer;
                    font-weight: 500;
                background:url(https://vcdn.tikicdn.com/desktop/img/svg/ic-search-2.svg) 10px center no-repeat #edeef2!important"
                            type="submit">
                                    <span style="color: #4a4a4a;font-size: 14px;cursor: pointer;
                font-weight: 500;-webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                 box-sizing: border-box; ">Tìm kiếm</span></button>

                </div>
            </form>
        </div>

        <div class="header-link" style="    float: left;position: relative;">
            <div id="header-cart" style="display: inline-block">
                <a style="border: 2px solid #fff;
            border-radius: 4px;
            margin-left: 0;
            letter-spacing: .7px;
            font-weight: 400;
            font-size: 13px;
            vertical-align: middle;
        color: #fff;
            font-size: 12px;
            padding: 6px 0 6px 30px;
            position: relative;
            line-height: 14px;
            display: inline-block;
            letter-spacing: .9px;
            margin-left: 25px;" data-reactroot="" rel="nofollow" href="" class="header-cart item">
                    <i style="    font-size: 18px;
    left: 8px;
    top: 9px;
    position: absolute;font-size: 22px;
    float: left;
    left: 0;
    top: 9px;" class=""></i><!-- react-text: 3 -->Giỏ hàng<!-- /react-text -->
                    <span style="    color: #4a4a4a;
                background: #fdd835;
                height: 20px;
                border-radius: 2px;
                display: inline-block;
                text-align: center;
                line-height: 20px;
                margin-left: 4px;
                margin-right: 4px;
                font-size: 12px;
                padding: 0 6px;
                font-weight: 700;" class="cart-count">0</span>
                </a>
            </div>
        </div>


        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a style="color: #fff;
            font-size: 12px;font-weight: 400;
            line-height: 14px;letter-spacing: .9px;" href="{{ route('login') }}">Login</a></li>
                <li><a style="color: #fff;
            font-size: 12px;font-weight: 400;letter-spacing: .9px;
            line-height: 14px;" href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="account-link" data-toggle="dropdown" role="button"
                       aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            @if (Auth::user()->isAdmin())
                            <a href="{{route('create_product')}}">Add new Product</a>
                            <a href="{{route('show_category')}}">Manage Category</a>
                            @endif
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    <div class="container" id="main-container">
        @yield('content')
    </div>
</div>
@yield('body')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
@yield('js');
</body>
</html>
