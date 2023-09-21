
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

if (DB_OBJECT == 'mysql') {
    include ABS_PATH . "/collection/mongo_mysql/mysql/common_function.php";
} else {
    include ABS_PATH . "/collection/mongo_mysql/mongo/common_function.php";
}
include_once ABS_PATH . '/collection/form_validation.php';
include_once ABS_PATH . '/user/cls_load_language_file.php';
include_once '../append/Login.php';

class Client_functions extends common_function {

    public $cls_errors = array();
    public $msg = array();

    public function __construct($shop = '') {
        parent::__construct($shop);

        $this->db = $GLOBALS['conn'];
    }

    function prepare_db_inputs($post) {
        $post_value = mysqli_real_escape_string($this->db_connection, trim($post));
        return $post_value;
    }

    function cls_get_shopify_list($shopify_api_name_arr = array(), $shopify_url_param_array = [], $type = '', $shopify_is_object = 1) {
        $shopinfo = $this->current_store_obj;
        $shopinfo = (object)$shopinfo;
        $store_name = $shopinfo->shop_name;
        $password = $shopinfo->password;
        $shopify_url_array = array_merge(array('/admin/' . CLS_API_VERSIION), $shopify_api_name_arr);
        $shopify_main_url = implode('/', $shopify_url_array) . '.json';
        $where_query = array(["", "status", "=", "1"]);
        $comeback= $this->select_result(CLS_TABLE_THIRDPARTY_APIKEY, '*',$where_query);
        $CLS_API_KEY = (isset($comeback['data'][1]['thirdparty_apikey']) && $comeback['data'][1]['thirdparty_apikey'] !== '') ? $comeback['data'][1]['thirdparty_apikey'] : '';
        $shopify_data_list = cls_api_call($CLS_API_KEY, $password, $store_name, $shopify_main_url, $shopify_url_param_array, $type);
        $response = (isset($shopify_data_list['response']) && $shopify_data_list['response'] !== '') ? $shopify_data_list['response'] : ''; 
        if ($shopify_is_object) {
            return json_decode($response);
        } else {
            return json_decode($response, TRUE);
        }
    }

    function take_api_shopify_data() {
        $comeback = array('outcome' => 'false', 'report' => CLS_SOMETHING_WENT_WRONG);
        if (isset($_POST['store']) && $_POST['store'] != '' && isset($_POST['shopify_api'])) {
            $shopify_api = $_POST['shopify_api'];
            $shopinfo = $this->current_store_obj;
            $shopinfo = (object)$shopinfo;
            $pages = defined('PAGE_PER') ? PAGE_PER : 10;
            $limit = isset($_POST['limit']) ? $_POST['limit'] : $pages;
            $page_no = isset($_POST['pageno']) ? $_POST['pageno'] : '1';
            $shopify_url_param_array = array(
                'limit' => $limit,
                'pageno' => $page_no
            );
            $shopify_api_name_arr = array('main_api' => $shopify_api, 'count' => 'count');
            $filtered_count = $total_product_count = $this->cls_get_shopify_list($shopify_api_name_arr)->count;

            $search_word = isset($_POST['search_keyword']) ? $_POST['search_keyword'] : '';
            if ($search_word != '') {
                $shopify_url_param_array = array_merge($shopify_url_param_array, $this->make_api_search_query($search_word, $_POST['search_fields']));
                $filtered_count = $this->cls_get_shopify_list($shopify_api_name_arr, $shopify_url_param_array)->count;
            }
            $shopify_api_name_arr = array('main_api' => $shopify_api);
            $api_shopify_data_list = $this->cls_get_shopify_list($shopify_api_name_arr, $shopify_url_param_array);
            $tr_html = array();
            if (count($api_shopify_data_list->$shopify_api) > 0) {
                $tr_html = call_user_func(array($this, 'make_api_data_' . $_POST['listing_id']), $api_shopify_data_list);
            }
            $total_pages = ceil($filtered_count / $limit);
            $pagination_html = $this->pagination_btn_html($total_pages, $page_no, $_POST['pagination_method'], $_POST['listing_id']);
            $comeback = array(
                "outcome" => 'true',
                "total_record" => intval($total_product_count),
                "recordsFiltered" => intval($filtered_count),
                'pagination_html' => $pagination_html,
                'html' => $tr_html
            );
            return $comeback;
        }
    }

