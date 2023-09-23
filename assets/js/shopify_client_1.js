"use strict";
var CLS_LOADER = '<svg viewBox="0 0 20 20" class="Polaris-Spinner Polaris-Spinner--colorInkLightest Polaris-Spinner--sizeSmall" aria-label="Loading" role="status"><path d="M7.229 1.173a9.25 9.25 0 1 0 11.655 11.412 1.25 1.25 0 1 0-2.4-.698 6.75 6.75 0 1 1-8.506-8.329 1.25 1.25 0 1 0-.75-2.385z"></path></svg>';
var CLS_DELETE = '<svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M16 6a1 1 0 1 1 0 2h-1v9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V8H4a1 1 0 1 1 0-2h12zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#000" fill-rule="evenodd"></path></svg>';
var CLS_MINUS = '<svg class="Polaris-Icon__Svg" viewBox="0 0 80 80" focusable="false" aria-hidden="true"><path d="M39.769,0C17.8,0,0,17.8,0,39.768c0,21.956,17.8,39.768,39.769,39.768   c21.965,0,39.768-17.812,39.768-39.768C79.536,17.8,61.733,0,39.769,0z M13.261,45.07V34.466h53.014V45.07H13.261z" fill-rule="evenodd" fill="#DE3618"></path></svg>';
var CLS_PLUS = '<svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M17 9h-6V3a1 1 0 1 0-2 0v6H3a1 1 0 1 0 0 2h6v6a1 1 0 1 0 2 0v-6h6a1 1 0 1 0 0-2" fill-rule="evenodd"></path></svg>';
var CLS_CIRCLE_MINUS = '<svg class="Polaris-Icon__Svg" viewBox="0 0 80 80" focusable="false" aria-hidden="true"><path d="M39.769,0C17.8,0,0,17.8,0,39.768c0,21.956,17.8,39.768,39.769,39.768   c21.965,0,39.768-17.812,39.768-39.768C79.536,17.8,61.733,0,39.769,0z M13.261,45.07V34.466h53.014V45.07H13.261z" fill-rule="evenodd" fill="#DE3618"></path></svg>';
var CLS_CIRCLE_PLUS = '<svg class="Polaris-Icon__Svg" viewBox="0 0 510 510" focusable="false" aria-hidden="true"><path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M382.5,280.5h-102v102h-51v-102    h-102v-51h102v-102h51v102h102V280.5z" fill-rule="evenodd" fill="#3f4eae"></path></svg>';
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    cname = (cname != undefined) ? cname : 'flash_message';
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) { 
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function flashNotice($message, $class) {
    $class = ($class != undefined) ? $class : '';

    var flashmessageHtml = '<div class="inline-flash-wrapper animated bounceInUp inline-flash-wrapper--is-visible ourFlashmessage"><div class="inline-flash ' + $class + '  "><p class="inline-flash__message">' + $message + '</p></div></div>';

    if ($('.ourFlashmessage').length) {
        $('.ourFlashmessage').remove();
    }
    $("body").append(flashmessageHtml);

    setTimeout(function () {
        if ($('.ourFlashmessage').length) {
            $('.ourFlashmessage').remove();
        }
    }, 3000);
}
function changeTab(evt, id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("Polaris-Tabs_tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("Polaris-Tabs__Tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("Polaris-Tabs__Tab--selected", "");
    }
    document.getElementById(id).style.display = "block";
    evt.currentTarget.className += " Polaris-Tabs__Tab--selected";
}
function loading_show($selector) {
    $($selector).addClass("Polaris-Button--loading").html('<span class="Polaris-Button__Content"><span class="Polaris-Button__Spinner">' + CLS_LOADER + '</span><span>Loading</span></span>').fadeIn('fast').attr('disabled', 'disabled');
}
function loading_hide($selector, $buttonName, $buttonIcon) {
    if ($buttonIcon != undefined) {
        $buttonIcon = '<span class="Polaris-Button__Icon"><span class="Polaris-Icon">' + $buttonIcon + '</span></span>'
    } else {
        $buttonIcon = '';
    }
    $($selector).removeClass("Polaris-Button--loading").html('<span class="Polaris-Button__Content">' + $buttonIcon + '<span>' + $buttonName + '</span></span>').removeAttr("disabled");
}

function table_loader(selector, colSpan) {
    $(selector).html('<tr><td colspan="' + colSpan + '" style="text-align:center;"><div class="loader-spinner"><svg viewBox="0 0 44 44" class="Polaris-Spinner Polaris-Spinner--colorTeal Polaris-Spinner--sizeLarge" role="status"><path d="M15.542 1.487A21.507 21.507 0 0 0 .5 22c0 11.874 9.626 21.5 21.5 21.5 9.847 0 18.364-6.675 20.809-16.072a1.5 1.5 0 0 0-2.904-.756C37.803 34.755 30.473 40.5 22 40.5 11.783 40.5 3.5 32.217 3.5 22c0-8.137 5.3-15.247 12.942-17.65a1.5 1.5 0 1 0-.9-2.863z"></path></svg></div></td></tr>')
}
function redirect403() {
    window.location = "https://www.shopify.com/admin/apps";
}
var loadShopifyAJAX= null;
var js_loadShopifyDATA = function js_loadShopifyDATA(listingID, pageno) {
    if (loadShopifyAJAX && loadShopifyAJAX.readyState != 4) {
        loadShopifyAJAX.abort();
    }
    var searchKEY = $("#" + listingID + "SearchKeyword").val();
    var searchKEYLEN = (searchKEY != undefined) ? searchKEY.length : 0;
    if (searchKEYLEN == 0 || searchKEYLEN >= 3) {
        var shopifyApi = $('#' + listingID).attr('data-apiName');  
        var limit = $("#" + listingID + "limit").val();
        var from = $('#' + listingID).data('from');
        var routineNAME = 'take_' + from + '_shopify_data';
        var fields = $('#' + listingID).attr('data-fields');
        fields = (fields != undefined) ? fields : '*';
        var searchFields = $('#' + listingID).attr('data-search');
        pageno = (pageno != undefined) ? pageno : 1;
        loadShopifyAJAX = $.ajax({  
            url: "ajax_call.php",
            type: "post",
            dataType: "json",
            data: {
                routine_name: routineNAME,
                shopify_api: shopifyApi,
                fields: fields,
                store: store,
                limit: limit,
                pageno: pageno,
                search_key: searchKEY,
                listing_id: listingID,
                search_fields: searchFields,
                pagination_method: js_loadShopifyDATA.name
            }, 
            beforeSend: function () {
                var listingTH = $('#' + listingID + ' thead tr th').length;
                 table_loader("table#" + listingID + " tbody", listingTH);
            },  
            success:function(comeback){
                if (comeback['code'] != undefined && comeback['code'] == '403') {
                    redirect403();
                } else if (comeback['outcome'] == 'true') {
                   var tablehtml =  comeback['html'] !== undefined && comeback['html'] != '' ? comeback['html'] : '<td  colspan="10" class="nodata"> NO DATA FOUND </td>';
                    $('table#' + listingID + ' tbody').html(tablehtml);
                    $('#' + listingID + 'Pagination').html(comeback['pagination_html']);
                } else {
                }
            }
        });
    }
}

function replaceTableStatus(tableName, primaryKeyId, status, thisObj) {
    var class_name = 'listingTableLoader', button_name = '';
    $.ajax({
        url: "responce.php",
        type: "post",
        dataType: "json",
        data: {method_name: "replace_table_status", shop: shop, table_name: tableName, primary_key_id: primaryKeyId, status: status},
        success: function (response) {
            if (response['result'] == 'success') {
                flashNotice(response['message']);
                $(thisObj).attr('onclick', response['onclickfn'])
                        .find('.Polaris-custom-icon.Polaris-Icon.Polaris-Icon--hasBackdrop').html(response['svg_icon'])
                        .children('span').attr('data-hover', response['data_hover']);
            } else {
                flashNotice(response['message']);
            }
        },
        error: function () {
        }
    });
}
function removeFromTable(tableName,ID,id,pageno, tableId,api_name ,is_delete) {
    var is_delete = (is_delete == undefined) ? 'Record' : is_delete;
    var Ajaxdelete = function Ajaxdelete() {
              var el = is_delete;
        $.ajax({
            url: "ajax_call.php",
            type: "post",
            dataType: "json",
            data: {routine_name: 'remove_from_table', store: store, table_name: tableName, id: id,ID : ID,api_name :api_name},
             beforeSend: function () { 
                loading_show('.save_loader_show' + ID);   
            },
            success: function (response) {
                     loading_hide('save_loader_show'+ID,'',CLS_DELETE);
                if (response['result'] == 'success') {
                    if (pageno == undefined || pageno < 0 || response['total_record'] <= 0) {
                        setCookie('flash_message', response['message'], 2);
                        location.reload();
                    } else if (pageno > 0) {
                        $(is_delete).closest("tr").css("background", "tomato");
                        $(is_delete).closest("tr").fadeOut(800, function() {
                                $(this).remove();
                            });
                        flashNotice(response['message']);
                    }
                    if (response['total_method'] != undefined) {
                        $('#totalShippingMethod').html(response['total_method']);
                    }
                } else {
                    window.location = 'index.php?store=' + store;
                    setCookie('flash_message', response['message'], 2);
                }
               
                    
            }
        });
    }
//   if (mode == 'live') {
//        ShopifyApp.Modal.confirm({
//            title: "Delete " + is_delete + " ?",
//            message: "Are you sure want to delete the " + is_delete + " ? This action cannot be reversed.",
//            okButton: "Delete " + is_delete,
//            cancelButton: "Cancel",
//            style: "danger"
//        }, function (result) {
//            if (result) {
//                $('.ui-button.close-modal.btn-destroy-no-hover').addClass("ui-button ui-button--destructive js-btn-loadable is-loading disabled");
//                Ajaxdelete();
//            }
//        });
//    } else {
        var r = confirm("Are you sure want to delete!");
        if (r == true) {
            Ajaxdelete();
//        }
    }

}
$.urlParam = function (name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    }
    else {
        return results[1] || 0;
    }
}

