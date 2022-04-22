<?php
	session_start();
	if (!isset($_SESSION["login"])) {
       header("location:dangnhap.php");
      
       
    }
?><?php
$con = mysqli_connect('localhost' ,'root','','cuối khóa') or die(' ko the ket noi database');
$querry = mysqli_query($con,"select * from `tintuc2`") or die ('ko the try van database');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tranDau.css">
    <link rel="stylesheet" href="./css/dangxuat.css">
    <script
    src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    data-auto-a11y="true"
  ></script>
</head>
<body>

    <div  class="menu">
        <li><a href="./trangchu.php">Trang chủ</a></li>
        <li><a href="./trandau.php">Trận Đấu</a></li>
        <li><a href="./tintuc.php">Tin Tức</a></li>
        <div class="search-box">
            <input class="search-txt" type="text" name="timKiem"  method="post" placeholder="Type to search" >
            <button id="timkiem">
            
                <i class="fas fa-search"></i>
    
            </button>
        </div>
        
           <button id="btn2" value="Hiển Thị" class="anh"> <img  src="https://cdn-icons-png.flaticon.com/512/149/149071.png" ></button>
        
        <script>
        

document.getElementById("btn2").onclick = function () {
    document.getElementById("logout").style.display = 'block';
    
};


</script>
    </div>
    
    <div class="rong"></div>
    <div class="rong"></div>
<div class="logout" id="logout">
<br>
 <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"   >
<br>
<br>

<p>hgsafdghsa
</p>
<br>
<form action="./dangxuat.php">
<button action="./dangxuat.php" name="dangXuat" > Đăng Xuất </button>

</form>
<br>

<button  id="btn1" value="ẩn" name="an"> Hủy</button>
<script>
        

document.getElementById("btn1").onclick = function () {
    document.getElementById("logout").style.display = 'none';
    
};


</script></div>
</div>
    <div class="rong"></div>
    <div class="tintuc">
    <?php
while ($row= mysqli_fetch_array($querry,MYSQLI_ASSOC)) {
    

 ?>
 <div class="mang">
<div class="box2">
<?php  echo $row['ma'] ?>
<br>
<br>
<h3><?php  echo $row['mota'] ?></h3>


</div></div>
<div class="rong"></div>
<?php } ?>
</div>




    
</body>
</html>