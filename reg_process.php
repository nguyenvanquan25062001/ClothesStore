<?php 
    // Lấy thông tin đã nhập
    $username = $_POST['username'];
    $email =$_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['password2'];
    // Kết nối db
    $conn = mysqli_connect('localhost','root','','shop');
    if(!$conn){
        die("Không thể kết nối");
    }
    if ($pass1 != $pass2){
?>
        <script>
            alert('2 mật khẩu không khớp.');
            history.back();
        </script>
<?php
    }else{
        $sql = "SELECT * FROM user WHERE email = '$email'";
        if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0){
?>
            <script>
                alert('Email đã tồn tại.');
                history.back();
            </script>
<?php
        }else{
            $sql = "SELECT * FROM user WHERE username = '$username'";
            if(mysqli_num_rows(mysqli_query($conn,$sql)) != 0){
?>
                <script>
                    alert('Tên người dùng đã tồn tại.');
                    history.back();
                </script>
<?php
            }else{
                $pass_md5 = md5($pass1);
                $sql = "INSERT INTO user VALUES ('$username','$pass_md5','$email', '0')";
                $result = mysqli_query($conn, $sql);?>
                <script>
                    alert('Đăng ký thành công.');
                    location.href = "./login.php";
                </script>
<?php
            }
        }
    }
?>