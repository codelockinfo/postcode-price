<?php   
include "cls_header.php";
include "dashboard_header.php";
?>

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
                                            <div class="Polaris-Stack Polaris-Stack--alignmentBaseline clsdisplayspace">
                                                <h2 class="Polaris-Heading"><div class="allist">Zone list</div></h2>
                                                <div class="btnadd">
                                                    <a class="Polaris-Button Polaris-Button--primary save_loader_show" onclick="loading_show('.save_loader_show')" href="zonerate.php?store=<?php echo $_SESSION['store']; ?>">
                                                        <span>Add Zone</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-Card__Section">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField">
                                                    <div class="Polaris-TextField__Prefix" id="TextField-Browse-collection">
                                                        <span class="Polaris-Icon Polaris-Icon--hasBackdrop" aria-label="">
                                                            <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M8 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm9.707 4.293l-4.82-4.82C13.585 10.493 14 9.296 14 8c0-3.313-2.687-6-6-6S2 4.687 2 8s2.687 6 6 6c1.296 0 2.492-.415 3.473-1.113l4.82 4.82c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414z" fill="#95a7b7" fill-rule="evenodd"></path></svg>
                                                        </span>
                                                    </div>
                                                    <input type="text" id="zoneDataSearchKeyword" name="blogpost_list" class="Polaris-TextField__Input browse_buy_product_search" onkeyup="js_loadShopifyDATA('zoneData')" aria-invalid="false" placeholder="Search Zone" autocomplete="off">                                            
                                                    <div class="Polaris-TextField__Backdrop"></div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Labelled__HelpText">Type at least 3 characters</div>                                  
                                            <div class="Polaris-Card mt-4">
                                                <input type="hidden" name="limit" value="5" id="zoneDatalimit" selected="selected">
                                                <div class="Polaris-DataTable">
                                                    <div class="table-responsive">
                                                        <table id="zoneData" data-search="title" data-listing="true" data-from="table" data-apiname="zonerate" class="table">
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
                                                                <tr class="Polaris-ResourceList__ItemWrapper"> 
                                                                <td colspan="7">
                                                                    <center><p class="Polaris-ResourceList__AttributeOne Records-Not-Found">Records not found</p>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                        </table>
                                                    </div>                                         
                                                    <div class="cls-page-pagination mb-4" id="zoneDataPagination"></div>                                            
                                                </div>
                                            </div>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div></div>
    </div>

</div>