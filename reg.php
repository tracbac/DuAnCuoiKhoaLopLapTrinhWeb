<?php
require './connect.php';



	
       
   


if (isset($_POST["btn-reg"])) {
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $gmail = $_POST['gmail'];
   $repeatPassword = md5($_POST['repeatPassword']);
   
  


   if (!empty($username)&&!empty($password)&&!empty( $gmail)&&!empty($repeatPassword)) {
    if(isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['gmail'])&& isset($_POST['repeatPassword']))
	{
		if(empty($_POST['username']) && empty($_POST['gmail']))
		{	
			require './thatbai.php';
		}
		else
		{
			
			
			
			include('./sigin_models.php');
			$signin = signin($username, $gmail);
			if ($signin == true){
                $sql = "INSERT INTO `user` (`username`,`password`,`gmail`,`repeatPassword`) VALUES('$username','$password',' $gmail',' $repeatPassword')";
     
                if ($con->query($sql)==TRUE) {
                   
                    require './thanhcong.php';
         
                }else{
                
                    echo"lỗi! Không thể thêm dữ liệu {$sql}".$con->error;
                }
			}
			else{
				require './thatbai.php';
			}
		}
		
	}
       
   }else{ 
        
       
    require './thatbai.php';
   } 
}



?>