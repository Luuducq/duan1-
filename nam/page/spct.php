<?php
require('../include/head.php');
require('../include/header.php');
?>

<section class="single-product-page-content">
    <div class="container">
        <div class="row">
        <?php foreach (pdo_query("select *from danhmuc order by id desc LIMIT 3") as $categori) : ?>

            <div class="col-lg-12 col-md-12">
                <div class="row">
                <?php foreach (pdo_query("select *from sanpham where `iddanhmuc` = '" . $categori['id'] . "' order by id desc") as $product) : ?>
                     <div class="col-lg-5 col-md-7">
                         <div class="single-product-page-image-gallery">
                            <!-- product quickview image gallery -->
                            <!--Modal Tab Content Start-->
                            <div class="tab-content product-details-large  sale-badge new-badge">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full ">
                                        <img width="458" height="458" src="/duan1/upload/<?= $product['image'] ?>" class="img-fluid" alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full ">
                                        <img width="458" height="458" src="/44444/admin/image/bd1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full ">
                                        <img width="458" height="458" src="/44444/admin/image/bd2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                                <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full ">
                                        <img width="458" height="458" src="/44444/admin/image/bd3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            </div>
                            <!--Modal Content End-->
                            <!--Modal Tab Menu Start-->

                            <div class="single-product-menu">
                                <div class="nav single-slide-menu slick-initialized slick-slider" role="tablist"><i class="fa fa-angle-left slick-arrow" style=""></i>
                                    <div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 1610px; transform: translate3d(-322px, 0px, 0px);">
                                            <div class="single-tab-menu img-full slick-slide slick-cloned" tabindex="-1" style="width: 161px;" data-slick-index="-2" id="" aria-hidden="true">
                                                <a data-bs-toggle="tab" id="" href="#single-slide3" tabindex="-1"><img width="458" height="458" src="/duan1/upload/<?= $product['image'] ?>" class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="single-tab-menu img-full slick-slide slick-current slick-active" tabindex="0" style="width: 161px;" data-slick-index="0" aria-hidden="false">
                                                <a data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1" tabindex="0"><img width="458" height="458" src="/duan1/upload/<?= $product['image'] ?>" class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="single-tab-menu img-full slick-slide slick-active" tabindex="0" style="width: 161px;" data-slick-index="1" aria-hidden="false">
                                                <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2" tabindex="0"><img width="458" height="458" src="/44444/admin/image/bd1.jpg" class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="single-tab-menu img-full slick-slide" tabindex="-1" style="width: 161px;" data-slick-index="2" aria-hidden="true">
                                                <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3" tabindex="-1"><img width="458" height="458" src="/44444/admin/image/bd2.jpg" class="img-fluid" alt=""></a>
                                            </div>

                                        </div>
                                    </div><i class="fa fa-angle-right slick-next-btn slick-arrow" style=""></i>
                                </div>
                            </div>
                            <!--Modal Tab Menu End-->
                            <!-- end of product quickview image gallery -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-5">
                        <!-- product quick view description -->
                        <div class="product-options">
                            <h2 class="product-title"><?= $product['tensp']; ?></h2>
                            <h2 class="product-price" style = "color:red"><?= number_format($product['gia']); ?>đ</h2>

                            <div class="social-share-buttons">
                                <ul>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>
                                            Tweet</a></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>
                                            Share</a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i>
                                            Google+</a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i>
                                            Pinterest</a></li>
                                </ul>
                            </div>
                            <p class="stock-details">Tổng hàng trong kho : <span class="stock-status in-stock"> <?= $product['soLuong']; ?></span></p>
                            <p class="quantity">Số lượng mua:

                                <span class="pro-qty counter"><input type="text" value="1" class="mr-5"><a href="#" class="inc qty-btn mr-5"><i class="fa fa-plus"></i></a><a href="#" class="dec qty-btn"><i class="fa fa-minus"></i></a></span>

                            </p>
                            <p class="size">
                                Size: <br>
                                <select name="chooseSize" id="chooseSize">
                                    <option value="0">XXL</option>
                                    <option value="0">L</option>
                                    <option value="0">M</option>
                                    <option value="0">S</option>
                                </select>
                            </p>
                            <p class="color">
                                Color: <br>
                                <a href="#"><span class="color-block color-choice-1"></span></a>
                                <a href="#"><span class="color-block color-choice-2"></span></a>
                                <a href="#"><span class="color-block color-choice-3 active"></span></a>
                            </p>

                            <a href="#" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                Thêm giỏ hàng</a>
                        </div>
                        <!-- end ofproduct quick view description -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-description-tab-container section-padding">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#more-info" role="tab" aria-selected="true">Mô tả</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false" tabindex="-1">Đánh giá</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="more-info" role="tabpanel" aria-labelledby="home-tab">
                                    <p><?= $product['mota']; ?></p>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="product-ratting-wrap">
                                        <div class="pro-avg-ratting">
                                            <h4>4.5 <span>(Overall)</span></h4>
                                            <span>Based on 9 Comments</span>
                                        </div>
                                        <div class="ratting-list">
                                             <div class="sin-list float-start">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>


                                        <div class="rattings-wrapper">
                                             <div class="sin-rattings">
                                                <div class="ratting-author">
                                                    <h3>Cristopher Lee</h3>
                                                    <div class="ratting-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span>(5)</span>
                                                    </div>
                                                </div>
                                                <p>enim ipsam voluptatem quia voluptas sit
                                                    aspernatur aut odit aut fugit, sed quia res eos
                                                    qui ratione voluptatem sequi Neque porro
                                                    quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci veli</p>
                                            </div>
                                        </div>

                                        <div class="ratting-form-wrapper fix">
                                            <h3>Add your Comments</h3>
                                            <form action="#">
                                                <div class="ratting-form row">
                                                    <div class="col-12 mb-15">
                                                        <h5>Rating:</h5>
                                                        <div class="ratting-star fix">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12 mb-15">
                                                        <label for="name">Name:</label>
                                                        <input id="name" placeholder="Name" type="text">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb-15">
                                                        <label for="email">Email:</label>
                                                        <input id="email" placeholder="Email" type="text">
                                                    </div>
                                                    <div class="col-12 mb-15">
                                                        <label for="your-review">Your
                                                            Review:</label>
                                                        <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <input value="add review" type="submit">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
            </div>
        
</section>

<?php
require('../include/footer.php');
?>