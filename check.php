<?php 
    // include 'lib_db.php';
    include 'connect.php';
    // include 'login_submit.php';
    // session_start();
    // print_r($_SESSION).exit();
    function check_login(){
        // if(isset($_SESSION['username'])){
        //     $user = $_SESSION['username'];
        //     $level = $_SESSION['level'];
        //     setcookie($user,$level,time()+300);
        // }
        if (isset($_COOKIE['admin'])){
            print_r($_COOKIE).exit();
        }
    }
   
?>