<?php

    //productName = product name from url
    // productNameEditted = removal of console, controller and bundle
    // productNameEdittedElite = removal of elite-wireless- and elite- for console and bundles
    // productDesignImage = image name of design
    // ControllerActive = active controller tab
    // ConsoleActive = active console tab
    // bundleActive = active bundle tab
    $productName = 'black-wall';
    $productNameEditted = "xbox-one-";
    $productNameEdittedElite = "xbox-one-";
    $productDesignImage = "controller1";
    $controllerActive ="";
    $consoleActive ="";
    $bundleActive ="";
    if (isset($_GET['productName'])){
        $productName = $_GET['productName'];
        //code for ps4   
        if (strpos($productName, 'ps4') !== false) {
            $productNameEditted = "ps4-";
            if (strpos($productName, 'controller') !== false) {
                $productNameEdittedElite = substr($productName, 0, strlen($productName)-10);
                $productDesignImage = "controller1";
                $controllerActive = "active";
            }
            else if (strpos($productName, 'console') !== false) {
                $productNameEdittedElite = substr($productName, 0, strlen($productName)-7);
                $productDesignImage = "console1";
                $consoleActive = "active";
            }
            else if (strpos($productName, 'bundle') !== false) {
                $productNameEdittedElite = substr($productName, 0, strlen($productName)-6);
                $productDesignImage = "bundle1";
                $bundleActive = "active";
            }

        } 
        //code for xbox
        else{
            if (strpos($productName, 'controller') !== false) {
                $productNameEditted = substr($productName, 0, strlen($productName)-10);
                $productNameEdittedElite = $productNameEditted;
                $productDesignImage = "controller1";
                $controllerActive = "active";
                if (strpos($productNameEditted, 'elite-wireless-') !== false) {
                    $productNameEdittedElite = substr($productNameEditted, 0, strlen($productNameEditted)-15);
                    $productNameEdittedElite = $productNameEdittedElite . "x-";
                } else if (strpos($productNameEditted, 'elite-') !== false) {
                    $productNameEdittedElite = substr($productNameEditted, 0, strlen($productNameEditted)-6);
                    $productNameEdittedElite = $productNameEdittedElite . "x-";
                }
            }
            else if (strpos($productName, 'console') !== false) {
                $productNameEditted = substr($productName, 0, strlen($productName)-7);
                $productNameEdittedElite = $productNameEditted;
                $productDesignImage = "console1";
                $consoleActive = "active";
                if (strpos($productNameEditted, 'elite-wireless-') !== false) {
                    $productNameEdittedElite = substr($productNameEditted, 0, strlen($productNameEditted)-15);
                    $productNameEdittedElite = $productNameEdittedElite . "x-";
                } else if (strpos($productNameEditted, 'elite-') !== false) {
                    $productNameEdittedElite = substr($productNameEditted, 0, strlen($productNameEditted)-6);
                    $productNameEdittedElite = $productNameEdittedElite . "x-";
                }
            }
            else if (strpos($productName, 'bundle') !== false) {
                $productNameEditted = substr($productName, 0, strlen($productName)-6);
                $productNameEdittedElite = $productNameEditted;
                $productDesignImage = "bundle1";
                $bundleActive = "active";
                if (strpos($productNameEditted, 'elite-wireless-') !== false) {
                    $productNameEdittedElite = substr($productNameEditted, 0, strlen($productNameEditted)-15);
                    $productNameEdittedElite = $productNameEdittedElite . "x-";
                } else if (strpos($productNameEditted, 'elite-') !== false) {
                    $productNameEdittedElite = substr($productNameEditted, 0, strlen($productNameEditted)-6);
                    $productNameEdittedElite = $productNameEdittedElite . "x-";
                }
            }
        }
        
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="httconsole://www.googletagmanager.com/gtag/js?id=ENTER_YOUR_ANALYTICS_ID"></script>
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
            'httconsole://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'ENTER_YOUR_TAG_ID');</script>
    <!-- End Google Tag Manager -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Not required meta tags but essential for seo and link sharing -->
    <meta name="description"
        content="Get the best controller skins based on your favorite games.">
    <meta name="Keywords" content="Custom,T-shirts, Hoodies, Make your Own, Polo, Round neck,Custom T-shirts ">
    <meta property="og:title" content="Product | The Top Controller" />
    <meta property="og:url" content="httconsole://www.thetopconroller.com/products/<?php echo $productNameEditted; ?>bundle.html" />
    <meta property="og:description"
        content="Get the best controller skins based on your favorite games.">
    <meta property="og:image" itemprop="image" content="httconsole://www.thetopcontroller.com/images/top_controller_fav.png" />
    <meta property="og:image:secure_url" itemprop="image" content="httconsole://www.thetopcontroller.com/images/top_controller_fav.png" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <link rel="shortcut icon" href="../images/top_controller_fav.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Product | The Top Controller</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    

    <style type="text/css">

        /* top header slider */
        #white-circle{
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            top: 20%; 
            left: 42%;
            -webkit-box-shadow: 0px 0px 20px 40px rgba(0,0,0,0.15); 
            -moz-box-shadow: 0px 2px 30px 40px rgba(0,0,0,0.15); 
            box-shadow: 0px 0px 20px 40px rgba(0,0,0,0.15);
            z-index: 10;
        }

        #designed-to{
            font-size: 121px;
            opacity: 0.2;
            /* text-orientation: inherit; */
            writing-mode: tb-rl;
            transform: rotate(180deg) translate(250%,0);
            z-index: 10;
            left: 50%;
            bottom: 10%;
            line-height: 120px;
        }
        #stand-out{
            bottom: -3%;
            font-size: 78px;
            line-height: 78px;
            left: 50%;
            transform: translate(-150%,0);
            z-index: 15;
        }
        #header-slider-container{
            top: 30%;
            left: 7%;
            z-index: 15;
        }
        #john-doe-container{
            top: 30%;
            right: 13%;
            z-index: 15;
        }
        #scroll-container{
            writing-mode: tb-rl;
            transform: rotate(180deg);
            z-index: 10;
            bottom: 0px;
            right: 13%;
        }

        /* service */
        #bubbles-container{
            transform: rotate(180deg); 
            top: -110px; 
            position: absolute; 
            left: 5%;
        }
        #services-container{
            left: 50%;
            transform: translate(-50%,0);
            z-index: 17;
        }
        #services-heading{
            font-size: 190px;
            line-height: 150px;
        }
        #services-sub-heading{
            font-size: 47px;
            line-height: 80px;
        }

        /* for large desktoconsole */
        @media (min-width: 1800px) {
            #john-doe-container{
                right: 23%;
            }   
            #scroll-container{
                right: 23%;
            }
            #header-slider-container{
                left: 13%;
            }
            #bubbles-container{ 
                left: 13%;
            }
        }

        /* Mobile styling */
        /* top header slider */
        #white-circle-mobile{
            width: 1000px;
            height: 1000px;
            border-radius: 50%;
            top: 20%; 
            left: 42%;
            -webkit-box-shadow: 0px 0px 20px 40px rgba(0,0,0,0.15); 
            -moz-box-shadow: 0px 2px 30px 40px rgba(0,0,0,0.15); 
            box-shadow: 0px 0px 20px 40px rgba(0,0,0,0.15);
            z-index: 10;
        }

        #designed-to-mobile{
            font-size: 38px;
            opacity: 0.2;
            /* text-orientation: inherit; */
            writing-mode: tb-rl;
            transform: rotate(180deg) translate(260%,0);
            z-index: 10;
            left: 50%;
            bottom: 10%;
            line-height: 35px;
        }
        #stand-out-mobile{
            bottom: -2%;
            font-size: 30px;
            line-height: 30px;
            left: 50%;
            transform: translate(-48%,0);
            z-index: 15;
        }
        #header-slider-container-mobile{
            top: 30%;
            left: 7%;
            z-index: 15;
        }
        #john-doe-container-mobile{
            top: 30%;
            right: 13%;
            z-index: 15;
        }
        #scroll-container-mobile{
            writing-mode: tb-rl;
            transform: rotate(180deg);
            z-index: 10;
            bottom: 0px;
            right: 13%;
        }

        /* service */
        #bubbles-container-mobile{
            transform: rotate(180deg); 
            top: -110px; 
            position: absolute; 
            left: 5%;
        }
        #services-container-mobile{
            left: 50%;
            transform: translate(-50%,0);
            z-index: 17;
        }
        #services-heading-mobile{
            font-size: 75px;
            line-height: 75px;
        }
        #services-sub-heading-mobile{
            font-size: 24px;
            line-height: 40px;
        }

    </style>
