<?php
require('../include/head.php');
require('../include/header.php');
?>
<div class="account-area page-content mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h2>Đăng Nhập - Đăng ký</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12 mb-30">
                <!-- Login Form s-->
                <form action="" method="POST" class="login-form">

                    <div id="login-form">
                        <h4 class="login-title">Đăng Nhập</h4>
                        <div style="color: crimson; font-size:15px; margin-bottom: 20px;">
                            <?php
                            if (isset($_POST['login'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                $checkusers = pdo_query_one("select * from `taikhoan` where `tentk` = '" . $username . "' AND `pass` = '" .md5($password). "'");

                                if (empty($username)) {
                                    echo 'Vui Lòng Nhập Tài Khoản';
                                } else if (empty($password)) {
                                    echo 'Vui Lòng Nhập Mật Khẩu';
                                } else if (!$checkusers) {
                                    echo 'Tài Khoản Không Tồn Tại';
                                } else {
                                    $_SESSION['username'] = $username;
                                    echo '<script>location.href="/44444/nam"</script>';
                                }
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Tài Khoản</label>
                                <input class="mb-0" type="text" name="username" placeholder="Email Address">
                            </div>
                            <div class="col-12 mb-20">
                                <label>Mật Khẩu</label>
                                <input class="mb-0" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-8">
                                <button type="submit" name="login" class="register-button mt-0">Đăng Nhập</button>
                                <div class="check-box d-inline-block ms-2 mt-10">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Lưu Tài Khoản</label>
                                </div>
                            </div>

                            <div class="col-md-4 mt-10 text-start text-md-end">
                                <a href="#"> Quên mật khẩu</a>
                            </div>

                        </div>
                    </div>

                </form>
            </div>



            <div class="col-md-6 col-xs-12">
                <form action="" method="POST" class="login-form">
                    <div id="register-form">
                        <h4 class="login-title">Đăng Ký</h4>
                        <div style="color: crimson; font-size:15px; margin-bottom: 20px;">
                            <?php
                            if (isset($_POST['register'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $email   = $_POST['email'];
                                $password1   = $_POST['password1'];

                                $checkusers = pdo_query_one("select * from `taikhoan` where `tentk` = '" . $username . "' ");

                                $checkemail = pdo_query_one("select * from `taikhoan` where `email` = '" . $email . "' ");

                                if (empty($username)) {
                                    echo 'Vui Lòng Nhập Tài Khoản';
                                } else if (empty($password)) {
                                    echo 'Vui Lòng Nhập Mật Khẩu';
                                } else if ($checkusers) {
                                    echo 'Tài Khoản Đã Tồn Tại';
                                } else  if ($checkemail) {
                                    echo 'Email Đã Tồn Tại';
                                } else if ($password !== $password1) {
                                    echo 'Mật Khẩu Nhập Lại Không Đúng';
                                } else {
                                    pdo_execute("insert into taikhoan(tentk,pass,email) values('$username','".md5($password1)."','$email')"); #tạo acc
                                    $_SESSION['username'] = $username;
                                    header('Location: /44444/nam/index.php');
                                }
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>Tài Khoản</label>
                                <input class="mb-0" type="text" name="username" placeholder="Nhập tài khoản">
                            </div>

                            <div class="col-md-12 mb-20">
                                <label>Nhập Email</label>
                                <input class="mb-0" type="email" name="email" placeholder="Email ">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Mật khẩu</label>
                                <input class="mb-0" type="password" name="password" placeholder="Mật khẩu">
                            </div>
                            <div class="col-lg-6 mb-20">
                                <label>Nhập lại mật khẩu</label>
                                <input class="mb-0" type="password" name="password1" placeholder="Nhập lại mật khẩu">
                            </div>
                            <div class="col-12">
                                <button type="submit" name="register" class="register-button mt-0">Đăng Ký</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php
require('../include/footer.php');
?>