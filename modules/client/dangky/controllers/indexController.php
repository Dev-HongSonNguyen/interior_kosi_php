<?php
// function construct() {
//     load_model('index');
// }
// // function indexAction(){
    
// // }
// function indexAction() {
//     load_view('index');
// }
// function registerPostAction() {
//     $name_user = $_POST['name_user'];
//     $email_user = $_POST['pw_user'];
//     $pass_user = $_POST['email_user'];
//     $address_user = $_POST['address_user'];
//     $phone_user = $_POST['phone_user'];
//     if (empty($name_user)) {
//         push_notification('danger', ['Vui lòng nhập vào tên người dùng']);
//         header('Location: ?role=client&mod=dangky');
//         die();
//     }
//     create_user($name_user, $email_user, $pass_user, $address_user, $phone_user);
//     push_notification('success', ['Đăng ký thành công']);
//     header('Location: ?role=client&mod=dangnhap');
// }
// function construct() {
  
//     load_model('index');
// }

// function indexAction() {
//     // request_auth(false);

//     load_view('index');
// }

// function indexPostAction()
// {
//     // request_auth(false);
//     // validation
//     $name_user = $_POST['name_user'];
//     $email_user = $_POST['email_user'];
//     $pw_user = $_POST['pw_user'];
//     $address_user = $_POST['address_user'];
//     $phone_user = $_POST['phone_user'];
//     if (empty($email_user) || empty($pw_user)) {
//         push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
//         header('Location: ?role=client&mod=dangky');
//     }else{
//         create_client_user($name_user, $email_user, $pw_user, $address_user, $phone_user);
//         push_notification('success', ['Đăng ký thành công']);
//         header('Location: ?role=client');
//     }
//     // xử lý đăng nhập
//     // $auth = get_auth_user($email_user, $pw_user);
//     // if ($auth && $auth['role'] == 1) {
//     //     push_auth($auth);
//     //     header('Location:?role=client');
//     // } else {
//     //     push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
//     //     header('Location: ?role=client&mod=dangnhap');
//     // }
// }

// function registerAction() {
//     request_auth(false);
//     load_view('index');
// }

// function registerPostAction() {
//     request_auth(false);
//     $errs = [];
//     if (empty($_POST['name_user'])) {
//         $errs[] = 'Không được bỏ trống họ và tên';
//     }
//     if (empty($_POST['email_user'])) {
//         $errs[] = 'Không được bỏ trống địa chỉ email';
//     }
//     if (empty($_POST['pw_user'])) {
//         $errs[] = 'Không được bỏ trống mật khẩu';
//     }
//     if (count($errs) > 0) {
//         push_notification('danger', $errs);
//         header('Location:?role=client&mod=dangky');
//     } else {
//         // process register
//         $auth_id = create_client_user($_POST['name_user'], $_POST['email_user'], $_POST['pw_user']);
//         $auth = get_client_with_id($auth_id);
//         push_auth($auth);
//         header('Location:?role=client');
//     }
// }

// function logoutAction()
// {
//     request_auth(true);
//     remove_auth();
//     header('Location: ?role=client');
// }

function construct() {
    // request_auth(false);
    load_model('index');
}
function indexAction() {
    $data['categories']= get_list_categories();
    load_view('index', $data);
}
// function indexAction() {
//     $notifications = get_notification();
//     load_view('index', [
//         "notifications" => $notifications
//     ]);
// }
// function forgot_passwordAction(){
//     $notifications = get_notification();
//     load_view('dangky', [
//         "notifications" => $notifications
//     ]);
// }
function indexPostAction() {
    // validation
    $name_user = $_POST['name_users'];
    $email_user = $_POST['email_users'];
    $pw_user = $_POST['pw_users'];
    $address_user = $_POST['address_users'];
    $phone_user = $_POST['phone_users'];
    // if (empty($email_users) || empty($pw_users)) {
    //     // push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
    //     header('Location: ?role=client&mod=dangky');
    // }
    create_client_user($name_user, $email_user, $pw_user, $address_user, $phone_user);
    // push_notification('success', ['Đăng ký thành công !']);
    echo "<script> alert ('Bạn đã đăng ký thành thành công. Hãy đăng nhập ngay !')</script>";
    header("Refresh: 0.1; URL=?role=client");
}
    // push_notification('success', ['Đăng ký thành công. Xin hãy đăng nhập !']);
    // xử lý đăng nhập
    // $auth = get_auth_user($email_users, $pw_users);
    // if ($auth) {
    //     push_auth($auth);
    //     header('Location: ?role=client');
    // } else {
    //     // push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
    //     header('Location: ?role=client&mod=dangky');
    // }
