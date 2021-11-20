if( window.innerWidth >= 960 ){

    //load templates
    
    $("#products-desktop-1").load('../templates/products-desktop-1.html');
    $("#how-to-install-desktop-1").load('../templates/how-to-install-desktop-1.html');
    $("#footer-desktop-1").load('../templates/footer-desktop-1.html');

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
        //console.log("click");
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
        //console.log("click");
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




        interval2 = setInterval(timerSlider2, 5000);

    });

    

    // cookies get set and erase code
    function setCookie1(name,value,days) {
        //console.log('entered');
        //console.log(name,value);
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        // //console.log( name + "=" + (value || "")  + expires + "; path=/");
    }
    function getCookie1(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    function eraseCookie1(name) {   
        document.cookie = name+'=; Max-Age=-99999999;';  
        //console.log(document.cookie);
    }

    // add upsell products to cart


    var productsUpsell =[];
    // products to upsell desktop
    $.ajax({
        type: 'POST',
        url: '../php/cart-products.php',
        dataType: "json",
        data: {
            get_data: 'selectedProduct',
        },
        success: function (data) {
            if (data.status == 'ok') {
                productsUpsell = data.result;
                //console.log(productsUpsell);

                // $("#designNameHtml-mobile").html(result.designNameHtml);
                // $("#productName-desktop").html(productsUpsell[0].productName);
                // $("#priceDollar-desktop").html(productsUpsell[0].priceDollar);
                // $("#priceCents-desktop").html(productsUpsell[0].priceCents);

                for (var i=0; i<productsUpsell.length; i++){
                    $("#products-upsell-desktop").html( $("#products-upsell-desktop").html() + '<div class="single-logo"><div class="logo-item"><div class="position-relative d-flex justify-content-center align-items-center" style="width: 100%px; height: 170px;"><div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="border-radius: 10px; top: 5px;height: 65px;z-index: 10; width: 70px;"></div><img src="'+ productsUpsell[i].productImage +'" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;"><div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 70px;"><div class="w-100"><h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 70px; font-size: 9px;">'+ productsUpsell[i].productName +'</h3><h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 14px;"><span style="font-size: 29px;" >'+ productsUpsell[i].priceDollar +'</span>.<span>'+ productsUpsell[i].priceCents +'</span>$</h3><a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center cursor-pointer" style="font-size: 9px; border-radius: 5px; padding-top: 5px; padding-bottom: 5px; color: black; border: 1px black solid;" id="product-add-to-cart-'+ i +'" >Add to Cart</a></div></div></div></div></div>');
                }

                for (var j=0; j<productsUpsell.length; j++){
                    
                    $('#product-add-to-cart-'+j).on('click',function(e){
                        e.preventDefault();
                        // alert('fired');
                        var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                        itemNumber = parseInt(itemNumber);
                        if(typeof(productsUpsell[itemNumber].quantity) === 'undefined'){
                            productsUpsell[itemNumber]['quantity'] = 1;
                            // setCookie1('cart',JSON.stringify(cart),7);
                        }
                        //console.log(productsUpsell[itemNumber]);
                        var edittedResult = {
                            designName : productsUpsell[itemNumber].designName,
                            productName: productsUpsell[itemNumber].productName,
                            productImage: productsUpsell[itemNumber].productImage,
                            priceDollar : productsUpsell[itemNumber].priceDollar,
                            priceCents : productsUpsell[itemNumber].priceCents,
                            quantity : productsUpsell[itemNumber].quantity,
                            sku : productsUpsell[itemNumber].sku

                        }
                        if(cart == null){
                            cart=[];
                            cart[0] = edittedResult;
                        } else{
                            cart[cart.length] = edittedResult;
                        }
                        
                        setCookie1('cart',JSON.stringify(cart),7);
                        //console.log(cart);
                        //console.log(JSON.parse(getCookie1('cart')));
                        fbq('track', 'AddToCart', {
                            value: String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents),
                            currency: 'USD',
                            product_group: edittedResult.designName,
                            product: edittedResult.productName,
                        });
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'AddToCart', 
                            'design' :  edittedResult.designName,
                            'product': edittedResult.productName,
                            'value' : String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents)
                        });

                        $("#items-you-want-desktop").html('Items You Want');
                        $("#cart-empty-image-desktop").css('display', 'none');

                        $('#items-list-desktop').html($('#items-list-desktop').html() + '<li id="item-container-desktop-'+String(cart.length -1) +'"><div class="container-fluid"><div class="row"><div class="col-6 p-0"><p class="font-poppins-regular m-0 text-left text-capitalize" style="font-size: 19px;">'+ cart[cart.length-1].productName +' Skin</p><p class="font-poppins-bold m-0 text-left text-capitalize" style="font-size: 19px;">'+ cart[cart.length-1].designName +'</p></div><div class="col-3"><p class="font-poppins-bold m-0 text-left" style="font-size: 19px;">'+ cart[cart.length-1].priceDollar +'.'+ cart[cart.length-1].priceCents +'$</p></div><div class="col-3 d-flex justify-content-end"><p class="font-poppins-bold m-0 mr-1 text-left" style="font-size: 19px;">X <span id="quantity-display-desktop-'+ String(cart.length -1) +'">'+ cart[cart.length-1].quantity +'</span></p><div class="p-1 cursor-pointer" style="background-color: black; color: white; font-size: 17px; font-weight: bold; height: 25px; display: flex; justify-content: center; align-items: center; padding: 3px;" id="quantity-increase-desktop-'+ String(cart.length -1)+ '">+</div><div class="py-2 cursor-pointer ml-1" style="background-color: black; color: white; font-size: 17px; font-weight: bold; height: 25px; display: flex; justify-content: center; align-items: center; padding-left: 6px; padding-right: 6px;"id="quantity-decrease-desktop-'+ String(cart.length -1)+ '">-</div></div></div></div></li>');

                        var cart1 = JSON.parse(getCookie('cart'));
                        if (cart1 == null || typeof(cart1[0]) === 'undefined'){
                            $("#cart-message-desktop").html('1');
                        } else{
                            $("#cart-message-desktop").html(String(cart1.length));
                        }
                        // productsUpsell[itemNumber].quantity = cart[itemNumber].quantity + 1;
                        // setCookie1('cart',JSON.stringify(cart),7);
                        // $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                        var totalin = totalInCart();
                        setIncreaseAndDecrease((cart.length -1),true);
                        
                        
                        
                    });
                
                }
                

                $('.brand-carousel').owlCarousel(
                    {
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        responsive:
                        {
                            0:
                            {
                                items: 1
                            },
                            600:
                            {
                                items: 3
                            },
                            1000:
                            {
                                items: 4
                            }
                        }
                    })
                var carouselEl = $('.owl-carousel');

                carouselEl.owlCarousel({
                    items: 6
                });

                $("#loader").addClass('slide');

                
                
            } else {
                //console.log("not okay");
                $("#loader").addClass('slide');
            }
        }
    });


    // coupon code codes
    var removedDiscount = false;
    var cross = false;
    $("#coupon-code-applied-cross-desktop").on("click",function(e){
        e.preventDefault();
        $("#coupon-code-applied-desktop").css('display','none');
        $("#coupon-code-input-container-desktop").css('display', 'flex');
        removedDiscount = true;
        cross = true;
        totalInCart();
        
    });
    $("#coupon-code-expired-cross-desktop").on("click",function(){
        $("#coupon-code-expired-desktop").css('display','none');
        $("#coupon-code-input-container-desktop").css('display', 'flex');
        cross = true;
    });

    var coupon_code="";
    var flat5 = false;
    var coupon_sent = {};
    // //console.log(typeof(coupon_sent.coupon));
    // coupon_sent = {
    //             coupon: 'XC/123-34-CU/1',
    //             value: 5
    //         };
    //         //console.log(coupon_sent);
    $("#coupon-apply-desktop").on('click',function(){
        // console.log('click');
        coupon_code = $("#coupon-code-input-desktop").val();
        if(coupon_code.toUpperCase() == 'FLAT5'.toUpperCase()){
            flat5 = true;
            totalInCart();
        } else{
            $.ajax({
                type:'POST',
                url:'../php/check-coupon-code.php',
                dataType: "json",
                data:{
                    "coupon_code": coupon_code
                },
                success:function(data){
                    if(data.status == 'invalid'){
                        // console.log("invalid");
                        $("#coupon-code-input-desktop").css('border','1px red solid');
                        $("#coupon-code-input-desktop").attr('placeholder','Invalid');
                        // $('#err-coupon-invalid').slideDown('slow');
                        // alert('invalid coupon');
                        // $("#promo-invalid-desktop").css('display','block');

                    }else{
                        // alert('coupon valid');
                        // console.log(data.status);
                        coupon_sent = {
                            coupon: data.status.coupon_code,
                            value: data.status.value
                        }
                        flat5 = false;
                        totalInCart();
                        
                    } 
                }
            });
        }
    });

    // get time over
    var timeOver = getCookie1('timeOver');
    var finalTotal = 0;

    var totalInCart = function(){
        var k = 0;
        var totalIn = 0;
        var dollars = 0;
        var cents = 0;
        for(k=0; k<cart.length; k++){
            if(cart[k].quantity != 0){
                // totalIn = Math.round( (totalIn +  (parseFloat(cart[k].priceDollar + '.' + cart[k].priceCents))*cart[k].quantity)*100 )/100;
                dollars = dollars + parseInt(cart[k].priceDollar)*parseInt(cart[k].quantity);
                cents = cents + parseInt(cart[k].priceCents)*parseInt(cart[k].quantity);
            }
            
        }
        var quotient = Math.floor(cents/100);
        var remainder = cents%100;
        dollars = dollars + quotient;
        totalIn = dollars + remainder/100;


        // check if time coupon is valid
        if(timeOver == 'true'){
            if(!cross){
                $("#coupon-code-applied-desktop").css('display','none');
                $("#coupon-code-expired-desktop").css('display','block');
                
            }
            $("#final-total-desktop").html(String(totalIn) + '$');
            finalTotal = totalIn;
            if(flat5){
                $("#coupon-code-applied-desktop").css('display','none');
                $("#coupon-code-expired-desktop").css('display','block');
                $("#coupon-code-input-container-desktop").css('display', 'none');
                flat5 = false;
            }
            if(typeof(coupon_sent.coupon) !== 'undefined'){
                $("#coupon-code-applied-desktop").css('display','block');
                $("#coupon-code-expired-desktop").css('display','none');
                $("#coupon-code-input-container-desktop").css('display', 'none');
                finalTotal = (totalIn-parseInt(coupon_sent.value)).toFixed(2);
                if(finalTotal < 0 ){
                    finalTotal = 0;
                }
                $("#final-total-desktop").html(String(finalTotal) + '$');
                
            }
        } else{
            //console.log(cross);
            //console.log(removedDiscount);
            //console.log(flat5);
            if(!cross){
                $("#coupon-code-applied-desktop").css('display','block');
                $("#coupon-code-expired-desktop").css('display','none');
            
            }
            if(removedDiscount){
                $("#coupon-code-applied-desktop").css('display','none');
                finalTotal = totalIn;
                if(finalTotal < 0 ){
                    finalTotal = 0;
                }
                $("#final-total-desktop").html(String(finalTotal) + '$');
                
            } else{
                finalTotal = totalIn-5;
                if(finalTotal < 0 ){
                    finalTotal = 0;
                }
                $("#final-total-desktop").html(String(finalTotal) + '$');
                
            }
            if(flat5){
                $("#coupon-code-applied-desktop").css('display','block');
                $("#coupon-code-expired-desktop").css('display','none');
                $("#coupon-code-input-container-desktop").css('display', 'none');
                finalTotal = totalIn-5;
                if(finalTotal < 0 ){
                    finalTotal = 0;
                }
                $("#final-total-desktop").html(String(finalTotal) + '$');
                
                
            }
            if(typeof(coupon_sent.coupon) !== 'undefined'){
                $("#coupon-code-applied-desktop").css('display','block');
                $("#coupon-code-expired-desktop").css('display','none');
                $("#coupon-code-input-container-desktop").css('display', 'none');
                finalTotal = (totalIn-parseInt(coupon_sent.value)).toFixed(2);
                if(finalTotal < 0 ){
                    finalTotal = 0;
                }
                $("#final-total-desktop").html(String(finalTotal) + '$');
                
            }
            
        }
        $("#your-total-desktop").html(String(totalIn) + '$');
        
        return totalIn;
    }

    var setIncreaseAndDecrease = function (index, addCart = false) {
        if(!addCart){
            // console.log(index);
            $('#quantity-increase-desktop-'+index).on('click',function(){
                // alert('quantity incarease fired');
                var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                itemNumber = parseInt(itemNumber);
                cart[itemNumber].quantity = cart[itemNumber].quantity + 1;
                setCookie1('cart',JSON.stringify(cart),7);
                $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                var totalin = totalInCart();
                
            });

            $('#quantity-decrease-desktop-'+index).on('click',function(){
                var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                itemNumber = parseInt(itemNumber);
                // console.log('carta',cart[itemNumber]);
                // console.log('itemnumbera',itemNumber);
                if(cart[itemNumber].quantity >1){
                    cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                    setCookie1('cart',JSON.stringify(cart),7);
                    $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                    
                } else if(cart[itemNumber].quantity == 1){
                    // cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                    // setCookie1('cart',JSON.stringify(cart),7);
                    // $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                    cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                    // cart.splice(itemNumber,1);
                    setCookie1('cart',JSON.stringify(cart),7);
                    $('#item-container-desktop-'+itemNumber).css('display','none');
                    var count = 0;
                        for(var i=0; i<cart.length; i++){
                            if(cart[i].quantity == 0){
                                count = count + 1;
                            }
                        }
                    $("#cart-message-desktop").html(String(cart.length - count));
                }

                var totalin = totalInCart();
                
                
            });
        } else{
            //console.log(cart);
            for (var j=0; j<=index; j++){
                // console.log('inside for',j);
                $('#quantity-increase-desktop-'+j).on('click',function(){
                    // alert('quantity incarease fired');
                    var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                    itemNumber = parseInt(itemNumber);
                    // console.log('cart',cart[itemNumber]);
                    // console.log('itemNumber',itemNumber);
                    cart[itemNumber].quantity = cart[itemNumber].quantity + 1;
                    setCookie1('cart',JSON.stringify(cart),7);
                    $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                    var totalin = totalInCart();
                    
                });

                $('#quantity-decrease-desktop-'+j).on('click',function(){
                    var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                    itemNumber = parseInt(itemNumber);
                    if(cart[itemNumber].quantity >1){
                        cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        setCookie1('cart',JSON.stringify(cart),7);
                        $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                    } else if(cart[itemNumber].quantity == 1){
                        // cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        // setCookie1('cart',JSON.stringify(cart),7);
                        // $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                        cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        // cart.splice(itemNumber,1);
                        setCookie1('cart',JSON.stringify(cart),7);
                        $('#item-container-desktop-'+itemNumber).css('display','none');
                        var count = 0;
                        for(var i=0; i<cart.length; i++){
                            if(cart[i].quantity == 0){
                                count = count + 1;
                            }
                        }
                        $("#cart-message-desktop").html(String(cart.length - count));
                    }

                    
                    var totalin = totalInCart();
                    
                    
                });
            }
        }
        
    }
    

    // get cart elements
    var cart = JSON.parse(getCookie1('cart'));
    // console.log(cart);
    if (cart == null || typeof(cart[0]) === 'undefined'){
        // $("#cart-container-desktop").css('display','none');
        $("#items-you-want-desktop").html('Feed Your Cart');
        $("#cart-empty-image-desktop").css('display', 'block');
        
        
    } else{
        for (var i=0; i<cart.length; i++){
            //console.log(typeof(cart[i].quantity));
            if(typeof(cart[i].quantity) === 'undefined'){
                cart[i]['quantity'] = 1;
                setCookie1('cart',JSON.stringify(cart),7);
            }
            if(cart[i].quantity == 0){
                // console.log('inside quantity',i);
                cart.splice(i,1);
                // console.log(cart);
                setCookie1('cart',JSON.stringify(cart),7);
            } 
            if(typeof(cart[i]) !== 'undefined'){
                if(cart[i].quantity != 0){
                    $('#items-list-desktop').html($('#items-list-desktop').html() + '<li id="item-container-desktop-'+i +'"><div class="container-fluid"><div class="row"><div class="col-6 p-0"><p class="font-poppins-regular m-0 text-left text-capitalize" style="font-size: 19px;">'+ cart[i].productName +' Skin</p><p class="font-poppins-bold m-0 text-left text-capitalize" style="font-size: 19px;">'+ cart[i].designName +'</p></div><div class="col-3"><p class="font-poppins-bold m-0 text-left" style="font-size: 19px;">'+ cart[i].priceDollar +'.'+ cart[i].priceCents +'$</p></div><div class="col-3 d-flex justify-content-end"><p class="font-poppins-bold m-0 mr-1 text-left" style="font-size: 19px;">X <span id="quantity-display-desktop-'+ i +'">'+ cart[i].quantity +'</span></p><div class="p-1 cursor-pointer" style="background-color: black; color: white; font-size: 17px; font-weight: bold; height: 25px; display: flex; justify-content: center; align-items: center; padding: 3px;" id="quantity-increase-desktop-'+ i+ '">+</div><div class="py-2 cursor-pointer ml-1" style="background-color: black; color: white; font-size: 17px; font-weight: bold; height: 25px; display: flex; justify-content: center; align-items: center; padding-left: 6px; padding-right: 6px;"id="quantity-decrease-desktop-'+ i+ '">-</div></div></div></div></li>');
                }
            }
            
            
                
        }

        for(var j=0; j<cart.length; j++){
            setIncreaseAndDecrease(j);
        }
        totalInCart();
    }

    

    
    
    //script for paypal desktop
    paypal.Button.render({
        // Configure environment
        env: 'production',
        client: {
            sandbox: 'ASR-ihabikoqj5cp5hjEc6cmsuqvKOTeAhNq0q3pRJ4B0mVa8f2p5Oza_vgb31ov_BDoYUEaMVHMLfe4',
            production: 'ARuc2GCquwZx62UsYsniNe5z5i4FGY6zUZvVIIU1ZLhQ3koL9BdeiJhsn-CwVB2pICNnF5wRlM-VHcR3'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'large',
            color: 'gold',
            shape: 'pill',
            label: 'pay',
            tagline: 'false',
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function (data, actions) {
            var cartitems = [];
            var subTotal = 0;
            var ids = "";
            var types = "";
            var dollars = 0;
            var cents = 0;
            for (var i=0; i<cart.length; i++){
                if(cart[i].quantity > 0){
                    cartitems.push({
                        name: cart[i].designName + ' - ' + cart[i].productName + ' skin',
                        description: 'Customized ' + cart[i].productName + ' skin - ' + cart[i].designName,
                        quantity: cart[i].quantity,
                        price: String(cart[i].priceDollar) + '.' + String(cart[i].priceCents),
                        tax: '0',
                        sku: cart[i].sku,
                        currency: 'USD'
                    });
                    dollars = dollars + parseInt(cart[i].priceDollar)*parseInt(cart[i].quantity);
                    cents = cents + parseInt(cart[i].priceCents)*parseInt(cart[i].quantity);
    
                    ids = ids + ' '+cart[i].designName;
                    types = types + ' ' + cart[i].productName;
                }
                

            }
            var quotient = Math.floor(cents/100);
            var remainder = cents%100;
            dollars = dollars + quotient;
            subTotal = dollars + remainder/100;

           
            fbq('track', 'InitiateCheckout', {
                value: finalTotal,
                currency: 'USD',
                product_group: ids,
                product: types,
            });
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'InitiateCheckout', 
                'design' :  ids,
                'product': types,
                'value' : finalTotal
            });

            //console.log(finalTotal);
            var discount = '0.00';
            if(timeOver == 'true'){
                if(typeof(coupon_sent.coupon) !== 'undefined' ){
                    discount = String(coupon_sent.value) + ".00";
                    
                }
            } else{
                
                if(!removedDiscount){
                    discount = '5.00';
                }
                if(flat5){
                    discount = '5.00';
                }
                if(typeof(coupon_sent.coupon) !== 'undefined' ){
                    discount = String(coupon_sent.value) + ".00";
                    
                }
                
            }
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: finalTotal,
                        currency: 'USD',
                        details: {
                            subtotal: subTotal,
                            tax: '0.00',
                            shipping: '0.00',
                            handling_fee: '0.00',
                            discount: discount,
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
                        items: cartitems,
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
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(e) {
                // Show a confirmation message to the buyer
                // window.alert('Thank you for your purchase!');
                // //console.log(e);
                // //console.log(JSON.stringify(e));
                $("#loader").removeClass('slide');
                var ids = "";
                var types = "";
                for(var i=0; i<cart.length; i++){
                    ids = ids + ','+cart[i].designName;
                    types = types + ',' + cart[i].productName;
                }
                fbq('track', 'Purchase', {
                    value: e.transactions[0].amount.total,
                    currency: 'USD',
                    product_group: ids,
                    product: types,
                });
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'Purchase', 
                    'design' :  ids,
                    'product': types,
                    'value' : e.transactions[0].amount.total
                });
                // var resultArray = [];
                // resultArray.push(cart);
                var coupon_code1 = "";
                if(typeof(coupon_sent.coupon) !== 'undefined'){
                    coupon_code1 = coupon_sent.coupon;
                }
                $.ajax({
                    type:'POST',
                    url:'../php/payment-success.php',
                    dataType: "json",
                    data:{
                        items : JSON.stringify(cart),
                        paypalPayId : e.id,
                        payerInfo : JSON.stringify(e.payer.payer_info) ,
                        shippingAddress : JSON.stringify(e.payer.payer_info.shipping_address),
                        amount : e.transactions[0].amount.total,
                        object : JSON.stringify(e),
                        "coupon": coupon_code1
                    },
                    success:function(data){
                        if(data.status == 'ok'){
                            //console.log('here');
                            document.cookie = 'cart= ; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/';  
                            window.location = "thankyou?orderId=" + data.id;
                            // alert("Your payment has been successful");
                            // //console.log(data);
                            // $("#checkout-form-desktop").css('display','none');
                            // $("#order-success-desktop").css('display','block');
                            // $("#order-id-desktop").html('#'+String(order_id_desktop));
                            // window.scrollTo(0,0);
                            // window.dataLayer = window.dataLayer || [];
                            // window.dataLayer.push({'event': '<?php echo $product_name; ?> paypal'});

                        }else{
                            //console.log("error");
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

    

    
}
//mobile code here
else{

    //load templates
    $("#products-mobile-1").load('../templates/products-mobile-1.html');
    $("#designs-mobile-1").load('../templates/designs-mobile-1.html');
    $("#how-to-install-mobile-1").load('../templates/how-to-install-mobile-1.html');
    $("#footer-mobile-1").load('../templates/footer-mobile-1.html');
    
    //FOR ABOUT SLIDER mobile
    //function to move slides by default after every five seconds
    function timerSlider2(){
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
    $("#about-right-mobile").on('click',function(){
        //console.log("click");
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
    $("#about-left-mobile").on('click',function(){
        //console.log("click");
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

    
    // cookies get set and erase code
    function setCookie1(name,value,days) {
        //console.log('entered');
        //console.log(name,value);
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        // //console.log( name + "=" + (value || "")  + expires + "; path=/");
    }
    function getCookie1(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    function eraseCookie1(name) {   
        document.cookie = name+'=; Max-Age=-99999999;';  
    }

    // add upsell products to cart


    var productsUpsell =[];
    // products to upsell mobile
    $.ajax({
        type: 'POST',
        url: '../php/cart-products.php',
        dataType: "json",
        data: {
            get_data: 'selectedProduct',
        },
        success: function (data) {
            if (data.status == 'ok') {
                productsUpsell = data.result;
                //console.log(productsUpsell);

                // $("#designNameHtml-mobile").html(result.designNameHtml);
                // $("#productName-desktop").html(productsUpsell[0].productName);
                // $("#priceDollar-desktop").html(productsUpsell[0].priceDollar);
                // $("#priceCents-desktop").html(productsUpsell[0].priceCents);
 
                for (var i=0; i<productsUpsell.length; i++){
                    $("#products-upsell-mobile").html( $("#products-upsell-mobile").html() + '<div class="single-logo"><div class="logo-item"><div class="position-relative d-flex justify-content-center align-items-center" style="width: 100%; height: 130px;"><div class="position-absolute bg-white shadow-buy-now-button-1 h-center" style="border-radius: 10px; top: 5px;height: 45px;z-index: 10; width: 55px;"></div><img src="'+ productsUpsell[i].productImage +'" class="position-absolute" style="z-index: 15; width: 100%; top: 0px;"><div class="position-absolute bg-white shadow-buy-now-button-1 h-center d-flex justify-content-center " style="width: 80%; border-radius: 10px; top: 5px;z-index: 9; width: 55px;"><div class="w-100"><h3 class="font-poppins-regular m-0 text-center text-uppercase" style="padding-top: 50px; font-size: 8px;">'+ productsUpsell[i].productName +'</h3><h3 class="font-poppins-regular m-0 text-center text-uppercase" style="font-size: 12px;"><span style="font-size: 20px;" >'+ productsUpsell[i].priceDollar +'</span>.<span>'+ productsUpsell[i].priceCents +'</span>$</h3><a class="font-poppins-bold text-uppercase w-100 d-flex justify-content-center align-items-center cursor-pointer" style="font-size: 7px; border-radius: 5px; padding-top: 2px; padding-bottom: 2px; color: black; border: 1px black solid;" id="product-add-to-cart-'+ i +'" >Add to Cart</a></div></div></div></div></div>');
                }

                for (var j=0; j<productsUpsell.length; j++){
                    
                    $('#product-add-to-cart-'+j).on('click',function(e){
                        e.preventDefault();
                        // alert('fired');
                        var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                        itemNumber = parseInt(itemNumber);
                        if(typeof(productsUpsell[itemNumber].quantity) === 'undefined'){
                            productsUpsell[itemNumber]['quantity'] = 1;
                            // setCookie1('cart',JSON.stringify(cart),7);
                        }
                        //console.log(productsUpsell[itemNumber]);
                        var edittedResult = {
                            designName : productsUpsell[itemNumber].designName,
                            productName: productsUpsell[itemNumber].productName,
                            productImage: productsUpsell[itemNumber].productImage,
                            priceDollar : productsUpsell[itemNumber].priceDollar,
                            priceCents : productsUpsell[itemNumber].priceCents,
                            quantity : productsUpsell[itemNumber].quantity,
                            sku : productsUpsell[itemNumber].sku

                        }
                        if(cart == null){
                            cart=[];
                            cart[0] = edittedResult;
                        } else{
                            cart[cart.length] = edittedResult;
                        }
                        setCookie1('cart',JSON.stringify(cart),7);
                        
                        //console.log(cart);
                        //console.log(JSON.parse(getCookie1('cart')));
                        fbq('track', 'AddToCart', {
                            value: String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents),
                            currency: 'USD',
                            product_group: edittedResult.designName,
                            product: edittedResult.productName,
                        });

                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'AddToCart', 
                            'design' :  edittedResult.designName,
                            'product': edittedResult.productName,
                            'value' : String(edittedResult.priceDollar) + '.' + String(edittedResult.priceCents)
                        });

                        $("#items-you-want-mobile").html('Items You Want');
                        $("#cart-empty-image-mobile").css('display', 'none');

                        $('#items-list-mobile').html($('#items-list-mobile').html() + '<li id="item-container-mobile-'+String(cart.length -1) +'"><div class="container-fluid"><div class="row"><div class="col-6 p-0"><p class="font-poppins-regular m-0 text-left text-capitalize" style="font-size: 14px;">'+ cart[cart.length-1].productName +' Skin</p><p class="font-poppins-bold m-0 text-left text-capitalize" style="font-size: 14px;">'+ cart[cart.length-1].designName +'</p></div><div class="col-3 px-1"><p class="font-poppins-bold m-0 text-left" style="font-size: 14px;">'+ cart[cart.length-1].priceDollar +'.'+ cart[cart.length-1].priceCents +'$</p></div><div class="col-3 d-flex justify-content-end pl-0 pr-0"><p class="font-poppins-bold m-0 mr-1 text-left" style="font-size: 14px;">X<span id="quantity-display-mobile-'+ String(cart.length -1) +'">'+ cart[cart.length-1].quantity +'</span></p><div class=" cursor-pointer" style="background-color: black; color: white; font-size: 11px; font-weight: bold; height: 18px; display: flex; justify-content: center; align-items: center; padding: 3px;" id="quantity-increase-mobile-'+ String(cart.length -1)+ '">+</div><div class="py-2 cursor-pointer ml-1" style="background-color: black; color: white; font-size: 17px; font-weight: bold; height: 18px; display: flex; justify-content: center; align-items: center; padding-left: 3px; padding-right: 3px;"id="quantity-decrease-mobile-'+ String(cart.length -1)+ '">-</div></div></div></div></li>');

                        var cart1 = JSON.parse(getCookie('cart'));
                        if (cart1 == null || typeof(cart1[0]) === 'undefined' ){
                            $("#cart-message-mobile").html('1');
                            $("#drawer-message-mobile").html('1');
                            // $("#drawer-message-mobile").css('display','none');
                        } else{
                            $("#cart-message-mobile").html(String(cart1.length));
                            // $("#drawer-message-mobile").css('display','block');
                            $("#drawer-message-mobile").html(String(cart1.length));
                        }

                        // productsUpsell[itemNumber].quantity = cart[itemNumber].quantity + 1;
                        // setCookie1('cart',JSON.stringify(cart),7);
                        // $('#quantity-display-desktop-'+itemNumber).html(cart[itemNumber].quantity);
                        var totalin = totalInCart();

                        setIncreaseAndDecrease((cart.length -1),true);
                        // $('#quantity-increase-mobile-'+String(cart.length -1)).on('click',function(){
                        //     var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                        //     itemNumber = parseInt(itemNumber);
                        //     cart[itemNumber].quantity = cart[itemNumber].quantity + 1;
                        //     setCookie1('cart',JSON.stringify(cart),7);
                        //     $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                        //     var totalin = totalInCart();
                            
                        // });

                        // $('#quantity-decrease-mobile-'+String(cart.length -1)).on('click',function(){
                        //     var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                        //     itemNumber = parseInt(itemNumber);
                        //     if(cart[itemNumber].quantity >0){
                        //         cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        //         setCookie1('cart',JSON.stringify(cart),7);
                        //         $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                        //     } else if(cart[itemNumber].quantity = 0){
                        //         cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        //         setCookie1('cart',JSON.stringify(cart),7);
                        //         $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                        //     }

                        //     var totalin = totalInCart();
                            
                            
                        // });
                        
                    });
                
                }
                

                $('.brand-carousel').owlCarousel(
                    {
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        responsive:
                        {
                            0:
                            {
                                items: 3
                            },
                            600:
                            {
                                items: 3
                            },
                            1000:
                            {
                                items: 3
                            }
                        }
                    })
                var carouselEl = $('.owl-carousel');

                carouselEl.owlCarousel({
                    items: 6
                });

                $("#loader").addClass('slide');
                
                
            } else {
                //console.log("not okay");
                $("#loader").addClass('slide');
            }
        }
    });


    // coupon code codes
    var removedDiscount = false;
    var cross = false;
    $("#coupon-code-applied-cross-mobile").on("click",function(){
        $("#coupon-code-applied-mobile").css('display','none');
        $("#coupon-code-input-container-mobile").css('display', 'flex');
        removedDiscount = true;
        cross = true;
        totalInCart();
        
    });
    $("#coupon-code-expired-cross-mobile").on("click",function(){
        $("#coupon-code-expired-mobile").css('display','none');
        $("#coupon-code-input-container-mobile").css('display', 'flex');
        cross = true;
    });

    var coupon_code="";
    var flat5 = false;
    var coupon_sent = {};
    // //console.log(typeof(coupon_sent.coupon));
    // coupon_sent = {
    //             coupon: 'XC/123-34-CU/1',
    //             value: 5
    //         };
    //         //console.log(coupon_sent);
    $("#coupon-apply-mobile").on('click',function(){
        //console.log('click');
        coupon_code = $("#coupon-code-input-mobile").val();
        if(coupon_code.toUpperCase() == 'FLAT5'.toUpperCase()){
            flat5 = true;
            totalInCart();
        } else{
            $.ajax({
                type:'POST',
                url:'../php/check-coupon-code.php',
                dataType: "json",
                data:{
                    "coupon_code": coupon_code
                },
                success:function(data){
                    if(data.status == 'invalid'){
                        // console/.log("invalid");
                        $("#coupon-code-input-mobile").css('border','1px red solid');
                        $("#coupon-code-input-mobile").attr('placeholder','Invalid');
                        // $('#err-coupon-invalid').slideDown('slow');
                        // alert('invalid coupon');
                        // $("#promo-invalid-desktop").css('display','block');

                    }else{
                        // alert('coupon valid');
                        // console.log(data.status);
                        coupon_sent = {
                            coupon: data.status.coupon_code,
                            value: data.status.value
                        }
                        flat5 = false;
                        totalInCart();
                        
                    } 
                }
            });
        }
    });

    // get time over
    var timeOver = getCookie1('timeOver');
    var finalTotal = 0;

    var totalInCart = function(){
        var k = 0;
        var totalIn = 0;
        var dollars = 0;
        var cents = 0;
        for(k=0; k<cart.length; k++){
            if(cart[k].quantity != 0){
                // totalIn = Math.round( (totalIn +  (parseFloat(cart[k].priceDollar + '.' + cart[k].priceCents))*cart[k].quantity)*100 )/100;
                dollars = dollars + parseInt(cart[k].priceDollar)*parseInt(cart[k].quantity);
                cents = cents + parseInt(cart[k].priceCents)*parseInt(cart[k].quantity);
            }
            
        }
        var quotient = Math.floor(cents/100);
        var remainder = cents%100;
        dollars = dollars + quotient;
        totalIn = dollars + remainder/100;


        // check if time coupon is valid
        if(timeOver == 'true'){
            if(!cross){
                $("#coupon-code-applied-mobile").css('display','none');
                $("#coupon-code-expired-mobile").css('display','block');
                
            }
            $("#final-total-mobile").html(String(totalIn) + '$');
            finalTotal = totalIn;
            if(flat5){
                $("#coupon-code-applied-mobile").css('display','none');
                $("#coupon-code-expired-mobile").css('display','block');
                $("#coupon-code-input-container-mobile").css('display', 'none');
                flat5 = false;
            }
            if(typeof(coupon_sent.coupon) !== 'undefined'){
                $("#coupon-code-applied-mobile").css('display','block');
                $("#coupon-code-expired-mobile").css('display','none');
                $("#coupon-code-input-container-mobile").css('display', 'none');
                finalTotal = (totalIn-parseInt(coupon_sent.value)).toFixed(2);
                if(finalTotal < 0){
                    finalTotal = 0;
                }
                $("#final-total-mobile").html(String(finalTotal) + '$');
                
            }
        } else{
            //console.log(cross);
            //console.log(removedDiscount);
            //console.log(flat5);
            if(!cross){
                $("#coupon-code-applied-mobile").css('display','block');
                $("#coupon-code-expired-mobile").css('display','none');
            
            }
            if(removedDiscount){
                $("#coupon-code-applied-mobile").css('display','none');
                $("#final-total-mobile").html(String(totalIn) + '$');
                finalTotal = totalIn;
            } else{
                finalTotal = totalIn-5;
                if(finalTotal < 0){
                    finalTotal = 0;
                }
                $("#final-total-mobile").html(String(finalTotal) + '$');
                
                
            }
            if(flat5){
                $("#coupon-code-applied-mobile").css('display','block');
                $("#coupon-code-expired-mobile").css('display','none');
                $("#coupon-code-input-container-mobile").css('display', 'none');
                finalTotal = totalIn-5;
                if(finalTotal < 0){
                    finalTotal = 0;
                }
                $("#final-total-mobile").html(String(finalTotal) + '$');
                
                
            }
            if(typeof(coupon_sent.coupon) !== 'undefined'){
                $("#coupon-code-applied-mobile").css('display','block');
                $("#coupon-code-expired-mobile").css('display','none');
                $("#coupon-code-input-container-mobile").css('display', 'none');
                finalTotal = (totalIn-parseInt(coupon_sent.value)).toFixed(2);
                if(finalTotal < 0){
                    finalTotal = 0;
                }
                $("#final-total-mobile").html(String(finalTotal) + '$');
                
            }
            
        }
        $("#your-total-mobile").html(String(totalIn) + '$');
        
        return totalIn;
    }

    var setIncreaseAndDecrease = function (index, addCart = false) {
        if(!addCart){
            //console.log(index);
            $('#quantity-increase-mobile-'+index).on('click',function(){
                // alert('quantity incarease fired');
                var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                itemNumber = parseInt(itemNumber);
                cart[itemNumber].quantity = cart[itemNumber].quantity + 1;
                setCookie1('cart',JSON.stringify(cart),7);
                $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                var totalin = totalInCart();
                
            });

            $('#quantity-decrease-mobile-'+index).on('click',function(){
                var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                itemNumber = parseInt(itemNumber);
                if(cart[itemNumber].quantity >1){
                    cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                    setCookie1('cart',JSON.stringify(cart),7);
                    $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                } else if(cart[itemNumber].quantity == 1){
                    // cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                    // setCookie1('cart',JSON.stringify(cart),7);
                    // $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                    //console.log('entered here');
                    cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                    // cart.splice(itemNumber,1);
                    setCookie1('cart',JSON.stringify(cart),7);
                    $('#item-container-mobile-'+itemNumber).css('display','none');
                    var count = 0;
                    for(var i=0; i<cart.length; i++){
                        if(cart[i].quantity == 0){
                            count = count + 1;
                        }
                    }
                    $("#cart-message-mobile").html(String(cart.length - count));
                    $("#drawer-message-mobile").html(String(cart.length - count));
                }

                var totalin = totalInCart();
                
                
            });
        } else{
            //console.log(cart);
            for (var j=0; j<=index; j++){
                //console.log('inside for',j);
                $('#quantity-increase-mobile-'+j).on('click',function(){
                    // alert('quantity incarease fired');
                    var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                    itemNumber = parseInt(itemNumber);
                    //console.log('cart',cart[itemNumber]);
                    //console.log('itemNumber',itemNumber);
                    cart[itemNumber].quantity = cart[itemNumber].quantity + 1;
                    setCookie1('cart',JSON.stringify(cart),7);
                    $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                    var totalin = totalInCart();
                    
                });

                $('#quantity-decrease-mobile-'+j).on('click',function(){
                    var itemNumber = $(this).attr('id').charAt($(this).attr('id').length-1);
                    itemNumber = parseInt(itemNumber);
                    if(cart[itemNumber].quantity >1){
                        cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        setCookie1('cart',JSON.stringify(cart),7);
                        $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                    } else if(cart[itemNumber].quantity == 1){
                        // cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        // setCookie1('cart',JSON.stringify(cart),7);
                        // $('#quantity-display-mobile-'+itemNumber).html(cart[itemNumber].quantity);
                        cart[itemNumber].quantity = cart[itemNumber].quantity - 1;
                        // cart.splice(itemNumber,1);
                        setCookie1('cart',JSON.stringify(cart),7);
                        $('#item-container-mobile-'+itemNumber).css('display','none');
                        var count = 0;
                        for(var i=0; i<cart.length; i++){
                            if(cart[i].quantity == 0){
                                count = count + 1;
                            }
                        }
                        $("#cart-message-mobile").html(String(cart.length - count));
                        $("#drawer-message-mobile").html(String(cart.length - count));
                    }

                    var totalin = totalInCart();
                    
                    
                });
            }
        }
        
    }
    
    
    // get cart elements
    var cart = JSON.parse(getCookie1('cart'));
    if (cart == null || typeof(cart[0]) === 'undefined'){
        // $("#cart-container-mobile").css('display','none');
        $("#items-you-want-mobile").html('Feed Your Cart');
        $("#cart-empty-image-mobile").css('display', 'block');

        
    } else{
        
        // console.log('inside here');
        for (var i=0; i<cart.length; i++){
            
            //console.log(typeof(cart[i].quantity));
            if(typeof(cart[i].quantity) === 'undefined'){
                cart[i]['quantity'] = 1;
                setCookie1('cart',JSON.stringify(cart),7);
            }
            if(cart[i].quantity == 0){
                cart.splice(i,1);
                setCookie1('cart',JSON.stringify(cart),7);
            } 
            if(typeof(cart[i]) !== 'undefined'){
                if(cart[i].quantity != 0){
                    $('#items-list-mobile').html($('#items-list-mobile').html() + '<li id="item-container-mobile-'+i +'"><div class="container-fluid"><div class="row"><div class="col-6 p-0"><p class="font-poppins-regular m-0 text-left text-capitalize" style="font-size: 14px;">'+ cart[i].productName +' Skin</p><p class="font-poppins-bold m-0 text-left text-capitalize" style="font-size: 14px;">'+ cart[i].designName +'</p></div><div class="col-3 px-1"><p class="font-poppins-bold m-0 text-left" style="font-size: 14px;">'+ cart[i].priceDollar +'.'+ cart[i].priceCents +'$</p></div><div class="col-3 d-flex justify-content-end pl-0 pr-0"><p class="font-poppins-bold m-0 mr-1 text-left" style="font-size: 14px;">X<span id="quantity-display-mobile-'+ i +'">'+ cart[i].quantity +'</span></p><div class=" cursor-pointer" style="background-color: black; color: white; font-size: 11px; font-weight: bold; height: 18px; display: flex; justify-content: center; align-items: center; padding: 3px;" id="quantity-increase-mobile-'+ i+ '">+</div><div class="py-2 cursor-pointer ml-1" style="background-color: black; color: white; font-size: 17px; font-weight: bold; height: 18px; display: flex; justify-content: center; align-items: center; padding-left: 3px; padding-right: 3px;"id="quantity-decrease-mobile-'+ i+ '">-</div></div></div></div></li>');
                
                }
            }
            
        }

        for(var j=0; j<cart.length; j++){
            setIncreaseAndDecrease(j);
        }
        totalInCart();
    }

    

    //script for paypal mobile
    paypal.Button.render({
        // Configure environment
        env: 'production',
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
            var cartitems = [];
            var subTotal = 0;
            var ids = "";
            var types = "";
            var dollars = 0;
            var cents = 0;
            for (var i=0; i<cart.length; i++){
                if(cart[i].quantity > 0){
                    cartitems.push({
                        name: cart[i].designName + ' - ' + cart[i].productName + ' skin',
                        description: 'Customized ' + cart[i].productName + ' skin - ' + cart[i].designName,
                        quantity: cart[i].quantity,
                        price: String(cart[i].priceDollar) + '.' + String(cart[i].priceCents),
                        tax: '0',
                        sku: cart[i].sku,
                        currency: 'USD'
                    });
                    // subTotal = Math.round( (subTotal +  (parseFloat(cart[i].priceDollar + '.' + cart[i].priceCents))*cart[i].quantity)*100 )/100;
                    dollars = dollars + parseInt(cart[i].priceDollar)*parseInt(cart[i].quantity);
                    cents = cents + parseInt(cart[i].priceCents)*parseInt(cart[i].quantity);
    
                    ids = ids + ' '+cart[i].designName;
                    types = types + ' ' + cart[i].productName;
                }
                

            }
            var quotient = Math.floor(cents/100);
            var remainder = cents%100;
            dollars = dollars + quotient;
            subTotal = dollars + remainder/100;

           
            fbq('track', 'InitiateCheckout', {
                value: finalTotal,
                currency: 'USD',
                product_group: ids,
                product: types,
            });
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'InitiateCheckout', 
                'design' :  ids,
                'product': types,
                'value' : finalTotal
            });

            //console.log(finalTotal);
            var discount = '0.00';
            if(timeOver == 'true'){
                if(typeof(coupon_sent.coupon) !== 'undefined' ){
                    discount = String(coupon_sent.value) + ".00";
                    // console.log(discount);
                }
            } else{
                
                if(!removedDiscount){
                    discount = '5.00';
                }
                if(flat5){
                    discount = '5.00';
                }
                if(typeof(coupon_sent.coupon) !== 'undefined' ){
                    discount = String(coupon_sent.value) + ".00";
                }
                
            }
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: finalTotal,
                        currency: 'USD',
                        details: {
                            subtotal: subTotal,
                            tax: '0.00',
                            shipping: '0.00',
                            handling_fee: '0.00',
                            discount: discount,
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
                        items: cartitems,
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
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(e) {
                // Show a confirmation message to the buyer
                // window.alert('Thank you for your purchase!');
                // //console.log(e);
                // //console.log(JSON.stringify(e));
                // var resultArray = [];
                // resultArray.push(cart);
                $("#loader").removeClass('slide');
                var ids = "";
                var types = "";
                for(var i=0; i<cart.length; i++){
                    ids = ids + ','+cart[i].designName;
                    types = types + ',' + cart[i].productName;
                }
                fbq('track', 'Purchase', {
                    value: e.transactions[0].amount.total,
                    currency: 'USD',
                    product_group: ids,
                    product: types,
                });
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'Purchase', 
                    'design' :  ids,
                    'product': types,
                    'value' : e.transactions[0].amount.total
                });
                var coupon_code1 = "";
                if(typeof(coupon_sent.coupon) !== 'undefined'){
                    coupon_code1 = coupon_sent.coupon;
                }
                $.ajax({
                    type:'POST',
                    url:'../php/payment-success.php',
                    dataType: "json",
                    data:{
                        items : JSON.stringify(cart),
                        paypalPayId : e.id,
                        payerInfo : JSON.stringify(e.payer.payer_info) ,
                        shippingAddress : JSON.stringify(e.payer.payer_info.shipping_address),
                        amount : e.transactions[0].amount.total,
                        object : JSON.stringify(e),
                        "coupon": coupon_code1
                    },
                    success:function(data){
                        if(data.status == 'ok'){
                            //console.log('here');
                            document.cookie = 'cart= ; expires = Thu, 01 Jan 1970 00:00:00 GMT; path=/';  
                            window.location = "thankyou?orderId=" + data.id;
                            // alert("Your payment has been successful");
                            // //console.log(data);
                            // $("#checkout-form-desktop").css('display','none');
                            // $("#order-success-desktop").css('display','block');
                            // $("#order-id-desktop").html('#'+String(order_id_desktop));
                            // window.scrollTo(0,0);
                            // window.dataLayer = window.dataLayer || [];
                            // window.dataLayer.push({'event': '<?php echo $product_name; ?> paypal'});

                        }else{
                            //console.log("error");
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

}