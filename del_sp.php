<?php
    $conn = mysqli_connect('localhost','root','','shop');
    if(!$conn){
        die("Không thể kết nối");
    }
    $masp = $_GET['id'];
    $sql = "DELETE FROM sanpham WHERE MaSP = '$masp'";
    $test = mysqli_query($conn, $sql);
    header("Location:./quanlysanpham.php");
    
?>