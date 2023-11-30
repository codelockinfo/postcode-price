function include(filename, onload) {
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.src = filename;
    script.type = 'text/javascript';
    script.onload = script.onreadystatechange = function() {
        if (script.readyState) {
            if (script.readyState === 'complete' || script.readyState === 'loaded') {
                script.onreadystatechange = null;                                                  
                onload();
            }
        } 
        else {
            onload();          
        }
    };
    head.appendChild(script);
}

include('https://code.jquery.com/jquery-3.6.0.min.js', function() {
$(document).ready(function() {
    console.log("POSTCODE - PRICE");
    var shop = Shopify.shop;
    var cookie_version_control = '---2018/5/11';
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'https://postcode.codelocksolutions.com/assets/css/modal_front.css') );
    function setCookie(cName, cValue,expDays) {
            let date = new Date();
            date.setTime(date.getTime() + (expDays * 0));
            const expires = "expires=" + date.toUTCString();
            document.cookie = cName + "=" + cValue + "; " + expDays + "; path=/";
    }

    function deleteCookie(cName){
        setCookie(cName,"",-1);
    }

    function getCookie(cName) {
        const name = cName + "=";
        const cDecoded = decodeURIComponent(document.cookie); //to be careful
        const cArr = cDecoded .split('; ');
        let res;
        cArr.forEach(val => {
            if (val.indexOf(name) === 0) res = val.substring(name.length);
        })
        console.log(res);
        return res;
    }

    function check_app_status(){
        console.log("check_app_status function calling ");
        $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.price__regular .price-item--regular,.price .price__text,div span[data-product-price]").css("display","none");
            $.ajax({
                url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
                type: "POST",
                dataType: 'json',
                data: {'routine_name': 'check_app_status' ,'store': shop},
                beforeSend: function () {
                },
                success: function (comeback) {
                    console.log(comeback);
                    if (comeback['code'] != undefined && comeback['code'] == '403') {
                    }else if (comeback['outcome'] == 'true') {
                        if(comeback['data'] == '1'){
                            console.log(comeback['data']);
                            $(".single-option-selector").addClass("clssingle-option-selector");
                            console.log(window.location.href.includes("/products_preview?"));
                            console.log("--------------------------");
                                if(window.location.href.includes("/products/")){
                                    console.log("product page");
                                    $findbuynowbtn = setInterval(hasbuynowbtn, 1000); 
                                    setTimeout(function(){
                                        console.log("settimeout function calling ...");
                                        console.log(getCookie("postcodeval") );
                                        if(getCookie("postcodeval") == undefined || getCookie("postcodeval") == ""){
                                            popupHtml();
                                        }else{
                                            console.log("onload event for pdppage");
                                            // $(".product__price-container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap,.price--show-badge,.price-area,.price .price__text,div[data-price-wrapper].my-3").append(
                                            //     '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                            //     ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                            //         '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                            //     '</div>');
                                            $hasClasspostalholder = $("#postalholder").html();
                                            if($hasClasspostalholder == undefined){
                                                $(".product__price-container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-page-info__price,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap,.price--show-badge,.price-area,.price .price__text,div[data-price-wrapper].my-3").append(
                                                    '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                                    ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                                        '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                                    '</div>');
                                            }
                                            $hasClasspostalholder = $("#postalholder").html();
                                            if($hasClasspostalholder == undefined){
                                                console.log("postalholder inif");
                                                $('.product-single__meta .product__price,.price--show-badge,.product-info__price .product-info__price .price-list,.f8pr .f8pr-price,.price-area,.price__pricing-group,.product__price .type-body-regular,.product__price.no-js-hidden,.price-list.price-list--product').after( '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                                ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                                    '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                                '</div>');
                                            }
                                            $hasClasspostalholder = $("#postalholder").html();
                                            if($hasClasspostalholder == undefined){
                                                console.log("2nd in if");
                                                $('product-variants .product-variants').before( '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                                ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                                    '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                                '</div>');
                                            }
                                            $(".product-single__shopify-payment-btn").append('<div>'+
                                                '<a  name="clsaddtocart" id="clsAddToCart" class="btn clsproduct-single__cart-submit clsshopify-payment-btn btn--secondary clszipapp" style="padding: 7px 15px;color: #f5db00;border: 2px solid #f5db00;">'+
                                                '<span id="clsAddToCartText">Læg i indkøbskurv</span>'+
                                                '</a>'+
                                                '</div></br>'+
                                                '<div>'+
                                                '</div>');
                                            $("form[action='/cart/add']").append('<input type="hidden" name="clsproductxipcodevalue" id="clsproductZipcodevalue" value="'+getCookie("postcodeval")+'">');
                                            getTotalprice();
                                        }
                                    },1000); 
                                
                                    $(document).on("click",".postcode-checker-preview",function(event){
                                        console.log("CLICK BTN ");
                                        event.preventDefault();  
                                        getTotalprice();
                                    });
                            
                                    $(document).on("click",".close-btn, .bg-overlay",function(){
                                        console.log("close-btn btn call");
                                        $("#freightAreaZipcodePopup").val('');
                                        $(".select_postman_block").css("display","none");
                                        $(".custom-model-main").removeClass('model-open');
                                        $(".single-option-selector").attr("disabled",false);
                                    });
                                
                                    $(document).on("click","form button[type='submit'],form[action='/cart/add'] input[type='submit']",function (ent) {
                                        ent.preventDefault();
                                        console.log("Addtocart button click");
                                        addTocartfunc();
                                    });
                                
                                    $(document).on("click",".shopify-payment-button__button",function (e) {
                                        e.preventDefault();
                                        console.log("checkout button lick");
                                        setCookie('buynowbtn', "buynowbutton");
                                        addTocartfunc();
                                    });
                                
                                    $(document).on("click",".clsremovezipcode",function (e){
                                        e.preventDefault();
                                        deleteCookie("postcodeval");
                                        var url = "https://"+shop;
                                        $("#postalholder").css("opacity","0");
                                        window.location.replace(url);
                                    });
                                    
                                    $(document).on("keyup","#freightAreaZipcodePopup",function (e){
                                        e.preventDefault();
                                        console.log("zipcode pop up input keyup");
                                        var getpostcode = $(this).val();
                                        var searchKEYLEN = (getpostcode != undefined) ? getpostcode.length : 0;
                                            if (searchKEYLEN == 0 || searchKEYLEN >1) {
                                                            $(".select_postman_block").css("display","none");
                                            }
                                        if (searchKEYLEN >= 3) {
                                            console.log( " 0 to 2 ");
                                                $.ajax({
                                                url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
                                                type: "POST",
                                                dataType: 'json',
                                                data: {'routine_name': 'search_postcode' ,'store': shop,'postcode':getpostcode},
                                                beforeSend: function () { 
                                                },
                                                success: function (comeback) {
                                                        if (comeback['code'] != undefined && comeback['code'] == '403') {
                                                        }else if (comeback['outcome'] == 'true') {
                                                            $data = comeback['data']['zonearea'];
                                                            $zonename = comeback['data']['zonename'];
                                                            console.log($data);
                                                            console.log($zonename);
                                                            var select = "";
                                                            $.each($data, function (key, val) {
                                                                console.log(val);
                                                                if(val.split(",").length - 1){
                                                                    $zipsplitval = val.split(",");
                                                                    $.each($zipsplitval, function (index, value) {
                                                                        select += "<option value="+ value +">"+ value +" - "+$zonename[key]+"</option>";
                                                                        $(".select_postman_block").css("display","flex");
                                                                    });
                                                                }else{
                                                                    select += "<option value="+ val +">"+ val +" - "+$zonename[key]+"</option>";
                                                                    $(".select_postman_block").css("display","flex");
                                                                }
                                                            });
                                                                $(".postman_select").html(select);
                                                        }   
                                                    }
                                            });
                                        }
                                        $(".postman_select").html("");
                                    });
                                
                                    $(document).on("change",".postman_select,.postman_select_zonename",function(){
                                        var value= $(this).val();
                                        console.log(value);
                                        $(".clspostcode").val(value);
                                        setCookie('postcodeval',value);
                                    });

                                    $(document).on('change', 'input[name="id"],input[name="variant_id"]', function() {
                                        $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.price-area,.price__regular .price-item--regular,.price .price__text,div span[data-product-price],.price-list.price-list--product sale-price").css("display","none");
                                        console.log("CHANGE  id ");
                                        if(getCookie("postcodeval") == undefined || getCookie("postcodeval") == "" ){
                                            console.log("cookies");
                                            $("form button[type='submit'],.clspayment").attr("disabled",true); 
                                            $(".custom-model-main").addClass("model-open");
                                        }
                                        console.log("change id");
                                        getTotalprice();
                                    });

                                    $('select[name="id"]').change(function() {
                                        $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.price-area,.price__regular .price-item--regular,.price .price__text,div span[data-product-price],.price-list.price-list--product sale-price").css("display","none");
                                        console.log("SELECT OPTION CHANGE");
                                        if(getCookie("postcodeval") == undefined || getCookie("postcodeval") == "" ){
                                            console.log("cookies");
                                            $("form button[type='submit'],.clspayment").attr("disabled",true); 
                                            $(".custom-model-main").addClass("model-open");
                                        }
                                        getTotalprice();
                                    });

                                }
                        }else{
                            $(".single-option-selector").removeClass("clssingle-option-selector");
                            $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.price__regular .price-item--regular,.price .price__text,div span[data-product-price],.price-list.price-list--product sale-price").css("display","block");
                            console.log("Postcode app is disabled");
                        }
                    } else {
                        console.log("Something went wrong with postcode app");       
                    }
                            
                }
            });
    }   

    function popupHtml(){
        console.log("function calling POPUPHTML");
        $.ajax({
            url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
            type: "POST",
            dataType: 'json',
            data: {'routine_name': 'popup_setting_select' ,'store': shop},
            success: function (comeback) {
                if(comeback  != undefined){
                    var comeback = JSON.parse(comeback);
                    console.log(comeback);
                        var agreement_text = comeback.outcome.agreement_text !== '' ? comeback.outcome.agreement_text : "Save";
                        var position = comeback.outcome.position == 1 ? "top" : comeback.outcome.position == 2 ? "center" : "bottom";
                        if(position == "center"){
                            $popupPosition = "translateY(0)";
                        }else if(position == "top"){
                            $popupPosition = "translateY(-100%)";
                        }else{
                            $popupPosition = "translateY(100%)";
                        }
                        $('form button[type="submit"],.clspayment').attr("disabled",true);
                        $("body").append('<div class="custom-model-main model-open">'+
                        '<div class="custom-model-inner" style="-webkit-transform:'+ $popupPosition +'; -ms-transform: '+ $popupPosition  +'; transform: '+ $popupPosition +'; -webkit-transition: -webkit-transform 0.3s ease-out; -o-transition: -o-transform 0.3s ease-out; transition: -webkit-transform 0.3s ease-out; -o-transition: transform 0.3s ease-out; transition: transform 0.3s ease-out; transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out; display: inline-block; vertical-align: middle; width: 600px; margin: 30px auto; max-width: 97%;">  '+     
                        '<div class="close-btn" style="position: absolute; right: 7px; top: -12px; cursor: pointer; z-index: 99; font-size: 30px; color:'+ comeback.outcome.color_banner_link +';border-color:'+ comeback.outcome.color_button_border +'">×</div>'+
                            ' <div class="custom-model-wrap" style="height:'+comeback.outcome.popup_height+';display: block; width: 100%; position: relative; background-color:'+ comeback.outcome.color_banner +'; border: 1px solid #999; border: 1px solid rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); background-clip: padding-box; outline: 0; text-align: left; padding: 2rem; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;  box-sizing: border-box; max-height: calc(100vh - 70px);overflow-y: auto;color:'+ comeback.outcome.color_banner_text +'">'+
                                ' <div class="pop-up-content-wrap">'+
                                    '<div class="postalcode-popup">'+
                                        '<div class="heading heading--submit-postalcode" style="margin-bottom: 1rem;">'+
                                            '<div class="heading__name" style="font-size: '+ comeback.outcome.title_fontsize +';color:'+ comeback.outcome.color_banner_text +'">'+ comeback.outcome.title +'</div>'+
                                        '</div>'+
                                        '<div class="postalcode-panel">'+
                                            '<div class="postalcode-panel__description">'+
                                                '<span class="instruction" style="font-size: '+ comeback.outcome.message_fontsize +';color:'+ comeback.outcome.color_banner_link +';">'+ comeback.outcome.message +'</span>'+
                                            '<div class="form-group-grid">'+
                                                '<div class="form-group-grid__label">'+
                                            '</div>'+
                                                '<div class="form-group-grid__controls" style="display: flex;flex-wrap: wrap;font-size: '+ comeback.outcome.message_fontsize +';color:'+ comeback.outcome.color_banner_link +';"><span>'+comeback.outcome.maintitle+'</span>'+
                                                    '<input type="text" id="freightAreaZipcodePopup" class="form-control clspostcode" autocomplete="off" value="" style="font-size: '+ comeback.outcome.message_fontsize +';padding: 8px;margin:0 2.8%;border:'+ comeback.outcome.zipcode_border_width +'px solid '+ comeback.outcome.color_zipcode_border +';width: 140px;border-radius:'+ comeback.outcome.zipcode_border_radius +'px;color:'+ comeback.outcome.color_zipcode_text +';background-color:'+ comeback.outcome.color_zipcode_button +';">'+
                                                    '<button type="submit" class="btn btn-secondary postcode-app-btn postcode-checker-preview" style="cursor:pointer;font-size:'+ comeback.outcome.message_fontsize +';padding: 9px 15px;line-height: 0.10  !important;border-radius:'+ comeback.outcome.button_border_radius+'px;border:'+ comeback.outcome.button_border_width +'px solid '+ comeback.outcome.color_button_border +';color:'+ comeback.outcome.color_button_text +';background-color:'+ comeback.outcome.color_button +';">'+ agreement_text +'</button>'+
                                                ' </div>'+
                                                '<div class="select_postman_block" style="display: none;"></select><select name="select_postman" class="postman_select" style="border-top: 0;border-radius: 0;max-width: 100%;padding: 8px;width:140px;margin: 0 auto;display: flex;border:'+ comeback.outcome.zipcode_border_width +'px solid '+ comeback.outcome.color_zipcode_border +';border-radius:'+ comeback.outcome.zipcode_border_radius +'px;color:'+ comeback.outcome.color_zipcode_text +';background-color:'+ comeback.outcome.color_zipcode_button +';"></select></div>'+
                                            '</div>'+
                                            '<div style="width: 50%;text-align: center;"> <span class="chkpostcode errorcolor"  style="color:red;"></span></div>'+
                                            '</div>'+                                                    
                                        ' </div>'+
                                    '</div>'+
                                ' </div>'+
                            ' </div> '+ 
                        ' </div> '+ 
                        ' <div class="bg-overlay" style="display:block;background: rgba(0, 0, 0, 0.6); z-index: 99; height: 100vh; width: 100%; position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index:  -webkit-transition: background 0.15s linear; -o-transition: background 0.15s linear; transition: background 0.15s linear;"></div>'+
                    '</div> <style>.custom-model-main:before {content: "";display: inline-block;height: auto;vertical-align: middle;margin-right: -0px;height: 100%;}.clspostcode:focus-visible,.postman_select:focus-visible{box-shadow: unset;outline: none;}@media only screen and (max-width: 440px){ .form-group-grid__controls span{width: 100%;}.select_postman_block .postman_select{margin: 0 0 0 3.1% !important;}}</style>');
                    }
            }
        });
    }

    check_app_status();
    function getTotalprice(){
        console.log("getTotalprice function ");
        var clsgetpostcode = $(".clspostcode").val();
        var clsproductId = $('input[name="product-id"]').val();
        getpostcode = (clsgetpostcode == undefined || clsgetpostcode == "" ) ? getCookie("postcodeval") : clsgetpostcode;
        $.ajax({
            url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
            type: "POST",
            dataType: 'json',
            data: {'routine_name': 'get_postcode' ,'store': shop,'postcode':getpostcode,'productid':clsproductId},
            success: function (comeback) {
                if (comeback['code'] != undefined && comeback['code'] == '403') {
                }else if (comeback['outcome'] == 'true') {
                        $(".chkpostcode").html("");
                        $zonename = (comeback.data['zonename']);
                        $zoneprice = (comeback.data['zoneprice']);
                        $zonearea = (comeback.data['zonearea']);
                        $productVariantHtml = (comeback.data['productVariantHtml']);
                        $hasproductvariant = $("#productvariant").html();
                        if($hasproductvariant == undefined){
                            $('input[name="product-id"]').after('<input type="hidden" name="productvariant" id="productvariant" value="'+ $productVariantHtml +'">');
                        }
                        $productVariantId = "";
                        if($productVariantId == undefined || $productVariantId == ""){
                            console.log("Variant ID ");
                            // $productVariantId = $.urlParam('variant'); 
                            $productVariantId = getParameterByName('variant');
                            console.log($productVariantId + "VVVVVVVVVVVV");
                        }
                        if($productVariantId == undefined || $productVariantId == ""){
                            $productVariantId = $('input[name="id"]').val();
                            console.log($productVariantId + "VVVVVVVVVVVV");
                        }
                        if($productVariantId == undefined || $productVariantId == ""){
                            console.log("set default variant id");
                            $productVariantId = $('input[name="variant_id"]').val();
                            console.log($productVariantId + "VVVVVVVVVVVV");
                        }
                        //impulse 
                        if($productVariantId == undefined || $productVariantId == ""){
                            console.log("set default variant id");
                            $productVariantId = $('select[name="id"]  option:selected').val()
                            console.log($productVariantId + "VVVVVVVVVVVV");
                        }
                        //impulse 
                        
                        $productvariantHtml = $("#productvariant").val();
                        var pairs = $productvariantHtml.split(';');
                        for (var i = 0; i < pairs.length; i++) {
                            var pair = pairs[i].split(',');
                            if (pair[0] === $productVariantId) {
                                $newPrice = pair[1];
                                break; // Exit the loop when a match is found
                            }
                        }
                        if ($newPrice !== null) {
                            console.log("Value for " + $productVariantId + " is " + $newPrice);
                        } else {
                            console.log("Value not found for " + $productVariantId);
                        }
                        
                        $(".custom-model-main").removeClass("model-open");
                        setCookie('postcodeval',getpostcode);
                        setCookie('postcodename',$zonename);
                        setCookie('postcodeprice',$newPrice);
                        setCookie('zoneprice',$zoneprice);
                        
                        if(getCookie("postcodeval") != undefined || getCookie("postcodeval") != "" ){
                            $productPriceClassHtml = $(".price .price__regular .price-item").html();
                            $productPriceClass = $(".price .price__regular .price-item");
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.js-price .money');
                                $productPriceClassHtml = $('.js-price .money').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.js-price');
                                $productPriceClassHtml = $('.js-price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-info__price sale-price,.price-list sale-price ');
                                var $salePriceElement = $('.product-info__price  sale-price,.price-list sale-price ');
                                var priceText = $salePriceElement.text();
                                var match = priceText.match(/Rs\. \d+\.\d+/);
                                if (match) {
                                    $productPriceClassHtml = match[0];
                                    console.log($productPriceClassHtml );
                                } else {
                                    $productPriceClassHtml = undefined;
                                    console.log("Price not found.");
                                }
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-info__price sale-price');
                                $productPriceClassHtml = $('.product-info__price sale-price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-price span');
                                $productPriceClassHtml = $('.product-price span').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.t4s-product__price-review .t4s-product-price');
                                $productPriceClassHtml = $('.t4s-product__price-review .t4s-product-price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.f8pr .f8pr-price');
                                $productPriceClassHtml = $('.f8pr .f8pr-price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-single__prices .product-single__price');
                                $productPriceClassHtml = $('.product-single__prices .product-single__price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-page-info__price .price span');
                                $productPriceClassHtml = $('.product-page-info__price .price span').html();
                            }
                            console.log($productPriceClassHtml + "SHELLA THEME")
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-single__meta .product__price');
                                $productPriceClassHtml = $('.product-single__meta .product__price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.ProductMeta__PriceList .Price');
                                $productPriceClassHtml = $('.ProductMeta__PriceList .Price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.price-review .current_price');
                                $productPriceClassHtml = $('.price-review .current_price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product__price__wrap span');
                                $productPriceClassHtml = $('.product__price__wrap span').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product__price  .price__container');
                                $productPriceClassHtml = $('.product__price  .price__container').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.price  .price__container');
                                $productPriceClassHtml = $('.price  .price__container').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-price');
                                $productPriceClassHtml = $('.product-price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.product-info__price .price-list sale-price');
                                var $salePriceElement = $('.product-info__price .price-list sale-price');
                                $productPriceClassHtml = $salePriceElement.text();
                                var match = $productPriceClassHtml.match(/Rs\. \d+\.\d+/);
                                if (match) {
                                    $productPriceClassHtml = match[0];
                                    console.log($productPriceClassHtml );
                                } else {
                                    $productPriceClassHtml = undefined;
                                    console.log("Price not found.");
                                }
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.price-area .current-price');
                                $productPriceClassHtml = $('.price-area .current-price').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('.price__number .money');
                                $productPriceClassHtml = $('.price__number .money').html();
                            }
                            if($productPriceClassHtml == undefined){
                                $productPriceClass = $('div span[data-product-price]');
                                $productPriceClassHtml = $('div span[data-product-price]').html();
                            }
                            console.log($productPriceClassHtml+ "PPPPPPPPPPPPPPPPPPPPPPPPPPPP");
                            $ProductPriceSymbol =  $.trim($productPriceClassHtml);
                            $currecySymbol = $ProductPriceSymbol.split(' ');
                            console.log($currecySymbol);
                            
                            setTimeout(function(){
                                
                                $(".price-list.price-list--product sale-price").html('<span class="sr-only">Sale price</span>'+$currecySymbol[0]+" "+$newPrice);
                                $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review .t4s-product-price,.f8pr .f8pr-price,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.product-page-info__price .price span,.price-area .current-price,.price__regular .price-item--regular,.price__number .money,div span[data-product-price]").html($currecySymbol[0]+" "+$newPrice);
                                $("#postalholder").css({"opacity":"1","justify-content":"space-between"});
                                $hasClass = $("#clsproductZipcodevalue").val();
                                console.log($hasClass);
                                if($hasClass == undefined){
                                    console.log("HASclASS");
                                    $("form[action='/cart/add']").append('<input type="hidden" name="clsproductxipcodevalue" id="clsproductZipcodevalue" value="'+getCookie("postcodeval")+'">');
                                }else{
                                    console.log("HASCLASS ELSE");
                                }
                                $hasClasspostalholder = $("#postalholder").html();
                                if($hasClasspostalholder == undefined){
                                    $(".product__price-container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-page-info__price,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap,.price--show-badge,.price-area,.price .price__text,div[data-price-wrapper].my-3").append(
                                        '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                        ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                            '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                        '</div>');
                                }
                                $hasClasspostalholder = $("#postalholder").html();
                                if($hasClasspostalholder == undefined){
                                    console.log("postalholder inif");
                                    $('.product-single__meta .product__price,.price--show-badge,.product-info__price .price-list,.f8pr .f8pr-price,.price-area,.price__pricing-group,.product__price .type-body-regular,.product__price.no-js-hidden,.price-list.price-list--product').after( '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                    ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                        '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                    '</div>');
                                }
                                $hasClasspostalholder = $("#postalholder").html();
                                if($hasClasspostalholder == undefined){
                                    console.log("2nd in if");
                                    $('product-variants .product-variants').before( '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                                    ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                        '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/5000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                    '</div>');
                                }
                                $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.price-area,.price__regular .price-item--regular,.price .price__text,div span[data-product-price],.price-list.price-list--product sale-price").css("display","block");
                            },1500);
                        
                        }else{
                            $(".product__price-container .price__regular .price-item,.price__container,.price-wrapper,.product-page-price-wrp,.product-price,.t4s-product__price-review,.f8pr .f8pr-price,.product-single__prices,.product-single__meta .product__price,.ProductMeta__PriceList,.price-review,.product__price__wrap .product__price span,.product-info__price .price-list sale-price,.price-area,.price__regular .price-item--regular,.price .price__text,div span[data-product-price],.price-list.price-list--product sale-price").css("display","none");
                        }
                        
                        $('form button[type="submit"],.clspayment').attr("disabled",false);

                } else {
                    $(".clssucessmsg").html("");
                    $(".chkpostcode").text(comeback['msg']['postcode']);
                    $('form button[type="submit"],.clspayment').attr("disabled",true);
                }
            }
        });
    }

    function addTocartfunc(){

        var clsproductId = $('input[name="product-id"]').val();
        var productVariantId = $('input[name="id"]').val();
        $productQtyy = $(".quantity .quantity__input").val();
        $getpostcode = getCookie("postcodeval");
        $productvariantHtml = $("#productvariant").val();
        var pairs = $productvariantHtml.split(';');
        for (var i = 0; i < pairs.length; i++) {
            var pair = pairs[i].split(',');
            if (pair[0] === $productVariantId) {
                $price = pair[1];
                break; // Exit the loop when a match is found
            }
        }
        if ($price !== null) {
            console.log("Value for " + $productVariantId + " is " + $price);
        } else {
            console.log("Value not found for " + $productVariantId);
        }
        console.log($price);
        console.log($getpostcode + "ZIPCODE");
        if($getpostcode != undefined){
            var thisObj = this;
            $.ajax({
                url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
                type: "POST",
                dataType: 'json',
                data: {'routine_name': 'get__atc_product' ,'store': shop,'productid':clsproductId,'productvariantid':$productVariantId,'postcode':$getpostcode,'productprice':$price},
                success: function (comeback) {
                    console.log(comeback);
                    $.each(comeback.product.variants, function(key, value) {
                        var variant_id = value.id;
                        console.log(variant_id);
                            var params = {
                                type: 'POST',
                                url: '/cart/add.js',
                                data: {id: variant_id,quantity: $productQtyy},
                                dataType: 'json',
                                success: function(line_item) { 
                                    console.log(line_item);
                                    if(getCookie("buynowbtn") == undefined || getCookie("buynowbtn") == "" ){
                                        console.log("cart ");
                                        $(".product-single__shopify-payment-btn").append('<span>The item has been added to the shopping cart.</span>');
                                        window.location.href ='/cart';
                                    }else{
                                        deleteCookie("buynowbtn");
                                        console.log("checkout ");
                                        window.location.href ='/checkout';
                                    }
                                },
                                };
                                $.ajax(params);
                        });
                }
            });
        }else{
            $("form button[type='submit'],.clspayment").attr("disabled",true); 
            $(".custom-model-main").addClass("model-open");
        }
    }

    function  hasbuynowbtn(){
        $hasfindclass  = $("button").hasClass("shopify-payment-button__button");
        console.log($hasfindclass + "...hasbuynowbtn btn");
        if($hasfindclass == true){
            $paytment_Btn_class = $(".shopify-payment-button__button").attr("class");
            $paytment_Btn_text = $(".shopify-payment-button__button").html();
            $(".shopify-payment-button__button").css("display","none");
            $(".shopify-payment-button__button").css("cssText", "display: none !important");
            $payment_btn_Html = '<button class="'+ $paytment_Btn_class +' clspayment">'+ $paytment_Btn_text +'</button>';
            $(".product-form__buttons,.ProductForm,.product__submit__buttons,.payment-buttons,.dynamic-checkout,.buy-buttons .shopify-payment-button,.t4s-product-form__buttons .shopify-payment-button").append($payment_btn_Html);
            $hasClassclspayment = $(".clspayment").html();
            if($hasClassclspayment == undefined){
                $(".product__cart-functions .flex-buttons").append($payment_btn_Html);
            }
            $hasClassclspayment = $(".clspayment").html();
            if($hasClassclspayment == undefined){
                $("form .shopify-payment-button").append($payment_btn_Html);
            }
            $payment_btn_css = '<style>.clspayment::after {content: none !important;display: none !important;}</style>';
            $(".product-form__buttons,.ProductForm,.product__submit__buttons").append($payment_btn_css);
            clearInterval($findbuynowbtn);  
        }
    }

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    }

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[[]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return undefined;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
});
});
         
