
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
						</div><!-- Hero Item End -->
					</div>

					<!-- ====  End of Hero slider content  ==== -->

					<!-- ======  Featured service content  ======= -->

					<div class="featured-service-container">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<!-- single-feature -->
								<div class="single-featured-service featured-service-bg-1">
									<div class="single-featured-service-content">
										<h3>TOP 5 NOTES HƯƠNG NƯỚC HOA</h3>
									</div>
								</div>
								<!-- end of single feature -->
							</div>
							<div class="col-lg-4 col-md-6">
								<!-- single-feature -->
								<div class="single-featured-service featured-service-bg-2">
									<div class="single-featured-service-content">
										<h3>CITY OF SCENT – NHỮNG THÀNH PHỐ KỂ CÂU CHUYỆN MÙI HƯƠNG.</h3>
									</div>
								</div>
								<!-- end of single feature -->
							</div>
							<div class="col-lg-4 col-md-6">
								<!-- single-feature -->
								<div class="single-featured-service featured-service-bg-3">
									<div class="single-featured-service-content">
										<h3>NƯỚC HOA VÀ CUỘC HÀNH TRÌNH LỊCH SỬ ĐẦY RỰC RỠ</h3>
									</div>
								</div>
								<!-- end of single feature -->
							</div>
						</div>

					</div>

					<!-- ====  End of Featured service content  ==== -->

				</div>
			</div>
		</div>
		<div class="col-12">
			<div class="row">
				<div class="col-lg-3 col-md-4 mb-50">

					<!-- ======  Homepage sidebar  ======= -->

					<div class="homepage-sidebar">
						<!-- vertical auto slider container -->
						<div class="sidebar">
							<h2 class="block-title">TOP BÁN CHẠY </h2>
							<div class="vertical-product-slider-container">
								<div class="single-vertical-slider">
									<div class="vertical-auto-slider-product-list">
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/3.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/4.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/5.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/6.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/7.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->

									</div>
								</div>
							</div>
						</div>
						<!-- end of vertical auto slider container -->

						<!-- homepage sidebar banner -->
						<div class="sidebar">
							<div class="homepage-sidebar-banner-container">
								<a href="shop-left-sidebar.html">
									<img width="269" height="500px" src="images/a1.jpg" class="img-fluid" alt="">
								</a>
							</div>
						</div>
						<!-- end of homepage sidebar banner -->

						<!-- vertical auto slider container -->
						<div class="sidebar">
							<h2 class="block-title">LATEST PRODUCTS</h2>
							<div class="vertical-product-slider-container">
								<div class="single-vertical-slider">
									<div class="vertical-auto-slider-product-list">
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>
											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/3.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/4.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/5.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/6.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->
										<!-- single vertical product -->
										<div class="single-auto-vertical-product d-flex">
											<div class="product-image">
												<a href="single-product-variable.html"><img width="250" height="250" src="images/7.webp" class="img-fluid" alt=""></a>
											</div>
											<div class="product-description">
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

											</div>
										</div>
										<!-- end of single vertical product -->

									</div>
								</div>
							</div>
						</div>
						<!-- end of vertical auto slider container -->
					</div>

					<!-- ====  End of Homepage sidebar  ==== -->

				</div>
				<div class="col-lg-9 col-md-8 mb-50">

					<div class="homepage-main-content">
						<!-- horizontal product slider -->
						<div class="horizontal-product-slider">
							<div class="row">
								<div class="col-lg-12">
									<!-- Block title -->
									<div class="block-title">
										<h2><a href="#">MÙI HƯƠNG NAM NỮ</a></h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<!-- horizontal product slider container -->
									<div class="horizontal-product-list">
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image new-badge">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short
														Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image sale-badge">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/3.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/4.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a>
												</h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/5.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/6.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a>
												</h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/7.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/8.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short
														Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image new-badge sale-badge">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/9.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/10.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a>
												</h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->


									</div>
									<!-- end of horizontal product slider container -->
								</div>
							</div>
						</div>
						<!-- end of horizontal product slider -->

						<!-- homepage double banner section -->
						<div class="homepage-banners mb-50">
							<div class="row">
								<div class="col-lg-6 col-md-12 mb-20 mb-lg-0">
									<!-- ======  Homepage single split banner  ======= -->

									<div class="single-banner-container">
										<a href="shop-left-sidebar.html">
											<img width="417" height="117" src="images/banner1.webp" class="img-fluid" alt="">
										</a>
									</div>

									<!-- ====  End of Homepage single split banner  ==== -->

								</div>
								<div class="col-lg-6 col-md-12">
									<!-- ======  Homepage single split banner  ======= -->

									<div class="single-banner-container">
										<a href="shop-left-sidebar.html">
											<img width="417" height="117" src="images/banner2.webp" class="img-fluid" alt="">
										</a>
									</div>

									<!-- ====  End of Homepage single split banner  ==== -->

								</div>

							</div>
						</div>
						<!-- end of homepage double banner section -->

						<!-- horizontal product slider -->
						<div class="horizontal-product-slider">
							<div class="row">
								<div class="col-lg-12">
									<!-- Block title -->
									<div class="block-title">
										<h2><a href="#">TINH DẦU KHUẾCH TÁN</a></h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<!-- horizontal product slider container -->
									<div class="horizontal-product-list">

										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/4.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/3.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a>
												</h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/10.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/9.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a>
												</h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/6.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/5.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Printed
														Dress</a>
												</h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/8.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/7.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short
														Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->
										<!-- single product -->
										<div class="single-product">
											<div class="single-product-content">
												<div class="product-image">
													<a href="single-product-variable.html">
														<img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt="">
														<img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt="">
													</a>
													<div class="image-btn">
														<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container"><i class="fa fa-search"></i></a>
														<a href="#"><i class="fa fa-heart-o"></i></a>
													</div>
												</div>
												<h5 class="product-name"><a href="single-product-variable.html">Faded
														Short
														Sleeve</a></h5>
												<div class="price-box">
													<h4>$ 12.00</h4>
												</div>

												<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i> Add
													to cart</a>
											</div>
										</div>
										<!-- end of single product -->



									</div>
									<!-- end of horizontal product slider container -->
								</div>
							</div>
						</div>
						<!-- end of horizontal product slider -->

						<!-- vertical slider container -->
						<div class="vertical-product-slider-container">
							<div class="row">
								<div class="col-lg-4">
									<!-- ======  single vertical product slider  ======= -->

									<div class="single-vertical-slider">
										<h2 class="block-title vertical-slider-block-title">PHIÊN BẢN TẾT 2024</h2>
										<div class="vertical-product-list">
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/3.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/4.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/5.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/6.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
										</div>
									</div>

									<!-- ====  End of single vertical product slider  ==== -->

								</div>

								<div class="col-lg-4">
									<!-- ======  single vertical product slider  ======= -->

									<div class="single-vertical-slider">
										<h2 class="block-title vertical-slider-block-title">SET QUÀ TẶNG</h2>
										<div class="vertical-product-list">

											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/3.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/4.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/5.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/6.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
										</div>
									</div>

									<!-- ====  End of single vertical product slider  ==== -->

								</div>

								<div class="col-lg-4">
									<!-- ======  single vertical product slider  ======= -->

									<div class="single-vertical-slider">
										<h2 class="block-title vertical-slider-block-title">NẾN THƠM</h2>
										<div class="vertical-product-list">
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/3.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/4.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/5.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Printed
															Dress</a>
													</h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
											<!-- single vertical product -->
											<div class="single-vertical-product d-flex">
												<div class="product-image">
													<a href="#"><img width="250" height="250" src="images/6.webp" class="img-fluid" alt=""></a>
												</div>
												<div class="product-description">
													<h5 class="product-name"><a href="single-product-variable.html">Faded
															Short
															Sleeve</a></h5>
													<div class="price-box">
														<h4>$ 12.00</h4>
													</div>
													<a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
														Add to cart</a>
												</div>
											</div>
											<!-- end of single vertical product -->
										</div>
									</div>

									<!-- ====  End of single vertical product slider  ==== -->
								</div>

							</div>
						</div>
						<!-- end of vertical slider container -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<!-- homepage wide banner section -->

			<div class="home-wide-bg-container mb-50">
				<a class="banner-width-bg-link" href="#">
					<img width="1169" height="300px" src="images/bn2.jpg" alt="">
				</a>
			</div>

			<!-- end of homepage wide banner section -->
		</div>
	</div>

	<!-- latest product section -->

	<div class="latest-product-section  mb-50">
		<div class="row">
			<div class="col-lg-12">
				<!-- Block title -->
				<div class="block-title">
					<h2>SẢN PHẨM MỚI</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-6">
				<!-- single latest product -->
				<div class="single-latest-product">
					<div class="product-image">
						<a href="single-product-variable.html">
							<img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt="">
							<img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt="">
						</a>
					</div>
					<div class="product-description">
						<h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
						<div class="price-box">
							<h4>$ 12.00</h4>
						</div>
					</div>

					<div class="latest-product-hover-content">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
							Add to cart</a>
						<p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
						</p>
					</div>
				</div>
				<!-- end of single latest product -->
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<!-- single latest product -->
				<div class="single-latest-product">
					<div class="product-image">
						<a href="single-product-variable.html">
							<img width="250" height="250" src="images/3.webp" class="img-fluid" alt="">
							<img width="250" height="250" src="images/4.webp" class="img-fluid" alt="">
						</a>
					</div>
					<div class="product-description">
						<h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
						<div class="price-box">
							<h4>$ 12.00</h4>
						</div>
					</div>

					<div class="latest-product-hover-content">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
							Add to cart</a>
						<p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
						</p>
					</div>
				</div>
				<!-- end of single latest product -->
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<!-- single latest product -->
				<div class="single-latest-product">
					<div class="product-image">
						<a href="single-product-variable.html">
							<img width="250" height="250" src="images/5.webp" class="img-fluid" alt="">
							<img width="250" height="250" src="images/6.webp" class="img-fluid" alt="">
						</a>
					</div>
					<div class="product-description">
						<h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
						<div class="price-box">
							<h4>$ 12.00</h4>
						</div>
					</div>

					<div class="latest-product-hover-content">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
							Add to cart</a>
						<p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
						</p>
					</div>
				</div>
				<!-- end of single latest product -->
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<!-- single latest product -->
				<div class="single-latest-product">
					<div class="product-image">
						<a href="single-product-variable.html">
							<img width="250" height="250" src="images/7.webp" class="img-fluid" alt="">
							<img width="250" height="250" src="images/8.webp" class="img-fluid" alt="">
						</a>
					</div>
					<div class="product-description">
						<h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
						<div class="price-box">
							<h4>$ 12.00</h4>
						</div>
					</div>

					<div class="latest-product-hover-content">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
							Add to cart</a>
						<p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
						</p>
					</div>
				</div>
				<!-- end of single latest product -->
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<!-- single latest product -->
				<div class="single-latest-product">
					<div class="product-image">
						<a href="single-product-variable.html">
							<img width="250" height="250" src="images/9.webp" class="img-fluid" alt="">
							<img width="250" height="250" src="images/10.webp" class="img-fluid" alt="">
						</a>
					</div>
					<div class="product-description">
						<h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
						<div class="price-box">
							<h4>$ 12.00</h4>
						</div>
					</div>

					<div class="latest-product-hover-content">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
							Add to cart</a>
						<p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
						</p>
					</div>
				</div>
				<!-- end of single latest product -->
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6">
				<!-- single latest product -->
				<div class="single-latest-product">
					<div class="product-image">
						<a href="single-product-variable.html">
							<img width="250" height="250" src="images/1_1.webp" class="img-fluid" alt="">
							<img width="250" height="250" src="images/2_1.webp" class="img-fluid" alt="">
						</a>
					</div>
					<div class="product-description">
						<h5 class="product-name"><a href="#">Faded Short Sleeve</a></h5>
						<div class="price-box">
							<h4>$ 12.00</h4>
						</div>
					</div>

					<div class="latest-product-hover-content">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
							Add to cart</a>
						<p>
							<a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal-container">Quick View</a> | <a href="#">Wishlist</a>
						</p>
					</div>
				</div>
				<!-- end of single latest product -->
			</div>
		</div>
	</div>

	<!-- end of latest product section -->
