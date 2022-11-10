<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $list_users = get_list_users();
//    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}

function addAction() {
    echo "Thêm dữ liệu";
}

function editAction() {
    $id = (int)$_GET['id'];
    $item = get_user_by_id($id);
    show_array($item);
}

function testAction() {
    $data = [];
    $data['title'] = "Nguyễn Văn A";
    load_view('test', $data);
}