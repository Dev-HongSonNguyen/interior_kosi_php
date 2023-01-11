<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id_blog = $_GET['id_blog'];
    $data['bloglist'] = get_list_blog();
    $data['blog'] = get_one_blog($id_blog);
    $data['categories']= get_list_categories();
    load_view('index',$data);
}