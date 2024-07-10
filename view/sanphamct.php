<style>
        .spct{
 text-align: center;
 
}
</style>
<div class="a b ">
            <div class="boxtrai mr ">
            <div class="a mb">
            <?php 
                        extract( $onesp);
                        ?>
                    <div class="td"><?=$name?></div>
                    <div class="a conten">
                        <?php 
                        extract( $onesp);
                        $hinh=$img_path.$img;
                        echo '  <div class="a mb spct">  <img src="'.$hinh.'" alt="" width="300px"></div> ';
                        echo $mota;
                        ?>
                    </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script>
$(document).ready(function(){
  
   
    $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?> });
  
});
</script>
                    <div class="a " id="binhluan">
                    <!-- <div class="td">bình luận</div>
                   
                    <div class="conten">
                    
                    </div> -->
                    </div>
                    <div class="a mb">
                    <div class="td">sản phẩm cùng loại</div>
                    <div class="conten">
                    
                    <?php 
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                       echo '<li> <a href="'.$linksp.'">'.$name.'</a> </li>';
                    }
                    ?>
                    </div>
                    </div>
            </div>
            <div class="boxphai ">
           <?php
             include 'boxright.php';
            ?>
           
            </div>
        </div>
       