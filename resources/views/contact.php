<?php session_start(); ?>
<?php
if (isset($_POST['submit'])) {
    include 'include/openConnection.php';
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $conn->set_charset('utf8');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $content = $_POST['content'];
    $status = 'Chưa xử lý';
    $now = getdate();
    $currentTime = $now["hours"] . ":" . $now["minutes"];
    $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
    $date = $currentDate . " " . $currentTime;
    $sql = "INSERT INTO contact (name, email, phone, content, status, created) VALUES ('$name', '$email', '$phone', '$content', '$status', '$date')";
    if (mysqli_query($conn, $sql)) {
        echo '
        <script>
            alert("Cảm ơn bạn.\nTokuda Furniture đã ghi nhận phản hồi của bạn.\n");
            window.location.href = "index.php";
        </script>';
        } else {
        echo '
        <script>
            alert("Có lỗi xảy ra.\nPhản hồi của bạn chưa được ghi nhận.\n");
            window.location.href = "contact.php";
        </script>';
    }
    include 'include/closeConnection.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Liên hệ | Tokuda Furniture</title>
        <?php include 'include/head.php'; ?>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <div id="content">
            <?php include 'include/header.php'; ?>
            <div class="contact">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li class="active">Liên hệ</li>
                    </ol>
                    <div class="contact-head">
                        <h2>LIÊN HỆ</h2>
                        <form action="" method="POST">
                            <div class="col-md-6 contact-left">
                                <label for="name">Họ và tên:</label>
                                <input type="text" name="name" required="" />
                                <label for="email">Email:</label>
                                <input type="text" name="email" required="" />
                                <label for="phone">Số điện thoại:</label>
                                <input type="text" name="phone" />
                            </div>
                            <div class="col-md-6 contact-right">
                                <label for="content">Nội dung phản hồi</label>
                                <textarea name="content" required=""> </textarea>
                                <input type="submit" name="submit" value="Gửi">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div class="address">
                        <h3>ĐỊA CHỈ CỦA CHÚNG TÔI</h3>
                        <div class="locations">				 
                            <ul>
                                <li><span></span></li>					 					
                                <li>
                                    <div class="address-info">	
                                        <h4>Đà Nẵng</h4>
                                        <p>Số 487, đường Tôn Đức Thắng</p>
                                        <p>Đà Nẵng, Việt Nam,</p>
                                        <p>Phone: 0123 456 789</p>
                                        <p>Mail: <a href="mailto:tokudafurniture@gmail.com">tokudafurniture@gmail.com</a></p>
                                    </div>
                                </li>				
                            </ul>	

                        </div>			 
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
