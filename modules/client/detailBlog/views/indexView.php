<?php get_header('', 'Chi tiết bài viết') ?>
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
    /* position: fixed; */
    /* z-index: 5; */
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
.container-detail-blog{
    background-color: #f8f8f8;
    padding: 30px 0px;
}
.container-detail-group{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
}
.detail-left{
    padding: 30px 20px;
    background-color: white;
}
.container-detail-blog-img img{
    width: 100%;
    height: auto;
    display: block;
}
.container-detail-blog-title h3{
    text-transform: uppercase;
    font-size: 14px;
    padding: 10px 0px;
    color: black;
    font-weight: bold;
}
.container-detail-blog-user{
    display: flex;
    gap: 5px;
    align-items: center;
    color: #cd8f5c;
    font-weight: bold;
    font-size: 10px;
    padding-top: 10px;
}
.container-detail-blog-content p{
    text-align: justify;
    line-height: 30px;
    font-size: 12px;
    color: #666666;
}
.detail-right{
    background-color: white;
    padding: 30px 20px;
}
.detail-right h1{
    font-size: 10px;
    text-align: center;
    color: white;
    border-bottom: 1px solid #e2e2e2;
    padding-bottom: 10px;
    background-color: #cd8f5c;
    padding: 5px;
    letter-spacing: 1px;
}
.detail-right-content{
    padding-top: 10px;
}
.detail-right-content-items{
    /* display: flex;
    align-items: center;
    gap: 10px; */
    border-bottom: 1px solid #e2e2e2;
    padding: 10px 0px;
}
.detail-right-content-items-img img{
    width: 100%;
}
.detail-right-content-items-nd a{
    font-size: 10px;
    color: black;
    font-weight: bold;
    text-decoration: none;
}
.detail-right-content-items-nd p{
    font-size: 8px;
    display: inline-block;
    word-wrap: break-word;
    white-space: normal;
    overflow: hidden;
    display: -webkit-box;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    text-align: justify;
}
.title{
    max-width: 1280px;
    margin: 0 auto;
    padding-bottom: 30px;
}
.title span{
    font-size: 10px;
    font-weight: bold;
    color: #7777;
}
.title span a{
    text-decoration: none;
    color: black;
}
.title span a:hover{
    color: #cd8f5c;
}
</style>
<div class="container-detail-blog">
    <div class="title">
        <span><a href="?role=client&mod=blog">BÀI VIẾT</a> / <?php echo $blog['title_blog']?></span>
    </div>
        <div class="container-detail-group">
            <div class="detail-left">
                    <div class="container-detail-blog-img">
                    <img src="<?php echo $blog['img_blog']?>" alt="">
                </div>
                <div class="container-detail-blog-user">
                    <div class="">
                        <span>KIẾN THỨC NỘI THẤT</span>
                    </div>
                    <!-- <div class="">
                        <span>Thời gian: 22.05.2020</span>
                    </div> -->
                </div>
                <div class="container-detail-blog-title">
                    <h3><?php echo $blog['title_blog']?></h3>
                </div>
                <div class="container-detail-blog-content">
                    <p><?php echo $blog['des_blog']?></p>
                </div>
            </div>
            <div class="detail-right">
                <h1>CÁC BÀI VIẾT LIÊN QUAN</h1>
                <div class="detail-right-content">
                    <?php foreach($bloglist as $blogs){
                        ?>
                        <div class="detail-right-content-items">
                            <div class="detail-right-content-items-img">
                                <a href="?role=client&mod=detailBlog&id_blog=<?php echo $blogs['id_blog']?>"><img src="<?php echo $blogs['img_blog']?>" alt=""></a>
                            </div>
                            <div class="detail-right-content-items-nd">
                                <a href="?role=client&mod=detailBlog&id_blog=<?php echo $blogs['id_blog']?>"><?php echo $blogs['title_blog']?></a>
                                <div class="container-detail-blog-user" style="font-size: 8px; padding-top: 5px;">
                                    <div class="" style="">
                                        <span style="">KIẾN THỨC NỘI THẤT</span>
                                    </div>
                                    <!-- <div class="">
                                        <span>Thời gian: 22.05.2020</span>
                                    </div> -->
                                </div>
                                <p style="padding-top: 5px;"><?php echo $blogs['des_blog']?></p>
                            </div>
                        </div>
                        <?php
                    }?>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer('') ?>