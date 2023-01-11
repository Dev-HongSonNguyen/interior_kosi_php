<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT * FROM `productions`");
    // $result = db_fetch_array("SELECT p.name_pro, p.img_pro, p.price_pro, p.des_pro, c.name_cate FROM `productions` p JOIN `categories` c ON p.id_cate = c.id_cate");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}
function get_list_blog(){
    $result = db_fetch_array("SELECT * FROM `blog`");
    return $result;
}