</head>

<body class="position-relative" style="overflow-y: scroll; height: 100%;" data-spy="scroll" data-target="#navbar-example2" data-offset="150">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="httconsole://www.googletagmanager.com/ns.html?id=ENTER_YOUR_TAG_ID" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="d-none d-lg-block">
        <!-- <div id="header-desktop"></div>
    
        <div id="footer-desktop"></div> -->
        <header>

            <div style="background-color: #2e3192; z-index: 50;" class="fixed-top">
                <div class="top-bar-desktop d-flex justify-content-center align-items-center">
                    <h3 class="m-0 font-poppins-light" style="font-size: 22px;">An Exclusive Coupon of <span class="font-weight-bold">5$</span> Has been Applied Valid Until <span class="font-weight-bold" id="counter-1">10:00</span></h3>
                </div>
                <div id="header-desktop-1"></div>
            </div>
            
            
        </header>

        <!-- top silder and its elements -->
        <div id="header">
            <div class="background-color-blue w-100 position-relative overflow-hidden" style="height: 780px;">
                
                <div class="position-absolute font-poppins-bold text-white" id="designed-to">Designs<br>that</div>
                <div class="position-absolute font-poppins-bold color-yellow" id="stand-out">Stand Out</div>
                <div class="position-absolute shadow-buy-now-button" style="bottom: 0px; left: 50%; transform: translate(-10%, 0); border-top-left-radius: 40px; border-top-right-radius: 40px;background-color:#fff;">
                    <picture>
                        <source srcset="../images/products/black-wall/<?php echo $productName; ?>/<?php echo $productDesignImage; ?>.webp" type="image/webp">
                        <source srcset="../images/products/black-wall/<?php echo $productName; ?>/<?php echo $productDesignImage; ?>.png" type="image/png" type="image/png">
                        <img src="../images/products/black-wall/<?php echo $productName; ?>/<?php echo $productDesignImage; ?>.png" class="shadow-buy-now-button" style="border-top-left-radius: 40px; border-top-right-radius: 40px;">
                    </picture>
                    <div class="position-absolute" style="right: 50%; top: 30px; transform: translate(-52%, 0px); width: 100%;">
                        <h1 class="productNameHtml font-poppins-bold m-0 mb-2 text-uppercase text-right text-white" style="font-size: 73px; line-height:71px;">Xbox<br>one</h1>
                        <h2 class="product1 text-right text-white font-poppins-bold m-0 text-uppercase" style="font-size: 23px;">Controller</h2>
                    </div>
                </div>

            </div>

        </div>

        <div id="products">
            <div class="position-relative w-100">
                <div class="position-absolute background-color-yellow shadow-buy-now-button-1" style="width: 400px; height:320px; border-radius: 10px; left: 50%; transform: translate(-150%,0);">
                    <h2 class="productName font-poppins-regular m-0 mb-2 pt-3 text-capitalize text-center" style="font-size: 49px;"></h2>
                    <h3 id="specification" class="font-poppins-regular m-0 px-3 text-capitalize text-center" style="font-size: 16px;"></h3>
                </div>
                <div class="position-absolute shadow-buy-now-button-1" style="width: 589px; height:591px; border-radius: 40px; top:-547px; left: 50%; transform: translate(-10%, 0);"></div>
            </div>
            <div class="d-flex" style="width: 850px; margin: 0 auto;">

                <div class="" style="width: 300px; margin-top: 280px;">
                    <h4 class="font-poppins-regular m-0 text-uppercase" style="font-size: 330px; opacity: 0.54; line-height: 190px; height:1130px;writing-mode: tb-rl; transform: rotate(180deg); " id="counter-2">10:00</h4>
                </div>
                <div class="" style="width: 550px;">
                    <div style="margin-left: 60px; margin-top: 70px;">
                        <h4 class="font-poppins-regular m-0 text-left" style="font-size: 19px;">Home>>Products>><span id="productName3"></span></h4>
                        <h4 class="font-poppins-regular m-0 pt-1 text-left pb-3" style="font-size: 40px;">CHOOSE YOUR PRODUCT</h4>
                        <!-- choose your product -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link <?php echo $controllerActive;?>" id="controller-tab" data-toggle="tab" role="tab" aria-controls="xbox"
                                    aria-selected="true" >Controller</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $consoleActive;?>" id="console-tab" data-toggle="tab" role="tab" aria-controls="console"
                                    aria-selected="false">Console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $bundleActive;?>" id="Bundle-tab" data-toggle="tab" role="tab" aria-controls="Bundle"
                                    aria-selected="false">Bundle</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="controller" role="tabpanel" aria-labelledby="controller-tab">
                                <div class="shadow-buy-now-button-1 mb-3">
                                    <!-- controller products here -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="designed-by-you-<?php echo $productNameEditted; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/designed-by-you/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Designed<br>By You</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=designed-by-you&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="blue-kaleidoscopeid-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/blue-kaleidoscope/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Blue<br>Kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=blue-kaleidoscope&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="call-of-duty-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/call-of-duty/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Call<br>Of Duty</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=call-of-duty&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>

                                    <!-- second row -->
            
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="black-wall-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/black-wall/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Black<br>Wall</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=black-wall&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                            <div class="col-4 px-1" id="doodle-lines-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/doodle-lines/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Doodle<br>Lines</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=doodle-lines&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                            <div class="col-4 px-1" id="dragon-ball-z-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/dragon-ball-z/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;width: 100%;">Dragon<br>Ball Z</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=dragon-ball-z&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                                        
                                    <!-- third row -->
            
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="funky-ghost-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-ghost/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Funky<br>Ghost</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=funky-ghost&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                            <div class="col-4 px-1" id="funky-skulls-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-skulls/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Funky<br>Skulls</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-skulls&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                            <div class="col-4 px-1" id="game-freak-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/game-freak/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;width: 100%;">Game<br>Freak</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=game-freak&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>    
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- fourth row -->
            
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="gears-of-War-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/gears-of-War/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Gears<br>Of War</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=gears-of-war&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>   
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                             
                                            </div>
                                            <div class="col-4 px-1" id="iron-man-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/iron-man/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Iron<br>Man</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=iron-man&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>   
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                             
                                            </div>
                                            <div class="col-4 px-1" id="naruto-and-sasuke-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-and-sasuke/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;width: 100%;">naruto<br>and Sasuke</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-and-sasuke&productName=<?php echo $productNameEditted; ?>controller">View Now
                                                            </a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fifth Row -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="naruto-shippuden-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-shippuden/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">naruto<br>shippuden</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-shippuden&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="patriot-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/patriot/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">patriot</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=patriot&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="skull-kaleidoscope-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/skull-kaleidoscope/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;width: 100%;">skull<br>kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=skull-kaleidoscope&productName=<?php echo $productNameEditted; ?>controller">View Now
                                                            </a>
                                                        </div>    
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sixth Row  -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="tokyo-ghoul-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/tokyo-ghoul/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">tokyo<br>ghoul</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=tokyo-ghoul&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div>  
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                              
                                            </div>
                                            <div class="col-4 px-1" id="world-war-<?php echo $productNameEdittedElite; ?>controller">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/world-war/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 155px; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">world<br>war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=world-war&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>    
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="tab-pane fade" id="console" role="tabpanel" aria-labelledby="console-tab">
                                <!-- all console -->
                                <div class="shadow-buy-now-button-1 mb-3">
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="designed-by-you-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/designed-by-you/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Designed<br>By You</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">36</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=designed-by-you&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="blue-kaleidoscope-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/blue-kaleidoscope/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">blue<br>kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=blue-kaleidoscope&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="call-of-duty-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/call-of-duty/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">call<br>of duty</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=call-of-duty&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2nd Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="black-wall-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/black-wall/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">black<br>wall</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=black-wall&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                            <div class="col-4 px-1" id="doodle-lines-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/doodle-lines/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Doodle<br>Lines</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=doodle-lines&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="dragon-ball-z-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/dragon-ball-z/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">dragon<br>ball z</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=dragon-ball-z&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3rd Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">        
                                            <div class="col-4 px-1" id="funky-ghost-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-ghost/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">funky<br>ghost</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-ghost&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="funky-skulls-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-skulls/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">funky<br>skulls</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-skulls&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="game-freak-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/game-freak/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">game<br>freak</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=game-freak&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4th Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="gears-of-war-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/gears-of-war/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">gears<br>of war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=gears-of-war&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="iron-man-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/iron-man/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">iron<br>man</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=iron-man&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="naruto-and-sasuke-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-and-sasuke/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">naruto<br>and sasuke</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-and-sasuke&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5th Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="naruto-shippuden-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-shippuden/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">naruto<br>shippuden</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-shippuden&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="patriot-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/patriot/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">patriot</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=patriot&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="skull-kaleidoscope-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/skull-kaleidoscope/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">skull<br>kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=skull-kaleidoscope&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6th Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="tokyo-ghoul-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/tokyo-ghoul/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">tokyo<br>ghoul</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=tokyo-ghoul&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="world-war-<?php echo $productNameEdittedElite; ?>console">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/world-war/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">world<br>war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=world-war&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="tab-pane fade" id="Bundle" role="tabpanel" aria-labelledby="Bundle-tab">
                                <div class="shadow-buy-now-button-1 mb-3">
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="designed-by-you-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/designed-by-you/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Designed<br>By You</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">50</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=designed-by-you&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                            <div class="col-4 px-1" id="blue-kaleidoscope-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/blue-kaleidoscope/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">blue<br>kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=blue-kaleidoscope&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="call-of-duty-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/call-of-duty/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">call<br>of duty</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=call-of-duty&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2nd Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="black-wall-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/black-wall/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">black<br>wall</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=black-wall&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="doodle-lines-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/doodle-lines/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">Doodle<br>Lines</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=doodle-lines&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="dragon-ball-z-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/dragon-ball-z/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">dragon<br>ball z</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=dragon-ball-z&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3rd Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">        
                                            <div class="col-4 px-1" id="funky-ghost-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-ghost/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">funky<br>ghost</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-ghost&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-4 px-1" id="funky-skulls-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-skulls/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">funky<br>skulls</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-skulls&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="game-freak-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/game-freak/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">game<br>freak</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=game-freak&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4th Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="gears-of-war-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/gears-of-war/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">gears<br>of war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=gears-of-war&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="iron-man-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/iron-man/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">iron<br>man</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=iron-man&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="naruto-and-sasuke-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-and-sasuke/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">naruto<br>and sasuke</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-and-sasuke&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 5th Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="naruto-shippuden-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-shippuden/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">naruto<br>shippuden</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-shippuden&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="patriot-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/patriot/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">patriot</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=patriot&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="skull-kaleidoscope-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/skull-kaleidoscope/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">skull<br>kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=skull-kaleidoscope&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 6th Row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-4 px-1" id="tokyo-ghoul-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/tokyo-ghoul/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">tokyo<br>ghoul</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=tokyo-ghoul&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-4 px-1" id="world-war-<?php echo $productNameEdittedElite; ?>bundle">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="width: 163px; height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 100px;z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/world-war/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 165px; top: 8px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 110px; font-size: 12px;">world<br>war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=world-war&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width:163px;height:250px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="background-color:yellow !important;z-index:15;margin-left:-48px;margin-top:-112px;border-radius:6px;display:none;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
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

        <!-- how to install desktop -->
        <div id="how-to-install-desktop-1"></div>

        

        <!-- footer -->
        <div id="footer-desktop-1"></div>
    </div>


    <!-- mobile view -->

    <div class="d-lg-none">
        <!-- <div id="header-mobile"></div>

        <div id="footer-mobile"></div> -->

        <header>
            <div style="background-color: #2e3192; z-index: 50;" class="fixed-top">
                <div class="top-bar-desktop d-flex justify-content-center align-items-center" style="height: 40px !important;">
                    <h3 class="m-0 font-poppins-light text-center" style="font-size: 12px;">An Exclusive Coupon of <span class="font-weight-bold">5$</span> Has been Applied Valid Until<br> <span class="font-poppins-bold" id="counter-1-mobile" style="font-size: 20px;">10:00</span></h3>
                </div>
                <div id="header-mobile-1"></div>
            </div>      
        </header>

        <!-- top silder and its elements -->
        <div id="header-mobile">
            <div class="background-color-blue w-100 position-relative overflow-hidden" style="height: 320px;">
                
                <div class="position-absolute font-poppins-bold text-white" id="designed-to-mobile">Designs<br>that</div>
                <div class="position-absolute font-poppins-bold color-yellow w-100" id="stand-out-mobile">Stand Out</div>
                <div class="position-absolute shadow-buy-now-button" style="bottom: 0px; left: 50%; transform: translate(-10%, 0); border-top-left-radius: 20px; border-top-right-radius: 20px; width: 50%;background-color:#fff;">
                    <picture>
                        <source srcset="../images/products/black-wall/<?php echo $productName; ?>/<?php echo $productDesignImage; ?>.webp">
                        <source srcset="../images/products/black-wall/<?php echo $productName; ?>/<?php echo $productDesignImage; ?>.png" type="image/png">
                        <img src="../images/products/black-wall/<?php echo $productName; ?>/<?php echo $productDesignImage; ?>.png" class="shadow-buy-now-button w-100" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    </picture>
                    
                    <div class="position-absolute" style="top: 30px; left: -105%; width: 100%;">
                        <h1 class="productNameHtml-mobile font-poppins-bold m-0 text-uppercase text-right text-white" style="font-size: 25px; line-height: 25px;">black<br>wall</h1>
                        <h2 class="product1-mobile text-right text-white font-poppins-bold m-0 text-uppercase" style="font-size: 10px;">controller</h2>
                    </div>
                </div>
                

            </div>

        </div>

        <!-- products mobile -->

        <div id="products-mobile" class="overflow-hidden">
            <div class="position-relative w-100">
                <div class="position-absolute shadow-buy-now-button-1" style="width: 50%; height:200px; border-radius: 20px; top:-180px; left: 50%; transform: translate(-10%, 0);"></div>
            </div>
            <div class="d-flex" style="width: 280px; margin: 0 auto;">
                <div class="" style="width: 100%;">
                    <div class="mt-4">
                        <h4 class="font-poppins-regular m-0 text-left text-capitalize" style="font-size: 10px;">Home>>Products>><span id="productName3-mobile"></span></h4>
                        <h4 class="font-poppins-regular m-0 pt-1 text-left pb-3" style="font-size: 21px;">CHOOSE YOUR PRODUCT</h4>
                        <!-- choose your product -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="font-size:12px;">
                            <li class="nav-item">
                                <a class="nav-link <?php echo $controllerActive;?>" id="controller-tab-mobile" data-toggle="tab" role="tab" aria-controls="controller-mobile"
                                    aria-selected="true" >Controller</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $consoleActive;?>" id="console-tab-mobile" data-toggle="tab" role="tab" aria-controls="console-mobile"
                                    aria-selected="false">Console</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $bundleActive;?>" id="Bundle-tab-mobile" data-toggle="tab" role="tab" aria-controls="Bundle-mobile"
                                    aria-selected="false">Bundle</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="controller-mobile" role="tabpanel" aria-labelledby="controller-tab">
                                <div class="shadow-buy-now-button-1 mb-3">
                                    <!-- controller products here -->
                                    <div class="container-fluid pt-4" style="margin-top:20px;">
                                        <div class="row">
                                            <div class="col-6 px-1" id="designed-by-you">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/designed-by-you/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">Designed<br>By You</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=designed-by-you&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 px-1" id="blue-kaleidoscope">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/blue-kaleidoscope/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">Blue<br>Kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=blue-kaleidoscope&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>
                                    <!-- second row -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="call-of-duty">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/call-of-duty/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">Call<br>of duty</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=call-of-duty&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 px-1" id="black-wall">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/black-wall/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">Black<br>wall</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=black-wall&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>

                                    <!-- 3rd row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="doodle-lines">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/doodle-lines/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">Doodle<br>Lines</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=doodle-lines&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-6 px-1" id="dragon-ball-z">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/dragon-ball-z/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">Dragon<br>ball z</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=dragon-ball-z&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4th row -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="funky-ghost">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-ghost/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">funky<br>ghost</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-ghost&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div> 
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                            <div class="col-6 px-1" id="funky-skulls">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/funky-skulls/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">funky<br>skulls</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-skulls&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>

                                    <!-- 5th row -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="game-freak">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/game-freak/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">game<br>freak</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=game-freak&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 px-1" id="gears-of-war">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/gears-of-war/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">gears<br>of war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=gears-of-war&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>

                                    <!-- 6th row -->

                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="iron-man">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/iron-man/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">iron<br>man</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=iron-man&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 px-1" id="naruto-and-sasuke">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-and-sasuke/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">naruto<br>and sasuke</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-and-sasuke&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 7th row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="naruto-shippuden">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/naruto-shippuden/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">naruto<br>shippuden</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-shippuden&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 px-1" id="patriot">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/patriot/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">patriot</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=patriot&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 8th row -->
                                    <div class="container-fluid pt-4">
                                        <div class="row">
                                            <div class="col-6 px-1" id="skull-kaleidoscope">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/skull-kaleidoscope/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">skull<br>kaleidoscope</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=skull-kaleidoscope&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 px-1" id="tokyo-ghoul">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/tokyo-ghoul/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">tokyo<br>ghoul</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=tokyo-ghoul&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div> 
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 9th row -->
                                    <div class="container-fluid pt-4" id="world-war">
                                        <div class="row">
                                            <div class="col-6 px-1">
                                                <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                    <img src="../images/products/world-war/<?php echo $productNameEditted; ?>controller/controller.png" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;">
                                                    <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                        <div class="w-100">
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">world<br>war</h3>
                                                            <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">15</span>.99$</h3>
                                                            <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=world-war&productName=<?php echo $productNameEditted; ?>controller">View Now</a>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="console-mobile" role="tabpanel" aria-labelledby="console-tab-mobile">
                                <!-- console products here -->
                                <div class="container-fluid pt-4" style="margin-top:20px;">
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/designed-by-you/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">designed<br>by you</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">36</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=designed-by-you&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>
                                            <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/blue-kaleidoscope/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">blue<br>kaleidoscope</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=designed-by-you&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div> 
                                            <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                           
                                        </div>                                        
                                    </div>
                                    <!-- 2nd row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/call-of-duty/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">call<br>of duty</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=call-of-duty&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div> 
                                            <div class="tag position-relative d-flex justify-content-center align-items-center" style="margin-top: -262px;width: 133px;height:235px;">
                                                    <div class="discount position-absolute bg-white shadow-buy-now-button-1 h-center" style="z-index: 15;margin-left: -33px;margin-top: -112px;border-radius: 6px;display:none;background-color: yellow !important;">
                                                        <div style="font-size: 10px;padding:0px 4px;" class="soldout font-poppins-medium">DISCOUNT</div>
                                                    </div>
                                                </div>                                           
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/black-wall/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">black<br>wall</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=black-wall&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 3rd row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/doodle-lines/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">doodle<br>lines</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=doodle-lines&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/dragon-ball-z/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">dragon<br>ball z</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=dragon-ball-z&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 4th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/funky-ghost/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">funky<br>ghost</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-ghost&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/funky-skulls/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">funky<br>skulls</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-skulls&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 5th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/game-freak/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">game<br>freak</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=game-freak&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/gears-of-war/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">gears<br>of war</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=gears-of-war&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 6th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/iron-man/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">iron<br>man</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=iron-man&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/naruto-and-sasuke/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">naruto<br>and sasuke</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-and-sasuke&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 7th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/naruto-shippuden/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">naruto<br>shippuden</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-shippuden&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/patriot/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">patriot</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=patriot&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 8th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/skull-kaleidoscope/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">skull<br>kaleidoscope</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=skull-kaleidoscope&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/tokyo-ghoul/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">tokyo<br>ghoul</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=tokyo-ghoul&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 9th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/world-war/<?php echo $productNameEdittedElite; ?>console/console.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">world<br>war</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">20</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=world-war&productName=<?php echo $productNameEdittedElite; ?>console">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Bundle-mobile" role="tabpanel" aria-labelledby="Bundle-tab-mobile">
                            <div class="container-fluid pt-4" style="margin-top:20px;">
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/designed-by-you/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">designed<br>by you</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">50</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="custom-product-page?designName=designed-by-you&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/blue-kaleidoscope/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">blue<br>kaleidoscope</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=designed-by-you&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>                                        
                                    </div>
                                    <!-- 2nd row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/call-of-duty/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">call<br>of duty</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=call-of-duty&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/black-wall/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">black<br>wall</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=black-wall&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 3rd row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/doodle-lines/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">doodle<br>lines</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=doodle-lines&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/dragon-ball-z/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">dragon<br>ball z</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=dragon-ball-z&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 4th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/funky-ghost/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">funky<br>ghost</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-ghost&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/funky-skulls/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">funky<br>skulls</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=funky-skulls&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 5th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/game-freak/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">game<br>freak</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=game-freak&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/gears-of-war/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">gears<br>of war</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=gears-of-war&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 6th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/iron-man/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">iron<br>man</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=iron-man&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/naruto-and-sasuke/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">naruto<br>and sasuke</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-and-sasuke&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 7th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/naruto-shippuden/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">naruto<br>shippuden</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=naruto-shippuden&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/patriot/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">patriot</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=patriot&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 8th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/skull-kaleidoscope/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">skull<br>kaleidoscope</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=skull-kaleidoscope&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/tokyo-ghoul/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">tokyo<br>ghoul</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=tokyo-ghoul&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                            
                                        </div> 
                                    </div> 
                                    <!-- 9th row -->
                                    <div class="row">
                                        <div class="col-6 px-1">
                                            <div class="position-relative d-flex justify-content-center align-items-center" style="height: 250px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="width: 80%; border-radius: 10px; top: 5px;height: 90px; z-index: 10; width: 110px;"></div>
                                                <img src="../images/products/world-war/<?php echo $productNameEdittedElite; ?>bundle/bundle.png" class="position-absolute" style="z-index: 15; width: 100%; top: 13px;">
                                                <div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 110px;">
                                                    <div class="w-100">
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 95px; font-size: 12px;">world<br>war</h3>
                                                        <h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 23px;"><span class="discountPrice" style="font-size: 43px;">23</span>.99$</h3>
                                                        <a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center" style="font-size: 16px; border-radius: 10px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" href="single-product-page?designName=world-war&productName=<?php echo $productNameEdittedElite; ?>bundle">View Now</a>
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
            </div>            
        </div>

        <!-- products -->
        <div id="products-mobile-1"></div>
                
        <!-- our designs -->
        <div id="designs-mobile-1"> </div>


        <!-- how to install mobile -->
        <div id="how-to-install-mobile-1"></div>

        <!-- footer -->
        <div id="footer-mobile-1"></div>

    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.min.js"></script>

    

    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        //get parameters from url
        var getParams = function (url) {
            var params = {};
            var parser = document.createElement('a');
            parser.href = url;
            var query = parser.search.substring(1);
            var vars = query.split('&');
            for (var i = 0; i < vars.length; i++) {
                var pair = vars[i].split('=');
                params[pair[0]] = decodeURIComponent(pair[1]);
            }
            return params;
        };

        // Get parameters from the current URL
        var params = getParams(window.location.href);
        //console.log(params);
        var productNameUrl = params.productName;

        // discount
        $.ajax({
                type: 'POST',
                url:'../php/discount.php',
                'async': false,
                dataType: "json",
                data: {
                    "productNameEditted": "<?php echo $productNameEditted; ?>", 
                    "productNameEdittedElite": "<?php echo $productNameEdittedElite; ?>"
                },
            success: function (data) {
                if (data.status == '101') {
                    for (var i = 0; i < data.discountRequests.length; i++) {
                        console.log(data.discountRequests[i]);
                        $("#"+data.discountRequests[i].designName+"-"+data.discountRequests[i].productName+" .discount").css("display", "block");
                        $("#"+data.discountRequests[i].designName+"-"+data.discountRequests[i].productName+" .discountPrice").html(data.discountRequests[i].discountPrice);
                    }
                    // soldout
                    for (var i = 0; i < data.soldOutRequests.length; i++) {
                        //console.log(data.soldOutRequests[i].designName);
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .tag").css("background-color", "black");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .tag").css("opacity", "0.7");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .tag").css("z-index", "15");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .tag").css("border-radius", "10px"); 
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .discount").css("display", "block");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .discount").css("margin-top", "-10px");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .discount").css("margin-left", "0px");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .discount").css("background-color", "white");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .soldout").html(data.soldOutRequests[i].soldOut);
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .soldout").css("font-size", "44px");
                        $("#"+data.soldOutRequests[i].designName+"-"+data.soldOutRequests[i].productName+" .soldout").css("text-align", "center");
                    }
                }else{ 
                }
            }
        });

        // // soldout
        // $.ajax({
        //         type: 'POST',
        //         url:'../php/soldOut.php',
        //         'async': false,
        //         dataType: "json",
        //         data: {
        //             "productNameEditted": "
        //             "productNameEdittedElite": 
        //         },
        //     success: function (data) {
        //         if (data.status == '101') {
                    
        //         }else{

        //         }
        //     }
        // });
        
        //desktop code goes here

        if (window.innerWidth >= 960) {

            //load templates
            $("#products-desktop-1").load('../templates/products-desktop-1.html');
            $("#header-desktop-1").load('../templates/header-desktop-1.html');
            $("#how-to-install-desktop-1").load('../templates/how-to-install-desktop-1.html');
            $("#footer-desktop-1").load('../templates/footer-desktop-1.html');

            // for change tab contant 
            var controllerActive = "controller";
                if(productNameUrl.indexOf(controllerActive) != -1){
                    $("#console").css('display','none');
                    $("#Bundle").css('display','none');
                    $("#controller").css('display','contents');  
                } 
                else if(productNameUrl.indexOf(controllerActive = "console") != -1){
                    $("#controller").css('display','none');
                    $("#Bundle").css('display','none');
                    $("#console").css('display','contents');
                }  
                else if (productNameUrl.indexOf(controllerActive = "bundle") != -1){
                    $("#console").css('display','none');
                    $("#controller").css('display','none');
                    $("#Bundle").css('display','contents');
                }  

            $("#controller-tab").on('click',function(){
                
                $("#console").css('display','none');
                $("#Bundle").css('display','none');
                $("#controller").css('display','contents');
            });
            $("#console-tab").on('click',function(){
                $("#controller").css('display','none');
                $("#Bundle").css('display','none');
                $("#console").css('display','contents');
            });
            $("#Bundle-tab").on('click',function(){
                
                $("#console").css('display','none');
                $("#controller").css('display','none');
                $("#Bundle").css('display','contents');
            });

            // product ajax call
        $.ajax({
                    type: 'POST',
                    url:'../php/all-products.php',
                    'async': false,
                    dataType: "json",
                    data: {
                        get_data: 'selectedProduct',
                        "productName": productNameUrl
                    },
                success: function (data) {
                    if (data.status == 'ok') {
                        result = data.result;
                        //console.log(result); 
                        $(".productNameHtml").html(result.productNameHtml);
                        $(".productName").html(result.productName);
                        $("#productName3").html(result.productName3);
                        $(".product1").html(result.product1);
                        $("#specification").html(result.specification);                                    
                    } else {
                        console.log("not okay");
                    }
                }
            });
        }
        //mobile code here
        else {
                // product ajax call mibile
        $.ajax({
                    type: 'POST',
                    url:'../php/all-products.php',
                    'async': false,
                    dataType: "json",
                    data: {
                        get_data: 'selectedProduct',
                        "productName": productNameUrl
                    },
                success: function (data) {
                    if (data.status == 'ok') {
                        result = data.result;
                        //console.log(result); 
                        $(".productNameHtml-mobile").html(result.productNameHtml);
                        $("#productName3-mobile").html(result.productName3);
                        $(".product1-mobile").html(result.product1);                                    
                    } else {
                        console.log("not okay");
                    }
                }
            });

            //load templates
            $("#header-mobile-1").load('../templates/header-mobile-1.html');
            $("#products-mobile-1").load('../templates/products-mobile-1');            
            $("#designs-mobile-1").load('../templates/designs-mobile-1.html');
            $("#how-to-install-mobile-1").load('../templates/how-to-install-mobile-1.html');
            $("#footer-mobile-1").load('../templates/footer-mobile-1.html');
            
             // for change tab contant 
             var controllerActive = "controller";
                if(productNameUrl.indexOf(controllerActive) != -1){
                    $("#console-mobile").css('display','none');
                    $("#Bundle-mobile").css('display','none');
                    $("#controller-mobile").css('display','contents');  
                } 
                else if(productNameUrl.indexOf(controllerActive = "console") != -1){
                    $("#controller-mobile").css('display','none');
                    $("#Bundle-mobile").css('display','none');
                    $("#console-mobile").css('display','contents');
                }  
                else if (productNameUrl.indexOf(controllerActive = "bundle") != -1){
                    $("#console-mobile").css('display','none');
                    $("#controller-mobile").css('display','none');
                    $("#Bundle-mobile").css('display','contents');
                } 



            $("#controller-tab-mobile").on('click',function(){
                
                $("#console-mobile").css('display','none');
                $("#Bundle-mobile").css('display','none');
                $("#controller-mobile").css('display','contents');
            });
            $("#console-tab-mobile").on('click',function(){
                $("#controller-mobile").css('display','none');
                $("#Bundle-mobile").css('display','none');
                $("#console-mobile").css('display','contents');
            });
            $("#Bundle-tab-mobile").on('click',function(){
                
                $("#console-mobile").css('display','none');
                $("#controller-mobile").css('display','none');
                $("#Bundle-mobile").css('display','contents');
            });

        }

    </script>

<script type="text/javascript" src="../js/tawk.to.js"></script>

</body>

</html>