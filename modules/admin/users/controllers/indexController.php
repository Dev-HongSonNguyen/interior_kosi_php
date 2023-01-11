<?php
// function construct() {
// //    echo "DÙng chung, load đầu tiên";
//     load_model('index');
// }

// function indexAction() {
//     load('helper','format');
//     $list_users = get_list_users();
// //    show_array($list_users);
//     $data['list_users'] = $list_users;
//     load_view('index', $data);
// }

// function addAction() {
//     echo "Thêm dữ liệu";
// }

// function editAction() {
//     $id = (int)$_GET['id'];
//     $item = get_user_by_id($id);
//     show_array($item);
// }

// function testAction() {
//     $data = [];
//     $data['title'] = "Nguyễn Văn A";
//     load_view('test', $data);
// }
function construct() {
    // request_auth();
    load_model('index');
}

function indexAction() {
    $data['users'] = get_list_users();
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}

function deleteAction() {
    $id_user = $_GET['id_users'];
    delete_users($id_user);
    push_notification('success', ['Xoá khách hàng thành công']);
    header('Location: ?role=admin&mod=users');
}

// function updateAction()
// {
//     $id = $_GET['id_cate'];
//     $cate = get_one_category($id);
//     $data['category'] = $cate;
//     if ($cate) {
//         load_view('update', $data);
//     } else {
//         header('Location: ?role=admin&mod=category');
//     }
// }
// // mai suawr 
// function updatePostAction() {
//     $id_cate = $_GET['id_cate'];
//     $cate = get_one_category($id_cate);
//     if (!$cate) {
//         header('Location: ?role=admin&mod=category');
//     }
//     $name_cate = $_POST['name_cate'];
//     $des_cate = $_POST['des_cate'];
//     $img_cate = $_FILES['img_cate']['name'];
//     $target_dir = "uploads/";
//     $target_file = $target_dir . basename($_FILES["img_cate"]["name"]);
//     if (move_uploaded_file($_FILES["img_cate"]["tmp_name"], $target_file)) {
//         // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//     }else {
//         // echo "Sorry, there was an error uploading your file.";
//     }
//     $img_cate = "./".$target_file;
//     if (empty($name_cate)) {
//         push_notification('errors', [
//             'name_cate' => 'Vui lòng nhập vào tên danh mục'
//         ]);
//         header('Location: ?role=admin&mod=category&action=update&id_cate='.$id_cate);
//     }
//     update_category($id_cate, $name_cate, $des_cate, $img_cate);
//     push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=category');
// }