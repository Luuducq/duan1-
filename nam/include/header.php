	<!--===================================
					=            Header            		   =
					=====================================-->

	<header>
		<!-- header top nav -->
		<div class="header-top-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<!-- user information menu -->

						<!-- end of user information menu -->
					</div>

				</div>
			</div>
		</div>
		<!-- end of header top nav -->

		<!-- header bottom -->

		<!-- header content -->
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 offset-lg-0 text-md-start text-sm-center">
						<!-- logo -->
						<div class="logo">
							<a href="index.html"><img width="167" height="69" src="./images/LOGO.jpg" class="img-fluid" alt="logo"></a>
						</div>
						<!-- end of logo -->
					</div>
					<div class="col-lg-6 col-md-8">
						<!-- header search bar -->
						<div class="header-search-bar">
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
								<ul>
									<?php if (isset($_SESSION['username'])) {
										if ($_SESSION['role'] == 1) { ?>
											<li><a href="duan1/admin/index.php" style="font-size: 18px; color:black; margin-top: 10px;"><?php echo $_SESSION['username'] ?> </a></li>
											<li><a href="/duan1/nam/page/dangxuat.php" style="font-size: 18px; color:black; margin-top: 10px;">| Đăng Xuất</a></li>
										<?php } else { ?>
											<li><a href="#" style="font-size: 18px; color:black; margin-top: 10px;"><?php echo $_SESSION['username'] ?> </a></li>
											<li><a href="/duan1/nam/page/dangxuat.php" style="font-size: 18px; color:black; margin-top: 10px;">| Đăng Xuất</a></li>
										<?php }
									} else { ?>
										<li><a href="/duan1/nam/page/dangnhap.php" style="font-size: 18px; color:black; margin-top: 10px;">Đăng Ký | Đăng nhập</a></li>
									<?php } ?>
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
										<li><a href="/duan1/nam/page/sanpham.php">Sản phẩm</a></li>
										<li><a href="/duan1/nam/page/doitra.php">Phương tiện truyền thông</a></li>
										<li><a href="/duan1/nam/page/lienhe.php">Liên hệ</a></li>

									</ul>
								</nav>

								<!-- Mobile Menu -->
								<div class="mobile-menu order-12 d-block d-lg-none"></div>

							</div>

							<!-- end of Header navigation right side-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of header navigation section -->

		<!-- end of header bottom -->
	</header>

	<!--=====  End of Header  ======-->

	<!--===========================================
					=            homepage content section            =
					============================================-->