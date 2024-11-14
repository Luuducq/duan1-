<?php
require('../include/head.php');
require('../include/header.php');
include "../../model/binhluan.php";
?>

<section class="single-product-page-content">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <?php $product = pdo_query_one("select * from sanpham where `id` = '" . $_GET['id'] . "' order by id desc");  ?>
                    <div class="col-lg-5 col-md-7">
                        <div class="single-product-page-image-gallery">
                            <!-- product quickview image gallery -->
                            <!--Modal Tab Content Start-->
                            <div class="tab-content product-details-large  sale-badge new-badge">
                                <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                    aria-labelledby="single-slide-tab-1">
                                    <!--Single Product Image Start-->
                                    <div class="single-product-img img-full ">
                                        <img width="458" height="458" src="/duan1/upload/<?= $product['image'] ?>"
                                            class="img-fluid" alt="">
                                    </div>
                                    <!--Single Product Image End-->
                                </div>
                            </div>
                            <!--Modal Content End-->
                            <!--Modal Tab Menu Start-->

                            <!--Modal Tab Menu End-->
                            <!-- end of product quickview image gallery -->
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-5">
                        <!-- product quick view description -->
                        <div class="product-options">
                            <h2 class="product-title"><?= $product['tensp']; ?></h2>
                            <h2 class="product-price" style="color:red"><?= number_format($product['gia']); ?>đ</h2>

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
                            <p class="stock-details">Tổng hàng trong kho : <span class="stock-status in-stock">
                                    <?= $product['soLuong']; ?></span></p>
                            <form action="" method="post">
                                <p class="quantity">Số lượng mua:

                                    <span class="pro-qty counter"><input type="text" name="amount" value="1"
                                            class="mr-5"></span>
                                </p>


                                <button style="border-radius: 0%;" type="submit" name="addcart"
                                    class="btn btn-dark add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                    Thêm Vào Giỏ Hàng</button>
                            </form>

                            <?php if(isset($_POST['addcart'])){
                                if(isset($_SESSION['username'])) {
                                $amount = $_POST['amount'];
                                $checkCart = pdo_query_one("SELECT * FROM `giohang` WHERE `username` = '".$_SESSION['username']."' AND `id_product` = '".$_GET['id']."'");
                                if($checkCart){
                                    $amount = $checkCart['amount'] + $amount;
                                    pdo_execute("UPDATE `giohang` SET amount = '$amount' WHERE `username` = '".$_SESSION['username']."' AND `id_product` = '".$product['id']."'");
                                }else{
                                    pdo_query_one("INSERT INTO `giohang`(`username`, `id_product`, `amount`) VALUES ('".$_SESSION['username']."','".$product['id']."','".$amount."')");
                                }
                            }

                                echo "<script>location.href=''</script>";
                            }
                            
                            ?>

                        </div>


                        <!-- end ofproduct quick view description -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-description-tab-container section-padding">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#more-info"
                                        role="tab" aria-selected="true">Mô tả</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                                        aria-selected="false" tabindex="-1">Đánh giá</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="more-info" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <p><?= $product['mota']; ?></p>
                                </div>

                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="product-ratting-wrap">

                                        <div class="ratting-list">
                                            <div class="sin-list float-start">


                                            </div>
                                        </div>

                                        <?php
                                        foreach (loadall_binhluan($product['id']) as $bl) {
                                        extract($bl);
                                        ?>
                                        <div class="rattings-wrapper">
                                            <div class="sin-rattings">
                                                <div class="ratting-author">
                                                    <h4>Tên khách hàng :<?= $idtk ?></h4>
                                                </div>
                                                <p>Nội dung :<?=$noidung;?></p>
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <div class="ratting-form-wrapper fix">
                                            <h3>Thêm Bình Luận</h3>
                                            <form action="" method="POST">
                                                <div class="ratting-form row">
                                                    <div class="col-md-12 col-12 mb-15">
                                                        <label for="name">Tên khách hàng:</label>
                                                        <input id="name" placeholder="Nhập tên " type="text"
                                                            name="name">
                                                    </div>
                                                    <div class="col-12 mb-15">
                                                        <label for="your-review">Nội dung :</label>
                                                        <textarea id="your-review" name="note"
                                                            placeholder="Nội dung bình luận"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <input value="Gửi bình luận" type="submit" name="guicmt">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <?php
                                        
                                        if(isset($_POST['guicmt'])) {
                                            $name = $_POST['name'];
                                            $note = $_POST['note']; 
                                            if(empty($_SESSION['username'])){
                                             echo "<script>alert('Bạn cần đăng nhập để bình luận')</script>";
                                            }else {
                                           $sql= "INSERT INTO `binhluan`(`noidung`, `idtk`, `idpro`, `ngaybinhluan`) VALUES ('$note','$name','".$product['id']."','".date("Y-m-d")."')";
                                            pdo_execute($sql)   ;
                                        }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</section>

<?php
require('../include/footer.php');
?>