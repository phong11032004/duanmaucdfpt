<?php
if(is_array($dm)){
    extract($dm);
}
?>
<div class="a">
            <div class="a tm">
                <h1>Cập nhật loại hàng</h1>
            </div>
          <div class="a formconten">
            <form action="index.php?act=updatedm" method="post">
                <div class="a mb2">
                Mã loại <br>
                <input type="text" name="ma_loai" id="">
            </div>
            <div class="a mb2">
                Tên loại <br>
                <input type="text" name="ten_loai" value=" <?php if(isset($name)&&($name!="")) echo $name; ?> "id="">
            </div>
            <div class="a mb2">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="cập nhật">
                <input type="reset" value="nhập lại">
                <a href="index.php?act=lisdm"><input type="button" value="danh sách"></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
          </div>
        </div>
        </div>
</body>
</html>