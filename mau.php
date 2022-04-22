




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css"><link rel="stylesheet" href="./css/dangxuat.css">
    <script
    src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    data-auto-a11y="true"
  ></script>
</head>
<body>
    
    <div class="menu">
        <li><a href="./trangchu.php">Trang chủ</a></li>
        <li><a href="./trandau.php">Trận Đấu</a></li>
        <li><a href="./tintuc.php">Tin Tức</a></li>
        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Type to search" 
            >
            <a class="search-btn" href="">
                <i class="fas fa-search"></i>
    
    
            </a>
        </div>
        
    </div>

    <div class="rong"></div>
    <div class="rong"></div>
<div class="logout">
<br>
<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" >
<br>
<br>

<p><?php  
session_start();
if( isset($_SESSION['login'])){
    echo $_SESSION['login'][1];
}



?></p>
<br>
<a href="">đăng xuất <?php
session_start();
if( isset($_SESSION['login'])){
    unset($_SESSION['login']);
}header('location: dangnhap.php') ;
?></a>

</div>
































    
    
</body>
</html>