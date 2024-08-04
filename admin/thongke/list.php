<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row mb-3 pb-1">
          <div class="col-md-12">
            <div class="fromtitle">
              <h4>Thống kê sản phẩm theo danh mục</h4>
            </div>
            <a href="/44444/admin/index.php?act=addsp" class="btn btn-danger btn-sm mb-3">Thêm Sản Phẩm</a>
            <div class="fromcontent">
              <div class="table-responsive dt-responsive">
                <div class="dataTables_wrapper dt-bootstrap5">
                  <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php
                 foreach ($listthongke as $thongke) {
                    extract($thongke);
                     echo '<tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxgia.'</td>
                    <td>'.$mingia.'</td>
                    <td>'.$avggia.'</td>
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




<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row mb-6 pb-1">
          <div class="col-md-12">
            <div class="fromtitle">
              <h4>Thống kê đơn hàng</h4>
            </div>
            <div class="fromcontent">
              <div class="table-responsive dt-responsive">
                <div class="dataTables_wrapper dt-bootstrap5">
                  <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng </th>
                    <th>Giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
               <?php
               foreach ($listbill as $bill) {
                extract($bill);
                $kh=$bill["billname"].'
                <br> '.$bill["billemail"].'
                <br> '.$bill["billdiachi"].'
                <br> '.$bill["billsdt"];
                $ttdh=get_ttdh($bill["billstatus"]);
                $countsp=loadall_cart_count($bill['id']);
                echo '<tr>
                        <td>SP-'.$bill['id'].'</td> 
                        <td>'.$kh.'</td> 
                        <td>'.$countsp.'</td>   
                        <td><strong>'.$bill['total'].'</strong>VND</td> 
                        <td>'. $ttdh.'</td> 
                        <td>'.$bill['ngaydathang'].'</td> 
                        <td> <input type="button" value="Sua"> <input type="button" value="xoa"></td> 
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