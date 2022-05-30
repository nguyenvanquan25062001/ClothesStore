<?php
 session_start();
 if(!isset($_SESSION["username"])){
   header("Location:./login.php");
 }
 include 'head.php';
 if($_SESSION["username"] != 'admin'){
    echo '<h1>Bạn không phải quản trị viên</h1>';
 }else{ echo '<div class="container shadow">

    <h1 class = "bg-info text-center" style="color:White">Thêm sản phẩm mới</h1>
    <form action="update_process.php" method = "POST" enctype="multipart/form-data">
        
        <label class="form-label">Tên sản phẩm:</label>
        <input type="text" class="form-control" name="tensanpham" required>

        <label class="form-label">Mã sản phẩm:</label>
        <input type="text" class="form-control" name="masanpham" maxlength="5"required>

        <label class="form-label">loại:</label>
        <input type="text" class="form-control" name="loai"required>

        <label class="form-label">Size:</label>
        <input type="text" class="form-control" name="size"required>
        
        <label class="form-label">Màu Sắc:</label>
        <input type="text" class="form-control" name="mau"required>

        <label class="form-label">giá bán:</label>
        <input type="number" class="form-control" name="gia" required>

        <label class="form-label">Mô tả:</label>
        <textarea type="text" class="form-control" rows="5" name="mota" required></textarea>

        <label class="form-lable">Ảnh Minh Hoạ</label>
        <div >
        <input type="file" class="form-control" name="anh" id = "anh" required>
        <div class="invalid-feedback">Vui Lòng chọn 1 tệp</div>
        </div>
        <button  style="margin-top:4%"type="submit" class="btn btn-primary" name="submit">Thêm</button>
    </form>
    <a href="home_admin.php"><button class="back">Trở Về Trang Admin</button></a>
</div>';
 }
include 'foot.php'
?>
