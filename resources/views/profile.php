<?php session_start(); ?>
<?php
if (!(isset($_SESSION['uname']))) {
    echo '<script>window.location.href = "index.php";</script>';
}
include 'include/openConnection.php';
$conn->set_charset('utf8');
$username = $_SESSION['uname'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $row3 = $result->fetch_assoc();
    } else {
        echo '<script>alert("Không tìm thấy tên đăng nhập này.\nTự động đăng xuất.\n");window.location.href = "logout.php";</script>';
    }
} else {
    echo '<script>alert("Có lỗi xảy ra.\nVề lại trang chủ.\n");window.location.href = "index.php";</script>';
}
if (isset($_POST['submit'])) {
    $id = $row['id'];
    $pass = $row['password'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $newpassword = $_POST['newpassword'];
    $repassword = $_POST['repassword'];
    if (!($pass === $password)) {
        echo '<script>alert("Mật khẩu cũ không khớp.\nChỉnh sửa thất bại.\n");window.location.href = "profile.php";</script>';
    }
    else if (!($newpassword === $repassword)) {
        echo '<script>alert("Mật khẩu mới không khớp.\nChỉnh sửa thất bại.\n");window.location.href = "profile.php";</script>';
    }
    else {
        $sql = "UPDATE user SET fullname = '$fullname', phone = '$phone', address = '$address', password = '$newpassword' WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script>alert("Chỉnh sửa thành công.\n");window.location.href = "profile.php";</script>';
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\nChỉnh sửa thất bại.\n");window.location.href = "profile.php";</script>';
        }
    }
}
include 'include/closeConnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cá nhân | Tokuda Furniture</title>
        <?php include 'include/head.php'; ?>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <?php include 'include/header.php'; ?>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Thông tin tài khoản</li>
            </ol>
            <div style="text-transform: uppercase;font-size: 1.8em;font-family: 'Lanvanderia', serif;letter-spacing: 2px;color: #795548;">Thông tin tài khoản</div><br/>
            <div style="border-top: 1px solid #eee;padding: 1em 0;">
                <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#profile">Thông tin tài khoản</a></li>
                    <li><a data-toggle="pill" href="#change">Chỉnh sửa tài khoản</a></li>
                </ul>
                <br/>
                <div class="tab-content">
                    <div id="profile" class="tab-pane fade in active">
                        <div style="font-family: Arial,Helvetica,sans-serif;font-size: 22px;font-weight: bold;padding-bottom: 10px;color:#3B3B3B;">Thông tin tài khoản</div>
                        <br/>
                        <div style="font-family: Arial,Helvetica,sans-serif;font-size: 15px;padding-bottom: 10px;color:#3B3B3B;">
                            <table>
                                <tbody>
                                <tr>
                                    <td style="padding-bottom: 10px; font-weight: bold">- Tài khoản:&#160;&#160;&#160; </td>
                                    <td style="padding-bottom: 10px"><label><?php echo $row3['username']; ?></label></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 10px; font-weight: bold">- Email:&#160;&#160;&#160; </td>
                                    <td style="padding-bottom: 10px"><label><?php echo $row3['email']; ?></label></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 10px; font-weight: bold">- Họ và tên:&#160;&#160;&#160; </td>
                                    <td style="padding-bottom: 10px"><label><?php echo $row3['fullname']; ?></label></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 10px; font-weight: bold">- Địa chỉ:&#160;&#160;&#160; </td>
                                    <td style="padding-bottom: 10px"><label><?php echo $row3['address']; ?></label></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 10px; font-weight: bold">- Điện thoại:&#160;&#160;&#160; </td>
                                    <td style="padding-bottom: 10px"><label><?php echo $row3['phone']; ?></label></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 10px; font-weight: bold">- Ngày lập:&#160;&#160;&#160; </td>
                                    <td style="padding-bottom: 10px"><label><?php echo $row3['created']; ?></label></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="change" class="tab-pane fade">
                        <div class="registration_left">
                        <div class="registration_form">
                            <!-- Form -->
                            <form method="POST" action="">
                                <div>
                                    <label>
                                        <label for="username">Tên tài khoản:</label>
                                        <input type="text" name="username" readonly="" value="<?php echo $row3['username']; ?>" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="fullname">Họ và tên:</label>
                                        <input type="text" name="fullname" required="" value="<?php echo $row3['fullname']; ?>" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" readonly="" value="<?php echo $row3['email']; ?>" />
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <label for="phone">SĐT:</label>
                                        <input type="text" name="phone" required="" value="<?php echo $row3['phone']; ?>" />
                                    </label>
                                </div>	
                                <div>
                                    <label>
                                        <label for="address">Địa chỉ:</label>
                                        <input type="text" name="address" required="" value="<?php echo $row3['address']; ?>" />
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
                                        <label for="newpassword">Mật khẩu mới:</label>
                                        <input type="password" name="newpassword" required="" />
                                    </label>
                                </div>						
                                <div>
                                    <label>
                                        <label for="repassword">Xác nhận mật khẩu mới:</label>
                                        <input type="password" name="repassword" required="" />
                                    </label>
                                </div>
                                <div>
                                    <input type="submit" name="submit" value="Chỉnh sửa">
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
