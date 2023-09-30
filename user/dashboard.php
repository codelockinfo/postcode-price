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
     
        <div class="article_contain">
            <div class="article_table">
                <div class="Polaris-Page">
                    <div class="Polaris-Page__Content">
                        <div class="Polaris-Layout">
                            <div class="Polaris-Layout__AnnotatedSection">
                                <div class="Polaris-Layout__AnnotationWrapper">
                                    <div class="Polaris-Layout__AnnotationContent">
                                        <div class="Polaris-Card__Section">
                                            <div class="Polaris-Card">
                                                <div class="Polaris-Card__Header">
                                                    <div
                                                        class="Polaris-Stack Polaris-Stack--alignmentBaseline clsdisplayspace">
                                                        <h2 class="Polaris-Heading">
                                                            <div class="allist">Zone list</div>
                                                        </h2>
                                                        <div class="btnadd">
                                                            <a class="Polaris-Button Polaris-Button--primary save_loader_show"
                                                               
                                                                href="addzone.php?store=<?php echo $_SESSION['store'];?>">
                                                                <span>Add Zone</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Card__Section">
                                                    <div
                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                        <div class="Polaris-TextField">
                                                            <div class="Polaris-TextField__Prefix"
                                                                id="TextField-Browse-collection">
                                                                <span class="Polaris-Icon Polaris-Icon--hasBackdrop"
                                                                    aria-label="">
                                                                    <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M8 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm9.707 4.293l-4.82-4.82C13.585 10.493 14 9.296 14 8c0-3.313-2.687-6-6-6S2 4.687 2 8s2.687 6 6 6c1.296 0 2.492-.415 3.473-1.113l4.82 4.82c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414z"
                                                                            fill="#95a7b7" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" id="zoneDataSearchKeyword" name="zone_list" class="Polaris-TextField__Input browse_buy_product_search" onkeyup="js_loadShopifyDATA('zoneData')" aria-invalid="false" placeholder="Search Zone" autocomplete="off">                                            
                                                            <div class="Polaris-TextField__Backdrop"></div>
                                                        </div>
                                                    </div>
                                                    <div class="Polaris-Labelled__HelpText">Type at least 3 characters
                                                    </div>
                                                    <div class="Polaris-Card mt-4">
                                                        <input type="hidden" name="limit" value="5" id="zoneDatalimit"
                                                            selected="selected">
                                                        <div class="Polaris-DataTable">
                                                            <div class="table-responsive">
                                                                <table id="zoneData" data-search="title"  data-listing="true" data-from="table" data-apiname="zonerate" class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Zone Name</th>
                                                                            <th>Price</th>
                                                                            <th>Zone Sattus</th>
                                                                            <th width="150">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="allzoneData">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="cls-page-pagination mb-4" id="zoneDataPagination">
                                                        <input type="hidden" name="current_page" id="currentPage" value="1">                                              
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
            </div>

        </div>
    </div>
    <div class="footermargin">
        <div class="Polaris-FooterHelp__Text footermargin footer_border">
                Easy Postcode - GDPR EU©2023
                <!-- - Developed by<a target="_blank" href="http://codelocksolutions.com/" style="margin:0 5px;">Codelock Solutions</a>  team  -->
        </div> 
    </div>
</body>
</html> 

<?php include_once('dashboard_footer.php'); ?>
<script>
    popup_setting_save_first();
</script>