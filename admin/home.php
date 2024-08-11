<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-3 pb-1">
                <div class="col-md-12">
                    <div class="h-100">


                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p style="font-size:18px; font-weight:bold;"> <i
                                                        class="fa-solid fa-users"
                                                        style="font-size:30px; margin-right:15px;"></i> Tổng thành
                                                    viên</p>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                        class="counter-value" data-target="559.25">559.25</span>k </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p style="font-size:18px; font-weight:bold;"> <i
                                                        class="fa-solid fa-file"
                                                        style="font-size:30px; margin-right:15px;"></i>Tổng đơn hàng</p>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                        class="counter-value" data-target="559.25">559.25</span>k </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p style="font-size:18px; font-weight:bold;"><i
                                                        class="fa-solid fa-truck-fast"
                                                        style="font-size:30px; margin-right:15px;"></i>Đơn hàng đang
                                                    giao</p>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                        class="counter-value" data-target="559.25">559.25</span>k </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p style="font-size:18px; font-weight:bold;"> <i
                                                        class="fa-solid fa-users" style="font-size:30px"></i> Tổng thành
                                                    viên</p>
                                            </div>
                                        </div>


                                        <div class="d-flex align-items-end justify-content-between mt-4">
                                            <div>
                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span
                                                        class="counter-value" data-target="559.25">559.25</span>k </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1" style="color:blue">Sản phẩm nổi bật</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    </a>
                                                 </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                    <thead>
                                                        <tr style="text-align:center"   >
                                                            <th style="text-align:center">Tên sản phẩm</th>
                                                            <th>Hình</th>
                                                            <th>Giá</th>
                                                            <th>Số lượng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <?php
                                                        $i = 1;
                                                        foreach (pdo_query("SELECT * FROM sanpham") as $sanpham) {
                                                             extract($sanpham);
                                                             echo '<tr style="text-align:center">
                                                             <td>' . $tensp . '</td>
                                                             <td><img src="../upload/' . $image . '" style="width: 100px"></td>
                                                              <td>' . $gia . '</td>
                                                             <td>' . $soLuong . '</td>
                                                              </tr>';
                                                            }?>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">


                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1" style="color:blue">Đơn hàng</h4>
                                            <div class="flex-shrink-0">
                                               
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">

                                                        <tr>
                                                            <th scope="col">Trạng thái</th>
                                                            <th scope="col">Tên khách hàng</th>
                                                            <th scope="col">Địa chỉ</th>
                                                            <th scope="col">Số điện thoại</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Ngày đặt hàng</th>
                                                            <th scope="col">Số lượng</th>
                                                            <th scope="col">Tổng tiền</th>
                                                            <th scope="col">Phương thức thanh toán</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                  $i = 1;
                  foreach (pdo_query("SELECT * FROM `bill` ") as $quanli) {
                   extract($quanli);
                    echo '<tr>
                    <td>' . statusOrder($billstatus) . '</td>
                    <td>' . $billname . '</td>
                    <td>' . $billdiachi . '</td>
                    <td>' . $billsdt . '</td>
                    <td>' . $billemail . '</td>
                     <td>' . $ngaydathang . '</td>
                    <td>' . $amount . '</td>
                     <td>' . $total . '</td>
                    <td>' . $billpttt . '</td>
                   
                </tr>';
                  }
                  ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>