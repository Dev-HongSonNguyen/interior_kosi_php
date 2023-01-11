<?php

function construct() {
    // request_auth();
    load_model('index');
}
function indexAction() {
    $data['cart'] = get_list_donhang();
    load_view('index',$data);
}
function updateAction()
{
    $id_cart= $_GET['id_cart'];
    $id_cart = get_one_donhang($id_cart);
    $data['cart'] = $id_cart;
    if ($id_cart) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=donhang');
    }
}
function updatePostAction() {
    $id_cart= $_GET['id_cart'];
    if (!$id_cart) {
        header('Location: ?role=admin&mod=donhang');
    }
    $trangthai = $_POST['trangthai'];
    if (empty($trangthai)) {
        // push_notification('errors', [
        //     'name_cate' => 'Vui lòng nhập vào tên danh mục'
        // ]);
        header('Location: ?role=admin&mod=donhang&action=update&id_cart='.$id_cart);
    }
    update_donhang($id_cart, $trangthai);
    push_notification('success', ['Chỉnh sửa trạng thái thành công']);
    header('Location: ?role=admin&mod=donhang');
}
function deleteAction() {
    $id_cart = $_GET['id_cart'];
    delete_category($id_cart);
    push_notification('success', ['Xoá đơn hàng thành công']);
    header('Location: ?role=admin&mod=donhang');
}