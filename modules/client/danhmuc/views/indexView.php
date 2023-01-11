<?php get_header('', 'Danh mục') ?>
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
    z-index: 1;
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
    z-index: 1;
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
/* .header-right .header-right-search{
    border: 1px solid #eee;
    padding: 5px;
    transition: all 0.5s ease;
}
.header-right .header-right-search:hover{
    border: 1px solid #ccc;
}
.header-right .header-right-search input[type="text"]{
    border: none;
    outline: none;
    background-color: none;
}
.header-right .header-right-search button{
    border: none;
    background-color: white;
}
.header-right .header-right-search button:hover{
    cursor: pointer;
} */
.container-cate{
    background-color: white;
    padding-bottom: 20px;
}
.header-cate{
    position: relative;
    z-index: 0.5;
}
.header-cate img{
    width: 100%;
}
.header-cate h3{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 20px;
    letter-spacing: 5px;
}
/* PRODUCT */
.container-product{
    background-color: white;
    z-index: 0.5;
}
.product_header{
    margin-bottom: 50px;
    max-width: 1280px;
    margin: 0 auto;
}
.product_header h1{
    font-size: 14px;
    border-bottom: 1px solid rgb(245, 245, 245);
    padding-bottom: 10px;
    text-align: left;
    letter-spacing: 2px;
    font-weight: bold;
}
.product{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-gap: 30px;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    padding: 30px 0px;
    box-sizing: border-box;
}
.product-img{
    position: relative;
}
.product-img:hover .product-icon-items{
    display: block;
}
.product-items .product-img a img{
    width: 100%;
}
.product-icon{
    position: absolute;
    /* bottom: 20px;
    display: flex;
    gap: 20px;
    width: 100px;
    margin: 0 auto;
    left: 0px;
    right: 0px; */
    left: 50%;
    transform: translateX(-50%);
    bottom: 10%;
    display: flex;
    gap: 20px;
}
.product-icon .product-icon-items{
    text-decoration: none;
    background-color: #cd8f5c;
    color: white;
    font-size: 10px;
    padding: 10px;
    display: none;
    box-shadow: 0px 0px 10px 1px #eee;
}
.product-icon .product-icon-items:hover{
    background-color: #cd8f5c;
    color: white;
}
.product-icon .product-icon-items a{
    font-size: 8px;
    color: white;
    font-weight: 100;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 1px;
}
.product-des .product-des-category a{
    text-decoration: none;
    font-weight: bold;
    color: #A3A3A3;
    font-size: 10px;
}
.product-des .product-des-name a{
    text-decoration: none;
    font-weight: bold;
    color: black;
    font-size: 14px;
}
.product-des .product-des-price a{
    text-decoration: none;
    font-weight: bold;
    color: black;
    font-size: 14px;
}
@media (max-width: 768px){
    .product{
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr;
        padding: 30px 0px;
        box-sizing: border-box;
    }
}
@media (max-width: 1024px){
    .product{
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        padding: 30px 0px;
        box-sizing: border-box;
    }
}

</style>
<div class="container-cate">
        <div class="header-cate">
            <img src="public/image/slide11.jpg" alt="">
            <h3><?php
             foreach($categories as $cat){
                if($cat['id_cate']==$cat_id) echo $cat['name_cate'];
             }
             ?></h3>
        </div>
    </div>
    <div class="container-product">
        <div class="product_header">
            <h1>SẢN PHẨM</h1>
        </div>
        <div class="product">
            <?php
            foreach($productions as $production):
            ?>
            <div class="product-items">
                <div class="product-img">
                    <a href="?role=client&mod=detail&id_pro=<?php echo $production['id_pro']?>">
                        <img src="<?php echo $production['img_pro']?>" alt="">
                    </a>
                    <div class="product-icon">
                        <div class="product-icon-items">
                            <a href="?role=client&mod=cart&id_pro=<?php echo $production['id_pro']?>">THÊM VÀO GIỎ HÀNG</a>
                        </div>
                        <!-- <div class="product-icon-items">
                            <a href=""><i class="fa-regular fa-heart"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="product-des">
                    <div class="product-des-category">
                        <a href="">
                        <?php
                            foreach($categories as $cat){
                                if($cat['id_cate']==$cat_id) echo $cat['name_cate'];
                            }
                            ?>
                        </a>
                    </div>
                    <div class="product-des-name">
                        <a href="?role=client&mod=detail&id_pro=<?php echo $production['id_pro']?>">
                        <?php echo $production['name_pro']?>
                        </a>
                    </div>
                    <div class="product-des-price">
                        <a href="">
                        <?php echo $production['price_pro']?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php get_footer('') ?>