<?php
session_start();
header('Content-type:text/html;charset=utf-8');
if(isset($_SESSION['user'])){
        session_unset();//free all session variable
        session_destroy();//销毁一个会话中的全部数据
        header('location:../home.php');
    }else{
        header('location:../home.php');
    }
?>