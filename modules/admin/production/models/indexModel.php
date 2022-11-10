<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT * FROM `productions`");
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT * FROM `productions` WHERE c.id = $id");
    return $result;
}

function create_production($name, $description) {
    $user = get_auth();
    $id = db_insert('productions', [
        'name' => $name,
        'description' => $description,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_production($id, $name, $description) {
    db_update('productions', [
        'name' => $name,
        'description' => $description
    ], "id = $id");
    return true;
}

function delete_production($id) {
    db_delete('productions', "id = $id");
    return true;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}