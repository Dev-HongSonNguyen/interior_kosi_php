<?php get_header('', 'Liên hệ') ?>
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
/* CONTACT */
.contact-container{
    /* background-image: url(../image/pattern.jpg);
     */
     background-color: white;
     padding-bottom: 30px;
     z-index: 1;
}
.contact{
    max-width: 1280px;
    margin: 0 auto;
}
.contact-header{
    position: relative;
}
.contact-header img{
    width: 100%;
    filter:brightness(60%);
}
.contact-header h1{
    color: rgb(255, 255, 255);
    font-size: 50px;
    font-weight: bold;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    left: 50%;
    letter-spacing: 30px;
    opacity: 1;
}
.contact-infor-box{
    background-color: white;
    box-shadow: 0px 0px 3px 0px #e2e2e2;
    padding: 50px;
}
.contact-infor-box h3{
    color: #cd8f5c;
    font-size: 14px;
    padding-bottom: 5px;
}
.contact-infor-item{
    display: flex;
    align-items: center;
    gap: 20px;
    border-bottom: 1px solid #d6d6d6;
    padding: 20px 0px;
}
.contact-infor-item:last-child{
    border-bottom: none;
}
.contact-infor-item-left i{
    font-size: 32px;
    color: #cd8f5c;
}
.contact-infor-item-right p{
    font-size: 12px;
    color: #999999;
}
.contact-infor-map{
    display: grid;
    grid-template-columns: 1fr 3fr;
    grid-gap: 30px;
    padding: 30px 0px;
}
.contact-map iframe{
    width: 100%;
}
form{
    max-width: 1280px;
    margin: 0 auto;
    background-color: white;
    box-shadow: 0px 0px 3px 0px #e2e2e2;
    padding: 30px 0px;
}
form h4{
    text-align: center;
    color: #cd8f5c;
    padding-bottom: 20px;
}
.form-box{
    display: flex;
    justify-content: center;
}
.form-grid{
    display: grid;
    grid-template-columns: 1fr 4fr;
    grid-gap: 5px;
    padding-bottom: 20px;
}
.form-grid label{
    font-size: 12px;
    color: #cd8f5c;
    display: flex;
    align-items: center;
}
.form-grid input{
    width: 500px;
    outline: none;
    background-color: #EBEBEB;
    border: none;
    padding: 10px 12px;
}
.form-grid textarea{
    width: 492px;
    outline: none;
    background-color: #EBEBEB;
    border: none;
    padding: 8px 16px;
}
button{
    padding: 9px 20px;
    text-transform: initial;
    color: #FFF;
    font-weight: 400;
    background: #cd8f5c;
    letter-spacing: 1px;
    border-radius: initial;
    font-weight: bold;
    border: none;
    margin-left: 135px;
    font-size: 10px;
}
button:hover{
    cursor: pointer;
}
</style>
<div class="contact-container">
        <div class="contact">
            <div class="contact-header">
                <img src="public/image/bg_contact.webp" alt="">
                <h1>LIÊN HỆ</h1>
            </div>
            <div class="contact-infor-map">
                <div class="contact-infor-box">
                    <h3>LƯU TRỮ THÔNG TIN</h3>
                    <div class="contact-infor-item">
                        <div class="contact-infor-item-left">
                            <i class="fas fa-location"></i>
                        </div>
                        <div class="contact-infor-item-right">
                            <p>
                                143/69 Xuân Phương <br>
                                Nam Từ Liêm, Hà Nội</p>
                        </div>
                    </div>
                    <div class="contact-infor-item">
                        <div class="contact-infor-item-left">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-infor-item-right">
                            <p>
                                Địa chỉ email: <br>
                                noithatkosi@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638560158574!2d105.744212175142!3d21.038132787456835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1670517510346!5m2!1svi!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <form action="">
            <h4>HÃY TƯƠNG TÁC VỚI CHÚNG TÔI</h4>
            <div class="form-box">
                <div class="">
                    <div class="form-grid">
                        <label for="">HỌ VÀ TÊN</label>
                        <input type="text" placeholder="my name is">
                    </div>
                    <div class="form-grid">
                        <label for="">EMAIL</label>
                        <input type="email" placeholder="your@email.com">
                    </div>
                    <div class="form-grid">
                        <label for="">SỐ ĐIỆN THOẠI</label>
                        <input type="text" placeholder="phone number">
                    </div>
                    <div class="form-grid">
                        <label for="">NỘI DUNG</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="content.."></textarea>
                    </div>
                    <button type="submit">GỬI ĐI</button>
                </div>

            </div>
        </form>
    </div>
<?php get_footer('') ?>