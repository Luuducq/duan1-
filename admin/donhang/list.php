<div class="row mb10 fromdanhsachloai">
                <h2>Thống kê đơn hàng</h2>
            <table>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng </th>
                    <th>Giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
               <?php
               foreach ($listbill as $bill) {
                extract($bill);
                $suadh="index.php?act=suadh&id=".$id;
                $kh=$bill["billname"].'
                <br> '.$bill["billemail"].'
                <br> '.$bill["billdiachi"].'
                <br> '.$bill["billsdt"];
                $ttdh=get_ttdh($bill["billstatus"]);
                $countsp=loadall_cart_count($bill['id']);
                echo '<tr>
                        <td>SP-'.$bill['id'].'</td> 
                        <td>'.$kh.'</td> 
                        <td>'.$countsp.'</td>   
                        <td><strong>'.$bill['total'].'</strong>VND</td> 
                        <td>'. $ttdh.'</td> 
                        <td>'.$bill['ngaydathang'].'</td> 
                         <td>
 <div style="display: flex; justify-content: center;">
  <a href="'.$suadh.'">
    <button>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
      </svg>
    </button>
  </a>
</div>
</td>
                </tr>';
               }
               ?>
            </table>
</div>         