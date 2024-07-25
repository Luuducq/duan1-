<?php
    if(is_array($bill)){
        extract($bill);
    }
    
?>
    <div class="row">
            <div class="row fromtitle"><h1>Cập nhật tình trạng đơn hàng</h1></div>
            <div class="row fromcontent">
            <form action="index.php?act=updatedh&id=<?=$id?>" method="post" >
                
                 <div class="row mb10">
                    Tình trạng đơn hàng mới :
                    <input type="text" name="billstatus" value="<?=$billstatus?>" >
                 </div>
                
                 <div class="row mb10">
                  <input type="hidden" name="id" value="<?=$id?>">
                   <input type="submit" name="capnhat" value="Cập nhật">
                   <input type="reset" value="Nhập lại">
                   <a href="index.php?act=donhang"><input type="button" value="Danh sách"></a>

                 </div>
                 <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                 ?>
                 
               </form>
            </div>
        </div>
    </div>