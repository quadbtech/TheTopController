<?php

//live credentials
$razor_api_key = "";
$razor_api_secret = "";
$product_name="witcher";
$product_description="Geralt Of Rivia XBOX Skin";
$amount = 24.99;

// paypal 
// $env = 'sandbox';
$env = 'production';
$paypal_sandbox_key = '';
$paypal_production_key = '';

if(isset($_GET['name'])){
    $product_name = $_GET['name'];
    if($product_name == 'witcher'){
        $product_description = 'Geralt Of Rivia XBOX Skin';
        $amount = 18.68;
    }
    else if($product_name == 'pubg'){
        $product_description = 'Chicken Dinner PUBG XBOX Skin';
        $amount = 24.99;
    }
    else if($product_name == 'fortnite'){
        $product_description = 'Fortnite Battle Royale XBOX Skin';
        $amount = 24.99;
    }
}

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

    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <!-- Not required meta tags but essential for seo and link sharing -->
    <meta name="description"
        content="the most unique and premium Custom t-shirt, Hoodie, Raglan, Hoodie, V-neck, Polo only with Quadb Apparel. You think of it we create it.">
    <meta name="Keywords" content="Custom,T-shirts, Hoodies, Make your Own, Polo, Round neck,Custom T-shirts ">
    <meta property="og:title" content="Checkout | The Top Controller" />
    <meta property="og:url" content="https://www.thetopconroller.com/checkout.html" />
    <meta property="og:description"
        content="Get the best controller skins based on your favorite games.">
    <meta property="og:image" itemprop="image" content="https://www.thetopcontroller.com/images/top_controller_fav.png" />
    <meta property="og:image:secure_url" itemprop="image" content="https://www.thetopcontroller.com/images/top_controller_fav.png" />
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <link rel="shortcut icon" href="images/top_controller_fav.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Checkout | The Top Controller</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">

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
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=ENTER_YOUR_PIXEL_ID&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->
    


    <style type="text/css">
        .heading{
			text-align:center;
			color: #FFFFFF;
            opacity: 1;
			font-size:20px;
			
		}
			
        .form{
			margin-bottom:10%;
			
			
        }
			
        .title{
            font-size:11px;
            color:white;
            background-color:#2C1F43;
            
            
        }
        
        #location{
            font-size:13px;
            color:white;
            position:relative;
            left:7px;
            top:20px;
            padding-left: 3px;
            padding-right: 3px;
            background-color:#2C1F43;
            font-family: roboto-regular; 
            font-size: 15px;
        }
            
        #state{
            float:right;
        
        }
        
        .form-control{
            background:none;
            border-radius: 0px;
            border:2px solid white;
            margin-bottom: -25px !important;
            color: white;
        
        }
        .form-control:focus{
            background-color: transparent;
            caret-color: white;
            color: white;
        }

                
        .buy-now-button{
            background: transparent linear-gradient(76deg, #4B09C0 0%, #FA21FD 100%) 0% 0% no-repeat padding-box;
            border: 3px solid #FFFFFF;
            border-radius: 20px 0px;
            opacity: 1;
            text-align: center;
            font: Regular 30px/34px Europhonic;
            font-size: 20px;
            line-height: 24px;
            font-family: europhonic;
            letter-spacing: 0;
            color: #FFFFFF;
            opacity: 1;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 5px 30px;
        }

        .form-control:disabled {
            opacity: 0.5 !important;
            background: transparent;
        }

        .selected{
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
        }

    </style>

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=ENTER_YOUR_TAG_ID" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="d-none d-lg-block">
        <div id="header-desktop"></div>
        
        <div class="container" id="checkout-form-desktop">
            <div class="row">
                <div class='col-md-3'>

                </div>
                <div class='col-md-6' >
                    <div class="form" style="margin-top: 25%;">
                        
                        <div class="heading-europhonic text-white mt-5 pt-5" style="font-size: 40px; line-height: 0px;" >CHECKOUT</div>
                        <div class="form-group mt-3">
                            <label for="name-desktop" id="location">Name</label>
                            <input type="text" class="form-control mb-1" id="name-desktop" required>
                        </div>
                        <div class="form-group">
                            <label for="email-desktop" id="location">Email-Id</label>
                            <input type="email" class="form-control" id="email-desktop" style="border-radius: 0px;" style="border:3px solid white; " required>
                        </div>
                        <div class="form-group">
                            <label for="phone-desktop" id="location">Phone</label>
                            <input type="number" class="form-control" id="phone-desktop" required  >
                        </div>
                        <div class="form-group">
                            <label for="address1-desktop" id="location">Address Line 1</label>
                            <input type="text" class="form-control" id="address1-desktop" required>
                        </div>
                        <div class="form-group">
                            <label for="address2-desktop" id="location">Address Line 2</label>
                            <input type="text" class="form-control" id="address2-desktop" required >
                        </div>
                        <div class="row">
                            
                            <div class='col-md-6 pr-0'>
                                <div class="form-group">
                                    <label for="country-desktop" id="location">Country</label>
                                    <input type="text" class="form-control" id="country-desktop" required>
                                </div>
                            </div>
                                
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label for="pin-desktop" id="location">Zip Code</label>
                                    <input type="number" class="form-control" id="pin-desktop" required>
                                </div>
                            </div>
                            
                        </div>            
                    </div>
                    <hr style="width:130%; height: 2px; background-color:#FBB03B; transform: translate(-10%, 0);">
                    <div class="container">
                        <div class="form d-none" id="promo-container-desktop">
                        
                            <div class="form-group position-relative" >
                                <label for="coupon-desktop" style="font-family: roboto-regular; font-size: 15px;" class="text-white font-weight-bold">Promo Code</label>
                                <input type="text" class="form-control" id="coupon-desktop" style="width: 100%; border-bottom-right-radius: 17px;">
                                <button class="buy-now-button" style="position: absolute;right: 0px; bottom: 0px; margin-bottom: 0px; padding-top: 4px; padding-bottom: 4px;" id="coupon-apply-desktop">Ok</button>
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; color: #FA21FD !important; position: absolute; right: 0px; top: -4px;" id="promo-invalid-desktop">Promocode Invalid</h3>
                            </div>
                        </div>
                        <div class="pt-4"></div>
                        <div class="row" id="promo-success-desktop">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Promo code</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; color: #FA21FD !important;" id="product-description-desktop">Promocode Applied Successfully</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Product Name</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; opacity: 0.75;" id="product-description-desktop"><?php echo $product_description; ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Quantity</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; opacity: 0.75;">1 Unit</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Amount to Pay</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; opacity: 0.75;">$ <span id="amount-desktop"><?php echo $amount; ?></span> <span style="margin-left: 15px; color: #FA21FD; font-family: roboto-regular; font-size: 12px;" id="discount-desktop">25% off</span></h3>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3">
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <!-- <div id="paypal-button-desktop" class="" style=""></div> -->
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <img class="w-100" id="checkout-desktop" src="images/Razorpay_logo.png" style="cursor:pointer; background-color: white; padding: 10px; border-radius: 100px; width: 70% !important;">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="d-flex position-relative justify-content-center">
                        <button class="buy-now-button" id="">Check Out</button>
                        
                     

                    </div> -->
                       
                    
                </div>
                <div class='col-md-3'>
                
                </div>
            </div>
        </div>

        
        <div class="container" id="order-success-desktop">
            <div class="heading-europhonic text-white" style="font-size: 40px; line-height: 0px; padding-top: 150px;" >ORDER PLACED SUCCESSFULLY</div>
            <h3 class="para-roboto font-weight-light text-white text-left text-center pt-4" style="font-size: 18px;">Order ID <span style="margin-left: 15px; color: #FA21FD; font-family: roboto-regular; font-size: 18px;" id="order-id-desktop">#1234</span></h3>
            <div class="d-flex justify-content-center align-items-center pt-4">
                <img src="images/boxes.svg">
            
            </div>
            <h3 style="font-family: roboto-medium; font-size: 32px; color:white;" class='pt-5 text-center'>CONGRATULATIONS!</h3>
            <div class="d-flex justify-content-center align-items-center pt-2">
                <p class="para roboto text-center w-50 text-white" style="opacity:0.75"> We've received your order and our minions are preparing it for delivery. <br>Your Top Controller should reach you in a 3 Weeks time.</p>
            </div>

            <button class="buy-now-button" onclick="window.location = '/'">Back to Shop</button>
            
        </div>

        
        <div id="footer-desktop"></div>
    </div>
    
    <!-- mobile view -->

    <div class="d-lg-none">
        <div id="header-mobile"></div>

        
        <div class="container" id="checkout-form-mobile">
            <div class="row">
                <div class='col-md-3'>

                </div>
                <div class='col-md-6' >
                    <div class="form" style="margin-top: 25%;">
                        
                        <div class="heading-europhonic text-white pt-3" style="font-size: 40px; line-height: 0px;" >CHECKOUT</div>
                        <div class="form-group mt-3">
                            <label for="name-mobile" id="location">Name</label>
                            <input type="text" class="form-control mb-1" id="name-mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="email-mobile" id="location">Email-Id</label>
                            <input type="email" class="form-control" id="email-mobile" style="border-radius: 0px;" style="border:3px solid white; " required>
                        </div>
                        <div class="form-group">
                            <label for="phone-mobile" id="location">Phone</label>
                            <input type="number" class="form-control" id="phone-mobile" required >
                        </div>
                        <div class="form-group">
                            <label for="address1-mobile" id="location">Address Line 1</label>
                            <input type="text" class="form-control" id="address1-mobile" required >
                        </div>
                        <div class="form-group">
                            <label for="address2-mobile" id="location">Address Line 2</label>
                            <input type="text" class="form-control" id="address2-mobile" required  >
                        </div>
                        <div class="row">
                            
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label for="country-mobile" id="location">Country</label>
                                    <input type="text" class="form-control" id="country-mobile" required >
                                </div>
                            </div>
                                
                            <div class='col-md-6'>
                                <div class="form-group">
                                    <label for="pin-mobile" id="location">Zip Code</label>
                                    <input type="number" class="form-control" id="pin-mobile" required >
                                </div>

                            </div>
                            
                        </div>            
                    </div>
                    <hr style="width:100%; height: 2px; background-color:#FBB03B;">
                    <div class="container">
                        <div class="form d-none" id="promo-container-mobile" class="d-none">
                        
                            <div class="form-group position-relative">
                                <label for="coupon-mobile" style="font-family: roboto-regular; font-size: 15px;" class="text-white font-weight-bold">Promo Code</label>
                                <input type="text" class="form-control" id="coupon-mobile" style="width: 100%; border-bottom-right-radius: 17px;">
                                <button class="buy-now-button" style="position: absolute;right: 0px; bottom: 0px; margin-bottom: 0px; padding-top: 4px; padding-bottom: 4px;" id="coupon-apply-mobile">Ok</button>
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; color: #FA21FD !important; position: absolute; right: 0px; top: -4px;" id="promo-invalid-mobile">Promocode Invalid</h3>
                            </div>
                        </div>
                        <div class="pt-4"></div>
                        <div class="row" id="promo-success-mobile">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Promo Code</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; line-height: 20px;color: #FA21FD !important; ">Promocode Successfully Applied</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Product Name</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; opacity: 0.75; line-height: 20px;"><?php echo $product_description; ?></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Quantity</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; opacity: 0.75;">1 Unit</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-bold text-white text-left" style="font-size: 15px;">Amount to Pay</h3>
                            </div>
                            <div class="col-6">
                                <h3 class="para-roboto font-weight-light text-white text-left" style="font-size: 15px; opacity: 0.75;">$ <span id="amount-mobile"><?php echo $amount; ?></span> <span style="margin-left: 15px; color: #FA21FD; font-family: roboto-regular; font-size: 12px;" id="discount-mobile">25% off</span></h3>
                            </div>
                        </div>
                        <div class="row pt-3 pb-3">
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <!-- <div id="paypal-button-mobile" class="" style=""></div> -->
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <img class="w-100" id="checkout-mobile" src="images/Razorpay_logo.png" style="cursor:pointer; background-color: white; padding: 10px; border-radius: 100px; width: 70% !important;">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="d-flex position-relative justify-content-center">
                        <button class="buy-now-button" id="checkout-mobile">Check Out</button>
                        

                    </div> -->
                        
                    

                    
                </div>
                <div class='col-md-3'>
                
                </div>
            </div>
        </div>

        <div class="container" id="order-success-mobile">
            <div class="heading-europhonic text-white" style="font-size: 24px; line-height: 50px; padding-top: 100px;" >ORDER PLACED SUCCESSFULLY</div>
            <h3 class="para-roboto font-weight-light text-white text-left text-center" style="font-size: 16px;">Order ID <span style="margin-left: 15px; color: #FA21FD; font-family: roboto-regular; font-size: 16px;" id="order-id-mobile">#1234</span></h3>
            <div class="d-flex justify-content-center align-items-center pt-4">
                <img src="images/boxes.svg" style="padding-left:30px; padding-right: 30px;" class="w-100">
            
            </div>
            <h3 style="font-family: roboto-medium; font-size: 20px; color:white;" class='pt-5 text-center'>CONGRATULATIONS!</h3>
            <div class="d-flex justify-content-center align-items-center pt-2">
                <p class="para roboto text-center text-white" style="opacity:0.75; font-size: 16px;"> We've received your order and our minions are preparing it for delivery. <br>Your Top Controller should reach you in a 3 Weeks time.</p>
            </div>

            <button class="buy-now-button" onclick="window.location = '/'">Back to Shop</button>
            
        </div>

        

        <!-- footer -->
        <div id="footer-mobile"></div>

    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script type="text/javascript">

        // script for drawer
        $("#header-desktop").load('templates/header-desktop.html');
        $("#header-mobile").load('templates/header-mobile.html');
        $("#footer-desktop").load('templates/footer-desktop.html');
        $("#footer-mobile").load('templates/footer-mobile.html');

        // variable definition for desktop
        var coupon_code_desktop = "";
        var hasCouponApplied_desktop = false;
        var amount_desktop = <?php echo $amount; ?>;
        $("#promo-success-desktop").css('display','none');
        $("#promo-invalid-desktop").css('display','none');
        $("#order-success-desktop").css('display','none');

        // script to check coupon code for desktop
        $("#coupon-apply-desktop").on("click",function(){
            var coupon_code_desktop = $("#coupon-desktop").val();

            $.ajax({
                type:'POST',
                url:'php/check-coupon-code.php',
                dataType: "json",
                data:{
                    type:'check-coupon',
                    coupon: coupon_code_desktop
                },
                success:function(data){
                    if(data.status == 'invalid'){
                        console.log("invalid");
                        // $('#err-coupon-invalid').slideDown('slow');
                        // alert('invalid coupon');
                        $("#promo-invalid-desktop").css('display','block');

                    }else{
                        // alert('coupon valid');
                        console.log(data.status);
                        var discount = data.status;
                        // coupon_code = coupon;
                        hasCouponApplied_desktop = true;
                        $("#coupon-desktop").attr('disabled','true');
                        $("#coupon-apply-desktop").attr('disabled','true');
                        // count=1;
                        // $('#ajaxsuccess').slideDown('slow');

                        //setPrice(discount,calculatedPrice);
                        amount_desktop = <?php echo $amount; ?>;
                        amount_desktop = ((1-(discount*0.01))*amount_desktop).toFixed(2);
                        $("#amount-desktop").html(amount_desktop);
                        $("#discount-desktop").html(discount + '% off');
                        $("#promo-container-desktop").css('display','none');
                        $("#promo-success-desktop").css('display','flex');
                        $("#promo-invalid-desktop").css('display','none');
                        
                    } 
                }
            });
        });
        
        

        // script for checkout of desktop
        $("#checkout-desktop").on("click",function(){
            $.ajax({
                type:'POST',
                url:'php/checkout-form.php',
                dataType: "json",
                data:{
                    name : $("#name-desktop").val(),
                    email : $("#email-desktop").val(),
                    phone : $("#phone-desktop").val(),
                    address1 : $("#address1-desktop").val(),
                    address2 : $("#address2-desktop").val(),
                    country : $("#country-desktop").val(),
                    pin : $("#pin-desktop").val(),
                    coupon : $("#coupon-desktop").val(),
                    product_name : '<?php echo $product_name; ?>',
                    amount : amount_desktop,
                },
                success:function(data){
                    if(data.status == 201){
                        console.log(amount_desktop*100);
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({'event': '<?php echo $product_name; ?> checkout'});
                        // alert("checked out");
                        var order_id = data.id;
                        var options = {    
                            "key": "<?php echo $razor_api_key; ?>", // Enter the Key ID generated from the Dashboard    
                            "amount": parseInt(amount_desktop*100), // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                            "currency": "USD",    
                            "name": "The Top Controller",    
                            "description": '<?php echo $product_description; ?>',    
                            "image": "images/top_controller_fav.png",    
                            //"order_id": "order_9A33XWu170gUtm",//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order). Refer the Checkout form table given below    
                            "handler": function (response){
                                // alert(response.razorpay_payment_id);
                                var razorpay_payment_id = response.razorpay_payment_id;
                                console.log(response);
                                $.ajax({
                                    type:'POST',
                                    url:'php/payment-success.php',
                                    dataType: "json",
                                    data:{
                                        id: order_id,
                                        product_name : '<?php echo $product_name; ?>',
                                        razorpay_payment_id : razorpay_payment_id,
                                        amount : amount_desktop,
                                        email : $("#email-desktop").val()
                                    },
                                    success:function(data){
                                        if(data.status == 'ok'){
                                            //window.location = "thankyou.html";
                                            //alert("Your payment has been successful");
                                            $("#checkout-form-desktop").css('display','none');
                                            $("#order-success-desktop").css('display','block');
                                            $("#order-id-desktop").html('#'+String(order_id));
                                            window.scrollTo(0,0);
                                            window.dataLayer = window.dataLayer || [];
                                            window.dataLayer.push({'event': '<?php echo $product_name; ?>'});

                                        }else{
                                            console.log("error");
                                        } 
                                    }
                                });
                        
                                
                            },"prefill": {        
                                "name": $("#name-desktop").val(),        
                                "email": $("#email-desktop").val(),
                                "contact": $("#phone-desktop").val()
                            },"notes": {        
                                "address1": $("#address1-desktop").val(),
                                "address2": $("#address2-desktop").val(),
                                "country": $("#country-desktop").val(),
                                "pin": $("#pin-desktop").val(),
                                "coupon": $("#coupon-desktop").val(),
                                "product_name": '<?php echo $product_name; ?>'

                            },"theme": {        
                                "color": "#2C1F43"    
                            }
                        };

                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        
                        
                    }else if(data.status == 601){
                        console.log(data.error);
                        // alert("problem with query");
                    }else{
                        
                    } 
                }
            });
        });

        //script for paypal desktop
        var order_id_desktop = 01;
        paypal.Button.render({
            // Configure environment
            env: '<?php echo $env; ?>',
            client: {
                sandbox: '<?php echo $paypal_sandbox_key;?>',
                production: '<?php echo $paypal_production_key;?>'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'medium',
                color: 'gold',
                shape: 'pill',
                label: 'pay',
                tagline: 'false',
                height: 50
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {

                $.ajax({
                type:'POST',
                url:'php/checkout-form.php',
                dataType: "json",
                data:{
                    name : $("#name-desktop").val(),
                    email : $("#email-desktop").val(),
                    phone : $("#phone-desktop").val(),
                    address1 : $("#address1-desktop").val(),
                    address2 : $("#address2-desktop").val(),
                    country : $("#country-desktop").val(),
                    pin : $("#pin-desktop").val(),
                    coupon : $("#coupon-desktop").val(),
                    product_name : '<?php echo $product_name; ?>',
                    amount : amount_desktop,
                },
                success:function(data){
                    if(data.status == 201){
                        console.log(amount_desktop*100);
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({'event': '<?php echo $product_name; ?> checkout paypal'});
                        // alert("checked out");
                        order_id_desktop = data.id;
                        
                        
                        
                    }else if(data.status == 601){
                        console.log(data.error);
                        // alert("problem with query");
                    }else{
                        
                    } 
                }
            });

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: amount_desktop,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    // window.alert('Thank you for your purchase!');
                    $.ajax({
                        type:'POST',
                        url:'php/payment-success.php',
                        dataType: "json",
                        data:{
                            id: order_id_desktop,
                            product_name : '<?php echo $product_name; ?>',
                            razorpay_payment_id : 'paypal',
                            amount : amount_desktop,
                            email : $("#email-desktop").val()
                        },
                        success:function(data){
                            if(data.status == 'ok'){
                                //window.location = "thankyou.html";
                                //alert("Your payment has been successful");
                                $("#checkout-form-desktop").css('display','none');
                                $("#order-success-desktop").css('display','block');
                                $("#order-id-desktop").html('#'+String(order_id_desktop));
                                window.scrollTo(0,0);
                                window.dataLayer = window.dataLayer || [];
                                window.dataLayer.push({'event': '<?php echo $product_name; ?> paypal'});

                            }else{
                                console.log("error");
                            } 
                        }
                    });
                });
            }
        }, '#paypal-button-desktop');

        // variable definition for mobile
        var coupon_code_mobile = "";
        var hasCouponApplied_mobile = false;
        var amount_mobile = <?php echo $amount; ?>;
        $("#promo-success-mobile").css('display','none');
        $("#promo-invalid-mobile").css('display','none');
        $("#order-success-mobile").css('display','none');

        // script to check coupon code for mobile
        $("#coupon-apply-mobile").on("click",function(){
            var coupon_code_mobile = $("#coupon-mobile").val();

            $.ajax({
                type:'POST',
                url:'php/check-coupon-code.php',
                dataType: "json",
                data:{
                    type:'check-coupon',
                    coupon: coupon_code_mobile
                },
                success:function(data){
                    if(data.status == 'invalid'){
                        console.log("invalid");
                        // $('#err-coupon-invalid').slideDown('slow');
                        // alert('invalid coupon');
                        $("#promo-invalid-mobile").css('display','block');
                    }else{
                        // alert('coupon valid');
                        console.log(data.status);
                        var discount = data.status;
                        // coupon_code = coupon;
                        hasCouponApplied_mobile = true;
                        $("#coupon-mobile").attr('disabled','true');
                        $("#coupon-apply-mobile").attr('disabled','true');
                        // count=1;
                        // $('#ajaxsuccess').slideDown('slow');

                        //setPrice(discount,calculatedPrice);
                        amount_mobile = <?php echo $amount; ?>;
                        amount_mobile = ((1-(discount*0.01))*amount_mobile).toFixed(2);
                        $("#amount-mobile").html(amount_mobile);
                        $("#discount-mobile").html(discount + '% off');
                        $("#promo-container-mobile").css('display','none');
                        $("#promo-success-mobile").css('display','flex');
                        $("#promo-invalid-mobile").css('display','none');
                        
                    } 
                }
            });
        });
        
        
        // script for checkout of mobile
        $("#checkout-mobile").on("click",function(){
            $.ajax({
                type:'POST',
                url:'php/checkout-form.php',
                dataType: "json",
                data:{
                    name : $("#name-mobile").val(),
                    email : $("#email-mobile").val(),
                    phone : $("#phone-mobile").val(),
                    address1 : $("#address1-mobile").val(),
                    address2 : $("#address2-mobile").val(),
                    country : $("#country-mobile").val(),
                    pin : $("#pin-mobile").val(),
                    coupon : $("#coupon-mobile").val(),
                    product_name : '<?php echo $product_name; ?>',
                    amount : amount_mobile
                    
                },
                success:function(data){
                    if(data.status == 201){
                        console.log(amount_mobile*100);
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({'event': '<?php echo $product_name; ?> checkout'});
                        // alert("checked out");
                        var order_id = data.id;
                        var options = {    
                            "key": "<?php echo $razor_api_key; ?>", // Enter the Key ID generated from the Dashboard    
                            "amount": parseInt(amount_mobile*100), // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                            "currency": "USD",    
                            "name": "The Top Controller",    
                            "description": '<?php echo $product_description; ?>',    
                            "image": "images/top_controller_fav.png",    
                            //"order_id": "order_9A33XWu170gUtm",//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order). Refer the Checkout form table given below    
                            "handler": function (response){
                                // alert(response.razorpay_payment_id);
                                var razorpay_payment_id = response.razorpay_payment_id;
                                console.log(response);
                                $.ajax({
                                    type:'POST',
                                    url:'php/payment-success.php',
                                    dataType: "json",
                                    data:{
                                        id: order_id,
                                        product_name : '<?php echo $product_name; ?>',
                                        razorpay_payment_id : razorpay_payment_id,
                                        amount : amount_desktop,
                                        email : $("#email-mobile").val()
                                    },
                                    success:function(data){
                                        if(data.status == 'ok'){
                                            //window.location = "thankyou.html";
                                            // alert("Your payment has been successful");
                                            $("#checkout-form-mobile").css('display','none');
                                            $("#order-success-mobile").css('display','block');
                                            $("#order-id-mobile").html('#'+String(order_id));
                                            window.scrollTo(0,0);
                                            window.dataLayer = window.dataLayer || [];
                                            window.dataLayer.push({'event': '<?php echo $product_name; ?>'});
                                        }else{
                                            console.log("error");
                                        } 
                                    }
                                });
                        
                                
                            },"prefill": {        
                                "name": $("#name-mobile").val(),        
                                "email": $("#email-mobile").val(),
                                "contact": $("#phone-mobile").val()
                            },"notes": {        
                                "address1": $("#address1-mobile").val(),
                                "address2": $("#address2-mobile").val(),
                                "country": $("#country-mobile").val(),
                                "pin": $("#pin-mobile").val(),
                                "coupon": $("#coupon-mobile").val(),
                                "product_name": '<?php echo $product_name; ?>'

                            },"theme": {        
                                "color": "#2C1F43"    
                            }
                        };

                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                    }else if(data.status == 601){
                        console.log(data.error);
                        // alert("problem with query");
                    }else{
                        
                    } 
                }
            });
        });

        //script for paypal mobile
        var order_id_mobile = 01;
        paypal.Button.render({
            // Configure environment
            env: '<?php echo $env; ?>',
            client: {
                sandbox: '<?php echo $paypal_sandbox_key;?>',
                production: '<?php echo $paypal_production_key;?>'
            },
            // Customize button (optional)
            locale: 'en_US',
            style: {
                size: 'small',
                color: 'gold',
                shape: 'pill',
                label: 'pay',
                tagline: 'false',
                height: 30
            },

            // Enable Pay Now checkout flow (optional)
            commit: true,

            // Set up a payment
            payment: function(data, actions) {

                $.ajax({
                type:'POST',
                url:'php/checkout-form.php',
                dataType: "json",
                data:{
                    name : $("#name-mobile").val(),
                    email : $("#email-mobile").val(),
                    phone : $("#phone-mobile").val(),
                    address1 : $("#address1-mobile").val(),
                    address2 : $("#address2-mobile").val(),
                    country : $("#country-mobile").val(),
                    pin : $("#pin-mobile").val(),
                    coupon : $("#coupon-mobile").val(),
                    product_name : '<?php echo $product_name; ?>',
                    amount : amount_mobile,
                },
                success:function(data){
                    if(data.status == 201){
                        console.log(amount_mobile*100);
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({'event': '<?php echo $product_name; ?> checkout paypal'});
                        // alert("checked out");
                        order_id_mobile = data.id;
                        
                        
                        
                    }else if(data.status == 601){
                        console.log(data.error);
                        // alert("problem with query");
                    }else{
                        
                    } 
                }
            });

                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: amount_mobile,
                            currency: 'USD'
                        }
                    }]
                });
            },
            // Execute the payment
            onAuthorize: function(data, actions) {
                return actions.payment.execute().then(function() {
                    // Show a confirmation message to the buyer
                    // window.alert('Thank you for your purchase!');
                    $.ajax({
                        type:'POST',
                        url:'php/payment-success.php',
                        dataType: "json",
                        data:{
                            id: order_id_mobile,
                            product_name : '<?php echo $product_name; ?>',
                            razorpay_payment_id : 'paypal',
                            amount : amount_mobile,
                            email : $("#email-mobile").val()
                        },
                        success:function(data){
                            if(data.status == 'ok'){
                                //window.location = "thankyou.html";
                                //alert("Your payment has been successful");
                                $("#checkout-form-mobile").css('display','none');
                                $("#order-success-mobile").css('display','block');
                                $("#order-id-mobile").html('#'+String(order_id_mobile));
                                window.scrollTo(0,0);
                                window.dataLayer = window.dataLayer || [];
                                window.dataLayer.push({'event': '<?php echo $product_name; ?> paypal'});

                            }else{
                                console.log("error");
                            } 
                        }
                    });
                });
            }
        }, '#paypal-button-mobile');


    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e1c53e427773e0d832d4481/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>