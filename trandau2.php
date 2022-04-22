<?php
$con = mysqli_connect('localhost' ,'root','','cuối khóa') or die(' ko the ket noi database');
$querry = mysqli_query($con,"SELECT * FROM `thông tin`") or die ('ko the try van database');
 ?>
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
    <title>vòng bảng</title>
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
    
    
    <div class="vong">
<ul class="root">
          
   
      <li> <a href="">Vòng 16 : lượt 2/2</a>
      <ul class="con">
      <li> <a href="./trandau.php">Vòng 16 : lượt 1/2</a> 
      <li> <a href="./trandau2.php">Vòng 16 : lượt 2/2</a>  
                  <li> <a href="./trandau3.php"> Tứ Kết: 1/2</a>
                  <li> <a href="./trandau4.php">Tứ Kết: 2/2</a>
                  <li> <a href="./trandau5.php">Bán Kết: 1/2</a>
                  <li> <a href="./trandau6.php">Bán Kết: 2/2</a>
                  <li> <a href="./trandau7.php">CHUNG KẾT</a>
              </ul></li>
             </ul></div>
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
    
    <div class="board">
    

    <div class="box">
    
        <div class="team">
        <img src="https://ssl.gstatic.com/onebox/media/sports/logos/-_cmntP5q_pHL7g5LfkRiw_48x48.png" >
           
        </div>
        <h3>Bayem</h3>
    </div>
    <br>
    <div class="box">
        <div class="team">
          <img src="https://ssl.gstatic.com/onebox/media/sports/logos/vQhr4NoE_4Yg1IhUZvbRNw_48x48.png" >
          
        </div> <h3>RB Salzburg </h3></div>
    <div class="mota">
        <H3>thời gian: 09/3</H3>
        <p>tỉ số: 7-1</p>
    </div>
    </div>
    <div class="rong"></div>
    <div class="board">
    

        <div class="box">
        
            <div class="team">
            <img src="https://ssl.gstatic.com/onebox/media/sports/logos/0iShHhASp5q1SL4JhtwJiw_48x48.png" >
               
            </div>
            <h3>Liverpool</h3>
        </div>
        <br>
        <div class="box">
            <div class="team">
              <img src="https://ssl.gstatic.com/onebox/media/sports/logos/l2-icwsMhIvsbRw8AwC1yg_48x48.png" >
              
            </div> <h3> Inter</h3></div>
        <div class="mota">
            <H3>thời gian:09/3</H3>
            <p>tỉ số: 0-1</p>
        </div>
        </div>
        <div class="rong"></div>
        <div class="board">
    

        <div class="box">
        
            <div class="team">
            <img src="https://ssl.gstatic.com/onebox/media/sports/logos/z44l-a0W1v5FmgPnemV6Xw_48x48.png" >
               
            </div>
            <h3>Man City</h3>
        </div>
        <br>
        <div class="box">
            <div class="team">
            <img src="https://ssl.gstatic.com/onebox/media/sports/logos/58doDuhR0wW3WZE9PdODUw_48x48.png" >
              
            </div> <h3> Sportin</h3></div>
        <div class="mota">
            <H3>thời gian: 10/3</H3>
            <p>tỉ số: 0-0</p>
        </div>
        </div>
        <div class="rong"></div>
    <div class="board">
    

        <div class="box">
        
            <div class="team">
            <img src="https://ssl.gstatic.com/onebox/media/sports/logos/Th4fAVAZeCJWRcKoLW7koA_48x48.png" >
               
            </div>
            <h3>Real Madrid </h3>
        </div>
        <br>
        <div class="box">
            <div class="team">
              <img src="https://ssl.gstatic.com/onebox/media/sports/logos/mcpMspef1hwHwi9qrfp4YQ_48x48.png" >
              
            </div> <h3>PSG</h3></div>
        <div class="mota">
            <H3>thời gian : 10/3</H3>
            <p>tỉ số: 3-1</p>
        </div>
        </div>
        <div class="rong"></div>
        <div class="board">
    

    <div class="box">
    
        <div class="team">
        <img src="https://ssl.gstatic.com/onebox/media/sports/logos/udQ6ns69PctCv143h-GeYw_48x48.png" >
           
        </div>
        <h3>Man Utd </h3>
    </div>
    <br>
    <div class="box">
        <div class="team">
          
          <img src="https://ssl.gstatic.com/onebox/media/sports/logos/srAAE0bOnCppUrlbJpFiHQ_48x48.png" >
        </div>  <h3>Atlestico Madrid</h3></div>
    <div class="mota">
        <H3>thời gian: 16/3</H3>
        <p>tỉ số: 0-1</p>
    </div>
    </div>
    <div class="rong"></div>
    <div class="board">
    

    <div class="box">
    <div class="team">
          <img src="https://ssl.gstatic.com/onebox/media/sports/logos/WIAAdPpdzFwVKU7maFvJ6w_48x48.png" >
          
        </div> <h3>Ajax </h3></div>
        
    <br>
    <div class="box">
    <div class="team">
        <img src="https://ssl.gstatic.com/onebox/media/sports/logos/nFwABZ-4n_A3BGXT9A7Adg_48x48.png" >
           
        </div>
        <h3>Benfica</h3>
    </div>
        
    <div class="mota">
        <H3>thời gian: 16/3</H3>
        <p>tỉ số: 0-1</p>
    </div>
    </div>
        <div class="rong"></div>
    
    
        <div class="board">
    

    <div class="box">
    <div class="team">
          <img src="https://ssl.gstatic.com/onebox/media/sports/logos/Lv6xmBlUIpN3GAFhtf6nqQ_48x48.png" >
          
        </div> <h3>Juventus </h3></div>
        
    <br>
    <div class="box">
    <div class="team">
        <img src="https://ssl.gstatic.com/onebox/media/sports/logos/WKH7Ak5cYD6Qm1EEqXzmVw_48x48.png" >
           
        </div>
        <h3>Villarreal</h3>
    </div>
        
    <div class="mota">
        <H3>thời gian: 17/3</H3>
        <p>tỉ số: 0-3</p>
    </div>
    </div>
    <div class="rong"></div>






        
        
    
        
        <div class="rong"></div>
    
   
    <div class="board">
    

        <div class="box">
        <div class="team">
              <img src="https://ssl.gstatic.com/onebox/media/sports/logos/D2AQe8qoyPIP4K8MzLvwuA_48x48.png" >
              
            </div> <h3>LOSC </h3></div>
            
        <br>
        <div class="box">
        <div class="team">
            <img src="https://ssl.gstatic.com/onebox/media/sports/logos/fhBITrIlbQxhVB6IjxUO6Q_48x48.png" >
               
            </div>
            <h3>Chelsea</h3>
        </div>
        <div class="mota">
            <H3>thời gian: 17/3</H3>
            <p>tỉ số: 1-2</p>
        </div>
        </div>
        <div class="rong"></div>
    
   
    
            
      
    

  
    
    <div class="n">
    <br>
     <p> Copyright @ 2022</p>  
     <br>
     <p> Nguyen Trac Bac</p> 
     
</div>
</body>
</html>
