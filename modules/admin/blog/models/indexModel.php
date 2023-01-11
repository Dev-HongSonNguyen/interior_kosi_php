<?php
function get_list_blog() {
    $result = db_fetch_array("SELECT * FROM `blog`");
    // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
    return $result;
}

function get_one_blog($id_blog) {
    $result = db_fetch_row("SELECT * FROM `blog` WHERE `id_blog` = $id_blog");
    return $result;
}

function create_blog($title_blog, $des_blog, $img_blog) {
    // $user = get_auth();
    $id = db_insert('blog', [
        'title_blog' => $title_blog,
        'des_blog' => $des_blog,
        'img_blog' => $img_blog,
        'at_blog' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_blog($id_blog, $title_blog, $des_blog, $img_blog) {
    db_update('blog', [
        'title_blog' => $title_blog,
        'des_blog' => $des_blog,
        'img_blog' => $img_blog,
    ], "id_blog = $id_blog");
    return true;
}

function delete_blog($id_blog) {
    db_delete('blog', "id_blog = $id_blog");
    return true;
}