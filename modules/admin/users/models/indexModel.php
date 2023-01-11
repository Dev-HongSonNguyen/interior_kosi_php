<?php
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
function get_one_user($id) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `id_users` = {$id}");
    return $item;
}
function delete_users($id) {
    db_delete('users', "id_users = $id");
    return true;
}