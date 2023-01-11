<?php

function construct() {
    // request_auth();
    load_model('index');
}

function indexAction() {
    $data['binhluan'] = get_list_comment();
    load_view('index', $data);
}
function deleteAction() {
    $id_binhluan = $_GET['id_binhluan'];
    delete_comment($id_binhluan);
    push_notification('success', ['Xoá bình luận thành công']);
    header('Location: ?role=admin&mod=comment');
}