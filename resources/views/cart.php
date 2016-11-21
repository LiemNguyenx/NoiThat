<?php session_start(); ?>
<?php 
    include 'include/openConnection.php';
    $conn->set_charset('utf8');
    if (isset($_SESSION['uname'])) {
        $username = $_SESSION['uname'];
        if (isset($_POST['delete'])) {
            $cart_id = $_POST['cartid'];
            $prodname = $_POST['prodname'];
            $sqldel = "DELETE FROM cart WHERE id = '$cart_id'";
            $resultdel = mysqli_query($conn, $sqldel);
            if ($resultdel) {   
                echo '<script>alert("Đã xóa sản phẩm '. $prodname .' ra khỏi giỏ hàng của bạn.\n");window.location.href = "cart.php";</script>';
            }
            else {
                echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "cart.php";</script>';
            }
        }
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
        <title>Giỏ hàng của tôi | Tokuda Furniture</title>
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
                    <li class="active">Giỏ hàng</li>
                </ol>		
                <div style="text-transform: uppercase;font-size: 1.8em;font-family: 'Lanvanderia', serif;letter-spacing: 2px;color: #795548;">GIỎ HÀNG CỦA TÔI</div>
                <div class="cart-items">
                    <hr/>
                    <?php
                        $sum = 0;
                        if ($sizearr > 0) {
                        foreach ($arr as $cart) {
                            $product_id = $cart['product_id'];
                            $sqlprod = "SELECT * FROM product WHERE id = '$product_id'";
                            $resultprod = mysqli_query($conn, $sqlprod);
                            if ($resultprod) {
                                $rowsp = $resultprod->fetch_assoc();
                                $sum = $sum + $rowsp['price']*$cart['quantity'];
                                echo'
                                <div class="cart-header">
                                    <div class="close1">
                                        <form method="POST" action="">
                                            <input type="hidden" name="cartid" value="'. $cart['id'] .'">
                                            <input type="hidden" name="prodname" value="'. $rowsp['name'] .'">
                                            <input type="submit" name="delete" value="X">
                                        </form>
                                    </div>
                                    <div class="cart-sec">
                                        <div class="cart-item cyc">
                                            <image src="resources/default/images/'. $rowsp['image_link'] .'" >
                                        </div>
                                        <div class="cart-item-info">
                                            <h3>'. $rowsp['name'] .'<span>ID: '. $rowsp['id'] .'</span></h3>
                                            <h4><span>Đơn giá: </span>'. number_format($rowsp['price']) .' VNĐ</h4>
                                            <p class="qty">Số lượng: </p>
                                            <form method="POST" action="editquantity.php">
                                                <input type="hidden" name="cartid" value="'. $cart['id'] .'">
                                                <input type="hidden" name="prodid" value="'. $rowsp['id'] .'">
                                                <input type="text" name="quantity" readonly="" value="'. $cart['quantity'] .'">
                                                <input type="submit" name="submit" value="Sửa số lượng">
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="delivery">
                                            <p>Phí vận chuyển: Miễn phí</p>							 
                                        </div>						
                                    </div>
                                </div>';
                            }
                            else {
                                echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
                            }   
                        }
                        }
                        else {
                            echo '<h4>Chưa có sản phẩm nào trong giỏ hàng.</h4>';
                        }
                    ?>
                </div>

                <div class="cart-total">
                    <div class="price-details">
                        <h3>Hóa đơn</h3>
                        <span>Tổng cộng</span>
                        <span class="total">
                            <form>
                                <?php echo number_format($sum) ?> VNĐ
                            </form>
                        </span>
                        <span>Chiết khấu</span>
                        <span class="total">---</span>
                        <span>Phí vận chuyển</span>
                        <span class="total">---</span>
                        <div class="clearfix"></div>				 
                    </div>	
                    <h4 class="last-price">Thành tiền</h4>
                    <span class="total final">
                        <form>
                            <?php echo number_format($sum) ?> VNĐ
                        </form>
                    </span>
                    <div class="clearfix"></div>
                    <hr/>
                    <a class="continue" onclick="dathang()">Đặt hàng</a>
                    <script>
                        function dathang() {
                            var r = confirm("Bạn có muốn đặt toàn bộ hàng trong giỏ không?");
                            if (r == true) {
                                window.location.href = "order.php";
                            } 
                        }
                    </script>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
