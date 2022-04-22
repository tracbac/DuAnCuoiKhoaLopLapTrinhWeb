<?php
    
    function signin($username,$gmail )
    {
        $con = mysqli_connect('localhost' ,'root','','dangnhap') or die('Khong the ket noi toi database');
        $querry1 = mysqli_query($con,"select * from user where username = '$username' and gmail = '$gmail'") or die ('Khong the truy van database');
        $dem1 = mysqli_num_rows($querry1);
       
        if($dem1 == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
        mysqli_close($con);
    }
    
?>