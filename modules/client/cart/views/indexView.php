<?php get_header('', 'Giỏ hàng') ?>
<style>
    *{
    padding: 0px;
    margin: 0px;
    font-family: 'Noto Sans', sans-serif;
}
/* HEADER */
.container-header{
    background-color: white;
    /* position: fixed; */
    width: 100%;
    z-index: 1;
    /* position: fixed; */
}
.header{
    max-width: 1280px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* position: fixed;
    z-index: 5; */
}
.header-left{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
}
.header-left .header-left-nav .nav-main .ul_main{
    display: flex;
    gap: 30px;
    list-style-type: none;
    position: relative;
}
.header-left .header-left-nav .nav-main .ul_main li{
    padding: 30px 0px;
}
.header-left .header-left-nav .nav-main .ul_main li a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    font-size: 16px;
}
.header-left .header-left-nav .nav-main .ul_main li a:hover{
    color: #cd8f5c;
    transition: all 0.5s ease;
}
.header-left .header-left-nav .nav-main .ul_main li:hover .sub_main{
    display: block;
    /* transition: all 2s ease; */
}
.ul_main .sub_main{
    position: absolute;
    list-style-type: none;
    left: 102px;
    margin-top: 30px;
    width: 200px;
    background-color: white;
    display: none;
    border-radius: 2px;
    box-shadow: 0px 0px 3px 0px #f2f2f2;
}
.sub_main li{
    padding: 15px !important;
}
.sub_main li:hover{
    background-color: rgb(245, 245, 245);
    transition: all 0.5s ease;
}
.sub_main li a{
    text-decoration: none;
    display: block;
    font-size: 12px;
}
.header-right{
    display: flex;
    align-items: center;
    gap: 35px;
}
.header-right .header-right-contact a{
    text-decoration: none;
    color: black;
    font-weight: bold;
}
.header-right .header-right-acount .cart{
    display: flex;
    align-items: center;
    text-decoration: none;
    font-weight: bold;
    gap: 10px;
    font-size: 16px;
    color: black;
}
.header-right .header-right-acount .cart p:hover{
    color: #cd8f5c;
    transition: all 0.5s ease;
}
/* INPUT */
.header-right .header-right-shop .container-input{
    display: flex;
    align-items: center;
    gap: 10px;
}
.header-right .header-right-shop .container-input .users-input a{
    text-decoration: none;
    color: black;
    font-size: 16px;
    font-weight: bold;
}
.header-right .header-right-shop .container-input .users-input a:hover{
    color: #cd8f5c;
    transition: all 0.5s ease;
}
/* OUTPUT */
.header-right .header-right-shop .container-output{
    display: flex;
    align-items: center;
    gap: 10px;
}
.header-right .header-right-shop .container-output .users-output{
    position: relative;
    padding: 30px 0px;
}
.header-right .header-right-shop .container-output .users-output .output-main{
    text-decoration: none;
    color: black;
    font-size: 16px;
    font-weight: bold;
}
.header-right .header-right-shop .container-output .users-output .output-main:hover{
    color: #cd8f5c;
    transition: all 0.5s ease;
}
.header-right .header-right-shop .container-output .users-output .output-sub{
    position: absolute;
    list-style-type: none;
    margin-top: 30px;
    background-color: rgb(255, 255, 255);
    left: -15px;
    border-radius: 2px;
    box-shadow: 0px 0px 3px 0px #f2f2f2;
    display: none;
}
.header-right .header-right-shop .container-output .users-output .output-sub li{
    padding: 15px!important;
    width: 150px;
}
.header-right .header-right-shop .container-output .users-output .output-sub li:hover{
    background-color: rgb(245, 245, 245);
    transition: all 0.5s ease;
}
.header-right .header-right-shop .container-output .users-output:hover .output-sub{
    display: block;
}
.header-right .header-right-shop .container-output .users-output .output-sub li a{
    text-decoration: none;
    display: block;
    font-size: 12px;
    font-weight: bold;
    color: black;
}
.header-right .header-right-shop .container-output .users-output .output-sub li a:hover{
    color: #cd8f5c;
    transition: all 0.5s ease;
}
/* GIỎ HÀNG */
.container-cart{
    background-color: #f8f8f8f8;
    padding: 30px 0px;
}
.cart{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 30px;
}
.cart-left p{
    background-color: white;
    font-weight: bold;
    padding: 20px 10px;
    border-radius: 5px;
}
.cart-left table{
    margin-top: 20px;
    background-color: white;
    width: 100%;
    border-radius: 5px;
}
.cart-left table thead th:nth-child(1){
    width: 20%;
    font-size: 12px;
    text-align: left;
    padding: 10px 10px;
}
.cart-left table thead th:nth-child(2){
    width: 30%;
    font-size: 12px;
    text-align: left;
    padding: 10px 10px;
}
.cart-left table thead th:nth-child(3){
    width: 20%;
    font-size: 12px;
    text-align: left;
    padding: 10px 10px;
}
.cart-left table thead th:nth-child(4){
    width: 5%;
    font-size: 12px;
    text-align: left;
    padding: 10px 10px;
}
.cart-left table thead th:nth-child(5){
    width: 20%;
    font-size: 12px;
    text-align: left;
    padding: 10px 10px;

}
.cart-left table thead th:nth-child(6){
    width: 5%;
    font-size: 14px;
    text-align: left;
}
.cart-left table tr td .input-qty{
    padding: 3px 5px;
    outline: none;
    font-weight: bold;
    border: none;
    font-size: 12px;
    box-shadow: 0px 0px 1px 0px black;

    border-radius: 2px;
}
.cart-left table tr td{
    font-size: 12px;
    text-align: left;
    padding: 0px 10px;
    font-weight: 600;
}
.cart-left table tr td i{
    color: black;
}
.cart-left table tr td img{
    width: 150px;
    padding-right: 10px;
    text-align: center;
}
.cart-right{
    background-color: white;
    border-radius: 5px;
    height: 150px;
}
.cart-right .cart-right-sub-1{
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 12px;
    font-weight: bold;
}
.cart-right .cart-right-sub-2{
    padding-top: 30px;
    padding-left: 20px;
    padding-right: 20px;
}
.cart-right .cart-right-sub-2 a{
    width: 100%;
    background-color: #cd8f5c;
    border: none;
    color: white;
    padding: 10px;
    border-radius: 3px;
    font-weight: bold;
    letter-spacing: 1px;
    text-decoration: none;
    font-size: 12px;
    text-align: center;
}
.cart-right .cart-right-sub-2 a:hover{
    background-color: #b1794c;
    transition: all 0.3s ease;
}
</style>
<div class="container-cart">
        <div class="cart">
            <div class="cart-left">
                <p>GIỎ HÀNG</p>
                <form action="" method="POST">
                <table>
                    <thead>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php if(isset($_SESSION['cart'])):?>
                        <?php foreach($cart['buy'] as $item):?>
                            
                        <tr>
                            <td><a href=""><img src="<?php echo $item['image']?>" alt=""></a></td>
                            <td><?php echo $item['title']?></td>
                            <td><?php echo $item['price']?></td>
                            <td><input type="number" aria-label="quantity" class="input-qty" max="10" min="1" name="qty[<?php echo $item['id']?>]"
                                    value="<?php echo $item['qty']?>"></td>
                            <td><?php echo $item['sub_total']?></td>
                            <td><a href="?role=client&mod=cart&action=delete&id=<?php echo $item['id']?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php endforeach;?>
                        <?php endif;?>
                    </tbody>
                </table>
                <input style="background-color: #cd8f5c; padding: 10px; border: none; margin-top: 10px; color: white; font-weight: bold; letter-spacing: 1px; border-radius: 3px; font-size: 8px;" type="submit" value="CẬP NHẬT">
                </form>
            </div>
            <div class="cart-right">
                <div class="cart-right-sub-1">
                    <p>Tổng đơn hàng :</p>
                    <?php if(isset($_SESSION['cart'])):?>
                    <span>
                        <?php echo $total?> VND
                    </span>
                    <?php else:?>
                        <span>
                        0 VND
                    </span>
                    <?php endif;?>
                </div>
                <div class="cart-right-sub-2">
                    <a style="font-size: 8px;" href="?role=client&mod=cart&action=addPro" onClick='alert("Đặt hàng thành công !")' >ĐẶT HÀNG</a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer('') ?>