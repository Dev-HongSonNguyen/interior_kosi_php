<?php

function construct() {
    // request_auth(false);
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
    $email_users = $_POST['email_users'];
    $pw_users = $_POST['pw_users'];
    if (empty($email_users) || empty($pw_users)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: ?role=admin&mod=auth');
    }
    // xử lý đăng nhập
    $auth = get_auth_user($email_users, $pw_users);
    if ($auth && $auth['role'] == 2) {
        push_auth($auth);
        header('Location: ?role=admin');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: ?role=admin&mod=auth');
    }
}