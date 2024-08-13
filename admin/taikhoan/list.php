
          <div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mb-3 pb-1">
        <div class="col-md-12">
          <div class="fromtitle">
            <h4>Danh sách người dùng</h4>
          </div>
          <div class="fromcontent">
            <div class="table-responsive dt-responsive">
              <div class="dataTables_wrapper dt-bootstrap5">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>Mã người dùng</th>
                    <th>Tên người dùng</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                  </tr>
                  <?php 
                  $i = 1;
                  foreach (loadall_taikhoan() as $nguoidung) {
                    extract($nguoidung);
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $tentk . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $diachi . '</td>
                    <td>' . $sdt . '</td>
                     <td>' . $role . '</td>
                     <td>
                   <a href="' . $xoatk . '" class="btn btn-sm btn-danger mb-1"><i class="fas fa-trash"></i></a>
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