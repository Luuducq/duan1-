<?php
require('../include/head.php');
require('../include/header.php'); 
?>


<div class="col-12">
                                    <form action="#">
                                        <!-- Cart Table -->
                                        <div class="cart-table table-responsive mb-40">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="pro-thumbnail">Ảnh</th>
                                                        <th class="pro-title">Tên sản phẩm</th>
                                                        <th class="pro-price">Giá</th>
                                                        <th class="pro-quantity">Số lương</th>
                                                        <th class="pro-subtotal">Thành tiền</th>
                                                        <th class="pro-remove">Xóa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pro-thumbnail"><a href="single-product-variable.html"><img class="img-fluid" width="250" height="250" src="assets/images/products/1.webp" alt="Product"></a></td>
                                                        <td class="pro-title"><a href="single-product-variable.html">Zeon
                                                                Zen 4 Pro</a></td>
                                                        <td class="pro-price"><span>$295.00</span></td>
                                                        <td class="pro-quantity">
                                                            <span class="pro-qty-cart counter"><a href="#" class="dec qty-btn-cart"></a><input type="text" value="1" class="mr-5"><a href="#" class="inc qty-btn-cart"></a></span>
                                                        </td>
                                                        <td class="pro-subtotal"><span>$295.00</span></td>
                                                        <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    x`</form>

                                    <div class="row">

                                        <div class="col-lg-6 col-12 mb-15">
                                            <!-- Calculate Shipping -->
                                            <div class="calculate-shipping">
                                                <h4>Calculate Shipping</h4>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12 mb-25">
                                                            <select class="nice-select">
                                                                <option>Bangladesh</option>
                                                                <option>China</option>
                                                                <option>country</option>
                                                                <option>India</option>
                                                                <option>Japan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 mb-25">
                                                            <select class="nice-select">
                                                                <option>Dhaka</option>
                                                                <option>Barisal</option>
                                                                <option>Khulna</option>
                                                                <option>Comilla</option>
                                                                <option>Chittagong</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 mb-25">
                                                            <input type="text" placeholder="Postcode / Zip">
                                                        </div>
                                                        <div class="col-md-6 col-12 mb-25">
                                                            <input type="submit" value="Estimate">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Discount Coupon -->
                                            <div class="discount-coupon">
                                                <h4>Discount Coupon Code</h4>
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12 mb-25">
                                                            <input type="text" placeholder="Coupon Code">
                                                        </div>
                                                        <div class="col-md-6 col-12 mb-25">
                                                            <input type="submit" value="Apply Code">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-12 mb-40 d-flex">
                                            <div class="cart-summary">
                                                <div class="cart-summary-wrap">
                                                    <h4>Cart Summary</h4>
                                                    <p>Sub Total <span>$1250.00</span></p>
                                                    <p>Shipping Cost <span>$00.00</span></p>
                                                    <h2>Grand Total <span>$1250.00</span></h2>
                                                </div>
                                                <div class="cart-summary-button">
                                                    <button class="checkout-btn">Checkout</button>
                                                    <button class="update-btn">Update Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
    require('../include/footer.php');
    ?>  