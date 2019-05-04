<?php
  $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang ");
?>

<html>
        <head>
        </head>
        <body>
        	<img style="width:150px" src="http://"<?php echo $_SERVER["HTTP_HOST"].$ttc->Logo ?>"><br><hr>
            Họ tên: <strong><?php echo $data->Name ?> </strong><br><br>
            SDT: <strong><?php echo $data->SDT ?> </strong><br><br>
            Email: <strong><?php echo $data->Email ?> </strong><br><br>
            Địa chỉ: <strong><?php echo $data->Address ?> </strong><br><br>
            Ghi chú: <strong><?php echo $data->Description ?> </strong><br><br>
            Chương trình: <strong> <?php echo $data->Event ?> </strong><br><br>
            Thời gian đặt: <strong> <?php echo date("d/m/Y h:i:s"); ?></strong><br><br>
			Trân trọng,<br><br>

			Đội ngũ <?php echo $_SERVER['HTTP_HOST'] ?>
                
        </body>
       </html>