<?php 
    include "cls_header.php";
    include_once('dashboard_header.php');   
?>
<body>
    <div class="Polaris-Page pagemargin max_width_change bodycontainer">
        <div class="zonerat_contain" id="tab2">
            <div class="Polaris-Frame__Content">
                <div class="Polaris-Page2">
                    <div
                        class="Polaris-Page-Header Polaris-Page-Header--isSingleRow Polaris-Page-Header--hasNavigation Polaris-Page-Header--mediumTitle">
                        <div class="clsdisflex  Polaris-Page-Header__Row">
                            <div class="clsarrow  Polaris-Page-Header__BreadcrumbWrapper">
                                <nav role="navigation">
                                    <a href="index.php?store=<?php echo $_SESSION['store'];?>">
                                        <button class="Polaris-Breadcrumbs__Breadcrumb" type="button">
                                            <span class="Polaris-Breadcrumbs__Icon">
                                                <span class="Polaris-Icon">
                                                    <span class="Polaris-VisuallyHidden"></span>
                                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M17 9h-11.586l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414l-3.293-3.293h11.586a1 1 0 1 0 0-2z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <span class="Polaris-VisuallyHidden">Zones</span>
                                        </button>
                                    </a>
                                </nav>
                            </div>
                            <div class="Polaris-Page-Header__TitleWrapper">
                                <h1 class="clszonetitle Polaris-Header-Title">Add Zone</h1>
                            </div>
                        </div>
                    </div>
                    <form class="m-t" id="addbzone_frm" name="zone_frm" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="hiddenid" value="1">
                        <div class="Polaris-Page--divider">
                            <div class="Polaris-Layout">
                                <div class="Polaris-Layout__AnnotatedSection">
                                    <div class="Polaris-Layout__AnnotationWrapper">
                                        <div class="Polaris-Layout__Annotation">
                                            <div class="Polaris-TextContainer">
                                                <h2 class="Polaris-Heading">Zone details</h2>
                                                <div class="Polaris-Layout__AnnotationDescription">
                                                    <p>Give your zone a name and specify which zip codes are included.
                                                        Once you've created your zone you will be able to add rates.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Polaris-Layout__AnnotationContent">
                                            <div class="Polaris-Card">
                                                <div class="Polaris-Card__Section">
                                                    <div class="Polaris-FormLayout">
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label"><label
                                                                            id="PolarisTextField2Label"
                                                                            for="PolarisTextField2"
                                                                            class="Polaris-Label__Text Polaris-Label__RequiredIndicator">Zone
                                                                            name</label></div>
                                                                </div>
                                                                <div class="Polaris-Connected">
                                                                    <div
                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                        <div class="Polaris-TextField">
                                                                            <input id="zonename" name="zonename"
                                                                                autocomplete="off"
                                                                                class="Polaris-TextField__Input"
                                                                                type="text"
                                                                                aria-describedby="PolarisTextField2HelpText"
                                                                                aria-labelledby="PolarisTextField2Label"
                                                                                aria-invalid="false"
                                                                                aria-required="true" value="">
                                                                            <div class="Polaris-TextField__Backdrop">
                                                                            </div>
                                                                        </div>
                                                                        <div class="zonename errorcolor"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Labelled__HelpText"
                                                                    id="PolarisTextField2HelpText">This is for internal
                                                                    use only and will not be visible to your customers.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label"><label
                                                                            id="PolarisTextField3Label zonecode"
                                                                            for="PolarisTextField3"
                                                                            class="Polaris-Label__Text Polaris-Label__RequiredIndicator">Zip
                                                                            codes</label></div>
                                                                </div>
                                                                <div class="Polaris-Connected">
                                                                    <div
                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                        <div
                                                                            class="Polaris-TextField Polaris-TextField--multiline">
                                                                            <!-- <textarea id="zonearea" autocomplete="off"
                                                                                class="Polaris-TextField__Input"
                                                                                type="text" rows="2"
                                                                                aria-describedby="PolarisTextField3HelpText"
                                                                                aria-labelledby="PolarisTextField3Label"
                                                                                style="height: 58px;"
                                                                                name="zonearea"></textarea> -->
                                                                                <select multiple>
                                                                                    <option selected>Pizza</option>
                                                                                </select>
                                                                            <!-- <div class="Polaris-TextField__Backdrop">
                                                                            </div> -->
                                                                            <!-- <div aria-hidden="true"
                                                                                class="Polaris-TextField__Resizer">
                                                                                <div
                                                                                    class="Polaris-TextField__DummyInput">
                                                                                    <br>
                                                                                </div>
                                                                                <div
                                                                                    class="Polaris-TextField__DummyInput">
                                                                                    <br><br>
                                                                                </div>
                                                                            </div> -->
                                                                        </div>
                                                                        <div class="zonearea errorcolor"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Labelled__HelpText"
                                                                    id="PolarisTextField3HelpText">Enter a comma
                                                                    seperated list of zip codes for this zone.</div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label"><label
                                                                            id="PolarisTextField2Label"
                                                                            for="PolarisTextField2"
                                                                            class="Polaris-Label__Text Polaris-Label__RequiredIndicator">Zone
                                                                            Price</label></div>
                                                                </div>
                                                                <div class="Polaris-Connected">
                                                                    <div
                                                                        class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                                        <div class="Polaris-TextField">
                                                                            <input id="zoneprice" name="zoneprice"
                                                                                autocomplete="off"
                                                                                class="Polaris-TextField__Input"
                                                                                type="number"
                                                                                aria-describedby="PolarisTextField2HelpText"
                                                                                aria-labelledby="PolarisTextField2Label"
                                                                                aria-invalid="false"
                                                                                aria-required="true" value="">
                                                                            <div class="Polaris-TextField__Backdrop">
                                                                            </div>
                                                                        </div>
                                                                        <div class="zoneprice errorcolor"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Labelled__HelpText"
                                                                    id="PolarisTextField2HelpText">This is for internal
                                                                    use only and will not be visible to your customers.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-FormLayout__Item">
                                                            <div class="">
                                                                <div class="Polaris-Labelled__LabelWrapper">
                                                                    <div class="Polaris-Label"><label id="zonestatus"
                                                                            for="PolarisSelect1"
                                                                            class="Polaris-Label__Text">Zone
                                                                            status</label></div>
                                                                </div>
                                                                <div class="Polaris-Select">
                                                                    <select id="znoeselect"
                                                                        class="Polaris-Select__Input"
                                                                        aria-invalid="false" name="zonestatus">
                                                                        <option value="1">Enable</option>
                                                                        <option value="0">Disable</option>
                                                                    </select>
                                                                    <div class="Polaris-Select__Content"
                                                                        aria-hidden="true" aria-disabled="false">
                                                                        <span class="Polaris-Select__Icon">
                                                                            <span class="Polaris-Icon">
                                                                                <span
                                                                                    class="Polaris-VisuallyHidden"></span>
                                                                                <svg viewBox="0 0 20 20"
                                                                                    class="Polaris-Icon__Svg"
                                                                                    focusable="false"
                                                                                    aria-hidden="true">
                                                                                    <path
                                                                                        d="M7.676 9h4.648c.563 0 .879-.603.53-1.014l-2.323-2.746a.708.708 0 0 0-1.062 0l-2.324 2.746c-.347.411-.032 1.014.531 1.014Zm4.648 2h-4.648c-.563 0-.878.603-.53 1.014l2.323 2.746c.27.32.792.32 1.062 0l2.323-2.746c.349-.411.033-1.014-.53-1.014Z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="Polaris-Select__Backdrop"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="Polaris-Layout__Section">
                                    <div class="Polaris-PageActions">
                                        <div
                                            class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                                            <div class="Polaris-Stack__Item">
                                                <div class="Polaris-ButtonGroup">
                                                    <div class="Polaris-ButtonGroup__Item"><button
                                                            class="Polaris-Button" type="button">
                                                            <span class="Polaris-Button__Content"><span
                                                                    class="Polaris-Button__Text">Cancel</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Stack__Item">
                                                <button class="Polaris-Button Polaris-Button--primary" type="submit">
                                                    <span class="Polaris-Button__Content">
                                                        <span class="Polaris-Button__Text save_loader_show"><span
                                                                class="Polaris-Button__Content"><span>save</span></span></span>

                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Layout__Section">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 
<?php include_once('dashboard_footer.php'); ?>