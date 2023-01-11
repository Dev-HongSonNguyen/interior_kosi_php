<?php
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}
function checkemail($email_users){
    $result = db_fetch_array("SELECT * FROM `users` WHERE `email_users` = $email_users");
    return $result;
}