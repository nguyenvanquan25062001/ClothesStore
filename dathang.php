<?php 
 session_start();
 if(!isset($_SESSION["username"])){
    header("Location:./login.php");
   }
require_once 'head.php';
  ?>
    <div class="lienhe_row">
        <div class="lienhe_btn">
            <div class="lienhe_btn-1">
                <div class="btn-12">
                    <div class="lienhe_group">
                        <h1>Thông Tin Khách Hàng</h1>
                    </div>
                </div>
                <div class="lienhe-btn_1">
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Họ Tên</label><br>
                            <input type="text" class="lienhe_form" placeholder="Họ Tên" name="name" id="name">
                        </div>
                    </div>
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Địa Chỉ Nhận Hàng</label><br>
                            <input type="text" class="lienhe_form" placeholder="Địa Chỉ" name="address" id="address">
                        </div>
                    </div>
                </div>
                <div class="lienhe-btn_1">
                    <div class="btn-6">
                        <div class="lienhe_group">
                            <label>Điện Thoại</label><br>
                            <input type="text" class="lienhe_form" placeholder="Điện Thoại" name="phone" id="phone">
                        </div>
                    </div>
                </div>   
                <div class="lienhe-btn_1">
                </div>
            </div>
          
        </div>
        <div class="lienhe_text">
            <h1>Chọn Phương Thức Thanh Toán</h1><br>
                <div class="radio_thanhtoan" id = pttt>
                    <p><input type="radio" name="phuongthuctt" value="khinhan"> Khi nhận hàng</p>
                </div>
            <h2>Chọn Phương Thức Giao Hàng</h2>
            <div class="form-group row" id = pt_giao_hang>
                <p><input type="radio" name="phuongthucgh" value="ghnhanh"> Giao hàng nhanh</p>
                <p><input type="radio" name="phuongthucgh" value="ghtietkiem"> Giao hàng tiết kiệm</p>
                <p><input type="radio" name="phuongthucgh" value="vnpost"> VN Post</p>
                <p><input type="radio" name="phuongthucgh" value="viettel"> Viettel</p>
             </div>
        </div>
    </div>
     <div class="lienhe_btn-3">
            <a href="giohang.php"class="btn-foot_1">Trở Lại</a>
            <a onclick="XacNhan()"class="btn-foot_2">Xác Nhận</a>
     </div>
     <script>
         function XacNhan(){
            $.ajax({
                    type: "POST",
                    url: "dathang_process.php",
                    data:{ten:$("#name").val() , address:$("#address").val() , phone:$("#phone").val() , email:$("#email").val() , request:$("#content").val() , pttt:$("#pttt input[type='radio']:checked").val() , ptgh:$("#pt_giao_hang input[type='radio']:checked").val()} ,
                    success: function(data, textStatus, xhr){
                    if(xhr.status == 200){
                      window.location.href = 'donhang.php';
                    }
                }
            });
         }
     </script>
<?php include 'foot.php' ?>
