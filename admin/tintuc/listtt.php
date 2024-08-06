<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mb-3 pb-1">
        <div class="col-md-12">
          <div class="fromtitle">
            <h4>Danh sách tin tức</h4>
          </div>
          <a href="/duan1/admin/index.php?act=addtt" class="btn btn-danger btn-sm mb-3">Thêm tin tức</a>
          <div class="fromcontent">
            <div class="table-responsive dt-responsive">
              <div class="dataTables_wrapper dt-bootstrap5">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                  </tr>
                  <?php
                  $i = 1;
                  foreach (pdo_query("SELECT * FROM `tintuc`") as $tintuc) {
                    extract($tintuc);
                    $suatt = "index.php?act=suatt&id_tt=" . $id_tt;
                    $xoatt = "index.php?act=xoatt&id_tt=" . $id_tt;
                    echo '<tr>
                    <td>' . $id_tt. '</td>
                    <td>' . $tieude. '</td>
                    <td>' . $mota . '</td>
                   <td>
                   <a href="' . $suatt . '" class="btn btn-sm btn-primary mb-1"><i class="fas fa-edit"></i></a>
                   <a href="' . $xoatt . '" class="btn btn-sm btn-danger mb-1"><i class="fas fa-trash"></i></a>
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