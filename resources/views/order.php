<?php
session_start(); 
include 'include/openConnection.php';
$conn->set_charset('utf8');
if (isset($_SESSION['uname'])) {
    $username = $_SESSION['uname'];
    $sqlcid = "SELECT * FROM user WHERE username = '$username'";
    $resultcid = mysqli_query($conn, $sqlcid);
    if ($resultcid) {
        $rowcid = $resultcid->fetch_assoc();
        $user_id = $rowcid['id'];
        $sizearr = 0;
        $sqlche = "SELECT * FROM cart WHERE user_id = '$user_id'";
        $resultche = mysqli_query($conn, $sqlche);
        if ($resultche) {
            while ($rowche = $resultche->fetch_assoc()) {
                $arr[] = $rowche;
                $sizearr = $sizearr + 1;
            }
        } else {
            echo '<script>alert("Có lỗi xảy ra.\nĐặt hàng thất bại.");window.location.href = "index.php";</script>';
        }
        if ($sizearr > 0) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            foreach ($arr as $cart2) {
                $d = $cart2['id'];
                $a = $cart2['user_id'];
                $b = $cart2['product_id'];
                $c = $cart2['quantity'];
                $now = getdate();
                $currentTime = $now["hours"] . ":" . $now["minutes"];
                $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
                $date = $currentDate . " " . $currentTime;
                $e = "Chưa xác nhận";
                $sql = "INSERT INTO transaction (user_id, product_id, quantity, created, status) VALUES ('$a', '$b', '$c', '$date', '$e')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $sql2 = "DELETE FROM cart WHERE id = '$d'";
                    $result2 = mysqli_query($conn, $sql2);
                    if ($result2) {
                        
                    } else {
                        echo '<script>alert("Có lỗi xảy ra.\nĐặt hàng thất bại.");window.location.href = "cart.php";</script>';
                    }
                } else {
                    echo '<script>alert("Có lỗi xảy ra.\nĐặt hàng thất bại.");window.location.href = "cart.php";</script>';
                }
            }
            echo '<script>alert("Cảm ơn bạn đã mua hàng tại Tokuda Furniture!\nNhân viên của chúng tôi sẽ liên lạc với bạn qua điện thoại và email để xác nhận giao dịch.\nChúc bạn một ngày tốt lành!");window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Giỏ hàng của bạn còn trống.\nKhông thể đặt hàng\n");window.location.href = "cart.php";</script>';
        }
    }
}
else {
    echo '<script>alert("Chưa đăng nhập");window.location.href = "login.php";</script>';
}
include 'include/closeConnection.php';
?>