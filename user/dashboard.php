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
                                                            <input type="text" id="zoneDataSearchKeyword"
                                                                name="blogpost_list"
                                                                class="Polaris-TextField__Input browse_buy_product_search"
                                                                onkeyup=""
                                                                aria-invalid="false" placeholder="Search Zone"
                                                                autocomplete="off">
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
                                                                <table id="zoneData" data-search="title"
                                                                    data-listing="true" data-from="table"
                                                                    data-apiname="zonerate" class="table">
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
                                                                        <tr
                                                                            class="Polaris-ResourceList__ItemWrapper trhover">
                                                                            <td>1</td>
                                                                            <td>Frederiksberg</td>
                                                                            <td>2200kr</td>
                                                                            <td>Enable</td>
                                                                            <td>
                                                                                <div
                                                                                    class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented highlight-text">

                                                                                    <div
                                                                                        class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented highlight-text">
                                                                                        <div
                                                                                            class="Polaris-ButtonGroup__Item highlight-text">
                                                                                            <span
                                                                                                class="Polaris-Button Polaris-Button--sizeSlim tip loader_show"
                                                                                                data-hover="Edit">
                                                                                                <a
                                                                                                    href="addzone.html">
                                                                                                    <span
                                                                                                        class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop">
                                                                                                        <svg class="Polaris-Icon__Svg"
                                                                                                            viewBox="0 0 469.331 469.331">
                                                                                                            <path
                                                                                                                d="M438.931,30.403c-40.4-40.5-106.1-40.5-146.5,0l-268.6,268.5c-2.1,2.1-3.4,4.8-3.8,7.7l-19.9,147.4   c-0.6,4.2,0.9,8.4,3.8,11.3c2.5,2.5,6,4,9.5,4c0.6,0,1.2,0,1.8-0.1l88.8-12c7.4-1,12.6-7.8,11.6-15.2c-1-7.4-7.8-12.6-15.2-11.6   l-71.2,9.6l13.9-102.8l108.2,108.2c2.5,2.5,6,4,9.5,4s7-1.4,9.5-4l268.6-268.5c19.6-19.6,30.4-45.6,30.4-73.3   S458.531,49.903,438.931,30.403z M297.631,63.403l45.1,45.1l-245.1,245.1l-45.1-45.1L297.631,63.403z M160.931,416.803l-44.1-44.1   l245.1-245.1l44.1,44.1L160.931,416.803z M424.831,152.403l-107.9-107.9c13.7-11.3,30.8-17.5,48.8-17.5c20.5,0,39.7,8,54.2,22.4   s22.4,33.7,22.4,54.2C442.331,121.703,436.131,138.703,424.831,152.403z"
                                                                                                                fill="#000"
                                                                                                                fill-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="Polaris-ButtonGroup__Item highlight-text">
                                                                                            <span
                                                                                                class="Polaris-Button Polaris-Button--sizeSlim tip "
                                                                                                data-hover="Delete"
                                                                                                onclick="">
                                                                                                <a class="history-link"
                                                                                                    href="">
                                                                                                    <span
                                                                                                        class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop save_loader_show1    ">
                                                                                                        <svg class="Polaris-Icon__Svg"
                                                                                                            viewBox="0 0 20 20">
                                                                                                            <path
                                                                                                                d="M16 6a1 1 0 1 1 0 2h-1v9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V8H4a1 1 0 1 1 0-2h12zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z"
                                                                                                                fill="#000"
                                                                                                                fill-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr
                                                                            class="Polaris-ResourceList__ItemWrapper trhover">
                                                                            <td>5</td>
                                                                            <td>København S</td>
                                                                            <td>2200kr</td>
                                                                            <td>Enable</td>
                                                                            <td>
                                                                                <div
                                                                                    class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented highlight-text">

                                                                                    <div
                                                                                        class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented highlight-text">
                                                                                        <div
                                                                                            class="Polaris-ButtonGroup__Item highlight-text">
                                                                                            <span
                                                                                                class="Polaris-Button Polaris-Button--sizeSlim tip loader_show"
                                                                                                data-hover="Edit">
                                                                                                <a
                                                                                                    href="addzone.html">
                                                                                                    <span
                                                                                                        class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop">
                                                                                                        <svg class="Polaris-Icon__Svg"
                                                                                                            viewBox="0 0 469.331 469.331">
                                                                                                            <path
                                                                                                                d="M438.931,30.403c-40.4-40.5-106.1-40.5-146.5,0l-268.6,268.5c-2.1,2.1-3.4,4.8-3.8,7.7l-19.9,147.4   c-0.6,4.2,0.9,8.4,3.8,11.3c2.5,2.5,6,4,9.5,4c0.6,0,1.2,0,1.8-0.1l88.8-12c7.4-1,12.6-7.8,11.6-15.2c-1-7.4-7.8-12.6-15.2-11.6   l-71.2,9.6l13.9-102.8l108.2,108.2c2.5,2.5,6,4,9.5,4s7-1.4,9.5-4l268.6-268.5c19.6-19.6,30.4-45.6,30.4-73.3   S458.531,49.903,438.931,30.403z M297.631,63.403l45.1,45.1l-245.1,245.1l-45.1-45.1L297.631,63.403z M160.931,416.803l-44.1-44.1   l245.1-245.1l44.1,44.1L160.931,416.803z M424.831,152.403l-107.9-107.9c13.7-11.3,30.8-17.5,48.8-17.5c20.5,0,39.7,8,54.2,22.4   s22.4,33.7,22.4,54.2C442.331,121.703,436.131,138.703,424.831,152.403z"
                                                                                                                fill="#000"
                                                                                                                fill-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="Polaris-ButtonGroup__Item highlight-text">
                                                                                            <span
                                                                                                class="Polaris-Button Polaris-Button--sizeSlim tip "
                                                                                                data-hover="Delete"
                                                                                                onclick="removeFromTable('zone',10,5,1, 'zoneData','zonerate' ,this)">
                                                                                                <a class="history-link"
                                                                                                    href="javascript:void(0)">
                                                                                                    <span
                                                                                                        class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop save_loader_show5    ">
                                                                                                        <svg class="Polaris-Icon__Svg"
                                                                                                            viewBox="0 0 20 20">
                                                                                                            <path
                                                                                                                d="M16 6a1 1 0 1 1 0 2h-1v9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V8H4a1 1 0 1 1 0-2h12zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z"
                                                                                                                fill="#000"
                                                                                                                fill-rule="evenodd">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="cls-page-pagination mb-4"
                                                                id="zoneDataPagination">
                                                                <div class="Polaris-Page__Pagination">
                                                                    <nav class="Polaris-Pagination Polaris-Pagination--plain"
                                                                        aria-label="Pagination">
                                                                        <div id=""
                                                                            class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented">
                                                                            <div class="Polaris-ButtonGroup__Item">
                                                                                <a href="javascript:void(0)"
                                                                                    onclick="js_loadShopifyDATA('zoneData',0)"
                                                                                    class="Polaris-Button tip display_inline_block Polaris-Button--disabled"
                                                                                    data-hover="Previous">
                                                                                    <span
                                                                                        class="Polaris-Button__Content">
                                                                                        <span>
                                                                                            <span class="Polaris-Icon">
                                                                                                <svg class="Polaris-Icon__Svg"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2"
                                                                                                        fill-rule="evenodd">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="Polaris-ButtonGroup__Item">
                                                                                <a href="javascript:void(0)"
                                                                                    onclick="js_loadShopifyDATA('zoneData',2)"
                                                                                    class="Polaris-Button display_inline_block tip "
                                                                                    data-hover="Next">
                                                                                    <span
                                                                                        class="Polaris-Button__Content">
                                                                                        <span>
                                                                                            <span class="Polaris-Icon">
                                                                                                <svg class="Polaris-Icon__Svg"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        d="M17.707 9.293l-5-5a.999.999 0 1 0-1.414 1.414L14.586 9H3a1 1 0 1 0 0 2h11.586l-3.293 3.293a.999.999 0 1 0 1.414 1.414l5-5a.999.999 0 0 0 0-1.414"
                                                                                                        fill-rule="evenodd">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </nav>
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