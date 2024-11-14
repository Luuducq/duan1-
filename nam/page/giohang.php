<?php
require('../include/head.php');
require('../include/header.php');

?>
<?php if(empty($_SESSION['username'])){

    echo '<script>location.href="/duan1/nam/page/dangnhap.php"</script>';
}
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
                    <?php foreach (pdo_query("select * from `giohang` where `username` = '" . $_SESSION['username'] . "'") as $gh) {
                        $product = pdo_query_one("select * from `sanpham` where `id` = '" . $gh['id_product'] . "'");
                        $total = $product['gia'] * $gh['amount'];
                        $tongTienAll += $total;

                        $nhanVat += $total * 0.012;
                        $tongthanhtoan += $total + $nhanVat;
                    ?>
                    <td class="pro-thumbnail"><a href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><img
                                width="250" height="250" src="/duan1/upload/<?= $product['image'] ?>" class="img-fluid"
                                alt=""></a></td>
                    <td class="pro-title"><a
                            href="/duan1/nam/page/spct.php?id=<?= $product['id'] ?>"><?= $product['tensp'] ?></a>
                    </td>
                    <td class="pro-price"><span><?= number_format($product['gia']) ?></span></td>
                    <td class="pro-quantity">
                        <span class="pro-qty-cart counter">
                            <a href="#" class="dec qty-btn-cart"></a>
                            <input type="text" value="<?php echo $gh['amount'] ?>" class="mr-5" id="quantity-input">
                            <a href="#" class="inc qty-btn-cart"></a>
                        </span>
                    </td>

                    <script>
                    const quantityInput = document.getElementById('quantity-input');
                    quantityInput.addEventListener('input', function() {
                        let value = parseInt(quantityInput.value, 10);
                        if (isNaN(value) || value < 0) {
                            quantityInput.value = 0;
                        }
                    });
                    </script>



                    <td class="pro-subtotal"><span><?php echo number_format($total) ?>VND</span></td>

                    <form action="" method="POST">
                        <td class="pro-remove"><button type="submit" name="xoa_<?= $gh['id'] ?>"><i
                                    class="fa fa-trash-o"></i>Xóa</button></td>
                    </form>
                    <?php
                        if (isset($_POST['xoa_' . $gh['id']])) {
                            $sql = "DELETE FROM `giohang` WHERE `id` = '" . $gh['id'] . "'";
                            pdo_execute($sql);
                            header("location: /duan1/nam/page/giohang.php");
                        }
                        ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <form action="" method="POST">
        <div class="row">
            <div class="col-lg-6 col-12 mb-15">
                <div class="calculate-shipping">
                    <h4>Địa chỉ nhận hàng </h4>
                    <div class="row">
                        <div class="col-md-6 col-12 mb-25">
                            <input type="text" placeholder="Tên khách hàng" name="name" class="form-control"
                                value="<?= ($_POST['name'] ?? ''); ?>" require>
                        </div>
                        <div class="col-md-6 col-12 mb-25">
                            <input type="number" placeholder="Số điện thoại" name="phone" class="form-control"
                                value="<?= ($_POST['phone'] ?? ''); ?>" require>
                        </div>
                        <div class="col-md-12 col-12 mb-25">
                            <input type="text" placeholder="Địa chỉ" name="address" class="form-control"
                                value="<?= ($_POST['address'] ?? ''); ?>" require>
                        </div>
                        <div class="col-md-12 col-12 mb-25">
                            <input type="email" placeholder="Email" name="email" class="form-control"
                                value="<?= ($_POST['email'] ?? ''); ?>" require>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 mb-40 d-flex">
                <div class="cart-summary">
                    <div class="cart-summary-wrap">
                        <h4>Thông tin thanh toán</h4>
                        <p>VAT : <span><?= $nhanVat ?></span></p>
                        <p>Tạm tính : <span><?= number_format($tongTienAll) ?>đ</span></p>
                        <h2>Tổng tiền :<span><?= number_format($tongthanhtoan) ?>đ</span></h2>
                    </div>
                    <div class="cart-summary-wrap">
                        <h4>Phương thức thanh toán</h4>
                        <div class="custom-control custom-radio d-flex mb-0">
                            <input type="radio" name="PaymentMothod" id="tainha" class="custom-control-input"
                                value="Thanh toán tại nhà" checked style="margin-right:15px">
                            <label for="tainha" class="custom-control-label "><i class="fa-solid fa-building-columns"
                                    style="font-size:20px"></i><span style="font-size: 20px;;margin-left:15px">Thanh
                                    toán
                                    tại nhà</span></label>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['thanhtoan'])) {
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        $email = $_POST['email'];
                        $PaymentMothod = $_POST['PaymentMothod'];

                        if (empty($name) || empty($phone) || empty($address) || empty($email) || empty($PaymentMothod)) {
                         
                        } else {

                            foreach (pdo_query("select * from `giohang` where `username` = '" . $_SESSION['username'] . "'") as $row):
                                pdo_execute("INSERT INTO `bill`(`idtk`, `billname`, `billdiachi`, `billsdt`, `billemail`, `billpttt`, `ngaydathang`, `total`, `billstatus`, `id_pro`, `amount`) VALUES ('" . $_SESSION['username'] . "','$name','$address','$phone','$email','$PaymentMothod','" . date("Y/m/d H:i") . "','$tongthanhtoan','1', '" . $row['id_product'] . "', '" . $row['amount'] . "') ");
                                pdo_execute("DELETE FROM `giohang` WHERE `username` = '" . $_SESSION['username'] . "' ");
                            endforeach;

                            die("<script>alert('Tạo Đơn Hàng Thành Công')</script>");
                        }
                    }
                    ?>
                    <div class="cart-summary-button">
                        <button class="checkout-btn" name="thanhtoan">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
require('../include/footer.php');
?>