    function make_api_data_productData($api_data_list) {
        $shopinfo = $this->current_store_obj;
        $shopinfo = (object)$shopinfo;
        $tr_html = '<tr class="Polaris-ResourceList__ItemWrapper"> <td colspan="5"><center><p class="Polaris-ResourceList__AttributeOne Records-Not-Found">Data not found</p></center></td></tr>';
        $prifix = '<td>';
        $sufix = '</td>';
        $html = '';
        foreach ($api_data_list as $detail_obj) {
            foreach ($detail_obj as $i => $products) {
                $image = ($products->image == '') ? CLS_NO_IMAGE : $products->image->src;
                $html .= '<tr>';
                $html .= $prifix . '<img src="' . $image . '" width="50px" height="50px" >' . $sufix;
                $html .= $prifix . $products->id . $sufix;
                $html .= $prifix . $products->title . $sufix;
                $html .= $prifix . $products->vendor . $sufix;
                $html .= $prifix .
                        '<div class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented">
                                        <div class="Polaris-ButtonGroup__Item">
                                            <a href="" class="Polaris-Button">
                                                <span class="Polaris-Button__Content tip" data-hover="View">
                                                    <span class="Polaris-Icon">
                                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M17.928 9.628c-.092-.229-2.317-5.628-7.929-5.628s-7.837 5.399-7.929 5.628c-.094.239-.094.505 0 .744.092.229 2.317 5.628 7.929 5.628s7.837-5.399 7.929-5.628c.094-.239.094-.505 0-.744m-7.929 4.372c-2.209 0-4-1.791-4-4s1.791-4 4-4c2.21 0 4 1.791 4 4s-1.79 4-4 4m0-6c-1.104 0-2 .896-2 2s.896 2 2 2c1.105 0 2-.896 2-2s-.895-2-2-2" fill="#000" fill-rule="evenodd"></path></svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="Polaris-ButtonGroup__Item">
                                            <a href="products_edit.php?product_id=' . $products->id . '&store=' . $_SESSION['store'] . '" class="Polaris-Button">
                                                <span class="Polaris-Button__Content tip" data-hover="Edit">
                                                    <span class="Polaris-Icon">
                                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 469.331 469.331"><path d="M438.931,30.403c-40.4-40.5-106.1-40.5-146.5,0l-268.6,268.5c-2.1,2.1-3.4,4.8-3.8,7.7l-19.9,147.4   c-0.6,4.2,0.9,8.4,3.8,11.3c2.5,2.5,6,4,9.5,4c0.6,0,1.2,0,1.8-0.1l88.8-12c7.4-1,12.6-7.8,11.6-15.2c-1-7.4-7.8-12.6-15.2-11.6   l-71.2,9.6l13.9-102.8l108.2,108.2c2.5,2.5,6,4,9.5,4s7-1.4,9.5-4l268.6-268.5c19.6-19.6,30.4-45.6,30.4-73.3   S458.531,49.903,438.931,30.403z M297.631,63.403l45.1,45.1l-245.1,245.1l-45.1-45.1L297.631,63.403z M160.931,416.803l-44.1-44.1   l245.1-245.1l44.1,44.1L160.931,416.803z M424.831,152.403l-107.9-107.9c13.7-11.3,30.8-17.5,48.8-17.5c20.5,0,39.7,8,54.2,22.4   s22.4,33.7,22.4,54.2C442.331,121.703,436.131,138.703,424.831,152.403z" fill="#000" fill-rule="evenodd"></path></svg>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="Polaris-ButtonGroup__Item">
                                         <a href="" class="Polaris-Button">
                                                <span class="Polaris-Button__Content tip" data-hover="Delete">
                                                    <span class="Polaris-Icon">
                                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20"><path d="M16 6a1 1 0 1 1 0 2h-1v9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V8H4a1 1 0 1 1 0-2h12zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#000" fill-rule="evenodd"></path></svg>
                                                    </span>
                                                </span>
                                         </a>       
                                        </div>
                    </div> ' . $sufix;

                $html .= '</tr>';
            }
        }
        return $html;
    }

