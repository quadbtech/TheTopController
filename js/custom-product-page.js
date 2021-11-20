
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
            $("#products-desktop-1").load('../templates/products-desktop-1.html');
            $("#how-to-install-desktop-1").load('../templates/how-to-install-desktop-1.html');
            $("#footer-desktop-1").load('../templates/footer-desktop-1.html');
            
            formElem.onsubmit = async (e) => {
                e.preventDefault();
                $("#loader").removeClass('slide');
                var name = $("#name-desktop").val();
                var phone = $("#phone-desktop").val();
                var email = $("#email-desktop").val();
                var image = $("#image-desktop").val();
                $("#productNameForm").val(productNameUrl);
                //console.log(productNameUrl);
                var error = "";
                function validateEmail(email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(email).toLowerCase());
                }
                if(name == ""){
                    $("#name-desktop").css('border-color','red');
                    $("#name-desktop").css('border-width','2px');
                    error = error + 'name';
                } else{
                    $("#name-desktop").css('border-color','white');
                    $("#name-desktop").css('border-width','1px');
                }
                if(phone == ""){
                    $("#phone-desktop").css('border-color','red');
                    $("#phone-desktop").css('border-width','2px');
                    error = error + 'phone';
                }else{
                    $("#phone-desktop").css('border-color','white');
                    $("#phone-desktop").css('border-width','1px');
                }
                if(!validateEmail(email)){
                    $("#email-desktop").css('border-color','red');
                    $("#email-desktop").css('border-width','2px');
                    error = error + 'email';
                }else{
                    $("#email-desktop").css('border-color','white');
                    $("#email-desktop").css('border-width','1px');
                }
                if(image == ""){
                    $("#image-desktop").css('border-color','red');
                    $("#image-desktop").css('border-width','2px');
                    error = error + 'email';
                }else{
                    $("#image-desktop").css('border-color','white');
                    $("#image-desktop").css('border-width','1px');
                }

                var contactSuccess = $("#contact-success-desktop");
                var contactForm = $("#contact-form-desktop");
                var ticket_id = $("#ticket-id-desktop")

                if(error == ""){
                    let response = await fetch('../php/custom-design-form.php', {
                        method: 'POST',
                        body: new FormData(formElem)
                    });
                    var result = await response.json();
                    console.log(result);
                    if (result.status == 'ok'){
                        contactSuccess.css('display' ,'block');
                        contactForm.css('display','none');
                        ticket_id.html('#'+result.id);
                        fbq('trackCustom', 'custom-design-request');
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'custom-design-request',
                            'name': name,
                            'phone': phone,
                            'email' : email
                        });
                        $("#loader").addClass('slide');
                    }else{
                        alert(result.error);
                        $("#loader").addClass('slide');
                    }    
                } else{
                $("#loader").addClass('slide');
                }             
            };

            // var for swap images
            var result ={};
            var images1 = {};
            var images2 = {};
            var images3 = {};
            var images4 = {};

            var largeImage = {};
            var thumbImage1 = {};
            var thumbImage2 = {};
            var thumbImage3 = {};
            // ajax function
            var itemArray = [];

            if(params.productName == 'xbox-one-controller' || params.productName == 'xbox-one-s-controller' || params.productName == 'xbox-one-x-controller' || params.productName == 'xbox-one-elite-controller' || params.productName == 'xbox-one-elite-wireless-controller'|| params.productName == 'xbox-one-console' || params.productName == 'xbox-one-s-console' || params.productName == 'xbox-one-x-console' || params.productName == 'xbox-one-bundle' || params.productName == 'xbox-one-s-bundle' || params.productName == 'xbox-one-x-bundle')  {

                $.ajax({
                    type:'POST',
                    url:'../php/getDataCustom.php',
                    dataType: "json",
                    data:{
                        get_data:'selectedProduct',
                        "designName": designNameUrl,
                        "productName": productNameUrl
                    },
                    success:function(data){
                        if(data.status == 'ok'){
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
                            
                            // images swap
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
                            
                            $('#largeImage').attr('src',largeImage.productImageLoc);

                            $('#thumbImage1').attr('src',thumbImage1.productImageThumbLoc);

                            $('#thumbImage2').attr('src',thumbImage2.productImageThumbLoc);

                            $('#thumbImage3').attr('src',thumbImage3.productImageThumbLoc);

                            // product 1
                            $("#ap-image-desktop-1").attr('src',data.product1.productImage);
                            $("#ap-name-desktop-1").html(data.product1.productName + ' skin');
                            $("#ap-dollar-desktop-1").html(data.product1.priceDollar);
                            $("#ap-cents-desktop-1").html(data.product1.priceCents);
                            $("#ap-button-desktop-1").attr('href',data.product1.productUrl);

                            // product 2
                            $("#ap-image-desktop-2").attr('src',data.product2.productImage);
                            $("#ap-name-desktop-2").html(data.product2.productName + ' skin');
                            $("#ap-dollar-desktop-2").html(data.product2.priceDollar);
                            $("#ap-cents-desktop-2").html(data.product2.priceCents);
                            $("#ap-button-desktop-2").attr('href',data.product2.productUrl);

                            // product 3
                            $("#ap-image-desktop-3").attr('src',data.product3.productImage);
                            $("#ap-name-desktop-3").html(data.product3.productName + ' skin');
                            $("#ap-dollar-desktop-3").html(data.product3.priceDollar);
                            $("#ap-cents-desktop-3").html(data.product3.priceCents);
                            $("#ap-button-desktop-3").attr('href',data.product3.productUrl);

                            // product 4
                            $("#ap-image-desktop-4").attr('src',data.product4.productImage);
                            $("#ap-name-desktop-4").html(data.product4.productName + ' skin');
                            $("#ap-dollar-desktop-4").html(data.product4.priceDollar);
                            $("#ap-cents-desktop-4").html(data.product4.priceCents);
                            $("#ap-button-desktop-4").attr('href',data.product4.productUrl);

                            $("#loader").addClass('slide');
                        }else{
                            console.log("not okay");
                            $("#loader").addClass('slide');
                        } 
                    }
                });
            }else {
                $.ajax({
                    type:'POST',
                    url:'../php/getDataPlayStationController.php',
                    dataType: "json",
                    data:{
                        get_data:'selectedProduct',
                        "designName": designNameUrl,
                        "productName": productNameUrl
                    },
                    success:function(data){
                        if(data.status == 'ok'){
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
                            
                            // images swap
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
                            
                            $('#largeImage').attr('src',largeImage.productImageLoc);

                            $('#thumbImage1').attr('src',thumbImage1.productImageThumbLoc);

                            $('#thumbImage2').attr('src',thumbImage2.productImageThumbLoc);

                            $('#thumbImage3').attr('src',thumbImage3.productImageThumbLoc);

                            // product 1
                            $("#ap-image-desktop-1").attr('src',data.product1.productImage);
                            $("#ap-name-desktop-1").html(data.product1.productName + ' skin');
                            $("#ap-dollar-desktop-1").html(data.product1.priceDollar);
                            $("#ap-cents-desktop-1").html(data.product1.priceCents);
                            $("#ap-button-desktop-1").attr('href',data.product1.productUrl);

                            // product 2
                            $("#ap-image-desktop-2").attr('src',data.product2.productImage);
                            $("#ap-name-desktop-2").html(data.product2.productName + ' skin');
                            $("#ap-dollar-desktop-2").html(data.product2.priceDollar);
                            $("#ap-cents-desktop-2").html(data.product2.priceCents);
                            $("#ap-button-desktop-2").attr('href',data.product2.productUrl);

                            // product 3
                            $("#ap-image-desktop-3").attr('src',data.product3.productImage);
                            $("#ap-name-desktop-3").html(data.product3.productName + ' skin');
                            $("#ap-dollar-desktop-3").html(data.product3.priceDollar);
                            $("#ap-cents-desktop-3").html(data.product3.priceCents);
                            $("#ap-button-desktop-3").attr('href',data.product3.productUrl);

                            // product 4
                            $("#ap-image-desktop-4").attr('src',data.product4.productImage);
                            $("#ap-name-desktop-4").html(data.product4.productName + ' skin');
                            $("#ap-dollar-desktop-4").html(data.product4.priceDollar);
                            $("#ap-cents-desktop-4").html(data.product4.priceCents);
                            $("#ap-button-desktop-4").attr('href',data.product4.productUrl);

                            $("#loader").addClass('slide');
                        }else{
                            console.log("not okay");
                            $("#loader").addClass('slide');
                        } 
                    }
                });
            }
            // 4-images Slide   
            function changeImage(click_id) {
                
                if (click_id == 'thumbImage1' ) {
                                    
                    var temp1 = {};
                    temp1  = largeImage;
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
                    console.log (click_id);
                    var temp1 = {};
                    temp1  = largeImage;
                    largeImage = thumbImage2;
                    thumbImage2 = thumbImage3;
                    thumbImage3 = temp1;  
                    
                    $('#largeImage').attr('src', largeImage.productImageLoc);
                    $('#thumbImage2').attr('src', thumbImage2.productImageThumbLoc);
                    $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);
                }
                else if (click_id == 'thumbImage3') {                
                    console.log (click_id);
                    var temp1 = {};
                    temp1  = largeImage;
                    largeImage = thumbImage3;
                    thumbImage3 = temp1;

                    $('#largeImage').attr('src', largeImage.productImageLoc);
                    $('#thumbImage3').attr('src', thumbImage3.productImageThumbLoc);
                }
                else
                {   
                    console.log(result.productImageLoc2);                
                }
            }


            //FOR ABOUT SLIDER
            //function to move slides by default after every five seconds
            function timerSlider2(){
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
            $("#about-right").on('click',function(){
                console.log("click");
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
            $("#about-left").on('click',function(){
                console.log("click");
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

        }
        
        // mobile code
        else{

            //load templates
            $("#products-mobile-1").load('../templates/products-mobile-1.html');
            $("#designs-mobile-1").load('../templates/designs-mobile-1.html');
            $("#how-to-install-mobile-1").load('../templates/how-to-install-mobile-1.html');
            $("#footer-mobile-1").load('../templates/footer-mobile-1.html');
            

            formElemMobile.onsubmit = async (e) => {
                e.preventDefault();
                $("#loader").removeClass('slide');
                var name = $("#name-mobile").val();
                var phone = $("#phone-mobile").val();
                var email = $("#email-mobile").val();
                var image = $("#image-mobile").val();
                $("#productNameForm-mobile").val(productNameUrl);
                var error = "";
                function validateEmail(email) {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(String(email).toLowerCase());
                }
                if(name == ""){
                    $("#name-mobile").css('border-color','red');
                    $("#name-mobile").css('border-width','2px');
                    error = error + 'name';
                } else{
                    $("#name-mobile").css('border-color','white');
                    $("#name-mobile").css('border-width','1px');
                }
                if(phone == ""){
                    $("#phone-mobile").css('border-color','red');
                    $("#phone-mobile").css('border-width','2px');
                    error = error + 'phone';
                }else{
                    $("#phone-mobile").css('border-color','white');
                    $("#phone-mobile").css('border-width','1px');
                }
                if(!validateEmail(email)){
                    $("#email-mobile").css('border-color','red');
                    $("#email-mobile").css('border-width','2px');
                    error = error + 'email';
                }else{
                    $("#email-mobile").css('border-color','white');
                    $("#email-mobile").css('border-width','1px');
                }
                if(image == ""){
                    $("#image-mobile").css('border-color','red');
                    $("#image-mobile").css('border-width','2px');
                    error = error + 'email';
                }else{
                    $("#image-mobile").css('border-color','white');
                    $("#image-mobile").css('border-width','1px');
                }

                var contactSuccess = $("#contact-success-mobile");
                var contactForm = $("#contact-form-mobile");
                var ticket_id = $("#ticket-id-mobile")

                if(error == ""){
                    let response = await fetch('../php/custom-design-form.php', {
                        method: 'POST',
                        body: new FormData(formElemMobile)
                    });
                    var result = await response.json();
                    // console.log(result.id);
                    if (result.status == 'ok'){
                        contactSuccess.css('display' ,'block');
                        contactForm.css('display','none');
                        ticket_id.html('#'+result.id);
                        $("#loader").addClass('slide');
                        fbq('trackCustom', 'custom-design-request');
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'custom-design-request',
                            'name': name,
                            'phone': phone,
                            'email' : email
                        });
                    }else{
                        alert("Please check Form");
                        $("#loader").addClass('slide');
                    }    
                } else{
                    $("#loader").addClass('slide');
                }             
            };

            // var for swap images
            var result ={};
            var images1 = {};
            var images2 = {};
            var images3 = {};
            var images4 = {};

            var largeImage = {};
            var thumbImage1 = {};
            var thumbImage2 = {};
            var thumbImage3 = {};
            // ajax function
            var itemArray = [];

            if(params.productName == 'xbox-one-controller' || params.productName == 'xbox-one-s-controller' || params.productName == 'xbox-one-x-controller' || params.productName == 'xbox-one-elite-controller' || params.productName == 'xbox-one-elite-wireless-controller'|| params.productName == 'xbox-one-console' || params.productName == 'xbox-one-s-console' || params.productName == 'xbox-one-x-console' || params.productName == 'xbox-one-bundle' || params.productName == 'xbox-one-s-bundle' || params.productName == 'xbox-one-x-bundle')  {

                $.ajax({
                    type:'POST',
                    url:'../php/getDataCustom.php',
                    dataType: "json",
                    data:{
                        get_data:'selectedProduct',
                        "designName": designNameUrl,
                        "productName": productNameUrl
                    },
                    success:function(data){
                        if(data.status == 'ok'){
                            result = data.result;
                            // console.log(result);                    

                            $("#designNameHtml-mobile").html(result.designNameHtml);
                            $("#productName-mobile").html(result.productName);
                            $("#priceDollar-mobile").html(result.priceDollar);
                            $("#priceCents-mobile").html(result.priceCents);
                            $("#shortDescription-mobile").html(result.shortDescription);
                            $("#specification-mobile").html(result.specification);
                            // $("#largeImage").attr("src",result.productImageLoc1);
                            // $("#thumbImage1").attr("src",result.productImageThumbLoc2);
                            // $("#thumbImage2").attr("src",result.productImageThumbLoc3);
                            // $("#thumbImage3").attr("src",result.productImageThumbLoc4); 
                            
                            // images swap
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
                            
                            $('#largeImage-mobile').attr('src',largeImage.productImageLoc);

                            $('#thumbImage1-mobile').attr('src',thumbImage1.productImageThumbLoc);

                            $('#thumbImage2-mobile').attr('src',thumbImage2.productImageThumbLoc);

                            $('#thumbImage3-mobile').attr('src',thumbImage3.productImageThumbLoc);

                            // product 1
                            $("#ap-image-mobile-1").attr('src',data.product1.productImage);
                            $("#ap-name-mobile-1").html(data.product1.productName + ' skin');
                            $("#ap-dollar-mobile-1").html(data.product1.priceDollar);
                            $("#ap-cents-mobile-1").html(data.product1.priceCents);
                            $("#ap-button-mobile-1").attr('href',data.product1.productUrl);

                            // product 2
                            $("#ap-image-mobile-2").attr('src',data.product2.productImage);
                            $("#ap-name-mobile-2").html(data.product2.productName + ' skin');
                            $("#ap-dollar-mobile-2").html(data.product2.priceDollar);
                            $("#ap-cents-mobile-2").html(data.product2.priceCents);
                            $("#ap-button-mobile-2").attr('href',data.product2.productUrl);

                            // product 3
                            $("#ap-image-mobile-3").attr('src',data.product3.productImage);
                            $("#ap-name-mobile-3").html(data.product3.productName + ' skin');
                            $("#ap-dollar-mobile-3").html(data.product3.priceDollar);
                            $("#ap-cents-mobile-3").html(data.product3.priceCents);
                            $("#ap-button-mobile-3").attr('href',data.product3.productUrl);

                            // product 4
                            $("#ap-image-mobile-4").attr('src',data.product4.productImage);
                            $("#ap-name-mobile-4").html(data.product4.productName + ' skin');
                            $("#ap-dollar-mobile-4").html(data.product4.priceDollar);
                            $("#ap-cents-mobile-4").html(data.product4.priceCents);
                            $("#ap-button-mobile-4").attr('href',data.product4.productUrl);
                            
                            $("#loader").addClass('slide');
                        }else{
                            console.log("not okay");
                            $("#loader").addClass('slide');
                        } 
                    }
                });

            }else {
                $.ajax({
                    type:'POST',
                    url:'../php/getDataPlayStationController.php',
                    dataType: "json",
                    data:{
                        get_data:'selectedProduct',
                        "designName": designNameUrl,
                        "productName": productNameUrl
                    },
                    success:function(data){
                        if(data.status == 'ok'){
                            result = data.result;
                            // console.log(result);                    

                            $("#designNameHtml-mobile").html(result.designNameHtml);
                            $("#productName-mobile").html(result.productName);
                            $("#priceDollar-mobile").html(result.priceDollar);
                            $("#priceCents-mobile").html(result.priceCents);
                            $("#shortDescription-mobile").html(result.shortDescription);
                            $("#specification-mobile").html(result.specification);
                            // $("#largeImage").attr("src",result.productImageLoc1);
                            // $("#thumbImage1").attr("src",result.productImageThumbLoc2);
                            // $("#thumbImage2").attr("src",result.productImageThumbLoc3);
                            // $("#thumbImage3").attr("src",result.productImageThumbLoc4); 
                            
                            // images swap
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
                            
                            $('#largeImage-mobile').attr('src',largeImage.productImageLoc);

                            $('#thumbImage1-mobile').attr('src',thumbImage1.productImageThumbLoc);

                            $('#thumbImage2-mobile').attr('src',thumbImage2.productImageThumbLoc);

                            $('#thumbImage3-mobile').attr('src',thumbImage3.productImageThumbLoc);

                            // product 1
                            $("#ap-image-mobile-1").attr('src',data.product1.productImage);
                            $("#ap-name-mobile-1").html(data.product1.productName + ' skin');
                            $("#ap-dollar-mobile-1").html(data.product1.priceDollar);
                            $("#ap-cents-mobile-1").html(data.product1.priceCents);
                            $("#ap-button-mobile-1").attr('href',data.product1.productUrl);

                            // product 2
                            $("#ap-image-mobile-2").attr('src',data.product2.productImage);
                            $("#ap-name-mobile-2").html(data.product2.productName + ' skin');
                            $("#ap-dollar-mobile-2").html(data.product2.priceDollar);
                            $("#ap-cents-mobile-2").html(data.product2.priceCents);
                            $("#ap-button-mobile-2").attr('href',data.product2.productUrl);

                            // product 3
                            $("#ap-image-mobile-3").attr('src',data.product3.productImage);
                            $("#ap-name-mobile-3").html(data.product3.productName + ' skin');
                            $("#ap-dollar-mobile-3").html(data.product3.priceDollar);
                            $("#ap-cents-mobile-3").html(data.product3.priceCents);
                            $("#ap-button-mobile-3").attr('href',data.product3.productUrl);

                            // product 4
                            $("#ap-image-mobile-4").attr('src',data.product4.productImage);
                            $("#ap-name-mobile-4").html(data.product4.productName + ' skin');
                            $("#ap-dollar-mobile-4").html(data.product4.priceDollar);
                            $("#ap-cents-mobile-4").html(data.product4.priceCents);
                            $("#ap-button-mobile-4").attr('href',data.product4.productUrl);
                            
                            $("#loader").addClass('slide');
                        }else{
                            console.log("not okay");
                            $("#loader").addClass('slide');
                        } 
                    }
                });
            }
            // 4-images Slide   
            function changeImage(click_id) {
                
                if (click_id == 'thumbImage1-mobile' ) {
                                    
                    var temp1 = {};
                    temp1  = largeImage;
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
                    console.log (click_id);
                    var temp1 = {};
                    temp1  = largeImage;
                    largeImage = thumbImage2;
                    thumbImage2 = thumbImage3;
                    thumbImage3 = temp1;  
                    
                    $('#largeImage-mobile').attr('src', largeImage.productImageLoc);
                    $('#thumbImage2-mobile').attr('src', thumbImage2.productImageThumbLoc);
                    $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);
                }
                else if (click_id == 'thumbImage3-mobile') {                
                    console.log (click_id);
                    var temp1 = {};
                    temp1  = largeImage;
                    largeImage = thumbImage3;
                    thumbImage3 = temp1;

                    $('#largeImage-mobile').attr('src', largeImage.productImageLoc);
                    $('#thumbImage3-mobile').attr('src', thumbImage3.productImageThumbLoc);
                }
                else
                {   
                    console.log(result.productImageLoc2);                
                }
            }

            

            //FOR ABOUT SLIDER
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
                console.log("click");
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
            $("#about-left").on('click',function(){
                console.log("click");
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

        }
