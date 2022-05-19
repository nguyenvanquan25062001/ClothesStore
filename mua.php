<?php
session_start();
include 'head.php' ?>
<!-- Trang chủ -->
<!-- navbar -->

<!-- CSDL -->
<?php
  $id = $_GET['id'];
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
      die("Ko ket noi duoc");
  }

  $sql="SELECT * FROM sanpham where MaSP = '$id'";
  $result=mysqli_query($conn, $sql);
?>
<!-- poster -->
<!-- Slide -->
  <a href="index.php" class="back" style="margin-left: 50px;">Trở Về</a>
    <?php
        if (mysqli_num_rows($result)>0){
          while ($row=mysqli_fetch_assoc($result)){
      echo '<div class="container" style="border: 2px solid var(--border-color);">
        <div class="row">
        <div class="col">;
        <img src="img/'.$row['anh'].'" style="height:500px">;
        </div>
        <div class="col">
        <h5 class="card-title">'.$row['TenSP'].'</h5>
        <div style="margin:5px;font-size:20px;">Mã Sản Phẩm:&ensp;'.$row['MaSP'].'</div>
        <div style="margin:5px;color:#ee4d2d;font-size:50px;">'.$row['Gia'].'</div>
        <div style="margin:5px;font-size:20px;">Loại:&ensp;'.$row['LoaiSP'].'</div>
        <div style="margin:5px;font-size:20px;">Size:&ensp;'.$row['Size'].'</div>
        <div style="margin:5px;font-size:20px;">Màu:&ensp;'.$row['Mau'].'</div>
        <div style="Width: 500px;height:30px;font-size:18px;margin-bottom:5px">'.$row['mota'].'</div>
        <a>Số Lượng</a>
        <input type="number" id="quantity" name="quantity" min="1" max="20" value="1">
        </br>
        </br>
        <a id = "mua" class="btn btn-success" >Mua ngay</a>
        <a class="btn btn-primary" id = "add" >Thêm vào giỏ hàng</a>
        </div>
        </div></div>';
          }
        }
    ?>

<div class="clearfix"></div>


<!-- footer -->
<script>
$('#mua').click(function() {$.ajax({
        type: "GET",
        url: "themgiohang.php",
  <?php
	echo 
"data:{id:'".$id."' , sl:$('#quantity').val() , loai:'add'} ";
	?>
,success: function(data, textStatus, xhr){
        if(xhr.status == 200){
          window.location.href = 'giohang.php';
        }
       }
   });
});
$('#add').click(function() {$.ajax({
        type: "GET",
        url: "themgiohang.php",
  <?php
	echo 
"data:{id:'".$id."' , sl:$('#quantity').val() , loai:'add'} ";
	?>
,success: function(data, textStatus, xhr){
        if(xhr.status == 200){
          $('#add').html('Đã Thêm Vào Giỏ Hàng') ;
          $('#add').off('click');
        }
       }
   });
});
</script>
<?php include 'foot.php' ?>

