<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/log.css" rel="stylesheet" type="text/css"/>
    <title>PetShop</title>
    <style>
        .baiviet{
            padding:5px 0 0 0;
        }
        span{
            font-size:18px;
        }
        h2{
            color:Blue;
        }
        .noidung-baiviet{
            margin-top:40px;
        }
    </style>
</head>

<body backgroundColor="#F7F7F7">
<div id="container">
    <button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png"/></button>
    <div id="header">
        <?php include("header.php") ?>
        <div style="clear: both"></div>
    </div>
    <!-------Phần menu-->
    <?php include("menu.php") ?>
    <!-----------content----------------->
    <div class="baiviet">
            <div class="hinhanh-baiviet">
                <img src="" alt=""/>
            </div>
            <div class="noidung">
                <div class="tieude-baiviet">
                    <h3><a href="index.php"  style = "color:orange">Home</a>  >  <b>Hướng dẫn mua hàng</b></h3>
                    
                    <h2 >HƯỚNG DẪN MUA HÀNG</h2>
                </div>
                <div class="noidung-baiviet">
                    <h3>1. Tìm kiếm sản phẩm:</h3>
                    <ul><h3>Quý khách có thể tìm sản phẩm theo 2 cách:</h3>
                        <li>
                            <span>Gõ tên sản phẩm vào thanh tìm kiếm.</span>
                        </li>
                        <li>
                            <span>Tìm theo danh mục sản phẩm; thương hiệu sản phẩm hoặc có thể tham khảo qua những sản phẩm hot, những sản phẩm đang bán chạy nhất tại website PetXinh.net
                            </span>
                        </li>
                    </ul>
                    <h3>2. Đặt hàng:</h3>
                    <ul>
                        <li>
                            <span>Khi đã tìm được sản phẩm mong muốn,  vui lòng bấm vào hình hoặc tên sản phẩm để vào được trang thông tin chi tiết của sản phẩm. Sau đó quý khách có thể đến trực tiếp cửa hàng để mua hoặc gọi điện để đặt hàng với chúng tôi.

                            </span>
                        </li>
                    </ul>
                    <h3>3. Bạn có thể mua hàng không cần đăng ký tài khoản. Tuy nhiên,PetXinh khuyến khích tạo Tài khoản để bạn có thể dễ dàng theo dõi & quản lý đơn hàng của mình.</h3>
                    <ul>
                        <li>
                            <span>Nếu bạn đã đăng ký tài khoản thì hãy đăng nhập bằng tài khoản đã có ở petxinh.net</span>
                        </li>
                        <li>
                            <span>Trong trường hợp chưa đăng ký tài khoản, bạn có thể điền các thông tin được yêu cầu bên phía tay trái</span>
                        </li>
                        <br/><span><i>Lưu ý: phải điền đầy đủ và chính xác về thông tin nhận hàng, đặc biệt là địa chỉ mail và số điện thoại để PetXinh xác nhận đơn hàng.</i></span>
                    </ul>

                    <h3>4. Phương thức thanh toán<a href="#" style = "color:orange"> Tham khảo hình thức thanh toán tại đây</a></h3>
                    
            </div>

        </div>
    <!--Đây là phần cuối-->
    <div class="Footer">
        <?php include("footer.php")?>
    </div>

</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>
</html>