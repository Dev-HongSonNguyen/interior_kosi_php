<?php
function get_one_blog($id_blog) {
    $result = db_fetch_row("SELECT * FROM `blog` WHERE `id_blog` = $id_blog");
    return $result;
}
function get_list_blog() {
    $result = db_fetch_array("SELECT * FROM `blog`");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}