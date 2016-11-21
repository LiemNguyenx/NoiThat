<?php session_start(); ?>
<?php
include 'include/openConnection.php';
if (isset($_POST['submit2'])) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $conn->set_charset('utf8');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['uname'] = $username;
            echo '<script>
                alert("Đăng nhập thành công.\nChào mừng trở lại Tokuda Furniture.\n");
                window.location.href = "index.php";
            </script>';
        } else {
            echo '<script>
                alert("Tên đăng nhập hoặc mật khẩu không đúng.\nĐăng nhập thất bại.\n");
                window.location.href = "login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Có lỗi xảy ra.\nĐăng nhập thất bại.\n");
            window.location.href = "login.php";
        </script>';
    }
}
include 'include/closeConnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập | Tokuda Furniture</title>
        <?php include 'include/head.php'; ?>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <div id="content">
            <?php include 'include/header.php'; ?>
            <?php
            if (isset($_SESSION['uname'])) {
                echo '<script>
                window.location.href = "index.php";
                </script>';
            }?>
            <div class="login_sec">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li class="active">Đăng nhập</li>
                    </ol>
                    <h2>Đăng nhập</h2>
                    <div class="col-md-6 log">			 
                        <p>Chào mừng bạn đã đến với Tokuda Furniture, hãy điền vào bên dưới để tiếp tục.</p>
                        <form action="" method="POST">
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" name="username" required="" />
                            <label for="password">Mật khẩu:</label>
                            <input type="password" name="password" required="" />				
                            <input type="submit" name="submit2" value="Đăng nhập">
                        </form>	

                    </div>
                    <div class="col-md-6 login-right">
                        <h3>Đăng ký mới</h3>
                        <p>Thông qua việc đăng ký tài khoản, Bạn sẽ được mua hàng và đặt hàng cũng như theo dõi danh sách đơn đặt hàng và nhiều tiện ích nữa.</p>
                        <a class="acount-btn" href="account.php">Tạo tài khoản</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
