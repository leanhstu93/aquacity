<?php $this->renderPartial("//layouts/header");?> 
<link href="/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='/js/jquery.fancybox.js'></script>  
<script type='text/javascript' src='/js/jquery.fancybox-media.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
	    $('.fancybox').attr('rel', 'gallery').fancybox({
	        openEffect  : 'none',
	        closeEffect : 'none',
	        openEffect  : 'fade',
	        closeEffect : 'fade',
	      /*  nextEffect  : 'fade',
	        prevEffect  : 'fade',*/
	        openSpeed   : 'slow',
	       
	      
	        width : 700,
	        top:100,
	        helpers : {
	            media : {},
	            buttons: {}
	        }
	    });
	});
</script>
<section class="wrap-prodetail w100 pages-hinhanh">
	
		<div class="w100 ct-hinhanh">
			<div class="w1000">
			<?php 
		    $arrBread[0]["Name"] = "Hình ảnh";
		    $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
			?>
			<div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
			<div class="head w100">Thư viện hình ảnh</div>
			</div>
         	<div class="clear"></div>
			<ul class="list-hinhanh">
		        <?php
		        $i=0;
		        foreach ($data as $key => $value) {
		          # code...
		          $i++;
		         ?>
		          <li>
		          	<a href="<?php echo $value->UrlImage ?>" class="fancybox" rel="gallery">
		              <div class="wrap-img-hinhanh w100">
		                <img src="<?php echo $value->UrlImage ?>" class="w100 img-hinhanh">
		                <div class="zoom">
		                	<img src="images/zoom-in-button.png">
		                </div>
		              </div>
		                <label >
		                  <?php echo $value->hinhanh_lang->Name ?>
		                </label>
		              </a>
		          </li>
		          <?php } ?>
	        </ul>
	        <div class="clear"></div>
          <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
		</div>
</section>
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
        <span>Đặt hàng để được giao tận nơi hoặc gọi trực tiếp.<br>
        <strong><?php echo $this->ngonngu[104] ?>: </strong> <?php echo $this->ttc->Tel ?></span>
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