    function take_table_shopify_data() {
        $response = array('result' => 'fail', 'msg' => __('Something went wrong'));
        if (isset($_POST['store']) && $_POST['store'] != '') {
            $shopinfo = $this->current_store_obj;
            $shopinfo = (object)$shopinfo;
            $per_page = defined('CLS_PAGE_PER') ? CLS_PAGE_PER : 10;
            $limit = isset($_POST['limit']) ? $_POST['limit'] : $per_page;
            $pageno = isset($_POST['pageno']) ? $_POST['pageno'] : '1';
            $offset = $limit * ($pageno - 1);

            $search_word = (isset($_POST['search_key']) && $_POST['search_key'] != '') ? $_POST['search_key'] : NULL;
            $select_seller = (isset($_POST['select_seller']) && $_POST['select_seller'] != '') ? $_POST['select_seller'] : NULL;

            $get_table_arr = $this->take_table_listing_data($_POST['listing_id'], $limit, $offset, $search_word, $select_seller);
            $filtered_count = $get_table_arr['filtered_count'];
            $total_prod_cnt = $get_table_arr['total_prod_cnt'];
            $table_data_arr = $get_table_arr['data_arr'];
            $tr_html = call_user_func(array($this, 'make_table_data_' . $_POST['listing_id']), $table_data_arr, $pageno, $get_table_arr['api_name']);
            $total_page = ceil($filtered_count / $limit);
            $pagination_html = $this->pagination_btn_html($total_page, $pageno, $_POST['pagination_method'], $_POST['listing_id']);
            $response = array(
                "outcome" => 'true',
                "recordsTotal" => intval($total_prod_cnt),
                "recordsFiltered" => intval($filtered_count),
                'pagination_html' => $pagination_html,
                'html' => $tr_html
            );
        }
        
        return $response;
    }

    function make_table_data_productData($table_data_arr, $pageno, $table_name) {
        $shopinfo = $this->current_store_obj;
        $shopinfo = (object)$shopinfo;
        $total_record = $table_data_arr->num_rows;
        $tr_html = '<tr class="Polaris-ResourceList__ItemWrapper"> <td colspan="7"><center><p class="Polaris-ResourceList__AttributeOne Records-Not-Found">Records not found</p></center></td></tr>';
        if ($table_data_arr->num_rows > 0) {
            $tr_html = '';
            foreach ($table_data_arr as $dataObj) {
                $dataObj = (object) $dataObj;
                $image = (empty($dataObj->image)) ? CLS_SITE_URL . '/assets/images/' . CLS_NO_IMAGE : $dataObj->image;
                $tr_html.='<tr class="Polaris-ResourceList__ItemWrapper trhover">';
                // $tr_html.='<td>' . $dataObj->id . '</td>';
                // $tr_html.='<td>' . $dataObj->product_id . '</td>';
                $tr_html .= '<td>' . '<img src="' . $image . '" alt="' . $dataObj->title . '" width="50px" height="50px" >' . '</td>';
                $tr_html.='<td>' . $dataObj->title . '</td>';
                // $tr_html.='<td>' . $dataObj->description . '</td>';
                $tr_html.='<td><div class="product-description-cls">' . $dataObj->description . '</div></td>';
                $tr_html.='<td>' . $dataObj->price . '</td>';
                $after_delete_pageno = $pageno;
                if ($dataObj->status == '1') {
                    $svg_icon_status = CLS_SVG_EYE;
                    $data_hover = 'View';
                }
                if ($total_record == 1) {
                    $after_delete_pageno = $pageno - 1;
                }
                $tr_html.='
            <td>
            <div class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented highlight-text">                   
              <div class="Polaris-ButtonGroup__Item highlight-text">
                <span class="Polaris-Button Polaris-Button--sizeSlim tip " data-hover="' . $data_hover . '">
                <a class="history-link" href="https://'.$shopinfo->shop_name.'/products/' . $dataObj->handle . '" target="_blank">
                        <span class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop ">
                            ' . $svg_icon_status . '
                        </span>
                    </a>
                </span>
            </div>
            <div class="Polaris-ButtonGroup Polaris-ButtonGroup--segmented highlight-text">                   
              <div class="Polaris-ButtonGroup__Item highlight-text">
                <span class="Polaris-Button Polaris-Button--sizeSlim tip " data-hover="Edit">
                      <a href="products_edit.php?product_id=' . $dataObj->product_id . '&store=' . $shopinfo->shop_name . '" >
                        <span class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop ">
                            ' . CLS_SVG_EDIT . '
                        </span>
                    </a>
                </span>
            </div>
                  <div class="Polaris-ButtonGroup__Item highlight-text">
                    <span class="Polaris-Button Polaris-Button--sizeSlim tip " data-hover="Delete" onclick="removeFromTable(\'' . TABLE_PRODUCT_MASTER . '\',' . $dataObj->product_id . ',' . $dataObj->id . ',' . $after_delete_pageno . ', \'productData\',\'products\' ,this)">
                        <a class="history-link" href="javascript:void(0)">
                            <span class="Polaris-custom-icon Polaris-Icon Polaris-Icon--hasBackdrop save_loader_show' . $dataObj->product_id . '    ">
                                ' . CLS_SVG_DELETE . '
                            </span>
                        </a>
                    </span>
                </div>';
                $tr_html.='</div></td></tr>';
            }
        }
        return $tr_html;
    }
    
