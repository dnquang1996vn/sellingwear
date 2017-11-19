@extends('layouts.app')
@section('css')
<link href="{{ asset('css/content/productList.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="row">
    <div class="main-nav-wrap">
        <ul>
            <li>
                <a href="" class="">
                    <i class="ico ico-book"></i>
                    <span>Sách, VPP &amp; Quà Tặng</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-bottle"></i>
                    <span>Mẹ &amp; Bé</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-sprayer"></i>
                    <span>Hàng Tiêu Dùng - Thực Phẩm</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-lipsticks"></i>
                    <span>Làm Đẹp - Sức Khỏe</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-tshirt"></i>
                    <span>Thời trang - Phụ kiện</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-pan"></i>
                    <span>Nhà Cửa Đời Sống</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-electronic"></i>
                    <span>Điện Gia Dụng - Điện Lạnh</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-tv"></i>
                    <span>Tivi - Thiết bị nghe nhìn</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-cellphone"></i>
                    <span>Điện Thoại - Máy Tính Bảng</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-camera"></i>
                    <span>Máy Ảnh - Quay Phim</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-headphone"></i>
                    <span>Phụ Kiện - Thiết Bị Số</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-laptop"></i>
                    <span>Laptop - Thiết bị IT</span>
                </a>
            </li>
            <li>
                <a href="" class="">
                    <i class="ico ico-sport"></i>
                    <span>Thể Thao - Dã Ngoại</span>
                </a>
            </li>

            <li>
                <a href="" class="no-sub">
                    <i class="ico ico-hot"></i>
                    <span>Khuyến Mãi HOT</span>
                </a>
            </li>
        </ul>
    </div>

    <div id="home-main" class="main-content col-md-9">
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
                                    <a href="{{route('delete_product',$product->id)}}" class="btn btn-danger"
                                       role="button">
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
