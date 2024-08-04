<?php 
require ('include/head.php');
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/cart.php";
require ('include/header.php');
?>

<div class="contact-form-container">
                                        <h2>SEND A MESSAGE</h2>
                                        <form id="contact-form" action="assets/php/mail.php" method="post" class="contact-form">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="first_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" name="email_address">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <input type="text" name="contact_subject">
                                                    </div>

                                                </div>
                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <textarea name="message" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <button type="submit" name="submit"> Submit <i class="fa fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                                    </div>

<?php                                   
require ('include/footer.php');
?>