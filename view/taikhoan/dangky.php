<style>

        .spct{
 text-align: center;
 
}

    .formtk input[type="email"],

.formconten input[type="text"]{
    width: 100%;
    border: 1px #ccc solid;
    padding:  10px;
    border-radius: 5px;
}
.formtk input[type="checkbox"]{
    border-radius: 5px;
}
.formtk input[type="submit"],.formconten input[type="submit"],.formconten input[type="reset"],.formconten input[type="button"]{
    border-radius: 5px;
    padding: 0px 10px;
    background-color: white;
    border: 1px #cccccc47 solid;
}
.formtk input[type="submit"]:hover,.formconten input[type="submit"]:hover,.formconten input[type="reset"]:hover,.formconten input[type="button"]:hover{
    background-color: #ccc;
}


</style>
<div class="a b ">
            <div class="boxtrai mr ">
            <div class="a mb"> 
                    <div class="td">Đăng ký thành viên</div>
                    <div class="a conten formtk">
                        <form action="index.php?act=dangky" method="post">
                            <div  class="mb">
                                Email
                            <input type="email" name="email" >
                            </div>
                            <div  class="mb">
                                Tên đăng nhập
                            <input type="text" name="user">
                            </div>
                            <div  class="mb">
                                Mật khẩu
                            <input type="password" name="pass">
                            </div>
                            <div  class="mb">
                            <input type="submit" name="dangky" value="Đăng ký">
                            
                            
                            <input type="reset" value="nhaplai">
                            </div>
                            <h2 class="thongbao">
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                    </h2>
                           
                        </form>
                    </div>
                  
                    </div>
                   
            </div>
            <div class="boxphai ">
           <?php
             include 'view/boxright.php';
            ?>
           
            </div>
        </div>
       