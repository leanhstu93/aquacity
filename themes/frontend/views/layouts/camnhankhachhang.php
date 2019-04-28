<div class="camnhankhachhang-slide Carousel">
    <?php 
    $criteria = new CDbCriteria();
    $criteria->condition = "Active = 1";
    $criteria->order ="id desc";
    //$criteria->limit= 3;
    $slide = Camnhankhachhang::model()->findAll($criteria);
    foreach ($slide as $key => $value) {
    ?>
    <div>
    	
    	<div class="right center">
            <div class="wrp-img">
    		  <img src="<?php echo $value->UrlImage ?>" class="w100"/>
            </div>
    	</div>
        <div class="left">
            <div class="ttcn text w100">
                <?php echo $value->ThongTinCaNhan ?>
            </div>
            <label class="w100">
                <?php echo $value->TieuDe ?>
            </label>
            <p class="w100 text">
                <?php
                   echo Common::getDescription($value->Content,400); 
                ?> 
            </p>
        </div>
    </div>
  <?php } ?>
</div>
 <script>
      $(document).ready(function(){
        $(".camnhankhachhang-slide").owlCarousel({
          autoplay:true,
          smartSpeed : 900,  
          navigation : true, // Show next and prev buttons
          pagination : true,
          paginationSpeed : 9000,
          loop:true,
          margin:0,
          items:1
        });
      });
    </script>
<style type="text/css">
	.camnhankhachhang-slide .owl-item .btn-cnkh{width: 100px;padding: 8px 0;text-align: center;color: white;background: #013a06;border-radius: 7px;border:1px solid #013a06; float: left;-webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;margin-top: 2%}
    .camnhankhachhang-slide .owl-item .btn-cnkh:hover{background: white; color: #013a06}
	.camnhankhachhang-slide .owl-item .left{width: 100%;float: left;text-align: center}
    .camnhankhachhang-slide .left *{color: white}
	.camnhankhachhang-slide .owl-item .right{width: 100%;float: left;}
	.camnhankhachhang-slide .owl-item .right .wrp-img{max-width: 150px;margin:auto;    border: 1px solid white;
    padding: 8px;
    display: inline-block;border-radius: 50%}
	.camnhankhachhang-slide .owl-item .ttcn {margin-bottom: 5px;font-weight: bold;text-align: center}
	.camnhankhachhang-slide .owl-item label{margin-bottom: 5px;    color: #25bce9;
    font-size: 110%;
    font-weight: bold;}
    .camnhankhachhang-slide .owl-controls{width: 100%;float: left;}
    .camnhankhachhang-slide .owl-controls .owl-dots{width: 100%;float: left;text-align: center;margin: 2% 0}
    .camnhankhachhang-slide .owl-controls .owl-dot{width: 12px;height: 12px;display: inline-block;background: white;margin-right: 10px;-webkit-transition: all .2s ease;
    -moz-transition: all .2s ease;
    -ms-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease;border-radius: 50%}
    .camnhankhachhang-slide .owl-controls .owl-dot.active{background: #25bce9}
   
</style>