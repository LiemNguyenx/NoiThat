<?php session_start(); ?>
<?php
    include 'include/openConnection.php';
    $conn->set_charset('utf8');
    if (isset($_POST['submit'])) {
        $cartid = $_POST['cartid'];
        $prodid = $_POST['prodid'];
        $quantity = $_POST['quantity'];
        $sqlquan = "SELECT * FROM product WHERE id = '$prodid'";
        $resultquan = mysqli_query($conn, $sqlquan);
        if ($resultquan) {
            $rowquan = $resultquan->fetch_assoc();
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "cart.php";</script>';
        }
    }
    else if (isset($_POST['submitfix'])) {
        $cart_id = $_POST['id'];
        $quant = $_POST['quant'];
        $sqlfix = "UPDATE cart SET quantity = '$quant' WHERE id = '$cart_id'";
        $resultfix = mysqli_query($conn, $sqlfix);
        if ($resultfix) {
            echo '<script>alert("Chỉnh sửa thành công.\n");window.location.href = "cart.php";</script>';
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "cart.php";</script>';
        }
    }
    else {
        echo '<script>window.location.href = "index.php";</script>';
    }
    include 'include/closeConnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'include/head.php'; ?>
        <title>Sửa số lượng | Tokuda Furniture</title>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <?php include 'include/header.php'; ?>
        <?php
        if (!(isset($_SESSION['uname']))) { echo '<script>window.location.href = "login.php";</script>'; } 
        ?>
        <div class="cart_main">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="active">Sửa số lượng</li>
                </ol>			
                <div class="single_left">
                    <div style="text-transform: uppercase;font-size: 1.8em;font-family: 'Lanvanderia', serif;letter-spacing: 2px;color: #795548;">Sửa số lượng sản phẩm</div>
                    <hr/>
                    <div class="registration_form">
                        <form method="POST" action="">
                            <div>
                                <label>
                                    <label for="id">ID Giỏ hàng:</label>
                                    <input type="text" name="id" readonly="" value="<?php echo $cartid; ?>" />
                                </label>
                            </div>
                            <div>
                                <label>
                                    <label>Tên đăng nhập:</label>
                                    <input type="text" readonly="" value="<?php echo $_SESSION['uname']; ?>" />
                                </label>
                            </div>
                            <div>
                                <label>
                                    <label>Tên sản phẩm:</label>
                                    <input type="text" readonly="" value="<?php echo $rowquan['name']; ?>" />
                                </label>
                            </div>
                            <div>
                                <label>
                                    <label>Đơn giá:</label>
                                    <input type="text" readonly="" value="<?php echo number_format($rowquan['price'])."VNĐ" ?>" />
                                </label>
                            </div>	
                            <div>
                                <label>
                                    <label for="quant">Số lượng:</label>
                                    <input type="number" name="quant" required="" value="<?php echo $quantity; ?>" />
                                </label>
                            </div>
                            <div>
                                <input type="submit" name="submitfix" value="Chỉnh sửa">
                            </div>
                            <hr/>
                        </form>
                    </div>

                </div>
                <div class="single-right">
                    <div class="slider">
                        <ul class="rslides" id="slider1">
                            <?php
                            echo '<li><image src="resources/default/images/'. $rowquan['image_link'] .'" ></li>';
                            if (!($rowquan['image_link2'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link2'] .'" ></li>';
                            if (!($rowquan['image_link3'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link3'] .'" ></li>';
                            if (!($rowquan['image_link4'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link4'] .'" ></li>';
                            if (!($rowquan['image_link5'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link5'] .'" ></li>';
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
