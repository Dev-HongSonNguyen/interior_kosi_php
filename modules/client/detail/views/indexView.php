<?php get_header('', 'Chi tiết sản phẩm') ?>
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
/* DETAIL */
.container-detail-pro{
    background-color: #f8f8f8f8;
    padding: 30px 0px;
}
.detail-box-main{
    max-width: 1280px;
    display: grid;
    grid-template-columns: 1fr 2fr;
    margin: 0 auto;
    grid-gap: 30px;
    padding-bottom: 30px;
}
.detail-box-left{
    background-color: white;
    border-radius: 3px;
}
.detail-content{
    padding: 20px;
}
.detail-img img{
    width: 100%;
    display: block;
}
.detail-content h1{
    font-size: 26px;
    font-weight: bold;
    border-bottom: 1px solid #e2e2e2;
    padding-bottom: 10px;
}
.detail-content p{
    font-size: 20px;
    color: #cd8f5c;
    font-weight: bold;
    padding: 10px 0px;
}
.detail-content .detail-content-des p{
    text-align: justify;
    padding-bottom: 30px;
    font-size: 12px;
    color: #555555;
    font-weight: 100;
    letter-spacing: 1px;
    line-height: 30px;
}
.detail-content .form-add-cart input[type="number"]{
    outline: none;
    padding: 10px;
    border: 1px solid #e2e2e2;
    margin-bottom: 10px;
}
.detail-content .form-add-cart a{
    text-decoration: none;
    background-color: #cd8f5c;
    color: white;
    font-weight: bold;
    font-size: 10px;
    padding: 10px;
    border: none;
}
.detail-content .form-add-cart a:hover{
    cursor: pointer;
}
.detail-cate{
    display: flex;
    align-items: center;
    padding-top: 20px;
}
.detail-cate span{
    font-size: 12px;
    font-weight: bold;
    display: inline-block;
    padding-right: 10px;
}
.detail-cate a{
    text-decoration: none;
    color: #777777;
    font-size: 14px;
}
.detail-comment{
    background-color: white;
}
.detail-comment p{
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    padding-bottom: 20px;
}
.detail-comment{
    max-width: 1280px;
    margin: 0 auto;
    padding-top: 30px;
}
.detail-comment .form-cm textarea{
    width: 93.5%;
    outline: none;
    border-color: #e2e2e2;
    padding: 20px;
    border-radius: 2px;
    margin: 10px 20px;
}
.detail-comment .form-cm button[type="submit"]{
    background-color: #cd8f5c;
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 2px;
    border: none;
    letter-spacing: 1px;
    margin: 0px 20px;
    margin-bottom: 20px;
}
.detai-content-des-big{
    background-color: white;
    width: 1280px;
    margin: 0 auto;
}
.detai-content-des-big p{
    text-align: justify;
    padding: 100px;
    color: #777777;
    line-height: 40px;
    margin-bottom: 20px;
}
.box-comment{
    max-width: 1280px;
    margin: 0 auto;
    margin-top: 50px;
    border: 1px solid #e2e2e2;
    border-radius: 3px;
}
.box-comment-header{
    background-color: #cd8f5c;
    padding: 10px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: white;
    gap: 10px;
}
.box-comment-header span{
    font-size: 14px;
    font-weight: bold;
    color: white;
}
.box-comment-left{
    padding: 30px;
    display: flex;
    justify-content: space-between;
    color: #777777;
}
.form-cm span{
    background-color: #cd8f5c;
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 2px;
    border: none;
    letter-spacing: 1px;
    margin: 0px 20px;
    margin-bottom: 20px;
    display: inline-block;
}
.form-cm a{
    background-color: #cd8f5c;
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 2px;
    border: none;
    letter-spacing: 1px;
    margin-bottom: 20px;
    display: inline-block;
    text-decoration: none;
}
</style>
<div class="container-detail-pro">
        <div class="detail-box-main">
            <div class="detail-box-right">
                <div class="detail-img">
                    <img src="<?php echo $productions['img_pro']?>" alt="">
                </div>
            </div>
            <div class="detail-box-left">
                <div class="detail-content">
                    <h1><?php echo $productions['name_pro']?></h1>
                    <p><?php echo $productions['price_pro']?> VND</p>
                    <div class="detail-content-des">
                        <?php echo $productions['des_pro']?>
                    </div>
                    <form action="" class="form-add-cart">
                        <input type="number" min="1" max="1" value="1" style="width: 182px"><br>
                        <a href="?role=client&mod=cart&id_pro=<?php echo $productions['id_pro']?>">THÊM VÀO GIỎ HÀNG</a>    
                        <!-- <a style="margin-left: 6px;">MUA NGAY</a> -->
                    </form>
                    <div class="detail-cate">
                        <span>Danh mục: </span>
                        <a href=""><?php
                        foreach($categories as $category){
                            if($productions['id_cate'] == $category['id_cate']){
                                echo $category['name_cate'];
                            }
                        } ?></a>
                    </div>
                    <div class="detail-cate">
                        <span>Chia sẻ: </span>
                        <a href="#" class="mxh">
                            <img src="public/image/facebook.png" alt="">
                            <img src="public/image/twitter.png" alt="">
                            <img src="public/image/piterest.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="detai-content-des-big">
            <?php echo $productions['des_pro']?>
        </div>
        <div class="detail-comment">
            <p>GỬI ĐÁNH GIÁ SẢN PHẨM</p>
            <form action="?role=client&mod=detail&action=addComment&id_pro=<?php echo $productions['id_pro']?>" class="form-cm" method="POST">
                <textarea id="" cols="30" rows="10" placeholder="Viết đánh giá của bạn ...." name="nd_binhluan"></textarea>
                <button type="submit">Bình luận</button>
                <!-- <span>Đăng nhập để đánh giá sản phẩm</span><a href="?role=client&mod=auth">Đăng nhập ngay</a> -->
            </form>
        </div>
        <div class="box-comment">
            <div class="box-comment-header">
                <div class="">
                <i class="fas fa-comment-alt"></i>
                <span>Bình luận</span>
                </div>
                <div class="">
                    <span>Nội dung bình luận</span>
                </div>
            </div>
            <?php foreach ($binhluan as $bl){
                ?>
            <div class="box-comment-left">
                <div class="box-comment-name">
                    <p><?php echo $bl['name_users']?></p>
                    <p><?php echo $bl['time']?></p>
                </div>
                <div class="box-comment-right">
                    <p><?php echo $bl['nd_binhluan']?></p>
                </div>
            </div>
            <?php
                }?>
        </div>
    </div>
<?php get_footer('') ?>