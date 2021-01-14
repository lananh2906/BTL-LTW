<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Macrina Bakery</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="./checkout.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Giỏ: <span>0VNĐ</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>VND 
                </li>
                <li>Vietnamese 
                    </ul>
                </li>
                <li><a href="#">Đăng nhập</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li>VND 
                                    </li>
                                    <li>VIE
                                        
                                    </li>
                                    <li><a href="#">Đăng nhập</a> </li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="./checkout.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Giỏ: <span>0VNĐ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li class="active"><a href="./shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Blog Hero Begin -->
    
                                <?php
                // 1. KẾT NỐI ĐẾN CSDL
                $ket_noi = mysqli_connect("localhost", "root", "", "cua_hang_banh");

                // 2. Lấy ID của tin tức
                $id_blog = $_GET["id"];

                // 3. Lấy dữ liệu mong muốn
            $sql = "
                SELECT *
                FROM tbl_blog
                WHERE id_blog='".$id_blog."'
            ";

                // 3. Thực thi câu lệnh lấy ra dữ liệu mong muốn
                $noi_dung_tin_tuc = mysqli_query($ket_noi, $sql);

                //4. Hiển thị dữ liệu lấy được lên màn hình
                $i=0;
                while ($row = mysqli_fetch_array($noi_dung_tin_tuc)) {
                    $i++;
            ;?>
                <!-- ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
                <div class="blog-hero set-bg" data-setbg="img/blog/details/blog-hero.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="blog__hero__text">
                        <div class="label">Làm Bánh Cùng</div>
                        <h2>Macrina Bakery</h2>
                        <ul>
                            <li>By <span> <?php echo $row["tac_gia"];?></span></li>
                            <li><?php echo $row["ngay_dang"];?></li>
                            <li><?php echo $row["luot_xem"];?> Views</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="blog__details__text">
                            
                        </div>
                        <div class="blog__details__recipe">
                            <div class="blog__details__recipe__item">
                                <h6><img src="img/blog/details/user.png" alt=""> Phục Vụ</h6>
                                <span>1 bếp chính, 2 bếp phụ</span>
                            </div>
                            <div class="blog__details__recipe__item">
                                <h6><img src="img/blog/details/clock.png" alt=""> Chuẩn bị</h6>
                                <span>15 Phút</span>
                            </div>
                            <div class="blog__details__recipe__item">
                                <h6><img src="img/blog/details/clock.png" alt=""> Chế biến</h6>
                                <span>45 phút</span>
                            </div>
                        </div>
                <div class="blog__details__recipe__details">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog__details__ingredients">
                                        <h3><?php echo $row["tieu_de"];?></h3>
                                        <br>
                            <h6>Nguyên liệu</h6>
                            <ul><?php echo $row["Nguyen_lieu"];?>
                            </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog__details__ingredients__pic">
                                        <div class="blog__item__pic set-bg" data-setbg="./img/blog/<?php echo $row["hinh_anh"];?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__direction">
                            <br>
                            <h6>Cách làm</h6>
                            <ul>
                               <?php echo $row["Cach_lam"];?>
                            </ul>
                            <p> Chúc các bạn thành công & thường xuyên theo dõi web để cập nhật nhiều món ngon nhé <i class="fa fa-heart" aria-hidden="true"></i></p>
                        </div>
                <!-- KẾT THÚC ĐOẠN DỮ LIỆU LẶP ĐI LẶP LẠI -->
            <?php
                }
            ;?>
                                
                        <div class="blog__details__print">
                            <a href="#" class="primary-btn"><i class="fa fa-print"></i> In công thức</a>
                        </div>
                        <div class="blog__details__text">
                            <p>Thế giới các loại bánh cực kì đa dạng và phong phú, thế nhưng không phải loại bánh nào bạn cũng có thể làm thành công ngay lần đầu tiên, đặc biệt là với những người mới bắt đầu.</p>
                            <p>Để làm được những món bánh cầu kì, phức tạp, bạn sẽ cần những kỹ năng nâng cao, chuyên sâu và kinh nghiệm được tích lũy trong thời gian làm việc. Còn nếu bạn là “gà mới” thì sẽ thế nào? Những món bánh nào sẽ phù hợp để thử làm với những kỹ năng sơ khai mà bạn có được?</p>
                            <p>Cùng Macrina Bakery tạo ra những điều bất ngờ nhé ! </p>
                        </div>
                        <div class="blog__details__tags">
                            <span>Tag</span>
                            <a href="#">Food</a>
                            <a href="#">Material</a>
                            <a href="#">Cakes</a>
                            <a href="#">Baking</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Giờ mở cửa </h6>
                        <ul>
                            <li>Thứ hai - Thứ sáu: 08:00 am – 08:30 pm</li>
                            <li>Thứ bảy - Chủ nhật: 10:00 am – 16:30 pm</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>