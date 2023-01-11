<?php
function get_auth_user($email_users, $pw_users) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email_users` = '$email_users' AND `pw_users` = '$pw_users'");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}

