<?php
$productName = 'xbox-one-controller';
if (isset($_GET['productName'])){
    $productName = $_GET['productName'];   
}
//test credentials
$razor_api_key = "";
$razor_api_secret = "";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=ENTER_YOUR_ANALYTICS_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'ENTER_YOUR_ANALYTICS_ID');
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'ENTER_YOUR_TAG_ID');</script>
    <!-- End Google Tag Manager -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Not required meta tags but essential for seo and link sharing -->
    <meta name="description" content="Get the best controller skins based on your favorite games.">
    <meta name="Keywords" content="Custom,T-shirts, Hoodies, Make your Own, Polo, Round neck,Custom T-shirts ">
    <meta property="og:title" content="Home | The Top Controller" />
    <meta property="og:url" content="https://www.thetopconroller.com" />
    <meta property="og:description" content="Get the best controller skins based on your favorite games.">
    <meta property="og:image" itemprop="image"
        content="https://www.thetopcontroller.com/images/top_controller_fav.png" />
    <meta property="og:image:secure_url" itemprop="image"
        content="https://www.thetopcontroller.com/images/top_controller_fav.png" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <link rel="shortcut icon" href="../images/top_controller_fav.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Home | The Top Controller</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 'ENTER_YOUR_PIXEL_ID');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=ENTER_YOUR_PIXEL_ID&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <style type="text/css">
        /* top header slider */
        #white-circle {
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            top: 20%;
            left: 42%;
            -webkit-box-shadow: 0px 0px 20px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 2px 30px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 20px 40px rgba(0, 0, 0, 0.15);
            z-index: 10;
        }

        #designed-to {
            font-size: 121px;
            opacity: 0.2;
            /* text-orientation: inherit; */
            writing-mode: tb-rl;
            transform: rotate(180deg) translate(250%, 0);
            z-index: 10;
            left: 50%;
            bottom: 10%;
            line-height: 120px;
        }

        #stand-out {
            bottom: -3%;
            font-size: 78px;
            line-height: 78px;
            left: 50%;
            transform: translate(-150%, 0);
            z-index: 15;
        }

        #header-slider-container {
            top: 30%;
            left: 7%;
            z-index: 15;
        }

        #john-doe-container {
            top: 30%;
            right: 13%;
            z-index: 15;
        }

        #scroll-container {
            writing-mode: tb-rl;
            transform: rotate(180deg);
            z-index: 10;
            bottom: 0px;
            right: 13%;
        }

        /* service */
        #bubbles-container {
            transform: rotate(180deg);
            top: -110px;
            position: absolute;
            left: 5%;
        }

        #services-container {
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 17;
        }

        #services-heading {
            font-size: 190px;
            line-height: 150px;
        }

        #services-sub-heading {
            font-size: 47px;
            line-height: 80px;
        }
        .ribbon {
            width: 150px;
            height: 150px;
            overflow: hidden;
            display: none;
            position: absolute;
        }
        .ribbon::before,
        .ribbon::after {
            position: absolute;
            z-index: -1;
            content: '';
            display: block;
            border: 5px solid #2980b9;
        }
        .ribbon span {
            position: absolute;
            display: block;
            width: 225px;
            padding: 15px 0;
            background-color: #3498db;
            box-shadow: 0 5px 10px rgba(0,0,0,.1);
            color: #fff;
            font: 700 18px/1 'Lato', sans-serif;
            text-shadow: 0 1px 1px rgba(0,0,0,.2);
            text-transform: uppercase;
            text-align: center;
        }

        /* top left*/
        .ribbon-top-left {
            top: 0px;
            left: 0px;
        }
        .ribbon-top-left::before,
        .ribbon-top-left::after {
            border-top-color: transparent;
            border-left-color: transparent;
        }
        .ribbon-top-left::before {
            top: 0;
            right: 0;
        }
        .ribbon-top-left::after {
            bottom: 0;
            left: 0;
        }
        .ribbon-top-left span {
            right: -25px;
            top: 30px;
            transform: rotate(-45deg);
        }
        /* for large desktops */
        @media (min-width: 1800px) {
            #john-doe-container {
                right: 23%;
            }

            #scroll-container {
                right: 23%;
            }

            #header-slider-container {
                left: 13%;
            }

            #bubbles-container {
                left: 13%;
            }
        }

        #designed-to-mobile{
            font-size: 160px;
            opacity: 0.2;
            /* text-orientation: inherit; */
            writing-mode: tb-rl;
            transform: rotate(180deg) translate(410%,0);
            z-index: 0;
            left: 50%;
            bottom: 10%;
            line-height: 35px;
        }        

        /* model razorpay */
        
        .closeButton{
            margin-right:40px;color:#000;font-size:27px;
            }
        .formStyle{
            padding:0px 55px;     
            }
        .formInput{
            width:50%;float:left;padding:0px 25px;
        }
        .formInput1{
            width:50%;float:left;padding:0px 25px;
        }
        .buttonStyle{
            float:right;
            margin-bottom: 30px;
            font-size: 16px;
            background-color: #ffea00;
            border-color:#ffea00;
            font-weight:bold;
            color: #fc1e1e;
            border-radius: 100px;
            padding-top: 5px;
            padding-bottom: 5px;
            z-index: 20;
        }
        .buttonStyle:hover{
            color:#fff;
            background-color: #ffea00;
            border-color:#ffea00;
        }
        /* sucessfully form css */
        .backToShop{
            background-color:#ffea00;
            border-radius:100px;
            text-align:center;
            font-weight:bold;
            font-size:20px;
            letter-spacing:0;
            color:#fc1e1e !important;
            opacity: 1;
            justify-content:center;
            display:flex;
            margin: 0px 60px 0px 60px;
            padding: 10px 40px;
            margin-bottom:20px !important;
        }
        @media (max-width: 700px){
            .closeButton{
                margin-right:15px;font-size:27px;
            }
            .formStyle{
                padding:0px 0px;
            }
            .formInput{
                width:100%;padding:0px 0px;
            }
            .formInput1{
                width:100%;float:left;padding: 0px 0px;
            }
            .buttonStyle{
                float:left;
            }
            /* sucessfully form css */
            .backToShop{
                margin: 0px 10px 0px 10px;
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body class="position-relative" style="overflow-y: scroll; height: 100%;" data-spy="scroll"
    data-target="#navbar-example2" data-offset="150">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=ENTER_YOUR_TAG_ID" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- loader start-->

    <div id="loader">
        <div class="loader-image-container">
            <img class="element" src="../images/loader.png">
        </div>
    </div>

    <!-- loader end -->
    <div class="d-none d-lg-block">
        <!-- <div id="header-desktop"></div>
    
        <div id="footer-desktop"></div> -->
        <header>

            <div style="background-color: #2e3192; z-index: 150;" class="fixed-top">
                <div class="top-bar-desktop d-flex justify-content-center align-items-center">
                    <h3 class="m-0 font-poppins-light" style="font-size: 22px;">An Exclusive Coupon of <span class="font-weight-bold">5$</span> Has been Applied Valid Until <span class="font-weight-bold" id="counter-1">10:00</span></h3>
                </div>
                <nav id="navbar-example2" class="navbar navbar-dark w-100 justify-content-center" style="background-color: #2e3192;">
                    <img src="../icons/yellow_logo.svg" style="width: 40px; margin-right: 5px;">
                    <a class="navbar-brand font-poppins-bold" style="font-size: 30px; color:#ffea00; margin-right: 150px;" href="/">The Top Controller</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link font-poppins-bold" style="font-size: 16px; color: #ffea00;" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-poppins-bold cursor-pointer" style="font-size: 16px; color: #ffea00;" onclick="window.location = '/#services'">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-poppins-bold cursor-pointer" style="font-size: 16px; color: #ffea00;" onclick="window.location = '/#about'">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-poppins-bold" style="font-size: 16px; color: #ffea00;" href="#designs">Designs</a>
                        </li>
                        <li class="position-relative nav-item d-flex justify-content-center align-items-center">
                            <a class="nav-link font-poppins-bold text-uppercase shadow-buy-now-button d-flex justify-content-center align-items-center cart-button" style="font-size: 16px; background-color: #ffea00; color: #fc1e1e; border-radius: 100px; padding-top: 5px; padding-bottom: 5px; z-index: 20;" href="../products/cart">Cart
                                <picture>
                                    <source srcset="../images/cartimage.webp" type="image/webp">
                                    <source srcset="../images/cartimage.png" type="image/png">
                                    <img src="../images/cartimage.png" style="width: 15px; margin-left: 2px;">
                                </picture>
                            </a>
                            <div class="position-absolute d-flex justify-content-center align-items-center font-poppins-bold" style="background-color: #ff0000; width: 20px; font-size: 12px; border-radius: 50%; height: 20px; color: white; right: -5px; top: -3px; z-index: 25;" id="cart-message-desktop">1</div>
                            <div class="position-absolute justify-content-center align-items-end font-poppins-bold text-center" style="background-color: #ff0000; width: 100%; font-size: 12px; height: 70px; color: white; top: 10px; border-radius: 20px; padding-bottom: 5px; display: none;" id="add-to-cart-message-desktop">Product In Cart</div>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            
            
        </header>
        <!-- top silder and its elements -->
        <div id="header-slider">
            <div class="d-flex background-color-blue w-100 position-relative overflow-hidden" style="height: 780px;">
                <div style="width: 50%; height: 780px; position: relative;">
                    <div class="position-absolute"
                        style="border-radius:40px;right:10px;bottom:-100px; width:560px;height:700px;"
                        class="shadow-buy-now-button">
                        <div class="position-relative" id="large-image-container"
                            style="width:560px;height: 460px; background-color: #fff; border-top-left-radius:40px;border-top-right-radius:40px;">
                            <img style="border-top-left-radius:40px;border-top-right-radius: 40px;height:100%;width:100%;border-bottom:1px solid rgba(0,0,0,0.7);"
                            id="largeImage" onclick="changeImage(this.id)"
                            src="../images/products/black-wall/xbox-one-controller/560X460/Front.webp">
                            <div id="myresult" class="img-zoom-result"></div>
                            <div class="ribbon ribbon-top-left"><span>Discount</span></div>
                        </div>
                        <div class="d-flex">
                            <div class="w-100" style="background-color:#2e3192;height:140px;">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7);border-bottom:1px solid rgba(0,0,0,0.7);"
                                    id="thumbImage1" onclick="changeImage(this.id)"
                                    src="../images/products/black-wall/xbox-one-controller/187X140/Back.webp">
                            </div>
                            <div class="w-100" style="background-color:#fff;height:140px;">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); border-bottom:1px solid rgba(0,0,0,0.7);"
                                    id="thumbImage2" onclick="changeImage(this.id)"
                                    src="../images/products/black-wall/xbox-one-controller/187X140/Side.webp">
                            </div>
                            <div class="w-100" style="background-color: #fff;height:140px;">
                                <img style="height:100%;width:100%; border-bottom:1px solid rgba(0,0,0,0.7);" id="thumbImage3" onclick="changeImage(this.id)"
                                    src="../images/products/black-wall/xbox-one-controller/187X140/Zoom.webp"></div>
                        </div>
                    </div>
                </div>
                <div style="width: 50%; height: 780px; position: relative;">
                    <div class="position-absolute" style=" left: 10px; bottom: 0px;">
                        <h2 id="designNameHtml" class="font-poppins-bold m-0 mb-2 text-capitalize text-left text-white"
                            style="font-size: 61px;">black<br>wall</h2>
                        <h4 class="font-poppins-bold m-0 mb-2 text-capitalize text-left text-white"
                            style="font-size: 30px;"><span id="productName">Xbox One Controller </span> Skin</h4>
                        <div class="d-flex" style=" border-radius: 10px;">
                            <div style="background-color: #ff0000;  border: 3px white solid; border-radius: 10px; z-index: 10;"
                                class="d-flex justify-content-center align-items-center shadow-buy-now-button-1">
                                <p class="font-poppins-bold m-0 mb-2 text-capitalize text-left text-white"
                                    style="font-size: 49px; padding: 0px 20px;"><span id="priceDollar" class="discountPrice" style="font-size: 88px;">50</span>.<span id="priceCents">99</span>$</p>
                            </div>
                            <p class="position-relative font-poppins-regular m-0 text-capitalize text-center text-white shadow-buy-now-button-1"
                                style="background-color: #ff0000;font-size: 16px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;writing-mode: tb-rl;
                            transform: rotate(180deg); z-index: 1; padding-right: 20px; left: -20px;">For Next: <span
                                    id="counter-2" class="font-poppins-bold">10:00</span></p>
                        </div>
                        <div style="width: 340px;">
                            <h2 class="font-poppins-bold m-0 mb-4 mt-4 text-capitalize text-center text-white cursor-pointer p-2 ripple" style="font-size: 16px; width: 250px; margin: 15px auto !important; border: 2px solid white; border-radius: 100px;" id="add-to-cart-desktop">Add to Cart</h2>
                            <div id="product-added-to-cart-desktop" class="pb-3" style="display: none;">
                                <p class="font-poppins-bold mx-4 py-2 mt-3 mb-0 text-capitalize text-center text-white"  style="font-size: 16px;" >Product Added To Cart</p>
                                <h2 class="font-poppins-bold m-0 mb-4 mt-0 text-capitalize text-center text-white cursor-pointer p-2 ripple" style="font-size: 16px; width: 250px; margin: auto !important; border: 2px solid white; border-radius: 100px;" id="go-to-cart-desktop" onclick="window.location = 'cart'">Go To Cart</h2>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a data-toggle="modal" data-target="#razorpay" class="razorpay">
                                    <img class="w-100" src="../images/Razorpay_logo.png" style="background-color: white; padding: 7px; border-radius: 20px; width:250px !important; height:35px;margin-bottom:10px;">
                                </a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <!-- <div id="paypal-button-desktop" class=""></div> -->
                            </div>
                            <div class="d-flex justify-content-center w-100 mt-2">
                                <img src="../images/paypal.png" class="mb-2">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Description -->
        <div id="products">
            <div class="w-100 position-relative" style="height: 800px;">
                <div class="position-absolute shadow-buy-now-button-1"
                    style="width:561px;height:50px;left: 677px;transform:translate(-102%, 0);border-bottom-left-radius:40px;border-bottom-right-radius: 40px;">
                </div>
                <div class="position-absolute" style="left: 50%; transform: translate(-100%, 0px); top: 80px;">
                    <h2 class="font-poppins-bold m-0 mb-2 text-capitalize text-left" style="font-size: 55px;">
                        Description</h2>
                    <p id="shortDescription" class="font-poppins-regular m-0 mb-2 text-capitalize text-left"
                        style="font-size: 23px;">Make the Witcher’s hunt even more<br>exciting with the limited
                        edition<br>Geralt of Rivia Xbox One<br>Controller skin. </p>
                    <h2 class="font-poppins-bold m-0 mb-2 pt-3 text-capitalize text-left" style="font-size: 55px;">
                        Specifications</h2>
                    <p id="specification" class="font-poppins-regular m-0 mb-2 text-capitalize text-left"
                        style="font-size: 23px;">-Premium matte decal skin<br>-Easy to put on, easy to take off.
                        <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00
                        x 1.70</p>
                    <h2 class="font-poppins-bold m-0 mb-2 pt-3 text-capitalize text-left" style="font-size: 55px;">
                        Delivery</h2>
                    <p class="font-poppins-regular m-0 mb-2 text-capitalize text-left" style="font-size: 23px;">
                        Standard Delivery Available Currently<br>takes <span class="font-poppins-bold">6-7 Working
                            Days</span></p>
                </div>  
                <!-- Check these out -->
                <div class="position-absolute shadow-buy-now-button-1"
                    style="width: 400px; height:550px; border-radius: 40px; top:80px; left: 50%; transform: translate(40%, 0px);">
                    <div class="position-relative" style="top: 30px;">
                        <h2 class="font-poppins-regular m-0 mb-4 text-uppercase text-center"
                            style="font-size: 44px;">Check these out</h2>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                    <div class="position-relative d-flex justify-content-center align-items-center"
                                        style="width: 163px; height: 250px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                            style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                        </div>
                                        <img src="../images/xbox one controller.png"  class="position-absolute" id="ap-image-desktop-1"
                                            style="z-index: 15; width: 162px; top: 0px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                            style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                            <div class="w-100">
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-desktop-1"
                                                    style="padding-top: 110px; font-size: 12px;">XBOX
                                                    ONE<br>CONTROLLER</h3>
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                    style="font-size: 23px;"><span
                                                        style="font-size: 43px;" id="ap-dollar-desktop-1">24</span>.<span id="ap-cents-desktop-1">99</span>$</h3>
                                                <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                    style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-desktop-1"
                                                    href="">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                    <div class="position-relative d-flex justify-content-center align-items-center"
                                        style="width: 163px; height: 250px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                            style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                        </div>
                                        <img src="../images/xbox one controller.png" class="position-absolute" id="ap-image-desktop-2"
                                            style="z-index: 15; width: 162px; top: 0px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                            style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                            <div class="w-100">
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-desktop-2"
                                                    style="padding-top: 110px; font-size: 12px;">XBOX
                                                    ONE<br>CONTROLLER</h3>
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                    style="font-size: 23px;"><span
                                                        style="font-size: 43px;" id="ap-dollar-desktop-2">24</span>.<span id="ap-cents-desktop-2">99</span>$</h3>
                                                <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                    style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-desktop-2"
                                                    href="">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                    <div class="position-relative d-flex justify-content-center align-items-center"
                                        style="width: 163px; height: 250px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                            style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                        </div>
                                        <img src="../images/xbox one controller.png" class="position-absolute" id="ap-image-desktop-3"
                                            style="z-index: 15; width: 162px; top: 0px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                            style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                            <div class="w-100">
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-desktop-3"
                                                    style="padding-top: 110px; font-size: 12px;">XBOX
                                                    ONE<br>CONTROLLER</h3>
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                    style="font-size: 23px;"><span
                                                        style="font-size: 43px;" id="ap-dollar-desktop-3">24</span>.<span id="ap-cents-desktop-3">99</span>$</h3>
                                                <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                    style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-desktop-3"
                                                    href="">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                    <div class="position-relative d-flex justify-content-center align-items-center"
                                        style="width: 163px; height: 250px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                            style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                        </div>
                                        <img src="../images/xbox one controller.png" class="position-absolute" id="ap-image-desktop-4"
                                            style="z-index: 15; width: 162px; top: 0px;">
                                        <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                            style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                            <div class="w-100">
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-desktop-4"
                                                    style="padding-top: 110px; font-size: 12px;">XBOX
                                                    ONE<br>CONTROLLER</h3>
                                                <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                    style="font-size: 23px;"><span
                                                        style="font-size: 43px;" id="ap-dollar-desktop-4">24</span>.<span id="ap-cents-desktop-4">99</span>$</h3>
                                                <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                    style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-desktop-4"
                                                    href="">Buy Now</a>
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
        <!-- about -->
        <div id="about" style="overflow: hidden;">
            <div class="position-relative">
                <div style="height: 500px; position: relative;"
                    class="background-color-light-yellow shadow-buy-now-button-1">
                    <h2 class="font-poppins-regular m-0 text-center text-uppercase d-flex justify-content-center"
                        style="font-size: 193px; line-height: 175px;">ABOUT</h2>
                    <h2 class="font-poppins-regular m-0 text-center text-uppercase d-flex justify-content-center"
                        style="font-size: 47px; line-height: 47px;">WHAT ABOUT THE SKINS?</h2>
                    <div class="position-absolute bg-white h-center"
                        style="width: 150px; height: 270px; bottom: -5px;"></div>
                </div>
                <div style="height: 100px; position: relative;">
                    <h4 class="font-poppins-regular text-center text-uppercase position-absolute"
                        style="font-size: 71px; line-height: 52px; top: 0px;opacity: 0.42; left: -5px;letter-spacing: -1px;">
                        unique skins for</h4>
                    <h4 class="font-poppins-regular text-center text-uppercase position-absolute"
                        style="font-size: 71px; line-height: 52px; top: 0px;opacity: 0.42; right: -5px;letter-spacing: -1px;">
                        your own story</h4>
                </div>
                <div class="position-absolute h-center" style="width: 850px; bottom: 0px;">
                    <div class="container-fluid p-0">
                        <div class="row pt-4">
                            <div class="col-3 p-0">
                                <div class="d-flex pt-4">
                                    <div style="width: 75%;">
                                        <h4 class="font-poppins-bold m-0 text-right text-uppercase"
                                            style="font-size: 19px;">easy to<br>apply</h4>
                                        <p class="font-poppins-regular m-0 text-right text-uppercase pt-1"
                                            style="font-size: 13px; line-height: 13px;">Bubble Free
                                            easy<br>Application</p>
                                    </div>
                                    <div style="width: 25%; padding-left:5px;">
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center"
                                            style="border-radius: 50%; border: 2px black solid; width: 50px; height: 50px;">
                                            <picture>
                                                <source srcset="../images/easy_to_apply.webp" type="image/webp">
                                                <source srcset="../images/easy_to_apply.png" type="image/png">
                                                    <img src="../images/easy_to_apply.png"> 
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex pt-4">
                                    <div style="width: 75%;">
                                        <h4 class="font-poppins-bold m-0 text-right text-uppercase"
                                            style="font-size: 19px;">Scratch<br>protection</h4>
                                        <p class="font-poppins-regular m-0 text-right text-uppercase pt-1"
                                            style="font-size: 13px; line-height: 13px;">Keeps your device<br>looking
                                            new</p>
                                    </div>
                                    <div style="width: 25%; padding-left:5px;">
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center"
                                            style="border-radius: 50%; border: 2px black solid; width: 50px; height: 50px;">
                                            <picture>
                                                <source srcset="../images/scratch_protection.webp" type="image/webp">
                                                <source srcset="../images/scratch_protection.png" type="image/png">
                                                    <img src="../images/scratch_protection.png"> 
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="position-relative" style="width: 410px; height: 295px;"
                                    id="about-images">
                                    <img src="../images/Controller_2.png" class="w-100 position-absolute">
                                    <img src="../images/Controller_10.png" class="w-100 position-absolute"
                                        style="display: none;">
                                    <img src="../images/Controller_16.png" class="w-100 position-absolute"
                                        style="display: none;">
                                </div>
                                <div class="row">
                                    <div class="col-2 position-relative">
                                        <img src="../images/arrowhead-black.png" class="position-absolute"
                                            style="right: 0px; top: 50%; transform: translate(0, -50%);"
                                            id="about-left">
                                    </div>
                                    <div class="col-8">
                                        <div class="position-relative" style="width: 263px; height: 32px;"
                                            id="about-heading">
                                            <h1 class="font-poppins-bold text-center position-absolute w-100"
                                                style="font-size: 20px;">Iron Man</h1>
                                            <h1 class="font-poppins-bold text-center position-absolute w-100"
                                                style="font-size: 20px;display: none;">Call Of Duty</h1>
                                            <h1 class="font-poppins-bold text-center position-absolute w-100"
                                                style="font-size: 20px;display: none;">Naruto Shippuden</h1>
                                        </div>
                                        <div class="position-relative" style="width: 263px; height: 32px;"
                                            id="about-author">
                                            <h2 class="font-poppins-bold text-center position-absolute w-100"
                                                style="font-size: 13px;">-By Richard Eveland</h2>
                                            <h2 class="font-poppins-bold text-center position-absolute w-100"
                                                style="font-size: 13px;display: none;">-By Richard Eveland</h2>
                                            <h2 class="font-poppins-bold text-center position-absolute w-100"
                                                style="font-size: 13px; display: none;">-By Yoshie Akina</h2>
                                        </div>
                                    </div>
                                    <div class="col-2 position-relative">

                                        <img src="../images/arrowhead-black.png" class="position-absolute"
                                            style="transform: rotate(180deg) translate(0, -50%); left: 0px;"
                                            id="about-right">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-0">
                                <div class="d-flex pt-4">
                                    <div style="width: 25%; padding-right:5px;">
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center"
                                            style="border-radius: 50%; border: 2px black solid; width: 50px; height: 50px;">
                                            <picture>
                                                <source srcset="../images/precision_cut.webp" type="image/webp">
                                                <source srcset="../images/precision_cut.png" type="image/png">
                                                    <img src="../images/precision_cut.png"> 
                                            </picture>
                                        </div>
                                    </div>
                                    <div style="width: 75%;">
                                        <h4 class="font-poppins-bold m-0 text-left text-uppercase"
                                            style="font-size: 19px;">Precision<br>cut</h4>
                                        <p class="font-poppins-regular m-0 text-left text-uppercase pt-1"
                                            style="font-size: 13px; line-height: 13px;">Engineered to fit<br>your
                                            Device</p>
                                    </div>
                                </div>
                                <div class="d-flex pt-4">
                                    <div style="width: 25%; padding-right:5px;">
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center"
                                            style="border-radius: 50%; border: 2px black solid; width: 50px; height: 50px;">
                                            <picture>
                                                <source srcset="../images/premium_vinyl.webp" type="image/webp">
                                                <source srcset="../images/premium_vinyl.png" type="image/png">
                                                    <img src="../images/premium_vinyl.png"> 
                                            </picture>
                                        </div>
                                    </div>
                                    <div style="width: 75%;">
                                        <h4 class="font-poppins-bold m-0 text-left text-uppercase"
                                            style="font-size: 19px;">Premium<br>vinyl</h4>
                                        <p class="font-poppins-regular m-0 text-left text-uppercase pt-1"
                                            style="font-size: 13px; line-height: 13px;">An extra premium<br>smooth
                                            finish </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- products -->
        <div id="products-desktop-1"></div>
                
        <!-- our designs -->
        <div id="designs" class="overflow-hidden">
            <div class="position-relative">
                <h2 class="font-poppins-regular m-0 pt-5 text-center text-uppercase background-color-blue text-white" style="font-size: 130px; line-height: 90%;" id="our-designs">our designs</h2>
                <h4 class="font-poppins-regular m-0 text-center text-uppercase background-color-blue text-white" style="font-size: 50px;">choose your identity</h4>
                <div class="background-color-blue w-100" style="height: 110px; border-bottom-right-radius: 60px; border-bottom-left-radius: 60px;">
                </div>
                <div style="width: 850px; height: 1200px;margin: 0 auto; top: -100px;" class="position-relative">
                    <div class="position-absolute" style="z-index: 15;">
                        <div class="container-fluid p-0 d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=funky-skulls">
                                            <picture>
                                                <source srcset="../images/designs/Funky-Skulls.webp" type="image/webp">
                                                <source srcset="../images/designs/Funky-Skulls.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Funky-Skulls.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Funky Skulls</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Robert W. Chambers</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=iron-man">
                                            <picture>
                                                <source srcset="../images/designs/Iron-Man.webp" type="image/webp">
                                                <source srcset="../images/designs/Iron-Man.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Iron-Man.jpg">
                                            </picture>
                                            
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Iron Man</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Richard Eveland</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=gears-of-war">
                                            <picture>
                                                <source srcset="../images/designs/Gears-of-War.webp" type="image/webp">
                                                <source srcset="../images/designs/Gears-of-War.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Gears-of-War.jpg">
                                            </picture>
                                            
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Gears Of War</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-David E. Hunt</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/designed-by-you">
                                            <picture>
                                                <source srcset="../images/designs/Custom.webp" type="image/webp">
                                                <source srcset="../images/designs/Custom.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Custom.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Designed By You</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-You</p>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd -->
                        <div class="container-fluid p-0 d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=dragon-ball-z">
                                            <picture>
                                                <source srcset="../images/designs/Dragon-Ball-Z.webp" type="image/webp">
                                                <source srcset="../images/designs/Dragon-Ball-Z.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Dragon-Ball-Z.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Dragon Ball Z</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Edward Niro</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=funky-ghost">
                                            <picture>
                                                <source srcset="../images/designs/Funky-Ghost.webp" type="image/webp">
                                                <source srcset="../images/designs/Funky-Ghost.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Funky-Ghost.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Funky Ghost</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Tsujita Masujiro</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=doodle-lines">
                                            <picture>
                                                <source srcset="../images/designs/doodle-lines.webp" type="image/webp">
                                                <source srcset="../images/designs/doodle-lines.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/doodle-lines.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Doodle Lines</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Robert W. Chambers</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=game-freak">
                                            <picture>
                                                <source srcset="../images/designs/Game-Freak.webp" type="image/webp">
                                                <source srcset="../images/designs/Game-Freak.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Game-Freak.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Game Freak</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-David E. Hunt</p>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd -->
                        <div class="container-fluid p-0 d-flex justify-content-center align-items-center">
                            <div class="row">
                                
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=call-of-duty">
                                            <picture>
                                                <source srcset="../images/designs/call-of-duty.webp" type="image/webp">
                                                <source srcset="../images/designs/call-of-duty.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/call-of-duty.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Call Of Duty</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Richard Eveland</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=blue-kaleidoscope">
                                            <picture>
                                                <source srcset="../images/designs/blue-kaleidoscope.webp" type="image/webp">
                                                <source srcset="../images/designs/blue-kaleidoscope.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/blue-kaleidoscope.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Blue Kaleidoscope</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Tsujita Masujiro</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=naruto-and-sasuke">
                                            <picture>
                                                <source srcset="../images/designs/naruto-and-sasuke.webp" type="image/webp">
                                                <source srcset="../images/designs/naruto-and-sasuke.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/naruto-and-sasuke.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Naruto And Sasuke</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Yoshie Akina</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=naruto-shippuden">
                                            <picture>
                                                <source srcset="../images/designs/Naruto-Shippuden.webp" type="image/webp">
                                                <source srcset="../images/designs/Naruto-Shippuden.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Naruto-Shippuden.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Naruto Shippuden</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Yoshie Akina</p>
                                </div>
                            </div>
                        </div>
                        <!-- 4th -->
                        <div class="container-fluid p-0 pb-4 d-flex justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=patriot">
                                            <picture>
                                                <source srcset="../images/designs/Patriot.webp" type="image/webp">
                                                <source srcset="../images/designs/Patriot.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Patriot.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Patriot</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-David E. Hunt</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=skull-kaleidoscope">
                                            <picture>
                                                <source srcset="../images/designs/Skull-Kaleidoscope.webp" type="image/webp">
                                                <source srcset="../images/designs/Skull-Kaleidoscope.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Skull-Kaleidoscope.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Skull Kaleidoscope</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Edward Niro</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=tokyo-ghoul">
                                            <picture>
                                                <source srcset="../images/designs/Tokyo-Ghoul.webp" type="image/webp">
                                                <source srcset="../images/designs/Tokyo-Ghoul.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/Tokyo-Ghoul.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">Tokyo Ghoul</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Tsujita Masujiro</p>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="bg-white" style="border-radius: 50%; width: 200px; height: 200px; border: 1px #2e3192 solid;">
                                        <a href="../products/product-page?designName=world-war">
                                            <picture>
                                                <source srcset="../images/designs/World-War.webp" type="image/webp">
                                                <source srcset="../images/designs/World-War.jpg" type="image/jpeg">
                                                <img style="border-radius:50%;" src="../images/designs/World-War.jpg">
                                            </picture>
                                        </a>
                                    </div>
                                    <h2 class="font-poppins-bold m-0 pt-3 text-center" style="font-size: 22px; line-height: 90%;">World War</h2>
                                    <p class="font-poppins-regular m-0 py-3 text-center pb-4" style="font-size: 22px; line-height: 90%;">-Edward Niro</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="position-absolute d-flex" style="left: -90px; bottom: -20px; height: 100%;">
                        <h2 class="d-flex font-poppins-bold m-0 text-center text-uppercase color-blue" style="font-size: 100px; writing-mode: tb-rl; transform: rotate(180deg);letter-spacing: -2px;">Choose Your Identity</h2>
                    </div>
                    <div class="position-absolute d-flex" style="left: 50%; bottom: 130px;">
                        <h2 class="d-flex font-poppins-bold m-0 text-center text-uppercase color-blue" style="font-size: 156px;">Choose</h2>
                    </div>
                    <div class="position-absolute d-flex" style="right: -70px; bottom: 400px;">
                        <h2 class="d-flex font-poppins-bold m-0 text-center text-uppercase color-blue" style="font-size: 158px; writing-mode: tb-rl; transform: rotate(180deg);">Identity</h2>
                    </div>
                    <div class="position-absolute shadow-buy-now-button-1 px-2 background-color-yellow" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; top: 100px; right: -200px;">
                        <p class="font-poppins-regular m-0 text-center text-uppercase pt-5" style="font-size: 32px; color: #ff0000;">Coupon<br>Code<br>Valid Till</p>
                        <p class="font-poppins-bold m-0 text-center text-uppercase pb-4" style="font-size: 64px; color: #ff0000; width: 190px;" id="counter-5">10:00</p>
                    </div> 
                </div>
                
            </div>
            
        </div>

        <!-- how to install mobile -->
        <div id="how-to-install-desktop-1"></div>

        <!-- footer -->
        <div id="footer-desktop-1"></div>

    </div>
    <!-- mobile view -->

    <div class="d-lg-none">
        <!-- <div id="header-mobile"></div>

    <div id="footer-mobile"></div> -->
    <header>
        <div style="background-color: #2e3192; z-index: 150;" class="fixed-top">
            <div class="top-bar-desktop d-flex justify-content-center align-items-center" style="height: 40px !important;">
                <h3 class="m-0 font-poppins-light text-center" style="font-size: 12px;">An Exclusive Coupon of <span class="font-weight-bold">5$</span> Has been Applied Valid Until<br> <span class="font-poppins-bold" id="counter-1-mobile" style="font-size: 20px;">10:00</span></h3>
            </div>
            <nav id="navbar-example2" class="navbar navbar-dark w-100 justify-content-center position-relative" style="background-color: #2e3192;">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../icons/yellow_logo.svg" style="width: 30px; margin-right: 2px;">
                    <a class="navbar-brand font-poppins-bold" style="font-size: 23px; color:#ffea00;" href="/">The Top Controller</a>
                    
                </div>
                <div style="position: absolute; z-index: 10; left:10px; top: 0px; margin-top: 20px; z-index:15 !important;" id="open-drawer">
                    <hr style="width: 30px; height: 4px; background-color: white;border-radius: 100px;  margin: 0px;">
                    <hr style="width: 30px; height: 4px; background-color: white; margin-top: 3px; margin-bottom: 0px; border-radius: 100px;">
                    <hr style="width: 18px; height: 4px; background-color: white; margin-top: 3px; margin-bottom: 0px; border-radius: 100px; margin-left: 0px;">
                    <div class="position-absolute text-center font-poppins-bold" style="background-color: #ff0000; width: 20px; font-size: 12px; border-radius: 50%; height: 20px; color: white; right: -15px; top: -10px;" id="drawer-message-mobile">1</div>
                    
                </div>

                
                <div class="text-center position-absolute font-poppins-bold w-100 justify-content-center align-items-center color-yellow" style="background-color: #ff0000; font-size: 18px; height: 100%; top: 0px; left: -110%;" id="add-to-cart-message-mobile">Product Added To Cart</div>
                
            </nav>
            <div class="position-fixed h-100 w-100" style=" opacity: 1; backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); z-index: 16; display: none;" id="drawer">
                <div class="container h-100 w-100 pr-0">
                    <div class="row h-100 w-100 mr-0 position-absolute">
                        <div class="col-10 position-relative background-color-blue">
                            <!-- <div class="position-absolute w-100" style="padding-left: 15px;top:30%;"> -->
                                <ul class="nav nav-pills" style="display: block; text-align:center; position: absolute; left: 50%; top: 35%; transform: translate(-50%,-50%);" onclick="$('#drawer').css('display','none');">
                                    <li class="nav-item">
                                        <a class="nav-link font-poppins-bold" style="font-size: 16px; color: #ffea00;" onclick="window.location = '/'">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-poppins-bold" style="font-size: 16px; color: #ffea00;" onclick="window.location = '/#services'" >Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-poppins-bold" style="font-size: 16px; color: #ffea00;" onclick="window.location = '/#about'">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-poppins-bold" style="font-size: 16px; color: #ffea00;" href="#designs-mobile">Designs</a>
                                    </li>
                                    <li class="nav-item d-flex justify-content-center align-items-center position-relative">
                                        <a class="cart-button nav-link font-poppins-bold text-uppercase shadow-buy-now-button" style="font-size: 16px; background-color: #ffea00; color: #fc1e1e; border-radius: 100px; padding-top: 5px; padding-bottom: 5px;" href="../products/cart">Cart
                                            <picture>
                                                <source srcset="../images/cartimage.webp" type="image/webp">
                                                <source srcset="../images/cartimage.png" type="image/png">
                                                <img src="../images/cartimage.png" style="width: 15px; margin-left: 2px;">
                                            </picture>
                                        </a>
                                        <div class="position-absolute d-flex justify-content-center align-items-center font-poppins-bold" style="background-color: #ff0000; width: 20px; font-size: 12px; border-radius: 50%; height: 20px; color: white; right: -5px; top: -3px;" id="cart-message-mobile">1</div>
                                    </li>                          
                                </ul>
                            <!-- </div> -->
                            <div class="position-absolute w-100" style="margin-left: -15px;top:70%;" onclick="$('#drawer').css('display','none');">
                                <p class="footer-text font-weight-light text-center font-poppins-regular" style="font-size: 16px;margin-bottom: 0px; color: #ffea00;" onclick="window.location = '../pages/contact-us'">CONTACT US</p>
                                <p class="footer-text font-weight-light text-center font-poppins-regular" style="font-size: 16px;margin-bottom: 0px; color: #ffea00;" onclick="window.location = '../pages/installation'">INSTALLATION</p>
                            </div>
                            
                        </div>
                        <div class="col-2 d-flex justify-content-end pt-5 pl-0" id="cross">
                            <div id="mobile-cross" class="background-color-blue">
                                <p class="m-0">X</p>
                            </div>
                        </div>
                        
                        
                    </div>
                    
            
                </div>
                
            </div>
        </div>      
    </header>
        

        <!-- top silder and its elements -->
        <div id="header-slider-mobile">
            <div class="d-flex background-color-blue w-100 position-relative overflow-hidden" style="height: 840px;">
                <div class="position-absolute font-poppins-bold text-white" id="designed-to-mobile">Designs</div>
                <div style="width: 100%; height: 780px; position: relative;">
                    <div class="position-absolute h-center shadow-buy-now-button" 
                        style="border-radius:40px;right:10px;top: 115px; width:300px; height:700px;">
                        <div style="width:100%; background-color: #fff; border-top-left-radius:20px;border-top-right-radius:20px;">
                            <img style="border-top-left-radius:20px;border-top-right-radius: 20px;height:100%;width:100%;border-bottom:1px solid rgba(0,0,0,0.7);" id="largeImage-mobile" onclick="changeImage(this.id)" src="../images/products/black-wall/xbox-one-controller/560X460/Front.webp">
                            <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); display: none;"  src="../images/products/black-wall/xbox-one-controller/187X140/Front.webp">
                                
                        </div>
                        <div class="d-flex">
                            <div class="w-100" style="background-color:#2e3192;">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); border-bottom:1px solid rgba(0,0,0,0.7);" id="thumbImage1-mobile" onclick="changeImage(this.id)" src="../images/products/black-wall/xbox-one-controller/187X140/Back.webp">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); display: none;"  src="../images/products/black-wall/xbox-one-controller/560X460/Back.webp">
                            </div>
                            <div class="w-100" style="background-color:#fff; ">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); border-bottom:1px solid rgba(0,0,0,0.7);" id="thumbImage2-mobile" onclick="changeImage(this.id)" src="../images/products/black-wall/xbox-one-controller/187X140/Side.webp">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); display: none;"  src="../images/products/black-wall/xbox-one-controller/560X460/Side.webp">
                            </div>
                            <div class="w-100" style="background-color: #fff; ">
                                <img style="height:100%;width:100%; border-bottom:1px solid rgba(0,0,0,0.7);" id="thumbImage3-mobile" onclick="changeImage(this.id)" src="../images/products/black-wall/xbox-one-controller/187X140/Zoom.webp">
                                <img style="height:100%;width:100%;border-right:1px solid rgba(0,0,0,0.7); display: none;"  src="../images/products/black-wall/xbox-one-controller/560X460/Zoom.webp">
                            
                            </div>
                        </div>

                        <div style="width: 100%; height: 780px; position: relative;" class="bg-white">
                            <h2 id="designNameHtml-mobile" class="font-poppins-bold m-0 text-capitalize text-center pt-2" style="font-size: 30px;">black<br>wall</h2>
                                <h4 class="font-poppins-bold m-0 mb-2 text-capitalize text-center " style="font-size: 15px;"><span id="productName-mobile">Xbox One Controller </span> Skin</h4>
                                <div class="d-flex justify-content-center align-items-center style=" border-radius: 10px;">
                                    <div style="background-color: #ff0000;  border: 3px white solid; border-radius: 10px; z-index: 10;"
                                        class="d-flex justify-content-center align-items-center shadow-buy-now-button-1">
                                        <p class="font-poppins-bold m-0 mb-2 text-capitalize text-center text-white" style="font-size: 25px; padding: 0px 20px;"><span id="priceDollar-mobile" class="discountPrice" style="font-size: 44px;">50</span>.<span id="priceCents-mobile">99</span>$</p>
                                    </div>
                                    <p class="position-relative font-poppins-regular m-0 text-capitalize text-center shadow-buy-now-button-1 text-white p-1" style="background-color: #ff0000;font-size: 9px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;writing-mode: tb-rl; transform: rotate(180deg); z-index: 1; left: -13px; padding-right: 15px !important;">For Next: <span id="counter-2-mobile" class="font-poppins-bold">10:00</span></p>
                                </div>
                                <div style="width: 100%;">
                                    
                                    <h2 class="font-poppins-bold mx-4 py-2 my-3 text-capitalize text-center background-color-blue text-white shadow-buy-now-button  ripple"  style="font-size: 16px; border-radius: 100px;" id="add-to-cart-mobile">Add to Cart</h2>
                                    <div id="product-added-to-cart-mobile" style="display: none;">
                                        <p class="font-poppins-bold mx-4 py-1 mt-0 mb-0 text-capitalize text-center"  style="font-size: 16px;" >Product Added To Cart</p>
                                        <h2 class="font-poppins-bold mx-4 py-2 mb-2 text-capitalize text-center background-color-blue text-white shadow-buy-now-button ripple"  style="font-size: 16px; border-radius: 100px;" id="go-to-cart-mobile" onclick="window.location = 'cart'">Go To Cart</h2>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <a data-toggle="modal" data-target="#razorpay" class="razorpay">
                                            <img class="w-100" src="../images/Razorpay_logo.png" style="background-color: white; padding: 7px; border-radius: 20px; width:250px !important;height:35px;margin-bottom:10px;border:2px solid #092855">
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <!-- <div id="paypal-button-mobile" class=""></div> -->
                                    </div>
                                    <div class="w-100 d-flex justify-content-center mt-2">
                                        <img src="../images/paypal.png" class="mb-2" style="width: 60%; height: 60%">
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>

        <!-- Description -->
        <div id="products-mobile">
            <div class="w-100 position-relative">
                <div class="position-absolute shadow-buy-now-button-1 h-center"
                    style="width:300px; height:20px; border-bottom-left-radius:20px;border-bottom-right-radius: 20px;">
                </div>
                <div class="text-center pt-5">
                    <h2 class="font-poppins-bold m-0 mb-2 text-capitalize text-center" style="font-size: 25px;">
                        Description</h2>
                    <p id="shortDescription-mobile" class="font-poppins-regular m-0 mb-2 text-capitalize text-center"
                        style="font-size: 11px;">Make the Witcher’s hunt even more<br>exciting with the limited
                        edition<br>Geralt of Rivia Xbox One<br>Controller skin. </p>
                    <h2 class="font-poppins-bold m-0 mb-2 pt-1 text-capitalize text-center" style="font-size: 25px;">
                        Specifications</h2>
                    <p id="specification-mobile" class="font-poppins-regular m-0 mb-2 text-capitalize text-center"
                        style="font-size: 11px;">-Premium matte decal skin<br>-Easy to put on, easy to take off.
                        <br>-Residue will be non-existent on your<br>Xbox One Controller<br>-DIMENSIONS: 6.00 x 4.00
                        x 1.70</p>
                    <h2 class="font-poppins-bold m-0 mb-2 pt-1 text-capitalize text-center" style="font-size: 25px;">
                        Delivery</h2>
                    <p class="font-poppins-regular m-0 mb-2 text-capitalize text-center" style="font-size: 11px;">
                        Standard Delivery Available Currently<br>takes <span class="font-poppins-bold">6-7 Working
                            Days</span></p>
                </div>
                <!-- Check these out -->
                <div class="mt-4" >
                    <h2 class="font-poppins-regular m-0 mb-4 text-uppercase text-center"
                        style="font-size: 35px;">Check these out</h2>
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                <div class="position-relative d-flex justify-content-center align-items-center"
                                    style="width: 163px; height: 250px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                        style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                    </div>
                                    <img src="../images/xbox one controller.png" class="position-absolute" id="ap-image-mobile-1"
                                        style="z-index: 15; width: 162px; top: 0px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                        style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                        <div class="w-100">
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-mobile-1"
                                                style="padding-top: 110px; font-size: 12px;">XBOX
                                                ONE<br>CONTROLLER</h3>
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                style="font-size: 23px;"><span
                                                    style="font-size: 43px;" id="ap-dollar-mobile-1">24</span>.<span id="ap-cents-mobile-1">99</span>$</h3>
                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-mobile-1"
                                                href="">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                <div class="position-relative d-flex justify-content-center align-items-center"
                                    style="width: 163px; height: 250px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                        style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                    </div>
                                    <img src="../images/xbox one controller.png"  id="ap-image-mobile-2" class="position-absolute"
                                        style="z-index: 15; width: 162px; top: 0px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                        style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                        <div class="w-100">
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-mobile-2"
                                                style="padding-top: 110px; font-size: 12px;">XBOX
                                                ONE<br>CONTROLLER</h3>
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                style="font-size: 23px;"><span
                                                    style="font-size: 43px;" id="ap-dollar-mobile-2">24</span>.<span id="ap-cents-mobile-2">99</span>$</h3>
                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-mobile-2"
                                                href="">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                <div class="position-relative d-flex justify-content-center align-items-center"
                                    style="width: 163px; height: 250px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                        style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                    </div>
                                    <img src="../images/xbox one controller.png" class="position-absolute" id="ap-image-mobile-3"
                                        style="z-index: 15; width: 162px; top: 0px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                        style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                        <div class="w-100">
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-mobile-3"
                                                style="padding-top: 110px; font-size: 12px;">XBOX
                                                ONE<br>CONTROLLER</h3>
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                style="font-size: 23px;"><span
                                                    style="font-size: 43px;" id="ap-dollar-mobile-3">24</span>.<span id="ap-cents-mobile-3">99</span>$</h3>
                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-mobile-3"
                                                href="">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 px-1 d-flex justify-content-center align-items-center">
                                <div class="position-relative d-flex justify-content-center align-items-center"
                                    style="width: 163px; height: 250px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center"
                                        style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;">
                                    </div>
                                    <img src="../images/xbox one controller.png" class="position-absolute" id="ap-image-mobile-4"
                                        style="z-index: 15; width: 162px; top: 0px;">
                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center "
                                        style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                        <div class="w-100">
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" id="ap-name-mobile-4"
                                                style="padding-top: 110px; font-size: 12px;">XBOX
                                                ONE<br>CONTROLLER</h3>
                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase"
                                                style="font-size: 23px;"><span
                                                    style="font-size: 43px;" id="ap-dollar-mobile-4">24</span>.<span id="ap-cents-mobile-4">99</span>$</h3>
                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center"
                                                style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="ap-button-mobile-4"
                                                href="">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- about -->
        <div id="about-mobile" style="overflow: hidden;">
            <div class="position-relative">
                <div style="height:676px; position: relative;" class="background-color-light-yellow shadow-buy-now-button-1">
                    <h2 class="font-poppins-regular m-0 text-center text-uppercase d-flex justify-content-center pt-2" style="font-size: 90px; line-height: 80px;">ABOUT</h2>
                    <h2 class="font-poppins-regular m-0 text-center text-uppercase d-flex justify-content-center" style="font-size: 23px;">WHAT ABOUT THE SKINS?</h2>
                    <div class="position-absolute bg-white h-center" style="width: 100px; height: 138px; bottom: -5px;"></div>
                </div>
                <div style="height: 75px; position: relative;">
                    <h4 class="font-poppins-regular text-center text-uppercase position-absolute" style="font-size: 20px;top: -5px;opacity: 0.42; left: -5px;letter-spacing: -1px;">unique skins for</h4>
                    <h4 class="font-poppins-regular text-center text-uppercase position-absolute" style="font-size: 20px; top: -5px;opacity: 0.42; right: -5px;letter-spacing: -1px;">your own story</h4>
                    <div class="row w-50 pt-3" style="margin:0px auto;">
                        <div class="col-2 position-relative">
                            <img src="../images/arrowhead-black.png" class="position-absolute" style="right: 0px; top: 50%; transform: translate(0, -50%); width: 18px;" id="about-left-mobile">
                        </div>
                        <div class="col-8 d-flex justify-content-center align-items-center px-1">
                            <div class="w-100">
                                <div class="position-relative" style=" height: 22px;" id="about-heading-mobile">
                                    <h1 class="font-poppins-bold text-center position-absolute w-100 m-0" style="font-size: 15px;">Iron Man</h1>
                                    <h1 class="font-poppins-bold text-center position-absolute w-100 m-0" style="font-size: 15px;display: none;">Call Of Duty</h1>
                                    <h1 class="font-poppins-bold text-center position-absolute w-100 m-0" style="font-size: 11px;display: none;">Naruto Shippuden</h1>
                                </div>
                                <div class="position-relative" style="height: 22px;" id="about-author-mobile">
                                    <h2 class="font-poppins-bold text-center position-absolute w-100" style="font-size: 10px;">-By Richard Eveland</h2>
                                    <h2 class="font-poppins-bold text-center position-absolute w-100" style="font-size: 10px;display: none;">-By Richard Eveland</h2>
                                    <h2 class="font-poppins-bold text-center position-absolute w-100" style="font-size: 10px; display: none;">-By Yoshie Akina</h2>
                                </div>  
                            </div>
                                                                  
                        </div>
                        <div class="col-2 position-relative">                                        
                            <img src="../images/arrowhead-black.png" class="position-absolute" style="transform: rotate(180deg) translate(0, -50%); left: 0px; width: 18px;" id="about-right-mobile">                                                    
                        </div>
                    </div>
                </div>
                <div class="position-absolute h-center" style="width: 100%; top: 98px;">
                    <div class="container-fluid" style="display:flex;justify-content:center;">
                        <div class="container pt-4">
                            <div style="width:100%;">
                                <div class="d-flex pt-4" style="justify-content:center;">
                                    <div>
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center" style="border-radius: 50%;border: 1px black solid;width: 40px;height: 40px;">
                                            <picture>
                                                <source srcset="../images/easy_to_apply.webp" type="image/webp">
                                                <source srcset="../images/easy_to_apply.png" type="image/png">
                                                <img src="../images/easy_to_apply.png" style="width: 26px;"> 
                                            </picture>
                                        </div>                                    
                                    </div>
                                    <div style="padding-left:10px;">
                                        <h4 class="font-poppins-bold m-0 text-left text-uppercase" style="font-size:22px;line-height: 19px;">easy to<br>apply</h4>
                                        <p class="font-poppins-regular m-0 text-left text-uppercase" style="font-size:14px;line-height:18px;">Bubble Free easy<br>Application</p>
                                    </div>                                    
                                </div>
                            </div>
                            <div style="width:100%;">
                                <div class="d-flex pt-4" style="justify-content:center;">
                                    <div>
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center" style="border-radius: 50%;border: 1px black solid;width: 40px;height: 40px;">
                                            <picture>
                                                <source srcset="../images/scratch_protection.webp" type="image/webp">
                                                <source srcset="../images/scratch_protection.png" type="image/png">
                                                <img src="../images/scratch_protection.png" style="width: 26px;"> 
                                            </picture>
                                        </div>                                    
                                    </div>
                                    <div style="padding-left:10px;">
                                        <h4 class="font-poppins-bold m-0 text-left text-uppercase" style="font-size:22px;line-height:19px;">Scratch<br>protection</h4>
                                        <p class="font-poppins-regular m-0 text-left text-uppercase" style="font-size:14px;line-height:18px;">Keeps your device<br>looking new</p>
                                    </div>                                    
                                </div>
                            </div> 
                            <div style="width:100%;">
                                <div class="d-flex pt-4" style="justify-content:center;">
                                    <div>
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center" style="border-radius: 50%;border: 1px black solid;width: 40px;height: 40px;">
                                            <picture>
                                                <source srcset="../images/precision_cut.webp" type="image/webp">
                                                <source srcset="../images/precision_cut.png" type="image/png">
                                                <img src="../images/precision_cut.png" style="width:26px;"> 
                                            </picture>
                                        </div>                                    
                                    </div>
                                    <div style="padding-left:10px;">
                                        <h4 class="font-poppins-bold m-0 text-left text-uppercase" style="font-size:22px;line-height:19px;">Precision<br>cut</h4>
                                        <p class="font-poppins-regular m-0 text-left text-uppercase" style="font-size:14px;line-height:18px;">Engineered to fit<br>your Device</p>
                                    </div>                                    
                                </div>
                                <div class="d-flex pt-4" style="justify-content:center;">
                                    <div>
                                        <div class="shadow-buy-now-button d-flex justify-content-center align-items-center" style="border-radius: 50%;border: 1px black solid;width: 40px;height: 40px;">
                                            <picture>
                                                <source srcset="../images/premium_vinyl.webp" type="image/webp">
                                                <source srcset="../images/premium_vinyl.png" type="image/png">
                                                    <img src="../images/premium_vinyl.png" style="width: 26px;">  
                                            </picture>
                                        </div>                                    
                                    </div>
                                    <div style="padding-left:10px;">
                                        <h4 class="font-poppins-bold m-0 text-left text-uppercase" style="font-size:22px;line-height:19px;">Premium<br>vinyl</h4>
                                        <p class="font-poppins-regular m-0 text-left text-uppercase" style="font-size:14px;line-height:18px;">An extra premium<br>smooth finish </p>
                                    </div>                                    
                                </div>
                            </div>      
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="position-absolute h-center" style="height: 142px;
                        width: 210px;" id="about-images-mobile">
                            <img src="../images/Controller_2.png" class="w-100 position-absolute" >
                            <img src="../images/Controller_10.png" class="w-100 position-absolute"  style="display: none;">
                            <img src="../images/Controller_16.png" class="w-100 position-absolute" style="display: none;">
                        </div>
                        
                    </div>
                </div>
            </div>            
        </div>
         
        <!-- products -->
        <div id="products-mobile-1"></div>
                     
        <!-- our designs -->
        <div id="designs-mobile-1" class="overflow-hidden"></div>
            
        <!-- how to install mobile -->
        <div id="how-to-install-mobile-1"></div>

        <!-- footer -->
        <div id="footer-mobile-1"></div>

    </div>

    <!-- razorpay popup -->
    <div class="modal fade" id="razorpay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:920px;">
            <div class="modal-content">
                <div class="text-center">
                    <div style="margin-top:37px;">
                        <button type="button" class="close closeButton" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div style="margin-top:10px;">
                        <h2 class="font-poppins-bold">BILLING DETAILS</h2>
                    </div>
                </div>
                <div id="order-success" style="border-radius:10px;top:5px;display:none;" class="bg-white shadow-buy-now-button-1 position-relative">
                    <h2 class="font-poppins-bold m-0 mb-2 text-capitalize text-center" style="font-size: 40px;padding-top:30px;">THANK YOU</h2>
                    <h2 class="font-poppins-regular m-0 mb-2 text-center" style="font-size:20px;padding:10px;">Your paid Successfully</h2>
                    <div class="px-5">
                        <hr>
                        <h3 class="font-poppins-bold m-0 text-center" style="font-size:22px;">Ticket ID <span style="margin-left: 15px; color: #FA21FD; font-family: roboto-regular; font-size: 22px;text-align:center;padding-top:1px;" id="order-id">#1234</span></h3>
                        <hr>
                        <div class="d-flex justify-content-center align-items-center">
                            <p class="para font-poppins-regular" style="text-align:center;padding-top:10px;padding-bottom:20px;margin:1px auto !important;">Please make note of the Ticket ID for any future refrence.
                            </p>
                        </div>                                        
                        <div class="d-flex justify-content-center align-items-center" style="padding-bottom: 60px;" >
                            <a class="text-uppercase font-poppins-bold shadow-buy-now-button buy-now-button backToShop" onclick="window.location = '/'">Back to Shop</a>
                        </div>
                    </div>   
                </div>
                <div id="checkout-form" class="modal-body">
                    <div class="form formStyle needs-validation" method="POST">
                        <div class="form-froup">
                            <label for="InputYourOrder">Your Order Details</label>
                            <table style="border:1px solid rgba(0, 0, 0, 0.1);border-right:none;margin:0px 0px 40px 0px;text-align:left;width:100%;border-collapse:separate;overflow:hidden;">
                                <thead>
                                    <tr>
                                        <th style="background:#f5f5f5;border-color:#eee;border-width:1px 1px 0 0;
                                        border-style: solid;color:#4c5462;vertical-align:middle;" class="product-name">Product</th>
                                        <th style="background:#f5f5f5;border-color:#eee;border-width:1px 1px 0 0;
                                        border-style: solid;color:#4c5462;vertical-align:middle;" class="product-total">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td id="buyProductName" class="product-name up text-uppercase">Polo Neck (100% Cotton)
                                            <strong class="product-quantity">×&nbsp;1</strong>					
                                        </td>
                                        <td class="product-total">
                                            <strong>
                                                <span>$<span id="buypriceDollar">21</span>.
                                                <span id="buypriceCents">00</span>
                                            </strong> 		
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>                        
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><strong>
                                            <span>$<span class="modalSubtotal">21</span>
                                            </strong> 
                                        </td>
                                    </tr>
                                    <tr class="cart-subtotal">
                                        <th>Discount</th>
                                        <td><strong>
                                            <span>-$<span class="discount">0</span>
                                            </strong> 
                                        </td>
                                    </tr>  
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong>
                                                <span>$<span name="amount" class="modaltotal">21</span>
                                            </strong> 
                                        </td>
                                    </tr>    
                                </tfoot>
                            </table>
                        </div>
                        <div class="formInput">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="InputEmail">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="InputPhone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <label for="Country">Country</label>
                                <select class="form-control" id="country" name="country" required>
                                    <option value="0">Select Country</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="India">India</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>							  	
                            </div>
                        </div>
                        <div class="formInput1">
                            <div class="form-group">
                                <label for="InputAddress">Address</label>
                                <input type="text" class="form-control" name="address" id="address" aria-describedby="address" placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <label for="InputState">State</label>
                                <input type="text" class="form-control" name="state" id="state" aria-describedby="state" placeholder="Enter State">
                            </div>
                            <div class="form-group">
                                <label for="Inputpostcode">Postcode</label>
                                <input type="text" class="form-control" name="postcode" id="postcode" aria-describedby="postcode" placeholder="Enter Postcode">
                            </div>
                            <div class="form-group" style="margin-top:4px;">
                            <label for="other_details">Other Details</label>
                            <textarea class="form-control" name="other_details" id="other_details" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <br>
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                        <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="chkterms" required>
                              <label class="form-check-label" for="chkterms">
                                Agree to <a href="../pages/terms.html" target="_blank">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                        <button type="submit" id="razorpaycheckout" class="btn btn-primary buttonStyle">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script type="text/javascript" src="../js/custom-single-product-page.js"></script>

    <script type="text/javascript" src="../js/tawk.to.js"></script>
</body>
</html>