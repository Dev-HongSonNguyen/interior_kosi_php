<?php get_header('', 'Sửa thông tin tài khoản') ?>
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
}
.acount-mng{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 4fr;
    grid-gap: 30px;
    padding: 30px 0px;
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
    padding: 20px;
}
.acount-mng-right-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 10px;
    border-bottom: 1px solid #eeee;
}
.acount-mng-right-top p{
    color: #cd8f5c;
    font-weight: bold;
}
.acount-mng-right-top button{
    background-color: #cd8f5c;
    color: white;
    border: none;
    padding:10px;
    border-radius: 3px;
    font-weight: bold;
}
.acount-mng-right-top button:hover{
    cursor: pointer;
}
.acount-mng-right-bottom{
    padding-top: 20px;
}
.group-form{
    padding-bottom: 20px;
}
.group-form label{
    padding-bottom: 10px;
    font-size: 14px;
    display: inline-block;
}
.group-form .input_acount{
    outline: none;
    width: 500px;
    padding: 10px 5px;
    border: none;
    border: 1px solid #DDE1EF;
    border-radius: 3px;
}
.group-form-button{
    text-align: right;
}
.group-form-button button{
    background-color: #cd8f5c;
    color: white;
    border: none;
    font-size: 12px;
    padding: 10px;
    border-radius: 3px;
    font-weight: bold;
}
.group-form-button a:hover{
    cursor: pointer;
}
</style>
<div class="container-acount-mng">
        <div class="acount-mng">
            <div class="acount-mng-left">
                <div class="block-infor">
                    <img src="public/image/account_ava.webp" alt="">
                    <?php
                    if(is_auth()){
                        ?>
                        <p><?php echo $_SESSION['auth']['name_users']?></p>
                        <?php
                    }
                    ?>
                    <a href="?role=client&mod=auth&action=logout" class="logout">Đăng xuất</a>
                </div>
                <ul>
                    <li><a href="?role=client&mod=users">Tài khoản của tôi</a></li>
                    <li><a href="?role=client&mod=users&action=quanly">Đơn hàng của tôi</a></li>
                    <!-- <li><a href="">Đổi mật khẩu</a></li> -->
                </ul>
            </div>
            <div class="acount-mng-right">
                <div class="acount-mng-right-top">
                    <p>SỬA THÔNG TIN CÁ NHÂN</p>
                </div>
                <div class="acount-mng-right-bottom">
                    <form class="form-acount" action="" method="POST">
                        <?php
                        if(is_auth()){
                            ?>
                            <div class="group-form">
                            <label for="">Họ và tên: </label><br>
                            <input class="input_acount" type="text" name="name_users" value="<?php echo $_SESSION['auth']['name_users'] ?>">
                        </div class="">
                        <div class="group-form">
                            <label for="">Email: </label><br>
                            <input class="input_acount" type="text" name="email_users" value="<?php echo $_SESSION['auth']['email_users'] ?>">
                        </div class="">
                        <div class="group-form">
                            <label for="">Mật khẩu: </label><br>
                            <input class="input_acount" type="text" name="pw_users" value="<?php echo $_SESSION['auth']['pw_users'] ?>">
                        </div class="">
                        <div class="group-form">
                            <label for="">Số điện thoại: </label><br>
                            <input class="input_acount" type="text" name="phone_users" value="<?php echo $_SESSION['auth']['phone_users'] ?>">
                        </div class="">
                        <div class="group-form">
                            <label for="">Địa chỉ: </label><br>
                            <input class="input_acount" type="text" name="address_users" value="<?php echo $_SESSION['auth']['address_users'] ?>">
                        </div class="">
                        <div class="group-form-button">
                            <button type="submit">LƯU THÔNG TIN</button>
                        </div class="">
                            <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer('') ?>