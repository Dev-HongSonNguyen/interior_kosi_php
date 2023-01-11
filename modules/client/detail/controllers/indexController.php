<?php
function construct() {

    load_model('index');
}
// function indexAction() {
//     load_view('index');
// }
function indexAction() {
    $id_pro = $_GET['id_pro'];
    $data['productions'] = get_one_production($id_pro);
    $data['binhluan'] = get_list_comment($id_pro);
    $data['categories']= get_list_categories();
    load_view('index', $data);
}
function addCommentPostAction(){
    if(is_auth()){
        $id_pro = $_GET['id_pro'];
    $id_user = $_SESSION['auth']['id_users'];
    $nd_binhluan = $_POST['nd_binhluan'];
    $time_bl = date("Y-m-d H:i:s");
    $data = [
        'id_pro' => $id_pro,
        'id_user' => $id_user,
        'nd_binhluan' => $nd_binhluan,
        'time' => $time_bl,
    ];
    insertComment($data);
    header ("Location: ?role=client&mod=detail&id_pro=$id_pro");
    }else{
        header ("Location: ?role=client&mod=auth");
    }
}