</div>
</div>







<section class="newsletter-section">
	<div class="container">
		<div class="newsletter-container dark-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12">

						<!-- ======  Newsletter input box  ======= -->

						<div class="newsletter-wrapper d-md-flex">
							<!-- newsletter text -->
							<div class="newsletter-text">
								<h2>newsletter <span>Sign up for our newsletter</span></h2>
							</div>
							<!-- end of newsletter text -->

							<!-- newsletter input -->
							<div class="newsletter-input">
								<div class="input-group">
									<div class="input-group-append">
										<form id="mc-form" class="mc-form subscribe-form">
											<input type="email" id="mc-email" autocomplete="off" placeholder="Enter your e-mail" required="">
											<button id="mc-submit" type="submit">Subscribe</button>
										</form>

									</div>
								</div>
								<!-- mailchimp-alerts Start -->
								<div class="mailchimp-alerts">
									<div class="mailchimp-submitting"></div>
									<!-- mailchimp-submitting end -->
									<div class="mailchimp-success"></div>
									<!-- mailchimp-success end -->
									<div class="mailchimp-error"></div><!-- mailchimp-error end -->
								</div><!-- mailchimp-alerts end -->
							</div>
							<!-- end of newsletter input -->
						</div>

						<!-- ====  End of Newsletter input box  ==== -->

					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<!-- ======  Social icon list  ======= -->

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

						<!-- ====  End of Social icon list  ==== -->

					</div>
				</div>
			</div>
		</div>
	</div>
</section>