$(document).ready(function () {
    $('#rating').rating({
        min: 0,
        max: 5,
        step: 1,
        size: 'xs',
        showClear: false
    });

    $(".star").hover(function () {
        $(".rate-our-app").show();
        $(".dismiss-button-rating").hide();
    });

    $('table[data-listing="true"]').each(function () {
        var tableId = $(this).attr('id');
        js_loadShopifyDATA(tableId);
    });

    var flashmessage = getCookie("flash_message");
    var flashClass = getCookie("flash_class");
    if (flashmessage != '') {
        flashClass = (flashClass == null || flashClass == undefined) ? '' : flashClass;
        setCookie('flash_message', '', -2);
        flashNotice(flashmessage, flashClass);
    }

    $(".spectrumColor").spectrum({
        showButtons: false
    });

    $(".spectrumColor").on('move.spectrum', function (e, color) {
        var id = $(this).data('id');
        var hexVal = color.toHexString();
        $("[data-id='" + id + "']").val(hexVal);
    });

    /*Transparent colorpicker Start*/
    $(".spectrumTransparentColor").spectrum({
        showButtons: false,
        showAlpha: true
    });

    $(".spectrumTransparentColor").on('move.spectrum', function (e, color) {
        showAlpha: true
        var id = $(this).data('id');
        var hexVal = color.toRgbString();
        $("[data-id='" + id + "']").val(hexVal);
    });

    /*Transparent colorpicker End*/
    $(document).on("submit", "#imageExmapleFrm", function (e) {
        e.preventDefault();
        var frmData = new FormData($(this)[0]);
        frmData.append('shop', shop);
        frmData.append('method_name', 'image_file_example');
        $.ajax({
            url: "responce.php",
            type: "post",
            dataType: "json",
            contentType: false,
            processData: false,
            data: frmData,
            beforeSend: function () {
                loading_show('save_loader_show');
            },
            success: function (response) {
                if (response['code'] != undefined && response['code'] == '403') {
                    redirect403();
                } else if (response['result'] == 'success') {
                    $("#errorsmsgBlock").hide();
                    flashNotice(response['message']);
                } else if (response['msg_contented'] != undefined && response['msg_manage'] != undefined) {
                    $("#errorBlockInfo").html(response['msg_contented']);
                    $("#errorBlockManage").html(response['msg_manage']);
                    $("#errorsmsgBlock").show();
                    $("html, body").animate({scrollTop: 0}, "slow");
                } else {
                    flashNotice(response['message']);
                }
                loading_hide('save_loader_show', 'Save');
            }
        });
    });
    $(document).on("click", ".logout", function(event) {
        event.preventDefault();
            logout();
    });
    function logout(){
        $.ajax({
            url:"ajax_call.php",
            type:'POST',
            data:{
                action:'logout'
            },
            success:function(response)
            {
                if(response.trim() == 'success')
                {
                    window.location.href = 'index.php';
                }
            }

        });
    }
    $(document).on("submit", "#register_frm", function (e) {
        e.preventDefault(); 
        var frmData = new FormData($(this)[0]);
        frmData.append('store',store); 
        frmData.append('routine_name','allbutton_details');  
        $.ajax({
            url: "ajax_call.php",
            type: "post",
            dataType: "json",
            contentType: false,
            processData: false,
            data: frmData, 
             beforeSend: function () { 
                loading_show('.saveBtn.save_loader_show');
             
            },
            success: function (response) {
                if (response['code'] != undefined && response['code'] == '403') {
                    redirect403();
                } 
                else{
                    if(response['for_data'] == 'blog'){
                    window.location.href = 'blog_post.php?store='+store;
                    }else if(response['for_data']== 'page'){
                    window.location.href = 'pages.php?store='+store;
                    }else if(response['for_data']== 'collections'){                        
                    window.location.href = 'collection.php?store='+store;
                    }else{
                    window.location.href = 'products.php?store='+store;
                    }
                     loading_hide('.saveBtn.save_loader_show','save');
                }
            }
        });
    });
});

