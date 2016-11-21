<?php session_start(); ?>
<?php
    include 'include/openConnection.php';
    $conn->set_charset('utf8');
    if (isset($_SESSION['uname'])) {
        $username = $_SESSION['uname'];
        $sqltid = "SELECT * FROM user WHERE username = '$username'";
        $resulttid = mysqli_query($conn, $sqltid);
        if ($resulttid) {
            $rowtid = $resulttid->fetch_assoc();
            $user_id = $rowtid['id'];
            $sizearr = 0;
            $sqltra = "SELECT * FROM transaction WHERE user_id = '$user_id'";
            $resulttra = mysqli_query($conn, $sqltra);
            if ($resulttra) {
                while ($rowtra = $resulttra->fetch_assoc()) {
                    $arr[] = $rowtra;
                    $sizearr = $sizearr + 1;
                }
            }
            else {
                echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
            }
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
        }
    }
    include 'include/closeConnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'include/head.php'; ?>
        <title>Lịch sử giao dịch | Tokuda Furniture</title>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <?php include 'include/header.php'; ?>
        <?php
        if (!(isset($_SESSION['uname']))) { echo '<script>window.location.href = "login.php";</script>'; } 
        ?>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Lịch sử giao dịch</li>
            </ol>	
            <div style="text-transform: uppercase;font-size: 1.8em;font-family: 'Lanvanderia', serif;letter-spacing: 2px;color: #795548;">Lịch sử giao dịch của tôi</div><br/>
                <hr/>
                <table class="table-bordered" style="width:100%">
                    <tr style="padding: 15px">
                        <th style="padding: 15px">ID</th>
                        <th style="padding: 15px">Tên sản phẩm</th>
                        <th style="padding: 15px">Số lượng</th>
                        <th style="padding: 15px">Đơn giá</th>
                        <th style="padding: 15px">Ngày mua</th>
                        <th style="padding: 15px">Xác nhận</th>
                    </tr>
                    <?php
                    if ($sizearr > 0) {
                        foreach ($arr as $trans) {
                            $product_id = $trans['product_id'];
                            $sqlprod = "SELECT * FROM product WHERE id = '$product_id'";
                            $resultprod = mysqli_query($conn, $sqlprod);
                            if ($resultprod) {
                                $rowsp = $resultprod->fetch_assoc();
                                echo'<tr style="padding: 15px">
                                <th style="padding: 15px">'. $trans['id'] .'</th>
                                <th style="padding: 15px">'. $rowsp['name'] .'</th>
                                <th style="padding: 15px">'. $trans['quantity'] .'</th>
                                <th style="padding: 15px">'. number_format($rowsp['price']) .' VNĐ</th>
                                <th style="padding: 15px">'. $trans['created'] .'</th>
                                <th style="padding: 15px">'. $trans['status'] .'</th>    
                                </tr>';
                            }
                            else {
                                echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
                            }
                        }
                    }
                    ?>
                </table>
            <hr/>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
