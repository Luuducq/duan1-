<?php
require('../include/head.php');
require('../include/header.php');
?>



<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-3 pb-1">
                <div class="col-md-12">
                    <div class="fromtitle">
                        <h4>Lịch sử mua hàng</h4>
                    </div>
                    <div class="fromcontent">
                        <div class="table-responsive dt-responsive">
                            <div class="dataTables_wrapper dt-bootstrap5">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                                    <tr>
                                        <th>Tài khoản</th>
                                        <th>Tên khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Phương thức thanh toán</th>
                                    </tr>
                                    <?php  foreach (pdo_query("SELECT * FROM `bill` WHERE `idtk` = '".$_SESSION['username']."' ") as $kkkk) { ?>
                    <tr>
                    <td><?=$kkkk['idtk'];?></td>
                    <td><?= $kkkk['billname'] ?></td>
                    <td><?= $kkkk['billdiachi']?> </td>
                    <td><?= $kkkk['billsdt'] ?></td>
                    <td><?= $kkkk['billemail']?></td>
                     <td><?= $kkkk['ngaydathang'] ?></td>
                    <td><?= $kkkk['amount'] ?></td>
                     <td><?= $kkkk['total'] ?></td>
                    <td><?= $kkkk['billpttt'] ?></td>
                </tr>
                  <?php }
                  ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </div>

 <footer>
    <div class="container">
        <!-- footer navigation -->
        <div class="footer-navigation section-padding">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <!-- footer description -->
                    <div class="footer-description">
                        <div class="footer-logo">
                            <img width="220" height="100" src="/duan1/nam/images/LOGO.jpg" alt="">
                        </div>
                    </div>
                    <!-- end of footer description -->
                </div>
                <div class="col-lg-8 col-md-8">
                    <!-- footer nav links -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title">CODEDECO FRAGRANCE</h2>
                                <ul class="footer-nav-links">
                                    <li><a href="shop-left-sidebar.html">Người đại diện : Dương Thị Uyên Nhung</a></li>
                                    <li><a href="shop-left-sidebar.html">Địa chỉ trụ sở: Số 70 ngõ 445 Đ.Lạc Long Quân, Q.Tây Hồ, Hà Nội</a></li>
                                    <li><a href="shop-left-sidebar.html">Số đăng kí kinh doanh: 01B8021029</a></li>
                                    <li><a href="contact.html">Hotline: 05678.83.111 – CSKH : 05678.82.111</a></li>
                                    
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title"><a href="my-account.html">CHĂM SÓC KHÁCH HÀNG</a>
                                </h2>
                                <ul class="footer-nav-links">
                                    <li><a href="#">Hỏi đáp - FAQs</a></li>
                                    <li><a href="#">Blogs</a></li>
                                    <li><a href="my-account.html">Trải nghiệm mua sắm hài lòng</a></li>
                                    <li><a href="my-account.html">Group mât mã về mùi hương</a></li>
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- single footer nav block -->
                            <div class="single-footer-nav-block">
                                <h2 class="block-title">CHÍNH SÁCH BÁN HÀNG</h2>
                                <ul class="footer-nav-links">
                                    <li><a href="shop-left-sidebar.html">Hướng dẫn mua hàng</a></li>
                                    <li><a href="shop-left-sidebar.html">Chính sách đổi trả hàng</a></li>
                                    <li><a href="shop-left-sidebar.html">Điều khoản sử dụng</a></li>
                                    <li><a href="shop-left-sidebar.html">Chính sách bảo mật thông tin cá nhân</a></li>
                                    <li><a href="shop-left-sidebar.html">Quy định chung</a></li>
                                </ul>
                            </div>
                            <!-- end of single footer nav block -->
                        </div>
                       
                    </div>
                    <!-- end of footer nav links -->

                </div>
            </div>
        </div>
        <!-- end of footer navigation -->

        <!-- copyright section -->
        <div class="copyright-section">
            <div class="copyright-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="copyright-text text-center text-md-start">Copyright © 2021 <a href="#">CODE DECO</a>.
                            All Rights Reserved</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="payment-logos text-md-end text-center">
                            <img width="252" height="28" src="images/payment.webp" alt="payment logo">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of copyright section -->
        </div>
    </div>
</footer>

<!--====  End of footer  ====-->
</div>
</div>
</div>
</div>


