<?php
function get_list_productions($id_cate) {
    $result = db_fetch_array("SELECT * FROM `productions` WHERE `id_cate` = $id_cate");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}