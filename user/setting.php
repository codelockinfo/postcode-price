<?php 
    include "cls_header.php";
    include_once('dashboard_header.php');   
?>
<body>
    <div class="Polaris-Page pagemargin max_width_change bodycontainer">
        <div class="Polaris-Page__Content">
            <div class="Polaris-Layout">
                <div class="Polaris-Layout__AnnotatedSection">
                    <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__AnnotationContent">
                            <div class="Polaris-Card">
                                    <div class="Polaris-Card__Header disp_fle_ju">
                                        <h2 class="Polaris-Heading">App settings</h2>
                                        <div class="Polaris-Stack__Item">
                                                <div class="Polaris-Stack Polaris-Stack--spacingTight">
                                                    <div class="Polaris-Stack__Item cls_design_enaDisa">
                                                        <button data-polaris-unstyled="true" class="Polaris-Button  Polaris-Button--success  enable-btn"  value=""></button>
                                                        </div>
                                                </div>
                                            </div>
                                    </div>
                                   
                            </div>
                            <form method="POST" id="cookies_bar_setting_save" onsubmit="">
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
                                                                    <p class="Polaris-Text--root Polaris-Text--headingXl" color="warning">After every change, please make sure you clear your storefront cache for the changes to take effect.</p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Layout__AnnotationContent">
                                                        <div class="Polaris-Card polarisboxshadow">
                                                            <div class="Polaris-LegacyCard sectionmessage">
                                                                <div class="Polaris-LegacyCard__Section">
                                                                    <div class="Polaris-FormLayout">
                                                                        
                                                                        <div class="Polaris-FormLayout__Item">
                                                                            <div class="">
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label">
                                                                                        <label id="titlelabel" for="" class="Polaris-Label__Text">Title</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Connected">
                                                                                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                    
                                                                                    <div class="Polaris-TextField">
                                                                                            <input id="titleText" name="title" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R1l9n6:Label" aria-invalid="false" value="Changing postcode or city:">
                                                                                            <div class="Polaris-TextField__Backdrop">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-FormLayout__Item" >
                                                                            <div class="">
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label">
                                                                                        <label id="massagelabel" for="" class="Polaris-Label__Text">Message</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Connected">
                                                                                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                    
                                                                                    <div class="Polaris-TextField">
                                                                                            <input id="massageText" name="message" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R1l9n6:Label" aria-invalid="false" value="To see prices in the shop, you must enter a postcode">
                                                                                            <div class="Polaris-TextField__Backdrop">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-FormLayout__Item" style="margin-top: 0.4rem;">
                                                                            <div class="">
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label">
                                                                                        <label id="maintitlelabel" for="" class="Polaris-Label__Text">Post Code Title</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Connected">
                                                                                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                    
                                                                                    <div class="Polaris-TextField">
                                                                                            <input id="maintitleText" name="maintitle" autocomplete="off" class="Polaris-TextField__Input" type="text" aria-labelledby=":R1l9n6:Label" aria-invalid="false" value="Changing postcode or city:">
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
                                                                                            <input id="buttonText" name="agreement_text" autocomplete="off" aria-labelledby=":R2l9n6:Label" class="Polaris-TextField__Input" type="text" aria-invalid="false" value="Save">
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
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Pop-up height (px)</label></div>
                                                                            </div>
                                                                            <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="myNumber" name="banner_height" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false">
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
                                                                                        <label class="Polaris-Label__Text">Title font size (px)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Select Polaris-Select--placeholder">
                                                                                    <select class="Polaris-Select__Input titlefont" name="title_fontsize">
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
                                                                            <div class="coutnry-select2">
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label">
                                                                                        <label class="Polaris-Label__Text">Message font size (px)</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Select Polaris-Select--placeholder">
                                                                                    <select class="Polaris-Select__Input msgfont" name="message_fontsize">
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
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Zipcode border radius (px)</label></div>
                                                                            </div>
                                                                            <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="zipcoderd" name="zipcode_border_radius" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" value="">
                                                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                                    <button role="button" class="Polaris-TextField__Segment zipup" tabindex="-1">
                                                                                        <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                                    </button>
                                                                                    <button role="button" class="Polaris-TextField__Segment zipdown" tabindex="-1">
                                                                                        <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Down"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path></svg></span></div>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="Polaris-TextField__Backdrop"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-FormLayout__Item">
                                                                            <div class="Polaris-Labelled__LabelWrapper">
                                                                                <div class="Polaris-Label"><label class="Polaris-Label__Text">Zipcode border width (px)</label></div>
                                                                            </div>
                                                                            <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="zipborwidth" name="zipcode_border_width" class="Polaris-TextField__Input" type="number" aria-labelledby="TextField32Label" aria-invalid="false" value="">
                                                                                <div class="Polaris-TextField__Spinner" aria-hidden="true">
                                                                                    <button role="button" class="Polaris-TextField__Segment zipwup" tabindex="-1">
                                                                                        <div class="Polaris-TextField__SpinnerIcon"><span class="Polaris-Icon tip" data-hover="Up"><svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M15 12l-5-5-5 5z"></path></svg></span></div>
                                                                                    </button>
                                                                                    <button role="button" class="Polaris-TextField__Segment zipwdown" tabindex="-1">
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
                                                                                    <select class="Polaris-Select__Input positionSelect2" name="position">
                                                                                        <option value="1">Top</option>
                                                                                        <option value="0">Bottom</option>
                                                                                    
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
                                                
                                                <div style=" padding: 1%;"> </div>
                                                <div class="Polaris-Layout__AnnotationWrapper">
                                                    <div class="Polaris-Layout__Annotation Polaris-Card polarisboxshadow">
                                                        <div class="Polaris-TextContainer">
                                                                <div class="Polaris-Box" style="--pc-box-color:var(--p-color-text-subdued)">
                                                                    <p>Change the design of your Pop-up.</p>
                                                                </div>
                                                                <hr>
                                                                <div class="Polaris-FormLayout">
                                                                    <div role="group" class="Polaris-FormLayout--grouped">
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color"value="#FFFFFF" name="color_banner" id="colorPickerbutton3" class="color_circle" colorpick-eyedropper-active="true">
                                                                                                <input type="hidden" id="colorCodebutton3">
                                                                                            </button>
                                                                                        </div>
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label"><label class="Polaris-Label__Text">Pop-up</label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" name="color_banner_text" value="#000000" id="popuptitle" class="color_circle" colorpick-eyedropper-active="true">
                                                                                                <input type="hidden" id="popuptitleText">
                                                                                            </button>
                                                                                        </div>
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label"><label class="Polaris-Label__Text">Pop-up Title Text</label></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" name="color_banner_link" value="#000000" id="popupmsglink" class="color_circle" colorpick-eyedropper-active="true">
                                                                                                <input type="hidden" id="popupmessage">
                                                                                            </button>
                                                                                        </div>
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label"><label class="Polaris-Label__Text">Pop-up Message Text</label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" name="color_button" value="#FFFFFF" id="buttonbackcolor" class="color_circle" colorpick-eyedropper-active="true">
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
                                                                        
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" value="#000000" name="color_button_text" id="buttontextcolor" class="color_circle" colorpick-eyedropper-active="true">
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
                                                                                                <input type="color" value="#000000" name="color_button_border" id="buttonbordercolor" class="color_circle" colorpick-eyedropper-active="true">
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
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" name="zipcodeback" value="#FFFFFF" id="zipbuttonbackcolor" class="color_circle" colorpick-eyedropper-active="true">
                                                                                                <input type="hidden" id="Zipcode">
                                                                                            </button>
                                                                                        </div>
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label"><label class="Polaris-Label__Text">Zipcode Button</label></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-FormLayout__Items">
                                                                            
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" value="#000000" name="color_button_text" id="zipcodetextcolor" class="color_circle" colorpick-eyedropper-active="true">
                                                                                                <input type="hidden" id="zipcodetext">
                                                                                            </button>
                                                                                        </div>
                                                                                    
                                                                                    </div>
                                                                                </div>
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label"><label class="Polaris-Label__Text">ZipCode Text</label></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="Polaris-FormLayout__Item colorflex">
                                                                                <div class="MuiGrid-root jss197 MuiGrid-item">
                                                                                    <div class="fcolor">
                                                                                        <div>
                                                                                            <button class="MuiButtonBase-root MuiButton-root fs-14 MuiButton-sizeSmall MuiButton-disableElevation cls-color color-btn c_btn" tabindex="0" type="button" href="">
                                                                                                <span class="MuiTouchRipple-root"></span>
                                                                                                <input type="color" value="#000000" name="color_button_border" id="zipcodebordercolor" class="color_circle" colorpick-eyedropper-active="true">
                                                                                                <input type="hidden" id="zipcodeborder">
                                                                                            </button>
                                                                                        </div>
                                                                                    
                                                                                    </div>

                                                                                </div>
                                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                                    <div class="Polaris-Label"><label class="Polaris-Label__Text">Zipcode Border</label></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Layout__AnnotationContent" style="position:relative;">
                                                        <div class="Polaris-Card" style="height:100%;">
                                                            <div class="backimg">
                                                                <div class="preview-cookie-bar modal-wrapper open">
                                                                    <div class="preview_set modal_preview" style="background-color: rgb(0, 0, 0); color: rgb(250, 250, 250); height: 250px; bottom: 0px;    top: 0px; flex-direction: column;">
                                                                        <div class="seven" style="width: 100%;">
                                                                            <span class="bar-text-wrapper">
                                                                                <div><span class="bar-title">Changing postcode or city:</span></div>
                                                                                <span class="bar-message" style="font-size: 18px;">To see prices in the shop, you must enter a postcode</span>
                                                                                <div class="bar_btn">
                                                                                    <span class="bar-subtitle change" style="font-size: 18px;">Changes postcode or city</span>
                                                                                    <span class="three">
                                                                                        <input type="text" id="freightAreaZipcodePopup" class="form-control cc-dismiss postcode" autocomplete="off" value="" style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255); border-radius: 0px;margin:0 0 0 2.8%;border: 2px solid #595959;width: 140px;">
                                                                                        <a class="cc-dismiss save" style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255); border: 2px solid rgb(255, 255, 255); border-radius: 0px;">Save</a>
                                                                                    </span>
                                                                                </div>
                                                                            </span>
                                                                        </div>
                                                                        
                                                                        <span class="cc-close" id="buttonclose" style="color: rgb(255, 255, 255);">✕</span>
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
                    </div>  
                </div>
            </div>
        </div>  
    </div>
</body>
</html> 
<?php include_once('dashboard_footer.php'); ?>