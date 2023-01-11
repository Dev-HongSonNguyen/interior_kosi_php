<?php

function construct() {
    // request_auth();
    load_model('index');
}

function indexAction() {
    $data['blog'] = get_list_blog();
    load_view('index',$data);
}

function createAction() {
    load_view('create');
}

function createPostAction() {
    $title_blog = $_POST['title_blog'];
    $des_blog = $_POST['des_blog'];
    $img_blog = $_FILES['img_blog']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_blog"]["name"]);
    if (move_uploaded_file($_FILES["img_blog"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $img_blog = "./".$target_file;
    if (empty($title_blog)) {
        push_notification('danger', ['Vui lòng nhập vào tiêu đề bài viết']);
        header('Location: ?role=admin&mod=blog&action=create');
        die();
    }
    create_blog($title_blog, $des_blog, $img_blog);
    push_notification('success', ['Tạo mới bài viết thành công']);
    header('Location: ?role=admin&mod=blog');
}

function deleteAction() {
    $id_blog = $_GET['id_blog'];
    delete_blog($id_blog);
    push_notification('success', ['Xoá bài viết thành công']);
    header('Location: ?role=admin&mod=blog');
}

function updateAction()
{
    $id = $_GET['id_blog'];
    $blog = get_one_blog($id);
    $data['blog'] = $blog;
    if ($blog) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=blog');
    }
}
// mai suawr 
function updatePostAction() {
    $id_blog = $_GET['id_blog'];
    $blog = get_one_blog($id_blog);
    if (!$blog) {
        header('Location: ?role=admin&mod=blog');
    }
    $title_blog = $_POST['title_blog'];
    $des_blog = $_POST['des_blog'];
    $img_blog = $_FILES['img_blog']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img_blog"]["name"]);
    if (move_uploaded_file($_FILES["img_blog"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }else {
        // echo "Sorry, there was an error uploading your file.";
    }
    $img_blog = "./".$target_file;
    if (empty($title_blog)) {
        push_notification('errors', [
            'title_blog' => 'Vui lòng nhập tiêu đề bài viết'
        ]);
        header('Location: ?role=admin&mod=blog&action=update&id_blog='.$id_blog);
    }
    update_blog($id_blog, $title_blog, $des_blog, $img_blog);
    push_notification('success', ['Chỉnh sửa bài viết thành công']);
    header('Location: ?role=admin&mod=blog');
}