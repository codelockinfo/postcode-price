<?php include_once('cls_header.php'); 
    include_once('dashboard_header.php');
?>
<div class="Polaris-Page pagemargin max_width_change bodycontainer cus_help">
    
    <div class="Polaris-Page__Header Polaris-Page__Header--hasBreadcrumbs Polaris-Page__Header--hasSecondaryActions Polaris-Page__Header--hasSeparator">
        <div class="Polaris-Page__MainContent">
            <div class="Polaris-Page__TitleAndActions">
                <div class="Polaris-Page__Title">
                    <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">How To Configure?</h1>
                    <p>Follow the steps below to add a ZIP Code widget to your store.</p>
                </div>
            </div>
        </div>
    </div>
   
    <div class="featurecontent">
            <div class="fea_con" style="margin-top: 20px;">
            <div class="col-md-1">
                <img src="<?php echo CLS_SITE_URL; ?>/assets/images/post/1.png" width="50px" alt="">
            </div>
            <div class="col-md-11">
                <b>Set List:</b> Navigate to the
                <a href="addzone.php?store=<?php echo $_SESSION['store'];?>" target="_blank">ZIP Code Sets
                </a> page. There will already be a default set. Make sure its status is set to On.
            </div>
            </div>
            <div class="fea_con" style="margin-top: 20px;">
            <div class="col-md-1">
                <img src="<?php echo CLS_SITE_URL; ?>/assets/images/post/2.png" width="50px" alt="">
            </div>
            <div class="col-md-11">
                <b>Edit The Default Set:</b> Add/import ZIP Codes and make changes according to your need.
            </div>
            </div>
            <div class="fea_con" style="margin-top: 20px;">
            <div class="col-md-1">
                <img src="<?php echo CLS_SITE_URL; ?>/assets/images/post/3.png" width="50px" alt="">
            </div>
            <div class="col-md-11">
                <b>Design Zippy Widget:</b> Navigate to the
                <a href="setting.php?store=<?php echo $_SESSION['store'];?>" target="_blank">Appearance</a> page and customize the Zippy widget as you want.
            </div>
            </div>
            <div class="fea_con" style="margin-top: 20px; margin-bottom: 25px;">
            <div class="col-md-1">
                <img src="<?php echo CLS_SITE_URL; ?>/assets/images/post/4.png" width="50px" alt="">
            </div>
            <div class="col-md-11">
                <b>Position The Zippy Widget:</b> Go to the
                <a href="setting.php?store=<?php echo $_SESSION['store'];?>" target="_blank">Settings</a> page, choose a widget position, and save. You can also set the display rules here.
            </div>
            </div>
            <div class="fea_con" style="margin-top: 20px; margin-bottom: 25px;">
            <div class="col-md-1">
                <img src="<?php echo CLS_SITE_URL; ?>/assets/images/post/5.png" width="50px" alt="">
            </div>
            <div class="col-md-11">
                <b>Test It:</b> Make a proper testing before making it live to your store. Feel free to contact us if need any help or have any questions.
            </div>
            </div>
        </div>
</div>
    
<?php include_once('dashboard_footer.php'); ?>
    <!-- <?php include_once('cls_footer.php'); ?> -->