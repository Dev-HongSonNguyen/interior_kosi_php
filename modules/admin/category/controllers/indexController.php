<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['categories'] = get_list_categories();
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}
function createPostAction() {
    $name_cate = $_POST['name_cate'];
    $des_cate = $_POST['des_cate'];
    $img_cate = $_FILES['img_cate']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_cate"]["name"]);
    if (move_uploaded_file($_FILES["img_cate"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $img_cate = "./".$target_file;
    if (empty($name_cate)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=admin&mod=category&action=create');
        die();
    }
    create_category($name_cate, $des_cate, $user, $img_cate);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=category');
}

function deleteAction() {
    $id_cate = $_GET['id_cate'];
    delete_category($id_cate);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=category');
}

function updateAction()
{
    $id = $_GET['id_cate'];
    $cate = get_one_category($id);
    $data['category'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=category');
    }
}
// mai suawr 
function updatePostAction() {
    $id_cate = $_GET['id_cate'];
    $cate = get_one_category($id_cate);
    if (!$cate) {
        header('Location: ?role=admin&mod=category');
    }
    $name_cate = $_POST['name_cate'];
    $des_cate = $_POST['des_cate'];
    $img_cate = $_FILES['img_cate']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_cate"]["name"]);
    if (move_uploaded_file($_FILES["img_cate"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $img_cate = "./".$target_file;
    if (empty($name_cate)) {
        push_notification('errors', [
            'name_cate' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=category&action=update&id_cate='.$id_cate);
    }
    update_category($id_cate, $name_cate, $des_cate, $img_cate);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=category');
}