function btn_enable_disable(){
$.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        data: {'routine_name': 'appstatus' , store: store},
        success: function (comeback) {
            console.log(comeback +  "status");
                if (comeback['outcome']['data']['application_status'] != undefined && comeback['outcome']['data']['application_status'] == 0) {
                     $("#register_frm_btn").attr('disabled',true);
                     $(".app-setting-msg").show();
                    
                } else {
                    $("#register_frm_btn").attr('disabled',false);
                     
                }
            }
    });
}

function seeting_enable_disable(){
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        data: {'routine_name': 'appstatus' ,'store' : store},
        success: function (comeback)
        {
            if (comeback['outcome']['data']['0']['application_status'] != undefined && comeback['outcome']['data']['0']['application_status'] == "0") {
                $(".clsdesign_for_msg .Polaris-Heading").html("Delivery Rates by Zip Code is Disable ");
                $(".app-setting-msg").show();
                $(".enable-btn").val(1);
                $(".enable-btn").html("Enable");
                $(".app-setting-msg .Polaris-Icon").removeClass("Polaris-Icon--colorGreenDark");
                $(".app-setting-msg .Polaris-Icon").addClass("Polaris-Icon--colorYellowDark");
                $(".app-setting-msg .Polaris-Banner").addClass("Polaris-Banner--statusWarning");
                $(".app-setting-msg .Polaris-Banner").removeClass("Polaris-Banner--statusSuccess");
                $(".clsdesign_for_msg").css("background-color","#fdf7e3");
                $("#toggleButton").removeClass("on");
                $(".enable-btn").removeClass("Polaris-Button--destructive");
                $(".enable-btn").addClass(" Polaris-Button--success")

            } else { 
                $(".clsdesign_for_msg .Polaris-Heading.desktopview").html("Delivery Rates by Zip Code is Enable.");
                $(".clsdesign_for_msg .Polaris-Heading.mobileview").html("Delivery Rates by Zip Code is Enable .");
               $(".enable-btn").val(0);
                $(".enable-btn").html("Disable");
                $(".app-setting-msg .Polaris-Icon").addClass("Polaris-Icon--colorGreenDark");
                $(".app-setting-msg .Polaris-Icon").removeClass("Polaris-Icon--colorYellowDark");
                $(".app-setting-msg .Polaris-Banner").removeClass("Polaris-Banner--statusWarning");
                $(".app-setting-msg .Polaris-Banner").addClass("Polaris-Banner--statusSuccess");
                $(".clsdesign_for_msg").css("background-color","#eff7ed");
                $("#toggleButton").addClass("on");
                $(".enable-btn").addClass("Polaris-Button--destructive");
                $(".enable-btn").removeClass(" Polaris-Button--success");
            }
        }
    });
}

