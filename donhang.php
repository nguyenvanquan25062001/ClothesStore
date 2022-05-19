<?php 
 session_start();
 if(!isset($_SESSION["username"])){
  header("Location:./login.php");
 }
require_once 'head.php';
$username = $_SESSION["username"];
  ?>
<?php
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  }

  $sql="SELECT * FROM donhang INNER JOIN chitietdonhang on chitietdonhang.MaDH = donhang.MaDH WHERE username = '$username'";
  $result=mysqli_query($conn, $sql);

  
?>
<div><a href="index.php" style="margin-left:30px,height: 60px"> <- Trang Chủ</a></div>
<div class="giohang_body" style= "margin: 100px;padding:20px 20px;border: 2px solid var(--border-color);">
<h3 class="sanpham">Đơn Hàng:</h3>

  <?php
    
  $tong_tien = 0;
  
  if (mysqli_num_rows($result)>0){
    $firstrow = mysqli_fetch_assoc($result);;
  $madh = $firstrow['MaDH'];
  $tong_tien = $firstrow['Gia']*$firstrow['SoLuong'];
  echo '</tr><table class="table">
  <thead>
    <tr>
      <th scope="col" style="width:10%">'.$madh.'</th>
      <th scope="col" style="width:20%">Sản Phẩm</th>
      <th scope="col" style="width:20%">Giá(VNĐ)</th>
      <th scope="col" style="width:20%">Số Lượng</th>
      <th scope="col" style="width:20%">Thành Tiền(VNĐ)</th>
    </tr>
  </thead>
  <tbody>';
  $address = $firstrow['address'];
            $dvgh = $firstrow['delivery'];
            if ($firstrow['status'] == 0) {
              $status = 'Đang xử lý';
            }
            if ($firstrow['status'] == 1) {
              $status = 'Đang giao hàng';
            }
            if ($firstrow['status'] == 2) {
              $status = 'Đã hoàn thành';
            }
  echo '<tr>
      <th scope="row"></th>
      <td>'.$firstrow['TenSP'].'</td>
      <td>'.number_format($firstrow['Gia']).'</td>
      <td>'.$firstrow['SoLuong'].'</td>
      <td>'.number_format($firstrow['Gia']*$firstrow['SoLuong']).'</td>
    </tr>';
    while ($row=mysqli_fetch_assoc($result)){
            if($row['MaDH'] != $madh){
              $madh = $row['MaDH'];
              echo '<tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td>Tổng Tiền:</td>
              <td>'.number_format($tong_tien).'</td></tbody>
              </table>
              Địa Chỉ : '.$address.'</br>
              Đơn vị giao hàng : '.$dvgh.'</br>
              Trạng thái đơn hàng : '.$status.' </br></br></br>
            </tr><table class="table">
              <thead>
                <tr>
                  <th scope="col" style="width:10%">'.$madh.'</th>
                  <th scope="col" style="width:20%">Sản Phẩm</th>
                  <th scope="col" style="width:20%">Giá(VNĐ)</th>
                  <th scope="col" style="width:20%">Số Lượng</th>
                  <th scope="col" style="width:20%">Thành Tiền(VNĐ)</th>
                </tr>
              </thead>
              <tbody>';
              $tong_tien = $row['Gia']*$row['SoLuong'];
            }
            $tong_tien += $row['Gia']*$row['SoLuong'];
            $address = $row['address'];
            $dvgh = $row['delivery'];
            if ($row['status'] == 0) {
              $status = 'Đang xử lý';
            }
            if ($row['status'] == 1) {
              $status = 'Đang giao hàng';
            }
            if ($row['status'] == 2) {
              $status = 'Đã hoàn thành';
            }
  echo '<tr>
      <th scope="row"></th>
      <td>'.$row['TenSP'].'</td>
      <td>'.number_format($row['Gia']).'</td>
      <td>'.$row['SoLuong'].'</td>
      <td>'.number_format($row['Gia']*$row['SoLuong']).'</td>
    </tr>';
    }
    echo '<tr>
    <th scope="row"></th>
    <td></td>
    <td></td>
    <td>Tổng Tiền:</td>
    <td>'.number_format($tong_tien).'</td>    </tbody>
    </table>Địa Chỉ : '.$address.'</br>
    Đơn vị giao hàng : '.$dvgh.'</br>
    Trạng thái đơn hàng : '.$status.' </br></br></br>';
  }

  ?>

</div>   


<?php include 'foot.php' ?>