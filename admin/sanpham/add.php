<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row mb-3 pb-1">
            <div class="col-md-12">
               <div class="fromtitle">
                  <h2>Thêm mới sản phẩm</h2>
               </div>
               <div class="fromcontent">
                  <?php
                  if (isset($thongbao) && ($thongbao != "")) echo '<div class="alert alert-primary mb-3">' . $thongbao . '</div>';
                  ?>

                  <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                     <div class="mb-3">
                        Danh mục
                        <select name="iddanhmuc" id="">
                        <?php foreach (loadall_danhmuc() as $danhmuc) {
                                                   extract($danhmuc); ?>
                           <option value="<?=$id?>"><?=$tendanhmuc?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="mb-3">
                        Tên Sản Phẩm
                        <input type="text" name="tensp" class="form-control" placeholder="Nhập Tên Sản Phẩm">
                     </div>
                     <div class="mb-3">
                        Giá
                        <input type="text" name="gia" class="form-control" placeholder="Nhập Giá Sản Phẩm">
                     </div>
                     <div class="mb-3">
                        Hình Ảnh
                        <input type="file" name="hinh" class="form-control" placeholder="Thêm Hình Ảnh">
                     </div>
                     <div class="mb-3">
                        Số Lượng
                        <input type="text" name="soLuong" class="form-control" placeholder="Nhập Số Lượng">
                     </div>
                     <div class="mb-3">
                        Mô tả
                        <textarea name="mota" rows="4" class="form-control summernote" id="summernote"></textarea>
                     </div>
                     <div class="mb-3 ">
                        <button type="submit" name="themmoi" class="btn btn-primary mb-3">Thêm mới</button>
                        <input type="reset" value="Nhập lại" class="btn btn-danger mb-3">
                        <a href="index.php?act=dssp"><input type="button" class="btn btn-info mb-3" value="Danh sách"></a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>