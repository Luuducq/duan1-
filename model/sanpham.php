<?php
function insert_sanpham($tensp, $gia, $hinh, $soLuong, $mota, $iddanhmuc)
{
   $sql = "INSERT INTO `sanpham` (`tensp`, `gia`, `image`, `soLuong`, `mota`, `iddanhmuc`) 
   VALUES ('$tensp', '$gia', '$hinh', '$soLuong', '$mota', '$iddanhmuc')";
   pdo_execute($sql);
}

function delete_sanpham($id)
{
   $sql = "delete from sanpham where id=" . $id;
   pdo_execute($sql);
}

function loadall_sanpham_top10()
{
   $sql = "select *from sanpham where 1 order by luotxem desc limit 0,8";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}

function loadall_sanpham_home()
{
   $sql = "select *from sanpham where 1 order by id desc limit 0,9";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}



function loadall_sanpham($kyw = "", $iddanhmuc = 0)
{
   $sql = "SELECT * FROM sanpham 
    LEFT JOIN danhmuc 
    ON danhmuc.iddanhmuc = sanpham.iddanhmuc
    WHERE 1";
   if ($kyw != "") {
      $sql .= " and tensp like '%" . $kyw . "%'";
   }
   if ($iddanhmuc > 0) {
      $sql .= " and iddanhmuc= '" . $iddanhmuc . "'";
   }
   $sql.=" AND danhmuc.khoiphuc = 0";
    $sql.=" AND danhmuc.khoiphuc = 0";
    $sql.=" ORDER BY sanpham.id desc";
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}







function load_sanpham_cungloai($id, $iddanhmuc)
{
   $sql = "select *from sanpham where iddanhmuc=" . $iddanhmuc . " AND id <>" . $id;
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}

function load_tendm($iddanhmuc)
{
   if ($iddanhmuc > 0) {
      $sql = "select *from danhmuc where  id=" . $iddanhmuc;
      $dm = pdo_query_one($sql);
      extract($dm);
      return $tendanhmuc;
   } else {
      return "";
   }
}

function loadone_sanpham($id)
{
   $sql = "select * from sanpham where  id=" . $id;
   $sp = pdo_query_one($sql);
   return $sp;
}

function update_sanpham($id, $iddanhmuc, $tensp, $gia, $mota, $soLuong, $hinh)
{

   if ($hinh !== "") {
      $sql = "UPDATE `sanpham` 
      SET `tensp`='$tensp',`gia`='$gia',`image`='$hinh',`mota`='',`iddanhmuc`='$iddanhmuc',`soluong`='$soLuong' where  `id` = '$id' ";
   } else {
      $sql = "UPDATE `sanpham` 
      SET `tensp`='$tensp',`gia`='$gia',`mota`='$mota',`iddanhmuc`='$iddanhmuc',`soluong`='$soLuong' where  `id` = '$id' ";
   }
   pdo_execute($sql);
}
