<?php session_start();?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css" />
    <link href="public/css/log.css" rel="stylesheet" type="text/css" />

    <title>PetShop</title>
</head>

<body backgroundColor="#CCCCCC">

<div id="container">
    <div id="header">
        <?php include("header.php"); ?>
        <div style="clear:both"></div>
    </div>
    <?php include('menu.php');?>

    <div id="listSanPham">

        <?php
        if(isset($_GET['thucan'])){
            $sql = getSQLThucAn();
            printListThucAn(mysqli_query($link,$sql));
        }
        else{
            $sql = getSQLSanPham();
        //Phân trang cho san pham
        $numSP = 16;
        include ('phantrang.php');}
        ?>
    </div>
    <div id="footer">
        <?php include("footer.php"); ?>
    </div>
</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>

</html>