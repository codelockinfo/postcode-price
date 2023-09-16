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

<style>
    .hover01 p img {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        transition: all 0.8s ease-in-out;
    }
    .hover01 p:hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
</style>
<body>
    <div class="Polaris-Page pagemargin max_width_change">
                            <div class="Polaris-Page__Title">
                                        <div class="Polaris-Banner Polaris-Banner--statusSuccess  Polaris-Banner--withinPage" tabindex="0" role="alert" aria-live="polite" aria-labelledby="Banner7Heading" aria-describedby="Banner7Content">
                                            <div class="Polaris-Banner__Ribbon">
                                                <span class="Polaris-Icon Polaris-Icon--colorGreenDark Polaris-Icon--isColored Polaris-Icon--hasBackdrop">
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                                    <circle fill="currentColor" cx="10" cy="10" r="9"></circle>
                                                    <path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8m0-13a1 1 0 0 0-1 1v4a1 1 0 1 0 2 0V6a1 1 0 0 0-1-1m0 8a1 1 0 1 0 0 2 1 1 0 0 0 0-2"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="Polaris-Banner__Heading" id="Banner7Heading">
                                                <p class="Polaris-Heading">ReWriter is a powerful tool designed to supercharge your Shopify store by helping you create captivating product descriptions, beautifully written pages, and engaging articles. With ReWriter, you can effortlessly elevate your store's content and capture the attention of your customers like never before. </p>
                                            </div>
                                        </div>
                            </div>
        <div class="Polaris-Page__Content">
            <div class="Polaris-Layout">
                <div class="Polaris-Layout__AnnotatedSection">
                    <div class="Polaris-Layout__AnnotationWrapper">
                        <div class="Polaris-Layout__AnnotationContent">
                            <div class="Polaris-Card">
                                <div class="Polaris-Card__Section">
                                    <div class="hover01 column">
                                    
                                        <div class="Polaris-Card__Header">
                                            <div class="howusebtn">
                                                <a href="help.php?store=<?php echo $store; ?>"  class="Polaris-Button  Polaris-Button--success" style="text-decoration: none;" >
                                                    <span class="Polaris-Button__Content">
                                                    <span>How to Use </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="Polaris-Layout">
                                            <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                <div>
                                                    <div class="Polaris-Card">
                                                        <div class="Polaris-CalloutCard__Container">
                                                            <div class="Polaris-Card__Section">
                                                                <div class="Polaris-CalloutCard">
                                                                    <div class="Polaris-CalloutCard__Content min_height120">
                                                                        <div class="Polaris-CalloutCard__Title">
                                                                            <!--<h2 class="Polaris-Heading">Customize the style of your checkout</h2>-->
                                                                        </div>
                                                                        <div class="Polaris-Card__Header header-data">
                                                                            <div class="Polaris-CalloutCard__Buttons" ><a class="Polaris-Button  Polaris-Button--primary" href="blog_post.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add /Edit Blog</span></span></a>
                                                                      
                                                                                <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="blog_post.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Articles</a>
                                                                                (<span class="Polaris-Heading-number numberConvertBlog">0</span>)</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Card__Section">
                                                                            <a href="blog_post.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                                                <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                                                                                    <img src="<?php echo CLS_SITE_URL; ?>/assets/images/home_page/Blue_and_White article _Desktop_Prototype.png" style="width:100%;height:100%;" class="mobile_view_img"></p>
                                                                            </a>
                                                                        </div>
                                                                        <div style="text-align: center; font-size: larger;font-weight: 600;"><span>Generate auto content for your Blog</span></div>
                                                                        
                                                                        <h2 class="Polaris-Heading">
                                                                            <p>Beautifully Written Articles: Engage your audience and boost your store's credibility with well-crafted articles. ReWriter assists you in writing blog posts, articles, and other content that captivates readers.</p>
                                                                        </h2>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="PolarisPortalsContainer"></div>
                                                </div>
                                                <div class="Polaris-Card">                                            
                                                   
                                                   
                                                </div>
                                            </div>  
                                            <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                <div>
                                                    <div class="Polaris-Card">
                                                        <div class="Polaris-CalloutCard__Container">
                                                            <div class="Polaris-Card__Section">
                                                                <div class="Polaris-CalloutCard">
                                                                    <div class="Polaris-CalloutCard__Content min_height120">
                                                                        <div class="Polaris-CalloutCard__Title">
                                                                            <!--<h2 class="Polaris-Heading">Customize the style of your checkout</h2>-->
                                                                        </div>
                                                                        <div class="Polaris-Card__Header header-data">
                                                       
                                                                            <div class="Polaris-CalloutCard__Buttons"><a class="Polaris-Button  Polaris-Button--primary" href="pages.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add /Edit Page</span></span></a>
                                                                            <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="pages.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Pages</a>
                                                                            (<span class="Polaris-Heading-number numberConvertPages">0</span>)</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Card__Section">
                                                                            <a href="pages.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                                                <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/home_page/Blue_and_White_Minimalist_Desktp_Prototype.png" style="width:100%;height:100%;"></p>
                                                                            </a> 
                                                                        </div>
                                                                        <div style="text-align: center; font-size: larger;font-weight: 600;"><span>Generate auto content  for your Pages</span></div>
                                                                        
                                                                        <h2 class="Polaris-Heading">
                                                                            <p>Page Creation Made Easy: Creating stunning pages for your Shopify store is a breeze with ReWriter. It offers a range of customizable templates and provides creative prompts to guide you through the process. </p>
                                                                        </h2>
                                                                         <!-- <img src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg" alt="" class="Polaris-CalloutCard__Image"> -->
                                                                   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="PolarisPortalsContainer"></div>
                                                </div>
                                                <div class="Polaris-Card">                                            
                                                    
                                                    
                                                </div>
                                            </div> 
                                        </div>                               
                                        <div class="Polaris-Card__Header"></div>
                                        <div class="Polaris-Layout">
                                            <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                <div>
                                                    <div class="Polaris-Card">
                                                        <div class="Polaris-CalloutCard__Container">
                                                            <div class="Polaris-Card__Section">
                                                                <div class="Polaris-CalloutCard">
                                                                    <div class="Polaris-CalloutCard__Content min_height120">
                                                                        <div class="Polaris-CalloutCard__Title">
                                                                            <!--<h2 class="Polaris-Heading">Customize the style of your checkout</h2>-->
                                                                        </div>
                                                                        <div class="Polaris-Card__Header header-data">
                                                                            <div class="Polaris-CalloutCard__Buttons"><a class="Polaris-Button  Polaris-Button--primary" href="products.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add /Edit Product</span></span></a>
                                                                       
                                                                                <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="products.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Products</a>
                                                                                (<span class="Polaris-Heading-number numberConvertProduct">0</span>)</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Card__Section">
                                                                            <a href="products.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                                                <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/home_page/Purple_Modern_Login_Page_Desktop_Prototype.png" style="width:100%;height:100%;"> </p>
                                                                            </a>
                                                                        </div>
                                                                        <div style="text-align: center; font-size: larger;font-weight: 600;"><span>Generate auto description  for your Product</span></div>
                                                                        
                                                                        <h2 class="Polaris-Heading">
                                                                            <p>Product Description Enhancement: ReWriter takes your product descriptions to the next level. It provides intelligent suggestions and alternatives to help you craft compelling and persuasive descriptions. </p>
                                                                        </h2>
                                                                        <!-- <img src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg" alt="" class="Polaris-CalloutCard__Image"> -->
                                                                   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="PolarisPortalsContainer"></div>
                                                </div>
                                                <div class="Polaris-Card">                                            
                                                   
                                                </div>
                                            </div>                                 
                                            <div class="Polaris-Layout__Section Polaris-Layout__Section--secondary">
                                                <div>
                                                    <div class="Polaris-Card">
                                                        <div class="Polaris-CalloutCard__Container">
                                                            <div class="Polaris-Card__Section">
                                                                <div class="Polaris-CalloutCard">
                                                                    <div class="Polaris-CalloutCard__Content min_height120">
                                                                        <div class="Polaris-CalloutCard__Title">
                                                                            <!--<h2 class="Polaris-Heading">Customize the style of your checkout</h2>-->
                                                                        </div>
                                                                        <div class="Polaris-Card__Header header-data">
                                                                            <div class="Polaris-CalloutCard__Buttons"><a class="Polaris-Button Polaris-Button--primary" href="collection.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add /Edit Collection</span></span></a>
                                                                                <h2 class="Polaris-Heading head-title"><a class="Polaris-Link" href="collection.php?store=<?php echo $_SESSION['store']; ?>" data-polaris-unstyled="true">Collections</a>
                                                                                (<span class="Polaris-Heading-number numberConvertCollection">0</span>)</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Card__Section">
                                                                            <a href="collection.php?store=<?php echo $_SESSION['store']; ?>" style="display:block; width:100%; height:100%;">
                                                                                <p class="Polaris-DisplayText Polaris-DisplayText--sizeLarge"><img src="<?php echo CLS_SITE_URL; ?>/assets/images/home_page/Blue_and_White Gradient_fashion_Enthausiast_Desktop_Mockup.png"  style="width:100%;height:100%;"></p>
                                                                            </a>
                                                                        </div>
                                                                        <div style="text-align: center; font-size: larger;font-weight: 600;"><span>Generate auto description  for your Collection</span></div>
                                                                        
                                                                        <h2 class="Polaris-Heading">
                                                                            <p>Collection Descriptions: With ReWriter, you can effortlessly enhance your collection descriptions, making them more informative and enticing. Utilize the power of intelligent suggestions to create collections that resonate with your target audience and drive more sales.</p>
                                                                        </h2>
                                                                        <!-- <img src="https://cdn.shopify.com/s/assets/admin/checkout/settings-customizecart-705f57c725ac05be5a34ec20c05b94298cb8afd10aac7bd9c7ad02030f48cfa0.svg" alt="" class="Polaris-CalloutCard__Image"> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="PolarisPortalsContainer"></div>
                                                </div>
                                                <div class="Polaris-Card">                                            
                                                   
                                                </div>
                                            </div>                     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="footermargin">
                           <div class="Polaris-FooterHelp__Text footermargin">
                                    ReWriter©2023 - Developed by<a target="_blank" href="http://codelocksolutions.com/" style="margin:0 5px;">Codelock Solutions</a>  team </div> 
        </div>
</body>
</html> 
<script>
    $(document).ready(function () {
        var routineName = 'get_store_product';
        var shopify_api = 'products';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_article';
        var shopify_api = 'articles';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_pages';
        var shopify_api = 'pages';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_collection';
        var shopify_api = 'custom_collections';
        get_api_data(routineName, shopify_api);
        var routineName = 'get_store_blog';
        var shopify_api = 'blogs';
        get_api_data(routineName, shopify_api);

    });

</script>
<?php include_once('dashboard_footer.php'); ?>