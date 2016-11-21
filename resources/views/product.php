<?php session_start(); ?>
<?php 
    include 'include/openConnection.php';
    $conn->set_charset('utf8');
    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $sqlinc = "UPDATE product SET view = view + 1 WHERE id = '$product_id'";
        $resultinc = mysqli_query($conn, $sqlinc);
        if ($resultinc) {}
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
        }
        $sql = "SELECT * FROM product WHERE id = '$product_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $rowsp = $result->fetch_assoc();
            $product_name = $rowsp['name'];
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
        }
    }
    else {
        echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
    }
    if (isset($_POST['addToCart'])) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $conn->set_charset('utf8');
        if (isset($_SESSION['uname'])) $username = $_SESSION['uname'];
        $sqlcid = "SELECT * FROM user WHERE username = '$username'";
        $resultcid = mysqli_query($conn, $sqlcid);
        if ($resultcid) {
            $rowcid = $resultcid->fetch_assoc();
            $user_id = $rowcid['id'];
            $sqlche = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
            $resultche = mysqli_query($conn, $sqlche);
            if ($resultche) {
                if (mysqli_num_rows($resultche) > 0) {
                    echo '<script>alert("Sản phẩm này đã có trong giỏ hàng của bạn.\n");window.location.href = "index.php";</script>';
                }
                else {
                    $now = getdate();
                    $currentTime = $now["hours"] . ":" . $now["minutes"];
                    $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
                    $date = $currentDate . " " . $currentTime;
                    $sqladd = "INSERT INTO cart (user_id, product_id, created) VALUES ('$user_id', '$product_id', '$date')";
                    if (mysqli_query($conn, $sqladd)) {
                        echo '<script>alert("Sản phẩm '. $product_name .' đã được thêm vào giỏ hàng thành công.\n");window.location.href = "index.php";</script>';
                    }
                    else {
                        echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
                    }
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
        <?php include 'include/head.php'; 
        echo '<title>' . $product_name . ' | Tokuda Furniture</title>';
        ?>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <?php include 'include/header.php'; ?>
        <div class="single-sec">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="active">Sản phẩm</li>
                </ol>
                <!-- start content -->	

                <div class="single_left">
                    <div class="slider">
                        <ul class="rslides" id="slider1">
                            <?php
                            echo '<li><image src="resources/default/images/'. $rowsp['image_link'] .'" ></li>';
                            if (!($rowsp['image_link2'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link2'] .'" ></li>';
                            if (!($rowsp['image_link3'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link3'] .'" ></li>';
                            if (!($rowsp['image_link4'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link4'] .'" ></li>';
                            if (!($rowsp['image_link5'] === NULL)) echo '<li><image src="resources/default/images/'. $rowsp['image_link5'] .'" ></li>';
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="single-right">
                    <?php echo '<h3>'. $rowsp['name'] .'</h3>' ?>
                    <?php echo '<div class="id"><h4>ID: '. $rowsp['id'] .'</h4></div>' ?>
                    <div class="cost">
                        <div class="prdt-cost">
                            <ul>
                                <li>Giá bán</li>
                                <?php echo '<li class="active">'. number_format($rowsp['price']) .' VNĐ</li>' ?>
                                <div class="registration_form"><form action="" method="POST"><input type="submit" id="buy" name="addToCart" value="MUA"></form></div>
                                <a href="login.php" id="needlogin">BẠN CẦN PHẢI ĐĂNG NHẬP ĐỂ MUA HÀNG</a> 
                            </ul>
                            <?php 
                            if (isset($_SESSION['uname'])) {
                                echo '
                                    <script>
                                        $("#needlogin").hide();
                                        $("#buy").show();
                                    </script>';
                            }
                            else {
                                echo '
                                    <script>
                                        $("#needlogin").show();
                                        $("#buy").hide();
                                    </script>';
                            }
                            ?>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="item-list">
                        <ul>
                            <?php echo '<li>Chất liệu: '. $rowsp['material'] .'</li>' ?>
                            <?php echo '<li>Kích thước: '. $rowsp['size'] .'</li>' ?>
                            <?php echo '<li>Tình trạng: '. $rowsp['stock'] .'</li>' ?>
                            <?php echo '<li>Lượt xem: '. $rowsp['view'] .'</li>' ?>
                        </ul>
                    </div>
                    <div class="single-bottom1">
                        <h6>Mô tả</h6>
                        <?php echo '<p class="prod-desc">'. $rowsp['description'] .'</p>' ?>
                        <br/>
                    </div>					 
                </div>
                <div class="clearfix"></div>			  					               
            </div>	     				
            <div class="clearfix"></div> 
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
