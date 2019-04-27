<html>
        <head>
        </head>
        <body>
            <img src="http://tuananh.pweb.vn/themes/frontend/images/logo.png"><br><hr>
            Kính chào Quý khách <?php echo $data->HoTen ?>,<br><br>
            <?php echo $_SERVER['HTTP_HOST'] ?> vừa nhận được yêu cầu đăng ký tài khoải người cho thuê xe cho tài khoản email <?php echo $data->Email ?>.
            Vui lòng <a style="color: #f00; font-weight: bold;font-size: 14px;" href="http://<?php echo $_SERVER['HTTP_HOST'] ?><?php echo Yii::app()->request->baseUrl ?>/authrender1/<?php echo $data->id ?>/<?php echo $data->MaNgauNhien ?>"> BẤM VÀO ĐÂY </a>dưới để tiếp tục quá trình xác nhận email với chúng tôi.<br><br>
           
          <em style="font-family: Arial,Helvetica,sans-serif;font-size: 12px;color: #000000;background: #ffff33;"> Nếu quý khách không thực hiện yêu cầu đăng ký tài khoản người thuê xe xin vui lòng bỏ qua email này.</em><br><br>

            Trân trọng,<br><br>

            <strong>Đội ngũ <span><?php echo $_SERVER['HTTP_HOST'] ?></span></trong>
                
        </body>
       </html>
