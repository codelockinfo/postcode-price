<?php
ob_start();
include_once('cls_header.php');
//include_once('../append/session.php');
$common_function = new common_function();

if (isset($_GET['store']) && $_GET['store'] != '') {
    include_once('dashboard_header.php');
} else {
    header('Location:https://accounts.shopify.com/store-login');
}

?>

<body>
    <div class="Polaris-Page pagemargin max_width_change bodycontainer">
     
        <form method="POST" id="cookies_bar_setting_save" onsubmit>
            <div class="Polaris-Page Polaris-Page--fullWidth" style="padding:0;">
                <div class="Polaris-Page__Content">
                    <div class="Polaris-Layout">
                        <div class="Polaris-Layout__AnnotatedSection">
                            <div class="Polaris-ButtonGroup" style="justify-content:end;margin: -1% 0 2% 0;">
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button" type="cancel">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Cancel</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button Polaris-Button--primary save_loader_show" type="submit">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Save</span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <div class="Polaris-Layout__AnnotationWrapper ">
                                <div class="Polaris-Layout__Annotation Polaris-Card polarisboxshadow">
                                    <div class="Polaris-TextContainer">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--headingXl Cookiesett" id="storeDetails">Settings</h2>
                                            <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                                                <p>Change and edit the text and settings of your banner.</p>
                                            </div>
                                            <div class="Polaris-LegacyStack__Item">
                                                <p class="Polaris-Text--root Polaris-Text--headingXl"color="warning">After every change, please make sure you clear your storefront cache for the changes to take effect.</p>
                                            </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__AnnotationContent">
                                    <div class="Polaris-Card polarisboxshadow">
                                        <div class="Polaris-LegacyCard sectionmessage">
                                            <div class="Polaris-LegacyCard__Section">
                                                <div class="Polaris-FormLayout">
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="code-form-control layout-2-column "data-id="element16" data-default-value="">
                                                            <label class="classic-label globo-label "><span class="label-content" data-label="Radio">Show on</span><span></span></label>
                                                            <ul class="flex-wrap radiobutton">
                                                                <li class="globo-list-control option-1-column">
                                                                    <div class="radio-wrapper">
                                                                        <input class="radio-input" id="false-radio-1-Option 1-" type="radio" data-type="radio" name="showon" value="1">
                                                                        <label class="radio-label globo-option" for="false-radio-1-Option 1-">All Countries</label>
                                                                    </div>
                                                                </li>
                                                                <li class="globo-list-control option-1-column">
                                                                    <div class="radio-wrapper">
                                                                        <input class="radio-input" id="false-radio-1-Option 2-" type="radio" data-type="radio" name="showon" value="0">
                                                                        <label class="radio-label globo-option" for="false-radio-1-Option 2-">EU only</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label id="massagelabel" for="" class="Polaris-Label__Text">Message</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                
                                                                <div class="Polaris-TextField">
                                                                        <input id="massageText" name="message" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R1l9n6:Label" aria-invalid="false" value="This website uses cookies to ensure you get the best experience on our websit">
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label  for=":R2l9n6:" class="Polaris-Label__Text">Privacy Policy URL</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                    <div class="Polaris-TextField">
                                                                        <input id="privacyText" autocomplete="email" name="privacy_policy_url" class="Polaris-TextField__Input" type="text" aria-labelledby=":R2l9n6:Label" aria-invalid="false" value="">
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout">
                                            <div role="group" class="Polaris-FormLayout--grouped">
                                                <div class="Polaris-FormLayout__Items">
                                                   
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label id="buttonLabel" for=":R3dn6:" class="Polaris-Label__Text">Agreement Text</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                    <div class="Polaris-TextField">
                                                                        <input id="buttonText" name="agreement_text" autocomplete="off" aria-labelledby=":R2l9n6:Label" class="Polaris-TextField__Input" type="text" aria-invalid="false">
                                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                                
                                                                            </div>
                                                                            <div class="Polaris-TextField__Backdrop">
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="Polaris-FormLayout__Item">
                                                    <div class="">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label">
                                                                <label id="declinebuttonLabel" for=":R3dn6:" class="Polaris-Label__Text">Decline Text</label>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Connected">
                                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                <div class="Polaris-TextField">
                                                                    <input id="declinebuttonText" name="decline_text" autocomplete="off" aria-labelledby=":R2l9n6:Label" class="Polaris-TextField__Input" type="text" aria-invalid="false" value="Decline">
                                                                        <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                            
                                                                        </div>
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label  class="Polaris-Label__Text">Privacy policy link text</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Connected">
                                                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                    <div class="Polaris-TextField">
                                                                        <input id="linkText" name="privacy_policy_url_text" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R5dn6:Label" aria-invalid="false">
                                                                        <div class="Polaris-TextField__Backdrop">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner height (px)</label></div>
                                                        </div>
                                                        <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="myNumber" name="banner_height" class="Polaris-TextField__Input" type="number"  aria-labelledby="TextField32Label" aria-invalid="false">
                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                <button role="button" class="Polaris-TextField__Segment up" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                </button>
                                                                <button role="button" class="Polaris-TextField__Segment down" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="coutnry-select2">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label class="Polaris-Label__Text">Banner font size (px)</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                                <select class="Polaris-Select__Input widthSelect2" name="banner_fontsize">
                                                                    <option value="11px">11px</option>
                                                                    <option value="12px">12px</option>
                                                                    <option value="14px">14px</option>
                                                                    <option value="16px">16px</option>
                                                                    <option value="18px">18px</option>
                                                                    <option value="20px">20px</option>
                                                                    <option value="22px">22px</option>
                                                                    <option value="24px">24px</option>
                                                                    <option value="28px">28px</option>
                                                                    <option value="32px">32px</option>
                                                                </select>
                                                                <div class="Polaris-Select__Icon select-hide">
                                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label class="Polaris-Label__Text">Button border radius (px)</label></div>
                                                        </div>
                                                        <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="borderrad" name="button_border_radius" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" value="">
                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                <button role="button" class="Polaris-TextField__Segment bup" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                </button>
                                                                <button role="button" class="Polaris-TextField__Segment bdown" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="Polaris-Labelled__LabelWrapper">
                                                            <div class="Polaris-Label"><label class="Polaris-Label__Text">Button border width (px)</label></div>
                                                        </div>
                                                        <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="borwidth" name="button_border_width" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" value="">
                                                            <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                <button role="button" class="Polaris-TextField__Segment bwup" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                </button>
                                                                <button role="button" class="Polaris-TextField__Segment bwdown" tabindex="-1">
                                                                    <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                </button>
                                                            </div>
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                               
                                                
                                                    <div class="Polaris-FormLayout__Item">
                                                        <div class="coutnry-select2">
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label">
                                                                    <label class="Polaris-Label__Text">Position</label>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                                <select class="Polaris-Select__Input positionSelect2"  name="position">
                                                                    <option value="0">Bottom</option>
                                                                    <option value="1">Top</option>
                                                                
                                                                </select>
                                                                <div class="Polaris-Select__Icon select-hide">
                                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div  style=" padding: 1%;"> </div>
                            <div class="Polaris-Card__Section Polaris-Card">
                                <div class="quickflex">
                                    <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--headingXl" id="storeDetails">Choose a color palette:</h2>
                                </div>
                                <div class="flex flex-wrap gap-1 bannerflex">
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground  h-8 w-11 p-1" style="background: rgb(255, 255, 255);">
                                            <div class="bannercolor  h-3 w-4 mt-2 ml-5" style="background: rgb(0, 0, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(255, 252, 252);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(0, 239, 255);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: rgb(99, 113, 199);">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(0, 0, 0);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(241, 214, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(234, 247, 247);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(86, 203, 219);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(37, 46, 57);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(20, 167, 208);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(0, 0, 0);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(0, 255, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(57, 55, 163);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(230, 37, 118);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(35, 122, 252);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(248, 168, 255);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(250, 236, 236);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(109, 136, 138);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(56, 59, 117);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(241, 214, 0);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(29, 138, 138);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(98, 255, 170);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(237, 239, 245);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(75, 129, 232);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(52, 60, 102);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(247, 21, 89);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(33, 105, 66);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(175, 237, 113);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(60, 64, 77);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(139, 237, 79);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(235, 108, 68);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(245, 217, 72);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(239, 239, 239);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(142, 199, 96);"></div>
                                        </div>
                                    </div>
                                    <div class="w-14 p-1 border-2 mr-1 border-solid bannerlayout" style="border-color: transparent;">
                                        <div class="bannerbackground h-8 w-11 p-1" style="background: rgb(245, 245, 245);">
                                            <div class="bannercolor h-3 w-4 mt-2 ml-5" style="background: rgb(106, 25, 125);"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div role="group" class="Polaris-Layout__AnnotatedSection bannerflex">
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\12.jpg" alt="" data-set="#22155D" data-value="#B3214F" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\9.webp" alt="" data-set="#BF0001" data-value="#A70202" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\8.webp" alt="" data-set="#016E62" data-value="#003236" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\4.jpg" alt="" data-set="#710B25" data-value="#230B23" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\5.jpg" alt="" data-set="#6238C0" data-value="#9933AC" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\6.webp" alt="" data-set="#8DD899" data-value="#3BB58A" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\13.jpg" alt="" data-set="#643793" data-value="#733B6E" class="banner1">
                                    </div>
                                    <div class="bannerlayout">
                                        <img src="..\assets\images\14.webp" alt="" data-set="#D19487" data-value="#A37988" class="banner1">
                                    </div>
                                </div> -->
                            </div>
                            <div  style=" padding: 1%;"> </div>
                            <div class="Polaris-Layout__AnnotationWrapper">
                                <div class="Polaris-Layout__Annotation Polaris-Card polarisboxshadow">
                                    <div class="Polaris-TextContainer">
                                        <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--headingXl" id="storeDetails">Design Settings Layout</h2>
                                            <div class="Polaris-Select Polaris-Select--placeholder">
                                                <select class="Polaris-Select__Input layoutSelect2" name="layout">
                                                    <option value="0">Banner</option>
                                                    <option value="1">Pop-up</option>
                                                </select>
                                                <div class="Polaris-Select__Icon select-hide">
                                                    <span class="Polaris-Icon"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg></span></div>
                                                <div class="Polaris-Select__Backdrop select-hide"></div>
                                            </div>
                                            <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                                                <p>Change the design of your banner.</p>
                                            </div>
                                            <hr>
                                            <div class="Polaris-FormLayout">
                                                <div role="group" class="Polaris-FormLayout--grouped">
                                                    <div class="Polaris-FormLayout__Items" >
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_banner"  id="colorPickerbutton3" class="color_circle">
                                                                            <input type="hidden" id="colorCodebutton3">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_banner_text" id="bannerTextback" class="color_circle">
                                                                            <input type="hidden" id="bannerText">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner Text</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Items" >
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_banner_link"  id="bannertextlink" class="color_circle">
                                                                            <input type="hidden" id="bannerlink">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Banner Link</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_button" id="buttonbackcolor" class="color_circle">
                                                                            <input type="hidden" id="buttoncolor">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Button</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-FormLayout__Items" >
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_button_text" id="buttontextcolor" class="color_circle">
                                                                            <input type="hidden" id="buttontext">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Button Text</label></div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item colorflex">
                                                            <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                <div class="fcolor">
                                                                    <div>
                                                                        <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                            <span class="MuiTouchRipple-root"></span>
                                                                            <input type="color" name="color_button_border" id="buttonbordercolor" class="color_circle">
                                                                            <input type="hidden" id="buttonborder">
                                                                        </button>
                                                                    </div>
                                                                
                                                                </div>

                                                            </div>
                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Button Border</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__AnnotationContent">
                                    <div class="Polaris-Card" style="height:100%;">
                                        <div class="backimg">
                                            <div class="preview-cookie-bar">
                                                <div class="preview_set" style="background-color: rgb(244, 143, 177); color: rgb(49, 27, 146);">
                                                    <div class="seven">
                                                        <span class="bar-text-wrapper">
                                                        <span class="bar-message">This website uses cookies to ensure you get the best experience on our website.</span>
                                                        <span class="bar-link"><a class="cc-link" href="https://payalcls.myshopify.com/policies/privacy-policy" target="_blank" style="color: rgb(255, 204, 128);">Learn More</a></span>
                                                        </span>
                                                    </div>
                                                    <div class="three">
                                                        <a class="cc-dismiss deny" style="color: rgb(2, 136, 209); background-color: rgb(49, 27, 146); border-color: rgb(48, 63, 159);"></a>
                                                        <a class="cc-dismiss allow" style="color: rgb(2, 136, 209); background-color: rgb(49, 27, 146); border-color: rgb(48, 63, 159);"></a>
                                                    </div>
                                                    <span class="cc-close" id="buttonclose">✕</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Polaris-ButtonGroup buttonbottom">
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button" type="cancel">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Cancel</span>
                                    </span>
                                    </button>
                                </div>
                                <div class="Polaris-ButtonGroup__Item">
                                    <button class="Polaris-Button Polaris-Button--primary save_loader_show" type="submt">
                                    <span class="Polaris-Button__Content">
                                        <span class="Polaris-Button__Text">Save</span>
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="footermargin">
        <div class="Polaris-FooterHelp__Text footermargin footer_border">
                Easy Cookie Bar - GDPR EU©2023 
                <!-- - Developed by<a target="_blank" href="http://codelocksolutions.com/" style="margin:0 5px;">Codelock Solutions</a>  team  -->
        </div> 
    </div>
</body>
</html> 

<?php include_once('dashboard_footer.php'); ?>
<script>
    cookies_bar_setting_save_first();
    cookies_bar_setting_select();
    console.log("On load dashbaord page");
</script>