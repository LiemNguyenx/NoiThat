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
            echo '
            <script>
                alert("Đăng nhập thành công.\nChào mừng trở lại Tokuda Furniture.\n");
                window.location.href = "index.php";
            </script>';
        } else {
            echo '
            <script>
                alert("Tên đăng nhập hoặc mật khẩu không đúng.\nĐăng nhập thất bại.\n");
                window.location.href = "login.php";
            </script>';
        }
    } else {
        echo '
        <script>
            alert("Có lỗi xảy ra.\nĐăng nhập thất bại.\n");
            window.location.href = "login.php";
        </script>';
    }
} else if (isset($_POST['submit1'])) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $conn->set_charset('utf8');
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if (!($password === $repassword)) {
        echo '
        <script>
            alert("Mật khẩu nhập lại không khớp.\nĐăng ký thất bại.\n");
            window.location.href = "account.php";
        </script>';
    } else {
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo '
                <script>
                    alert("Email đã được sử dụng.\nĐăng ký thất bại.\n");
                    window.location.href = "account.php";
                </script>';
            } else {
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        echo '
                        <script>
                            alert("Tên đăng nhập đã được sử dụng.\nĐăng ký thất bại.\n");
                            window.location.href = "account.php";
                        </script>';
                    } else {
                        $now = getdate();
                        $currentTime = $now["hours"] . ":" . $now["minutes"];
                        $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
                        $date = $currentDate . " " . $currentTime;
                        $sql = "INSERT INTO user (username, fullname, email, password, phone, address, created) VALUES ('$username', '$fullname', '$email', '$password', '$phone', '$address', '$date')";
                        if (mysqli_query($conn, $sql)) {
                            echo '
                            <script>
                                alert("Đăng ký thành công.\nChào mừng bạn đến với Tokuda Furniture.\nMời vào trang đăng nhập.\n");
                                window.location.href = "login.php";
                            </script>';
                            } else {
                            echo '
                            <script>
                                alert("Có lỗi xảy ra.\nĐăng ký thất bại.\n");
                                window.location.href = "account.php";
                            </script>';
                        }
                    }
                } else {
                    echo '
                    <script>
                        alert("Có lỗi xảy ra.\nĐăng ký thất bại.\n");
                        window.location.href = "account.php";
                    </script>';
                }
            }
        } else {
            echo '
            <script>
                alert("Có lỗi xảy ra.\nĐăng ký thất bại.\n");
                window.location.href = "account.php";
            </script>';
        }
    }
}
include 'include/closeConnection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tạo tài khoản | Tokuda Furniture</title>
        <?php include 'include/head.php'; ?>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <div id="content">
            <?php include 'include/header.php'; ?>
            <?php
            if (isset($_SESSION['uname'])) {
            echo '
            <script>
                window.location.href = "index.php";
            </script>';
            } ?>
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="active">Tạo tài khoản</li>
                </ol>
                <div class="registration">
                    <div class="registration_left">
                        <h2>Người dùng mới? <span> Tạo một tài khoản </span></h2>
                        <script>
                            (function () {

                                // Create input element for testing
                                var inputs = document.createElement('input');

                                // Create the supports object
                                var supports = {};

                                supports.autofocus = 'autofocus' in inputs;
                                supports.required = 'required' in inputs;
                                supports.placeholder = 'placeholder' in inputs;

                                // Fallback for autofocus attribute
                                if (!supports.autofocus) {

                                }

                                // Fallback for required attribute
                                if (!supports.required) {

                                }

                                // Fallback for placeholder attribute
                                if (!supports.placeholder) {

                                }

                                // Change text inside send button on submit
                                var send = document.getElementById('register-submit');
                                if (send) {
                                    send.onclick = function () {
                                        this.innerHTML = '...Sending';
                                    }
                                }

                            })();
                        </script>
                        <div class="registration_form">
                            <!-- Form -->
                            <form action="" method="POST">
                                <div>
                                    <label>
                                        <label for="username">Tên tài khoản:</label>
                                        <input type="text" name="username" required="" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="fullname">Họ và tên:</label>
                                        <input type="text" name="fullname" required="" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" required="" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="phone">SĐT:</label>
                                        <input type="text" name="phone" required="" />
                                    </label>
                                </div>	
                                <div>
                                    <label>
                                        <label for="address">Địa chỉ:</label>
                                        <input type="text" name="address" required="" />
                                    </label>
                                </div>					
                                <div>
                                    <label>
                                        <label for="password">Mật khẩu:</label>
                                        <input type="password" name="password" required="" />
                                    </label>
                                </div>						
                                <div>
                                    <label>
                                        <label for="repassword">Xác nhận mật khẩu:</label>
                                        <input type="password" name="repassword" required="" />
                                    </label>
                                </div>	
                                <div>
                                    <input type="submit" name="submit1" value="Đăng ký">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="registration_left">
                        <h2>Đã có tài khoản</h2>
                        <div class="registration_form">
                            <!-- Form -->
                            <form action="" method="POST">
                                <div>
                                    <label>
                                        <label for="username">Tên đăng nhập:</label>
                                        <input type="text" name="username" required="" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="password">Mật khẩu:</label>
                                        <input type="password" name="password" required="" />
                                    </label>
                                </div>						
                                <div>
                                    <input type="submit" name="submit2" value="Đăng nhập">
                                </div>
                            </form>
                            <!-- /Form -->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
