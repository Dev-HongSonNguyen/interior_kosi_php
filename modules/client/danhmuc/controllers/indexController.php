<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id_cate = $_GET['id_cate'];
    $data['categories'] = get_list_categories();
    $data['cat_id']= $id_cate;
    $data['productions'] = get_list_productions($id_cate);
    // var_dump( $data['productions']);
    // die;
    // $data['categories'] = get_one_category($id_cate);
    // $data['productions'] = get_one_production($id_pro);
    // get_one_category($id_cate)
    load_view('index', $data);
}
