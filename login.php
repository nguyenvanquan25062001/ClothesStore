<?php
session_start();
include 'head.php' ?>
<div class="header-login">
</div>
<div class="row container shadow" style="margin: 80px;">
  <div class="col-4 text-center" style="margin: auto">
    <h1 class="fw-bold">Đăng Nhập</h1><br>
    <form action = "login_process.php" method = "POST">
      <input type="text" class="form-control" name="username" placeholder="Tên người dùng"><br>
      <input type="password" class="form-control" name="password" placeholder="Mật khẩu"><br>
      <button type="submit" class="btn btn-primary">Đăng nhập</button><br><br>
      <a class = "btn btn-success" href="register.php">Tạo tài khoản</a>
    </form> 
  </div>
    <div class="col-8" style="text-align: center;">
        <img src="img/lgcs1.png">
    </div>
</div>

<?php include 'foot.php' ?>
