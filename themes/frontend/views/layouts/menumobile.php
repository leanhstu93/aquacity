<script type="text/javascript" src="/js/menumobile/jquery.mmenu.min.all.js"></script>
<link rel="stylesheet" type="text/css" href="/css/menumobile/jquery.mmenu.all.css">
<link rel="stylesheet" type="text/css" href="/css/menumobile/demo.css">
<div class="header">
	<a class="menu_m" href="#menu"><span></span>Menu</a>
	<div class="" >
		<form method="post" action="">
			
			<gcse:search></gcse:search>
			
		</form>
		 <?php //Common::sendphone("#sbphone","#txtphone"); ?>
	</div>
</div>
<nav id="menu">
	<ul>
		<?php 
       $criteria = new CDbCriteria();
       $criteria->with = "loaisanpham_lang";
       $criteria->condition ="Active = 1 and Parent = 0 and idNgonNgu = $this->lang" ;
       $criteria->order = "t.Order";
       $model = Loaisanpham::model()->findAll($criteria);
       $count = Loaisanpham::model()->count($criteria);
       foreach ($model as $key => $value) {
        Common::menudacap4($value->id,"Loaisanpham",$this->lang);
       }
     ?>
		<?php 
       $criteria = new CDbCriteria();
       $criteria->with = "loaitin_lang";
       $criteria->condition ="Active = 1 and Parent = 0 and idNgonNgu = $this->lang" ;
       $criteria->order = "t.Order";
       $model = Loaitin::model()->findAll($criteria);
       $count = Loaitin::model()->count($criteria);
      ?>
      <?php 
       foreach ($model as $key => $value) {
       Common::menutintuc($value->id,"Loaitin",$this->lang);
		}
      
     ?>
	</ul>
</nav>

<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu({
			extensions	: [ 'effect-slide-menu', 'pageshadow' ],
			searchfield	: false,
			counters	: false,
			navbar 		: {
				title		: '<a href=".">Người quảng phía nam</a>'
			},
			navbars		: [
				/*{
					position	: 'top',
					content		: [ 'searchfield' ]
				}, */{
					position	: 'top',
					content		: [
						'prev',
						'title',
						'close'
					]
				}, {
					position	: 'bottom',
					content		: [
						''
					]
				}
			]
		});
	});
</script>
		<script>
	$(function(){
		$(window).scroll(function(){
			if($(this).scrollTop()>250){
				$(".header").addClass("fix-scroll");
			}
			else{
				$(".header").removeClass("fix-scroll");
			}
		});
	});	
</script>
<style type="text/css">
	.fix-scroll{position: fixed; top: 0px; z-index: 9}
</style>