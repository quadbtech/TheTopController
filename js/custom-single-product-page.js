
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
// console.log(params);
var designNameUrl = params.designName;
var productNameUrl = params.productName;


//desktop code goes here

if (window.innerWidth >= 960) {

    //load templates
    $("#header-desktop-1").load('../templates/header-desktop-1.html');
    $("#products-desktop-1").load('../templates/products-desktop-1.html');
    $("#how-to-install-desktop-1").load('../templates/how-to-install-desktop-1.html');
    $("#footer-desktop-1").load('../templates/footer-desktop-1.html');

    function imageZoom(imgID, resultID) {
        var img, lens, result, cx, cy;
        img = document.getElementById(imgID);
        result = document.getElementById(resultID);
        /*create lens:*/
        lens = document.createElement("DIV");
        lens.setAttribute("class", "img-zoom-lens");
        /*insert lens:*/
        img.parentElement.insertBefore(lens, img);
        /*calculate the ratio between result DIV and lens:*/
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        /*set background properties for the result DIV:*/
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
        /*execute a function when someone moves the cursor over the image, or the lens:*/
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /*and also for touch screens:*/
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);
        function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
            if (x < 0) { x = 0; }
            if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
            if (y < 0) { y = 0; }
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
        }
        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return { x: x, y: y };
        }
    }

    $("#large-image-container").hover(function () {
        $("#myresult").css('display', 'block');
        imageZoom('largeImage', 'myresult');
    }, function () {

        $("#myresult").css('display', 'none');
    });


    //FOR ABOUT SLIDER
    //function to move slides by default after every five seconds
    function timerSlider2() {
        $('#about-images > img:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-images');

        $('#about-heading > h1:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-heading');

        $('#about-author > h2:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-author');

    }

    //default running of slides- calling above function
    var interval2 = setInterval(timerSlider2, 5000);

    //right arrow clicked on header slider
    $("#about-right").on('click', function () {
        // console.log("click");
        clearInterval(interval2);

        $('#about-images > img:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-images');

        $('#about-heading > h1:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-heading');

        $('#about-author > h2:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-author');

        interval2 = setInterval(timerSlider2, 5000);

    });

    //left arrow clicked on slider
    $("#about-left").on('click', function () {
        // console.log("click");
        clearInterval(interval2);

        $('#about-images > img:first')
            .fadeOut(1000)
        $('#about-images img:last')
            .fadeIn(1000)
            .prependTo('#about-images');

        $('#about-heading > h1:first')
            .fadeOut(1000)
        $('#about-heading h1:last')
            .fadeIn(1000)
            .prependTo('#about-heading');

        $('#about-author > h2:first')
            .fadeOut(1000)
        $('#about-author h2:last')
            .fadeIn(1000)
            .prependTo('#about-author');




        interval2 = setInterval(timerSlider2, 5000); lo

    });

    var discountPrice = "";
    var priceDollar = discountPrice;
    var result = {};
    var images1 = {};
    var images2 = {};
    var images3 = {};
    var images4 = {};

    var largeImage = {};
    var thumbImage1 = {};
    var thumbImage2 = {};
    var thumbImage3 = {};
    var itemArray = [];

    if (params.productName == 'xbox-one-controller' || params.productName == 'xbox-one-s-controller' || params.productName == 'xbox-one-x-controller' || params.productName == 'xbox-one-elite-controller' || params.productName == 'xbox-one-elite-wireless-controller' || params.productName == 'xbox-one-console' || params.productName == 'xbox-one-s-console' || params.productName == 'xbox-one-x-console' || params.productName == 'xbox-one-bundle' || params.productName == 'xbox-one-s-bundle' || params.productName == 'xbox-one-x-bundle') {
        $.ajax({
            type: 'POST',
            url: '../php/getDataXboxController.php',
            'async': false,
            dataType: "json",
            data: {
                get_data: 'selectedProduct',
                "designName": designNameUrl,
                "productName": productNameUrl
            },
            success: function (data) {
                if (data.status == 'ok') {
                    result = data.result;
                    // console.log(result);                    

                    $("#designNameHtml").html(result.designNameHtml);
                    $("#productName").html(result.productName);
                    $("#priceDollar").html(result.priceDollar);
                    $("#priceCents").html(result.priceCents);
                    $("#shortDescription").html(result.shortDescription);
                    $("#specification").html(result.specification);
                    // $("#largeImage").attr("src",result.productImageLoc1);
                    // $("#thumbImage1").attr("src",result.productImageThumbLoc2);
                    // $("#thumbImage2").attr("src",result.productImageThumbLoc3);
                    // $("#thumbImage3").attr("src",result.productImageThumbLoc4); 

                    images1 = {
                        "productImageLoc": result.productImageLoc1,
                        "productImageThumbLoc": result.productImageThumbLoc1
                    };
                    images2 = {
                        "productImageLoc": result.productImageLoc2,
                        "productImageThumbLoc": result.productImageThumbLoc2
                    };
                    images3 = {
                        "productImageLoc": result.productImageLoc3,
                        "productImageThumbLoc": result.productImageThumbLoc3
                    };
                    images4 = {
                        "productImageLoc": result.productImageLoc4,
                        "productImageThumbLoc": result.productImageThumbLoc4
                    };



                    largeImage = images1;
                    thumbImage1 = images2;
                    thumbImage2 = images3;
                    thumbImage3 = images4;



                    $('#largeImage').attr('src', largeImage.productImageLoc);

                    $('#thumbImage1').attr('src', thumbImage1.productImageThumbLoc);

                    $('#thumbImage2').attr('src', thumbImage2.productImageThumbLoc);

                    $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);


                    // product 1
                    $("#ap-image-desktop-1").attr('src', data.product1.productImage);
                    $("#ap-name-desktop-1").html(data.product1.productName + ' skin');
                    $("#ap-dollar-desktop-1").html(data.product1.priceDollar);
                    $("#ap-cents-desktop-1").html(data.product1.priceCents);
                    $("#ap-button-desktop-1").attr('href', data.product1.productUrl);

                    // product 2
                    $("#ap-image-desktop-2").attr('src', data.product2.productImage);
                    $("#ap-name-desktop-2").html(data.product2.productName + ' skin');
                    $("#ap-dollar-desktop-2").html(data.product2.priceDollar);
                    $("#ap-cents-desktop-2").html(data.product2.priceCents);
                    $("#ap-button-desktop-2").attr('href', data.product2.productUrl);

                    // product 3
                    $("#ap-image-desktop-3").attr('src', data.product3.productImage);
                    $("#ap-name-desktop-3").html(data.product3.productName + ' skin');
                    $("#ap-dollar-desktop-3").html(data.product3.priceDollar);
                    $("#ap-cents-desktop-3").html(data.product3.priceCents);
                    $("#ap-button-desktop-3").attr('href', data.product3.productUrl);

                    // product 4
                    $("#ap-image-desktop-4").attr('src', data.product4.productImage);
                    $("#ap-name-desktop-4").html(data.product4.productName + ' skin');
                    $("#ap-dollar-desktop-4").html(data.product4.priceDollar);
                    $("#ap-cents-desktop-4").html(data.product4.priceCents);
                    $("#ap-button-desktop-4").attr('href', data.product4.productUrl);

                    // Initiate zoom effect:
                    imageZoom("largeImage", "myresult");


                    $("#loader").addClass('slide');

                } else {
                    // console.log("not okay");
                }
            }
        });

    } else {
        $.ajax({
            type: 'POST',
            url: '../php/getDataPlayStationController.php',
            'async': false,
            dataType: "json",
            data: {
                get_data: 'selectedProduct',
                "designName": designNameUrl,
                "productName": productNameUrl
            },
            success: function (data) {
                if (data.status == 'ok') {
                    result = data.result;
                    // console.log(result);                    

                    $("#designNameHtml").html(result.designNameHtml);
                    $("#productName").html(result.productName);
                    $("#priceDollar").html(result.priceDollar);
                    $("#priceCents").html(result.priceCents);
                    $("#shortDescription").html(result.shortDescription);
                    $("#specification").html(result.specification);
                    // $("#largeImage").attr("src",result.productImageLoc1);
                    // $("#thumbImage1").attr("src",result.productImageThumbLoc2);
                    // $("#thumbImage2").attr("src",result.productImageThumbLoc3);
                    // $("#thumbImage3").attr("src",result.productImageThumbLoc4); 

                    images1 = {
                        "productImageLoc": result.productImageLoc1,
                        "productImageThumbLoc": result.productImageThumbLoc1
                    };
                    images2 = {
                        "productImageLoc": result.productImageLoc2,
                        "productImageThumbLoc": result.productImageThumbLoc2
                    };
                    images3 = {
                        "productImageLoc": result.productImageLoc3,
                        "productImageThumbLoc": result.productImageThumbLoc3
                    };
                    images4 = {
                        "productImageLoc": result.productImageLoc4,
                        "productImageThumbLoc": result.productImageThumbLoc4
                    };



                    largeImage = images1;
                    thumbImage1 = images2;
                    thumbImage2 = images3;
                    thumbImage3 = images4;



                    $('#largeImage').attr('src', largeImage.productImageLoc);

                    $('#thumbImage1').attr('src', thumbImage1.productImageThumbLoc);

                    $('#thumbImage2').attr('src', thumbImage2.productImageThumbLoc);

                    $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);


                    // product 1
                    $("#ap-image-desktop-1").attr('src', data.product1.productImage);
                    $("#ap-name-desktop-1").html(data.product1.productName + ' skin');
                    $("#ap-dollar-desktop-1").html(data.product1.priceDollar);
                    $("#ap-cents-desktop-1").html(data.product1.priceCents);
                    $("#ap-button-desktop-1").attr('href', data.product1.productUrl);

                    // product 2
                    $("#ap-image-desktop-2").attr('src', data.product2.productImage);
                    $("#ap-name-desktop-2").html(data.product2.productName + ' skin');
                    $("#ap-dollar-desktop-2").html(data.product2.priceDollar);
                    $("#ap-cents-desktop-2").html(data.product2.priceCents);
                    $("#ap-button-desktop-2").attr('href', data.product2.productUrl);

                    // product 3
                    $("#ap-image-desktop-3").attr('src', data.product3.productImage);
                    $("#ap-name-desktop-3").html(data.product3.productName + ' skin');
                    $("#ap-dollar-desktop-3").html(data.product3.priceDollar);
                    $("#ap-cents-desktop-3").html(data.product3.priceCents);
                    $("#ap-button-desktop-3").attr('href', data.product3.productUrl);

                    // product 4
                    $("#ap-image-desktop-4").attr('src', data.product4.productImage);
                    $("#ap-name-desktop-4").html(data.product4.productName + ' skin');
                    $("#ap-dollar-desktop-4").html(data.product4.priceDollar);
                    $("#ap-cents-desktop-4").html(data.product4.priceCents);
                    $("#ap-button-desktop-4").attr('href', data.product4.productUrl);

                    // Initiate zoom effect:
                    imageZoom("largeImage", "myresult");


                    $("#loader").addClass('slide');

                } else {
                    // console.log("not okay");
                }
            }
        });

    }

    var amount = {
        priceDollar: result.priceDollar,
        priceCents: result.priceCents

    }
    // discount
    $.ajax({
        type: 'POST',
        url: '../php/discount.php',
        'async': false,
        dataType: "json",
        data: {
            "designName": designNameUrl,
            "productName": productNameUrl
        },
        success: function (data) {
            if (data.status == '101') {
                for (var i = 0; i < data.discountRequests.length; i++) {
                    // console.log(data.discountRequests[i].discountPrice);
                    $(".ribbon").css("display", "block");
                    $(".discountPrice").html(data.discountRequests[i].discountPrice);
                    amount.priceDollar = data.discountRequests[i].discountPrice;
                }
            } else {
            }
        }
    });

    // 4-images Slider

    function changeImage(click_id) {

        if (click_id == 'thumbImage1') {

            var temp1 = {};
            temp1 = largeImage;
            largeImage = thumbImage1;
            thumbImage1 = thumbImage2;
            thumbImage2 = thumbImage3;
            thumbImage3 = temp1;

            $('#largeImage').attr('src', largeImage.productImageLoc);
            $('#thumbImage1').attr('src', thumbImage1.productImageThumbLoc);
            $('#thumbImage2').attr('src', thumbImage2.productImageThumbLoc);
            $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);
        }
        else if (click_id == 'thumbImage2') {
            //console.log(click_id);
            var temp1 = {};
            temp1 = largeImage;
            largeImage = thumbImage2;
            thumbImage2 = thumbImage3;
            thumbImage3 = temp1;

            $('#largeImage').attr('src', largeImage.productImageLoc);
            $('#thumbImage2').attr('src', thumbImage2.productImageThumbLoc);
            $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);
        }
        else if (click_id == 'thumbImage3') {
            // console.log(click_id);
            var temp1 = {};
            temp1 = largeImage;
            largeImage = thumbImage3;
            thumbImage3 = temp1;

            $('#largeImage').attr('src', largeImage.productImageLoc);
            $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);
        }
        else {
            // console.log(result.productImageLoc2);
        }

    }




    //script for paypal desktop
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
            production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'medium',
            color: 'gold',
            shape: 'pill',
            label: 'pay',
            tagline: 'false',
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function (data, actions) {
            fbq('track', 'InitiateCheckout', {
                value: String(amount.priceDollar) + '.' + String(amount.priceCents),
                currency: 'USD',
                product_group: result.designName,
                product: result.productName,
            });
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'InitiateCheckout',
                'design': result.designName,
                'product': result.productName,
                'value': String(amount.priceDollar) + '.' + String(amount.priceCents)
            });
            var timeOver = getCookie('timeOver');
            if (timeOver == 'true') {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: String(amount.priceDollar) + '.' + String(amount.priceCents),
                            currency: 'USD',
                            // details: {
                            //     subtotal: String(result.priceDollar) + '.' + String(result.priceCents),
                            //     tax: '0.00',
                            //     shipping: '0.00',
                            //     handling_fee: '0.00',
                            //     shipping_discount: '0.00',
                            //     insurance: '0.00'
                            // }
                        },
                        description: 'The payment transaction description.',
                        // custom: '90048630024435',
                        //invoice_number: '12345', Insert a unique invoice number
                        // payment_options: {
                        //     allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
                        // },
                        // soft_descriptor: 'ECHI5786786',
                        item_list: {
                            items: [
                                {
                                    name: result.designName + ' - ' + result.productName + ' skin',
                                    description: 'Customized ' + result.productName + ' skin - ' + result.designName,
                                    quantity: '1',
                                    price: String(amount.priceDollar) + '.' + String(amount.priceCents),
                                    tax: '0',
                                    sku: result.sku,
                                    currency: 'USD'
                                }
                            ],
                            // shipping_address: {
                            //     recipient_name: 'Brian Robinson',
                            //     line1: '4th Floor',
                            //     line2: 'Unit #34',
                            //     city: 'San Jose',
                            //     country_code: 'US',
                            //     postal_code: '95131',
                            //     phone: '011862212345678',
                            //     state: 'CA'
                            // }
                        }
                    }],
                    note_to_payer: 'Contact us at support@thetopcontroller.com for any order related queries.'
                });
            } else {
                return actions.payment.create({
                    transactions: [{
                        amount: {
                            total: String(result.priceDollar - 5) + '.' + String(result.priceCents),
                            currency: 'USD',
                            details: {
                                subtotal: String(result.priceDollar) + '.' + String(result.priceCents),
                                tax: '0.00',
                                shipping: '0.00',
                                handling_fee: '0.00',
                                discount: '5.00',
                                insurance: '0.00'
                            }
                        },
                        description: 'The payment transaction description.',
                        // custom: '90048630024435',
                        //invoice_number: '12345', Insert a unique invoice number
                        // payment_options: {
                        //     allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
                        // },
                        // soft_descriptor: 'ECHI5786786',
                        item_list: {
                            items: [
                                {
                                    name: result.designName + ' - ' + result.productName + ' skin',
                                    description: 'Customized ' + result.productName + ' skin - ' + result.designName,
                                    quantity: '1',
                                    price: String(result.priceDollar) + '.' + String(result.priceCents),
                                    tax: '0',
                                    sku: result.sku,
                                    currency: 'USD'
                                }
                            ],
                            // shipping_address: {
                            //     recipient_name: 'Brian Robinson',
                            //     line1: '4th Floor',
                            //     line2: 'Unit #34',
                            //     city: 'San Jose',
                            //     country_code: 'US',
                            //     postal_code: '95131',
                            //     phone: '011862212345678',
                            //     state: 'CA'
                            // }
                        }
                    }],
                    note_to_payer: 'Contact us at support@thetopcontroller.com for any order related queries.'
                });
            }


        },
        // Execute the payment
        onAuthorize: function (data, actions) {
            return actions.payment.execute().then(function (e) {
                // Show a confirmation message to the buyer
                // window.alert('Thank you for your purchase!');
                // console.log(e);
                // console.log(JSON.stringify(e));
                $("#loader").removeClass('slide');
                var resultArray = [];
                result['quantity'] = 1;
                resultArray.push(result);
                fbq('track', 'Purchase', {
                    value: e.transactions[0].amount.total,
                    currency: 'USD',
                    product_group: result.designName,
                    product: result.productName,
                });
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'Purchase',
                    'design': result.designName,
                    'product': result.productName,
                    'value': e.transactions[0].amount.total
                });
                $.ajax({
                    type: 'POST',
                    url: '../php/payment-success.php',
                    dataType: "json",
                    data: {
                        items: JSON.stringify(resultArray),
                        paypalPayId: e.id,
                        payerInfo: JSON.stringify(e.payer.payer_info),
                        shippingAddress: JSON.stringify(e.payer.payer_info.shipping_address),
                        amount: e.transactions[0].amount.total,
                        object: JSON.stringify(e)
                    },
                    success: function (data) {
                        if (data.status == 'ok') {

                            window.location = "thankyou?orderId=" + data.id;
                            // alert("Your payment has been successful");
                            // console.log(data);
                            // $("#checkout-form-desktop").css('display','none');
                            // $("#order-success-desktop").css('display','block');
                            // $("#order-id-desktop").html('#'+String(order_id_desktop));
                            // window.scrollTo(0,0);
                            // window.dataLayer = window.dataLayer || [];
                            // window.dataLayer.push({'event': '<?php echo $product_name; ?> paypal'});

                        } else {
                            // console.log("error");
                            $("#loader").addClass('slide');
                        }
                    }
                });
            });
        },

        onCancel: function (data, actions) {
            // Show a cancel page or return to cart
        },

        onError: function (err) {
            // Show an error page here, when an error occurs
        }

    }, '#paypal-button-desktop');


    // cookies get set and erase code
    function setCookie1(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
        // console.log( name + "=" + (value || "")  + expires + "; path=/");
    }
    function getCookie1(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    function eraseCookie1(name) {
        document.cookie = name + '=; Max-Age=-99999999;';
    }

    // add to cart desktop clicked
    var alreadyAdded = false;
    var count = 0;
    var cart = JSON.parse(getCookie1('cart'));
    // console.log('cart',cart);
    // console.log('result',result);
    if (cart != null) {
        alreadyAdded = false;
        for (var i = 0; i < cart.length; i++) {
            if (cart[i].designName == result.designName && cart[i].productName == result.productName) {
                alreadyAdded = true;
                $("#add-to-cart-desktop").css('display', 'none');
                $("#product-added-to-cart-desktop").css('display', 'block');
                break;
            }
        }
        if (alreadyAdded == false) {
            $("#add-to-cart-desktop").on("click", function () {
                // console.log('add to cart fired');
                if (count == 0) {
                    var edittedResult = {
                        designName: result.designName,
                        productName: result.productName,
                        productImage: result.productImage,
                        priceDollar: amount.priceDollar,
                        priceCents: amount.priceCents,
                        sku: result.sku

                    }
                    cart.push(edittedResult);
                    setCookie1('cart', JSON.stringify(cart), 7);
                    $("#add-to-cart-message-desktop").css('display', 'flex');

                    fbq('track', 'AddToCart', {
                        value: String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents),
                        currency: 'USD',
                        product_group: edittedResult.designName,
                        product: edittedResult.productName,
                    });
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event': 'AddToCart',
                        'design': edittedResult.designName,
                        'product': edittedResult.productName,
                        'value': String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents)
                    });

                    $("#add-to-cart-desktop").css('display', 'none');
                    $("#product-added-to-cart-desktop").css('display', 'block');

                    // change cart header
                    var cart1 = JSON.parse(getCookie('cart'));
                    if (cart1 == null) {
                        $("#cart-message-desktop").html('1');
                    } else {
                        $("#cart-message-desktop").html(String(cart1.length));
                    }
                }
                count = count + 1;


            });
        } else {
            $("#add-to-cart-message-desktop").css('display', 'flex');
        }

    } else {
        var count1 = 0;
        $("#add-to-cart-desktop").on("click", function () {
            // console.log('add to cart fired');
            if (count1 == 0) {
                var newCart = [];
                var edittedResult = {
                    designName: result.designName,
                    productName: result.productName,
                    productImage: result.productImage,
                    priceDollar: result.priceDollar,
                    priceCents: result.priceCents,
                    sku: result.sku
                }
                newCart.push(edittedResult);
                setCookie1('cart', JSON.stringify(newCart), 7);
                $("#add-to-cart-message-desktop").css('display', 'flex');

                fbq('track', 'AddToCart', {
                    value: String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents),
                    currency: 'USD',
                    product_group: edittedResult.designName,
                    product: edittedResult.productName,
                });
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'AddToCart',
                    'design': edittedResult.designName,
                    'product': edittedResult.productName,
                    'value': String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents)
                });
                $("#add-to-cart-desktop").css('display', 'none');
                $("#product-added-to-cart-desktop").css('display', 'block');

                // change cart header
                // change cart header
                var cart1 = JSON.parse(getCookie('cart'));
                if (cart1 == null) {
                    $("#cart-message-desktop").html('1');
                } else {
                    $("#cart-message-desktop").html(String(cart1.length));
                }
            }
            count1 = count1 + 1;


        });

    }




}

