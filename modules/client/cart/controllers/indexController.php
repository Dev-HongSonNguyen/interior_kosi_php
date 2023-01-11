<?php
  function construct(){
    // request_auth(false);
    if(!isset($_SESSION['auth'])){
      header ("Location:?role=client&mod=auth");
      die();
    }
    load_model('index');
    load('helper','format');
  }
//   function dangkyPostAction(){
//     $notifications = get_notification();
//     load_view('dangky', [
//         "notifications" => $notifications
//     ]);
// }
  function indexAction(){
    // echo "<pre>";
    // var_dump($_SESSION['cart']);
    // die();
    
     
   if(isset($_GET['id_pro'])){
     $id_pro=$_GET['id_pro'];
     $pro=get_pro_by_id($id_pro);
     $qty=1;
     if(isset($_SESSION['cart']['buy'])&& array_key_exists($id_pro,$_SESSION['cart']['buy'])){
      $qty=$_SESSION['cart']['buy'][$id_pro]['qty']+1;
     }
     $cart = [
      'id'=>$pro['id_pro'],
      'image' =>$pro['img_pro'],
          'title'=>$pro['name_pro'],
          'price'=>$pro['price_pro'],
          'qty'=>$qty,
          'sub_total'=>$pro['price_pro']*$qty
     ];
     unset($_SESSION['cart']['buy']['']);
     $_SESSION['cart']['buy'][$id_pro]=$cart;
     update_info_cart();
   }
   if(!empty($_SESSION['cart'])){
     $data['cart']=$_SESSION['cart'];
     $total=get_total_cart();
     $data['total']=$total;   
     $data['categories']= get_list_categories();
     load_view('index',$data);
   }else{
    $data['categories']= get_list_categories();
    load_view('index',$data);
   }


  }
  function deleteAction(){
     if(isset($_GET['id'])){
          $id=(int)$_GET['id'];
          if(!empty($id)){
               unset($_SESSION['cart']['buy'][$id]);
               update_info_cart();
          }
     }
     echo "<script> alert ('Xóa sản phẩm thành công !')</script>";
     header("Refresh: 0.1; URL=?mod=cart");
    //  header('Location:?mod=cart');
  }
  function indexPostAction(){
     update_cart($_POST['qty']);
     header ("Location:?mod=cart");
  }
  function addProAction(){
    if(isset($_SESSION['cart'])){
      foreach ($_SESSION['cart']['buy'] as $item) {
        $data = [
          'id_pro'=>$item['id'],
          'id_user' =>$_SESSION['auth']['id_users'],
          'soluong'=>$item['qty'],
          'dongia'=>$item['price'],
          'tongtien'=>$item['sub_total'],
          'img'=>$item['image'],
          'name_pro'=>$item['title'],
          'trangthai'=>0,
        ];
    //     echo "<pre>";
    // var_dump($_SESSION['cart']);
    // die();
        insertProduction($data);
      }
      unset($_SESSION['cart']);
      header ("Location:?mod=client&mod=users&action=quanly");
    }
  }
?>