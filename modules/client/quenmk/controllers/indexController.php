<?php
function construct() {
    // request_auth(false);
    load_model('index');
}
function indexAction() {
    $data['categories']= get_list_categories();
    load_view('index', $data);
}
function forgot_passwordAction(){
    load_view('forgot_password');
}