setTimeout(function(){
    seeting_enable_disable();
},50);

function readURL(input) {
$(".imagesBlock").css("display","block");
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#ImagePreview').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function preview_image(selector,page)
{    $('.imagesBlock').css({display: 'block'});
    $('.imagesBlockEdit').css({display: 'block'});
    var product_id = $('#product_id').val();
    var id = 1, last_id = '', last_cid = '';
    var img_srcs = [];
    var img_titles = [];
                        
    $.each(selector.files, function (vpb_o_, file)
    {
        if (file.name.length > 0)
        {
            if (!file.type.match('image.*')) {
                return true;
            }
            else
            {
                var reader = new FileReader();
                if (page == 'add') {
                    reader.onload = function (e)
                    {
                        $('#multiImagePreview').append(
                                '<div class="column">' +
                                '<div class="image-box">' +
                                '<img class="btn-delete removeAddImage" src="http://cdn1.iconfinder.com/data/icons/diagona/icon/16/101.png">' +
                                '<img class="thumbnail multi-image-preview" src="' + e.target.result + '" \
                               title="' + escape(file.name) + '" /><input type="hidden" name="selected_imges[]" id="jsImg" value="' + file.name + '"></div></div>');
                    }
                } else {
                    reader.onload = function (e)
                    {
                        img_srcs.push(e.target.result);
                        img_titles.push(escape(file.name));
                    }
                }
                reader.readAsDataURL(file);
            }
        }
        else {
            return false;
        }
    });
    
    if(page == 'update'){
        setTimeout(function () {
            var old_images = $('#oldImages').val();
            var frmData = new FormData();
            $.each(img_srcs, function (index, value) {
                frmData.append('images[]', value);
                frmData.append('title[]', img_titles[index]);
            });
            frmData.append('shop', shop);
            frmData.append('product_id', product_id);
            frmData.append('image_ids', old_images);
            frmData.append('method_name', 'upload_product_images');

            if (frmData != '') {
                $.ajax({
                    url: "ajax_responce.php",
                    type: "post",
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    data: frmData,
                    beforeSend: function () {
                        loading_show('.image_loader');
                    },
                    success: function (response) {
                        var old_img_arr = JSON.parse(old_images);
                        if (response['result'] == 'success') {
                            $.each(response['images']['product']['images'], function (index, value) {
                                if ($.inArray(value.id, old_img_arr) == -1) {
                                    old_img_arr.push(value.id);
                                    $('#multiImagePreview').append(
                                            '<div class="column style="display:none;">' +
                                            '<div class="image-box-edit selectMainImage" data-id="' + value.id + '"><i class="btn-select-image"><input type="radio" name="select_main_image" class="select_main_image" value="' + value.id + '" style="display:none;"></i>' +
                                            '<img class="btn-delete-edit removeAddImage" data-id="' + value.id + '" src="http://cdn1.iconfinder.com/data/icons/diagona/icon/16/101.png">' +
                                            '<img class="thumbnail  multi-image-preview addedNewImage" src="' + value.src + '" \
                       title="' + value.alt + '" /><input type="hidden" name="selected_imges[]" id="jsImg" value="' + value.id + '"></div></div>');
                                }
                            });
                            old_img_arr.toString();
                            $('#oldImages').val("[" + old_img_arr + "]");
                            loading_hide('.image_loader', '');
                        } else {
                            flashNotice(response['msg']);
                        }
                        loading_hide('.image_loader', '');
                    }
                });
            }
        }, 1000);
    }


}

function app_enable_disable(btnval,call_from){
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        data: {'store': store,'routine_name' : 'enable_disable','btnval':btnval}, 
        beforeSend: function () {
            if(call_from == 1){
                loading_show('.save_loader_show');
            }
        },
        success: function (response) {
                if (response['code'] != undefined && response['code'] == '403') {
                redirect403();
            }else{      
                if (btnval == 0) {
                    $(".app-setting-msg").show();
                    $(".enable-btn").val(1);
                    $(".enable-btn").html("Enable");
                    $(".app-setting-msg .Polaris-Icon").removeClass("Polaris-Icon--colorGreenDark");
                    $(".app-setting-msg .Polaris-Icon").addClass("Polaris-Icon--colorYellowDark");
                    $(".app-setting-msg .Polaris-Banner").addClass("Polaris-Banner--statusWarning");
                    $(".app-setting-msg .Polaris-Banner").removeClass("Polaris-Banner--statusSuccess");
                    $(".clsdesign_for_msg").css("background-color","#fdf7e3");
                    $(".clsdesign_for_msg .Polaris-Heading").html("Delivery Rates by Zip Code is Disable ");
                    $("#toggleButton").removeClass('on');
                    $(".enable-btn").removeClass("Polaris-Button--destructive");
                    $(".enable-btn").addClass(" Polaris-Button--success")
                    
                } else {
                    $(".clsdesign_for_msg .Polaris-Heading.desktopview").html("Delivery Rates by Zip Code is Enable");
                    $(".clsdesign_for_msg .Polaris-Heading.mobileview").html("Delivery Rates by Zip Code is Enable");
                   $(".enable-btn").val(0);
                    $(".enable-btn").html("Disable");
                    $(".app-setting-msg .Polaris-Icon").addClass("Polaris-Icon--colorGreenDark");
                    $(".app-setting-msg .Polaris-Icon").removeClass("Polaris-Icon--colorYellowDark");
                    $(".app-setting-msg .Polaris-Banner").removeClass("Polaris-Banner--statusWarning");
                    $(".app-setting-msg .Polaris-Banner").addClass("Polaris-Banner--statusSuccess");
                    $(".clsdesign_for_msg").css("background-color","#eff7ed");
                    $(" #toggleButton").addClass('on');
                    $(".enable-btn").addClass("Polaris-Button--destructive");
                    $(".enable-btn").removeClass(" Polaris-Button--success")
                }
            }
            if(call_from == 1){
                loading_hide('.save_loader_show', 'Save');
            }
        }
    });
}

