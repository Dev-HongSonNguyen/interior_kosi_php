<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $data['categories']= get_list_categories();
    load_view('index', $data);
}