<?php 
 session_start();
 $ten = $_POST['ten'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $request = $_POST['request'];
 $pttt = $_POST['pttt'];
 $ptgh = $_POST['ptgh'];
 $username = $_SESSION["username"];
  ?>
<?php
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  }

  $sql = "SELECT MAX(MaDH) FROM donhang";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["MAX(MaDH)"] == NULL){
        $maDH = 1;
      }
      $maDH = $row["MAX(MaDH)"]+1;
    }
  }
echo $maDH;

$sql="INSERT INTO donhang(MaDH , TenDH,username,address,phone,email,request,namepay,delivery,status) VALUES('$maDH' , '$ten' ,'$username', '$address' , '$phone' , '$email' , '$request' , '$pttt' , ' $ptgh' , '0' );";
$result=mysqli_query($conn, $sql);


$sql = "INSERT INTO chitietdonhang(MaDH , MaSP , TenSP , SoLuong , Gia)
SELECT '$maDH',sanpham.MaSP,sanpham.TenSP,giohang.SoLuong,sanpham.Gia FROM giohang INNER JOIN sanpham on sanpham.MaSP = giohang.MaSP WHERE username = '$username'";
$result = $conn->query($sql);


$sql = "DELETE FROM giohang WHERE username = '$username'";
$result = $conn->query($sql);

?>