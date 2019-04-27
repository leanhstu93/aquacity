 <!-- Why Us -->       
    <div class="why_us">
		  <div class="container">
		    <div class="row">

		        <div class="icon_car_heading"><img src="<?php echo Yii::app()->theme->baseUrl ?>/images/icon_car_heading.png"> </div>
		          
		            <h2 class="heading">
							<span> 
								
									<?php echo $vechungtoi->name;?>
						
							</span>
					</h2>
		          
		      <!-- BEGIN -->
		      <div class="why_us_content">
			  <?php if(count($all_vechungtoi)>0){
							foreach($all_vechungtoi as $value){
					?>
			  
			      <div class="col-sm-3">
			      	<div class="col-sm-3 why_us_icon"> 
						<img src="<?php echo Yii::app()->request->baseUrl; ?><?php echo $value["UrlHinh"];?>"> 
					</div>
			      	<div><a class="why_us_title" href="/<?php echo $value["Alias"];?>.html"> <h4><?php echo $value["TieuDe"];?></h4> </a></div>
			        <article> 
			          <p><?php echo $value["MoTa"];?></p>
			        </article>
			      </div>
			     
			  <?php
							}
						
					}
					
					?>		
  
			     </div>
		    </div>
		    <div class="why_us_xemthem"> <a href="/<?php echo $vechungtoi->alias;?>.html"> >> <?php echo ($idNgonNgu==2)?'Read more':'Xem thêm';?>  </a></div>
		  </div> 
		</div>   
    
    <!-- popular brands -->
	<div class="middle_row row_light_gray brand_list">
		<div class="container">
	        
	            <ul class="slider-icon">
					<?php foreach($logos as $logo){?>
	            	<li><img src="<?php echo Yii::app()->request->baseUrl; ?><?php echo $logo->UrlImage;?>" class="company-logo" alt="<?php echo $logo->TenHang;?>"></li>
					<?php } ?>
	            </ul>
        </div>
		
	<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-2.2.3.min.js"></script>
	<script src="<?php echo Yii::app()->theme->baseUrl ?>/owlCarousel/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl ?>/owlCarousel/owl.carousel.css">	
	<script>
	 jQuery(function($){
		 	$('.slider-icon').owlCarousel({
					slideSpeed : 800,
        autoPlay: 5000,
        items : 8,
        stopOnHover : true,

			});
	 });
	</script>
	</div>