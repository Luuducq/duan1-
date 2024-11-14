<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row mb-3 pb-1">
            <div class="col-md-12">
               <div class="fromtitle">
                  <h2>Thêm mới loại hàng</h2>
               </div>
               <div class="fromcontent">
               <?php
               if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-primary mb-3">'.$thongbao.'</div>';
               ?>
               
                  <form action="index.php?act=adddm" method="post">
                     <div class="mb-3">
                        Tên loại
                        <input type="text" name="tenloai" class="form-control" placeholder="Nhập Tên Loại">
                     </div>
                     <div class="mb-3">
                        <button type="submit" name="themmoi" class="btn btn-primary mb-3">Thêm mới</button>
                        <input type="reset" value="Nhập lại" class="btn btn-danger mb-3">
                        <a href="index.php?act=dsdm">
                           <input type="button" class="btn btn-info mb-3" value="Danh sách"></a>

                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>