//mobile code here
else {

    //load templates
    $("#header-mobile-1").load('../templates/header-mobile-1.html');
    $("#products-mobile-1").load('../templates/products-mobile-1.html');
    $("#designs-mobile-1").load('../templates/designs-mobile-1.html');
    $("#how-to-install-mobile-1").load('../templates/how-to-install-mobile-1.html');
    $("#footer-mobile-1").load('../templates/footer-mobile-1.html');



    //FOR ABOUT SLIDER mobile
    //function to move slides by default after every five seconds
    function timerSlider2() {
        $('#about-images-mobile > img:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-images-mobile');

        $('#about-heading-mobile > h1:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-heading-mobile');

        $('#about-author-mobile > h2:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-author-mobile');

    }

    //default running of slides- calling above function
    var interval2 = setInterval(timerSlider2, 5000);

    //right arrow clicked on header slider
    $("#about-right-mobile").on('click', function () {
        // console.log("click");
        clearInterval(interval2);

        $('#about-images-mobile > img:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-images-mobile');

        $('#about-heading-mobile > h1:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-heading-mobile');

        $('#about-author-mobile > h2:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#about-author-mobile');

        interval2 = setInterval(timerSlider2, 5000);

    });

    //left arrow clicked on slider
    $("#about-left-mobile").on('click', function () {
        // console.log("click");
        clearInterval(interval2);

        $('#about-images-mobile > img:first')
            .fadeOut(1000)
        $('#about-images-mobile img:last')
            .fadeIn(1000)
            .prependTo('#about-images-mobile');

        $('#about-heading-mobile > h1:first')
            .fadeOut(1000)
        $('#about-heading-mobile h1:last')
            .fadeIn(1000)
            .prependTo('#about-heading-mobile');

        $('#about-author-mobile > h2:first')
            .fadeOut(1000)
        $('#about-author-mobile h2:last')
            .fadeIn(1000)
            .prependTo('#about-author-mobile');

        interval2 = setInterval(timerSlider2, 5000);

    });

    var discountPrice = "";
    var priceDollar = discountPrice;
    var result = {};
    var images1 = {};
    var images2 = {};
    var images3 = {};
    var images4 = {};

    var largeImage = {};
    var thumbImage1 = {};
    var thumbImage2 = {};
    var thumbImage3 = {};
    var itemArray = [];

    if (params.productName == 'xbox-one-controller' || params.productName == 'xbox-one-s-controller' || params.productName == 'xbox-one-x-controller' || params.productName == 'xbox-one-elite-controller' || params.productName == 'xbox-one-elite-wireless-controller' || params.productName == 'xbox-one-console' || params.productName == 'xbox-one-s-console' || params.productName == 'xbox-one-x-console' || params.productName == 'xbox-one-bundle' || params.productName == 'xbox-one-s-bundle' || params.productName == 'xbox-one-x-bundle') {

        $.ajax({
            type: 'POST',
            'async': false,
            url: '../php/getDataXboxController.php',
            dataType: "json",
            data: {
                get_data: 'selectedProduct',
                "designName": designNameUrl,
                "productName": productNameUrl
            },
            success: function (data) {
                if (data.status == 'ok') {
                    result = data.result;
                    // console.log(result);

                    $("#designNameHtml-mobile").html(result.designNameHtml);
                    $("#productName-mobile").html(result.productName);
                    $("#priceDollar-mobile").html(result.priceDollar);
                    $("#priceCents-mobile").html(result.priceCents);
                    $("#shortDescription-mobile").html(result.shortDescription);
                    $("#specification-mobile").html(result.specification);

                    images1 = {
                        "productImageLoc": result.productImageLoc1,
                        "productImageThumbLoc": result.productImageThumbLoc1
                    };
                    images2 = {
                        "productImageLoc": result.productImageLoc2,
                        "productImageThumbLoc": result.productImageThumbLoc2
                    };
                    images3 = {
                        "productImageLoc": result.productImageLoc3,
                        "productImageThumbLoc": result.productImageThumbLoc3
                    };
                    images4 = {
                        "productImageLoc": result.productImageLoc4,
                        "productImageThumbLoc": result.productImageThumbLoc4
                    };



                    largeImage = images1;
                    thumbImage1 = images2;
                    thumbImage2 = images3;
                    thumbImage3 = images4;



                    $('#largeImage-mobile').attr('src', largeImage.productImageLoc);

                    $('#thumbImage1-mobile').attr('src', thumbImage1.productImageThumbLoc);

                    $('#thumbImage2-mobile').attr('src', thumbImage2.productImageThumbLoc);

                    $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);


                    // product 1
                    $("#ap-image-mobile-1").attr('src', data.product1.productImage);
                    $("#ap-name-mobile-1").html(data.product1.productName + ' skin');
                    $("#ap-dollar-mobile-1").html(data.product1.priceDollar);
                    $("#ap-cents-mobile-1").html(data.product1.priceCents);
                    $("#ap-button-mobile-1").attr('href', data.product1.productUrl);

                    // product 2
                    $("#ap-image-mobile-2").attr('src', data.product2.productImage);
                    $("#ap-name-mobile-2").html(data.product2.productName + ' skin');
                    $("#ap-dollar-mobile-2").html(data.product2.priceDollar);
                    $("#ap-cents-mobile-2").html(data.product2.priceCents);
                    $("#ap-button-mobile-2").attr('href', data.product2.productUrl);

                    // product 3
                    $("#ap-image-mobile-3").attr('src', data.product3.productImage);
                    $("#ap-name-mobile-3").html(data.product3.productName + ' skin');
                    $("#ap-dollar-mobile-3").html(data.product3.priceDollar);
                    $("#ap-cents-mobile-3").html(data.product3.priceCents);
                    $("#ap-button-mobile-3").attr('href', data.product3.productUrl);

                    // product 4
                    $("#ap-image-mobile-4").attr('src', data.product4.productImage);
                    $("#ap-name-mobile-4").html(data.product4.productName + ' skin');
                    $("#ap-dollar-mobile-4").html(data.product4.priceDollar);
                    $("#ap-cents-mobile-4").html(data.product4.priceCents);
                    $("#ap-button-mobile-4").attr('href', data.product4.productUrl);


                    $("#loader").addClass('slide');

                } else {
                    // console.log("not okay");
                }
            }
        });

    } else {
        $.ajax({
            type: 'POST',
            'async': false,
            url: '../php/getDataPlayStationController.php',
            dataType: "json",
            data: {
                get_data: 'selectedProduct',
                "designName": designNameUrl,
                "productName": productNameUrl
            },
            success: function (data) {
                if (data.status == 'ok') {
                    result = data.result;
                    // console.log(result);

                    $("#designNameHtml-mobile").html(result.designNameHtml);
                    $("#productName-mobile").html(result.productName);
                    $("#priceDollar-mobile").html(result.priceDollar);
                    $("#priceCents-mobile").html(result.priceCents);
                    $("#shortDescription-mobile").html(result.shortDescription);
                    $("#specification-mobile").html(result.specification);

                    images1 = {
                        "productImageLoc": result.productImageLoc1,
                        "productImageThumbLoc": result.productImageThumbLoc1
                    };
                    images2 = {
                        "productImageLoc": result.productImageLoc2,
                        "productImageThumbLoc": result.productImageThumbLoc2
                    };
                    images3 = {
                        "productImageLoc": result.productImageLoc3,
                        "productImageThumbLoc": result.productImageThumbLoc3
                    };
                    images4 = {
                        "productImageLoc": result.productImageLoc4,
                        "productImageThumbLoc": result.productImageThumbLoc4
                    };



                    largeImage = images1;
                    thumbImage1 = images2;
                    thumbImage2 = images3;
                    thumbImage3 = images4;



                    $('#largeImage-mobile').attr('src', largeImage.productImageLoc);

                    $('#thumbImage1-mobile').attr('src', thumbImage1.productImageThumbLoc);

                    $('#thumbImage2-mobile').attr('src', thumbImage2.productImageThumbLoc);

                    $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);


                    // product 1
                    $("#ap-image-mobile-1").attr('src', data.product1.productImage);
                    $("#ap-name-mobile-1").html(data.product1.productName + ' skin');
                    $("#ap-dollar-mobile-1").html(data.product1.priceDollar);
                    $("#ap-cents-mobile-1").html(data.product1.priceCents);
                    $("#ap-button-mobile-1").attr('href', data.product1.productUrl);

                    // product 2
                    $("#ap-image-mobile-2").attr('src', data.product2.productImage);
                    $("#ap-name-mobile-2").html(data.product2.productName + ' skin');
                    $("#ap-dollar-mobile-2").html(data.product2.priceDollar);
                    $("#ap-cents-mobile-2").html(data.product2.priceCents);
                    $("#ap-button-mobile-2").attr('href', data.product2.productUrl);

                    // product 3
                    $("#ap-image-mobile-3").attr('src', data.product3.productImage);
                    $("#ap-name-mobile-3").html(data.product3.productName + ' skin');
                    $("#ap-dollar-mobile-3").html(data.product3.priceDollar);
                    $("#ap-cents-mobile-3").html(data.product3.priceCents);
                    $("#ap-button-mobile-3").attr('href', data.product3.productUrl);

                    // product 4
                    $("#ap-image-mobile-4").attr('src', data.product4.productImage);
                    $("#ap-name-mobile-4").html(data.product4.productName + ' skin');
                    $("#ap-dollar-mobile-4").html(data.product4.priceDollar);
                    $("#ap-cents-mobile-4").html(data.product4.priceCents);
                    $("#ap-button-mobile-4").attr('href', data.product4.productUrl);


                    $("#loader").addClass('slide');

                } else {
                    // console.log("not okay");
                }
            }
        });
    }

    var amount = {
        priceDollar: result.priceDollar,
        priceCents: result.priceCents

    }
    // discount
    $.ajax({
        type: 'POST',
        url: '../php/discount.php',
        'async': false,
        dataType: "json",
        data: {
            "designName": designNameUrl,
            "productName": productNameUrl
        },
        success: function (data) {
            if (data.status == '101') {
                for (var i = 0; i < data.discountRequests.length; i++) {
                    // console.log(data.discountRequests[i].discountPrice);
                    $("#" + data.discountRequests[i].productName + " .discount").css("display", "block");
                    $(".discountPrice").html(data.discountRequests[i].discountPrice);
                    amount.priceDollar = data.discountRequests[i].discountPrice;
                }
            } else {
            }
        }
    });
    // 4-images Slider
    function changeImage(click_id) {

        if (click_id == 'thumbImage1-mobile') {

            var temp1 = {};
            temp1 = largeImage;
            largeImage = thumbImage1;
            thumbImage1 = thumbImage2;
            thumbImage2 = thumbImage3;
            thumbImage3 = temp1;

            $('#largeImage-mobile').attr('src', largeImage.productImageLoc);
            $('#thumbImage1-mobile').attr('src', thumbImage1.productImageThumbLoc);
            $('#thumbImage2-mobile').attr('src', thumbImage2.productImageThumbLoc);
            $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);
        }
        else if (click_id == 'thumbImage2-mobile') {
            // console.log(click_id);
            var temp1 = {};
            temp1 = largeImage;
            largeImage = thumbImage2;
            thumbImage2 = thumbImage3;
            thumbImage3 = temp1;

            $('#largeImage-mobile').attr('src', largeImage.productImageLoc);
            $('#thumbImage2-mobile').attr('src', thumbImage2.productImageThumbLoc);
            $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);
        }
        else if (click_id == 'thumbImage3-mobile') {
            // console.log(click_id);
            var temp1 = {};
            temp1 = largeImage;
            largeImage = thumbImage3;
            thumbImage3 = temp1;

            $('#largeImage-mobile').attr('src', largeImage.productImageLoc);
            $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);
        }
        else {
            // console.log(result.productImageLoc2);
        }

    }


}

