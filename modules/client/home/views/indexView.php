<?php get_header('', 'KOSI - NỘI THẤT SANG TRỌNG SỐ 1 VIỆT NAM') ?>
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
/* BANNER */
.container-banner .mySlides img{
    width: 100%;
}
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: #cd8f5c;
}

/* Caption text */
.text {
  color: white;
  font-size: 24px;
  padding: 8px 12px;
  position: absolute;
  text-align: center;
  letter-spacing: 7px;
  left: 50%;
  bottom: 50%;
  transform: translate(-50%, -50%);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
/* @keyframes banner{
    /* 0%{
        background-color: orangered;
    } 
    20%{
        background-color: blue;
    }
    40%{
        background-color: aquamarine;
    }
    60%{
        background-color: brown;
    }
    80%{
        background-color: cornflowerblue;
    }
    100%{
        background-color: chartreuse;
    } */
/* } */
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
    font-size: 24px;
    border-bottom: 1px solid rgb(245, 245, 245);
    padding-bottom: 20px;
    text-align: center;
    letter-spacing: 7px;
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
    transition: all 0.5s ease;
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
/* .product-icon .product-icon-items:hover{
    background-color: #cd8f5c;
} */
.product-icon .product-icon-items a{
    font-size: 8px;
    color: white;
    font-weight: 100;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 1px;
}
.product-icon .product-icon-items i{
    color: white;
}
.product-icon .product-icon-items a:hover{
    cursor: pointer;
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
/* CATEGORY */
.container_category{
    background-color: rgb(250, 250, 250);
    padding-top: 20px;
    padding-bottom: 80px;
}
.category_header{
    margin-bottom: 50px;
}
.category_header h1{
    font-size: 24px;
    border-bottom: 1px solid rgb(245, 245, 245);
    padding: 20px 0px;
    text-align: center;
    letter-spacing: 7px;
    font-weight: bold;
}
.category_main{
    max-width: 1280px;
    margin: 0 auto;
}
.category{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 30px;
    position: relative;
}
.category .category_items a img{
    width: 100%;
    /* opacity: 0.7; */
}
/* .category .category_items a img:hover{
    opacity: 2;
    transition: all 0.5s ease;
} */
.category .category_items a h4{
    position: absolute;
    top: -10%;
    background-color: #cd8f5c;
    color: white;
    padding: 10px 30px;
}
/* SERVICE */
.container-service{
    background-color: rgb(255, 255, 255);
}
.service-1-img{
    position: relative;
}
.service-1-img img{
    width: 100%;
    height: auto;
    display: block;
}
.service-1-sale{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 10%;
}
.service-1-sale p{
    font-size: 25px;
    font-weight: bold;
    color: #000000;
    /* text-transform: uppercase; */
    letter-spacing: 2px;
    padding-bottom: 20px;
}
.service-1-sale a{
    color: #ffffff;
    font-weight: bold;
    text-decoration: none;
    background-color: #cd8f5c;
    padding: 10px 15px;
    border-radius: 2px;
}
.service-2{
    background-color: rgb(250, 250, 250);
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
/* BLOG */
.container-blog{
    background-color: white;
    padding: 100px 0px;
}
.blog-header{
    margin-bottom: 50px;
    max-width: 1280px;
    margin: 0 auto;
    /* border-bottom: 1px solid rgb(245, 245, 245);
    padding-bottom: 20px; */
    text-align: center;
    padding-bottom: 20px;
}
.blog-header h1{
    font-size: 24px;
    text-align: center;
    letter-spacing: 7px;
    font-weight: bold;
    padding-bottom: 20px;
}
.blog-header p{
    color: #7A7A7A;
}
.my-blog{
    max-width: 1480px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 30px;
    padding-top: 30px;
}
.myblog-items .myblog-items-img a img{
    width: 100%;
}
.myblog-items-content a{
    text-decoration: none;
    font-weight: bold;
    color: black;
    display: block;
    padding: 10px 0px;
} 
.myblog-items-content p{
    color: #7A7A7A;
    font-size: 12px;
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
.read-more{
    font-size: 12px;
    display: flex;
    align-items: center;
}
.read-more:hover{
    text-decoration: underline;
}
/* FOOTER */
.container-footer{
    background-color: rgba(246, 246, 246, 0.526);
    color: white;
    margin: 0 auto;
}
.footer{
     
    width:1500px;
    margin: 0 auto;
    justify-content:space-between;
    padding:0 10px 0;
    display: grid;
    grid-template-columns: auto auto auto auto;
    column-gap: 20px;
    margin-top: 80px;
    padding:50px;
    /* background-image: linear-gradient(to top right,#faebd780,#bc9b6f); */
}
.footer a{
    text-decoration: none;
     color:#252424af;
     transition: 1s;
     font-size: 12px;
}
.footer a:hover{
    color:#cd8f5c;
    transition: 0.2s;
}
.left{
    text-align: start;
    display: block;
}
.left p{
    margin-top: 20px;
    color:rgb(81, 78, 78);
    font-size:13px;
}
.left i{
    font-size: 20px;
    margin: 0 10px;
    color:#3d3b3b80;
    backdrop-filter: blur(10px);
    margin-top: 30px;
}
.left i:hover{
    color: #cd8f5c;
}
.center1 p,.center2 p{
 padding:10px 0 0;
 margin-bottom:10px ;
}
 h3{
 margin-bottom:20px;
 color:black;
}

/* .left i:nth-child(1){
    color:rgb(61, 58, 58);

}
.left i:nth-child(2){
    color:rgb(60, 59, 59);
}
.left i:nth-child(3){
    color:rgb(63, 63, 63);
}
.left i:nth-child(4){
    color:rgb(63, 62, 62);
} */
.right{
    border-bottom: 1px solid gray;
    height:100px;
    width:340px;
}
.right button{
    border: none;
    background: none;
    font-weight: bold;
}
.right input{
    border:none;
    background-color: transparent;
    width:250px;
    outline: none;
    padding: 5px;
}
</style>
    <div class="container-banner">
        <!-- Slideshow container -->
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="public/image/slider-12-1.jpg" style="width:100%">
            <div class="text" style="">BỘ SƯU TẬP MÙA XUÂN</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="public/image/slider-12-2.jpg" style="width:100%">
            <div class="text" style="">CHẤT LƯỢNG LÀ ƯU TIÊN HÀNG ĐẦU</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="public/image/slider-12-3.jpg" style="width:100%">
            <div class="text">THIẾT KẾ THI CÔNG TRỌN GÓI</div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <br>

        <!-- The dots/circles -->
        <!-- <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div> -->
    </div>
    <div class="container-product">
        <div class="product_header">
            <h1>SẢN PHẨM</h1>
        </div>
        <div class="product">
        <?php foreach ($productions as $production) : ?>
            <div class="product-items">
                <div class="product-img">
                    <a href="?role=client&mod=detail&id_pro=<?php echo $production['id_pro']?>">
                        <img src="<?php echo $production['img_pro']?>" alt="">
                    </a>
                    <div class="product-icon">
                        <div class="product-icon-items">
                            <a href="?role=client&mod=cart&id_pro=<?php echo $production['id_pro']?>">THÊM VÀO GIỎ HÀNG</a>
                        </div>
                    </div>
                </div>
                <div class="product-des">
                    <div class="product-des-category">
                        <a href="">
                            <?php
                        foreach($categories as $category){
                            if($production['id_cate'] == $category['id_cate']){
                                echo $category['name_cate'];
                            }
                        } ?>
                        </a>
                    </div>
                    <div class="product-des-name">
                        <a href="?role=client&mod=detail&id_pro=<?php echo $production['id_pro']?>"><?php echo ($production['name_pro']) ?></a>
                    </div>
                    <div class="product-des-price">
                        <a href="?role=client&mod=detail&id_pro=<?php echo $production['id_pro']?>"><?php echo ($production['price_pro']) ?> VND</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container_category">
        <div class="category_main">
            <div class="category_header">
                <h1>DANH MỤC HÀNG ĐẦU</h1>
            </div>
            <div class="category">
            <?php foreach ($categories as $category) : ?>
                <div class="category_items">
                    <a href="?role=client&mod=danhmuc&id_cate=<?php echo $category['id_cate']?>">
                        <img src="<?php echo $category['img_cate']?>" alt="">
                    </a>
                    <a href="?role=client&mod=danhmuc&id_cate=<?php echo $category['id_cate']?>">
                        <h4><?php echo $category['name_cate']?></h4>
                    </a>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-service">
        <div class="service-1">
            <div class="service-1-img">
                <img src="public/image/slide10.jpg" alt="">
                <div class="service-1-sale">
                    <p>Giảm giá tốt nhất tại Kosi
                        <br>giảm tới 30%
                    </p>
                    <a href="?role=client&mod=cart">ĐẶT HÀNG NGAY</a>
                </div>
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
    </div>
    <div class="container-blog">
        <div class="blog-header">
            <h1>BÀI VIẾT CỦA CHÚNG TÔI</h1>
            <p>Tìm hiểu về những câu chuyện sắp tới</p>
        </div>
        <div class="my-blog">
            <?php foreach($blog as $item_blog){
                ?>
                <div class="myblog-items">
                    <div class="myblog-items-img">
                        <a href="?role=client&mod=detailBlog&id_blog=<?php echo $item_blog['id_blog']?>">
                            <img src="<?php echo $item_blog['img_blog']?>" alt="">
                        </a>
                    </div>
                    <div class="myblog-items-content">
                        <!-- <p>PHONG CÁCH</p> -->
                        <a style="font-size: 12px; text-align: justify;" href="?role=client&mod=detailBlog&id_blog=<?php echo $item_blog['id_blog']?>">
                        <?php echo $item_blog['title_blog']?>
                        </a>
                        <p style="text-align: justify; font-size: 10px"><?php echo $item_blog['des_blog']?></p>
                        <div class="read-more">
                            <a style="" href="?role=client&mod=detailBlog&id_blog=<?php echo $item_blog['id_blog']?>">Xem thêm</i>
                            </a>
                        </div>
                </div>
            </div>
                <?php
                }?>
        </div>
    </div>
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
<?php get_footer('') ?>