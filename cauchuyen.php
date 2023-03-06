<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PetShop</title>
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/log.css" rel="stylesheet" type="text/css"/>
</head>

<body backgcolor="#F7F7F7">
<div id="container">
    <button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png"/></button>
    <div id="header">
        <?php include("header.php")?>
        <div style="clear: both"></div>
    </div>
    <!-------Phần menu-->
    <?php include("menu.php") ?>

    <div id="cauchuyen">
            <h3>Cuối tuần cười mệt nghỉ với dàn thú cưng trong lúc ngủ</h3>
                        <li>
                            <span> Những "cậu ấm, cô chiêu" này nổi danh trong thế giới động vật có bản tính "lười từ trong máu", ngủ mọi lúc mọi nơi và mọi hoàn cảnh.</span>
                        </li>
            <h3>Vì Sao Nên Mua Bảo Hiểm Cho Chó?</h3>
                        <li>
                            <span> 
Mặc dù chỉ mới phổ biến ở Hoa Kỳ và một số nước phương Tây, bảo hiểm dành cho chó cũng là một dịch vụ khá thú vị mà bất kì ai yêu thú cưng cũng đều nên biết đến!</span>
                        </li>
            <h3>Vì Sao Mèo Không Ngủ Về Đêm?</h3>
                        <li>
                            <span> 
Các chú mèo hay có thói quen kì quặc là rất hay phá phách, thậm chí đánh thức bạn trong đêm. Có một số lí do và cả giải pháp để giải quyết vấn đề có vẻ nan giải này!</span>
                        </li>
            <h3>Lí Giải Việc Mèo Hay Tè Bậy</h3>
                        <li>
                            <span> Mèo của bạn rất hay tiêu tiểu không đúng chỗ, nhất là trên ghế sofa hoặc giường ngủ? Đây là lý do!</span>
                        </li>
            <h3>Sự Thật Bất Ngờ Về Giấc Ngủ Của Chó</h3>
                        <li>
                            <span> Chó có thói quen ngủ như thế nào? Ngủ trong bao lâu? Và vì sao lại như vậy? Bài viết này sẽ giải đáp cho bạn những câu hỏi đó!</span>
                        </li>
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