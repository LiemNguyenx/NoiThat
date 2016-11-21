<?php session_start(); ?>
<?php 
    include 'include/openConnection.php';
    $conn->set_charset('utf8');
    if (isset($_GET['id']) && isset($_GET['ppid'])) {
        $catalog_id = $_GET['id'];
        $sql = "SELECT * FROM catalog WHERE id = '$catalog_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $catalog_name = $row['name'];
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
        }
        $catalog_ppid = $_GET['ppid'];
        $sql = "SELECT * FROM catalog WHERE id = '$catalog_ppid'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = $result->fetch_assoc();
            $catalog_ppname = $row['name'];
        }
        else {
            echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
        }
    }
    else {
        echo '<script>alert("Có lỗi xảy ra.\n");window.location.href = "index.php";</script>';
    }
    include 'include/closeConnection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'include/head.php'; 
        echo '<title>' . $catalog_name . ' | Tokuda Furniture</title>';
        ?>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <?php include 'include/header.php'; ?>
        <div class="product-model">	 
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <?php echo '<li class="active">'. $catalog_ppname . '</li>' ?>
                </ol>
                <?php echo '<h2>'. $catalog_name . '</h2>' ?>
                <?php
                $conn->set_charset('utf8');
                $sqlproduct = "SELECT * FROM product WHERE catalog_id = '$catalog_id' ORDER BY id DESC";
                $resultproduct = mysqli_query($conn, $sqlproduct);
                $sizearr = 0;
                if ($resultproduct) {
                    if (mysqli_num_rows($resultproduct) == 0) {} 
                    else {
                        while ($rowproduct = $resultproduct->fetch_assoc()) {
                            $arr[] = $rowproduct;
                            $sizearr = $sizearr + 1;
                            
                        }
                    }
                } else {
                    echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                }
                ?>
                <br/>
                <div>
                    <ul class="nav nav-pills">
                        <?php
                        $e = 9;
                        if ($sizearr % $e > 0) $du = 1;
                        else $du = 0;
                        for ($i = 1; $i <= $sizearr / $e + $du; $i++) {
                            if ($i == 1) echo '<li class="active"><a data-toggle="pill" href="#1">1</a></li>';
                            else echo '<li><a data-toggle="pill" href="#' . $i . '">' . $i . '</a></li>';
                        }
                        ?>    
                    </ul>
                    <div class="tab-content">
                        <?php
                        if ($sizearr == 0) {
                            echo '<h4>Không có sản phẩm nào thuộc danh mục này!</h4>';
                        } else {
                            $i = 0;
                            $tab = 0;
                            $end = 0;
                            foreach ($arr as $prod) {
                                $i++;
                                if ($i % $e == 1) {
                                    $tab++;
                                    if ($tab == 1) $w = "in active";
                                    else $w = "";
                                    $end = 1;
                                    echo '<div id=' . $tab . ' class="tab-pane fade '. $w .'"><div class="col-md-9 product-model-sec"><ul>';
                                }
                                echo '
                                        <div class="product-grid love-grid">
                                            <a href="product.php?id=' . $prod['id'] . '">
                                                <div class="more-product"><span></span></div>
                                                <div class="product-img b-link-stripe b-animate-go  thickbox">
                                                    <image src="resources/default/images/' . $prod['image_link'] . '" >
                                                    <div class="b-wrapper">
                                                        <h4 class="b-animate b-from-left  b-delay03">							
                                                            <button class="btns">Chi Tiết</button>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-info simpleCart_shelfItem">
                                                <div class="product-info-cust prt_name">
                                                    <h4>' . $prod['name'] . '</h4>
                                                    <p>ID: ' . $prod['id'] . '</p>
                                                    <span class="item_price">' . number_format($prod['price']) . ' VNĐ</span>								
                                                </div>													
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>';
                                if ($i % $e == 0) {
                                    echo '</ul></div></div>';
                                    $end = 0;
                                }
                            }
                            if ($end == 1) echo '</ul></div></div>';
                        }
                        ?>
                    </div>
                </div>

                <div class="rsidebar span_1_of_left">
                    <section class="sky-form">
                        <div class="product_right">
                            <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Danh mục</h4>
                            <?php
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = '$catalog_ppid'";
                            $result = mysqli_query($conn, $sql);
                            $cnt = 0;
                            if ($result) {
                                while ($lef = $result->fetch_assoc()) {
                                    $cnt = $cnt+1;
                                    echo '
                                        <div class="tab' . $cnt .'">
                                            <ul class="place">								
                                                <li class="sort">' . $lef['name']. '</li>
                                                <li class="by"><img src="resources/default/images/do.png" alt=""/></li>
                                                <div class="clearfix"> </div>
                                            </ul>
                                            <div class="single-bottom">';
                                    $par = $lef['id'];
                                    $sql2 = "SELECT * FROM catalog WHERE parent_id = '$par'";
                                    $result2 = mysqli_query($conn, $sql2);
                                    if ($result2) {
                                        while ($row2 = $result2->fetch_assoc()) {
                                            echo '<a href="catalog.php?id=' . $row2['id'] . '&ppid=' . $catalog_ppid . '"><p>' . $row2['name'] . '</p></a>';
                                        }
                                    }
                                    else {
                                        echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                                    }
                                    echo '</div></div>';
                                }
                            } else {
                                echo '<script>alert("Có lỗi xảy ra.\n");</script>';
                            }
                            ?>
                            <script>
                                $(document).ready(function () {
                                    $(".tab1 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();

                                    $(".tab1 ul").click(function () {
                                        $(".tab1 .single-bottom").slideToggle(300);
                                    })
                                    $(".tab2 ul").click(function () {
                                        $(".tab2 .single-bottom").slideToggle(300);
                                    })
                                    $(".tab3 ul").click(function () {
                                        $(".tab3 .single-bottom").slideToggle(300);
                                    })
                                    $(".tab4 ul").click(function () {
                                        $(".tab4 .single-bottom").slideToggle(300);
                                    })
                                    $(".tab5 ul").click(function () {
                                        $(".tab5 .single-bottom").slideToggle(300);
                                    })
                                });
                            </script>
                        </div>
                    </section>
                </div>				 
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
