<?php
require("../include/head.php");
require("../include/header.php"); ?>
<div class="blog-section mt-50 mb-50">
    <div class="container">
        <div class="row row-40">
            <div class="col-xl-12 col-lg-12 col-12 order-1 order-lg-2">
                <div class="row">
                    <div class="col-12 mb-40">
                        <div class="rossi-blog">
                            <div class="content">
                                <?php  foreach (pdo_query("SELECT * FROM `tintuc`") as $tintuc) {
                                  extract($tintuc); ?>
                                <h3><a href="#"><?php echo $tintuc['tieude'] ?></a></h3>
                                <p><?php echo $tintuc['mota'] ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require("../include/footer.php");
    ?>