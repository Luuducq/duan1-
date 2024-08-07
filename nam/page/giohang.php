<?php
require('../include/head.php');
require('../include/header.php'); 
?>


<div class="col-12">
    <!-- Cart Table -->
    <div class="cart-table table-responsive mb-40">
        <table class="table">
            <thead>
                <tr>
                    <th class="pro-thumbnail">Ảnh</th>
                    <th class="pro-title">Tên sản phẩm</th>
                    <th class="pro-price">Giá</th>
                    <th class="pro-quantity">Số lượng</th>
                    <th class="pro-subtotal">Thành tiền</th>
                    <th class="pro-remove">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach(pdo_query("select * from `giohang` where `username` = '" . $_SESSION['username'] . "'") as $gh) {
												$product = pdo_query_one("select * from `sanpham` where `id` = '".$gh['id_product']."'");	
												$total = $product['gia'] * $gh['amount'];
                                                ?>
                    <td class="pro-thumbnail"><a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><img
                                width="250" height="250" src="/duan1/upload/<?= $product['image'] ?>" class="img-fluid"
                                alt=""></a></td>
                    <td class="pro-title"><a
                            href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><?= $product['tensp'] ?></a>
                    </td>
                    <td class="pro-price"><span><?= number_format($product['gia']) ?></span></td>
                    <td class="pro-quantity">
                        <span class="pro-qty-cart counter"><a href="#" class="dec qty-btn-cart"></a><input type="text"
                                value="<?php echo $gh['amount'] ?>" class="mr-5"><a href="#"
                                class="inc qty-btn-cart"></a></span>
                    </td>
                    <td class="pro-subtotal"><span><?php echo $total ?></span></td>

                    <form action="" method="POST">
                        <td class="pro-remove"><button type="submit" name="xoa_<?= $gh['id'] ?>"><i
                                    class="fa fa-trash-o"></i>Xóa</button></td>
                    </form>
                    <?php
                            if(isset($_POST['xoa_'.$gh['id']])){
                                $sql = "delete from `giohang` where `id` = '".$gh['id']."'";
                                pdo_execute($sql);
                                header("location: /duan1/nam/page/giohang.php");
                            }
                            ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="row">

        <div class="col-lg-6 col-12 mb-15">
            <!-- Calculate Shipping -->
            <div class="calculate-shipping">
                <h4>Địa chỉ nhận hàng </h4>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6 col-12 mb-25">
                            <input type="text" placeholder="Tên khách hàng" require>
                        </div>
                        <div class="col-md-6 col-12 mb-25">
                            <input type="number" placeholder="Số điện thoại" require>
                        </div>
                        <div class="col-md-12 col-12 mb-25">
                            <input type="text" placeholder="Địa chỉ" require>
                        </div>
                        <div class="col-md-12 col-12 mb-25">
                            <input type="email" placeholder="Email" require>
                        </div>
                        <div class="col-md-6 col-12 mb-25">
                            <input type="submit" value="Xác nhận">
                        </div>
                    </div>
                </form>
            </div>
        </div>



        <?php
        $ketQuaCuoi = 0;
        foreach(pdo_query("select * from `giohang` where `username` = '" . $_SESSION['username'] . "'") as $gh) {
                        $product = pdo_query_one("select * from `sanpham` where `id` = '".$gh['id_product']."'");	
                        $ketquatam += $product['gia'] * $gh['amount'];
                        $tinhTienVat = $ketquatam    * 0.0012;
                        $tongthanhtoan = $tinhTienVat + $ket;
                       }?>




        <div class="col-lg-6 col-12 mb-40 d-flex">
            <div class="cart-summary">

                <div class="cart-summary-wrap">
                    <h4>Thông tin thanh toán</h4>
                    <p>VAT : <span><?=$tinhTienVat?></span></p>
                    <p>Tạm tính : <span><?= $ketquatam ?></span></p>
                    <h2>Tổng tiền :<span><?= $tongthanhtoan ?></span></h2>
                </div>


                <div class="cart-summary-wrap">
                    <h4>Phương thức thanh toán</h4>
                    <div class="custom-control custom-radio d-flex mb-0">
                        <input type="radio" name="PaymentMothod" id="banking" class="custom-control-input"
                            value="banking" checked style="margin-right:15px">
                        <label for="banking" class="custom-control-label ManhDev-Label-Payment"><i
                                class="fa-solid fa-money-check-dollar" style="font-size:20px"></i><span
                                style="font-size: 20px;margin-left:15px">Chuyển Khoản Ngân
                                Hàng</span></label>
                    </div>

                    <div class="custom-control custom-radio d-flex mb-0">
                        <input type="radio" name="PaymentMothod" id="banking" class="custom-control-input"
                            value="banking" checked style="margin-right:15px">
                        <label for="banking" class="custom-control-label "><i class="fa-solid fa-building-columns"
                                style="font-size:20px"></i><span style="font-size: 20px;;margin-left:15px">Thanh toán
                                tại nhà</span></label>
                    </div>
                </div>


                <div class="cart-summary-button">
                    <button class="checkout-btn">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    require('../include/footer.php');
    ?>