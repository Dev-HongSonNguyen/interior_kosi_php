<?php
function get_list_donhang() {
    $result = db_fetch_array("SELECT u.name_users, u.address_users, u.phone_users, c.*, p.name_pro,p.img_pro FROM `cart` c INNER JOIN `users` u on c.id_user = u.id_users INNER JOIN `productions` p on c.id_pro = p.id_pro");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}
function get_one_donhang($id_cart) {
    $result = db_fetch_row("SELECT * FROM `cart` WHERE `id_cart` = $id_cart");
    return $result;
}
function update_donhang($id_cart, $trangthai) {
    db_update('cart', [
        'trangthai' => $trangthai,
    ], "id_cart = $id_cart");
    return true;
}
function delete_category($id_cart) {
    db_delete('cart', "id_cart = $id_cart");
    return true;
}