<?php
$con = mysqli_connect('localhost' ,'root','','dangnhap') or die('da the ket noi database');
$querry = mysqli_query($con,"select * from `user`") or die ('ko the try van database');
?>
