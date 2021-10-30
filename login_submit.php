<?php
    session_start();
    include 'connect.php';
    if( isset($_POST['submit-dangnhap']) && $_POST['username'] != '' && $_POST['password'] != ''){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $user = mysqli_query($conn,$sql);
        if( mysqli_num_rows($user) > 0){
            echo("Đăng nhập thành công");
            $_SESSION['user'] = $username;
        }else{
            $_SESSION["thongbao"] = "Tài khoản hoặc mật khẩu không chính xác";
            header("location:login.php");
        }
    }else{
        $_SESSION["thongbao"] = "Vui lòng nhập tài khoản và mật khẩu";
        header("location:login.php");
    }

    if( isset($_POST['submit-dangky'])){
        header("location:register.php");
    }
?>