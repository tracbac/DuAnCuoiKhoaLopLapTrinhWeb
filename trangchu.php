
<?php
	session_start();
	if (!isset($_SESSION["login"])) {
       header("location:dangnhap.php");
      
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css"><link rel="stylesheet" href="./css/tranDau.css"><link rel="stylesheet" href="./css/dangxuat.css">
    <script
    src="https://kit.fontawesome.com/22fc02102c.js" crossorigin="anonymous"

  ></script>
  
</head>
<body >
    
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
        <div class="thongbao">
<button id="btn4" class="thongBao">
<script>
        

        document.getElementById("btn4").onclick = function () {
            document.getElementById("Thu").style.display = 'block';
            
        };
        
        
        </script>
    <div class="diemThongbao"></div>
       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Circle-icons-mail.svg/800px-Circle-icons-mail.svg.png" alt="">
   </button></div>
        
           <button id="btn2" value="Hiển Thị" class="anh"> <img  src="https://cdn-icons-png.flaticon.com/512/149/149071.png" ></button>
        
        <script>
        

document.getElementById("btn2").onclick = function () {
    document.getElementById("logout").style.display = 'block';
    
};


</script>
    </div>
    
   
    <div class="rong"></div>
    <div class="Thu" id="Thu">
        <br>
<h1 >HAY CHUNG TAY BẢO VỆ MÔI TRƯỜNG</h1>
<p>Môi trường đang bị ô nhiễm nghiêm trọng hàng triệu heta rừng bị tàn phá mỗi năm, các loài động vật đang dần tuyệt chủng do nạn săn bắn, do bị hủy hoại môi trường sống. 
    Cuộc sống ngày càng phát triển đi kèm với đó là sự đi sống của môi trường, đừng để mọi thứ quá muộn, ngay từ bây giờ hãy nâng cao ý thức bảo vệ môi trường.
   
</p>
<p> DỪNG VIỆC HỦY HẠI MÔI TRƯỜNG LẠI!</p>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<p>Mọi thông tin xin liên hệ: tracbac77@gamil.com</p>
<button  id="btn3" value="ẩn" name="dong"> đóng</button>

<script>
    

document.getElementById("btn3").onclick = function () {
    document.getElementById("Thu").style.display = 'none';
    
};


</script></div>
</div>
<div class="logout" id="logout">
<br>
 <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"   >
<br>
<br>

<p>
    <?php 
    
  echo  $_SESSION['login'];
    ?>

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

    <div class="trangchu">
   
        </div>
        <div class="rong"><i id="thu" class="fa-regular fa-envelope-open-text"></i></div>
    <div class="n">
    <br>
     <p> Copyright @ 2022</p>  
     <br>
     <p> Nguyen Trac Bac</p> 
     
</div>
<script link="./js/dangxuat.js"></script>
</body>
</html>