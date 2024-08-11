<?php
require('../include/head.php');
require('../include/header.php'); 
?>
<div class="homepage-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-50">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="hero-side-category">
                            <div class="category-toggle-wrap">
                                <button class="category-toggle">TÀI KHOản <i class="fa-solid fa-user"></i></button>
                            </div>

                            <nav class="category-menu mb-40">
                                <ul>
                                    <li><a href="/duan1/nam/page/edittk.php">Thông tin tài khoản</a></li>
                                    <li><a href="/duan1/nam/page/doimk.php">Đổi mật khẩu</a></li>
                                    <li><a href="/duan1/nam/page/lichsumua.php">Đơn hàng</a></li>
                                    <li><a href="/duan1/nam/page/giohang.php">Giỏ hàng</a></li>
                                    <li><a href="/duan1/nam/page/dangxuat.php" style="color: red">Đăng xuất</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <section class="page-content mt-50 mb-50">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="page-title">
                                            <h2>Đổi mật khẩu</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="contact-form-container">
                                            <?php $checkusers = pdo_query_one("select * from `taikhoan` where `tentk` = '" . $_SESSION['username'] . "' "); ?>
                                            <form id="contact-form" action="" method="post" class="contact-form">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Mật khẩu cũ</label>
                                                            <input type="text" name="password1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Mật khẩu mới</label>
                                                            <input type="text" name="password2">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Nhập lại mật khẩu mới</label>
                                                            <input type="text" name="password3">
                                                        </div>

                                                    </div>

                                                    <?php if(isset($_POST['submit'])){
   
        $password1= $_POST['password1'];
        $password2= $_POST['password2']; 
        $password3= $_POST['password3'];
        $checkusers = pdo_query_one("select * from `taikhoan` where `tentk` = '" . $_SESSION['username'] . "' ");

if(empty($password1) || empty($password2) || empty($password3)){
    echo 'Vui lòng nhập đầy đủ thông tin'; 
} else if (!$checkusers){
    echo ' Tài khoản không tồn tại';
} else if(md5($password1) !== $checkusers['pass']){
    echo 'Mật khẩu cũ không đúng';
} else if($password2 !== $password3){ 
    echo 'Mật khẩu mới không khớp';
} else if(($password2 == $password3)){ 
   $sql= "update taikhoan set pass='".md5($password2)."' where id=".$checkusers['id'];
   pdo_execute($sql);
   echo "<script>location.href=''</script>";
}


        pdo_execute($sql);
        echo "<script>location.href=''</script>";
} 
?>
                                                    <div class="col-lg-5">
                                                        <div class="form-group">
                                                            <button type="submit" name="submit">Đổi mật khẩu <i
                                                                    class="fa fa-chevron-right"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <p class="form-messege pt-10 pb-10 mt-10 mb-10"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php
    require('../include/footer.php');
    ?>