<!-- quick view modal -->
<div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <!-- product quickview image gallery -->
                        <!--Modal Tab Content Start-->
                        <div class="tab-content product-details-large" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                    <img width="458" height="458" src="images/image1.webp" class="img-fluid" alt="">
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                    <img width="458" height="458" src="images/image2.webp" class="img-fluid" alt="">
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                    <img width="458" height="458" src="images/image3.webp" class="img-fluid" alt="">
                                </div>
                                <!--Single Product Image End-->
                            </div>
                            <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <!--Single Product Image Start-->
                                <div class="single-product-img img-full">
                                    <img width="458" height="458" src="images/image4.webp" class="img-fluid" alt="">
                                </div>
                                <!--Single Product Image End-->
                            </div>
                        </div>
                        <!--Modal Content End-->
                        <!--Modal Tab Menu Start-->
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu" role="tablist">
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img width="458" height="458" src="images/image1.webp" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img width="458" height="458" src="images/image2.webp" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img width="458" height="458" src="images/image3.webp" class="img-fluid" alt=""></a>
                                </div>
                                <div class="single-tab-menu img-full">
                                    <a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img width="458" height="458" src="images/image4.webp" class="img-fluid" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!--Modal Tab Menu End-->
                        <!-- end of product quickview image gallery -->
                    </div>
                    <div class="col-lg-7 col-md-5">
                        <!-- product quick view description -->
                        <div class="product-options">
                            <h2 class="product-title">FADED SHORT SLEEVE</h2>
                            <p class="condition"><span>Condition:</span> New</p>
                            <h2 class="product-price">$12.90</h2>
                            <p class="product-description">Faded short sleeve t-shirt with high neckline. Soft and
                                stretchy material
                                for a
                                comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                            <div class="social-share-buttons">
                                <ul>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i> Share</a></li>
                                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i>
                                            Google+</a></li>
                                    <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i> Pinterest</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="stock-details">288 items <span class="stock-status in-stock">In Stock</span>
                            </p>
                            <p class="quantity">Quantity:
                                <span class="pro-qty counter"><input type="text" value="1" class="mr-5"></span>

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

                            <a href="#" class="add-to-cart-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart-modal-container"><i class="fa fa-shopping-cart"></i>
                                Add to Cart</a>
                        </div>
                        <!-- end of product quick view description -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end of quick view modal -->


<!-- add to cart modal -->
<div class="modal fade add-to-cart-modal-container" id="add-to-cart-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <!-- cart product short details -->

                        <div class="cart-product-short-desc">
                            <h2 class="cart-success-message"> Product successfully added to your shopping cart</h2>
                            <div class="cart-product-short-desc-content d-flex">
                                <div class="product-image">
                                    <img width="250" height="250" src="images/faded-short-sleeve-tshirts.webp" class="img-fluid" alt="">
                                </div>
                                <div class="product-desc">
                                    <h4 class="product-title">Printed Dress</h4>
                                    <p class="color-size">Yellow, S</p>
                                    <p class="quantity"><span>Quantity</span> 1</p>
                                    <p class="total-amount"><span>Total:</span> $20.40</p>
                                </div>
                            </div>
                        </div>
                        <!-- end of cart product short details -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- cart product calculation -->
                        <div class="cart-product-calculation">
                            <h2 class="cart-info-message">There is 1 item in your cart.</h2>
                            <div class="product-calculations">
                                <p><span>Total products</span> $20.50</p>
                                <p><span>Total shipping</span> $2</p>
                                <p><span>Total</span> $22.50</p>
                            </div>
                        </div>
                        <!-- end of cart product calculation -->

                        <!-- cart modal buttons -->
                        <div class="cart-modal-buttons">
                            <a class="continue-shopping-btn" href="shop-left-sidebar.html"><i class="fa fa-chevron-left"></i>
                                Continue
                                shopping</a>
                            <a class="proceed-checkout-btn" href="checkout.html">Proceed to checkout <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                        <!-- end of cart modal buttons -->

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end of add to cart modal -->


<!-- scroll to top  -->
<a href="#" class="scroll-top"></a>
<!-- end of scroll to top -->



<!-- ************************* JS ************************* -->
<!-- jQuery JS -->
<script src="/duan1/nam/js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="/duan1/nam/js/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="/duan1/nam/js/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="/duan1/nam/js/plugins.js"></script>

<!-- Main JS -->
<script src="/duan1/nam/js/main.js"></script>



</body>

</html>
