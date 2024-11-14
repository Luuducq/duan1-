<?php 
 function insert_danhmuc($tenloai){
    $sql= "INSERT INTO danhmuc(`tendanhmuc`) values ('$tenloai')";
    pdo_execute($sql);
 }
 function delete_danhmucs($id){
   $sql = "UPDATE `danhmuc` SET `role` = 1  WHERE `id` = '".$id."' ";
    pdo_execute($sql);
 }
 function khoiphuc($id){
   $sql = "UPDATE `danhmuc` SET `role` = 0  WHERE `id` = '".$id."' ";
    pdo_execute($sql);
 }

 function loadall_danhmuc(){
    $sql="SELECT * FROM `danhmuc`  where `role` = 0 order by id desc";
    $listdanhmuc= pdo_query($sql);
    return $listdanhmuc;
 }
 function loadall_danhmuc_delete(){
    $sql="SELECT * FROM `danhmuc` WHERE `role` = 1 order by id desc ";
    $listdanhmuc= pdo_query($sql);
    return $listdanhmuc;
 }

 function loadall_danhmuc_khoiphuc(){
   $sql="SELECT * FROM `danhmuc` WHERE `role` = 0 order by id desc ";
   $listdanhmuc= pdo_query($sql);
   return $listdanhmuc;
}
 function loadone_danhmuc($id){
    $sql="SELECT * FROM danhmuc where id = ".$id;
    $dm=pdo_query_one($sql);
    return $dm;
 }
 function update_danhmuc($id, $tenloai){
    $sql = "UPDATE `danhmuc` SET `tendanhmuc` = '$tenloai' WHERE `id` = '".$id."' ";
    pdo_execute($sql);
 }

?>