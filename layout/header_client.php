<?php get_header('base', $title) ?>
<!-- <html>
    <head>
        <title>Upload file Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="public/js/customs.js" type="text/javascript"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <style>
            #show_list_file { width:  200px; height: 200px; overflow: hidden;}
            #show_list_file img { max-width: 100%; max-height: 100%;}
        </style> -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="public/js/customs.js" type="text/javascript"></script>
    <link rel="stylesheet" href="public/css/dangnhap.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Ubuntu&display=swap" rel="stylesheet">
    <title>Sign Up</title>
</head>

<body> -->
<style>
    #show_list_file { width:  200px; height: 200px; overflow: hidden;}
    #show_list_file img { max-width: 100%; max-height: 100%;}
</style>
    <div class="container-header" id="myHeader">
        <div class="header">
            <div class="header-left">
                <div class="header-left-logo">
                    <a href="?role=client&mod=home"><img src="public/image/logo.jpg" alt=""></a>
                </div>
                <div class="header-left-nav">
                    <div class="nav-main">
                        <ul class="ul_main">
                            <li><a href="?role=client&mod=home">TRANG CHỦ</a></li>
                            <li><a href="#">DANH MỤC</a>
                                <ul class="sub_main">
                                    <?php foreach ($categories as $category) : ?>
                                        <li><a style="font-size:12px;" href="?role=client&mod=danhmuc&id_cate=<?php echo $category['id_cate']?>"><?php echo $category['name_cate'] ?></a></li>
                                    <!-- <li><a style="font-size:12px;" href="">THIẾT KẾ GÓC LÀM VIỆC</a></li>
                                    <li><a style="font-size:12px;" href="">THIẾT KẾ PHÒNG KHÁCH</a></li>
                                    <li><a style="font-size:12px;" href="">THIẾT KẾ PHÒNG NGỦ</a></li>
                                    <li><a style="font-size:12px;" href="">THIẾT KẾ PHÒNG BẾP</a></li> -->
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="?role=client&mod=blog">BÀI VIẾT</a></li>
                            <li><a href="?role=client&mod=lienhe">LIÊN HỆ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <div class="header-right-acount">
                    <a href="?role=client&mod=cart" class="cart">
                        <i class="fas fa-shopping-cart"></i>
                        <p>GIỎ HÀNG</p>
                    </a>
                </div>
                <div class="header-right-shop">
                    <?php
                    if(is_auth()){
                      ?>
                        <div class="container-output">
                        <i class="fas fa-user-alt"></i>
                        <div class="users-output">
                            <a href="?role=client&mod=users" class="output-main">CÁ NHÂN
                                <ul class="output-sub">
                                    <li><a href="?role=client&mod=users">TÀI KHOẢN CỦA TÔI</a></li>
                                    <!-- <li><a href="">ĐỔI MẬT KHẨU</a></li> -->
                                    <li><a href="?role=client&mod=users&action=quanly">ĐƠN HÀNG CỦA TÔI</a></li>
                                    <?php
                                    if($_SESSION['auth']['role']==2){
                                        ?>
                                        <li><a href="?role=admin">TRANG QUẢN TRỊ</a></li>
                                        <?php
                                    }
                                    ?>

                                    <li><a href="?role=client&mod=auth&action=logout">ĐĂNG XUẤT</a></li>
                                </ul>
                            </a>
                        </div>
                    </div>
                      <?php  
                    }else{
                        ?>
                        <div class="container-input">
                        <i class="fas fa-user-alt"></i>
                        <div class="users-input">
                            <a href="?role=client&mod=dangky">ĐĂNG KÝ</a> / <a href="?role=client&mod=auth">ĐĂNG NHẬP</a>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                    <!-- <div class="container-input">
                        <i class="fas fa-user-alt"></i>
                        <div class="users-input">
                            <a href="?role=client&mod=dangky">ĐĂNG KÝ</a> / <a href="?role=client&mod=auth">ĐĂNG NHẬP</a>
                        </div>
                    </div> -->
                    <!-- <div class="container-output">
                        <i class="fas fa-user-alt"></i>
                        <div class="users-output">
                            <a href="" class="output-main">CÁ NHÂN
                                <ul class="output-sub">
                                    <li><a href="">TÀI KHOẢN CỦA TÔI</a></li>
                                    <li><a href="">ĐỔI MẬT KHẨU</a></li>
                                    <li><a href="">ĐƠN HÀNG CỦA TÔI</a></li>
                                    <li><a href="?role=admin">ĐĂNG NHẬP TRANG QUẢN TRỊ</a></li>
                                    <li><a href="">ĐĂNG XUẤT</a></li>
                                </ul>
                            </a>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="header-right-search">
                    <form action="">
                        <input type="text" placeholder="Nhập từ khóa tìm kiếm" required>
                        <button>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>