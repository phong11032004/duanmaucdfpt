<style>

        .spct{
 text-align: center;
 
}
</style>
<div class="a b ">
            <div class="boxtrai mr ">
            <div class="a mb">
          
                    <div class="td">San phẩm  <strong><?=$tendm?></strong></div>
                    <div class="a conten">
                        <?php 
                        $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $hinh=$img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="mr";
                            }else{
                                $mr="";
                            }
    
                            echo ' 
                            <div class="boxsp '.$mr.'"><img src="'.$hinh.'" alt="">
                            <p>$'.$price.'</p>
                            <a href="">Đồng hồ</a></div>';
                            $i++;
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
       