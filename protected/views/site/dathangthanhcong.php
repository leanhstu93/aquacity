<?php $this->renderPartial("//layouts/header");?>
<?php 
 if(isset($_POST["NncmsDonhang"])){
   print_r($_POST['NncmsDonhang'] );  
      die("ok");
  }
?>
<div class="content w100 pages-tb">
	<div class="w1000">
	<div class="wrap-note">
		<p>
			Chúc mừng quý khách  <strong><?php echo $nguoidung->HoTen ?> </strong> đặt hàng thành công. Nhân viên chăm sóc khách hàng sẽ liên lạc qua số điện thoại <strong><?php echo $nguoidung->DienThoai ?></strong> trong thời gian nhanh nhất. Trân trọng cám ơn.
		</p>
	</div>
	</div>
</div>
<section class="csvc w100">
  <div class="w1000">
    <ul>
      <li>
        <img src="/images/mt-0975-home-icon1.png">
        <label>11h - 22h</label>
        <div class="gach"></div>
        <span class="w100">Chúng tôi phục vụ tất cả các ngày trong tuần (kể cả lễ tết)</span>
      </li>
      <li>
        <img src="/images/icgiaohang.png">
        <label>Giao hàng </label>
        <div class="gach"></div>
        <span>Đặt hàng để được giao tận nơi hoặc gọi trực tiếp.</span>
      </li>
      <li>
        <img src="/images/mt-0975-home-icon3.png">
        <label>Đầu bếp</label>
        <div class="gach"></div>
        <span>Bếp trưởng và cố vấn Michael Bảo Huỳnh. Bếp phụ là những người do chính ông đào tạo</span>
      </li>
      <li>
        <img src="/images/mt-0975-home-icon4.png">
        <label>Món ăn</label>
        <div class="gach"></div>
        <span>Menu chúng tôi là những món ăn rất ngon, đặc trưng của đất nước MEXICO</span>
      </li>
    </ul>
  </div>
</section>