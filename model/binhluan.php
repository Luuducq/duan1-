<?php
function insert_binhluan($name,$note, $idpro){
    $sql= "INSERT INTO `binhluan`(`noidung`, `idtk`, `idpro`, `ngaybinhluan`) VALUES ('$note','$name','$idpro','".date("Y-m-d H:i:s")."')";
    pdo_execute($sql)   ;
 }
 function loadall_binhluan($idpro){
    $sql="select *from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listdsbl= pdo_query($sql);
    return $listdsbl;
 }

?>