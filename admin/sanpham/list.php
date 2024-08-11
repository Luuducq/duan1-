<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-3 pb-1">
                <div class="col-md-12">
                    <div class="fromtitle">
                        <h4>Danh sách sản phẩm</h4>
                    </div>
                    <a href="/duan1/admin/index.php?act=addsp" class="btn btn-danger btn-sm mb-3">Thêm Sản Phẩm</a>
                    <div class="fromcontent">
                        <div class="table-responsive dt-responsive">
                            <div class="dataTables_wrapper dt-bootstrap5">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                                    <tr>
                                        <th>ID sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Lượt xem</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    <?php
                    $i = 1;
                    foreach (pdo_query("SELECT * FROM sanpham") as $sanpham) {
                      extract($sanpham);
                      $suasp = "index.php?act=suasp&id=" . $id;
                      $xoasp = "index.php?act=xoasp&id=" . $id;
                      echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $tensp . '</td>
                    <td><img src="../upload/' . $image . '" style="width: 100px"></td>
                    <td>' . $gia . '</td>
                    <td>' . $soLuong . '</td>
                    <td>' . $luotxem . '</td>
                   <td>
                   <a href="' . $suasp . '" class="btn btn-sm btn-primary mb-1"><i class="fas fa-edit"></i></a>
                   <a href="' . $xoasp . '" class="btn btn-sm btn-danger mb-1"><i class="fas fa-trash"></i></a>
                   </td>
                </tr>';
                    }
                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>