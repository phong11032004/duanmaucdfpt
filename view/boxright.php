<div class="a b ">
                    <div class="td">Tài khoản</div>
                    <div class="conten formtk">
                        <?php 
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                      
                        ?>
                           xin chào <br>
                          <?=$user?>
                            <div class="mb">
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                       <li><a href="index.php?act=edit_taikhoan">cập nhật tai khoan</a></li>
                       <?php if($role==1){ ?>
                       <li><a href="admin/index.php">Đăng nhập admin</a></li>
                       <?php } ?>
                       <li><a href="index.php?act=thoat">Thoat</a></li>
                        </div>
                            <?php 
                        
                            
                        }else{
                          
                        }
                        ?>
                       <form action="index.php?act=dangnhap" method="post">
                        Tên đăng nhập <br>
                            <input type="text" name="user" id=""><br>
                            <div class="mb">
                            Mật khẩu <br>
                            <input type="password" name="pass" id=""><br>
                        </div>
                    <div class="mb">
                        <input type="checkbox" name="" id="">ghi nhớ tài khoản? <br>
                    </div>
                    <div class="mb">
                       <input type="submit" value="đăng nhập" name="dangnhap" >
                      
                    </div>
                       </form>
                       <li><a href="">Quên mật khẩu</a></li>
                       <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                    </div>
               </div>
               <div class="a b ">
                    <div class="td">Danh muc</div>
                    <div class="conten2 menu2">
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo'<li>
                                <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';
                            }
                            ?>
                            <!-- <li>
                                <a href="">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="">lab top</a>
                            </li>
                            <li>
                                <a href="">Điện thoại</a>
                            </li>
                            <li>
                                <a href="">balo</a>
                            </li>
                            <li>
                                <a href="">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="">lab top</a>
                            </li>
                            <li>
                                <a href="">Điện thoại</a>
                            </li>
                            <li>
                                <a href="">balo</a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="boxft shopbx">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="tìm kiếm">
                        </form>
                    </div>
               </div>
               <div class="a ">
                    <div class="td">Top 10 yêu thích</div>
                    <div class="conten">
                        <?php 
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh=$img_path.$img;
                            echo'<div calss="a siu">
                            <img src="'.$hinh.'" alt="" width="50px">
                               
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                        }
                        ?>
                    <!-- <div calss="siu">
                    <img src="view/img/Screenshot (495).png" alt="" width="50px">
                       
                        <a href="">Đồng hồ</a>
                    </div>
                    <div calss="siu">
                    <img src="view/img/Screenshot (495).png" alt="" width="50px">
                       
                        <a href="">Đồng hồ</a>
                    </div>
                    <div calss="siu">
                    <img src="view/img/Screenshot (495).png" alt="" width="50px">
                       
                        <a href="">Đồng hồ</a>
                    </div>
                    <div calss="siu">
                    <img src="view/img/Screenshot (495).png" alt="" width="50px">
                       
                        <a href="">Đồng hồ</a>
                    </div> -->
                    </div>
               </div>
                 
              