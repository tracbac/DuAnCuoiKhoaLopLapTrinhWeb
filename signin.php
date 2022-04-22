<?php 

	if(isset($_POST['user']) && isset($_POST['pass']))
	{
		if(empty($_POST['user']) && empty($_POST['pass']))
		{	
			echo "Dang ki that bai";
		}
		else
		{
			include('../config/db.php');
			$u = $_POST['user'];
			$p = md5($_POST['pass']);
			$n = $_POST['name'];
			$ure = $_POST['user-re'];
			$pre = md5($_POST['pass-re']);
			include('../models/signin.php');
			$signin = signin($u, $p, $n);
			if ($signin == true){
			echo 'Dang ki thanh cong';
			}
			else{
				echo "Dang ki that bai";
			}
		}
		
	}else{
		include('../views/signin.php');
	}

?>