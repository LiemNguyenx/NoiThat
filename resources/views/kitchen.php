<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include 'include/head.php'; ?>
        <title>Phòng ăn &amp; nhà bếp | Tokuda Furniture</title>
    </head>
    <body>
        <?php include 'include/top.php'; ?>
        <?php include 'include/header.php'; ?>
        <div class="product-model">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="active">Phòng ăn &amp; nhà bếp</li>
                </ol>
                <h2>Phòng ăn &amp; nhà bếp</h2>
                <div class="rsidebar span_1_of_left">
                    <section class="sky-form">
                        <div class="product_right">
                            <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Danh mục</h4>
                            <?php
                            $conn->set_charset('utf8');
                            $sql = "SELECT * FROM catalog WHERE parent_id = 3";
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
                                            echo '<a href="catalog.php?id=' . $row2['id'] . '&ppid=3"><p>' . $row2['name'] . '</p></a>';
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
                <div class="product-model-sec">
                    <div class="slider_room">
                        <ul class="rslides" id="slider1">
                            <li><img src="resources/default/images/kitchen7.jpg" alt=""/></li>
                            <li><img src="resources/default/images/kitchen1.jpg" alt=""/></li>
                            <li><img src="resources/default/images/kitchen2.jpg" alt=""/></li>
                            <li><img src="resources/default/images/kitchen3.jpg" alt=""/></li>
                            <li><img src="resources/default/images/kitchen4.jpg" alt=""/></li>
                            <li><img src="resources/default/images/kitchen5.jpg" alt=""/></li>
                            <li><img src="resources/default/images/kitchen6.jpg" alt=""/></li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
