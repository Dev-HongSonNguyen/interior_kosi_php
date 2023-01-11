<?php get_header('', 'Quên mật khẩu') ?>
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
/* SIGN-IN */
.container-signin{
    background: linear-gradient(to right, #cd8f5c, white);
    height: 1000px;
    padding-top: 100px;
}
.signin{
    background-color: white;
    max-width: 600px;
    margin: 0 auto;
    padding: 20px 0px;
    text-align: center;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 0px;
}
.form-signin h1{
    text-align: center;
    font-size: 20px;
    padding: 30px 0px;
}
.form-group input[type="text"]{
    width: 400px;
    padding: 15px 9px;
    outline: none;
    border: 1px solid #ccc;
    border-radius: 2px;
}
.form-group button{
    background-color: #cd8f5c;
    color: black;
    width: 100%;
    padding: 15px 9px;
    border: none;
    border-radius: 2px;
    font-weight: bold;
}
.form-group button:hover{
    cursor: pointer;
}
.form-signin input:focus-within{
    border: 1px solid black;
}
.form-ques{
    padding-top: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
}
.qmk{
    border-bottom: 1px solid rgb(231, 231, 231);
    padding-bottom: 20px;
}
.form-ques a{
    text-decoration: none;
    color: #cd8f5c;
}
</style>
<div class="container-signin">
        <div class="signin">
            <form action="?role=client&mod=auth&action=save_forgotPassword" class="" method="POST">
                <div class="form-signin">
                    <img src="../image/logo.jpg" alt="">
                    <h1>QUÊN <span style="color:#cd8f5c ;">MẬT KHẨU</span></h1>
                    <div class="form-group">
                        <input type="text" placeholder="Địa chỉ email" name="email">
                    </div>
                    <?php foreach ($notifications as $notification): ?>
				    <div class="container">
					<?php foreach ($notification['msgs'] as $msg): ?>
					<div class="alert alert-<?php echo $notification['type'] ?>" role="alert" style="color: #cd8f5c; padding-top: 10px;"><?php echo $msg ?></div>
					<?php endforeach; ?>
				</div>
				<?php endforeach; ?>
                    <br>
                    <div class="form-group">
                        <!-- <input type="text" placeholder="Mật khẩu"> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <button style="color: white" type="submit">XÁC NHẬN</button>
                    </div>
                    <div class="form-ques qmk">
                        <a href="?role=client&mod=auth">Đăng nhập ngay</a>
                    </div>
                    <br>
                </div>
            </form>
        </div>
    </div>
<?php get_footer('') ?>