$(document).on("click","#toggleButton",function() {
    $(this).toggleClass("on");
    const value = $(this).hasClass("on") ? 1 : 0;
    $("#toggleValue").val(value);
    app_enable_disable(value);
});


function cookies_bar_setting_save_first(){
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        data: {'routine_name': 'cookies_bar_setting_save_first' ,'store' : store},
        success: function (comeback){
            console.log(comeback);
        }
    });
}

$(document).on("submit", "#cookies_bar_setting_save", function (e) {
    e.preventDefault();       
    console.log("COKKIES BAR....");
    var form_data = $("#cookies_bar_setting_save")[0];
    var form_data = new FormData(form_data);
    form_data.append('store',store); 
    form_data.append('routine_name','cookies_bar_setting_save');      
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        contentType: false,
        processData: false,
        data: form_data, 
          beforeSend: function () {
            loading_show('.save_loader_show');
        },
        success: function (response) {
             if (response['code'] != undefined && response['code'] == '403') {
                redirect403();
            } 
            loading_hide('.save_loader_show', 'Save');
        }
    });
});

$(document).on("click", ".cancelBtn", function (e) {
    e.preventDefault();   
    console.log("cancelBtn ...");
    $("#cookies_bar_setting_save")[0].reset()
});

$(document).on('change','.layoutSelect2',function () {
    var layout_change = $('.layoutSelect2 option').filter(':selected').val();
    console.log("ON CHANGE EEVEBNT");
    $.ajax({
        url: "ajax_call.php",
        type: "POST",
        dataType: "json",
        data: {
            'store': store,
            'routine_name': 'cookies_bar_setting_select'
        },
        success: function(comeback) {
            if(comeback  != undefined){
            var comeback = JSON.parse(comeback);
                console.log(comeback);
                console.log(comeback.outcome.layout);
                if(layout_change == 1){
                    $('.Polaris-TextField__Input[name="banner_height"]').val(comeback.outcome.popup_height);
                    $(".preview_set").css("height",comeback.outcome.popup_height+"px");
                }else{
                    $('.Polaris-TextField__Input[name="banner_height"]').val(comeback.outcome.banner_height);
                    $(".preview_set").css("height",comeback.outcome.banner_height+"px");
                }
            }
        }
    });
});

