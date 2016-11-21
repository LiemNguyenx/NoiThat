<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng xuât | Tokuda Furniture</title>
    </head>
    <body>
        <?php 
        if (isset($_SESSION['uname'])) {
            unset($_SESSION['uname']);
            echo '<script>window.location.href = "index.php";
            alert("Đăng xuất thành công");</script>';
        }
        else {
            echo '<script>window.location.href = "index.php";
            alert("Bạn chưa đăng nhập để có thể đăng xuất");</script>';
        }
        ?>
    </body>
</html>
