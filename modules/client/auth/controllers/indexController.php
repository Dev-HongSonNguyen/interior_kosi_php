<?php
function construct() {
    // request_auth(false);
    load_model('index');
}
function indexAction() {
    $data['categories']= get_list_categories();
    load_view('index',$data);
}
// function indexAction() {
//     $notifications = get_notification();
//     load_view('index', [
//         "notifications" => $notifications
//     ]);
// }

function indexPostAction() {
    // validation
    $email_users = $_POST['email_users'];
    $pw_users = $_POST['pw_users'];
    if (empty($email_users) || empty($pw_users)) {
        echo "<script> alert ('Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu')</script>";
        header("Refresh: 0.1; URL=?role=client&mod=auth");
        die();
        // header('Location: ?role=client&mod=auth');
    }
    // xử lý đăng nhập
    $auth = get_auth_user($email_users, $pw_users);
    if ($auth) {
        push_auth($auth);
        echo "<script> alert ('Bạn đã đăng nhập thành công !')</script>";
        header("Refresh: 0.1; URL=?role=client");
    } else {
        echo "<script> alert ('Tài khoản mật khẩu không chính xác')</script>";
        header("Refresh: 0.1; URL=?role=client&mod=auth");
        die();
    }
}
function logoutAction()
{
    request_auth_client(true);
    if(is_auth()){
        remove_auth();
        // unset($_SESSION["auth"]);
        header('Location: ?role=client');
    }
}
function forgot_passwordAction(){
    $notifications = get_notification();
    load_view('forgot_password', [
        "notifications" => $notifications
    ]);
}
function save_forgotPasswordPostAction(){
    $email= $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    global $conn;
    // $sql = mysqli_query($conn,"select * from users where email_users = '$email'");
    // $row = mysqli_fetch_array($sql);
    // if($email === $_SESSION['auth']['email_users']){
    //     echo "Mật khẩu của bạn là : ".$row['pw_users'];
    // }
    if (empty($email)) {
        push_notification('success', ['Vui lòng nhập email!']);
        header ('Location: ?role=client&mod=auth&action=forgot_password');
        }else{
            $sql = mysqli_query($conn,"select * from users where email_users = '$email'");
            $row = mysqli_fetch_array($sql);
            $count= mysqli_num_rows($sql);
            if($count > 0){
                push_notification('success', ['Mật khẩu của bạn là:' .$row['pw_users']]);
            header ('Location: ?role=client&mod=auth&action=forgot_password');
            }else{
                push_notification('success', ['Email của bạn không tồn tại trong hệ thống !']);
                header ('Location: ?role=client&mod=auth&action=forgot_password');
            }
            // echo "Mật khẩu của bạn là : ".$row['pw_users'];
            // push_notification('success', ['Mật khẩu của bạn là:' .$row['pw_users']]);
            // header ('Location: ?role=client&mod=auth&action=forgot_password');
        }
       }