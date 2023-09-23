<?php
    include_once '../append/connection.php';
    include_once ABS_PATH . '/user/cls_functions.php';
    include_once ABS_PATH . '/cls_shopifyapps/config.php';
    $default_shop = 'dashboardmanage.myshopify.com';
    if ((isset($_GET['store']) && $_GET['store'] != '') || isset($default_shop)) {
    $store = isset($_GET['store']) ? $_GET['store'] : $default_shop;
    $functions = new Client_functions($store);
    $current_user = $functions->get_store_detail_obj();
    } else {
    header('Location: https://www.shopify.com/admin/apps');
    exit;
    }
    $view = (isset($_GET["view"]) && $_GET["view"]) ? $_GET["view"] : FALSE;
?>  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo CLS_SITE_NAME; ?></title>
        <link rel="stylesheet" href="<?php echo main_url('assets/css/polaris.css'); ?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo CLS_SITE_URL; ?>/assets/images/logo1.svg.png"/>
        <link rel="stylesheet" href="<?php echo main_url('assets/css/spectrum.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo main_url('assets/css/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo main_url('assets/css/select2.min.css'); ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php echo main_url('assets/css/custom_style.css'); ?>" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
        <script> var store = "<?php echo $store; ?>"; </script>
        <?php  $_SESSION['store'] = $store; ?>
        <script src="<?php echo main_url('assets/js/jquery-3.6.4.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/jquery-ui.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/post_style.js');?>"></script> 
        <script src="<?php echo main_url('assets/js/easy_style.js');?>"></script> 
        <script src="<?php echo main_url('assets/js/spectrum.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/popper.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/star_rating.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/select2.full.min.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/shopify_client_1.js'); ?>"></script>
        <script src="<?php echo main_url('assets/js/shopify_custom.js');?>"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
   