    function enable_disable(){
        $response_data = array('result' => 'fail', 'msg' => __('Something went wrong'));
        $fields = array();
        if (isset($_POST['store']) && $_POST['store'] != '') {
            $shop = $_POST['store'];
            $where_query = array(["", "shop_name", "=", "$shop"]);
            $btnval = (isset($_POST['btnval']) && $_POST['btnval'] !== '') ? $_POST['btnval'] : 0;
            $fields['application_status'] = ($btnval == 1) ? 1 : 0 ;
            $comeback = $this->put_data(TABLE_USER_SHOP, $fields, $where_query);
            $response = array(
                "result" => 'success',
                "message" => 'data update successfully',
                "outcome" => $comeback,
            );
        }
        return $response;
    }

    function appstatus(){
        $response_data = array('result' => 'fail', 'msg' => __('Something went wrong'));
            if (isset($_POST['store']) && $_POST['store'] != '') {
                $store= $_POST['store'];
                $where_query = array(["", "shop_name", "=", "$store"]);
                $comeback= $this->select_result(TABLE_USER_SHOP, '*', $where_query);
                $response = array('data' => 'success', 'msg' => 'select successfully','outcome' => $comeback);
            }
            return $response;
    }
    function cookies_bar_setting_save_first(){
        $response = array('result' => 'fail', 'msg' => __('Something went wrong'));
        if (isset($_POST['store']) && $_POST['store'] != '' ) {
                $fields_arr = array();
                $shopinfo = $this->current_store_obj;
                $shopinfo = (object)$shopinfo;
                $where_query = array(["", "store_user_id", "=", $shopinfo->store_user_id]);
                $comeback= $this->select_result(TABLE_COOKIEBAR_SETTINGS, '*', $where_query);
                $mysql_date = date('Y-m-d H:i:s');
                if(empty($comeback['data'])){
                        $fields_arr = array(
                            '`store_user_id`' => $shopinfo->store_user_id,
                            '`message`' => 'This website uses cookies to ensure you get the best experience on our website',
                            '`showon`' => '0',
                            '`privacy_policy_url`' => '',
                            '`agreement_text`' =>'Got it!',
                            '`decline_text`' =>'Decline',
                            '`privacy_policy_url_text`' => 'Learn More',
                            '`banner_height`' => '70',
                            '`popup_height`' => '300',
                            '`banner_fontsize`' => '20px',
                            '`button_border_radius`' => '20',
                            '`button_border_width`' => '2',
                            '`position`' => '1',
                            '`layout`' => '0',
                            '`color_banner`' => '#000000',
                            '`color_banner_text`' => '#fafafa',
                            '`color_banner_link`' => '#ffffff',
                            '`color_button`' => '#ffffff',
                            '`color_button_text`' =>  '#000000',
                            '`color_button_border`' =>'#ffffff',
                            '`created_at`' => $mysql_date,
                            '`updated_at`' => $mysql_date
                    );
                    $response_data = $this->post_data(TABLE_COOKIEBAR_SETTINGS, array($fields_arr));
                    $response = array('result' => 'success', 'msg' => "Setting add successfully");
                }
            }
            return $response;
    }
    function cookies_bar_setting_save() {
        $response = array('result' => 'fail', 'msg' => __('Something went wrong'));
        if (isset($_POST['store']) && $_POST['store'] != '') {
            generate_log('user_index' , json_encode($_POST)  . " ... POST");
            $fields_arr = array();
            $shopinfo = $this->current_store_obj;
            $shopinfo = (object)$shopinfo;
            $where_query = array(["", "store_user_id", "=", $shopinfo->store_user_id]);
            $comeback= $this->select_result(TABLE_COOKIEBAR_SETTINGS, '*', $where_query);
            $mysql_date = date('Y-m-d H:i:s');
            if(!empty($comeback['data'])){
                $popup_height = (isset($_POST['layout']) && $_POST['layout'] == 1) ? $_POST['banner_height'] : $comeback['data'][0]["popup_height"];
                $banner_height = (isset($_POST['layout']) && $_POST['layout'] == 0) ? $_POST['banner_height'] : $comeback['data'][0]["banner_height"];
                $where_query = array(
                    ["", "store_user_id", "=", $shopinfo->store_user_id],
                );
                $fields_arr = array(
                    '`message`' => $_POST["message"],
                    '`showon`' => $_POST["showon"],
                    '`privacy_policy_url`' => $_POST["privacy_policy_url"],
                    '`agreement_text`' => $_POST["agreement_text"],
                    '`decline_text`' =>$_POST["decline_text"],
                    '`privacy_policy_url_text`' => $_POST["privacy_policy_url_text"],
                    '`banner_height`' => $banner_height,
                    '`popup_height`' => $popup_height,
                    '`banner_fontsize`' => $_POST["banner_fontsize"],
                    '`button_border_radius`' => $_POST["button_border_radius"],
                    '`button_border_width`' => $_POST["button_border_width"],
                    '`position`' => $_POST["position"],
                    '`layout`' => $_POST["layout"],
                    '`color_banner`' => $_POST["color_banner"],
                    '`color_banner_text`' => $_POST["color_banner_text"],
                    '`color_banner_link`' => $_POST["color_banner_link"],
                    '`color_button`' => $_POST["color_button"],
                    '`color_button_text`' => $_POST["color_button_text"],
                    '`color_button_border`' => $_POST["color_button_border"],
                    '`updated_at`' => $mysql_date
                );
                $response_data = $this->put_data(TABLE_COOKIEBAR_SETTINGS, $fields_arr, $where_query);
                $response = array('result' => 'success', 'msg' => "Setting update successfully");
            }
        }
        return $response;
    }
    function cookies_bar_setting_select(){
        $response_data = array('result' => 'fail', 'msg' => __('Something went wrong'));
        if (isset($_POST['store']) && $_POST['store'] != '') {
                $shopinfo = $this->current_store_obj;
                $shopinfo = (object)$shopinfo;
                $where_query = array(["", "store_user_id", "=", $shopinfo->store_user_id]);
                $comeback= $this->select_result(TABLE_COOKIEBAR_SETTINGS, '*', $where_query);
                $comebackdata = isset($comeback['data'][0]) ? $comeback['data'][0] : '';
                $comeback = (object)$comebackdata;
                $response_data = array('result' => 'success', 'outcome' => $comeback);
        }
        $response = json_encode($response_data);
        return $response;
    }
}
