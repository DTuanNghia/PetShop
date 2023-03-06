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

<body backgroundColor="#F7F7F7">
	<div id="container">
		<button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png"/></button>
		<div id="header">
			<?php include("header.php")?>
			<div style="clear: both"></div>
		</div>
		<!-------Phần menu-->
		<?php include("menu.php");?>
		
		<!-----------content----------------->
		<div class="content">
			<div class="slider">
				<figure>
					<img src="banner/sld-1.jpg" alt=""/>
					<img src="banner/sld-2.jpg" alt=""/>
					<img src="banner/sld-3.jpg" alt=""/>
					<img src="banner/sld-4.jpg" alt=""/>
					<img src="banner/sld-5.jpg" alt=""/>
				</figure>
			</div>
		</div>
		<!----------------------------------------------sidebar-right---------------------------------------------->

		<div class="sidebar-right">
			<a href=""><img src="Hình/sanphamnb1.jpg" alt=""/></a>
			<br/><br/>
			<a href=""><img src="Hình/sanphamnb2.jpg" alt=""/></a>
		</div>
		<div style="clear:both"></div>

		<!----------------------------------------------menu danh sách----------------------------------------->

		<div class="danhsach" >
			<?php inBangThu($link); ?>
			<a class="sanPham" href="chitietsp.php?idCL=05"><div class="img-sanPham" style="background-image:url(images/thunuoi/tung.jpg);"></div><div class="title-sp">Alaska</div><div class="giaSanPham"><div class="gia-giamgia">Giá: 1795000 đ</div></div></a>
			<a class="sanPham" href="chitietsp.php?idSP=28"><div class="img-sanPham" style="background-image:url(images/thunuoi/demo.jpg);"></div><div class="title-sp">Alaska</div><div class="giaSanPham"><div class="gia-giamgia">Giá: 2795000 đ</div></div></a>
		</div>
        <div class="right-qc">
            <div class="quangcao"><a href="chitietsp.php?idSP=34"><img src="banner/1.jpg" /></a></div>
            <div class="quangcao"><a href="chitietsp.php?idSP=33"><img src="banner/2.jpg" /></a></div>
            <div class="quangcao"><a href="sanpham.php?idCL=CL01"><img src="banner/3.jpg" /></a></div>
            <div class="quangcao"><a href="chitietsp.php?idSP=30"><img src="banner/4.jpg" /></a></div>
        </div>
		<!--Đây là phần cuối-->
		<div class="Footer">
			<?php include("footer.php"); ?>
		</div>
	</div>



<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>
</html>