//script for paypal desktop
paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
        sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
        production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'medium',
        color: 'gold',
        shape: 'pill',
        label: 'pay',
        tagline: 'false',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function (data, actions) {
        fbq('track', 'InitiateCheckout', {
            value: String(amount.priceDollar) + '.' + String(amount.priceCents),
            currency: 'USD',
            product_group: result.designName,
            product: result.productName,
        });
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'InitiateCheckout',
            'design': result.designName,
            'product': result.productName,
            'value': String(amount.priceDollar) + '.' + String(amount.priceCents)
        });
        var timeOver = getCookie('timeOver');
        if (timeOver == 'true') {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: String(amount.priceDollar) + '.' + String(amount.priceCents),
                        currency: 'USD',
                        // details: {
                        //     subtotal: String(result.priceDollar) + '.' + String(result.priceCents),
                        //     tax: '0.00',
                        //     shipping: '0.00',
                        //     handling_fee: '0.00',
                        //     shipping_discount: '0.00',
                        //     insurance: '0.00'
                        // }
                    },
                    description: 'The payment transaction description.',
                    // custom: '90048630024435',
                    //invoice_number: '12345', Insert a unique invoice number
                    // payment_options: {
                    //     allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
                    // },
                    // soft_descriptor: 'ECHI5786786',
                    item_list: {
                        items: [
                            {
                                name: result.designName + ' - ' + result.productName + ' skin',
                                description: 'Customized ' + result.productName + ' skin - ' + result.designName,
                                quantity: '1',
                                price: String(amount.priceDollar) + '.' + String(amount.priceCents),
                                tax: '0',
                                sku: result.sku,
                                currency: 'USD'
                            }
                        ],
                        // shipping_address: {
                        //     recipient_name: 'Brian Robinson',
                        //     line1: '4th Floor',
                        //     line2: 'Unit #34',
                        //     city: 'San Jose',
                        //     country_code: 'US',
                        //     postal_code: '95131',
                        //     phone: '011862212345678',
                        //     state: 'CA'
                        // }
                    }
                }],
                note_to_payer: 'Contact us at support@thetopcontroller.com for any order related queries.'
            });
        } else {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: String(result.priceDollar - 5) + '.' + String(result.priceCents),
                        currency: 'USD',
                        details: {
                            subtotal: String(result.priceDollar) + '.' + String(result.priceCents),
                            tax: '0.00',
                            shipping: '0.00',
                            handling_fee: '0.00',
                            discount: '5.00',
                            insurance: '0.00'
                        }
                    },
                    description: 'The payment transaction description.',
                    // custom: '90048630024435',
                    //invoice_number: '12345', Insert a unique invoice number
                    // payment_options: {
                    //     allowed_payment_method: 'INSTANT_FUNDING_SOURCE'
                    // },
                    // soft_descriptor: 'ECHI5786786',
                    item_list: {
                        items: [
                            {
                                name: result.designName + ' - ' + result.productName + ' skin',
                                description: 'Customized ' + result.productName + ' skin - ' + result.designName,
                                quantity: '1',
                                price: String(result.priceDollar) + '.' + String(result.priceCents),
                                tax: '0',
                                sku: result.sku,
                                currency: 'USD'
                            }
                        ],
                        // shipping_address: {
                        //     recipient_name: 'Brian Robinson',
                        //     line1: '4th Floor',
                        //     line2: 'Unit #34',
                        //     city: 'San Jose',
                        //     country_code: 'US',
                        //     postal_code: '95131',
                        //     phone: '011862212345678',
                        //     state: 'CA'
                        // }
                    }
                }],
                note_to_payer: 'Contact us at support@thetopcontroller.com for any order related queries.'
            });
        }


    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute().then(function (e) {
            // Show a confirmation message to the buyer
            // window.alert('Thank you for your purchase!');
            // console.log(e);
            // console.log(JSON.stringify(e));
            $("#loader").removeClass('slide');
            var resultArray = [];
            result['quantity'] = 1;
            resultArray.push(result);
            fbq('track', 'Purchase', {
                value: e.transactions[0].amount.total,
                currency: 'USD',
                product_group: result.designName,
                product: result.productName,
            });
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'Purchase',
                'design': result.designName,
                'product': result.productName,
                'value': e.transactions[0].amount.total
            });

            $.ajax({
                type: 'POST',
                url: '../php/payment-success.php',
                dataType: "json",
                data: {
                    items: JSON.stringify(resultArray),
                    paypalPayId: e.id,
                    payerInfo: JSON.stringify(e.payer.payer_info),
                    shippingAddress: JSON.stringify(e.payer.payer_info.shipping_address),
                    amount: e.transactions[0].amount.total,
                    object: JSON.stringify(e)
                },
                success: function (data) {
                    if (data.status == 'ok') {
                        window.location = "thankyou?orderId=" + data.id;
                        // alert("Your payment has been successful");
                        // console.log(data);
                        // $("#checkout-form-desktop").css('display','none');
                        // $("#order-success-desktop").css('display','block');
                        // $("#order-id-desktop").html('#'+String(order_id_desktop));
                        // window.scrollTo(0,0);
                        // window.dataLayer = window.dataLayer || [];
                        // window.dataLayer.push({'event': '<?php echo $product_name; ?> paypal'});

                    } else {
                        // console.log("error");
                        $("#loader").addClass('slide');
                    }
                }
            });
        });
    },

    onCancel: function (data, actions) {
        // Show a cancel page or return to cart
    },

    onError: function (err) {
        // Show an error page here, when an error occurs
    }

}, '#paypal-button-mobile');


