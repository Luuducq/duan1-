<?php $rowww = pdo_query_one("SELECT * FROM `bill` WHERE `id` = " . $_GET['id']); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="">
                <div class="fromtitle">
                    <h4>Cập nhật tình trạng đơn hàng</h4>
                </div>
                <div class="fromcontent">
                    <form action="" method="post">

                        <div class="from-group mb-2">
                            Tình trạng đơn hàng mới :
                            <select name="status" id="" class="form-control">

                                <?php if ($rowww['billstatus'] == 0) { ?>
                                <option value="0" <?php if($rowww['billstatus'] == "0") { echo "selected"; } ?>>Đơn hàng
                                    mới</option>
                                <option value="1" <?php if($rowww['billstatus'] == "1") { echo "selected"; } ?>>Đang xử
                                    lý</option>
                                <option value="2" <?php if($rowww['billstatus'] == "2") { echo "selected"; } ?>>Đang
                                    giao hàng</option>
                                <option value="3" <?php if($rowww['billstatus'] == "3") { echo "selected"; } ?>>Đã giao
                                </option>
                                <option value="4" <?php if($rowww['billstatus'] == "4") { echo "selected"; } ?>>Hoàn đơn
                                </option>
                                <?php } 
                                
                                else if ($rowww['billstatus'] == 1) { ?>
                                <option value="1" <?php if($rowww['billstatus'] == "1") { echo "selected"; } ?>>Đang xử
                                    lý</option>
                                <option value="2" <?php if($rowww['billstatus'] == "2") { echo "selected"; } ?>>Đang
                                    giao hàng</option>
                                <option value="3" <?php if($rowww['billstatus'] == "3") { echo "selected"; } ?>>Đã giao
                                </option>
                                <option value="4" <?php if($rowww['billstatus'] == "4") { echo "selected"; } ?>>Hoàn đơn
                                </option>
                                <?php } 
                                    
                                    else if ($rowww['billstatus'] == 2) { ?>

                                <option value="2" <?php if($rowww['billstatus'] == "2") { echo "selected"; } ?>>Đang
                                    giao hàng</option>
                                <option value="3" <?php if($rowww['billstatus'] == "3") { echo "selected"; } ?>>Đã giao
                                </option>
                                <option value="4" <?php if($rowww['billstatus'] == "4") { echo "selected"; } ?>>Hoàn đơn
                                </option>
                                <?php } 
                                    
                                    else if ($rowww['billstatus'] == 3) { ?>

                                <option value="3" <?php if($rowww['billstatus'] == "3") { echo "selected"; } ?>>Đã giao
                                </option>
                                <option value="4" <?php if($rowww['billstatus'] == "4") { echo "selected"; } ?>>Hoàn đơn
                                </option>
                                <?php } else {
                                    ?>
                                <option value="4" <?php if($rowww['billstatus'] == "4") { echo "selected"; } ?>>Hoàn đơn
                                </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="capnhat">Cập nhật</button>
                            <a href="index.php?act=qldh"><input type="button" class="btn btn-info"
                                    value="Danh sách"></a>

                        </div>
                        <?php
                        if(isset($_POST['capnhat'])) {
                            pdo_query("UPDATE `bill` SET `billstatus` = '".$_POST['status']."' WHERE `id` = '".$rowww['id']."' ");
                            echo '<script>location.href=""</script>';
                        }
                        ?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>