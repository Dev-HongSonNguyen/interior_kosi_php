<?php
function construct() {
    load_model('index');
}
// function indexAction() {
//     load_view('index');
// }
function indexAction() {
    $data['blog'] = get_list_blog();
    $data['productions'] = get_list_productions();
    $data['categories']= get_list_categories();
    load_view('index', $data);
}
// function indexAction() {
//     $data['categories'] = get_list_categories();
//     load_view('index', $data);
// }

// function indexAction() {
//     $data['productions'] = get_list_productions();
//     load_view('index', $data);
// }

