	<!--===================================
					=            Header            		   =
					=====================================-->

	<header>
		<!-- header top nav -->
		<div class="header-top-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">

					</div>

				</div>
			</div>
		</div><div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 offset-lg-0 text-md-start text-sm-center">
						<!-- logo -->
						<div class="logo">
							<a href="../index.php"><img style=" height: 150px;" src="/duan1/nam/images/LOGO.jpg" class="img-fluid" alt="logo"></a>
						</div>
						<!-- end of logo -->
					</div>
					<div class="col-lg-6 col-md-8">	
						<!-- header search bar -->
						<div class="header-search-bar" style="margin-top: 50px;">
							<div class="input-group">
								<select name="categoryName" id="categoryName">
									<option value="">Tìm kiếm</option>
								</select>
								<div class="input-group-append">
									<input type="search" name="search">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
						<!-- end of header search bar -->
					</div>
					<div class="col-lg-3 col-md-4">
						<!-- shopping cart -->
						<div class="shopping-cart float-lg-end d-flex justify-content-start">

							<div class="user-information-menu">
								<ul><?php $checkusers = pdo_query_one("select * from `taikhoan` where `tentk` = '" . $_SESSION['username'] . "' "); ?>
									<?php if (isset($_SESSION['username'])) {
										if (isset($_SESSION['username'])) { ?>
											<li><a href="<?php if($checkusers['role'] == 1) { echo '/duan1/admin/index.php'; } else { echo '/duan1/nam/page/edittk.php'; }?>" style="font-size: 18px; color:black; margin-top: 10px;"><?php echo $_SESSION['username'] ?> </a></li>
											<li><a href="/duan1/nam/page/dangxuat.php" style="font-size: 18px; color:black; margin-top: 10px;">| Đăng Xuất</a></li>
										<?php }
									} else { ?>
										<li><a href="/duan1/nam/page/dangnhap.php" style="font-size: 18px; color:black; margin-top: 10px;">Đăng Ký | Đăng nhập</a></li>
									<?php } ?>



									<li>
									<div class="shopping-cart float-lg-end d-flex justify-content-start" id="shopping-cart">
                                            <div class="cart-icon">
                                                <a href="cart.html"><img width="39" height="27" src="assets/images/icon-topcart.webp" class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <h2><a href="cart.html">Shopping Cart <span><span id="cartStatus">(Empty)</span></span></a></h2>
                                            </div>

                                            <div class="cart-floating-box" id="cart-floating-box" style="display: none; height: 304.8px; padding-top: 20px; margin-top: 0px; padding-bottom: 20px; margin-bottom: 0px;">
                                                <div class="cart-items">
                                                    <div class="cart-float-single-item d-flex">
                                                        <span class="remove-item"><a href="#"><i class="fa fa-trash"></i></a></span>
                                                        <div class="cart-float-single-item-image">
                                                            <img width="250" height="250" src="assets/images/products/faded-short-sleeve-tshirts.webp" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="cart-float-single-item-desc">
                                                            <p class="product-title"><span class="count">1x</span> <a href="single-product-variable.html">Printed
                                                                    Dress</a></p>
                                                            <p class="size"> <a href="shop-left-sidebar.html">Yellow,
                                                                    S</a></p>
                                                            <p class="price">$20.50</p>
                                                        </div>
                                                    </div>
                                                    <div class="cart-float-single-item d-flex">
                                                        <span class="remove-item"><a href="#"><i class="fa fa-trash"></i></a></span>
                                                        <div class="cart-float-single-item-image">
                                                            <img width="250" height="250" src="assets/images/products/faded-short-sleeve-tshirts.webp" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="cart-float-single-item-desc">
                                                            <p class="product-title"><span class="count">1x</span> <a href="single-product-variable.html">Printed
                                                                    Dress</a></p>
                                                            <p class="size"> <a href="shop-left-sidebar.html">Yellow,
                                                                    S</a></p>
                                                            <p class="price">$20.50</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-calculation d-flex">
                                                    <div class="calculation-details">
                                                        <p class="shipping">Shipping <span>$2</span></p>
                                                        <p class="total">Total <span>$22</span></p>
                                                    </div>
                                                    <div class="checkout-button">
                                                        <a href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end of shopping cart -->
                                        </div></li>

										
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="header-navigation">
			<div class="container">
				<div class="navigation-container">
					<div class="row">
						<div class="col-lg-3 d-none d-lg-block">
							<!-- ======  Header menu left text  ======= -->
							<p class="call-us-text">Call us 24/7: 0338086390</p>
						</div>
						<div class="col-lg-9 col-md-12">

							<!-- Header navigation right side-->

							<!-- main menu start -->
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="/duan1/nam/index.php">Trang chủ</a></li>
										<li><a href="/duan1/nam/page/gioithieu.php">Câu chuyện thương hiệu</a></li>
										<li><a href="/duan1/nam/page/doitra.php">Phương tiện truyền thông</a></li>
										<li><a href="/duan1/nam/page/lienhe.php">Liên hệ</a></li>
										<li><a href="/duan1/nam/page/giohang.php">Giỏ hàng</a></li>

									</ul>
								</nav>
								<div class="mobile-menu order-12 d-block d-lg-none"></div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>