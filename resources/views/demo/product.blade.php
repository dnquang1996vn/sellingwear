@extends('layouts.app')
@section('css')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection
@section('content')
<body class="tiki-product chrome">
<div class="wrap">
    <div class="container product-container">


        <div class="row product-summary" itemscope="" itemtype="http://schema.org/Product">
            <div class="product-image">
                <div class="image-box js-image-box">
                    <div class="magiczoom  ">
                        <a class="zoom-wrap-link">
                            <div style="height:387px;width:387px;" class="zoomWrapper">
                                <div style="height:387px;width:387px;" class="zoomWrapper"><img id="product-magiczoom"
                                                                                                src="https://vcdn.tikicdn.com/cache/550x550/media/catalog/product/1/_/1.u4939.d20170729.t150616.198478.jpg"
                                                                                                data-zoom-image="https://vcdn.tikicdn.com/cache/w1200/media/catalog/product/1/_/1.u4939.d20170729.t150616.198478.jpg"
                                                                                                style="position: absolute;">
                                </div>
                            </div>
                        </a>
                        <div class="txt-desc-for-img">
                            <p class="txt-static"><img src="https://vcdn.tikicdn.com/desktop/img/icon/zoom-in.png">Rê
                                chuột lên hình để phóng to</p>
                            <p class="txt-hover"><img src="https://vcdn.tikicdn.com/desktop/img/icon/zoom-in.png">Bấm
                                vào để xem hình to hơn</p>
                        </div>
                    </div>
                    <div class="image-thumbnail-block" id="image-thumbnail-block">
                        <div data-reactroot="">
                            <div class="product-feature-images vertical"><span class="thumb-item"><span class="flx"><img
                                                alt="Product"
                                                src="https://vcdn.tikicdn.com/cache/75x75/media/catalog/product/1/_/1.u4939.d20170729.t150616.198478.jpg"></span></span><span
                                        class="thumb-item"><span class="flx"><img alt="Product"
                                                                                  src="https://vcdn.tikicdn.com/cache/75x75/media/catalog/product/2/_/2.u4939.d20170729.t150616.247357.jpg"></span></span>
                            </div>
                            <div class="product-reivew-images"></div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="product-cart">
                <div class="item-box">
                    <h1 class="item-name" itemprop="name" id="product-name">
                        Điện Thoại Nokia 8 - Hàng Chính Hãng </h1>


                    <div class="product-brand-block">

                        <div class="item-row1 brand-block">
                            <div class="item-price">
                                <div class="brand-block-row">
                                    <div class="item-other">
                                        <div itemprop="aggregateRating" itemscope=""
                                             itemtype="http://schema.org/AggregateRating">
                                            <meta itemprop="ratingValue" content="4.8">
                                            <meta itemprop="ratingCount" content="8">
                                        </div>
                                        <div class="item-rating">
                                            <p class="rating">
                                                                                                    <span class="rating-box">
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <span style="width:95%">
                                                            <i class="star"></i>
                                                            <i class="star"></i>
                                                            <i class="star"></i>
                                                            <i class="star"></i>
                                                            <i class="star"></i>
                                                        </span>
                                                    </span>
                                                <a id="reiews-url" class="review-url"
                                                   href="dien-thoai-nokia-8-hang-chinh-hang-p756522/nhan-xet">(Xem 8
                                                    đánh giá)</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="brand-block-row">
                                    <div itemprop="brand" itemscope="" itemtype="http://schema.org/Brand">
                                        <meta itemprop="name" content="Nokia">
                                        <meta itemprop="url" content="http://tiki.vn/thuong-hieu/nokia.html">
                                    </div>
                                    <div class="item-brand">
                                        <h6>Thương hiệu: </h6>
                                        <p>
                                            <a target="_blank" href="http://tiki.vn/thuong-hieu/nokia.html">Nokia</a>
                                        </p>
                                    </div>


                                    <div class="item-brand item-sku" id="product-sku">
                                        <h6>SKU: </h6>
                                        <p>
                                            5801993663372 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row flex">
                        <div class="col-xs-7 no-padding-right product-info-block">
                            <div class="item-row1">
                                <div class="item-price">

                                    <p class="g-preorder" id="inventory-status-text" style="display: none"></p>

                                    <div class="price-block show-border">


                                        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                            <meta itemprop="priceCurrency" content="VND">
                                            <meta itemprop="price" content="10880000">
                                        </div>
                                        <p class="special-price-item" data-value="10880000" id="p-specialprice">
                                            <span id="flash-sale-price-label" style="display: none;" class="">
                                                <img class="icon-flash-sale"
                                                     src="https://vcdn.tikicdn.com/desktop/img/flash-sale-price-label.png?v=2"
                                                     width="80">
                                                <img class="icon-hot-deal"
                                                     src="https://vcdn.tikicdn.com/desktop/img/deal-hot@2x.png"
                                                     width="91">Giá: </span>
                                            <span id="span-price">10.880.000&nbsp;₫</span>
                                            <span class="vat">Đã có VAT</span>
                                        </p>

                                        <p style="" class="saleoff-price-item" id="p-saving-price">
                                            <span class="price-label">Tiết kiệm:</span>
                                            <span class="discount-percent">16%</span>
                                            <span id="span-saving-price">
                                                (2.110.000&nbsp;₫)
                                            </span>
                                        </p>

                                        <p style="" class="old-price-item" data-value="12990000" id="p-listpirce">
                                            <span class="price-label">Giá thị trường:</span>
                                            <span id="span-list-price">12.990.000&nbsp;₫</span>
                                        </p>


                                        <div id="discount-container">
                                        </div>


                                        <div id="deal-process" style="display: none;"></div>

                                    </div>
                                    <div class="top-feature-item bullet-wrap">
                                        <p>Chính hãng, nguyên seal, mới 100%</p>
                                        <p>Thiết kế: Nguyên khối</p>
                                        <p>Màn hình: IPS LCD, 2K (1440 x 2560 pixels)</p>
                                        <p>Camera Trước/Sau: 13MP/ 2 camera 13 MP</p>
                                        <p>CPU: Qualcomm Snapdragon 835 8 nhân 64-bit</p>
                                        <p>Bộ Nhớ: 64GB</p>
                                        <p>RAM: 4GB</p>
                                        <p>Tính năng: Cảm biến vân tay, hỗ trợ 4G LTE Cat 6</p>
                                    </div>
                                </div>
                            </div>


                            <p class="out-of-stock-msg" style="color: red;display: none;">Sản phẩm đã hết hàng</p>


                            <form role="form" id="add-to-cart" action="/checkout/ajaxAdd">
                                <!-- Only for js checking baby milk product -->

                                <div id="countDown2h">
                                </div>


                                <div id="installationService">


                                </div>

                                <input type="hidden" name="product_type" value="configurable">

                                <div class="item-product-options">


                                    <div id="freeGift">

                                        <div class="free-gift-block">
                                            <!-- CATALOG GIFT -->

                                        </div>
                                    </div>

                                    <!-- BEGIN ADD TO CART -->
                                    <div id="add-cart-action">
                                        <div class="add-cart-action" style="display: block">
                                            <div class="quantity-box">
                                                <div id="deal-max" style="display: none;"
                                                     class="alert alert-warning alert-small deal-max">
                                                    Sản phẩm này có giới hạn số lượng khi đặt hàng:<br>
                                                    Bạn có thể mua tối đa <span></span> sản phẩm cho mỗi đơn hàng
                                                </div>
                                                <input id="product_id_for_wishlist" name="id" type="hidden"
                                                       value="756522">

                                                <div class="quantity-col1">
                                                    <p class="quantity-label">Số lượng:</p>
                                                    <p class="tiki-number-input">
                                                    <div class="input-group bootstrap-touchspin"><span
                                                                class="input-group-btn"><button
                                                                    class="btn btn-default bootstrap-touchspin-down"
                                                                    type="button">-</button></span><span
                                                                class="input-group-addon bootstrap-touchspin-prefix"
                                                                style="display: none;"></span><input id="qty" type="tel"
                                                                                                     name="qty"
                                                                                                     value="1" min="1"
                                                                                                     max="100"
                                                                                                     class="form-control"
                                                                                                     style="display: block;"><span
                                                                class="input-group-addon bootstrap-touchspin-postfix"
                                                                style="display: none;"></span><span
                                                                class="input-group-btn"><button
                                                                    class="btn btn-default bootstrap-touchspin-up"
                                                                    type="button">+</button></span></div>
                                                    </p>
                                                </div>
                                                <div class="cta-box">

                                                    <button class="add-to-cart  js-add-to-cart is-css" type="button">
                                                            <span class="text">
                                                                Thêm Vào Giỏ Hàng                                                            </span>
                                                    </button>
                                                    <a href="javascript:" class="add-to-wishlist  is-css">
                                                            <span class="icon js-product-gift-icon"
                                                                  data-placement="bottom" data-toggle="tooltip"
                                                                  data-title="Thêm Vào Yêu Thích">
                                                                <i class="ico ico-ic-fav"></i>
                                                            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="installment-wrap  " style="display: none">
                                        <div class="installment-with-card" style="display: none">
                                            <a href="https://tiki.vn/tra-gop-0-phan-tram"
                                               class="btn-buy-installment-currency" target="_blank">
                                                <b>Mua trả góp 0% qua thẻ</b>
                                                <span><span class="price">1.813.333 </span> đ/tháng trong 6 tháng</span>
                                            </a>
                                            <p class="desc-installment">
                                                Trả góp lãi suất 0% qua thẻ tín dụng của HSBC, Sacombank, ShinhanBank,
                                                Citibank, Eximbank, VIB, Maritime Bank, TPBank &amp; Standard Chartered
                                                - <a title="Mua trả góp 0% qua thẻ" target="_blank"
                                                     href="https://tiki.vn/tra-gop-0-phan-tram">Chi tiết</a>
                                            </p>

                                        </div>
                                    </div>
                                    <!-- END INSTALLMENT -->

                                </div>
                            </form>

                            <!--bbbb-->
                        </div>

                    </div>


                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12">


                <!-- <div class="box-bought-related-product"></div> -->

                <div class="box-recentlyviewed-product" id="box-recentlyviewed-product"
                     data-impress-list-title="Product Detail | Sản phẩm bạn đã xem">
                    <div data-reactroot="">
                        <div class="product-author-box">
                            <div class="product-author-title">
                                <h2>Sản phẩm bạn đã xem </h2>
                            </div>
                            <div class="product-author-content swiper-carousel-wrapper">
                                <div class="swiper-container js-list-product swiper-container-horizontal">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide swiper-slide-active"
                                             style="width: 248.2px; height: auto;">


                                            <div data-seller-product-id="844725" data-title="Chuyện Vặt Của Múc 2"
                                                 data-price="68800" data-id="824723" data-brand="Bích Ngọc"
                                                 data-category="Nhà Sách Tiki/Sách tiếng Việt/Sách văn học/Văn học Việt Nam/Truyện thiếu nhi&nbsp;"
                                                 tpl="" rel="" class="product-item    " style="height: 100%;">
                                                <a data-id="824723"
                                                   href="https://tiki.vn/chuyen-vat-cua-muc-2-p824723.html?src=recently-viewed"
                                                   title="Chuyện Vặt Của Múc 2" class="">

        <span class="image">

                            <img class="product-image img-responsive lazy" alt=""
                                 src="https://vcdn.tikicdn.com/cache/200x200/ts/product/8b/6d/11/83f78f02d70b6fdbe8acf8fca4525901.jpg"
                                 style="display: block;">





            <span class="product-right-icon">

                                    <img srcset="https://vcdn.tikicdn.com/desktop/img/2h-circle.png 1x, https://vcdn.tikicdn.com/desktop/img/2h-circle@2x.png 2x"
                                         class="img2h lazy" width="24" height="24" alt="Hỗ trợ giao hàng trong 2h"
                                         title="Hỗ trợ giao hàng trong 2h" src="">
                            </span>




                            <span class="gift js-product-gift-icon"
                                  title="- Tặng coupon 250.000đ khi mua đơn hàng Sách từ 1.000.000đ (Số lượng có hạn)<br ></span>"></span>

        </span>
                                                    <span class="title">
            Chuyện Vặt Của Múc 2        </span>
                                                    <p class="author">Bích Ngọc</p>
                                                    <p class="price-sale">68.800&nbsp;₫ <span class="price-regular">86.000&nbsp;₫</span>
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

                <div class="product-content-box">
                    <div class="left">


                        <h3 class="product-table-title">Thông Tin Chi Tiết</h3>
                        <div class="white-panel">
<!--                            detail product-->
                        </div>


                    </div>

                </div>


            </div>
        </div>
    </div>


</div>

</body>
@endsection