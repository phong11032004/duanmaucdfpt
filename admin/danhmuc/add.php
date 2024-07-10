<div class="a">
            <div class="a tm">
                <h1>Thêm mới lọa hàng hóa</h1>
            </div>
          <div class="a formconten">
            <form action="index.php?act=adddm" method="post">
                <div class="a mb2">
                Mã loại <br>
                <input type="text" name="ma_loai" id="">
            </div>
            <div class="a mb2">
                Tên loại <br>
                <input type="text" name="ten_loai" id="">
            </div>
            <div class="a mb2">
                <input type="submit" name="them" value="Thêm mới">
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