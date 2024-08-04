


          



          <div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mb-3 pb-1">
        <div class="col-md-12">
          <div class="fromtitle">
            <h4>Danh sách bình luận</h4>
          </div>
          <div class="fromcontent">
            <div class="table-responsive dt-responsive">
              <div class="dataTables_wrapper dt-bootstrap5">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>Mã bình luận</th>
                    <th>Nội dung</th>
                    <th>Mã người dùng</th>
                    <th>Mã sản phẩm</th>
                    <th>Ngày bình luận</th>
                  </tr>
                  <?php 
                  $i = 1;
                  foreach (loadall_binhluan(0) as $binhluan) {
                    extract($binhluan);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $noidung . '</td>
                    <td>' . $idtk . '</td>
                    <td>' . $idpro . '</td>
                    <td>' . $ngaybinhluan . '</td>
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