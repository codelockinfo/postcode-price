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

include('https://codelocksolutions.com/easy-cookie-bar/assets/js/jquery-3.6.4.min.js', function() {
    $(document).ready(function() {
        console.log("Easy Cookie Banner - GDPR EU");
        var shop = Shopify.shop;
        $.ajax({
            url: "https://codelocksolutions.com/easy-cookie-bar/user/ajax_call.php",
            type: "POST",
            dataType: "json",
            data: {
                'store': shop,
                'routine_name': 'appstatus' ,
            },
            success: function(comeback) {
              console.log("COMEBACK");
              console.log(comeback);
              console.log(comeback.outcome);
              console.log(comeback.outcome.data);
              console.log(comeback.outcome.data[0]);
              console.log(comeback.outcome.data[0].application_status);
              console.log(comeback.outcome.application_status +".....STATUS");
              console.log(comeback.outcome.status +".....STATUS");
              console.log(comeback['outcome']['data']['0']['application_status']);
              $status = comeback.outcome.data[0].application_status !== undefined ? comeback.outcome.data[0].application_status : '';
              if ($status == 1) {
                  cookiesbarSettingSelect();
              }
            }
        });    
        function  cookiesbarSettingSelect(){
            $.ajax({
              url: "https://codelocksolutions.com/easy-cookie-bar/user/ajax_call.php",
              type: "POST",
              dataType: "json",
              data: {
                  'store': shop,
                  'routine_name': 'cookies_bar_setting_select' ,
              },
              success: function(comeback) {
                var comeback = JSON.parse(comeback);
                console.log(comeback);
                console.log(comeback.outcome.showon);
                var layoutPopup = "";
                var modalPreview = "";
                if( comeback.outcome.layout == 1){
                  var layoutPopup = "modal-wrapper open";
                  var modalPreview = "modal_preview";
                  var height = comeback.outcome.popup_height;
                }else{
                  var height = comeback.outcome.banner_height;

                }
                var decline_text = comeback.outcome.decline_text !== '' ? comeback.outcome.decline_text : "Decline";
                var agreement_text = comeback.outcome.agreement_text !== '' ? comeback.outcome.agreement_text : "Agree";
                var popuposition = comeback.outcome.position == 1 ? "top" : "bottom";
                console.log(popuposition);
                if(comeback.outcome.showon == 1){
                  $myVar = setInterval(initCookieBannerforAll, 1000);
                }else{
                  $myVar = setInterval(initCookieBanner, 1000);
                }
                $("body").append('<style>.modal_preview{position: absolute;}.modal_preview .cc-close{position: absolute;top: 10px;right: 10px;}.preview_set{display: flex;justify-content: space-between;}.preview_set .cc-close{cursor: pointer;margin-left: 0.5em;font-size: 20px;font-weight: 700;}.preview_set .seven{flex: 1 1 auto;}.modal_preview .three{width: 100%;text-align: center;}.modal_preview{width: 500px;flex-wrap: wrap;}.modal-wrapper.open{visibility: visible;opacity: 1;}.modal-wrapper{display: flex;z-index: 999;width: 100%;height: 100%;visibility: hidden;top: 0;left: 0;opacity: 0;filter: alpha(opacity=0);-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;}@media(max-width:1200px){.preview_set .seven{width: 65%;}.preview_set .three{width: 35%;text-align: end;}}@media(max-width:550px){.preview_set{display: block;}.preview_set .seven{width: 100%;}.preview_set .three{width: 90%;text-align: end;}.preview_set .cc-close{float: right;top: -32px;position: relative;} }</style>'+
                  '<div id="cookies-banner" class="'+ layoutPopup +'" style="display: none;z-index:99;justify-content: center;align-items: center;padding: 1em;position:fixed;width: 100%;'+ popuposition +': 0px;">'+
                    '<div  class="preview_set '+ modalPreview +'" style="padding: 13px 6px;align-items: center;height:'+  height +'px;color:'+ comeback.outcome.color_banner_text	+';background:'+ comeback.outcome.color_banner +'; border-top: 1px solid #dcdcdc;'+ popuposition +': 0px;">'+
                    '<div class="seven">'+
                    '<span class="bar-text-wrapper">'+
                    '<span class="bar-message" style="font-size:'+  comeback.outcome.banner_fontsize +'">'+ comeback.outcome.message +'</span>&nbsp;'+
                    '<span class="bar-link"><a class="cc-link" href="'+ comeback.outcome.privacy_policy_url +'" target="_blank" style="text-decoration: underline;color:'+ comeback.outcome.color_banner_link  +'">'+ comeback.outcome.privacy_policy_url_text +'</a></span>'+
                    '</span>'+
                '</div>'+
                ' <div class="three">'+
                '<a class="cc-dismiss handleAccept allow" style="cursor: pointer;padding:7px 15px;color:'+ comeback.outcome.color_button_text +'; background-color:'+  comeback.outcome.color_button  +'; border-color: '+  comeback.outcome.color_button_border  +';border-radius:'+  comeback.outcome.button_border_radius  +'px;border:'+ comeback.outcome.border  +';">'+ decline_text +'</a>'+
                    '<a class="cc-dismiss handleDecline deny" style="cursor: pointer;margin-left: 0.5em;padding:7px 15px;color:'+ comeback.outcome.color_button_text +'; background-color:'+  comeback.outcome.color_button  +'; border-color: '+  comeback.outcome.color_button_border  +';border-radius:'+  comeback.outcome.button_border_radius  +'px;border:'+ comeback.outcome.border  +';">'+ agreement_text +'</a>'+
                '</div>'+
                '<span class="cc-close">✕</span>'+
                '</div>'
                );
              }
          });
        }
    $(document).on("click", ".cc-close", function() {
        console.log("CLOSE click");
        document.getElementById('cookies-banner').style.display = 'none';
    });
    $(document).on("click", ".handleDecline", function() {
        console.log("handleDecline click");
        handleDecline();  
    });
    $(document).on("click", ".handleAccept", function(event) {
        console.log("handleAccept click ");
        handleAccept(event);  
    });
      
    function hideBanner(res) {
      var getBannerEl =  document.getElementById('cookies-banner');
      console.log(getBannerEl);
        if(getBannerEl !== null){
          console.log("in if ");
          getBannerEl.style.display = 'none';
          clearInterval($myVar);
        }
    }
  
    function showBanner() {
      console.log("show banner");
      var getBannerEl =  document.getElementById('cookies-banner');
      console.log(getBannerEl);
      if(getBannerEl !== null){
        console.log("in if ");
        getBannerEl.style.display = 'block';
        clearInterval($myVar);
      }
    }
    
    function handleAccept(e) {
      console.log("handleAccept");
      window.Shopify.customerPrivacy.setTrackingConsent(true, hideBanner);
  
      document.addEventListener('trackingConsentAccepted',function() {
        console.log('trackingConsentAccepted event fired');
      });
    }
  
    function handleDecline() {
      window.Shopify.customerPrivacy.setTrackingConsent(false,hideBanner);
    }
  
    function initCookieBanner() {
      const userCanBeTracked = window.Shopify.customerPrivacy.userCanBeTracked();
      const userTrackingConsent = window.Shopify.customerPrivacy.getTrackingConsent();
  
      console.log(userTrackingConsent + "   TRACKING " );
      console.log(userCanBeTracked + "   TRACKED");
      if(!userCanBeTracked && userTrackingConsent === 'no_interaction') {
        showBanner();
      }else{
        clearInterval($myVar);
      }
    }
    function initCookieBannerforAll() {
      const userCanBeTracked = window.Shopify.customerPrivacy.userCanBeTracked();
      const userTrackingConsent = window.Shopify.customerPrivacy.getTrackingConsent();
  
      console.log(userTrackingConsent + "   TRACKING FOR ALL" );
      console.log(userCanBeTracked + "   TRACKED FOR ALL");
      if(userTrackingConsent === 'no_interaction') {
        showBanner();
      }else{
        clearInterval($myVar);
      }
    }
    
      window.Shopify.loadFeatures([
        {
          name: 'consent-tracking-api',
          version: '0.1',
        }
      ],
      function(error) {
          if (error) {
            throw error;
          }
        // $myVar = setInterval(initCookieBanner, 1000);
          // initCookieBanner();
      });
    
    });
        
});
