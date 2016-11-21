<?php include 'include/openConnection.php'; ?>
<div class="header_top">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="resources/default/images/logo.png" alt=""/></a>			 
        </div>
        <div class="header_right">	
            <div class="login">
                <a href="login.php" id="login">ĐĂNG NHẬP</a>
                <a href="logout.php" id="logout">ĐĂNG XUẤT</a>
            </div>

            <div class="cart box_1">
                <a href="cart.php">
                    <h3> <span>Giỏ hàng của bạn</span><img src="resources/default/images/bag.png" alt=""/></h3>
                </a>	
                <p><a href="transaction.php">Lịch sử</a></p>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"></div>	
    </div>
</div>
<?php 
if (isset($_SESSION['uname'])) {
echo '
<script>
    $("#acc").show();
    $("#logout").show();
    $("#login").hide();
    $("#ppp").hide();
    $("#rrr").show();
</script>';
}
else {
echo'<script>
    $("#acc").hide();
    $("#logout").hide();
    $("#login").show();
    $("#ppp").show();
    $("#rrr").hide();
</script>';
}
?>
<div class="container">
    <div style="padding-bottom: 2em">
        <div class="search">
            <form action="search.php" method="GET">
                <input type="text" name="keyword">
                <input type="submit" name="submit" value="">
            </form>
        </div>
    </div>
    <br/>
</div>

<div class="mega_nav">
    <div class="container">
        <div class="menu_sec">
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li class="active grid"><a class="color1" href="index.php">Trang chủ</a></li>
                <li class="grid"><a class="color2" href="livingroom.php">phòng khách</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 2";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=2"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <li><a class="color4" href="kitchen.php">phòng ăn &amp; nhà bếp</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 3";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=3"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>				
                <li><a class="color5" href="bedroom.php">phòng ngủ</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 4";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=4"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <li><a class="color6" href="workingroom.php">LÀM VIỆC</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 5";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=5"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>				

                <li><a class="color7" href="kids.php">trẻ em</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 6";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=6"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>				

                <li><a class="color8" href="decoration.php">trang trí</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 7";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=7"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>
                <li><a class="color9" href="outside.php">ngoại thất</a>
                    <div class="megapanel">
                        <div class="row">
                            <?php 
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 8";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="col1">
                                            <div class="h_nav">
                                            <h4>' . $row['name']. '</h4><ul>';
                                    $par = $row['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<li><a href="catalog.php?id=' . $row2['id'] . '&ppid=8"><p>' . $row2['name'] . '</p></a></li>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</ul></div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                        </div>
                    </div>
                </li>
            </ul> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>
