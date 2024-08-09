<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "../model/tintuc.php";
include "header.php";
include "nav.php";


function statusOrder($status) {
    if($status == "0") {
        return "Đơn Hàng Mới";
    } else if($status == "1") {
        return "Đang Xử Lý";
    } else if($status == "2") {
        return "Đang Giao Hàng";
    } else if($status == "3") {
        return "Đã Giao Hàng";
    } else {
        return "Hoàn Đơn";
    }
}

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            //danhmuc   
        case 'adddm':
            // kiem tra xem ng dung co an nut hay k
            if (isset($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                if (empty($tenloai)) {
                    $thongbao = "Vui lòng nhập tên danh mục";
                } else {
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm Thành Công!";
                }
            }
            include "danhmuc/add.php";
            break;
        case 'dsdm':
            $sql = "select *from danhmuc order by id desc";
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id'])) {
                delete_danhmucs($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // san pham//

        case 'addsp':
            // kiem tra xem ng dung co an nut hay k
            if (isset($_POST['themmoi'])) {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $soLuong = $_POST['soLuong'];
                $hinh = $_FILES['hinh']['name'];
                $target_file = "../upload/" . basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                $sql = "INSERT INTO `sanpham` (`tensp`, `gia`, `image`, `soLuong`, `mota`, `iddanhmuc`) 
                VALUES ('$tensp', '$gia', '$hinh', '$soLuong', '$mota', '$iddanhmuc')";
                pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'dssp':
            // $sql="select *from sanpham order by id desc";
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddanhmuc = $_POST['iddanhmuc'];
            } else {
                $kyw = "";
                $iddanhmuc = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddanhmuc);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat'])) {
                $id = $_GET['id'];
                $iddanhmuc = $_POST['iddanhmuc'];
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $mota = $_POST['mota'];
                $soLuong = $_POST['soluong'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']['name']);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file));
                echo $thongbao;
                update_sanpham($id, $iddanhmuc, $tensp, $gia, $mota, $soLuong, $hinh);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;





        case 'dstt':

            include "tintuc/listtt.php";
            break;

        case 'qldh' :
            include "donhang/list.php";
            break;

            case 'editdh' :
                include "donhang/update.php";
                break;


        case 'addtt':
            // kiem tra xem ng dung co an nut hay k
            
            if (isset($_POST['themmoi'])) {
                $tieude = $_POST['tieude'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_file = "../upload/" . basename($_FILES['hinh']['name']);
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                pdo_execute("INSERT INTO `tintuc`(`tieude`, `mota`, `img`) VALUES ('$tieude','$mota','$hinh')");
            }
            include "tintuc/addtt.php";
            break;

        case 'xoatt':
            if (isset($_GET['id_tt'])) {
                $sql = "DELETE FROM `tintuc` WHERE `id_tt` = " . $_GET['id_tt'];
                pdo_query($sql);
            }
            include "tintuc/listtt.php";
            break;
        case 'suatt':
            $id_tt = $_GET['id_tt'];
            $dm = pdo_query_one("SELECT * FROM `tintuc` WHERE `id_tt` = " . $_GET['id_tt']);
            include "tintuc/updatett.php";
            break;
        case 'updatett':
            if (isset($_POST['capnhat'])) {
                $id_tt = $_POST['id_tt'];
                $tieude = $_POST['tieude'];
                $mota = $_POST['mota'];
                pdo_query("UPDATE `tintuc` SET `tieude`='$tieude',`mota`='$mota ' WHERE `id_tt` = " . $id_tt);
            }
            include "tintuc/updatett.php";
                        break;







        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            $listbill = loadall_bill(0);
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}


include "footer.php";
