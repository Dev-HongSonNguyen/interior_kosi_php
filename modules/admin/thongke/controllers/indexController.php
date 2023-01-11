<?php
function construct() {
    load_model('index');
}
function indexAction() {
    // $id_cate = $_GET['id_cate'];
    // $data['productions'] = get_list_productions($id_cate);
    load_view('index');
}