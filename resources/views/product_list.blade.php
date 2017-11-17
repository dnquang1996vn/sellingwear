@extends('layouts.app')
@section('css')
<link href="{{ asset('css/lib/productList.css') }}" rel="stylesheet">
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
                <a href="https://tiki.vn/may-anh?src=mega-menu" class="">
                    <i class="ico ico-camera"></i>
                    <span>Máy Ảnh - Quay Phim</span>
                </a>
                <div class="nav-sub" style="display: none;">
                    <ul>
                        <li>
                            <div class="nav-sub-list-box">
                                <a class="bold " href="https://tiki.vn/may-anh?src=mega-menu">
                                    Máy Ảnh </a>
                                <a class="" href="https://tiki.vn/may-anh-chuyen-nghiep-dslr/c1809?src=mega-menu">
                                    Máy Ảnh DSLR </a>
                                <a class="" href="https://tiki.vn/may-anh-ky-thuat-so/c1808?src=mega-menu">
                                    Máy Ảnh Du Lịch </a>
                                <a class="" href="https://tiki.vn/may-chup-hinh-lay-lien/c2144?src=mega-menu">
                                    Máy Ảnh Chụp Lấy Liền </a>
                                <a class="" href="https://tiki.vn/may-anh-mirrorless/c2658?src=mega-menu">
                                    Máy Ảnh Mirrorless </a>
                                <a class="heading bold "
                                   href="https://tiki.vn/ong-kinh-lens-may-anh/c2757?src=mega-menu">
                                    Ống Kính - Lens </a>
                                <a class="" href="https://tiki.vn/ong-kinh-lens-may-anh/c2757/canon?src=mega-menu">
                                    Lens Canon </a>
                                <a class="" href="https://tiki.vn/ong-kinh-lens-may-anh/c2757/fujifilm?src=mega-menu">
                                    Lens Fujifilm </a>
                                <a class="" href="https://tiki.vn/ong-kinh-lens-may-anh/c2757/sony?src=mega-menu">
                                    Lens Sony </a>
                                <a class="heading bold " href="https://tiki.vn/may-quay-phim/c4074?src=mega-menu">
                                    Máy Quay Phim </a>
                                <a class="" href="https://tiki.vn/may-quay-phim/c4074/sony?src=mega-menu">
                                    Máy quay phim Sony </a>
                                <a class="" href="https://tiki.vn/may-quay-phim/c4074/canon?src=mega-menu">
                                    Máy quay phim Canon </a>
                            </div>
                        </li>
                        <li>
                            <div class="nav-sub-list-box">
                                <a class="bold " href="https://tiki.vn/phu-kien-may-anh/c1818?src=mega-menu">
                                    Phụ kiện máy ảnh </a>
                                <a class="" href="https://tiki.vn/the-nho-may-anh/c1839?src=mega-menu">
                                    Thẻ Nhớ SD, CF </a>
                                <a class="" href="https://tiki.vn/chan-may-anh-monopod-tripod/c2678?src=mega-menu">
                                    Chân máy - Tripod - Monopod </a>
                                <a class="" href="https://tiki.vn/bao-da-may-anh/c1840?src=mega-menu">
                                    Balo - Túi máy ảnh </a>
                                <a class="" href="https://tiki.vn/kinh-loc-filter/c1841?src=mega-menu">
                                    Kính lọc - Fliter </a>
                                <a class="" href="https://tiki.vn/den-flash/c4075?src=mega-menu">
                                    Đèn Flash </a>
                                <a class="" href="https://tiki.vn/pin-sac-may-anh/c2662?src=mega-menu">
                                    Pin - Sạc Máy Ảnh </a>
                                <a class="" href="https://tiki.vn/dau-doc-the-nho-hub-usb/c1834?src=mega-menu">
                                    Đầu đọc thẻ </a>
                                <a class="" href="https://tiki.vn/hop-dung-tu-chong-am/c1843?src=mega-menu">
                                    Tủ chống ẩm </a>
                                <a class="heading bold " href="https://tiki.vn/camera/c4077?src=mega-menu">
                                    Camera Bảo Vệ </a>
                                <a class="" href="https://tiki.vn/camera-giam-sat/c4077?src=mega-menu">
                                    Camera giám sát </a>
                                <a class="" href="https://tiki.vn/camera-hanh-trinh/c4079?src=mega-menu">
                                    Camera hành trình Ô tô </a>
                                <a class="" href="https://tiki.vn/bo-nho-camera/c4080?src=mega-menu">
                                    Bộ nhớ camera </a>
                                <a class="" href="https://tiki.vn/action-camera/c4879?src=mega-menu">
                                    Action camera </a>
                                <a class="" href="https://tiki.vn/webcam/c4880?src=mega-menu">
                                    Webcam </a>
                            </div>
                        </li>
                        <li>
                            <div class="nav-sub-list-box">
                                                                                                                                                                                                                                                            <span class="bold ">
                                                    Thương hiệu                                                </span>
                                <a class="" href="https://tiki.vn/may-anh/c1801/canon?src=mega-menu">
                                    Canon </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/nikon.html?src=mega-menu">
                                    Nikon </a>
                                <a class="" href="https://tiki.vn/may-anh/c1801/fujifilm?src=mega-menu">
                                    Fujifilm </a>
                                <a class="" href="https://tiki.vn/may-anh/c1801/sony?src=mega-menu">
                                    Sony </a>
                                <a class="" href="https://tiki.vn/may-anh/c1801/gopro?src=mega-menu">
                                    GoPro </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/tamron.html?src=mega-menu">
                                    Tamron </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/benro.html?src=mega-menu">
                                    Benro </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/lowerpro.html?src=mega-menu">
                                    Lowerpro </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/pixel.html?src=mega-menu">
                                    Pixel </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/nissin.html?src=mega-menu">
                                    Nissin </a>
                                <a class="" href="https://tiki.vn/thuong-hieu/yongnuo.html?src=mega-menu">
                                    Yongnuo </a>
                            </div>
                        </li>
                        <li>
                            <div class="nav-sub-list-box">
                                <div class="text-right">
                                    <a class="impress-banner" data-banner-title="Tiki super deal" data-banner-id="15072"
                                       data-banner-group-code="home3_menu_mayanh" rel="nofollow"
                                       href="https://tiki.vn/lp/tiki-super-deals?src=home3_menu_mayanh"
                                       title="Tiki super deal" target="_blank">
                                        <img src="https://v2.tikicdn.com/ts/banner/e3/1f/ff/d932e62ca3a5c7f72846afc76a7b7c6d.jpg"
                                             alt="Tiki super deal" class="lazy" style="display: inline;">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
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
                <a href="" class="">
                    <i class="ico ico-vas"></i>
                    <span>Nạp Thẻ Cào, Thẻ Game</span>
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
