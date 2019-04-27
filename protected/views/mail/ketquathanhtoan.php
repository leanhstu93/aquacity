<html>
    <head>
    </head>
    <body>
        <img src="http://tuananh.pweb.vn/themes/frontend/images/logo.png"><br><hr>
        Kính chào Quý khách <?php echo $data->TenNguoiNhan ?>,<br><br>
        <?php echo $_SERVER['HTTP_HOST'] ?> vừa nhận được <span style="color: #f36f21;"> đơn hàng #<?php echo $data->MaDH ?> </span> của quý khách đặt ngày <strong> <?php echo date("d-m-Y h:m:s",$data->ThoiGianDat) ?> </strong> với hình thức thanh toán là Visa. Chúng tôi liên hệ quý khách sớm nhất.
       
       
     <br><br>

        Trân trọng,<br><br>

        <strong>Đội ngũ <span><?php echo $_SERVER['HTTP_HOST'] ?></span></trong>
            
    </body>
</html>
