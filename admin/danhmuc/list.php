
                        <div class="a">
            <div class="a tm">
                <h1>Danh sách loại hàng</h1>
            </div>
       
            <div class="a formconten">
               
                </div>
                <div class="a mb2 formds">
                    <table >
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm="index.php?act=suadm&id=".$id;
                            $xoadm="index.php?act=xoadm&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="sua"></a> <a href="'.$xoadm.'"><input type="button" value="xoa"></a></td>
                        </tr>';
                        }
                        ?>
                       
                    </table>
                   
                </div>
                <div class="a mb2">
                    <input type="button" value="chọn tất cả ">
                    <input type="button" value="bỏ chọn tất cả">
                    <input type="button" value="xóa tất cả mục đã chọn">
                   <a href="index.php?act=adddm"> <input type="button" value="nhập thêm"> </a>
                </div>
                </form>
          </div>