function cookies_bar_setting_select(){
    $.ajax({
        url: "ajax_call.php",
        type: "POST",
        dataType: "json",
        data: {
            'store': store,
            'routine_name': 'cookies_bar_setting_select'
        },
        success: function(comeback) {
            if(comeback  != undefined){
            var comeback = JSON.parse(comeback);
                console.log(comeback);
                console.log(comeback.outcome.showon  +".............");
                var privacyURL = comeback.outcome.privacy_policy_url !== '' ? comeback.outcome.privacy_policy_url : "#";
                var decline_text = comeback.outcome.decline_text !== '' ? comeback.outcome.decline_text : "Decline";
                var agreement_text = comeback.outcome.agreement_text !== '' ? comeback.outcome.agreement_text : "Agree";
                var position = comeback.outcome.position == 1 ? "top" : "bottom";
                console.log(position);
                $('.radio-input[name="showon"][value="'+ comeback.outcome.showon +'"]').attr("checked", "checked");

                $('.Polaris-TextField__Input[name="message"]').val(comeback.outcome.message);
                $('.bar-message').html(comeback.outcome.message);

                $('.Polaris-TextField__Input[name="privacy_policy_url"]').val(comeback.outcome.privacy_policy_url);
                $('.cc-link').attr("href",privacyURL);
                
                $('.Polaris-TextField__Input[name="agreement_text"]').val(comeback.outcome.agreement_text);
                $('.Polaris-TextField__Input[name="decline_text"]').val(comeback.outcome.decline_text);
                $('.Polaris-TextField__Input[name="privacy_policy_url_text"]').val(comeback.outcome.privacy_policy_url_text);
                // $('.Polaris-TextField__Input[name="banner_height"]').val(comeback.outcome.banner_height);
                $('.preview_set').css("height",comeback.outcome.banner_height);
                $('.preview_set').css(position,0);

                $('.Polaris-Select__Input[name="banner_fontsize"]').val(comeback.outcome.banner_fontsize);
                $('.bar-message').css("font-size",comeback.outcome.banner_fontsize);
                
                $('.Polaris-Select__Input[name="position"]').val(comeback.outcome.position);
                $('.Polaris-Select__Input[name="layout"]').val(comeback.outcome.layout);
                if(comeback.outcome.layout == 1){
                    $(".preview-cookie-bar").addClass("modal-wrapper open");
                    $(".preview_set").addClass("modal_preview");
                    $('.Polaris-TextField__Input[name="banner_height"]').val(comeback.outcome.popup_height);
                }else{
                    $('.Polaris-TextField__Input[name="banner_height"]').val(comeback.outcome.banner_height);

                }
                $('.Polaris-TextField__Input[name="button_border_radius"]').val(comeback.outcome.button_border_radius);
                $('.cc-dismiss').css("border-radius",comeback.outcome.button_border_radius+"px");
                
                $('.Polaris-TextField__Input[name="button_border_width"]').val(comeback.outcome.button_border_width);
                $('.cc-dismiss').css("border",comeback.outcome.button_border_width+"px solid");

                $('.color_circle[name="color_banner"]').val(comeback.outcome.color_banner);
                $(".preview_set").css("background-color",comeback.outcome.color_banner);

                $('.color_circle[name="color_banner_text"]').val(comeback.outcome.color_banner_text);
                $(".preview_set").css("color",comeback.outcome.color_banner_text);

                $('.color_circle[name="color_banner_link"]').val(comeback.outcome.color_banner_link);
                $(".cc-link").css("color",comeback.outcome.color_banner_link);
                
                $('.color_circle[name="color_button"]').val(comeback.outcome.color_button);
                $(".cc-dismiss").css("background-color",comeback.outcome.color_banner_link);
                $(".cc-close").css("color",comeback.outcome.color_banner_link);
                
                $('.color_circle[name="color_button_text"]').val(comeback.outcome.color_button_text);
                $(".cc-dismiss").css("color",comeback.outcome.color_button_text);
                
                $('.color_circle[name="color_button_border"]').val(comeback.outcome.color_button_border);
                $(".cc-dismiss").css("border-color",comeback.outcome.color_button_border);

                $(".cc-dismiss.deny").html(decline_text);
                $(".cc-dismiss.allow").html(agreement_text);

            }
        }
    });
}

