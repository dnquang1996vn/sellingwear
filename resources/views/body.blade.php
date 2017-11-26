@extends('layouts.app')
@section('css')
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-face.css') }}" rel="stylesheet">
@endsection
@section('body')
<body class="tiki-categories chrome">
<div class="wrap">
    <div class="container">
        <div class="side-bar">
            <div class="box-left-wrap visible-lg-block" id="boxleft-wrap">
                <div class="panel-group box-left" id="boxleft" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-info">
                        <div class="panel-heading" role="tab" id="heading-category">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" href="#collapse-category"
                                   aria-expanded="true" aria-controls="collapse-category">
                                    Danh Mục Sản Phẩm
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-category" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="heading-category">
                            <div class="list-group js-cat-nav">
                                <div class="list-group-item book-home-catlink">
                                    <a href="/sach-truyen-tieng-viet?src=tree">
                                        <span class="list-group-item-text">Sách Tiếng Việt</span>
                                    </a>
                                    <a href="/sach-van-hoc/c839?src=tree">Sách văn học</a>


                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="product-listing category-floor-wrap book-floor">


            <div class="product-box">
                <div class="product-box-title">
                    <h2><i class="fa fa-tags"></i><a href="/sach-truyen-tieng-viet">Sách Tiếng Việt</a></h2>


                </div>

                <div class="product-box-list swiper-carousel-wrapper"
                     data-impress-list-title="Custom Category | Sách sắp phát hành">
                    <div class="swiper-container js-list-product swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-active" style="width: 246.5px; height: auto;">


                                <div data-seller-product-id="844725" data-title="Chuyện Vặt Của Múc 2"
                                     data-price="68800" data-id="824723" data-brand=""
                                     data-category="Nhà Sách Tiki/Sách tiếng Việt/Sách văn học/Văn học Việt Nam/Truyện thiếu nhi&nbsp;"
                                     tpl="" rel="" class="product-item    " style="height: 100%;">
                                    <a data-id="824723" href="https://tiki.vn/chuyen-vat-cua-muc-2-p824723.html"
                                       title="Chuyện Vặt Của Múc 2" class="">

        <span class="image">

                            <img class="product-image img-responsive lazy" alt=""
                                 src="https://vcdn.tikicdn.com/cache/200x200/ts/product/8b/6d/11/83f78f02d70b6fdbe8acf8fca4525901.jpg"
                                 style="display: block;">





            <span class="product-right-icon">

                                    <img srcset="https://vcdn.tikicdn.com/desktop/img/2h-circle.png 1x, https://vcdn.tikicdn.com/desktop/img/2h-circle@2x.png 2x"
                                         class="img2h" width="24" height="24" alt="Hỗ trợ giao hàng trong 2h"
                                         title="Hỗ trợ giao hàng trong 2h">
                            </span>




                            <span class="gift js-product-gift-icon"
                                  title="- Tặng coupon 250.000đ khi mua đơn hàng Sách từ 1.000.000đ (Số lượng có hạn)<br />"></span>

        </span>
                                        <span class="title">
            Chuyện Vặt Của Múc 2        </span>
                                        <p class="price-sale">68.800&nbsp;₫ <span
                                                    class="price-regular">86.000&nbsp;₫</span>
                                            <span class="sale-tag sale-tag-square">-20%</span>
                                        </p>
                                        <div class="review-wrap">
                                            <p class="rating">
                    <span class="rating-content">
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <i class="star"></i>
                        <span style="width:100%">
                            <i class="star"></i>
                            <i class="star"></i>
                            <i class="star"></i>
                            <i class="star"></i>
                            <i class="star"></i>
                        </span>
                    </span>
                                            </p>
                                            <p class="review">(1 nhận xét)</p>
                                        </div>


                                    </a>


                                </div>

                            </div>


                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>

</body>
@endsection