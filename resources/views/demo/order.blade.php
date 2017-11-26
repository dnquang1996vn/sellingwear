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
                <h5 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(1 sản phẩm)</span></h5>
            </div>
            <div class="col-xs-8 cart-col-1">
                <form id="shopping-cart">
                    <div class="row shopping-cart-item">
                        <div class="col-xs-3 img-thumnail-custom">
                            <p class="image">

                                <img class="img-responsive"
                                     src="https://vcdn.tikicdn.com/cache/175x175/media/catalog/product/o/x/oxford-lerner_s-pocket-dictiontary.jpg">
                            </p>
                        </div>
                        <div class="col-right">
                            <div class="box-info-product">
                                <input type="hidden" class="hidden-quantity" name="quantity[79150432]" value="1">

                                <p class="name">
                                    <a href="https://tiki.vn/oxford-learner-s-pocket-dictionary-a-pocket-sized-reference-to-english-vocabulary-fourth-edition-p332626.html?spid=20909"
                                       target="_blank">Oxford Learner's Pocket Dictionary: A Pocket-sized Reference to
                                        English Vocabulary (Fourth Edition) </a>
                                </p>

                                <div class="list-endow">
                                    <span class="gift js-product-gift-icon" title=""
                                          data-original-title="- Tặng coupon 250.000đ khi mua đơn hàng Sách từ 1.000.000đ (Số lượng có hạn)<br />"></span>
                                    <img srcset="https://vcdn.tikicdn.com/desktop/img/2h-circle.png 1x, https://vcdn.tikicdn.com/desktop/img/2h-circle@2x.png 2x"
                                         class="img2h img24h" alt="Hỗ trợ giao hàng nhanh 2h tại TPHCM và HN"
                                         title="Hỗ trợ giao hàng nhanh 2h tại TPHCM và HN">

                                </div>

                                <p class="note"> - Tác giả: <a href="" target="_blank"></a>
                                </p>

                                <p class="note colo-b96926">Sách không hỗ trợ Bookcare</p>

                                <p class="get-id" data-js-stock="20909"></p>


                                <p class="seller-by">
                                    Cung cấp bởi <span class="firm"><a href="javascript:void(0)">Tiki Trading</a></span>
                                </p>

                                <p class="action">
                                    <a href="javascript:void(0);" class="btn btn-link btn-item-delete"
                                       data-sku="9780194398725"
                                       data-title="Oxford Learner's Pocket Dictionary: A Pocket-sized Reference to English Vocabulary (Fourth Edition)"
                                       data-item-id="79150432" data-product-id="20909" data-product-brand=""
                                       data-item-qty="1" data-item-price="51000"
                                       data-product-category="Nhà Sách Tiki/English Books/Dictionary/Oxford Dictionary">
                                        Xóa
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-link btn-save-for-later"
                                       data-sku="9780194398725"
                                       data-title="Oxford Learner's Pocket Dictionary: A Pocket-sized Reference to English Vocabulary (Fourth Edition)"
                                       data-product-id="20909">
                                        Để dành mua sau
                                    </a>
                                    <!-- <button type="button" class="btn btn-default btn-custom1 add-to-wishlist" data-product-id="20909">Đưa vào wishlist</button> -->
                                </p>
                            </div>
                            <div class="box-price">
                                <p class="price">51.000&nbsp;₫</p>
                                <p class="price2">68.000&nbsp;₫</p>
                                <p class="sale">-25%</p>
                            </div>
                            <div class="quantity-block">
                                <!-- If product qty < 10, show select options -->
                                <!--                                             <select  data-title="Oxford Learner's Pocket Dictionary: A Pocket-sized Reference to English Vocabulary (Fourth Edition)"  data-sku="9780194398725" class="form-control js-quantity-select quantity js-quantity-product">
                                                                                            <option selected                                                        value="1">
                                                1                                                    </option>
                                                                                            <option                                                        value="2">
                                                2                                                    </option>
                                                                                            <option                                                        value="3">
                                                3                                                    </option>
                                                                                            <option                                                        value="4">
                                                4                                                    </option>
                                                                                            <option                                                        value="5">
                                                5                                                    </option>
                                                                                            <option                                                        value="6">
                                                6                                                    </option>
                                                                                            <option                                                        value="7">
                                                7                                                    </option>
                                                                                            <option                                                        value="8">
                                                8                                                    </option>
                                                                                            <option                                                        value="9">
                                                9                                                    </option>
                                                                                        <option value="10">10+</option>
                                    </select>
                                 -->
                                <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button
                                                class="btn btn-default bootstrap-touchspin-down"
                                                type="button">-</button></span><span
                                            class="input-group-addon bootstrap-touchspin-prefix"
                                            style="display: none;"></span><input type="tel"
                                                                                 class="form-control quantity-r2 quantity js-quantity-product"
                                                                                 min="0" data-js-qty="" value="1"
                                                                                 style="display: block;"><span
                                            class="input-group-addon bootstrap-touchspin-postfix"
                                            style="display: none;"></span><span class="input-group-btn"><button
                                                class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span>
                                </div>
                            </div>
                            <!-- <div class="box-info-discount"></div> -->
                        </div>
                    </div>

                </form>

                <input value="20909" type="hidden" id="idProduct-cart">


                <!-- SHOPPING CART FREEGIFT -->
                <!-- END SHOPPING CART FREEGIFT -->

                <!-- <div class="last">
                    <div class="all-new">
                        <a class="btn btn-default btn-gradient" href="/"><i class="fa fa-angle-left"></i> Tiếp tục mua sắm</a>
                    </div>
                    <button type="button" class="btn btn-link remove-all btn-empty-cart">Xóa hết</button>
                </div> -->

                <!-- <div class="box-recommendation-related-product-cart"></div> -->

            </div>
            <div class="col-xs-4 cart-col-2">
                <div id="right-affix" class="affix-top">

                    <div class="each-row">

                        <div class="box-style fee">

                            <p class="list-info-price">
                                <span>Tạm tính: </span>
                                <strong>51.000&nbsp;₫</strong>
                            </p>
                        </div>
                        <div class="box-style fee">
                            <div class="total2 clearfix">
                                <span class="text-label">Thành tiền: </span>
                                <div class="amount">
                                    <p>
                                        <strong>51.000&nbsp;₫ </strong>
                                    </p>
                                    <p class="text-right">
                                        <small>(Đã bao gồm VAT)</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-large btn-block btn-danger btn-checkout"
                                onclick="location.href='/checkout/shipping?is_sent_as_gift=0';return false;">Tiến hành
                            đặt hàng
                        </button>

                    </div>


                </div>
            </div>
        </div>


    </div>
</div>

</body>
@endsection