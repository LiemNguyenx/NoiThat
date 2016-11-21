<div id="top">
    <div class="top_bg">
        <div class="container">
            <div class="header_top-sec">
                <div class="top_right">
                    <ul>
                        <li><a href="aboutus.php">Về chúng tôi</a></li> |
                        <li><a href="contact.php">Liên hệ</a></li> |
                        <li><a href="index.php">Trang chủ</a></li>
                    </ul>
                </div>
                <div class="top_left">
                    <ul>
                        <li class="top_link">Hotline: 1800 6900 (miễn phí)</li>
                        <li class="top_link">|</li>
                        <li class="top_link" id="ppp"><a href="account.php">Đăng ký</a></li>
                        <li class="top_link" id="acc">Chào mừng,</li>
                        <li class="top_link" id="rrr">
                            <a href="profile.php">
                                <?php
                                if (isset($_SESSION['uname'])) {
                                    echo $_SESSION['uname'];
                                } else {
                                    echo '';
                                }
                                ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>