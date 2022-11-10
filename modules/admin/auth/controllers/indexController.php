<?php

function construct() {
    request_auth(false);
    load_model('index');
}

function indexAction() {
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}

function indexPostAction() {
    // validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: /?role=admin&mod=auth');
    }
    // xử lý đăng nhập
    $auth = get_auth_user($username, $password);
    if ($auth) {
        push_auth($auth);
        header('Location: /?role=admin');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: /?role=admin&mod=auth');
    }
}