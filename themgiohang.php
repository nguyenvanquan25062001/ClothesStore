<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:./login.php");
  }
  $username = $_SESSION["username"];
  $id = $_GET['id'];
  $loai = $_GET['loai'];
  $soluong = $_GET['sl'];
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  };
  if ($loai == 'add') {
    $sql = "SELECT * from giohang where username = '$username' and MaSP = '$id'";
    $result=mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0){
      $sql = "UPDATE giohang SET soluong = soluong + '$soluong' WHERE username='$username' AND MaSP = '$id'";
      mysqli_query($conn, $sql);
    }else{
      $sql = "INSERT INTO giohang(username,MaSP,SoLuong)VALUES('$username','$id','$soluong');";
      mysqli_query($conn, $sql);
      }
  }
  if ($loai == 'delete') {
    $sql = "DELETE from giohang where username = '$username' and MaSP = '$id'";
    $result=mysqli_query($conn, $sql);
  }
  header("Location:./giohang.php");
?>