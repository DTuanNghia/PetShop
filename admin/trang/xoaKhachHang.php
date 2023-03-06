<?php
if(isset($_POST['email'])){
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];

    include("../../connected.php");
    $sql = "SELECT * FROM taikhoan WHERE Email='$email'";
    $tt = mysqli_query($link,$sql);
    if(mysqli_num_rows($tt)>0){
        echo 1;
        exit();

    }
    $insert = "DELETE FROM taikhoan(`Email`,`SDT`,`MatKhau`) WHERE('$email','$sdt','$matkhau')";
    mysqli_query($link,$insert);
    $sqlget = "select IDUser from taikhoan where Email = '$email'";
    $tt = mysqli_query($link,$sqlget);
    $row = mysqli_fetch_array($tt);
    mysqli_query($link,"delete from khachhang(`HoTen`,`Email`,`SDT`,`DiaChi`,`IDUser`) where('$ten','$email','$sdt','$diachi','{$row['IDUser']}')");
    echo 2;
}
?>