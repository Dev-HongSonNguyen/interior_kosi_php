<?php get_header('', 'Tin tức') ?>
<style>
*{
    padding: 0px;
    margin: 0px;
    font-family: 'Noto Sans', sans-serif;
}
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
    z-index: 2;
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
    z-index: 2;
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
.container-blog{
    background-color: white;
    z-index: 1;
}
.bg-header{
    position: relative;
    max-width: 1280px;
    margin:0 auto;
}
.bg-header img{
    width: 100%;
}
.bg-header h1{
    color: rgb(255, 255, 255);
    font-size: 50px;
    font-weight: bold;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    left: 50%;
    letter-spacing: 30px;
    opacity: 0.5;
} 
.blog-wp{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 30px;
    margin-top: 30px;
}
.bg-items{
    background-color: white;
    box-shadow: 0px 0px 5px 0px #ccc;
    position: relative;
}
.bg-items .bg-items-img{
    overflow: hidden;
}
.bg-items .bg-items-img img{
    width: 100%;
    display: block;
}
.bg-items .bg-items-img img:hover{
    transform: scale(1.1);
    transition: all 0.5s ease-in-out;
    background-color: rgba(0,0,0,.5);
}
.blog-tag{
    background-color: #cd8f5c;
    font-weight: bold;
    padding: 5px 10px;
    display: inline-block;
    color: white;
    position:absolute;
    left: 50%;
    top: -2.5%;
    font-size: 12px;
    transform: translate(-50%, -2%);
}
.bg-items .bg-items-content{
    text-align: center;
}
.bg-items .bg-items-content h3{
    padding-top: 10px;
}
.bg-items .bg-items-content p{
    padding: 5px 10px;
    text-align: justify;
    display: inline-block;
    word-wrap: break-word;
    white-space: normal;
    overflow: hidden;
    display: -webkit-box;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
}
.bg-items .bg-items-content a{
    text-decoration: none;
    color: #cd8f5c;
    padding-bottom: 20px;
    display: inline-block;
    font-weight: bold;
}
.bg-items .bg-items-content a:hover{
    text-decoration: underline;
}
.blog-page {
    margin-top: 30px;
}
.blog-page ul{
    display: flex;
    justify-content: center;
    align-items: center;
    list-style-type:none;
    gap: 20px;
}
.blog-page ul li a{
    text-decoration: none;
    color: black;
    padding: 5px 10px;
    font-weight: bold;
}
.blog-page ul li .current{
    background-color: #cd8f5c;
    color: white;
}
.blog-page ul li .current:hover{
    background-color: #cd8f5c!important;
}
.blog-page ul li a:hover{
    background-color: #f8f8f8;
}
/* SERVICE */
.service-2{
    background-color: #f8f8f8;
    margin-top: 30px;
}
.service-2-content{
    max-width: 1280px;
    margin: 0 auto;
    padding: 50px 0px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 70px;
}
.service-2-items{
    display: flex;
    align-items: center;
    gap: 20px;
}
.service-2-items-icon img{
    width: 100px;
}
.service-2-items-content h4{
    font-size: 16px;
    font-weight: bold;
    color: black;
}
.service-2-items-content p{
    font-size: 12px;
    color: #7A7A7A;
}

</style>
<div class="container-blog">
        <div class="bg-header">
            <img src="public/image/blog-title-bg-opt.jpg" alt="">
            <h1>KOSI BLOG</h1>
        </div>
        <div class="blog-wp">
        <?php foreach ($bloglist as $items) : ?>
            <div class="bg-items">
                <div class="bg-items-img">
                    <a href="?role=client&mod=detailBlog&id_blog=<?php echo $items['id_blog']?>">
                        <img src="<?php echo $items['img_blog']?>" alt="">
                    </a>
                </div>
                <div class="blog-tag">
                    <p>KIẾN THỨC NỘI THẤT</p>
                </div>
                <div class="bg-items-content">
                    <h3 style="font-size: 11px;"><?php echo $items['title_blog']?></h3>
                    <p style="font-size: 10px; text-align: justify;"><?php echo $items['des_blog']?></p>
                    <a href="?role=client&mod=detailBlog&id_blog=<?php echo $items['id_blog']?>" style="font-size: 12px; padding-top: 10px;">Xem thêm</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="blog-page">
            <!-- <ul>
                <li><a href="" class="current">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
            </ul> -->
        </div>
    </div>
    <div class="service-2">
        <div class="service-2-content">
            <div class="service-2-items">
                <div class="service-2-items-icon">
                    <img src="public/image/1_9.png" alt="">
                </div>
                <div class="service-2-items-content">
                    <h4>Miễn phí vận chuyển toàn cầu</h4>
                    <p>Trên tất cả các đơn hàng trên $75</p>
                </div>
            </div>
            <div class="service-2-items">
                <div class="service-2-items-icon">
                    <img src="public/image/1_10.png" alt="">
                </div>
                <div class="service-2-items-content">
                    <h4>Thanh toán an toàn 100%</h4>
                    <p>Chúng tôi đảm bảo thanh toán an toàn</p>
                </div>
            </div>
            <div class="service-2-items">
                <div class="service-2-items-icon">
                    <img src="public/image/1_11.png" alt="">
                </div>
                <div class="service-2-items-content">
                    <h4>30 ngày trở lại</h4>
                    <p>Trả lại hàng trong vòng 20 ngày để trao đổi</p>
                </div>
            </div>
            <div class="service-2-items">
                <div class="service-2-items-icon">
                    <img src="public/image/1_12.png" alt="">
                </div>
                <div class="service-2-items-content">
                    <h4>Hỗ trợ</h4>
                    <p>Nhân viên tư vấn, hỗ trợ khách hàng nhiệt tình</p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>