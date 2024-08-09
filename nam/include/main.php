<div class="homepage-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-50">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <!-- Header category list -->
                        <div class="hero-side-category">

                            <!-- Category Toggle Wrap -->
                            <div class="category-toggle-wrap">
                                <!-- Category Toggle -->
                                <button class="category-toggle">Danh mục <i class="ti-menu"></i></button>
                            </div>

                            <!-- Category Menu -->
                            <nav class="category-menu mb-40">
                                <ul>
                                    <?php
									foreach (pdo_query("select *from danhmuc order by id desc") as $dm) {
										extract($dm);
										$linkdm = "index.php?act=sanpham&iddanhmuc=" . $id;
										echo '<li>
                                       <a href="' . $linkdm . '">' . $tendanhmuc . '</a>
                                        </li>';
									}
									?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="hero-slider hero-slider-one">
                            <div class="hero-item hero-bg-1">
                                <div class="row align-items-center justify-content-between">
                                    <div class="hero-content col-md-8 offset-md-4 col-12 offset-0">
                                        <h1>SP10 </h1>
                                        <h2><span>CÂU CHUYỆN THƯƠNG HIỆU</span></h2>
                                        <p style="color: white;">Tạo dựng thương hiệu tinh dầu chất lượng với giá thành
                                            hợp lý, mang đến cho bạn không gian sống thư giãn mỗi ngày. </p>
                                        <a href="page/gioithieu.php	" style="color: white; ">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-item hero-bg-2">
                                <div class="row align-items-center justify-content-between">
                                    <div class="hero-content col-md-8 offset-md-4 col-12 offset-0">
                                        <h1>SP10</h1>
                                        <h2><span>CÂU CHUYỆN THƯƠNG HIỆU</span></h2>
                                        <p style="color: white;">Tạo dựng thương chất lượng với giá thành
                                            hợp lý, mang đến cho bạn không gian sống thư giãn mỗi ngày. </p>
                                        <a href="#" style="color: white; ">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="featured-service-container">
                            <div class="row">
							<?php  foreach (pdo_query("SELECT * FROM `tintuc`") as $tintuc) {
                                  extract($tintuc); ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-featured-service featured-service-bg-1" style="background-image: url('/duan1/upload/<?php echo $tintuc['img'] ?>');">
                                        <div class="single-featured-service-content">
                                            <h4><a
                                                    href="/duan1/nam/page/cttintuc.php">Xem Ngay</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vertical-product-slider-container">

            <div class="row">
                <?php foreach (pdo_query("select *from danhmuc order by id desc LIMIT 6") as $categori) : ?>
                <div class="col-lg-4 mb-3">
                    <div class="single-vertical-slider">
                        <h2 class="block-title vertical-slider-block-title"><?= $categori['tendanhmuc']; ?></h2>
                        <div class="vertical-product-list">
                            <?php foreach (pdo_query("select *from sanpham where `iddanhmuc` = '" . $categori['id'] . "' order by id desc") as $product) : ?>
                            <div class="single-vertical-product d-flex">
                                <div class="product-image">
                                    <a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><img
                                            style="witdh:100px; height:100px" src="../upload/<?= $product['image'] ?>"
                                            class="img-fluid" alt=""></a>
                                </div>
                                <div class="product-description">
                                    <h5 class="product-name"><a
                                            href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><?= $product['tensp']; ?></a>
                                    </h5>
                                    <div class="price-box">
                                        <h4><?= number_format($product['gia']); ?>đ</h4>
                                    </div>

                                    <form action="" method="post">
                                        <button style="border: 1px gray;" type="submit"
                                            name="addcart_<?= $product['id'] ?>" class="add-to-cart-btn"><i
                                                class="fa fa-shopping-cart"></i>
                                            Thêm Vào Giỏ Hàng</button>
                                    </form>

                                    <?php if (isset($_POST['addcart_' . $product['id']])) {
												$cart = pdo_query_one("select * from `giohang` where `username` = '" . $_SESSION['username'] . "' AND `id_product` = '" . $product['id'] . "'");
												if ($cart) {
													pdo_query("UPDATE `giohang` SET `amount` = `amount` + 1 WHERE `username` = '" . $_SESSION['username'] . "' AND `id_product` = '" . $product['id'] . "'");
												} else	{
													pdo_query("INSERT INTO `giohang`(`id_product`, `amount`,`username`) VALUES ('" . $product['id'] . "','1','".$_SESSION['username'] ."')");
												}

												
											} ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

















































        <div class="newsletter-container dark-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="newsletter-wrapper d-md-flex">
                            <div class="newsletter-text">
                                <h2>ĐĂNG KÝ MAIL <span>Đăng Ký Nhận Thông Báo Tin Tức & Ưu Đãi</span></h2>
                            </div>
                            <div class="newsletter-input">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <form id="mc-form" class="mc-form subscribe-form">
                                            <input type="email" id="mc-email" autocomplete="off"
                                                placeholder="Nhập Email Của Bạn" required="">
                                            <button id="mc-submit" type="submit">Dăng Ký</button>
                                        </form>

                                    </div>
                                </div>
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="mailchimp-error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">

                        <div class="social-icons text-end mt-5">
                            <ul>
                                <li><a class="facebook-link" href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <span class="popup">facebook</span>
                                </li>
                                <li><a class="rss-link" href="#"><i class="fa fa-rss"></i></a>
                                    <span class="popup">rss</span>
                                </li>
                                <li><a class="twitter-link" href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <span class="popup">twitter</span>
                                </li>
                                <li><a class="skype-link" href="#"><i class="fa-brands fa-skype"></i></a>
                                    <span class="popup">Skype</span>
                                </li>
                                <li><a class="dribbble-link" href="#"><i class="fa-brands fa-dribbble"></i></a>
                                    <span class="popup">Dribbble</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>