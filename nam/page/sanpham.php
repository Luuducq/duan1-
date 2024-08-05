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
						<!-- end of Header category list -->
					</div>
					<div class="col-lg-9 col-md-8">
						<!-- ======  Hero slider content  ======= -->

						<div class="hero-slider hero-slider-one">
							<!-- Hero Item Start -->
							<div class="hero-item hero-bg-1">
								<div class="row align-items-center justify-content-between">
									<!-- Hero Content -->
									<div class="hero-content col-md-8 offset-md-4 col-12 offset-0">
										<h1>CODEDECO </h1>
										<h2><span>CÂU CHUYỆN THƯƠNG HIỆU</span></h2>
										<p style="color: white;">Tạo dựng thương hiệu tinh dầu chất lượng với giá thành hợp lý, mang đến cho bạn không gian sống thư giãn mỗi ngày. </p>
										<a href="page/gioithieu.php	" style="color: white; ">Xem thêm</a>
									</div>
								</div>
							</div><!-- Hero Item End -->

							<!-- Hero Item Start -->
							<div class="hero-item hero-bg-2">
								<div class="row align-items-center justify-content-between">
									<!-- Hero Content -->
									<div class="hero-content col-md-8 offset-md-4 col-12 offset-0">
										<h1>CODEDECO</h1>
										<h2><span>CÂU CHUYỆN THƯƠNG HIỆU</span></h2>
										<p style="color: white;">Tạo dựng thương hiệu tinh dầu chất lượng với giá thành hợp lý, mang đến cho bạn không gian sống thư giãn mỗi ngày. </p>
										<a href="#" style="color: white; ">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="horizontal-product-slider-container">

		<div class="row mb-3">
			<div class="col-lg-12">
				<div class="block-title">
					<h2><?= pdo_query_one("select * from `danhmuc` where `id` = '" . $_GET['iddanhmuc'] . "' ")['tendanhmuc']; ?></h2>
				</div>
			</div>
			<div class="row">
			<?php foreach (pdo_query("select *from sanpham where `iddanhmuc` = '" . $_GET['iddanhmuc'] . "' order by id desc") as $product) : ?>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-latest-product">
						<div class="product-image">
							<a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>">
								<img width="250" height="250" src="../upload/<?= $product['image'] ?>" class="img-fluid" alt="">
							</a>
						</div>
						<div class="product-description">
							<h5 class="product-name"><a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><?= $product['tensp']; ?></a></h5>
							<div class="price-box">
								<h4><?= number_format($product['gia']); ?>đ</h4>
							</div>
						</div>

						<div class="latest-product-hover-content">
							<a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
								Add to cart</a>
							<p>
								<a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
							</p>
						</div>
					</div>
					<!-- end of single latest product -->
				</div>
				<?php endforeach; ?>
			</div>

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
										<input type="email" id="mc-email" autocomplete="off" placeholder="Nhập Email Của Bạn" required="">
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
							<li><a class="facebook-link" href="//www.facebook.com"><i class="fa fa-facebook"></i></a>
								<span class="popup">facebook</span>
							</li>
							<li><a class="rss-link" href="//rss.com"><i class="fa fa-rss"></i></a>
								<span class="popup">rss</span>
							</li>
							<li><a class="twitter-link" href="//www.twitter.com"><i class="fa fa-twitter"></i></a>
								<span class="popup">twitter</span>
							</li>
							<li><a class="skype-link" href="//www.skype.com"><i class="fa fa-skype"></i></a>
								<span class="popup">Skype</span>
							</li>
							<li><a class="dribbble-link" href="//www.dribbble.com"><i class="fa fa-dribbble"></i></a>
								<span class="popup">Dribbble</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>