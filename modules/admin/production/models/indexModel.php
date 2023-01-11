<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT * FROM `productions`");
    return $result;
}

function get_one_production($id_pro) {
    $result = db_fetch_row("SELECT * FROM `productions` WHERE `id_pro` = $id_pro");
    return $result;
}

function create_production($name_pro, $img_pro, $price_pro, $des_pro, $id_cate) {
    $user = get_auth();
    $id = db_insert('productions', [
        'name_pro' => $name_pro,
        'img_pro' => $img_pro,
        'price_pro' => $price_pro,
        'des_pro' => $des_pro,
        'id_user' => $user['id_users'],
        'at_pro' => date('Y-m-d H:i:s'),
        'id_cate' => $id_cate
    ]);
    return $id;
}

function update_production($id_pro, $name_pro, $img_pro, $price_pro, $des_pro) {
    db_update('productions', [
        'name_pro' => $name_pro,
        'img_pro' => $img_pro,
        'price_pro' => $price_pro,
        'des_pro' => $des_pro
    ], "id_pro = $id_pro");
    return true;
}

function delete_production($id) {
    db_delete('productions', "id_pro = $id");
    return true;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}