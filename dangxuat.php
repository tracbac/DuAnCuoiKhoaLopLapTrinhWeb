 <?php session_start();
if (isset($_POST["dangXuat"])) {
    if( isset($_SESSION['login'])){
    unset($_SESSION['login']);
}
}
header('location: dangnhap.php') ;
?>