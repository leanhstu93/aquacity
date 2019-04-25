
<script type="text/javascript" src="js/minislide/responsiveslides.min.js" ></script>
<style type="text/css">

</style>
<h3 class="subj w100"><?php echo $this->ngonngu[51] ?> </h3>
<div class="chuyende_wrap">

<ul class="rslides" id="hinhanhcongty">
	<?php 
	 $criteria = new CDbCriteria();
        $criteria->with="sanpham_lang";
        $criteria->condition = "Active = 1 and SetHome = 1 and sanpham_lang.idNgonNgu = 1";
        $criteria->order ="t.id desc";
        $criteria->limit = "4" ;
        $spnb = Sanpham::model()->findAll($criteria);
	foreach($spnb as $key=>$value){?>
	<li><a target="_blank" href="/mon/<?php echo $value->sanpham_lang->Alias?>"><img class="vien_hinh hinh_chuyende" src="<?php echo $value->UrlImage?>" />
	<div class="grp-tt-sp">
		<label><?php echo $value->sanpham_lang->Name ?></label>
		<p>
			 <span><?php echo number_format($value->Gia) ?>VNĐ</span>
		</p>
	</div>
	</a></li>
	<?php }?>
</ul>
</div>
<script>
  $(function() {
    $('#hinhanhcongty').responsiveSlides({
		nav : true,
		namespace: "callbacks",
		pause : true,
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
	});
  });
</script>
<style type="text/css">
.chuyende_wrap li{border-bottom: 0px}
.rslides .grp-tt-sp{width: 100%;float: left;padding-left: 10px}
.rslides .grp-tt-sp label{font-weight: bold;float: left; padding-right: 2%}
.rslides .grp-tt-sp p span{color: #079d4b;}
	.rslides{position:relative;list-style:none;overflow:hidden;width:100%;padding:0;margin:0;}
.rslides li{-webkit-backface-visibility:hidden;position:absolute;display:none;width:100%;left:0;top:0;}
.rslides li:first-child{position:relative;display:block;float:left;}
.rslides img{display:block;height:auto;float:left;width:100%;border:0;}
.chuyende_wrap{position:relative;border:1px solid #E3E2E2;width: 100%;float: left;margin-top: 5%}
.callbacks{position:relative;list-style:none;overflow:hidden;width:100%;padding:0;margin:0;}
.callbacks li{position:absolute;width:100%;left:0;top:0;}
.callbacks img{display:block;position:relative;z-index:1;height:auto;width:100%;border:0;}
.callbacks .caption{display:block;position:absolute;z-index:2;font-size:20px;text-shadow:none;color:#fff;background:#000;background:rgba(0,0,0, .8);left:0;right:0;bottom:0;padding:10px 20px;margin:0;max-width:none;}
.callbacks_nav{position:absolute;-webkit-tap-highlight-color:rgba(0,0,0,0);top:67%;left:0;opacity:0.3;z-index:3;text-indent:-9999px;overflow:hidden;text-decoration:none;height:32px;width:20px;background:transparent url("images/arrowchuyende.gif") no-repeat left top;margin-top:-45px;}
.callbacks_nav:hover{opacity:0.7}
.callbacks_nav:active{opacity:1.0;}
.callbacks_nav.next{left:auto;background-position:right top;right:0;}
#slider3-pager a{display:inline-block;}
#slider3-pager img{float:left;}
#slider3-pager .rslides_here a{background:transparent;box-shadow:0 0 0 2px #666;}
#slider3-pager a{padding:0;}
#hinhanhcongty li {width: 100%;padding: 0px}
#hinhanhcongty{margin-top: 0px}
h3.subj{margin-top: 5%}
@media screen and (max-width:600px){h1{font:24px/50px "Helvetica Neue", Helvetica, Arial, sans-serif;}
.callbacks_nav{top:47%;}
}
</style>