$(document).on("submit", "#addbzone_frm", function(ent) {
    ent.preventDefault();       
    var form_data = $("#addbzone_frm")[0];
    var form_data = new FormData(form_data);
    form_data.append('store',store); 
    form_data.append('routine_name','addzone');      
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        contentType: false,
        processData: false,
        data: form_data, 
         beforeSend: function () {
            loading_show('.save_loader_show');
        },
        success: function (response) {
            var response = JSON.parse(response);
             if (response['code'] != undefined && response['code'] == '403') {
                redirect403();
            } 
            else if(response['data'] == "fail"){
                var exist_codes = '';
                if(response["msg"]["zonearea_exist"] != undefined){
                    exist_codes = response["msg"]["zonearea_exist"].toString();
                }
                response["msg"]["zonename"] !== undefined ? $(".zonename").html (response["msg"]["zonename"]) : $(".zonename").html("");
                 response["msg"]["zonearea"] !== undefined ? $(".zonearea").html (exist_codes +" "+response["msg"]["zonearea"]) : $(".zonearea").html("");
                 response["msg"]["zoneprice"] !== undefined ? $(".zoneprice").html (response["msg"]["zoneprice"]) : $(".zoneprice").html("");
            }else{
                $(".title").html("");
               window.location.href = "zonetable.php?store="+ store;
            }
            loading_hide('.save_loader_show','Save');
        }
    });
});

function get_zoneform_value(routine_name,store,id,for_data){
$.ajax({
    url: "ajax_call.php",
    type: "post",
    dataType: "json",
    data: {'routine_name': routine_name , store: store, 'id'  : id,'for_data' : for_data},
    success: function (comeback) {
            if (comeback['code'] != undefined && comeback['code'] == '403') {
                  redirect403();
            }else if (comeback['outcome'] == 'true') {
                console.log(comeback['data']);
                $('#zonename').val(comeback['data']['zonename']);
                    $('#zonestatus').val(comeback['data']['zonestatus']);
                    $('#zonearea').val(comeback['data']['zonearea']);
                    $('#zoneprice').val(comeback['data']['zoneprice']);
            } else {
            }
              loading_hide('.save_loader_show','save');
        }
});
}
$(".resetForm").on("click",function(){
    $("#addbzone_frm")[0].reset();
});

function popup_setting_save_first(){
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        data: {'routine_name': 'popup_setting_save_first' ,'store' : store},
        success: function (comeback){
            console.log(comeback);
        }
    });
}