// cookies get set and erase code
function setCookie1(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
    // console.log( name + "=" + (value || "")  + expires + "; path=/");
}
function getCookie1(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function eraseCookie1(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

// add to cart mobile clicked
var alreadyAdded = false;
var count = 0;
var cart = JSON.parse(getCookie1('cart'));
// console.log('cart',cart);
// console.log('result',result);
if (cart != null) {
    alreadyAdded = false;
    for (var i = 0; i < cart.length; i++) {
        if (cart[i].designName == result.designName && cart[i].productName == result.productName) {
            alreadyAdded = true;
            $("#add-to-cart-mobile").css('display', 'none');
            $("#product-added-to-cart-mobile").css('display', 'block');
            break;
        }
    }
    // console.log(alreadyAdded);
    if (alreadyAdded == false) {
        $("#add-to-cart-mobile").on("click", function () {
            // console.log('add to cart fired');
            if (count == 0) {
                var edittedResult = {
                    designName: result.designName,
                    productName: result.productName,
                    productImage: result.productImage,
                    priceDollar: amount.priceDollar,
                    priceCents: amount.priceCents,
                    sku: result.sku

                }
                cart.push(edittedResult);
                setCookie1('cart', JSON.stringify(cart), 7);
                fbq('track', 'AddToCart', {
                    value: String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents),
                    currency: 'USD',
                    product_group: edittedResult.designName,
                    product: edittedResult.productName,
                });
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'AddToCart',
                    'design': edittedResult.designName,
                    'product': edittedResult.productName,
                    'value': String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents)
                });
                $("#add-to-cart-mobile").css('display', 'none');
                $("#product-added-to-cart-mobile").css('display', 'block');
                $("#add-to-cart-message-mobile").addClass('slideIn');
                $("#add-to-cart-message-mobile").css('display', 'flex');
                setTimeout(function () {

                    $("#add-to-cart-message-mobile").addClass('slideOut');

                }, 5000);

                // change cart header
                var cart1 = JSON.parse(getCookie('cart'));
                if (cart1 == null) {
                    $("#cart-message-mobile").html('1');
                    $("#drawer-message-mobile").css('display', 'none');
                } else {
                    $("#cart-message-mobile").html(String(cart1.length));
                    $("#drawer-message-mobile").css('display', 'block');
                    $("#drawer-message-mobile").html(String(cart1.length));
                }
            }
            count = count + 1;


        });
    }

} else {
    var count1 = 0;
    $("#add-to-cart-mobile").on("click", function () {
        // console.log('add to cart fired');
        if (count1 == 0) {
            var newCart = [];
            var edittedResult = {
                designName: result.designName,
                productName: result.productName,
                productImage: result.productImage,
                priceDollar: amount.priceDollar,
                priceCents: amount.priceCents,
                sku: result.sku

            }
            newCart.push(edittedResult);
            setCookie1('cart', JSON.stringify(newCart), 7);
            fbq('track', 'AddToCart', {
                value: String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents),
                currency: 'USD',
                product_group: edittedResult.designName,
                product: edittedResult.productName,
            });
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'AddToCart',
                'design': edittedResult.designName,
                'product': edittedResult.productName,
                'value': String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents)
            });
            $("#add-to-cart-mobile").css('display', 'none');
            $("#product-added-to-cart-mobile").css('display', 'block');
            $("#add-to-cart-message-mobile").addClass('slideIn');
            $("#add-to-cart-message-mobile").css('display', 'flex');
            setTimeout(function () {

                $("#add-to-cart-message-mobile").addClass('slideOut');

            }, 5000);


            // change cart header
            var cart1 = JSON.parse(getCookie('cart'));
            if (cart1 == null) {
                $("#cart-message-mobile").html('1');
                $("#drawer-message-mobile").css('display', 'none');
            } else {
                $("#cart-message-mobile").html(String(cart1.length));
                $("#drawer-message-mobile").css('display', 'block');
                $("#drawer-message-mobile").html(String(cart1.length));
            }
        }
        count1 = count1 + 1;


    });

}

