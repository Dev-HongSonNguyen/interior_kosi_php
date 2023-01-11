<?php
 function get_pro_by_id($id_pro){
    $result=db_fetch_row("SELECT * FROM `productions` WHERE id_pro={$id_pro}");
    return $result;
 }
  function get_total_cart(){
      if(isset($_SESSION['cart'])){
         return $_SESSION['cart']['infor']['total'];
      }
      return FALSE;
  }
  function update_info_cart(){
         $num_order=0;
         $total=0;
         foreach($_SESSION['cart']['buy'] as $item){
            $num_order+=$item['qty'];
            $total+=$item['sub_total'];
         }
         $_SESSION['cart']['infor']=array(
            'num_order'=>$num_order,
            'total'=>$total,
         );
  }
  function update_cart($qty){
      foreach($qty as $id=>$new_qty){
         $qty=$_SESSION['cart']['buy'][$id]['qty']=$new_qty;
         $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
      }
      update_info_cart();
  }
  function get_list_categories() {
   $result = db_fetch_array("SELECT * FROM `categories`");
   // db_fetch_array("SELECT c.id_cate, c.name_cate, c.des_cate, c.at_cate as `uid` FROM `categories` c JOIN `users` u ON c.id_cate = u.id");
   return $result;
}
function insertProduction($data){
   return db_insert("cart",$data);
}
?>