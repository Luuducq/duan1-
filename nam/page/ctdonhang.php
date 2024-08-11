<?php 
 require ("../include/head.php");
 require ('../include/header.php');

?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-3 pb-1">
                <div class="col-md-12">
                    <div class="fromtitle">
                        <h4>Chi tiết đơn hàng</h4>
                    </div>
                    <a href="/duan1/nam/page/lichsumua.php"  class="btn btn-primary btn-sm mb-3">Quay lại</a>
                    <div class="fromcontent">
                        <div class="table-responsive dt-responsive">
                            <div class="dataTables_wrapper dt-bootstrap5">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                                    <tr>
                                        <th>ID sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Tổng tiền</th>
                                    </tr>
                    <?php
                    $i = 1;
                    foreach (pdo_query("SELECT * FROM `bill` WHERE `id` = '".$_GET['id']."' ") as $ctdonhang) {
                    extract($ctdonhang); ?>
                    <tr>
                    <td><?=$id_pro;?></td>
                    <td><?=pdo_query_one("SELECT * FROM `sanpham` WHERE `id` = '".$id_pro."' ")['tensp'];?></td>
                    <td><img src="../../upload/<?=pdo_query_one("SELECT * FROM `sanpham` WHERE `id` = '".$id_pro."' ")['image']?>" style="width: 100px"></td>
                    <td><?=$amount;?></td>
                    <td><?=number_format(pdo_query_one("SELECT * FROM `sanpham` WHERE `id` = '".$id_pro."' ")['gia']);?>đ</td>
                    <td><?=number_format($total);?>đ</td>
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

        <?php require ('../include/footer.php');
 ?>