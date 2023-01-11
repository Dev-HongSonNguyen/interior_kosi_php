<?php
// function create_user($name_user, $email_user, $pass_user, $address_user, $phone_user) {
//     $id = db_insert('users', [
//         'name_users' => $name_user,
//         'email_users' => $email_user,
//         'pass_users' => $pass_user,
//         'address_users' => $address_user,
//         'phone_users' => $phone_user
//     ]);
//     return $id;
function create_client_user($name_user, $email_user, $pw_user, $address_user, $phone_user) {
    $result = db_insert('users', [
        'name_users' => $name_user,
        'email_users' => $email_user,
        'pw_users' => $pw_user,
        'address_users' => $address_user,
        'phone_users' => $phone_user,
        // "role" => 1,
        // "created_at" => date('Y-m-d H:i:s')
    ]);
    return $result;
}

function get_client_with_id($id)
{
    return db_fetch_row("select * from users where id_users = {$id}");
}

function get_auth_user($email_user, $pw_user) {
    // $result = db_fetch_row("SELECT * FROM `users` WHERE `email_users` = '$email_user' AND `pw_users` = '$pw_user' AND `role` = 1");
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email_users` = '$email_user' AND `pw_users` = '$pw_user'");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}