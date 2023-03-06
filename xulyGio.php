<?php
session_start();
ob_start();

include 'connected.php';
if(isset($_GET['idThu'])){
    $idThu = $_GET['idThu'];


    if(isset($_SESSION['giohang'])){
        $count = count($_SESSION['giohang']);
        $vitriXoa;
        for($i=0;$i<$count;$i++){
            if($_SESSION['giohang'][$i]['idSP']==$idThu){
                $vitriXoa = $i;
                break;
            }
        }

        for($j=$vitriXoa;$j<$count-1;++$j){
            $_SESSION['giohang'][$j] = $_SESSION['giohang'][$j+1];
        }
        unset($_SESSION['giohang'][$count-1]);
        $sql = "DELETE FROM `giohang` WHERE idThu = '{$idThu}'";
        echo $sql;
        mysqli_query($link,$sql);

        header('location:giohang.php');
    }
}
