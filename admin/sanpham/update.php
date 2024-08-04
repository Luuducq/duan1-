<?php
if (is_array($sanpham)) {
   extract($sanpham);
   echo "ID sản phẩm: " . $id;
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
   $hinh = "<img src='" . $hinhpath . "'height='80' >";
} else {
   $hinh = "no photo";
}


if (is_array($dm)) {
   extract($dm);
}

?>
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="row fromtitle">
               <h1>Cập nhật loại hàng</h1>
            </div>
            <div class="row fromcontent">
               <form action="index.php?act=updatesp&id=<?= $id ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-2">
                     <select name="iddanhmuc" class="form-control">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                           extract($danhmuc);
                           if ($iddanhmuc == $id) $s = "selected";
                           else $s = "";
                           echo '<option value="' . $id . '" ' . $s . '>' . $tendanhmuc . '</option>';
                        }
                        ?>
                     </select>
                  </div>
                  <div class="form-group mb-2">
                     Tên sản phẩm
                     <input type="text" name="tensp"  class="form-control" value="<?= $tensp ?>">
                  </div>
                  <div class="form-group mb-2">
                     Giá
                     <input type="text" name="gia"  class="form-control" value="<?= $gia ?>">
                  </div>
                  <div class="form-group mb-2">
                     Hình ảnh
                     <input type="file"  class="form-control" name="hinh">
                     <?= $hinh ?>
                  </div>
                  <div class="form-group ">
                     Số lượng
                     <input type="text" name="soluong"  class="form-control" value="<?= $soLuong ?>">
                  </div>
                  <br>
                  <div class="form-group mb-2">
                     Mô tả
                     <textarea name="mota"class="form-control summernote"> <?= $mota ?>
                    </textarea>
                  </div>
                  <div class="form-group form-group">
                     <input type="hidden" name="id" value="<?= $id ?>">
                     <input type="submit" class="btn btn-primary mb-2" name="capnhat" value="Cập nhật">
                     <input type="reset" class="btn btn-danger mb-2" value="Nhập lại">
                     <a href="index.php?act=dssp"><input class="btn btn-info mb-2" type="button" value="Danh sách"></a>

                  </div>
                  <?php
                  if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                  ?>

               </form>
            </div>
         </div>
      </div>
   </div>