@extends('techapp')
@section('content')
<main class="main-content" role="main">
    <div class="wrapper top1">
        {{-- <div class="top-area grid--full grid--table">
            <div class="grid__item one-quarter small--one-whole top-area-left">
                <div id="html-section-all-collections" class="html-section">
                    <div class="all-collections">
                        <div class="allcollections-title">
                            <i class="fa fa-list"></i>
                            <span>All Collections</span>
                        </div>
                        <div class="sdcollections-content">
                            <ul class="sdcollections-list">
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/smartphone.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     High range phones (9)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/tablet.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Mid range phones (9)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/laptop.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Value phones (8)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/camera.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Wi-Fi Modems (8)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/printer.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Decorders (8)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/speaker.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Smart watches (8)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/accessories.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Sound (8)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="allcol-element">
                                    <a href="collection.html">
                                        <div class="element-main">
                                            <div class="collection-icon" style="width: 20px;">
                                                <img src="assets/images/television.png" alt="collection icon">
                                            </div>
                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                     Accesories (8)
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $( ".all-collections" ).hover(
                              function() {
                                $( this ).addClass( "coll-hover" );
                              }, function() {
                                $( this ).removeClass( "coll-hover" );
                              }
                            );
                            $(".all-collections .allcollections-title").click(function(){
                              $(this).toggleClass('opendrop');
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="grid__item three-quarters small--one-whole top-area-right">
                <div id="html-section-slideshow" class="html-section index-section revolution-slider">
                    <div class="wrapper">
                        <div data-section-id="slideshow" data-section-type="slideshow-section" style="padding-top:px; padding-bottom:px;">
                            <div class="wrap_main_slideshow">
                                <div class="slideshow-revolution">
                                    <section class="tp-banner-container">
                                        <div class="tp-banner">
                                            <ul>
                                                {{-- <li data-transition="boxfade" data-masterspeed="2000" data-saveperformance="on">
                                                    <img src="assets/images/slideshow5-bkg-home2_1920x.jpg" alt="" />
                                                    <div class="tp-caption" data-x="40" data-y="150" data-speed="2000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6; visibility: hidden;">
                                                        <img src="assets/images/slideshow5-desc1-home2_600x.png" alt="">
                                                    </div>
                                                    <div class="tp-caption easeOutBack" data-x="right" data-y="100" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="2000" data-start="2000" data-easing="Back.easeInOut" data-endspeed="500" style="z-index: 6; visibility: hidden;">
                                                        <img src="assets/images/slideshow5-img-home2_600x.png" alt="">
                                                    </div>
                                                    <div class="tp-caption" data-x="40" data-y="338" data-speed="2000" data-start="3000" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6; visibility: hidden;">
                                                        <a href="collection.html" title=""><img src="assets/images/slideshow5-but-home2_600x.png" alt=""></a>
                                                    </div>
                                                </li> --}}
                                                {{-- <li data-transition="boxfade" data-masterspeed="2000" data-saveperformance="on">
                                                    <img src="assets/images/tech slideshow 1.png" alt="" />
                                                    <div class="tp-caption" data-x="208" data-y="226" data-speed="2000" data-start="1500" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6; visibility: hidden;">
                                                        <img src="assets/images/text1-slideshow1-home2_ac2504b6-b669-4ae6-818e-c0ae1cf2dae8_600x.png" alt="">
                                                    </div>
                                                    <div class="tp-caption easeOutBack" data-x="257" data-y="296" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="2000" data-start="2000" data-easing="Back.easeInOut" data-endspeed="500" style="z-index: 6; visibility: hidden;">
                                                        <img src="assets/images/text2-slideshow1-home2_600x.png" alt="">
                                                    </div>
                                                    <div class="tp-caption" data-x="363" data-y="347" data-speed="2000" data-start="3000" data-easing="Power4.easeOut" data-endspeed="500" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6; visibility: hidden;">
                                                        <a href="collection.html" title=""><img src="assets/images/text3-slideshow1-home2_600x.png" alt=""></a>
                                                    </div>
                                                </li> --}}
                                            </ul>
                                            <div class="tp-bannertimer"></div>
                                        </div>
                                        <script type="text/javascript">
                                            var slideshow;
                                            jQuery(document).ready(function() {
                                                slideshow = jQuery('.tp-banner').css('visibility', 'visible').show().revolution(
                                                  {
                                                    delay:8000,
                                                    startwidth:900,
                                                    startheight:500,
                                                    autoHeight:"on",
                                                    navigationArrows:"solo",
                                                    fullWidth:"on",
                                                    fullScreen:"off",
                                                    stopAfterLoops:-1,
                                                    stopAtSlide:-1,
                                                    forceFullWidth:"off",
                                                    fullScreenOffsetContainer: "",
                                                    lazyLoad:"on"
                                                  });
                                            });
                                        </script>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> .
    </div>
    <div class="wrapper top2">
        <div class="top-area grid--full grid--table">
            <div class="grid__item one-quarter small--one-whole top2-left">
                <div id="html-section-home2-deal" class="html-section index-section products-featured">
                    <div class="home-product-grid-wrapper home-product-deal">
                        <div class="section-header">
                            <h2><i class="fa fa-star" aria-hidden="true"></i> Daily Deals</h2>
                        </div>
                        <div class="grid--uniform grid--view-items">
                            <div class="product-single">
                                <div class="grid__image product-image">
                                    <a class="grid-view-item__link" href="product.html">
                                        <img class="grid-view-item__image" src="assets/images/samsunga13.png" alt="Samsung Galaxy A13">
                                    </a>
                                </div>
                                <div class="grid__detail">
                                    <div class="h4 grid-view-item__title">
                                        <a href="product.html">Samsung Galaxy A13 </a>
                                    </div>
                                    <div class="rating-star">
                                        <span class="spr-badge" id="spr_badge_10266630532" data-rating="5.0">
                                            {{-- <span class="spr-starrating spr-badge-starrating">
                                                <i class="spr-icon spr-icon-star"></i>
                                                <i class="spr-icon spr-icon-star"></i>
                                                <i class="spr-icon spr-icon-star"></i>
                                                <i class="spr-icon spr-icon-star"></i>
                                                <i class="spr-icon spr-icon-star"></i> --}}
                                                128GB | 6.6in | 6GB RAM | 50MP/5MP | 5000mAh
                                            </span>
                                            <span class="spr-badge-caption">1 review</span>
                                        </span>
                                    </div>
                                    <div class="grid-view-item__meta product-price">
                                        <span class="product__price">
                                            <span class="money">$200 USD</span>
                                        </span>
                                    </div>
                                    <div class="product-countdown">
                                        <span id="timer"></span>
                                        <script>
                                            var liftoffTime = new Date(2018, 5, 20);
                                            $('#timer').countdown({
                                                until: liftoffTime
                                            });
                                        </script>
                                    </div>
                                    <div class="add-to-cart-form">
                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                <input type="hidden" name="quantity" value="1">
                                            <div class="effect-ajax-cart">
                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                    <i class="fa fa-bars"></i> Options</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid__item three-quarters small--one-whole top2-right">
                <div class="tabs-area">
                    <div id="html-section-home2-tabs" class="html-section index-section tabs-slider">
                        <div class="wrapper">
                            <div class="page-width style_2" data-section-id="home2-tabs" data-section-type="tabs" style="padding-top:px; padding-bottom:px;">
                                <div class="tabs-wrapper">
                                    <div class="home-tabs grid--full grid--table grid-block-full">
                                        <div class="home-tabs-inner">
                                            <div id="tabs-product-slider1">
                                                <ul class="nav nav-tabs tabs-left sideways tabs-left-default">
                                                    <li class="stab1 active">
                                                        <a href="#stab1" data-toggle="tab" class="active">Best Seller</a>
                                                    </li>
                                                    <li class="stab2">
                                                        <a href="#stab2" data-toggle="tab">New Arrivals</a>
                                                    </li>
                                                    <li class="stab3">
                                                        <a href="#stab3" data-toggle="tab">High Range</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-panel grid active" id="stab1">
                                                    <div class="tab-product-slider tab-slider">
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/tp link router.png" alt="TP-Link TD-W8961N Modem Router">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">TP-Link Modem Router</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            300Mbps | 4-port switch | ADSL2+ | NAT router
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$300 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/samsung tab s8 ultra.png" alt="Samsung Tab S8 Ultra">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Samsung Tab S8 Ultra</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            256GB | 14.6in | 16GB RAM | 13MP/12MP | 11200mAh

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$1600 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/openview decoder.png" alt="OpenView Decoder">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">OpenView Decoder</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$45 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/itel A58 pro.jpg" alt="iTel A58 Pro">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">iTel A58 Pro</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            32GB | 6.6in | 2GB RAM | 5MP/5MP | 4000mAh

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$90 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/oraimo earpods.jpg" alt="Oraimo FreePods2 2Baba">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Oraimo FreePods2 2Baba</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            V5.0 BT version | >10m wireless range | 82hrs standby time

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$20 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-panel grid" id="stab2">
                                                    <div class="tab-product-slider tab-slider">
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/boom bass speaker.jpg" alt="Booms Bass L8 Speaker">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Booms Bass L8 Speaker</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            5W | 4-5hrs battery| 400*85*85mm | 1200mAh

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$20 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/JBL Synchros E50BT headphones.jpg" alt="JBL Synchros E50BT headphones">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">JBL Synchros E50BT headphones</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            30mW | 18hrs standby battery| 41*83*89mm | 610mAh

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$15 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/Bvot 4G 5G Wireless Mobile Wifi.jpg" alt="Bvot 4G\5G Wireless Mobile Wifi">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Bvot 4G\5G Wireless Mobile Wifi</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$ USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/QS18 Smartwatch.jpg" alt="QS18 Smartwatch">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">QS18 Smartwatch</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            1.54in | 120MB RAM | 230mAh | bluetooth | distance tracking | heart rate monitor
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$20 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/WAHL Super Taper Hair Clipper.jpg" alt="WAHL Super Taper Hair Clipper">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">WAHL Super Taper Hair Clipper</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            1KG | 230V | 24.5*7*16.5 cm
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$15 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-panel grid" id="stab3">
                                                    <div class="tab-product-slider tab-slider">
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/DStv Explora Decoder.jpg" alt="DStv Explora Decoder">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">DStv Explora Decoder</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$ USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/Infinix Note 11 Pro.jpg" alt="Infinix Note 11 Pro">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Infinix Note 11 Pro</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            128GB | 6.95in | 8GB RAM | 64MP/16MP | 5000mAh

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$250 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/Samsung Galaxy Z Fold3 5G.jpg" alt="Samsung Galaxy Z Fold3 5G">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Samsung Galaxy Z Fold3 5G</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                                            512GB | 7.6in | 12GB RAM | 12MP/4MP | 4400mAh

                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$1830 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fi-item grid__item">
                                                            {{-- <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/product1_320x320.jpg" alt="Samsung Galaxy S7">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Samsung Galaxy S7</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$400 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        {{-- <div class="fi-item grid__item">
                                                            <div class="grid-view-item">
                                                                <div class="grid-normal-display">
                                                                    <div class="grid__image product-image">
                                                                        <a class="grid-view-item__link" href="product.html">
                                                                            <img class="grid-view-item__image" src="assets/images/product12_320x320.jpg" alt="Samsung Galaxy J7 Prime">
                                                                        </a>
                                                                        <div class="product-label">
                                                                            <div class="label-element new-label">
                                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="action-button">
                                                                            <li class="wishlist">
                                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="add-to-cart-form">
                                                                                <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                                    <div class="effect-ajax-cart">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                                    </div>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <div class="quickview">
                                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="h4 grid-view-item__title">
                                                                    <a href="product.html">Samsung Galaxy J7 Prime</a>
                                                                </div>
                                                                <div class="rating-star">
                                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                                        <span class="spr-starrating spr-badge-starrating">
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                            <i class="spr-icon spr-icon-star"></i>
                                                                        </span>
                                                                        <span class="spr-badge-caption">1 review</span>
                                                                    </span>
                                                                </div>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="product__price">
                                                                        <span class="money">$250 USD</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $('#tabs-product-slider1').easytabs({
                                                    animationSpeed: 'fast',
                                                    updateHash: false
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    if ($(".tab-slider").length) {
                                        $(".tab-slider").owlCarousel({
                                            navigation: true,
                                            pagination: false,
                                            autoPlay: 5000,
                                            paginationSpeed: 800,
                                            items: 3,
                                            slideSpeed: 200,
                                            rewindSpeed: 1000,
                                            itemsDesktop: [1199, 3],
                                            itemsDesktopSmall: [979, 2],
                                            itemsTablet: [768, 2],
                                            itemsTabletSmall: [540, 1],
                                            itemsMobile: [360, 1],
                                            navigationText: ['<i class="fa fa-angle-left" title="Previous"></i>', '<i class="fa fa-angle-right" title="Next"></i>']
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-area">
                    <div id="html-section-home2-banner" class="html-section index-section index-section--flush">
                        <div class="wrapper">
                            <div class="image-bar-box" style="padding-top:px; padding-bottom:px;">
                                <div class="grid grid--no-gutters image-bar">
                                    <div class="grid__item medium-up--one-half one-half">
                                        <a href="product.html" class="image-bar__item image-bar__link" style="background-image: url(assets/images/banner1-home2_2000x_crop_center.png)">
                                            <img src="assets/images/banner1-home2_2000x_crop_center.png" alt="">
                                        </a>
                                    </div>
                                    <div class="grid__item medium-up--one-half one-half">
                                        <a href="product.html" class="image-bar__item image-bar__link" style="background-image: url(assets/images/banner2-home2_2000x_crop_center.png)">
                                            <img src="assets/images/banner2-home2_2000x_crop_center.png" alt="">
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
    <div class="content">
        <div class="index-sections">
            <div id="html-section-1492526248796" class="html-section index-section products-col">
                <div class="wrapper">
                    <div class="home-product-col-wrapper grid--table grid--full" style="padding-top:px; padding-bottom:px;">
                        <header class="section-header style_2">
                            <h2>Featured Products</h2>
                        </header>
                        <div class="grid__item block_heading grid--table grid--full style_2">
                            <div class="grid ">
                                <div class="col-element grid__item one-third">
                                    <div class="col-content">
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/Niye laptop speaker.jpg" alt="Niye laptop speaker">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element new-label">
                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='./product.html;" title="Select Options">
                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-2" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">Niye laptop speaker</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266617412" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                            3W | 15*10*10cm | 610mAh


                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">

                                                    <span class="product__price">
                                                        <span class="money" doubly-currency-usd="30500" doubly-currency-vnd="694362233.9795835" doubly-currency="USD">$7 USD</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/m10 earpods.jpg" alt="M10 Earpods">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element new-label">
                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="etiam-dan-lorem-quis-ligula-elementum-3" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">M10 Wireless Earpods</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266618180" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                            30mW | 180hrs battery| 11*10*4cm | 2000mAh

                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">
                                                    <span class="product-price__price">
                                                        <span class="money" doubly-currency-usd="25000" doubly-currency-vnd="569149372.1144127" doubly-currency="USD">$20 USD</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/oraimo soundpro speaker.jpg" alt="Oraimo SoundPro Speaker">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element new-label">
                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="cum-sociis-natoque-penatibus-et-magnis-4" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">Oraimo SoundPro Speaker</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266623492" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                            5W*2 | 5-7hrs battery| 213*80*80.6mm | 2000mAh

                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">

                                                    <span class="product__price">
                                                        <span class="money" doubly-currency-usd="70800" doubly-currency-vnd="1611831021.8280168" doubly-currency="USD">$25 USD</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-element grid__item one-third">
                                    <div class="one-whole">
                                        <div class="grid-view-item">
                                            <div class="grid-normal-display">
                                                <div class="grid__image product-image">
                                                    <a class="grid-view-item__link" href="product.html">
                                                        <img class="grid-view-item__image" src="assets/images/oraimo power bank.jpg" alt="Oraimo Power Bank">
                                                    </a>
                                                    <div class="product-label">
                                                    </div>
                                                    <ul class="action-button">
                                                        <li class="wishlist">
                                                            <a class="wish-list btn" href="page-wishlist.html">
                                                                <i class="fa fa-heart" title="Wishlist"></i>
                                                            </a>
                                                        </li>
                                                        <li class="add-to-cart-form">
                                                            <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                <div class="hide clearfix">
                                                                    <select name="id">
                                                                        <option selected="selected" value="38088224132">Default Title - $849.00</option>
                                                                    </select>
                                                                </div>
                                                                <div class="effect-ajax-cart">
                                                                    <input type="hidden" name="quantity" value="1">
                                                                    <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now">
                                                                        <span id="AddToCartText3">
                                                                            <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <div class="quickview">
                                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                    <div data-handle="hp-probook-450" class="quick_shop-div">
                                                                        <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                            <i class="fa fa-eye" title="Quick View"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="h4 grid-view-item__title">
                                                <a href="product.html">Oraimo Power Bank</a>
                                            </div>
                                            <div class="rating-star">
                                                <span class="spr-badge" id="spr_badge_10266602180" data-rating="5.0">
                                                    <span class="spr-starrating spr-badge-starrating">
                                                        {{-- <i class="spr-icon spr-icon-star"></i>
                                                        <i class="spr-icon spr-icon-star"></i>
                                                        <i class="spr-icon spr-icon-star"></i>
                                                        <i class="spr-icon spr-icon-star"></i>
                                                        <i class="spr-icon spr-icon-star"></i> --}}
                                                        5V-2A | 159*81*32mm | 27000mAh

                                                    </span>
                                                    <span class="spr-badge-caption">1 review</span>
                                                </span>
                                            </div>
                                            <div class="grid-view-item__meta">


                                                <span class="product-price__price">
                                                    <span class="money" doubly-currency-usd="84900" doubly-currency-vnd="1932831267.7005455" doubly-currency="USD">$15 USD</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>/
                                    <div class="col-content">
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/power pack.jpg" alt="Power Pack">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element deal-label">
                                                                <span style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="hide clearfix">
                                                                        <select name="id">
                                                                            <option selected="selected" value="38088231300">Default Title - $749.00</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now">
                                                                            <span id="AddToCartText3">
                                                                                <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="copy-of-copy-of-asus-rog-g752vm-3" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">Power Pack</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266603716" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">


                                                    <s class="product-price__price">
                                                        {{-- <span class="money" doubly-currency-usd="76900" doubly-currency-vnd="1750703468.6239336" doubly-currency="USD">$769.00 USD</span> --}}
                                                    </s>
                                                    <span class="product-price__price product-price__sale">
                                                        <span class="money" doubly-currency-usd="74900" doubly-currency-vnd="1705171518.8547804" doubly-currency="USD">$10 USD</span>
                                                        <span class="product-price__sale-label">On Sale</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/5 way adapter.jpg" alt="5 way adapter">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element deal-label">
                                                                <span style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="hide clearfix">
                                                                        <select name="id">
                                                                            <option selected="selected" value="38088234372">Default Title - $799.00</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now">
                                                                            <span id="AddToCartText3">
                                                                                <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="copy-of-copy-of-asus-rog-g752vm-2" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">5 Way Adapter</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266604484" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">


                                                    <s class="product-price__price">
                                                        {{-- <span class="money" doubly-currency-usd="84900" doubly-currency-vnd="1932831267.7005455" doubly-currency="USD">$849.00 USD</span> --}}
                                                    </s>
                                                    <span class="product-price__price product-price__sale">
                                                        <span class="money" doubly-currency-usd="79900" doubly-currency-vnd="1819001393.277663" doubly-currency="USD">$7 USD</span>
                                                        <span class="product-price__sale-label">On Sale</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-element grid__item one-third">
                                    <div class="col-content">
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/phone pouches.jpg" alt="Silicone phone pouches">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element new-label">
                                                                <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                            </div>
                                                            <div class="label-element trend-label">
                                                                <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                            </div>
                                                            <div class="label-element deal-label">
                                                                <span style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="hide clearfix">
                                                                        <select name="id">
                                                                            <option selected="selected" value="38088328324">Default Title - $99.00</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now">
                                                                            <span id="AddToCartText3">
                                                                                <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="example-book-2" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">Silicone phone pouches</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266629572" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            {{-- <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i> --}}
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">


                                                     <s class="product-price__price">
                                                        {{-- <span class="money" doubly-currency-usd="11900" doubly-currency-vnd="270915101.12646043" doubly-currency="USD">$119.00 USD</span> --}}
                                                    </s>
                                                    <span class="product-price__price product-price__sale">
                                                        <span class="money" doubly-currency-usd="9900" doubly-currency-vnd="225383151.35730743" doubly-currency="USD">$99.00 USD</span>
                                                        <span class="product-price__sale-label">On Sale</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/product_800x800.jpg" alt="Motorola Moto 360 (2nd gen)">
                                                        </a>
                                                        <div class="product-label">
                                                            <div class="label-element best-label">
                                                                <span style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                            </div>
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="hide clearfix">
                                                                        <select name="id">
                                                                            <option selected="selected" value="38088332868">Black Leather / 42mm - $349.99</option>
                                                                            <option value="38088332932">Black Leather / 46mm - $549.99</option>
                                                                            <option value="38088333060">Black Metal / 42mm - $349.99</option>
                                                                            <option value="38088333124">Black Metal / 46mm - $549.99</option>
                                                                            <option value="38088333188">Rose Gold / 42mm - $349.99</option>
                                                                            <option value="38088333252">Rose Gold / 46mm - $549.99</option>
                                                                            <option value="38088333316">Silver / 42mm - $349.99</option>
                                                                            <option value="38088333380">Silver / 46mm - $549.99</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html';" title="Select Options">
                                                                            <i class="fa fa-bars"></i> Options</button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="example-book-3" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">Motorola Moto 360 (2nd gen)</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266630532" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">

                                                    <span class="product__price">
                                                        <span class="money" doubly-currency-usd="34999" doubly-currency-vnd="796786354.9852933" doubly-currency="USD">$349.99 USD</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="one-whole">
                                            <div class="grid-view-item">
                                                <div class="grid-normal-display">
                                                    <div class="grid__image product-image">
                                                        <a class="grid-view-item__link" href="product.html">
                                                            <img class="grid-view-item__image" src="assets/images/product33_320x320.jpg" alt="Logitech Wireless Keyboard MK240 Nano">
                                                        </a>
                                                        <div class="product-label">
                                                        </div>
                                                        <ul class="action-button">
                                                            <li class="wishlist">
                                                                <a class="wish-list btn" href="page-wishlist.html">
                                                                    <i class="fa fa-heart" title="Wishlist"></i>
                                                                </a>
                                                            </li>
                                                            <li class="add-to-cart-form">
                                                                <form action="#" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                    <div class="hide clearfix">
                                                                        <select name="id">
                                                                            <option selected="selected" value="38088244612">Default Title - $24.34</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="effect-ajax-cart">
                                                                        <input type="hidden" name="quantity" value="1">
                                                                        <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now">
                                                                            <span id="AddToCartText3">
                                                                                <i class="fa fa-shopping-cart"></i> Add to Cart</span>
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <div class="quickview">
                                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                        <div data-handle="numquam-eius-modi-tempora-incidunt-ut-labore-et-dolore-magnam" class="quick_shop-div">
                                                                            <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                <i class="fa fa-eye" title="Quick View"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="h4 grid-view-item__title">
                                                    <a href="product.html">Logitech Wireless Keyboard MK240 Nano</a>
                                                </div>
                                                <div class="rating-star">
                                                    <span class="spr-badge" id="spr_badge_10266608580" data-rating="5.0">
                                                        <span class="spr-starrating spr-badge-starrating">
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                            <i class="spr-icon spr-icon-star"></i>
                                                        </span>
                                                        <span class="spr-badge-caption">1 review</span>
                                                    </span>
                                                </div>
                                                <div class="grid-view-item__meta">
                                                    <span class="product-price__price">
                                                        <span class="money" doubly-currency-usd="2434" doubly-currency-vnd="55412382.86905922" doubly-currency="USD">$24.34 USD</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="html-section-1492526371838" class="html-section index-section index-section--flush">
                <div class="wrapper">
                    <div class="image-bar-box gallery-advanced" style="padding-top:px; padding-bottom:px;">
                        <div class="grid grid--no-gutters image-bar">
                            <div class="gallery-3 gallery">
                                <div class="left grid__item one-half gallery-item">
                                    <a href="#">
                                        <img src="assets/images/banner1-bottom-home2_b96bc752-67d4-45a5-ac32-49dc691b1958_600x.jpg" alt="">
                                    </a>
                                </div>
                                <div class="middle grid__item one-quarter">
                                    <div class="top gallery-item">
                                        <a href="#">
                                            <img src="assets/images/banner2-bottom-home2_400x.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="bottom gallery-item">
                                        <a href="#">
                                            <img src="assets/images/banner3-bottom-home2_400x.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="right grid__item one-quarter gallery-item">
                                    <a href="#">
                                        <img src="assets/images/banner4-bottom-home2_92e12df0-500c-4897-882a-7d061bb417fd_400x.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="html-section-1492526554629" class="html-section index-section tabs-slider">
                <div class="wrapper">
                    <div class="page-width style_2" data-section-id="1492526554629" data-section-type="tabs" style="padding-top:px; padding-bottom:px;">
                        <div class="section-header">
                            <h2>New Arrivals</h2>
                        </div>
                        <div class="tabs-wrapper">
                            <div class="home-tabs grid--full grid--table grid-block-full">
                                <div class="home-tabs-inner">
                                    <div id="tabs-product-slider">
                                        <ul class="nav nav-tabs tabs-left sideways">
                                            <li class="stab1 active">
                                                <a href="#stab1" data-toggle="tab" class="active">Smartphone</a>
                                            </li>
                                            <li class="stab2">
                                                <a href="#stab2" data-toggle="tab">Tablet</a>
                                            </li>
                                            <li class="stab3">
                                                <a href="#stab3" data-toggle="tab">Laptop</a>
                                            </li>
                                        </ul>
                                        <div class="tab-panel grid active" id="stab1">
                                            <div class="tab-product-slider">
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                <img class="grid-view-item__image" src="assets/images/product10_320x320.jpg" alt="Google Pixel">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                    <div class="label-element trend-label">
                                                                        <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="javascript:location.href='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="cum-sociis-natoque-penatibus-et-magnis-7" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Google Pixel</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059386182" data-rating="4.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star-empty" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product__price">$834.30</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product13_320x320.jpg" alt="HTC 10">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                    <div class="quickview">
                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                            <div data-handle="cum-sociis-natoque-penatibus-et-magnis-2" class="quick_shop-div">
                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                    <i class="fa fa-eye" title="Quick View"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">HTC 10</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059392838" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product__price">$517.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product4_320x320.jpg" alt="iPhone 7">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                    <div class="label-element best-label">
                                                                        <span style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="corporis-suscipit-laboriosam" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">iPhone 7</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059410758" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product__price">$899.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                <img class="grid-view-item__image" src="assets/images/product14_320x320.jpg" alt="LG G5">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="cum-sociis-natoque-penatibus-et-magnis-1" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">LG G5</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059394054" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$590.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                <img class="grid-view-item__image" src="assets/images/product15_320x320.jpg" alt="Samsung Galaxy J7 Prime">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="cum-sociis-natoque-penatibus-et-magnis-6" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Samsung Galaxy J7 Prime</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059387910" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product__price">$417.56</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product1_320x320.jpg" alt="Samsung Galaxy S7">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element best-label">
                                                                        <span style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                                    </div>
                                                                    <div class="label-element trend-label">
                                                                        <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                    <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                        <div class="hide clearfix">
                                                                            <select name="id">
                                                                                <option selected="selected" value="33071117382">Large - $899.00</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="effect-ajax-cart">
                                                                            <input type="hidden" name="quantity" value="1">
                                                                            <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                        </div>
                                                                    </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Samsung Galaxy S7</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059410310" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$899.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-panel grid" id="stab2">
                                            <div class="tab-product-slider">
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product17_320x320.jpg" alt="Apple iPad Air 2">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="etiam-dan-lorem-quis-ligula-elementum-5" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Apple iPad Air 2</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059396358" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product__price">$359.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product18_320x320.jpg" alt="Apple iPad Pro">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="etiam-dan-lorem-quis-ligula-elementum-1" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>s
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Apple iPad Pro</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059400326" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product__price">$1,400.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product19_320x320.jpg" alt="Asus ZenPad 3 8.0 Z581KL">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="etiam-dan-lorem-quis-ligula-elementum-4" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Asus ZenPad 3 8.0 Z581KL</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059397446" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$280.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product20_320x320.jpg" alt="Huawei MediaPad T1 7.0">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="etiam-dan-lorem-quis-ligula-elementum" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Huawei MediaPad T1 7.0</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059401158" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$99.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product21_320x320.jpg" alt="Lenovo Yoga Tab 3 Plus">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="etiam-lobortis-purus-dictum" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Lenovo Yoga Tab 3 Plus</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059411846" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$499.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product22_320x320.jpg" alt="LG G Pad III 10.1 FHD">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element deal-label">
                                                                        <span style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                    <div class="quickview">
                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                            <div data-handle="example-book-6" class="quick_shop-div">
                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                    <i class="fa fa-eye" title="Quick View"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">LG G Pad III 10.1 FHD</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059376646" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <s class="product-price__price">$400.00</s>
                                                            <span class="product-price__price product-price__sale">
                                                            $369.00 <span class="product-price__sale-label">On Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-panel grid" id="stab3">
                                            <div class="tab-product-slider">
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product24_320x320.jpg" alt="Acer Aspire E5">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                    <div class="quickview">
                                                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                            <div data-handle="copy-of-copy-of-asus-rog-g752vm-4" class="quick_shop-div">
                                                                                <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                    <i class="fa fa-eye" title="Quick View"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Acer Aspire E5</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9235806342" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$619.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product8_320x320.jpg" alt="Apple Macbook Air">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element new-label">
                                                                        <span style="color:#ffffff; background-color: #ffb400;">New</span>
                                                                    </div>
                                                                    <div class="label-element best-label">
                                                                        <span style="color:#ffffff; background-color: #00ff27;">Best</span>
                                                                    </div>
                                                                    <div class="label-element trend-label">
                                                                        <span style="color:#ffffff; background-color: #003cff;">Trending</span>
                                                                    </div>
                                                                    <div class="label-element deal-label">
                                                                        <span style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="apple-macbook-air" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Apple Macbook Air</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9236050758" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <s class="product-price__price">$1,300.00</s>
                                                            <span class="product-price__price product-price__sale">
                                                            $1,190.00 <span class="product-price__sale-label">On Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product25_320x320.jpg" alt="Apple Macbook Pro 13in">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="copy-of-copy-of-asus-rog-g752vm-1" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Apple Macbook Pro 13in</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9212386118" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$1,499.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product26_320x320.jpg" alt="Asus RoG G752VM">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='product.html'" title="Select Options"><i class="fa fa-bars"></i> Options</button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="pellentesque-habitant-morbi-tristique-senectus" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Asus RoG G752VM</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9059415686" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$299.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product5_320x320.jpg" alt="Dell Inspiron 7460">
                                                                </a>
                                                                <div class="product-label">
                                                                    <div class="label-element deal-label">
                                                                        <span style="color:#ffffff; background-color: #00d5d5;">Deal</span>
                                                                    </div>
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="copy-of-copy-of-asus-rog-g752vm" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Dell Inspiron 7460</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9212331974" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <s class="product-price__price">$999.00</s>
                                                            <span class="product-price__price product-price__sale">
                                                            $899.00 <span class="product-price__sale-label">On Sale</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fi-item grid__item">
                                                    <div class="grid-view-item">
                                                        <div class="grid-normal-display">
                                                            <div class="grid__image product-image">
                                                                <a class="grid-view-item__link" href="product.html">
                                                                    <img class="grid-view-item__image" src="assets/images/product27_320x320.jpg" alt="Dell Vostro 5468">
                                                                </a>
                                                                <div class="product-label">
                                                                </div>
                                                                <ul class="action-button">
                                                                    <li class="add-to-cart-form">
                                                                        <form action="http://demo.tadathemes.com/HTML_DigitalWorld/source/product.html" method="post" enctype="multipart/form-data" class="AddToCartForm form-vertical">
                                                                            <div class="effect-ajax-cart">
                                                                                <input type="hidden" name="quantity" value="1">
                                                                                <button type="submit" name="add" class="btn btn-1 add-to-cart AddToCart" title="Buy Now"><span class="AddToCartText3"><i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
                                                                            </div>
                                                                        </form>
                                                                    </li>
                                                                    <li class="wishlist">
                                                                        <a class="wish-list btn" href="page-wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="quickview">
                                                                            <div class="product-ajax-cart hidden-xs hidden-sm">
                                                                                <div data-handle="dell-vostro-5468" class="quick_shop-div">
                                                                                    <div class="btn quick_shop" data-mfp-src="#quick-shop-modal" data-effect="mfp-zoom-out">
                                                                                        <i class="fa fa-eye" title="Quick View"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="h4 grid-view-item__title">
                                                            <a href="product.html">Dell Vostro 5468</a>
                                                        </div>
                                                        <div class="rating-star">
                                                            <span class="spr-badge" id="spr_badge_9235971782" data-rating="5.0">
                                                                <span class="spr-starrating spr-badge-starrating">
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                    <i class="spr-icon spr-icon-star" style=""></i>
                                                                </span>
                                                                <span class="spr-badge-caption">1 review</span>
                                                            </span>
                                                        </div>
                                                        <div class="grid-view-item__meta">
                                                            <span class="product-price__price">$879.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                      $('#tabs-product-slider').easytabs({animationSpeed: 'fast', updateHash: false});
                                    </script>
                                </div>
                            </div>
                        </div>
                        <script>
                          var idclass = "#html-section-1492526554629 .tab-product-slider "
                          if($(idclass).length){
                            $(idclass).owlCarousel({
                              navigation : true,
                              pagination: false,
                              autoPlay: false,
                              paginationSpeed: 800,
                              items: 3,
                              slideSpeed : 200,
                              rewindSpeed : 1000,
                              itemsDesktop : [1199,3],
                              itemsDesktopSmall : [979,3],
                              itemsTablet: [768,2],
                              itemsTabletSmall: [540,2],
                              itemsMobile : [360,1],
                              navigationText: ['<i class="fa fa-angle-left " title="Previous "></i>', '<i class="fa fa-angle-right " title="Next "></i>']
                            });
                          }
                        </script>
                    </div>
                </div>
            </div>
            <div id="html-section-1492526858634" class="html-section index-section hot-collections">
                <div class="wrapper">
                    <div class="brands-slider" data-section-id="1492526858634" style="padding-top:px; padding-bottom:10px;">
                        <header class="section-header style_2">
                            <h2>Hot Collections</h2>
                        </header>
                        <div class="hotcoll_group">
                            <div class="hot-1 grid__item one-third">
                                <div class="hot-inner">
                                    <div class="hot-image grid__item one-half">
                                        <img src="assets/images/mobile-devices_300x.jpg">
                                    </div>
                                    <div class="hot-right grid__item one-half">
                                        <div class="hot-title">
                                            Smartphones
                                        </div>
                                        <div class="hot-links">
                                            <ul>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Apple</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Samsung</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Infinix</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Itel</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Nokia</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">BlackBerry</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-2 grid__item one-third">
                                <div class="hot-inner">
                                    <div class="hot-image grid__item one-half">
                                        <img src="assets/images/pc-1_300x.jpg">
                                    </div>
                                    <div class="hot-right grid__item one-half">
                                        <div class="hot-title">
                                            Wi-Fi Modems
                                        </div>
                                        <div class="hot-links">
                                            <ul>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">iPad</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Samsung</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Acer</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Asus</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Lenovo</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-3 grid__item one-third">
                                <div class="hot-inner">
                                    <div class="hot-image grid__item one-half">
                                        <img src="assets/images/headphone_300x.jpg">
                                    </div>
                                    <div class="hot-right grid__item one-half">
                                        <div class="hot-title">
                                            Decoders
                                        </div>
                                        <div class="hot-links">
                                            <ul>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">DSTV</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">OpenView</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Acer</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Lenovo</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">HP</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Macbook</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-4 grid__item one-third">
                                <div class="hot-inner">
                                    <div class="hot-image grid__item one-half">
                                        <img src="assets/images/headphone_8467ba67-70c7-4977-b57e-8847d56549c6_300x.jpg">
                                    </div>
                                    <div class="hot-right grid__item one-half">
                                        <div class="hot-title">
                                            Sound
                                        </div>
                                        <div class="hot-links">
                                            <ul>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Laptop Speakers</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Headphones</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Ear Pods</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Keyboard</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Mouse</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Cases</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-5 grid__item one-third">
                                <div class="hot-inner">
                                    <div class="hot-image grid__item one-half">
                                        <img src="assets/images/television_300x.jpg">
                                    </div>
                                    <div class="hot-right grid__item one-half">
                                        <div class="hot-title">
                                            Electronics
                                        </div>
                                        <div class="hot-links">
                                            <ul>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">PC Powerpacks</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">WAHL Hair Clipper</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">LG</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Asus</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Nokia</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">BlackBerry</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-6 grid__item one-third">
                                <div class="hot-inner">
                                    <div class="hot-image grid__item one-half">
                                        <img src="assets/images/printer_300x.jpg">
                                    </div>
                                    <div class="hot-right grid__item one-half">
                                        <div class="hot-title">
                                            Accesories
                                        </div>
                                        <div class="hot-links">
                                            <ul>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Smart Watches</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Pouches</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Mouse</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Keyboard</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Lenovo</a>
                                                </li>
                                                <li class="list-unstyled">
                                                <a href="http://demo.tadathemes.com/">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="html-section-1492526658142 " class="html-section index-section blogs-slider ">
                <div class="wrapper ">
                    {{-- <div class="home-blog-wrapper " style="padding-top:px; padding-bottom:60px; ">
                        <header class="section-header style_2 ">
                        <h2 class="section-title ">Blog posts</h2>
                        </header>
                        <div class="grid grid--uniform grid--blog blog-slider">
                                        <div class="grid__item">
                                            <div class="blog-top">
                                                <a class="blog-img" href="article.html">
                                                <img src="assets/images/blog13.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-bottom">
                                                <a href="article.html" class="blog-title clearfix">These are the 5 best phones you can buy right now</a>
                                                <ul class="information">
                                                    <li class="date"><time datetime="2016-12-13">March 15, 2018</time></li>
                                                    <li class="comment">4 comment</li>
                                                </ul>
                                                <div class="blog-desc">
                                                    From high-priced pocket-busters to our favorite budget beauties. You're up to date on everything you need to know before buying a phone, and now the...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="blog-top">
                                                <a class="blog-img" href="article.html">
                                                <img src="assets/images/blog12.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-bottom">
                                                <a href="article.html" class="blog-title clearfix">Apple's new TV app goes live with unified search</a>
                                                <ul class="information">
                                                    <li class="date"><time datetime="2016-12-13">March 10, 2018</time></li>
                                                    <li class="comment">1 comment</li>
                                                </ul>
                                                <div class="blog-desc">
                                                    An update to Apple's iOS mobile software also brings hundreds of new emojis to your iPhone and iPad -- and keeps that beloved butt-looking peach....
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="blog-top">
                                                <a class="blog-img" href="article.html">
                                                <img src="assets/images/blog11.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-bottom">
                                                <a href="article.html" class="blog-title clearfix">In 2017, your phone's camera will have superpowers</a>
                                                <ul class="information">
                                                    <li class="date"><time datetime="2016-12-13">March 08, 2018</time></li>
                                                    <li class="comment">1 comment</li>
                                                </ul>
                                                <div class="blog-desc">
                                                    Virtual reality is a somewhat understandable concept in 2018. You put on a headset, you find yourself in 3D worlds. But augmented reality -- AR...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="blog-top">
                                                <a class="blog-img" href="article.html">
                                                <img src="assets/images/blog10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-bottom">
                                                <a href="article.html" class="blog-title clearfix">Divoom Voombox Travel 3</a>
                                                <ul class="information">
                                                    <li class="date"><time datetime="2016-12-13">March 03, 2018</time></li>
                                                    <li class="comment">1 comment</li>
                                                </ul>
                                                <div class="blog-desc">
                                                    Best holiday tech gifts available for under $25 We rounded up some of our favorite tech accessories -- including headphones, cables and other miscellaneous gadgets...
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <script>
                                  if($(".blog-slider ").length){
                                    $(".blog-slider ").owlCarousel({
                                      navigation : true,
                                      pagination: false,
                                      autoPlay: false,
                                      paginationSpeed: 800,
                                      items: 3,
                                      slideSpeed : 200,
                                      rewindSpeed : 1000,
                                      itemsDesktop : [1199,3],
                                      itemsDesktopSmall : [979,3],
                                      itemsTablet: [768,2],
                                      itemsTabletSmall: [540,2],
                                      itemsMobile : [360,1],
                                      navigationText: ['<i class="fa fa-angle-left " title="Previous "></i>', '<i class="fa fa-angle-right " title="Next "></i>']
                                    });
                                  }
                                </script>
                    </div> --}}
                </div>
            </div>
            <div id="html-section-1492526686056 " class="html-section index-section brands-slider ">
                <div class="wrapper ">
                    <div class="brands-slider " data-section-id="1492526686056 " style="padding-top:px; padding-bottom:30px; ">
                        <div class="brands_group ">
                            <div class="brand-slidermode">
                                            <div class="logo-bar__item">
                                                <img src="assets/images/logo-1_large_large_d8ffbf72-3a60-4643-9fec-2112f3a5831a_200x.png" class="logo-bar__image">
                                            </div>
                                            <div class="logo-bar__item">
                                                <img src="assets/images/logo-3_large_large_a8b73c28-25e3-458e-95bb-e18decc75fab_200x.png" class="logo-bar__image">
                                            </div>
                                            <div class="logo-bar__item">
                                                <img src="assets/images/logo-4_large_large_7770fb87-d0bd-4d10-bdb3-a46cbf35d767_200x.png" class="logo-bar__image">
                                            </div>
                                            <div class="logo-bar__item">
                                                <img src="assets/images/logo-5_large_large_2de526e6-2e88-4b63-84e7-ffeb6a24b9d6_200x.png" class="logo-bar__image">
                                            </div>
                                            <div class="logo-bar__item">
                                                <img src="assets/images/logo-6_large_large_1f5136cb-e113-4410-b8ca-e5fd5afd3853_200x.png" class="logo-bar__image">
                                            </div>
                                            <div class="logo-bar__item">
                                                <img src="assets/images/logo-1_large_large_d8ffbf72-3a60-4643-9fec-2112f3a5831a_200x.png" class="logo-bar__image">
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var idclass = ".brand-slidermode"
                    if($(idclass).length){
                      $(idclass).owlCarousel({
                      navigation : true,
                      pagination: false,
                      autoPlay: false,
                      paginationSpeed: 800,
                      items: 5,
                      slideSpeed : 200,
                      rewindSpeed : 1000,
                      itemsDesktop : [1199,5],
                      itemsDesktopSmall : [979,4],
                      itemsTablet: [768,3],
                      itemsTabletSmall: [540,3],
                      itemsMobile : [360,2],
                      navigationText: ['<i class="fa fa-angle-left " title="Previous " data-toggle="tooltip " data-placement="top "></i>', '<i class="fa fa-angle-right " title="Next " data-toggle="tooltip " data-placement="top "></i>']
                    });
                  }
                </script>
            </div>
        </div>
    </div>
</main>
@endsection
