<?php include 'head.php';
 $conn = mysqli_connect('localhost','root','','shop');
 if(!$conn){
     die("Không thể kết nối");
 }
 $sql="SELECT * FROM sanpham";
 $result=mysqli_query($conn, $sql); 
?>
<h1 class="bg-success" style="text-align: center;font-size: 80px;">Quản lý Quần Áo</h1>

<div class="container">
        <a href="./home_admin.php" class="fa fa-arrow-left" style="margin-right: 100px"> Quay lại</a>
        <a class="btn btn-success" href="update.php"><i class="fa-solid fa-plus"></i> Thêm sản phẩm.</a>    
        <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên</th>
                <th scope="col">Loại</th>
                <th scope="col">Size</th>
                <th scope="col">Màu</th>
                <th scope="col">Giá</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            
            <tbody>
                <?php
                    if (mysqli_num_rows($result)>0){
                        while ($row=mysqli_fetch_assoc($result)){
                            echo '<tr">';
                            echo '<th scope="row">'.$row['MaSP'].'</th>';
                            echo '<th scope="row"><img src="img/'.$row['anh'].'" height="100"></th>';
                            echo '<th scope="row">'.$row['TenSP'].'</th>';
                            echo '<th scope="row">'.$row['LoaiSP'].'</th>';
                            echo '<th scope="row">'.$row['Size'].'</th>';
                            echo '<th scope="row">'.$row['Mau'].'</th>';
                            echo '<th scope="row">'.$row['Gia'].'</th>';
                            echo '<td><a href="update_sp_form.php?id='.$row['MaSP'].'"><i class="fas fa-edit fa-lg"></i></a> </td>';     
                            echo '<td><a style="color:red" href="del_sp.php?id='.$row['MaSP'].'"><i class="fas fa-trash fa-lg"></i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
      </div>
<?php include 'foot.php' ?>