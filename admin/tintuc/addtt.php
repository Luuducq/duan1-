<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row mb-3 pb-1">
            <div class="col-md-12">
               <div class="fromtitle">
                  <h2>Thêm tin tức mới</h2>
               </div>
               <div class="fromcontent">
                  <form action="index.php?act=addtt" method="post" enctype ="multipart/form-data">
                     <div class="mb-3">
                        Tiêu đề
                        <input type="text" name="tieude" class="form-control" placeholder="Nhập Tên Sản Phẩm">
                     </div>
                     <div class="mb-3">
                        Tiêu đề
                        <input type="file" name="hinh" class="form-control" placeholder="Thêm hình ảnh">
                     </div>
                     <div class="mb-3">
                        Mô tả
                        <textarea name="mota" rows="4" class="form-control summernote" id="summernote"></textarea>
                     </div>
                     <div class="mb-3 ">
                        <button type="submit" name="themmoi" class="btn btn-primary mb-3">Thêm mới</button>
                        <input type="reset" value="Nhập lại" class="btn btn-danger mb-3">
                        <a href="index.php?act=dstt"><input type="button" class="btn btn-info mb-3" value="Danh sách"></a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>