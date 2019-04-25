	<link rel="stylesheet" type="text/css" href="/css/carousel/owl.carousel.css">
  <script type="text/javascript" src="/js/carousel/owl.carousel.min.js"></script>
  <?php  ?>
  <div class="slide<?php if(count($slide) <= 1) echo 'aaa'; ?> Carousel">
  	<?php 
		foreach ($slide as $key => $value) {
	?>
		<div>
			<img src="<?php echo $value->UrlImage ?>">
		</div>
	<?php	} ?>
	<!-- <video class="video w100" height="300" poster="http://manforhimself.com/wp-content/uploads/2016/06/CLAY-WEBSITE-HOLDER.jpg" controls="controls" preload="auto" loop autoplay muted><source type="video/webm" src="http://manforhimself.com/wp-content/uploads/2017/04/CLAY-WEBSITE-.webm"><source type="video/mp4" src="http://manforhimself.com/wp-content/uploads/2017/04/CLAY-WEBSITE-.mp4">
			</video>-->
</div>

		<script>
			$(document).ready(function(){
			  $(".slide").owlCarousel({
					autoplay:false,
          smartSpeed : 900,  
					navigation : true, // Show next and prev buttons
					paginationSpeed : 9000,
					loop:true,
					items:1
				});
			});
		</script>
