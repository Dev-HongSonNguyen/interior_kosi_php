<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $data['users'] = get_list_users();
    $data['categories']= get_list_categories();
    load_view('index', $data);
}
function updateAction()
{
    $id = $_GET['id_users'];
    $user = get_one_user($id);
    $data['users'] = $user;
    $data['categories']= get_list_categories();
    if ($user) {
        load_view('update', $data);
    } else {
        header('Location: ?role=client&mod=users');
    }
}
function updatePostAction() {
    $id = $_GET['id_users'];
    $user = get_one_user($id);
    if (!$user) {
        header('Location: ?role=client&mod=users');
    }
    $name_user = $_POST['name_users'];
    $email_user = $_POST['email_users'];
    $pw_user = $_POST['pw_users'];
    $address_user = $_POST['address_users'];
    $phone_user = $_POST['phone_users'];
    if (empty($name_user)) {
        // push_notification('errors', [
        //     'name_users' => 'Vui lòng nhập vào tên người dùng'
        // ]);
        header('Location: ?role=client&mod=users&action=update&id_users='.$id);
    }
    update_user($id, $name_user, $email_user, $pw_user,$address_user,$phone_user);
    // push_notification('success', ['Chỉnh sửa người dùng thành công']);
    header('Location: ?role=client&mod=users');
}
function quanlyAction(){
    $data['categories']= get_list_categories();
    $data['cart'] = loadCart($_SESSION['auth']['id_users']);
    load_view('quanly',$data);
}
function deleteDonhangAction() {
    $id_cart = $_GET['id_cart'];
    db_delete('cart', "id_cart = $id_cart");
    // push_notification('success', ['Xoá đơn hàng thành công']);
    header('Location: ?role=client&mod=users&action=quanly');
}
// function updatedonhangAction()
// {
//     $id = $_GET['id_cart'];
//     $cart = get_one_cart($id);
//     $data['cart'] = $cart;
//     $data['categories']= get_list_categories();
//     if ($cart) {
//         load_view('updatedonhang', $data);
//     } else {
//         header('Location: ?role=client&mod=quanly');
//     }
// }
// function updatequanlyPostAction() {
//     $id_cart = $_GET['id_cart'];
//     $cart = get_one_user($id_cart);
//     if (!$cart) {
//         header('Location: ?role=client&mod=users&action=quanly');
//     }
//     $name_user = $_POST['name_users'];
//     $email_user = $_POST['email_users'];
//     $pw_user = $_POST['pw_users'];
//     $address_user = $_POST['address_users'];
//     $phone_user = $_POST['phone_users'];
//     if (empty($name_user)) {
//         // push_notification('errors', [
//         //     'name_users' => 'Vui lòng nhập vào tên người dùng'
//         // ]);
//         header('Location: ?role=client&mod=users&action=update&id_users='.$id);
//     }
//     update_user($id, $name_user, $email_user, $pw_user,$address_user,$phone_user);
//     // push_notification('success', ['Chỉnh sửa người dùng thành công']);
//     header('Location: ?role=client&mod=users');
// }
