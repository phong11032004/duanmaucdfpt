
<div class="a">
            <div class="a tm">
                <h1>Danh sách Tài khoản</h1>
            </div>
       
            <div class="a formconten">
               
                </div>
                <div class="a mb2 formds">
                    <table >
                        <tr>
                            <th></th>
                            <th>id</th>
                            <th>nội dung</th>
                            <th>iduser</th>
                            <th>idpro</th>
                            <th>ngaybinhluan</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $suabl="index.php?act=suabl&id=".$id;
                            $xoabl="index.php?act=xoabl&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>'.$id.'</td>
                            <td>'.$noidung.'</td>
                            <td>'.$iduser.'</td>
                            <td>'.$idpro.'</td>
                            <td>'.$ngaybinhluan.'</td>
                          
                            <td><a href="'.$suabl.'"><input type="button" value="sua"></a> <a href="'.$xoabl.'"><input type="button" value="xoa"></a></td>
                        </tr>';
                        }
                        ?>
                       
                    </table>
                   
                </div>
                <div class="a mb2">
                    <input type="button" value="chọn tất cả ">
                    <input type="button" value="bỏ chọn tất cả">
                    <input type="button" value="xóa tất cả mục đã chọn">
                  
                </div>
                </form>
          </div>