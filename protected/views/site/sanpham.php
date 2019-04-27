 <link rel="stylesheet" type="text/css" href="/css/carousel/owl.carousel.css">
  <script type="text/javascript" src="/js/carousel/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/js/carousel/OwlCarousel2Thumbs.min.js"></script>

<?php $this->renderPartial("//layouts/header");?> 
<section class="wrap-prodetail w100">
	<div class="w1000">
		 <?php $this->renderPartial("//layouts/menuleft");?> 
		<div class="right">

		<?php 
		    $arrBread[0]["Name"] = $model->sanpham_lang->Name;
		    $arrBread[1]["Name"] = $lsp->loaisanpham_lang->Name;
		    $arrBread[1]["Href"] = "loai-san-pham/".$lsp->loaisanpham_lang->Alias.".html";
		    $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
		?>
		<div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
			<div class="left">
				<?php  $thumbnail = Thumbnails::model()->findAll("Active = 1 and idSP = $model->id"); ?>
			    <div class="img-pro-de w100">
	     			<!--<img src="<?php // echo $model->UrlImage ?>" class="w100"> -->
	     			 	<ul class=" <?php echo $thumbnail == false ? 'slide1' : 'slide' ?> Carousel w100">
					    	<li class="item">
					            <img src="<?php echo $model->UrlImage ?>"  title="" class="w100"/>
					        </li>
					    <?php 
					       
					        foreach ($thumbnail as $key => $value) {
					          # code...
					    ?>
					        <li>
					            <img src="<?php echo $value->UrlImage ?>"  title="" />
					        </li>
					    <?php } ?>
					    </ul>
	        	</div> 
			</div>
			<div class="right">
				<label>
					<?php echo $model->sanpham_lang->Name ?>
				</label>
				<div class="price-view">
					
					<p><?php echo $this->ngonngu[44] ?>: <span><?php echo number_format($model->Gia) ?></span></p>
					<p class="des-pro">
						<?php echo $model->sanpham_lang->MoTa ?>
					</p>
					<p class="w100">
						<?php echo $this->ngonngu[38] ?>: 11h - 22h
					</p>
					
					<div class="grp-btn w100 add-to-cart"> <input type="text" class="input-text center inp-quantity" name="Quantity" value="1" size="3"> <span class="product_increments" style="height: 42px; width: 20px;"> <span id="spin-up">
								<span style="line-height: 20px;">
									<strong>+</strong>
								</span>
							</span>
							<span id="spin-down">
								<span style="line-height: 20px;">
								<strong>-</strong>
							</span>
						</span></span>
						<span class="button button-cart">
							<input type="submit" class="input-submit btn-cart" idsp="<?php echo $model->id ?>" value="Add to cart">
							<span class="button-addon"></span>
						</span>
						
					</div>
					<div class="gach-prd"></div>
					<div class="wrp-col3 w100">
						<div class="col3">
							<label><?php echo $this->ngonngu[128] ?> </label>
							<span>6,000 vnđ</span>
						</div>
						<div class="col3">
							<label><?php echo $this->ngonngu[63] ?></label>
							<span>
								<?php echo $this->ngonngu[64] ?>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="ct-ct w100">
				<div class="panel-ct">
					<span><?php echo $this->ngonngu[120] ?></span>
				</div>
				<div class="tab-ct">
					<?php echo $model->sanpham_lang->Content ?>
				</div>
				<div class="panel-ct">
					<span><?php echo $this->ngonngu[155] ?></span>
				</div>
						
					<?php $requestutl = $_SERVER['REQUEST_URI']; ?>
					<div class="fb-comments" data-href="<?php echo "http://".$_SERVER['HTTP_HOST'].$requestutl.""; ?>" data-numposts="5"></div>
				
					
			</div>
			<div class="clear"></div>
			<div class="wrap-lsp w100 splq">
			 <div class="head w100"><?php echo $this->ngonngu[7] ?></div>
			 <div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
	         <div class="clear"></div>
	        <ul class="list-pro">
	         <?php 
		        $criteria = new CDbCriteria();
		        $criteria->with = "sanpham_lang";
		        $criteria->condition = "Active = 1 and idLoai = $model->idLoai and t.id != $model->id and idNgonNgu = $this->lang";
		        $criteria->order = "t.id desc";
		        $criteria->limit = 6;
		        $splq = Sanpham::model()->findAll($criteria);
		        $i=0;
		        foreach ($splq as $key => $value) {
		          # code...
		          $i++;
		         ?>
		          <li class="<?php echo ($i%3 == 0)? "last":"" ?>" >
		            <a href="/mon/<?php echo $value->sanpham_lang->Alias ?>.html">
		              <div class="wrap-img-cate">
		                <img src="<?php echo $value->UrlImage ?>">
		              </div>
		              <div class="wrap-des-cate">
		                <h3 ><?php echo $value->sanpham_lang->Name ?></h3>
		                <p class="price"> <?php echo number_format($value->Gia) ?> VNĐ </p>
		                <div class="clear"></div>
		                <div class="des-pro w100">
			              <?php echo Common::getDescription($value->sanpham_lang->MoTa,100); ?>
			            </div>
		              </div>

		            </a>
		          </li>
		        <?php } ?>
	        </ul>
	        </div>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$(".tab-panel li").hover(function() {
				/* Stuff to do when the mouse enters the element */
				var ind = $(this).index();
				console.log(ind);
				var ind = ind + 1;
				var has = $(this).hasClass('active')
				if(has == false)
				{
					$(".tab-panel li").removeClass('active');
					$(".tab-ct li").removeClass('active');
					$(".tab-ct li:nth-child("+ind+")").addClass("active");
					$(this).addClass('active');
				}
			});
		})
	</script>
</section>
<script>
      $(document).ready(function(){
        $(".slide").owlCarousel({
          autoplay:true,
          smartSpeed : 300,  
          navigation : true, // Show next and prev buttons
          paginationSpeed : 9000,
          loop:true,
          items:1,
           thumbs: true,
        thumbImage: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item'
        });
      });
    </script>
    <style type="text/css">
	.slide li {width: 100%;float: left;}
    .owl-thumb-item img {
        width: 100%;
        height: auto;
        float: left;
    }

    .owl-thumbs {
        position: absolute;
        bottom: 0;
        left: 0;
        display: table;
        width: 100%;
        text-align: center;
        padding: 5%;
        padding-bottom: 1%;
    }

    .owl-thumb-item {
    	outline: none;
    	width: calc(100% / 5);
        display: table-cell;
        border: none;
        background: none;
        padding: 0;
        opacity: .5;
       
    }

    .owl-thumb-item.active {
        opacity: 1;
         border: 1px solid white;
    }
</style>