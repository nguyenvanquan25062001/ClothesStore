<?php
    $conn = mysqli_connect('localhost','root','','shop');
    if (!$conn)
        die("Ko ket noi duoc");
    $MaSP = $_POST['id'];
    $TenSP = $_POST['ten'];
    $Loai = $_POST['type'];
    $mau = $_POST['color'];
    $size = $_POST['size'];
    $gia = $_POST['price'];
    $mota = $_POST['description'];
    // $file_tmp = $_FILES['image']['tmp_name'];
    // $file_name = $_FILES['image']['name'];

    $sql="UPDATE sanpham SET TenSP='$TenSP', LoaiSP='$Loai', Mau='$mau', Size='$size', Gia='$gia', mota='$mota'  where MaSP = '$MaSP'";
    $result=mysqli_query($conn, $sql);
    // copy($file_tmp,'img/'.$file_name.'');
    header('Location: quanlysanpham.php');
?>