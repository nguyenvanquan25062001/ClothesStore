<?php 
     $conn = mysqli_connect('localhost','root','','shop');
     if(!$conn){
         die("Không thể kết nối");
     }
    $sql = "SELECT * FROM user, chitietdonhang,donhang,sanpham WHERE chitietdonhang.MaDH=donhang.MaDH and user.username = donhang.username and sanpham.MaSP = chitietdonhang.MaSP";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo $result->error;
        die();
    }
   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container col" style="margin-top: 20px; font-size: 1.75em; background-color: #fff"  >
        <a href="javascript:history.go(-1)"><i class="fa-solid fa-arrow-left-long"></i> Quay lại</a>
        <div class="manage-user" style="border: 1px solid #000; margin-top:20px">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã đơn hàng</th>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col"></th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Email</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">SĐT</th>
                        <th scope="col">Bên vận chuyển</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $STT = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($STT==0)
                            $preDH=$row['MaDH'];
                        if (($STT==0) || ($preDH != $row['MaDH'])){ 
                            $STT++;
                        ?>
                            <tr style="background-color: lightgray">
                                <td><?php echo $STT?></td>
                                <td scope="col"><?php echo $row['MaDH']?></td>
                                <td scope="col"><?php echo $row['TenDH']?></td>
                                <td scope="col" colspan="4"></td>
                                <td scope="col"><?php echo $row['totalmoney']?></td>
                                <td scope="col"><?php echo $row['Email']?></td>
                                <td scope="col"><?php echo $row['address']?></td>
                                <td scope="col"><?php echo $row['phone']?></td>
                                <td scope="col"><?php echo $row['delivery']?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td colspan="3"></td>
                            <td><?php echo '<img src="./img/'.$row['anh'].'" style="height:100px"'?></td>
                            <td><?php echo $row['TenSP']?></td>
                            <td><?php echo $row['SoLuong']?></td>
                            <td><?php echo $row['Gia']?></td>
                        </tr>
                    <?php
                        $preDH = $row['MaDH'];
                    } ?>
                </tbody>
            </table>    
        </div>
    </div>
</body>
</html>