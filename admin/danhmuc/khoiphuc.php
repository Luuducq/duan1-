<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row mb-3 pb-1">
        <div class="col-md-12">
          <div class="fromtitle">
            <h4>Khôi phục danh mục</h4>
          </div>
         
          <div class="fromcontent">
            <div class="table-responsive dt-responsive">
              <div class="dataTables_wrapper dt-bootstrap5">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable">
                  <tr>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Thao tác</th>
                  </tr>
                  <?php 
                  $i = 1;
                  foreach (loadall_danhmuc_delete() as $danhmuc) {
                    extract($danhmuc);
                    $khoiphuc = "index.php?act=khoiphuc&id=" . $id;
                   
                    echo '<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $tendanhmuc . '</td>
                   <td>
                   <a href="'.$khoiphuc.'" class="btn btn-sm btn-primary mb-1">Khôi phục</a>
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