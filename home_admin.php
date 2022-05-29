<?php
 session_start();
 if(!isset($_SESSION["username"])){
   header("Location:./login.php");
 }
 include 'head.php';
 if($_SESSION["username"] != 'admin'){
    echo '<h1>Bạn không phải quản trị viên</h1>';
 }else{ echo '<div class="body_admin">
            <div class="body_admin-text text-center">
                <a class="btn btn-success" href="quanlysanpham.php">Quản Lý Sản Phẩm </a>
            </div>
            <div class="body_admin-text text-center">
                <a class="btn btn-success" href="thongkedonhang.php">Quản Lý Đơn Hàng</a>
            </div>
            </div>';
 }
include 'foot.php';
?>
