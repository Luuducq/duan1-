    <?php
    if(is_array($dm)){
        extract($dm);
    }
      
    ?>
    <div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row mb-3 pb-1">
            <div class="col-md-12">
               <div class="fromtitle">
                  <h2>Cập nhật danh mục</h2>
               </div>
               <div class="fromcontent">
               <?php
               if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-primary mb-3">'.$thongbao.'</div>';
               ?>
               
                  <form action="index.php?act=updatedm" method="post">
                  <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                  <div class="mb-3">
                    Tên loại
                    <input type="text" class="form-control" name="tenloai" value="<?php if(isset($tendanhmuc)&&($tendanhmuc!="")) echo $tendanhmuc; ?>" >
                 </div>
                     <div class="mb-3">
                        <button type="submit" name="capnhat" class="btn btn-primary mb-3">Cập nhật</button>
                        <input type="reset" value="Nhập lại" class="btn btn-danger mb-3">
                        <a href="index.php?act=dsdm" class="btn btn-info mb-3">Danh sách</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>