<?php
    $MaSP = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','shop');
    if(!$conn){
        die("Không thể kết nối");
    }
    $sql = "SELECT * FROM sanpham WHERE MaSP = '$MaSP'";
    $row=mysqli_fetch_assoc(mysqli_query($conn, $sql)); 
    include 'head.php';
?>

<body>
    <div class="container shadow" style="margin: auto; margin-top:3%; padding: 100px;">
        <a href="quanlysanpham.php" class="fa fa-arrow-left"> Quay lại</a>
        <h1 class = "bg-info text-center">Chỉnh sửa thông tin sản phẩm</h1>
        <form action = "update_sp_process.php" method = "POST" enctype="multipart/form-data">
            <label class="form-label">ID:</label>
            <input type="text" class="form-control" name="id" <?php echo "value = \"".$row['MaSP']."\"";?> readonly>
            <label class="form-label">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="ten" <?php echo "value = \"".$row['TenSP']."\"";?> required>
            <label class="form-label">Loại:</label>
            <input type="text" class="form-control" name="type" <?php echo "value = \"".$row['LoaiSP']."\"";?>required>
            <label class="form-label">Màu:</label>
            <input type="text" class="form-control" name="color" <?php echo "value = \"".$row['Mau']."\"";?>required>
            <label class="form-label">Size:</label>
            <input type="text" class="form-control" name="size" <?php echo "value = \"".$row['Size']."\"";?>required>
            <label class="form-label">Giá:</label>
            <input type="number" class="form-control" name="price" min="1" <?php echo "value = \"".$row['Gia']."\"";?>required>
            <label class="form-label">Mô tả:</label>
            <input type="text" class="form-control" name="description" <?php echo "value = \"".$row['mota']."\"";?>required>
            <button type="submit" class="btn btn-primary" name='sbmUpdate'>Cập nhật</button>
        </form>
    </div>
</body>
</html>