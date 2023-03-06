<?php
session_start();


if(isset($_POST['idThuXoa'])){
    $idSP = $_POST['idThuXoa'];
    $index = 0;
    $count = count($_SESSION['giohang']);
    for($i=0;$i<$count;$i++){
        if($_SESSION['giohang'][$i]['idSP']==$idSP){
            $index = $i;
        }
    }



    for($j = $index;$j<$count-1;$j++){
        $_SESSION['giohang'][$j] = $_SESSION['giohang'][$j+1];
    }
    unset($_SESSION['giohang'][$count]);
    echo 1;
}