
<div class="a b ">
            <div class="boxtrai mr ">
                <div class="a">
                    <div class="banner">
                        
                        <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/img/img_lights_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/img/img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/img/img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
                    </div>
                </div>
                <div class="a " >
                    <?php
                    $i=0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i==11)){
                            $mr="mr";
                        }else{
                            $mr="";
                        }

                        echo ' 
                        <div class="boxsp '.$mr.'"><img src="'.$hinh.'" alt="">
                        <p>$'.$price.'</p>
                        <a href="">Đồng hồ</a></div>';
                        $i+1;
                    }

                    ?>
                    <!-- <div class="boxsp mr">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp ">
                        <img src="view/img/Screenshot (495).png" alt="" >
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp ">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp mr">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div>
                    <div class="boxsp ">
                        <img src="view/img/Screenshot (495).png" alt="">
                        <p>$30</p>
                        <a href="">Đồng hồ</a>
                    </div> -->
                </div>
            </div>
            <div class="boxphai ">
              <?php 
              include 'boxright.php';
              ?>
            </div>
        </div>