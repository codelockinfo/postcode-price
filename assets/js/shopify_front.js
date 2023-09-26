
console.log("POSTCODE - PRICE");

jQuery(document).ready(function(){
    var cookie_version_control = '---2018/5/11';
   
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'https://postcode.codelocksolutions.com/assets/css/modal_front.css') );
    $('head').append( $('<script  type="text/javascript" />').attr('src', 'https://code.jquery.com/jquery-3.6.0.min.js') );
    

    var shop = Shopify.shop;
    $Productcontent =  $("#ProductPrice").html();
 
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
                        //  redirect403();
                    }else if (comeback['outcome'] == 'true') {
                        if(comeback['data'] == '1'){
                            console.log(comeback['data']);
                            $(".single-option-selector").addClass("clssingle-option-selector");
                                $form_type = $('input[name=form_type]').val();
                                if($form_type  == "product"){
                                console.log("product page");
                                $("#AddToCart").css("display","none");
                                $findbuynowbtn = setInterval(hasbuynowbtn, 1000); 
                                setTimeout(function(){
                                    console.log("settimeout function calling ...");
                                    console.log(getCookie("postcodeval") );
                                    if(getCookie("postcodeval") == undefined || getCookie("postcodeval") == ""){
                                    $("body").append('<div class="custom-model-main model-open">'+
                                    '<div class="custom-model-inner" style="-webkit-transform: translate(0, -25%); -ms-transform: translate(0, -25%); transform: translate(0, -25%); -webkit-transition: -webkit-transform 0.3s ease-out; -o-transition: -o-transform 0.3s ease-out; transition: -webkit-transform 0.3s ease-out; -o-transition: transform 0.3s ease-out; transition: transform 0.3s ease-out; transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out; display: inline-block; vertical-align: middle; width: 600px; margin: 30px auto; max-width: 97%;">  '+     
                                    '<div class="close-btn" style="position: absolute; right: 7px; top: -12px; cursor: pointer; z-index: 99; font-size: 30px; color: #000;">×</div>'+
                                        ' <div class="custom-model-wrap" style="display: block; width: 100%; position: relative; background-color: #fff; border: 1px solid #999; border: 1px solid rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5); background-clip: padding-box; outline: 0; text-align: left; padding: 2rem; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;  box-sizing: border-box; max-height: calc(100vh - 70px);overflow-y: auto;">'+
                                            ' <div class="pop-up-content-wrap">'+
                                                '<div class="postalcode-popup">'+
                                                    '<div class="heading heading--submit-postalcode" style="margin-bottom: 1rem;">'+
                                                        '<div class="heading__name" style="font-size: 20px;font-weight: 600;">Ændrer postnummer eller by:</div>'+
                                                    '</div>'+
                                                    '<div class="postalcode-panel">'+
                                                        '<div class="postalcode-panel__description">'+
                                                            '<span class="instruction">For at se priser på shoppen skal du angive et postnummer</span>'+
                                                        
                                                        '<div class="form-group-grid">'+
                                                            ' <div class="form-group-grid__label">'+
                                                        '    </div>'+
                                                            '<div class="form-group-grid__controls" style="display: flex;flex-wrap: wrap;"><span>Ændrer postnummer eller by</span>'+
                                                                ' <input type="text" id="freightAreaZipcodePopup" class="form-control clspostcode" autocomplete="off" value="" style="margin:0 0 0 2.8%;border: 1px solid #595959;width: 140px;">'+
                                                                ' <button type="submit" class="btn btn-secondary postcode-app-btn postcode-checker-preview " style="line-height: 0.10  !important;">Gem</button>'+
                                                            ' </div>'+
                                                                '<div class="select_postman_block" style="display: none;"></select><select name="select_postman" class="postman_select" style="width:140px;margin: 0 0 0 40.8%;display: flex;"></select></div>'+
                                                        '</div>'+
                                                            '</div>'+
                                                            '<div style="width: 50%;text-align: center;"> <span class="chkpostcode errorcolor"  style="color:red;"></span></div>'+
                                                    ' </div>'+
                                                '</div>'+
                                            ' </div>'+
                                        ' </div> '+ 
                                    ' </div> '+ 
                                    ' <div class="bg-overlay" style="background: rgba(0, 0, 0, 0.6); z-index: 99; height: 100vh; width: 100%; position: fixed; left: 0; top: 0; right: 0; bottom: 0; z-index:  -webkit-transition: background 0.15s linear; -o-transition: background 0.15s linear; transition: background 0.15s linear;"></div>'+
                                '</div> <style>@media only screen and (max-width: 440px){ .form-group-grid__controls span{width: 100%;}.select_postman_block .postman_select{margin: 0 0 0 3.1% !important;}}</style>');
                                    }else{
                                        console.log("onload event for pdppage");
                                        $(".product-single__policies.rte").append(
                                            '<div id="postalholder" style=" display:flex;   width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;">'+
                        
                                    ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i></p> '+  
                                    '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                    '</div>');
                                        $(".product-single__shopify-payment-btn").append('<div>'+
                                    '<a  name="clsaddtocart" id="clsAddToCart" class="btn clsproduct-single__cart-submit clsshopify-payment-btn btn--secondary clszipapp" style="padding: 7px 15px;color: #f5db00;border: 2px solid #f5db00;">'+
                                    '<span id="clsAddToCartText">Læg i indkøbskurv</span>'+
                                    '</a>'+
                                    '</div></br>'+
                                    '<div>'+
                                //     '<a  name="clsbuynow" id="" class="clsshopify-payment-button__button" style="cursor: pointer;padding: 13px 86px;background-color: #f5db00;color: #ffffff;border: 2px solid #f5db00;">'+
                                //     '<span id="clsbuynowText">Køb nu</span>'+
                                //   '</a>'+
                                    '</div>');
                                getTotalprice();
                                    }
                                },1000); 
                                }
                        
                        }else{
                            $(".single-option-selector").removeClass("clssingle-option-selector");
                            $("#ProductPrice").css("display","block");
                        console.log("Postcode app is disabled");
                        }
                    } else {
                        console.log("Something went wrong with postcode app");       
                    }
                            
                }
            });
    }   

    check_app_status();
    function getTotalprice(){
        console.log("getTotalprice function calling ......");
        var clsgetpostcode = $(".clspostcode").val();
        console.log(clsgetpostcode);
        getpostcode = (clsgetpostcode == undefined || clsgetpostcode == "" ) ? getCookie("postcodeval") : clsgetpostcode;
        console.log(getpostcode + "getpostcode   function .........");
        $.ajax({
                url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
                type: "POST",
                dataType: 'json',
                data: {'routine_name': 'get_postcode' ,'store': shop,'postcode':getpostcode},
                    beforeSend: function () {
                        
                },
                success: function (comeback) {
                    console.log(comeback);
                        if (comeback['code'] != undefined && comeback['code'] == '403') {
                                //  redirect403();
                        }else if (comeback['outcome'] == 'true') {
                                $("#clsproductZipcodevalue").val(getpostcode);
                                $ProductPriceSymbol =  $("#ProductPrice").html();
                                $("#ProductPrice").text("");
                                $(".chkpostcode").html("");
                                $zonename = (comeback.data['zonename']);
                                $zoneprice = (comeback.data['zoneprice']);
                                $zonearea = (comeback.data['zonearea']);
                                $currecySymbol = $ProductPriceSymbol.split(' ');
                                $ProductPrice = $("#ProductPrice").attr("content");
                                console.log($ProductPrice + " PRODUCT PRICE");
                                console.log($zoneprice + " ZONE PRICE");
                                $totalPrice = parseFloat($ProductPrice) + parseFloat($zoneprice);
                                console.log($totalPrice);
                                $replacestr = Shopify.formatMoney($totalPrice);
                                console.log($replacestr);
                                $("#ProductPrice").attr("data-price",$replacestr);
                                $(".clsProductPrice").css("display","block");
                                $(".custom-model-main").removeClass("model-open");
                                setCookie('postcodeval', $zonearea);
                                setCookie('postcodename', $zonename);
                                
                                $(".single-option-selector").attr("disabled",false);
                                $("#postalholder").css({"opacity":"1","justify-content":"space-between"});
                                $hasClass = $("#clsAddToCart").hasClass("clszipapp");
                                console.log($hasClass + "   $hasClass");
                                if($hasClass == false){
                                    console.log("condition true");
                                        $(".product-single__policies.rte").append(
                                        '<div id="postalholder" style=" display:flex;width: 300px;border-bottom:2px solid #f5db00;padding:10px 15px 0px 15px;margin-bottom:10px;justify-content:space-between;>'+
                    
                                ' <p class="pmessage">'+getCookie("postcodeval")+'<i class="icon-ok" style="color:#5b9b30;"></i>'+getCookie("postcodename")+'</p> '+  
                                    '<div class="clsremovezipcode" style="width: 30px;cursor: pointer;"><svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M352 192V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64H96a32 32 0 0 1 0-64h256zm64 0h192v-64H416v64zM192 960a32 32 0 0 1-32-32V256h704v672a32 32 0 0 1-32 32H192zm224-192a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32zm192 0a32 32 0 0 0 32-32V416a32 32 0 0 0-64 0v320a32 32 0 0 0 32 32z"/></svg></div>'+
                                '</div>');
                                    $(".product-single__shopify-payment-btn").append('<div>'+
                                    '<a  name="clsaddtocart" id="clsAddToCart" class="btn clsproduct-single__cart-submit clsshopify-payment-btn btn--secondary clszipapp" style="padding: 7px 15px;color: #f5db00;border: 2px solid #f5db00;">'+
                                    '<span id="clsAddToCartText">Læg i indkøbskurv</span>'+
                                '</a>'+
                                '</div></br>'+
                                '<div>'+
                                //     '<a  name="clsbuynow" id="" class="clsshopify-payment-button__button" style="cursor: pointer;padding: 13px 86px;background-color: #f5db00;color: #ffffff;border: 2px solid #f5db00;">'+
                                //     '<span id="clsbuynowText">Køb nu</span>'+
                                //   '</a>'+
                                '</div>');
                                }
                                    
                        } else {
                            $(".postalcode-panel").css("display","flex");
                            $(".custom-model-inner").css("width","1000px");
                            $(".clssucessmsg").html("");
                            $("#ProductPrice").text("");
                            $("#ProductPrice").html($Productcontent);
                            $(".chkpostcode").text(comeback['msg']['postcode'])
                        }
                            
                    }
            });
    }

    $(document).on("click",".postcode-checker-preview",function(event){
            console.log("CLICK BTN ");
            event.preventDefault();  
            getTotalprice();
    });

    function NOKformat(n, sep, decimals) {
        sep = sep || "."; // Default to period as decimal separator
        console.log(sep + "  sep");
        decimals = decimals || 2; // Default to 2 decimals
        console.log(n.toLocaleString() + "  xxxxx");
        console.log( decimals + "   decimals");
        console.log(n.toLocaleString().split(sep)[0]);
        console.log("SPPPPP");
        console.log(n.toFixed(decimals));
        console.log("DDDDDD");
        console.log(n.toFixed(decimals).split(sep)[1])
        console.log("RETURRNNN");
        return n.toLocaleString() + sep + n.toFixed(decimals).split(sep)[1];
    }
                            
    $(document).on("click",".close-btn, .bg-overlay",function(){
        console.log("close-btn btn call");
        $("#freightAreaZipcodePopup").val('');
        $(".select_postman_block").css("display","none");
        $(".custom-model-main").removeClass('model-open');
    $(".single-option-selector").attr("disabled",false);
    });

    $(document).on("click",".clssingle-option-selector",function(){

        if(getCookie("postcodeval") == undefined || getCookie("postcodeval") == "" ){
        console.log("cookies");
            $(".single-option-selector").attr("disabled",true);
            $(".custom-model-main").addClass("model-open");
        }else{
            $(".shopify-payment-button__button").css("display","none");
        }
    });

    $(document).on("change","#ProductSelect-product-template-option-0",function(){
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
                            //  redirect403();
                        }else if (comeback['outcome'] == 'true') {
                        if(comeback['data'] == '1'){
                            console.log("select box first");
                                $("#ProductPrice").css("display","none");
                                var optionSelected = $("option:selected", this);
                                var valueSelected = this.value;
                                $("#clsoption0").val(valueSelected);
                                getTotalprice();
                                // $(".postcode-checker-preview").trigger('click');
                        }
                        }
                    }
            });
    
    });

    $(document).on("change","#ProductSelect-product-template-option-1",function(){
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
                            //  redirect403();
                        }else if (comeback['outcome'] == 'true') {
                        if(comeback['data'] == '1'){
                            console.log("select box else");
                                $("#ProductPrice").css("display","none");
                                var optionSelected = $("option:selected", this);
                                var valueSelected = this.value;
                                $("#clsoption1").val(valueSelected);
                                    getTotalprice();
                                // $(".postcode-checker-preview").trigger('click');
                        }
                        }
                    }
            });
                
    });

    function addTocartfunc(){
        $data = $("#ProductSelect-product-template option:selected").html().split("-");
            $optionoptional = $data[0].split("/");
            var clsproductId = $(".clsproductId").val();
            $getpostcode = getCookie("postcodeval");
            $clsoption0 = ($("#clsoption0").val() == '') ? $optionoptional[0] : $("#clsoption0").val();
            $clsoption1 = ($("#clsoption1").val() == '') ? $optionoptional[1] : $("#clsoption1").val();
            $price = $("#ProductPrice").attr("data-price");
            var thisObj = this;
            $.ajax({
                url: "https://postcode.codelocksolutions.com/user/ajax_call.php",
                type: "POST",
                dataType: 'json',
                data: {'routine_name': 'get_product' ,'store': shop,'productid':clsproductId,'postcode':$getpostcode,'clsoption0':$clsoption0,'clsoption1':$clsoption1,'productprice':$price,'oldprice':$data[1]},
                    beforeSend: function () {
                        
                },
            success: function (comeback) {
                console.log(comeback);
                $.each(comeback.product.variants, function(key, value) {
                    var variant_id = value.id;
                    console.log(variant_id);
                        var params = {
                            type: 'POST',
                            url: '/cart/add.js',
                            data: {id: variant_id,quantity: '1'},
                            dataType: 'json',
                            success: function(line_item) { 
                                console.log(line_item);
                                if(getCookie("buynowbtn") == undefined || getCookie("buynowbtn") == "" ){
                                    console.log("cart ");
                                    $(".product-single__shopify-payment-btn").append('<span>Varen er lagt i indkøbskurven.</span>');
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
    }

    $(document).on("click",".clsproduct-single__cart-submit",function (e) {
        e.preventDefault();
        console.log("HII");
        addTocartfunc();
    });

    $(document).on("click",".clsshopify-payment-button__button",function (e) {
        e.preventDefault();
        console.log("checkout");
        setCookie('buynowbtn', "buynowbutton");
        // Cookies.set("buynowbtn","buynowbutton");
        //  console.log(Cookies.get("buynowbtn"));
            addTocartfunc();
    });

    $(document).on("click",".clsremovezipcode",function (e){
        e.preventDefault();
        console.log("clsremovezipcode");
        deleteCookie("postcodeval");
    // Cookies.remove("postcodeval");
    // $.removeCookie('postcodeval', { path: '/' });
        window.location.href ='https://grusshoppen.dk/';
        // location.reload();

        $("#postalholder").css("opacity","0");
    });

    function  hasbuynowbtn(){
    console.log("hello function calling ");
    $hasfindclass  = $("button").hasClass("shopify-payment-button__button");
    console.log($hasfindclass);
    if($hasfindclass == true){
        $(".shopify-payment-button__button").css("display","none");
        clearInterval($findbuynowbtn);  
    }
    }

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
                            //  redirect403();
                        }else if (comeback['outcome'] == 'true') {
                            $data = comeback['data']['zonearea'];
                            $zonename = comeback['data']['zonename'];
                            console.log($data);
                            console.log($zonename);
                            var select = "";
                            $.each($data, function (key, val) {
                                console.log(val);
                                select += "<option value="+ val +">"+ val +" - "+$zonename[key]+"</option>";
                                $(".select_postman_block").css("display","flex");
                            });
                                $(".postman_select").html(select);
                            
                            
                        } else {
                            
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
    });
});       
             
