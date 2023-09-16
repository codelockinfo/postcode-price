<?php    
include "cls_header.php";  
include_once('dashboard_header.php');   
?>
<style>
   .mce-notification{display:none;}
</style>
    <div class="Polaris-Page login-frm max_width_change">
        <div class="Polaris-Page__Content">
            <div class="Polaris-Layout">
                <div class="Polaris-Layout__AnnotatedSection">
                    <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__AnnotationContent">
                            <div class="Polaris-Card">
                                <div class="Polaris-Card__Section">
                                     <nav role="navigation" class="product-detail-view">
                                            <a href="pages.php?store=<?php echo $_SESSION['store'];?>" class="Polaris-Breadcrumbs__Breadcrumb" data-polaris-unstyled="true">
                                                <span class="Polaris-Breadcrumbs__Icon">
                                                    <span class="Polaris-Icon">
                                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20">
                                                        <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16" fill-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <span class="Polaris-Breadcrumbs__Content">Back</span>
                                            </a>
                                        </nav>
                                      <div>
                                           <h2 class="Polaris-Heading editor-label">Pages</h2>
                                       </div>
                                    <form class="m-t formforparent" id="addpages_frm" name="register_frm" method="POST"  enctype="multipart/form-data" onsubmit="">
                                         <div class="">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label id="PolarisTextField11Label" for="PolarisTextField11" class="Polaris-Label__Text">Title</label>
                                                </div>
                                            </div>
                                            <div class="Polaris-Connected"><div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary">
                                                    <div class="Polaris-TextField">
                                                        <input id="title" name="title" placeholder="e.g. Pages about your latest products or deals" class="Polaris-TextField__Input" maxlength="255" aria-labelledby="PolarisTextField11Label" aria-invalid="false" value="">
                                                        <div class="Polaris-TextField__Backdrop">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                              <span class="error-message title"></span> 
                                        </div>
                                        <div class="sectionchatgpt clsmain_green">
                                            <div class="d-flex-alert-box">
                                                <button class="Polaris-Button Polaris-Button--success get_content_drop" type="button">
                                                    <span class="Polaris-Button__Content">
                                                        <span class="Polaris-Button__Text">Generate By ChatGPT</span>
                                                    </span>
                                                </button>
                                                <div class="Polaris-Banner Polaris-Banner--withinPage Polaris-Banner--statusInfo mar_l_padding_change" tabindex="0" role="alert" aria-live="polite" aria-labelledby="Banner7Heading" aria-describedby="Banner7Content">
                                                    <div class="Polaris-Banner__Ribbon">
                                                        <span class="Polaris-Icon Polaris-Icon--isColored Polaris-Icon--hasBackdrop Polaris-Icon--colorTeal">
                                                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                            <circle fill="currentColor" cx="10" cy="10" r="9"></circle>
                                                            <path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8m0-13a1 1 0 0 0-1 1v4a1 1 0 1 0 2 0V6a1 1 0 0 0-1-1m0 8a1 1 0 1 0 0 2 1 1 0 0 0 0-2"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="Polaris-Banner__Heading">
                                                        <p class="Polaris-Heading"> Quickly generate page descriptions by leveraging the power of Chat GPT, saving time and effort for businesses.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content_gtp">
                                            <input type="hidden"  class="chatGPT_Prerequest" value="Can you write page description for"/>
                                                <div class="Polaris-Connected">
                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary">
                                                        <div class="Polaris-TextField">
                                                            <input id="chatgptinput" name="" placeholder="Generate auto description by ChatGPT" class="Polaris-TextField__Input" maxlength="255" aria-labelledby="" aria-invalid="false" value="">
                                                            <div class="Polaris-TextField__Backdrop">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div><button class="Polaris-Button Polaris-Button--primary save_loader_show chatGPTBtn" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order">Search</button></div>
                                                </div>
                                                <span class="error-message chatgpterror"></span> 
                                            </div>
                                        </div>
                                        <div class="Polaris-Layout">
                                            <div class="Polaris-Layout__Section">
                                                <h2 class="Polaris-Heading text-left text-editer" id="title"></h2> 
                                                <input type="hidden" name="store" value="<?php echo $store; ?>">
                                                <textarea class="textdetails" name="description" value=""></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" id="addblog" class="Polaris-Button Polaris-Button--primary save_loader_show saveBtn" style="float: right; margin-top: 20px; margin-bottom: 10px;">Save</button>                                                    
                                        <button type="cancel" name="cancel" class="Polaris-Button Polaris-Button--destructive cancelRequest" data-page="pages" style="float: right; margin-top: 20px; margin-bottom: 10px;">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<?php  include_once('dashboard_footer.php'); ?>
