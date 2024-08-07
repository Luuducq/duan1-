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
                  <h2>Cập nhật tin tức</h2>
               </div>
               <div class="fromcontent">
                  <form action="index.php?act=updatett&id=<?=$id_tt?>" method="post">
                  <input type="hidden" name="id_tt" value="<?php if(isset($id_tt)&&($id_tt>0)) echo $id_tt; ?>">
                  <div class="mb-3">
                    Tên loại
                    <input type="text" class="form-control" name="tieude" value="<?php if(isset($tieude)&&($tieude!="")) echo $tieude; ?>" >
                 </div>

                 <div class="mb-3">
                    Hình ảnh
                    <input type="file" class="form-control" name="tieude" value="<?php if(isset($tieude)&&($tieude!="")) echo $tieude; ?>" >
                 </div>

                 <div class="mb-3">
                        Mô tả
                        <textarea name="mota" rows="4" class="form-control summernote" id="summernote" ><?php echo $mota ?></textarea>
                     </div>
                     <div class="mb-3">
                        <button type="submit" name="capnhat" class="btn btn-primary mb-3">Cập nhật</button>
                        <input type="reset" value="Nhập lại" class="btn btn-danger mb-3">
                        <a href="index.php?act=dstt" class="btn btn-info mb-3">Danh sách</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>