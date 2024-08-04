<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mb-3 pb-1">
        <div class="col-md-12">
          <div class="fromtitle">
            <h4>Danh sách danh mục</h4>
          </div>
          <a href="/44444/admin/index.php?act=adddm" class="btn btn-danger btn-sm mb-3">Thêm Danh Mục</a>
          <div class="fromcontent">
            <div class="table-responsive dt-responsive">
              <div class="dataTables_wrapper dt-bootstrap5">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                  </tr>
                  <?php 
                  $i = 1;
                  foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $tendanhmuc . '</td>
                   <td>
                   <a href="'.$suadm.'" class="btn btn-sm btn-primary mb-1"><i class="fas fa-edit"></i></a>
                   <a href="'.$xoadm.'" class="btn btn-sm btn-danger mb-1"><i class="fas fa-trash"></i></a>
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