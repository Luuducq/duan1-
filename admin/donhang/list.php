      
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mb-3 pb-1">
        <div class="col-md-12">
          <div class="fromtitle">
            <h4>Quản lý đơn hàng</h4>
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
                    <th>Trạng thái</th>
                    <th>Thao Tác</th>
                  </tr>
                  <?php 
                  $i = 1;
                  foreach (pdo_query("SELECT * FROM `bill` ") as $quanli) {
                   extract($quanli);
                    echo '<tr>
                    <td>' . $idtk . '</td>
                    <td>' . $billname . '</td>
                    <td>' . $billdiachi . '</td>
                    <td>' . $billsdt . '</td>
                    <td>' . $billemail . '</td>
                     <td>' . $ngaydathang . '</td>
                    <td>' . $amount . '</td>
                     <td>' . $total . '</td>
                    <td>' . $billpttt . '</td>
                    <td>' . statusOrder($billstatus) . '</td>
                    <td>
                    <a href="?act=editdh&id='.$id.'" class="btn btn-primary btn-sm">Chỉnh Sửa</a>
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


