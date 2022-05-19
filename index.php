<?php 
  session_start();
  $conn = mysqli_connect('localhost','root','','shop');
  if (!$conn){
    die("Ko ket noi duoc");
  }
  $sql="SELECT * FROM sanpham";
  $result=mysqli_query($conn, $sql);
  include 'head.php';  
    ?>

<!-- poster -->
<style>
    .pt{
    height: 600px;
    width: 90%;
    background: url(img/banner1.png);
    margin: 0 auto;
    margin-top: 100px;
    animation: slide 25s infinite;
    background-repeat: no-repeat;
    background-size: 100%;
    
}
@keyframes slide {
    25%{
       background: url(img/banner1.png);
       background-repeat: no-repeat;
       background-size: 100%;
    }
    50%{
        background: url(img/banner2.png);
        background-repeat: no-repeat;
        background-size: 100%;
    }
    75%{
        background: url(img/banner1.png);
        background-repeat: no-repeat;
        background-size: 100%;
    }
   100%{
       background: url(img/banner2.png);
       background-repeat: no-repeat;
       background-size: 100%;
   }
    }
    .sanpham{
      margin: 20px;
      color:red;
      font-size:24px;
      font-weight:bold;
      -webkit-animation: my 700ms infinite;
      -moz-animation: my 700ms infinite; 
      -o-animation: my 700ms infinite; 
      animation: my 700ms infinite;
    }
    .card{
      width:20%;
      margin:30px;
      float:left;
    }
    .timkiem{
      margin-left:20%;
      margin-right:20%;
      margin-top:70px;
    }
    .clearfix {
      content: "";
      clear: both;
      display: table;
    }
</style>
<!-- Slide -->
<div class="pt">
</div>
<!-- Danh sach sp' -->
    <div class="khung_hot">
      <h3 class="sanpham">Supper Hot:</h3>
        <?php
          if (mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)){
              echo '<a href="mua.php?id='.$row['MaSP'].'"><div class="card" style="">';
              echo '<img src="img/'.$row['anh'].'" style="height:500px">';
              echo '<div class="card-body">';
                echo '<p class="titleSP">'.$row['TenSP'].'</p>';
                echo '<p class="priceSP">'.$row['Gia'].' VNĐ</p>';
              echo '</div>';
              echo '</div></a>';
            }
          }
          ?>
    </div>
</div>
<div class="clearfix">
</div>

<!-- footer -->
</div>

<?php include 'foot.php' ?>
