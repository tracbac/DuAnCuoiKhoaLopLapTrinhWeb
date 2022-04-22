
<?php
    
    function login($username, $password)
    {
        $con = mysqli_connect('localhost' ,'root','','dangnhap') or die('Khong the ket noi toi database');
        $querry = mysqli_query($con,"select * from user where username = '$username' and password = '$password'") or die ('Khong the truy van database');
        $dem = mysqli_num_rows($querry);
        
        if($dem >= 1)
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