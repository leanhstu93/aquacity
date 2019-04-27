<?php $this->renderPartial("//layouts/header");?> 
<link href="/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='/js/jquery.fancybox.js'></script>  
<script type='text/javascript' src='/js/jquery.fancybox-media.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
	    $('.fancybox-media').attr('rel', 'media-gallery').fancybox({
	        openEffect  : 'none',
	        closeEffect : 'none',
	        openEffect  : 'fade',
	        closeEffect : 'fade',
	      /*  nextEffect  : 'fade',
	        prevEffect  : 'fade',*/
	        openSpeed   : 'slow',
	        arrows      : false,
	        nextClick   : true,
	        width : 700,
	        top:100,
	        helpers : {
	            media : {},
	            buttons: {}
	        }
	    });
	});
</script>
<section class="wrap-prodetail w100 pages-video">
	<div class="w1000">
		 <?php $this->renderPartial("//layouts/menuleft");?> 
		<div class="right">
			<?php 
		    $arrBread[0]["Name"] = "Video";
		    $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
			?>
			<div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
			<div class="head w100">Video</div>
         	<div class="clear"></div>
			<ul class="list-video">
		        <?php
		        $i=0;
		        foreach ($data as $key => $value) {
		          # code...
		          $i++;
		         ?>
		          <li  source="<?php echo $value->Link ?>" class="aj-v  <?php echo ($i%3 == 0)? "last":"" ?>">
		          	<a href="<?php echo $value->Link ?>" class="fancybox-media" rel="media-gallery">
		              <div class="wrap-img-video w100">
		                <img src="<?php echo $value->UrlImage ?>" class="w100">
		                <div class="play">
		                	<img src="images/play.png">
		                </div>
		              </div>
		               <div class="pad3 w100">
		                <label >
		                  <?php echo $value->video_lang->Name ?>
		                </label>
		              </div>
		              </a>
		          </li>
		          <?php } ?>
	        </ul>
	        <div class="clear"></div>
          <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
		</div>
	</div>
</section>