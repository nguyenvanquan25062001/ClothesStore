<?php
if(isset($_POST["submit"])) {
    $file_tmp = $_FILES['anh']['tmp_name'];
    $file_name = $_FILES['anh']['name'];
    $tensanpham=$_POST['tensanpham'];
    $masanpham=$_POST['masanpham'];
    $Size=$_POST['size'];
    $Mau=$_POST['mau'];
    $gia=$_POST['gia'];
    $loai=$_POST['loai'];
    $mota=$_POST['mota'];
    $conn = mysqli_connect('localhost','root','','shop');
    if (!$conn){
        die("Ko ket noi duoc");
    }

    $sql="INSERT INTO sanpham(MaSP,TenSP,LoaiSP,Size,Mau,Gia,anh,mota) VALUES ('$masanpham','$tensanpham', '$loai','$Size','$Mau', '$gia','$file_name','$mota')";
    $result=mysqli_query($conn, $sql);
    echo $file_name;
    if(copy($file_tmp,'img/'.$file_name.'')){
        ?>
        <script>
            alert('Thêm sản phẩm thành công.');
            location.href = "./home_admin.php";
        </script>
        <?php
    };
}else {
    echo 'Có Lỗi Xảy Ra';
}
    //header("Location:index_admin.php");
?>