function popup_setting_select(){
    $.ajax({
        url: "ajax_call.php",
        type: "POST",
        dataType: "json",
        data: {
            'store': store,
            'routine_name': 'popup_setting_select'
        },
        success: function(comeback) {
            if(comeback  != undefined){
            var comeback = JSON.parse(comeback);
            console.log(comeback);
                console.log(comeback.outcome.title_fontsize);
                var agreement_text = comeback.outcome.agreement_text !== '' ? comeback.outcome.agreement_text : "Save";
                var position = comeback.outcome.position == 1 ? "top" : "bottom";
                console.log(position);
                $('.Polaris-TextField__Input[name="message"]').val(comeback.outcome.message);
                $('.bar-message').html(comeback.outcome.message);
                
                $('.Polaris-TextField__Input[name="title"]').val(comeback.outcome.title);
                $('.bar-title').html(comeback.outcome.title);
                
                $('.Polaris-TextField__Input[name="maintitle"]').val(comeback.outcome.maintitle);
                $('.bar-subtitle').html(comeback.outcome.maintitle);
                
                $('.Polaris-TextField__Input[name="agreement_text"]').val(comeback.outcome.agreement_text);
                $('.cc-dismiss.save').html(comeback.outcome.agreement_text);
                
                $('.Polaris-TextField__Input[name="popup_height"]').val(comeback.outcome.popup_height);
                $('.preview_set').css("height",comeback.outcome.popup_height);     
                
                $('.Polaris-Select__Input[name="title_fontsize"]').val(comeback.outcome.title_fontsize);
                $('.bar-title').css("font-size",comeback.outcome.title_fontsize);
                
                $('.Polaris-Select__Input[name="message_fontsize"]').val(comeback.outcome.message_fontsize);
                $('.bar-title').css("font-size",comeback.outcome.message_fontsize);
                $('.bar-message').css("font-size",comeback.outcome.message_fontsize);
                $('.bar-subtitle').css("font-size",comeback.outcome.message_fontsize);
                
                $('.Polaris-TextField__Input[name="button_border_radius"]').val(comeback.outcome.button_border_radius);
                $('.cc-dismiss').css("border-radius",comeback.outcome.button_border_radius+"px");
                
                $('.Polaris-TextField__Input[name="zipcode_border_radius"]').val(comeback.outcome.zipcode_border_radius);
                $('.postcode').css("border-radius",comeback.outcome.zipcode_border_radius+"px");

                $('.Polaris-Select__Input[name="position"]').val(comeback.outcome.position);
                
                $('.Polaris-TextField__Input[name="button_border_width"]').val(comeback.outcome.button_border_width);
                $('.cc-dismiss').css("border",comeback.outcome.button_border_width+"px solid");
                
                $('.Polaris-TextField__Input[name="zipcode_border_width"]').val(comeback.outcome.zipcode_border_width);
                $('.postcode').css("border",comeback.outcome.zipcode_border_width+"px solid");

                $('.color_circle[name="color_banner"]').val(comeback.outcome.color_banner);
                $(".preview_set").css("background-color",comeback.outcome.color_banner);

                $('.color_circle[name="color_banner_text"]').val(comeback.outcome.color_banner_text);
                $(".preview_set").css("color",comeback.outcome.color_banner_text);

                $('.color_circle[name="color_banner_link"]').val(comeback.outcome.color_banner_link);
                $(".cc-link").css("color",comeback.outcome.color_banner_link);
                
                $('.color_circle[name="color_button"]').val(comeback.outcome.color_button);
                $(".cc-dismiss").css("background-color",comeback.outcome.color_banner_link);
                $(".cc-close").css("color",comeback.outcome.color_banner_link);
                
                $('.color_circle[name="color_button_text"]').val(comeback.outcome.color_button_text);
                $(".cc-dismiss").css("color",comeback.outcome.color_button_text);
                
                $('.color_circle[name="color_button_border"]').val(comeback.outcome.color_button_border);
                $(".cc-dismiss").css("border-color",comeback.outcome.color_button_border);
              
                $('.color_circle[name="color_zipcode_button"]').val(comeback.outcome.color_zipcode_button);
                $(".cc-dismiss").css("border-color",comeback.outcome.color_zipcode_button);
              
                $('.color_circle[name="color_zipcode_text"]').val(comeback.outcome.color_zipcode_text);
                $(".cc-dismiss").css("border-color",comeback.outcome.color_zipcode_text);
               
                $('.color_circle[name="color_zipcode_border"]').val(comeback.outcome.color_zipcode_border);
                $(".cc-dismiss").css("border-color",comeback.outcome.color_zipcode_border);

                $('.preview_set').css(position,0);
            }
        }
    });
}

$(document).on("submit", "#popup_setting_save", function (e) {
    e.preventDefault();       
    console.log("COKKIES BAR....");
    var form_data = $("#popup_setting_save")[0];
    var form_data = new FormData(form_data);
    form_data.append('store',store); 
    form_data.append('routine_name','popup_setting_save');      
    $.ajax({
        url: "ajax_call.php",
        type: "post",
        dataType: "json",
        contentType: false,
        processData: false,
        data: form_data, 
          beforeSend: function () {
            loading_show('.save_loader_show');
        },
        success: function (response) {
             if (response['code'] != undefined && response['code'] == '403') {
                redirect403();
            } 
            loading_hide('.save_loader_show', 'Save');
        }
    });
});
