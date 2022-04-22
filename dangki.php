<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./dangnhap.css" />
    <script src="https://kit.fontawesome.com/22fc02102c.js" crossorigin="anonymous"></script>
</head>
<body>
<marquee>Vui Lòng Đăng Kí</marquee>
    <script>
        function kiemtra() {
            
        
        
    var flag = true ;
    var username = getvalue('username')
;
if (username ==''||username.length < 5 ||!/^[a-zA-Z0-9] +$/.test(username)) {
    flag= false;
    showError('username','vui long kiem tra lai')
    }
}else{

}
    </script>
    <div class="frames">
        <form class="form-login" action="./reg.php" method="post" >
        <h1>Đăng kí tài khoản</h1>
        <div class="form-text" >
    
    <input  type="text" placeholder="username" id="username" name="username"></div>
    <div class="form-text" >
    
        <input required type="text" placeholder="gmail" id="gmail" name="gmail"></div>
        <div class="form-text" >
    
            <input required="Bắt Buộc" type="password" placeholder="password" id="password" name="password"></div>
            <div class="form-text" >
    
    <input  required type="password" placeholder="repeatPassword" id="repeat_password" name="repeatPassword" ></div>
    
<div class="d">
<button  action="./reg.php" name="btn-reg" onclick="return kiemtra()"> Đăng kí </button></div>
<br>
<div class="up">
    <a href="./dangnhap.php">
    <i class="fas fa-arrow-left"></i></a>
    <span>Bạn đã có tài khoản?</span>
</div>
</form>
</div>
<div class="n">
    <br>
     <p> Copyright @ 2022</p>  
  
     <p> Nguyen Trac Bac</p> 
</div>

</body>
</html> 
