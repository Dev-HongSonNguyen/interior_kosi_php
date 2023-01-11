<?php
function get_list_comment() {
    $result = db_fetch_array("SELECT bl.*, p.name_pro as `namepro`, u.name_users as `fullname` FROM `binhluan` bl INNER JOIN `users` u ON bl.id_user = u.id_users INNER JOIN `productions` p ON bl.id_pro = p.id_pro");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}
function get_one_comment($id_pro) {
    $result = db_fetch_row("SELECT * FROM `binhluan` WHERE `binhluan`.`id_pro` = $id_pro");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}
function delete_comment($id_binhluan) {
    db_delete('binhluan', "id_binhluan = $id_binhluan");
    return true;
}