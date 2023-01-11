<?php
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
function get_one_user($id) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `id_users` = {$id}");
    return $item;
}
function get_one_cart($id) {
    $item = db_fetch_row("SELECT * FROM `cart` WHERE `id_cart` = {$id}");
    return $item;
}
// function delete_users($id) {
//     db_delete('users', "id_users = $id");
//     return true;
// }
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}
function update_user($id_user,$name_user, $email_user, $pw_user,$address_user,$phone_user) {
    db_update('users', [
        'name_users' => $name_user,
        'email_users' => $email_user,
        'pw_users' => $pw_user,
        'address_users' => $address_user,
        'phone_users' => $phone_user
    ], "id_users = $id_user");
    return true;
}
function loadCart($users){
    $sql = "SELECT * FROM `cart` WHERE `id_user` = $users";
    return db_fetch_array($sql);
}
function delete_donhang($id_cart) {
    db_delete('cart', "id_cart = $id_cart");
    return true;
}
