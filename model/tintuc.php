<?php 
function insert_tintuc( $tieude, $mota)
{
    $sql = "INSERT INTO `tintuc`(`tieude`, `mota`,) VALUES ('$tieude','$mota')";
    pdo_execute($sql);
}


function loadall_tintuc(){
    pdo_execute( "SELECT * FROM `tintuc`");
}

?>