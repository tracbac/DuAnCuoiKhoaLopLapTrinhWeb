<?php

$con = mysqli_connect('localhost' ,'root','','dangnhap') or die('da the ket noi database');
$querry = mysqli_query($con,"select * from `user`") or die ('ko the try van database');

if (isset($_POST["dangnhap-reg"])) {
	
if(isset($_POST['username']) && isset($_POST['password']))
	{
		if(empty($_POST['username']) && empty(md5($_POST['password'])))
		{	
			require './thatbai2.php';
		}
		else
		{
			include('./db.php');
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			include('./login_models.php');
			$login = login($username, $password);
			
			if ($login == true){

				

    if( isset($_SESSION['login'])){
		header('location: trangchu.php') ;
		
	};
	if (isset($_POST["dangnhap-reg"])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sqlilogin = "SELECT * FROM `user` WHERE username = '$username' AND `password` = '$password'";
        $result = mysqli_query($con,$sqlilogin);
        $rows = mysqli_fetch_row($result);
     
        if(count($rows)) {
        $_SESSION['login'] = $username;
		
        header('location: trangchu.php') ;

      };
    
    
    }
				
				


			}
			else{
				require './thatbai2.php';
			}
		}
	}else{
		
		require './thatbai2.php';
		

	}
}
?>