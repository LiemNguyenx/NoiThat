<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ | Tokuda Furniture</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="resources/default/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine"/>
        <script type='text/javascript' src="resources/default/js/jquery-1.11.1.min.js"></script>
        <link href="resources/default/css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href='//fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'/>
        <link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'/>
        <link href="resources/default/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <link href="resources/default/css/form.css" rel="stylesheet" type="text/css" media="all" />
        <link href="resources/default/css/etalage.css" rel="stylesheet" type="text/css" media="all" />
        <link href="resources/default/css/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="resources/default/js/megamenu.js"></script>
        <script>$(document).ready(function () {$(".megamenu").megamenu();});</script>
        <script src="resources/default/js/simpleCart.min.js"></script>
        <script src="resources/default/js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                // Slideshow 1
                $("#slider1").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks"
                });
            });
        </script>
        <script src="resources/default/js/jquery.etalage.min.js"></script>
        <script>
            $(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });
        </script>
    </head>
    <body>
        <div id="top">
            <div class="top_bg">
                <div class="container">
                    <div class="header_top-sec">
                        <div class="top_right">
                            <ul>
                                <li><a href="aboutus.xhtml">Về chúng tôi</a></li> |
                                <li><a href="contact.xhtml">Liên hệ</a></li> |
                                <li><a href="index.xhtml">Trang chủ</a></li>
                            </ul>
                        </div>
                        <div class="top_left">
                            <ul>
                                <li class="top_link">Hotline: 1800 6900 (miễn phí)</li>
                                <li class="top_link">|</li>
                                <li class="top_link" id="ppp"><a href="account.xhtml">Đăng ký</a></li>
                                <li class="top_link" id="acc">Chào mừng,</li>
                                <li class="top_link" id="rrr"><a href="profile.xhtml" id="acc1"></a></li>
                            </ul>
                        </div>
                        <script>document.getElementById("acc1").innerHTML = localStorage.getItem("username");</script>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="header_top">
                <div class="container">
                    <div class="logo">
                        <a href="index.xhtml"><img src="resources/default/images/logo.png" alt=""/></a>			 
                    </div>
                    <div class="header_right">	
                        <div class="login">
                            <a href="login.xhtml" id="login">ĐĂNG NHẬP</a>
                            <a href="#" id="logout">ĐĂNG XUẤT</a>
                        </div>

                        <div class="cart box_1">
                            <a href="cart.xhtml">
                                <h3> <span>Giỏ hàng của bạn</span><img src="resources/default/images/bag.png" alt=""/></h3>
                            </a>	
                            <p><a href="transaction.xhtml">Lịch sử</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>	
                </div>
            </div>
            <div class="container">
                <div style="padding-bottom: 2em">
                    <div class="search">
                        <form id="j_idt8" name="j_idt8" method="post">
                            <input id="j_idt8:prname" type="text" name="j_idt8:prname">
                            <input type="submit" name="j_idt8:j_idt9" value="">
                            
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
                            <li class="active grid"><a class="color1" href="index.xhtml">Trang chủ</a></li>
                            <li class="grid"><a class="color2" href="livingroom.xhtml">phòng khách</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Ghế ngồi</h4>
                                                <ul>
                                                    <li><a href="catalog/sofa.xhtml">Sofa</a></li>
                                                    <li><a href="catalog/sofagoc.xhtml">Sofa góc</a></li>
                                                    <li><a href="catalog/sofabed.xhtml">Sofa bed</a></li>
                                                    <li><a href="catalog/ghethugian.xhtml">Ghế thư giãn</a></li>
                                                    <li><a href="catalog/armchair.xhtml">Armchair</a></li>									
                                                    <li><a href="catalog/ghedaidon.xhtml">Ghế dài &amp; đôn</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Bàn</h4>
                                                <ul>
                                                    <li><a href="catalog/bannuoc.xhtml">Bàn nước</a></li>
                                                    <li><a href="catalog/banconsole.xhtml">Bàn console</a></li>
                                                    <li><a href="catalog/banben.xhtml">Bàn bên</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Tủ</h4>
                                                <ul>
                                                    <li><a href="catalog/tutrungbay.xhtml">Tủ trưng bày</a></li>
                                                    <li><a href="catalog/tutivi.xhtml">Tủ tivi</a></li>
                                                    <li><a href="catalog/tuly.xhtml">Tủ ly</a></li>
                                                    <li><a href="catalog/tugiay.xhtml">Tủ giày</a></li>
                                                    <li><a href="catalog/tusach.xhtml">Tủ sách</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Đồ trang trí</h4>
                                                <ul>
                                                    <li><a href="catalog/denpk.xhtml">Đèn</a></li>
                                                    <li><a href="catalog/hoapk.xhtml">Hoa trang trí</a></li>
                                                    <li><a href="catalog/binhpk.xhtml">Bình trang trí</a></li>
                                                    <li><a href="catalog/thampk.xhtml">Thảm</a></li>
                                                    <li><a href="catalog/tranhpk.xhtml">Tranh</a></li>
                                                    <li><a href="catalog/tuongpk.xhtml">Tượng</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="color4" href="kitchen.xhtml">phòng ăn &amp; nhà bếp</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Phòng ăn</h4>
                                                <ul>
                                                    <li><a href="catalog/banan.xhtml">Bàn ăn</a></li>
                                                    <li><a href="catalog/ghean.xhtml">Ghế</a></li>
                                                    <li><a href="catalog/banconsolean.xhtml">Bàn console</a></li>
                                                    <li><a href="catalog/tulyan.xhtml">Tủ ly</a></li>
                                                    <li><a href="catalog/tuhockeoan.xhtml">Tủ hộc kéo</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Trang trí phòng ăn</h4>
                                                <ul>
                                                    <li><a href="catalog/denpa.xhtml">Đèn</a></li>
                                                    <li><a href="catalog/hoapa.xhtml">Hoa trang trí</a></li>
                                                    <li><a href="catalog/binhpa.xhtml">Bình trang trí</a></li>
                                                    <li><a href="catalog/tranhpa.xhtml">Tranh</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Tủ bếp</h4>
                                                <ul>
                                                    <li><a href="catalog/tubep.xhtml">Tủ bếp</a></li>
                                                    <li><a href="catalog/turuou.xhtml">Tủ rượu</a></li>
                                                    <li><a href="catalog/daobep.xhtml">Đảo bếp</a></li>
                                                    <li><a href="catalog/quaybar.xhtml">Quầy bar</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Thiết bị bếp</h4>
                                                <ul>
                                                    <li><a href="catalog/bep.xhtml">Bếp</a></li>
                                                    <li><a href="catalog/mayhutmui.xhtml">Máy hút mùi</a></li>
                                                    <li><a href="catalog/chaurua.xhtml">Chậu rửa</a></li>
                                                    <li><a href="catalog/lonuong.xhtml">Lò nướng</a></li>
                                                    <li><a href="catalog/lovisong.xhtml">Lò vi sóng</a></li>
                                                    <li><a href="catalog/khacpa.xhtml">Các thiết bị khác</a></li>
                                                </ul>	
                                            </div>						
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Phụ kiện &amp; Dụng cụ bếp</h4>
                                                <ul>
                                                    <li><a href="catalog/phukienbep.xhtml">Phụ kiện bếp</a></li>
                                                    <li><a href="catalog/dungcubep.xhtml">Dụng cụ bếp</a></li>
                                                    <li><a href="catalog/thungracpa.xhtml">Thùng rác</a></li>
                                                </ul>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>				
                            <li><a class="color5" href="bedroom.xhtml">phòng ngủ</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Giường</h4>
                                                <ul>
                                                    <li><a href="catalog/giuongngu.xhtml">Giường ngủ</a></li>
                                                    <li><a href="catalog/bandaugiuong.xhtml">Bàn đầu giường</a></li>
                                                    <li><a href="catalog/bantrangdiem.xhtml">Bàn trang điểm</a></li>
                                                    <li><a href="catalog/ghepn.xhtml">Ghế</a></li>
                                                    <li><a href="catalog/ghethugianpn.xhtml">Ghế thư giãn</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Tủ</h4>
                                                <ul>
                                                    <li><a href="catalog/tuao.xhtml">Tủ áo</a></li>
                                                    <li><a href="catalog/tuamtuong.xhtml">Tủ âm tường</a></li>
                                                    <li><a href="catalog/tuhockeopn.xhtml">Tủ hộc kéo</a></li>
                                                    <li><a href="catalog/tutivipn.xhtml">Tủ tivi</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Đồ trang trí</h4>
                                                <ul>
                                                    <li><a href="catalog/mengoi.xhtml">Mền &amp; gối</a></li>
                                                    <li><a href="catalog/thampn.xhtml">Thảm</a></li>
                                                    <li><a href="catalog/nempn.xhtml">Nệm</a></li>
                                                    <li><a href="catalog/khungguongpn.xhtml">Khung gương</a></li>
                                                    <li><a href="catalog/tranhpn.xhtml">Tranh</a></li>
                                                    <li><a href="catalog/tuongpn.xhtml">Tượng</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="color6" href="workingroom.xhtml">LÀM VIỆC</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Nội thất</h4>
                                                <ul>
                                                    <li><a href="catalog/banlamviec.xhtml">Bàn làm việc</a></li>
                                                    <li><a href="catalog/ghelamviec.xhtml">Ghế</a></li>
                                                    <li><a href="catalog/kesachplv.xhtml">Kệ sách</a></li>
                                                    <li><a href="catalog/ghethugianplv.xhtml">Ghế thư giãn</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Đồ trang trí</h4>
                                                <ul>
                                                    <li><a href="catalog/thamplv.xhtml">Thảm</a></li>
                                                    <li><a href="catalog/denplv.xhtml">Đèn</a></li>
                                                    <li><a href="catalog/hoaplv.xhtml">Hoa trang trí</a></li>
                                                    <li><a href="catalog/binhplv.xhtml">Bình trang trí</a></li>
                                                    <li><a href="catalog/tranhplv.xhtml">Tranh</a></li>
                                                    <li><a href="catalog/tuongplv.xhtml">Tượng</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                    </div>
                                </div>
                            </li>				

                            <li><a class="color7" href="kids.xhtml">trẻ em</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Nội thất</h4>
                                                <ul>
                                                    <li><a href="catalog/giuongte.xhtml">Giường trẻ em</a></li>
                                                    <li><a href="catalog/tute.xhtml">Tủ trẻ em</a></li>
                                                    <li><a href="catalog/banhocte.xhtml">Bàn học trẻ em</a></li>
                                                    <li><a href="catalog/ghete.xhtml">Ghế trẻ em</a></li>
                                                    <li><a href="catalog/tusachte.xhtml">Tủ sách &amp; kệ trẻ em</a></li>									
                                                    <li><a href="catalog/nemte.xhtml">Nệm</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Đồ trang trí</h4>
                                                <ul>
                                                    <li><a href="catalog/thampte.xhtml">Thảm</a></li>
                                                    <li><a href="catalog/khunghinhpte.xhtml">Khung hình</a></li>
                                                    <li><a href="catalog/hoapte.xhtml">Hoa trang trí</a></li>
                                                    <li><a href="catalog/tranhpte.xhtml">Tranh</a></li>
                                                    <li><a href="catalog/tuongpte.xhtml">Tượng</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                    </div>
                                </div>
                            </li>				

                            <li><a class="color8" href="decoration.xhtml">trang trí</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <ul>
                                                    <li><a href="catalog/noeltt.xhtml">Hàng trang trí Noel</a></li>
                                                    <li><a href="catalog/hoatt.xhtml">Hoa &amp; Cây</a></li>
                                                    <li><a href="catalog/binhtt.xhtml">Bình trang trí</a></li>
                                                    <li><a href="catalog/thamtt.xhtml">Thảm</a></li>
                                                    <li><a href="catalog/nemtt.xhtml">Nệm</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <ul>
                                                    <li><a href="catalog/dentt.xhtml">Đèn</a></li>
                                                    <li><a href="catalog/tranhtt.xhtml">Tranh</a></li>
                                                    <li><a href="catalog/tuongtt.xhtml">Tượng</a></li>
                                                    <li><a href="catalog/khunghinhtt.xhtml">Khung hình</a></li>
                                                    <li><a href="catalog/nentt.xhtml">Nến</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <ul>
                                                    <li><a href="catalog/phugiuongtt.xhtml">Tấm phủ giường</a></li>
                                                    <li><a href="catalog/goitt.xhtml">Gối</a></li>
                                                    <li><a href="catalog/thubongtt.xhtml">Thú bông</a></li>
                                                    <li><a href="catalog/donghott.xhtml">Đồng hồ</a></li>
                                                    <li><a href="catalog/khungguongtt.xhtml">Khung gương</a></li>
                                                </ul>	
                                            </div>												
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="color9" href="outside.xhtml">ngoại thất</a>
                                <div class="megapanel">
                                    <div class="row">
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Ngoại thất</h4>
                                                <ul>
                                                    <li><a href="catalog/bannt.xhtml">Bàn ngoài trời</a></li>
                                                    <li><a href="catalog/ghent.xhtml">Ghế ngoài trời</a></li>
                                                    <li><a href="catalog/xedaynt.xhtml">Xe đẩy</a></li>
                                                    <li><a href="catalog/dunt.xhtml">Dù</a></li>
                                                    <li><a href="catalog/khacnt.xhtml">Sản phẩm khác</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                        <div class="col1">
                                            <div class="h_nav">
                                                <h4>Đồ trang trí</h4>
                                                <ul>
                                                    <li><a href="catalog/hoant.xhtml">Hoa &amp; Cây</a></li>
                                                    <li><a href="catalog/dennt.xhtml">Đèn</a></li>
                                                    <li><a href="catalog/khunghinhgnt.xhtml">Khung hình</a></li>
                                                    <li><a href="catalog/donghont.xhtml">Đồng hồ</a></li>
                                                </ul>	
                                            </div>							
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul> 
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="content">
                    <div class="container">
                        <div class="slider">
                            <ul class="rslides" id="slider1">
                                <li><img src="resources/default/images/banner3.jpg" alt=""/></li>
                                <li><img src="resources/default/images/banner1.jpg" alt=""/></li>
                                <li><img src="resources/default/images/banner2.jpg" alt=""/></li>
                            </ul>
                        </div>          
                    </div>	
                </div>

                <div class="bottom_content">
                    <div class="container">
                        <div class="sofas">
                            
                        </div>
                    </div>
                </div>

                <!---->
                <div class="new">
                    <div class="container">
                        <h3>THIẾT KẾ ĐẶC BIỆT</h3>
                        <div class="new-products">
                            <div class="new-items">
                                <div class="item1">
                                    <a href="products/BanBenTouka.xhtml"><img src="resources/default/images/BanBenTouka1.jpg" alt=""/></a>
                                    <div class="item-info">
                                        <h4><a href="products/BanBenTouka.xhtml">Bàn bên Touka</a></h4>
                                        <span>ID: 11</span>
                                        <a href="products/BanBenTouka.xhtml">Mua ngay</a>
                                    </div>
                                </div>
                                <div class="item4">
                                    <a href="products/Ban_nuocMH.xhtml"><img src="resources/default/images/Ban_nuocMH1.jpg" alt=""/></a>
                                    <div class="item-info4">
                                        <h4><a href="products/Ban_nuocMH.xhtml">Bàn nước MH1403A</a></h4>
                                        <span>ID: 9</span>
                                        <a href="products/Ban_nuocMH.xhtml">Mua ngay</a>
                                    </div>			 
                                </div>
                            </div>
                            <div class="new-items new_middle">
                                <div class="item2">			 
                                    <div class="item-info2">
                                        <h4><a href="products/ConsoleBaroque.xhtml">Console Baroque</a></h4>
                                        <span>ID: 10</span>
                                        <a href="products/ConsoleBaroque.xhtml">Mua ngay</a>
                                    </div>
                                    <a href="products/ConsoleBaroque.xhtml"><img src="resources/default/images/ConsoleBaroque1.jpg" alt=""/></a>
                                </div>
                                <div class="item5">	
                                    <a href="products/Don_Athena.xhtml"><img src="resources/default/images/Don_Athena1.jpg" alt=""/></a>
                                    <div class="item-info5">
                                        <h4><a href="products/Don_Athena.xhtml">Đôn Athena beige</a></h4>
                                        <span>ID: 8</span>
                                        <a href="products/Don_Athena.xhtml">Mua ngay</a>
                                    </div>	
                                </div>
                            </div>		  
                            <div class="new-items new_last">
                                <div class="item3">	
                                    <a href="products/GTG_Lazboy.xhtml"><img src="resources/default/images/GTG_Lazboy_1.jpg" alt=""/></a>
                                    <div class="item-info3">
                                        <h4><a href="products/GTG_Lazboy.xhtml">Ghế thư giãn Lazboy H.town</a></h4>
                                        <span>ID: 6</span>
                                        <a href="products/GTG_Lazboy.xhtml">Mua ngay</a>
                                    </div>			 
                                </div>
                                <div class="item6">	
                                    <a href="products/KeSachGlamour.xhtml"><img src="resources/default/images/KeSachGla1.jpg" alt=""/></a>
                                    <div class="item-info6">
                                        <h4><a href="products/KeSachGlamour.xhtml">Kệ sách Glamour</a></h4>
                                        <span>ID: 16</span>
                                        <a href="products/KeSachGlamour.xhtml">Mua ngay</a>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>	
                        </div>
                    </div>		 
                </div>
                <!---->
                <div class="top-sellers">
                    <div class="container">
                        <h3>NHỮNG MẶT HÀNG BÁN CHẠY NHẤT</h3>
                        <div class="seller-grids">
                            <div class="col-md-3 seller-grid">
                                <a href="products/Sofa_Shine_3-1-1.xhtml"><img src="resources/default/images/Sofa_Shine_3-1-1.jpg" alt=""/></a>
                                <h4><a href="products/Sofa_Shine_3-1-1.xhtml">Bộ sofa da Shine 3.1.1 + Đôn</a></h4>
                                <span>ID: 2</span>
                                <p>Giá: 135,400,000 VND</p>
                            </div>
                            <div class="col-md-3 seller-grid">
                                <a href="products/Sofa_Nova_Nau_3-1-1.xhtml"><img src="resources/default/images/Sofa_Nova_nau_3-1-1.jpg" alt=""/></a>
                                <h4><a href="products/Sofa_Nova_Nau_3-1-1.xhtml">Bộ sofa Nova 3.1.1 da nâu</a></h4>
                                <span>ID: 3</span>
                                <p>Giá: 95,000,000 VND</p>
                            </div>
                            <div class="col-md-3 seller-grid">
                                <a href="products/Sofa_Bed.xhtml"><img src="resources/default/images/Sofa_bed_1.jpg" alt=""/></a>
                                <h4><a href="products/Sofa_Bed.xhtml">Sofa giường</a></h4>
                                <span>ID: 5</span>
                                <p>Giá: 24,000,000 VND</p>
                            </div>
                            <div class="col-md-3 seller-grid">
                                <a href="products/TuLyRoma.xhtml"><img src="resources/default/images/TuLyRoma1.jpg" alt=""/></a>
                                <h4><a href="products/TuLyRoma.xhtml">Tủ ly Roma 1</a></h4>
                                <span>ID: 14</span>
                                <p>Giá: 11,500,000 VND</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="recommendation">
                    <div class="container">
                        <div class="recmnd-head">
                            <h3>TƯ VẤN CHO BẠN</h3>
                        </div>
                        <div class="bikes-grids">			 
                            <ul id="flexiselDemo1">
                                <li>
                                    <a href="products/Sofa_1Bridge.xhtml"><img src="resources/default/images/Sofa_1Bridge_1.jpg" alt=""/></a>	
                                    <h4><a href="products/Sofa_1Bridge.xhtml">Sofa da 1 chỗ Bridge</a></h4>	
                                    <p>ID: 7</p>
                                </li>
                                <li>
                                    <a href="products/Sofa_Cico.xhtml"><img src="resources/default/images/Sofa_Cico_1.jpg" alt=""/></a>	
                                    <h4><a href="products/Sofa_Cico.xhtml">Sofa góc trái Cico</a></h4>	
                                    <p>ID: 4</p>
                                </li>
                                <li>
                                    <a href="products/TuGiayChio.xhtml"><img src="resources/default/images/TuGiayChio1.jpg" alt=""/></a>
                                    <h4><a href="products/TuGiayChio.xhtml">Tủ giày Chio</a></h4>	
                                    <p>ID: 15</p>
                                </li>
                                <li>
                                    <a href="products/TuTBChio.xhtml"><img src="resources/default/images/TuTBChio1.jpg" alt=""/></a>
                                    <h4><a href="products/TuTBChio.xhtml">Tủ trưng bày Chio</a></h4>	
                                    <p>ID: 13</p>
                                </li>
                                <li>
                                    <a href="products/TuTiviBridge.xhtml"><img src="resources/default/images/TuTiviBridge1.jpg" alt=""/></a>	
                                    <h4><a href="products/TuTiviBridge.xhtml">Tủ tivi Bridge</a></h4>	
                                    <p>ID: 12</p>					 
                                </li>
                            </ul>
                            <script type="text/javascript">
                                $(window).load(function () {
                                    $("#flexiselDemo1").flexisel({
                                        visibleItems: 5,
                                        animationSpeed: 1000,
                                        autoPlay: true,
                                        autoPlaySpeed: 3000,
                                        pauseOnHover: true,
                                        enableResponsiveBreakpoints: true,
                                        responsiveBreakpoints: {
                                            portrait: {
                                                changePoint: 480,
                                                visibleItems: 1
                                            },
                                            landscape: {
                                                changePoint: 640,
                                                visibleItems: 2
                                            },
                                            tablet: {
                                                changePoint: 768,
                                                visibleItems: 3
                                            }
                                        }
                                    });
                                });
                            </script>
                            <script type="text/javascript" src="resources/default/js/jquery.flexisel.js"></script>			 
                        </div>
                    </div>
                </div>
            <div class="footer-content">
                <div class="container">
                    <div class="ftr-grids">
                        <div class="col-md-3 ftr-grid">
                            <h4>Về chúng tôi</h4>
                            <ul>
                                <li><a href="aboutus.xhtml">Chúng tôi là ai?</a></li>
                                <li><a href="contact.xhtml">Liên hệ</a></li>	
                            </ul>
                        </div>
                        <div class="col-md-3 ftr-grid">
                            <h4>Tài khoản của bạn</h4>
                            <ul>
                                <li><a href="account.xhtml">Tài khoản</a></li>
                                <li><a href="profile.xhtml">Thông tin cá nhân</a></li>
                                <li><a href="transaction.xhtml">Theo dõi đơn hàng</a></li>					 					 
                            </ul>
                        </div>
                        <div class="col-md-3 ftr-grid">
                            <h4>Danh mục</h4>
                            <ul>
                                <li><a href="livingroom.xhtml">> Phòng khách</a></li>
                                <li><a href="kitchen.xhtml">> Phòng ăn &amp; bếp</a></li>
                                <li><a href="bedroom.xhtml">> Phòng ngủ</a></li>
                                <li><a href="workingroom.xhtml">> Phòng làm việc</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 ftr-grid">
                            <h4>Danh mục</h4>
                            <ul>
                                <li><a href="kids.xhtml">> Trẻ em</a></li>
                                <li><a href="decoration.xhtml">> Trang trí</a></li>					 
                                <li><a href="outside.xhtml">> Ngoại thất</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="footer">
                <div class="container">
                    <div class="store"></div>		 
                    <div class="copywrite">
                        <p>Copyright © 2016 TBT Corp. All rights reserved</p>
                    </div>			 
                </div>
            </div>
            <script type="text/javascript">
                if (localStorage["username"] === undefined) {
                    $("#acc").hide();
                    $("#logout").hide();
                    $("#login").show();
                    $("#ppp").show();
                    $("#rrr").hide();
                }
                else {
                    $("#acc").show();
                    $("#logout").show();
                    $("#login").hide();
                    $("#ppp").hide();
                    $("#rrr").show();
                }
                var s = localStorage["username"];
                onBrowserStuff([{name: 'name1', value: s}]);
                $("#logout").click(function () {
                    callMyMethod();
                    localStorage.removeItem("username");
                    window.location.href = "index.xhtml";
                    alert("Đăng xuất thành công");
                });
            </script>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
