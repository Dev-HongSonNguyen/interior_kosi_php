<?php get_header('', 'Quản lý đơn hàng') ?>
<style>
<style>
    *{
    padding: 0px;
    margin: 0px;
    font-family: 'Noto Sans', sans-serif;
}
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
.container-acount-mng{
    background-color: #f8f8f8;
    padding: 30px 0px;
}
.acount-mng{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 4fr;
    grid-gap: 30px;
}
.acount-mng-left{
    background-color: white;
}
.acount-mng-left .block-infor{
    text-align: center;
    padding: 20px 0px;
}
.acount-mng-left .block-infor p{
    padding-top: 20px;
}
.acount-mng-left .block-infor .logout{
    text-decoration: none;
    color: white;
    background-color: #cd8f5c;
    padding: 5px 10px;
    border-radius: 3px;
    display: block;
    margin: 10px 30px;
    font-size: 14px;
}
.acount-mng-left ul{
    list-style-type: none;
    padding-bottom: 20px;
}
.acount-mng-left ul li:hover{
    background-color: #cd8f5c;
    transition: all 0.3s ease;
}
.acount-mng-left ul li a:hover{
    color: white;
}
.acount-mng-left ul li a{
    text-decoration: none;
    font-size: 14px;
    color: black;
    padding: 10px 30px;
    display: block;
}
.acount-mng-right{
    background-color: white;
    padding: 20px 50px;
}
.acount-mng-right table{
    width: 100%;
    margin-top: 10px;
    text-align: center;
}
.acount-mng-right p{
    padding-bottom: 10px;
    border-bottom: 1px solid #eeee;
    color: #cd8f5c;
    font-weight: bold;
}
.acount-mng-right table thead{
    background-color: #cd8f5c;
    color: white;
}
.acount-mng-right table thead th{
    padding: 10px;
    font-size: 12px
}
.acount-mng-right table tbody td{
    padding: 10px;
    font-size: 12px;
    color: black;
    border: 1px solid #e2e2e2;
}
</style>
<div class="container-acount-mng">
        <div class="acount-mng">
            <div class="acount-mng-left">
                <div class="block-infor">
                    <img src="public/image/account_ava.webp" alt="">
                    <p>Nguyễn Hồng Sơn</p>
                    <a href="" class="logout">Đăng xuất</a>
                </div>
                <ul>
                    <li><a href="?role=client&mod=users">Tài khoản của tôi</a></li>
                    <li><a href="?role=client&mod=users&action=quanly">Đơn hàng của tôi</a></li>
                    <!-- <li><a href="">Đổi mật khẩu</a></li> -->
                    <!-- <li><a href="">Sản phẩm yêu thích</a></li> -->
                </ul>
            </div>
            <div class="acount-mng-right">
                <p>QUẢN LÝ ĐƠN HÀNG</p>
                <table border="0">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Hoạt động</th>
                    </thead>
                    <tbody>
                        <?php foreach($cart as $item):?>
                        <tr>
                            <td><?php echo $item['id_cart']?></td>
                            <td><?php echo $item['name_pro']?></td>
                            <td><img style="width: 100px;" src="<?php echo $item['img']?>" alt=""></td>
                            <td><?php echo $item['soluong']?></td>
                            <td><?php echo $item['dongia']?></td>
                            <td><?php echo $item['tongtien']?></td>
                            <td style="color: blue;"><?= $item['trangthai'] == "0" ?"Đang chuẩn bị hàng":"Đang giao hàng" ?></td>
                            <td>
                                <?php
                                if($item['trangthai'] == "0"){
                                    ?>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng ?')" style="font-size: 8px;background-color: #cd8f5c; color: white; text-decoration: none; padding: 5px; border-radius: 3px;" href="?role=client&mod=users&action=deleteDonhang&id_cart=<?php echo $item['id_cart']?>">HỦY ĐƠN HÀNG</a>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php get_footer('') ?>
