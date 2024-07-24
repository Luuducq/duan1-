<div class="row mb10 fromdanhsachloai">
    <h2>Thống kê danh mục theo sản phẩm </h2>
            <table>
                <tr>
                    
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                    
                </tr>
                <?php
                 foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                    <td>'.$madm.'</td>
                    <td>'.$tendm.'</td>
                    <td>'.$countsp.'</td>
                    <td>'.$maxgia.'</td>
                    <td>'.$mingia.'</td>
                    <td>'.$avggia.'</td>
                </tr>';
                 }
                ?>
               
            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
          </div>

