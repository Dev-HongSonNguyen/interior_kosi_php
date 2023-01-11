<style>
    *{
    padding: 0px;
    margin: 0px;
    font-family: 'Noto Sans', sans-serif;
}
.container-footer{
    background-color: black;
    /* margin-top: 100px; */
}
.footer{
    max-width: 1280px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 30px;
    padding: 100px 0px;
}
.footer-items-1{
    padding-top: 40px;
}
.footer-items-1 p{
    font-size: 12px;
    padding-top: 20px;
    color: white;
}
.footer-items-2 h4{
    color: white;
    font-weight: bold;
    padding-bottom: 45px;
    letter-spacing: 2px;
}
.footer-contact{
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 30px;
}
.footer-contact p{
    color: white;
    font-size: 12px;
}
.footer-contact i{
    color: white;
    font-size: 14px;
    color: #cd8f5c;
}
.footer-items-3 h4{
    color: white;
    font-weight: bold;
    padding-bottom: 40px;
    letter-spacing: 2px;
}
.footer-items-3 ul{
    list-style-type: none;
}
.footer-items-3 ul li{
    padding-bottom: 30px;
}
.footer-items-3 ul li a{
    text-decoration: none;
    font-size: 12px;
    color: white;
}
.footer-items-4 h4{
    color: white;
    font-weight: bold;
    padding-bottom: 40px;
    letter-spacing: 2px;
}
.footer-items-4 .icon-mxh{
    padding-bottom: 30px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.footer-items-4 .icon-mxh a img{
    width: 20px;
}
.footer-logo h1{
    font-weight: bold;
    color: white;
    font-size: 50px;
}
.footer-logo img{
    width: 200px;
}
</style>
<div class="container-footer">
        <div class="footer">
            <div class="footer-items-1">
                <div class="footer-logo">
                    <img src="public/image/logo3.png" alt="">
                    <!-- <h1>KOSI</h1> -->
                </div>
                <p>© 2022 Được cung cấp bởi Kosi<br>
                    <br>
                    Đã đăng ký Bản quyền.
                </p>
            </div>
            <div class="footer-items-2">
                <h4>THÔNG TIN</h4>
                <div class="footer-contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>143/69 Xuân Phương, Nam Từ Liêm, Hà Nội</p>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-phone"></i>
                    <p>+ 84 707 136</p>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-envelope"></i>
                    <p>noithatkosi@gmail.com</p>
                </div>
            </div>
            <div class="footer-items-3">
                <h4>HỖ TRỢ</h4>
                <ul>
                    <li><a href="#">Vận chuyển & Trả lại</a></li>
                    <li><a href="#">Chính sách của chúng tôi</a></li>
                    <li><a href="#">Điều khoản và điều kiện</a></li>
                    <li><a href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="footer-items-4">
                <h4>THEO DÕI TRÊN XÃ HỘI</h4>
                <div class="icon-mxh">
                    <a href="#">
                        <img src="public/image/fb2.png" alt="">
                    </a>
                    <a href="#">
                        <img src="public/image/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="public/image/piterest.png" alt="">
                    </a>
                </div>
                <img src="public/image/payment.png" alt="">
            </div>
        </div>
    </div>
<?php get_footer('base') ?>
</body>
</html>