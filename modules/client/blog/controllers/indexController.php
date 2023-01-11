<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $data['categories']= get_list_categories();
    $data['bloglist'] = get_list_blog();
    load_view('index', $data);
}