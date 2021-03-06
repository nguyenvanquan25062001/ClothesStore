<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./font/css/all.min.css">
    <link href = "https: //fonts.googleapis.com/css2? family = Roboto: wght @ 100; 300; 400; 500; 700 & display = swap "rel =" stylesheet ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <title>Thời Trang Clothes Store</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
   <div class="container-fluid">
    <div>
        <a href="index.php"><img src="img/ClothesStore1.png" style="height: 180px;width:180px"></a>
    </div>
    <div class="header">
      <div class="header_0">
        <div>
          <a href="sanpham.php" class="header_2-link" ></a>
        </div>   
        <div class="header_3">
        <form class="d-flex">
            <a class="nav-link" href="donhang.php"> <i class="fas fa-clipboard-list" style="color:white"></i></i> Đơn hàng</a>
            <a class="nav-link" href="giohang.php"> <i class="fas fa-cart-plus" style="color:white"></i> Giỏ hàng</a>
            <li class="nav-link nav-link-3">
              <?php
                if(!isset($_SESSION["username"])){
                  echo '<a class="nav-link nav-link-3" href="login.php"><i class="fa-solid fa-child"></i> Đăng Nhập</a>';
                }
                else echo ('<a class="nav-link nav-link-3"><i class="fa-solid fa-child"></i>'.$_SESSION["username"].'</a>
                <ul class="header__navbar-user-menu">
                    <li class="header__navbar-user-item header__navbar-user-item--separate">
                        <a href="logout.php"> Đăng Xuất</a>
                    </li>
                </ul>');
              ?>
            </li>
          </form>
        </div>
      </div>
    </div>
 </nav>

<script>
    document.getElementById('sanpham').innerHTML = '</option><option value="Áo"></option>'
</script>
