<?php
function viewcart($del){
    $tong = 0;
    $i = 0;
    global $img_path;

    if($del == 1){
        $xoasp_th = '<th>Hành động</th>';
        $xoa_td2 = '<td></td>';
    } else {
        $xoasp_th = "";
        $xoasp_td = "";
        $xoa_td2 = "";
    }
?>

<style>
    .delete-icon {
        font-size: 20px; /* Tăng kích thước biểu tượng lên 20px */
    }
</style>

<table>
    <tr>
        <th>Hình ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <?php echo $xoasp_th; ?>
    </tr>
    <?php
    foreach ($_SESSION['giohang'] as $cart) {
        $hinh = $img_path . $cart[2];
        $tt = (int)$cart[3] * $cart[4];
        $tong += $tt;
        if($del == 1){
        $xoasp_td = '<td style="text-align: center;">
            <a href="index.php?act=delcart&idcart=' . $i . '">
                <i class="fas fa-trash delete-icon" style="color: red;"></i> 
            </a>
        </td>';}else{
            $xoasp_th = "";
        $xoasp_td = "";
        $xoa_td2 = "";
        }

        echo '
        <tr>
            <td><img src="' . $hinh . '" alt="" height="40px"></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            <td>' . $tt . '</td>
            ' . $xoasp_td . '
        </tr>';
        $i += 1;
    }
    ?>
    <tr>
        <td colspan="4">Tổng đơn hàng</td>
        <td><?php echo $tong; ?></td>
        <?php echo $xoa_td2; ?>
    </tr>
</table>

<?php
}
function bill_chitiet($listbill){
    global  $img_path;
    $tong=0;
    $i=0;
    echo'<tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    </tr>';                               
    foreach ($listbill as $cart) { 
        $hinh =  $img_path.$cart['image'];
        $tong+=$cart['thanhtien'];
        echo '  <tr>
         <td><img src="'.$hinh.'" alt="" height="40px"</td>
        <td>'.$cart['tensp'].'</td>
        <td>'.$cart['gia'].'</td>
        <td>'.$cart['soluong'].'</td>
        <td>'.$cart['thanhtien'].'</td>
        </tr>';
        $i+=1;
    }
    echo '<tr>
<td colspan="4">Tổng đơn hàng</td>
<td>'.$tong.'</td>
</tr>';
}
function tongdonhang(){
    $tong=0;
    foreach ($_SESSION['giohang'] as $cart) {
        $tt = (int)$cart[3] * $cart[4];
        $tong+=$tt;
    }
    return $tong;
}
function insert_bill($idtk,$tentk,$diachi,$sdt,$email,$pttt,$ngaydathang,$tongdonhang){
    $sql= "insert into bill(idtk,billname,billdiachi,billsdt,billemail,billpttt,ngaydathang,total) values('$idtk','$tentk','$diachi',
    '$sdt','$email','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql)  ;
 }
 function insert_cart($idtk,$idpro,$hinh,$tensp,$gia,$soluong,$thanhtien,$idbill){
    $sql= "insert into cart(idtk,idpro,image,tensp,gia,soluong,thanhtien,idbill) values('$idtk','$idpro','$hinh','$tensp','$gia','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql)  ;
 }
 function loadone_bill($id){
    $sql="select *from bill where  id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
 }
 function loadall_cart($idbill){
    $sql="select *from cart where  idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
 }
//  function loadall_cart_count($idbill){
//     $sql="select *from cart where  idbill=".$idbill;
//     $bill=pdo_query($sql);
//     return sizeof($bill);
//  }
function loadall_cart_count($idbill){
    $sql="select sum(soluong) as tongsoluong from cart where idbill=".$idbill;
    $bill = pdo_query($sql);
    $row = $bill[0];
    return $row['tongsoluong'];
}
 function loadall_bill($idtk){

    $sql="select *from bill where 1"  ;
    if($idtk>0) $sql.=" AND idtk=".$idtk;
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
 }
 function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
            break; 
        case '3':
            $tt="Hoàn tất";
            break;       
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
 }
 function update_donhang($id,$billstatus){
    $sql= "update bill set billstatus='".$billstatus."' where id=".$id;
    pdo_execute($sql)   ;
 }
 function get_pttt($n){
    switch ($n) {
        case '0':
            $pt="Thanh toán trực tiếp";
            break;
        case '1':
            $pt="Chuyển khoản ngân hàng";
            break;
        case '2':
            $pt="Thanh toán online";
            break;   
        default:
            $pt="Thanh toán trực tiếp";
            break;
    }
    return $pt;
 }


?>