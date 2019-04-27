<html>
        <head>
        </head>
        <body>
        	<img src="http://tuananh.pweb.vn/themes/frontend/images/logo.png"><br><hr>
            Kính chào Quý khách <?php echo $data->HoTen ?>,<br><br>
            <?php echo $_SERVER['HTTP_HOST'] ?> vừa nhận được yêu cầu thay đổi mật khẩu đăng nhập vào website <?php echo $_SERVER['HTTP_HOST'] ?> cho tài khoản email <?php echo $data->Email ?>.
           <br><br>
           Mật khẩu:<?php echo $data->MaNgauNhien ?><br><br>
            

			Trân trọng,<br><br>

			Đội ngũ <?php echo $_SERVER['HTTP_HOST'] ?>
                
        </body>
       </html>