<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['productions'] = get_list_productions();
    load_view('index', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["hinhanh"]["name"]);
// if (move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)) {
//     // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
// }else {
//     //echo "Sorry, there was an error uploading your file.";
// }

function createPostAction() {
    $name_pro = $_POST['name_pro'];
    $img_pro = $_FILES['img_pro']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_pro"]["name"]);
    if (move_uploaded_file($_FILES["img_pro"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $img_pro = "./".$target_file;
    $price_pro = $_POST['price_pro'];
    $des_pro = $_POST['des_pro'];
    $id_cate = $_POST['id_cate'];
    if (empty($name_pro)) {
        push_notification('danger', ['Vui lòng nhập vào tên sản phẩm']);
        header('Location: ?role=admin&mod=production&action=create');
        die();
    }
    create_production($name_pro, $img_pro, $price_pro, $des_pro, $id_cate);
    push_notification('success', ['Tạo mới sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}

function deleteAction() {
    $id = $_GET['id_pro'];
    delete_production($id);
    push_notification('success', ['Xoá sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}

function updateAction()
{
    $id = $_GET['id_pro'];
    $pro = get_one_production($id);
    $data['production'] = $pro;
    if ($pro) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=production');
    }
}

function updatePostAction() {
    $id_pro = $_GET['id_pro'];
    $pro = get_one_production($id_pro);
    if (!$pro) {
        header('Location: ?role=admin&mod=production');
        die();
    }
    $name_pro = $_POST['name_pro'];
    $img_pro = $_FILES['img_pro']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_pro"]["name"]);
    if (move_uploaded_file($_FILES["img_pro"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $img_pro = "./".$target_file;
    $price_pro = $_POST['price_pro'];
    $des_pro = $_POST['des_pro'];
    if (empty($name_pro)) {
        push_notification('errors', [
            'name_pro' => 'Vui lòng nhập vào tên sản phẩm'
        ]);
        header('Location: ?role=admin&mod=production&action=update&id_pro='.$id_pro);
    }
    update_production($id_pro, $name_pro, $img_pro, $price_pro, $des_pro);
    push_notification('success', ['Chỉnh sửa sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}