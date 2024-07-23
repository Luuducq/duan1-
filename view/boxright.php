
<div class="row mb">
<div class="boxtieude"><strong>Tài Khoản &nbsp;&#128100;&nbsp;</strong></div>
            <div class="boxcontent formtaikhoan">
            <?php
              if(isset($_SESSION['tentk'])){
                extract($_SESSION['tentk']);
            ?>
                  <div class="row mb10">
                    Xin chào<br>
                    <?=$tentk?>
                </div>
            <div class="row mb10">
            <li>
               <a href="index.php?act=mybill">Đơn hàng của tôi &#x1F6D2;</a>
             </li>
              <li>
                   <a href="index.php?act=quenmk">Quên mật khẩu &#x1F512;</a>
              </li>
              <li>
                   <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản &#x1F4E5;</a>
              </li>
                <?php if($role==1) {?>
              <li>
                   <a href="admin/index.php">Đăng nhập Admin  &#128274;</a>
              </li>
                    <?php }?>
              <li>
                   <a href="index.php?act=thoat">Thoát  &#x1F6AA;</a>
              </li>
            </div>

            <?php
              }else{
            ?>
              <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    Tên đăng nhập<br>
                    <input type="text" name="tentk" >
                </div>
                <div class="row mb10">
                    Mat khau<br>
                <input type="password" name="pass" > 
                </div>
                <div class="row mb10">
                   Yêu cầu bạn đăng nhập để mua hàng!  
                   </div> 
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap" >
                </div>
              </form>
              <li>
                <a href="#">Quen mat khau</a>
             </li>
             <li>
                 <a href="index.php?act=dangki">Dang ki thanh vien</a>
              </li>
            <?php } ?>
            </div>
           </div>
           <div class="row mb">
           <div class="boxtieude"><strong>Danh Mục &nbsp;&#128477;&nbsp;</strong></div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddanhmuc=".$id;
                        echo '<li>
                        <a href="'.$linkdm.'">'.$tendanhmuc.'</a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="boxfooter timbox">
                <form action="index.php?act=sanpham" method="post">
                    <div class="kp"><input type="text" name="kyw" ></div>
                    <div class="kl"><input type="submit" name="timkiem" value="&#128269;&nbsp;Tìm&nbsp;kiếm"></div>
                </form>
            </div>
           </div>
           <div class="row mb">
           <div class="boxtieude"><strong>Các sản phẩm được mua nhiều nhất &nbsp;&#129054;&nbsp;&#128293;</strong></div>
            <div class=" row boxcontent">
                <?php
                foreach ($dstop10 as $sp) {
                   extract($sp);
                    $hinh= $img_path.$image;
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                   echo '<div class="row mb10 top10">
                   <img src="'.$hinh.'" alt="" >
                   <a href="'.$linksp.'">'.$tensp.'</a>
                   </div>';
                }
                ?>
            </div>
           </div>