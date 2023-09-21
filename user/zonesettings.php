<?php   
 include "cls_header.php";
 include "dashboard_header.php";
?>
<div class="zonset_container">
    <div class="Polaris-Frame__Content">
        <div class="Polaris-Page">
            <div class="Polaris-Page__Content">
                <div class="Polaris-Layout">
                    <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation"><div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading" id="settingsGeneral">General</h2><div class="Polaris-Layout__AnnotationDescription">
                            <p>Enable delivery rates, and manage most important app settings</p></div></div></div>
                    <div class="Polaris-Layout__AnnotationContent">
                    <div class="cls Polaris-Card"><div class="Polaris-Card__Section"><div class="Polaris-Stack Polaris-Stack--alignmentCenter"><div class="Polaris-Stack__Item Polaris-Stack__Item--fill"><span class="">Delivery Rates by Zip Code is  <b class="red"></b></span></div><div class="Polaris-Stack__Item">
                       <div class="Polaris-Stack__Item">
                                                <div class="Polaris-Stack Polaris-Stack--spacingTight">
                                                    <div class="Polaris-Stack__Item cls_design_enaDisa">
                                                        <button data-polaris-unstyled="true" class="Polaris-Button Polaris-Button--primary  enable-btn"  value=""></button>
                                                        <!--<button  data-polaris-unstyled="true" class="Polaris-Button Polaris-Button--primary  enable-btn" value="0" style="display:none;" >Disable</button>-->
                                                      
                                                    </div>
                                                <!--<button class="Polaris-Button" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Disable</span></span></button></div>-->
                                                </div>
                                            </div></div></div></div></div>

                    </div>    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
   seeting_enable_disable(store);

</script>