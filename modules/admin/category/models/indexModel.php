<?php
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}

function get_one_category($id_cate) {
    $result = db_fetch_row("SELECT * FROM `categories` WHERE `id_cate` = $id_cate");
    return $result;
}

function create_category($name_cate, $des_cate, $user, $img_cate) {
    $user = get_auth();
    $id = db_insert('categories', [
        'name_cate' => $name_cate,
        'des_cate' => $des_cate,
        'img_cate' => $img_cate,
        'id_user' => $user['id_users'],
        'at_cate' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_category($id_cate, $name_cate, $des_cate, $img_cate) {
    db_update('categories', [
        'name_cate' => $name_cate,
        'img_cate' => $img_cate,
        'des_cate' => $des_cate,
    ], "id_cate = $id_cate");
    return true;
}

function delete_category($id_cate) {
    db_delete('categories', "id_cate = $id_cate");
    return true;
}