// get deta function in modal 
$("#buyProductName").html(result.designName + ' - ' + result.productName + ' skin');
$("#buypriceDollar").html(result.priceDollar);
$("#buypriceCents").html(result.priceCents);

// cookies get set and erase code
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
    // console.log( name + "=" + (value || "")  + expires + "; path=/");
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

var timeOver = getCookie('timeOver');
if (timeOver == 'true') {
    $(".modalSubtotal").html(String(amount.priceDollar) + '.' + String(amount.priceCents));
    $(".modaltotal").html(String(amount.priceDollar) + '.' + String(amount.priceCents));
    $(".discount").html(String(result.priceDollar - amount.priceDollar) + '.' + String(result.priceCents - amount.priceCents));
} else {
    $(".modalSubtotal").html(String(amount.priceDollar) + '.' + String(amount.priceCents));
    $(".modaltotal").html(String(result.priceDollar) + '.' + String(result.priceCents));
    $(".discount").html(String(result.priceDollar - amount.priceDollar) + '.' + String(result.priceCents - amount.priceCents));
}

// validation razorpay 
$("#razorpaycheckout").on("click", function () {
    var error = "";
    function validateEmail() {
        var email = $("#email").val();
        var emailReg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
        if (emailReg.test(email)) {
            return true;
        } else {
            return false;
        }
    }
    var error = "";
    function validateEmail() {
        var phone = $("#phone").val();
        var phoneReg = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/
        if (phoneReg.test(phone)) {
            return true;
        } else {
            return false;
        }
    }
    if ($("#name").val() == "") {
        $("#name").css('border-color', 'red');
        $("#name").css('border-width', '2px');
        $("#name").attr('placeholder', 'Required Field');
        error = error + 'name';
    } else {
        $("#name").css('border-color', 'black');
        $("#name").css('border-width', '1px');
    }

    if ($("#phone").val() == "") {
        $("#phone").css('border-color', 'red');
        $("#phone").css('border-width', '2px');
        $("#phone").attr('placeholder', 'Required Field');
        error = error + 'Phone';
    } else {
        $("#phone").css('border-color', 'black');
        $("#phone").css('border-width', '1px');
    }
    if (validateEmail()) {
        $("#email").css('border-color', 'black');
        $("#email").css('border-width', '1px');

    } else {
        $("#email").css('border-color', 'red');
        $("#email").css('border-width', '2px');
        $("#email").attr('placeholder', 'Required Field');
        error = error + 'email';
    }
    if ($("#country").val() == 0) {
        $("#country").css('border-color', 'red');
        $("#country").css('border-width', '2px');
        $("#country").attr('placeholder', 'Required Field');
        error = error + 'country';
    } else {
        $("#country").css('border-color', 'black');
        $("#Country").css('border-width', '1px');
    }
    if ($("#address").val() == "") {
        $("#address").css('border-color', 'red');
        $("#address").css('border-width', '2px');
        $("#address").attr('placeholder', 'Required Field');
        error = error + 'address';
    } else {
        $("#address").css('border-color', 'black');
        $("#address").css('border-width', '1px');
    }
    if ($("#state").val() == "") {
        $("#state").css('border-color', 'red');
        $("#state").css('border-width', '2px');
        $("#state").attr('placeholder', 'Required Field');
        error = error + 'state';
    } else {
        $("#state").css('border-color', 'black');
        $("#state").css('border-width', '1px');
    }
    if ($("#postcode").val() == "") {
        $("#postcode").css('border-color', 'red');
        $("#postcode").css('border-width', '2px');
        $("#postcode").attr('placeholder', 'Required Field');
        error = error + 'postcode';
    } else {
        $("#postcode").css('border-color', 'black');
        $("#postcode").css('border-width', '1px');
    }
    if (error == "") {
        if ($('#chkterms').is(':checked')) {
            // alert('you agreed conditions')
        } else {
            alert('please check terms & conditions');
            error = error + "chkterms";
        }
    }
    if (error == "") {
        // ajax call
        $.ajax({
            type: 'POST',
            url: '../php/checkout-form.php',
            dataType: "json",
            data: {
                name: $("#name").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
                country: $("#country").val(),
                address: $("#address").val(),
                state: $("#state").val(),
                postcode: $("#postcode").val(),
                other_details: $("#other_details").val(),
                productName: $("#buyProductName").html(),
                amount: String(amount.priceDollar) + '.' + String(amount.priceCents)

            },
            success: function (data) {
                if (data.status == 201) {
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({ 'event': '<?php echo $productName; ?> checkout' });
                    // alert("checked out");
                    var order_id = data.id;
                    var options = {
                        "key": "", // Enter the Key ID generated from the Dashboard    
                        "amount": parseInt(amount.priceDollar + amount.priceCents), // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                        "currency": "USD",
                        "name": "The Top Controller",
                        "description": 'Get the best controller skins based on your favorite games.',
                        "image": "../images/top_controller_fav.png",
                        //"order_id": "order_9A33XWu170gUtm",//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order). Refer the Checkout form table given below    
                        "handler": function (response) {
                            // alert(response.razorpay_payment_id);
                            var razorpay_payment_id = response.razorpay_payment_id;
                            // console.log(response);
                            $.ajax({
                                type: 'POST',
                                url: '../php/checkout-update-form.php',
                                dataType: "json",
                                data: {
                                    id: data.id,
                                    productName: $("#buyProductName").html(),
                                    razorpay_payment_id: razorpay_payment_id,
                                    amount: String(amount.priceDollar) + '.' + String(amount.priceCents),
                                    email: $("#email").val()
                                },
                                success: function (data) {
                                    if (data.status == 'ok') {
                                        //window.location = "thankyou.html";
                                        //alert("Your payment has been successful");
                                        $("#checkout-form").css('display', 'none');
                                        $("#order-success").css('display', 'block');
                                        $("#order-id").html('#' + data.id);
                                        window.scrollTo(0, 0);
                                        window.dataLayer = window.dataLayer || [];
                                        window.dataLayer.push({ 'event': $("#buyProductName").html() });
                                    } else {
                                        console.log("error");
                                    }
                                }
                            });


                        }, "prefill": {
                            "name": $("#name").val(),
                            "email": $("#email").val(),
                            "phone": $("#phone").val()
                        }, "notes": {
                            "country": $("#country").val(),
                            "address": $("#Address").val(),
                            "state": $("#state").val(),
                            "postcode": $("#postcode").val(),
                            "productName": $("#buyProductName").html(),

                        }, "theme": {
                            "color": "#2e3192"
                        }
                    };

                    var rzp1 = new Razorpay(options);
                    rzp1.open();


                } else if (data.status == 601) {
                    console.log(data.error);
                    // alert("problem with query");
                } else {

                }
            }
        });
    } else {
        return true;
    }
});