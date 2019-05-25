<script type="text/javascript" src="/js/menumobile/jquery.mmenu.min.all.js"></script>
<link rel="stylesheet" type="text/css" href="/css/menumobile/jquery.mmenu.all.css">
<link rel="stylesheet" type="text/css" href="/css/menumobile/demo.css">
<div class="header wrp-menumobile">
	<a class="menu_m" href="#menu"><span></span>Menu</a>
	<div class="" >
		<form method="post" action="">
			<gcse:search></gcse:search>
		</form>
	</div>
</div>

<nav id="menu">
	<ul>
        <li class="hd-dropdown-hover"><a class="active" href='/'> Trang chủ </a></li>
        <?php
        $criteria = new CDbCriteria();
        $criteria->condition = "active = 1 and set_home = 1";
        $criteria->limit = 3;
        $model = SinglePage::model()->findAll($criteria);
        $count = SinglePage::model()->count($criteria);
        if ($count > 0) {
            foreach ($model as $key => $value) {
                $router = Router::model()->find("idObject = " . $value->id . " AND type = " . Router::TYPE_SINGLE_PAGE);
        ?>
                <li class="hd-dropdown-hover">
                    <a href='/<?php echo $router->alias ?>.html'> <?php echo $value->name ?> </a>
                </li>
        <?php
            }
        }
        ?>
        <li class="hd-dropdown-hover">
            <a> Dịch vụ </a>
            <ul>
            <?php
            $criteria = new CDbCriteria();
            $criteria->with = "sanpham_lang";
            $criteria->condition ="Active = 1 and idNgonNgu = $this->lang" ;
            $criteria->limit = 16;
            $model = Sanpham::model()->findAll($criteria);
            $count = Sanpham::model()->count($criteria);
            if($count > 0){
                ?>
                <?php
                $i = 0;
                foreach ($model as $key => $value) {
                    $i++;
                    $router = Router::model()->find("idObject = ". $value->sanpham_lang->id ." AND type = ".Router::TYPE_PRODUCT);
                    echo '<li><a href="'.Yii::app()->request->baseUrl.$router->alias.'">'.$value->sanpham_lang->NameShort.'</a></li>
                ';
                }
                ?>
            <?php } ?>
            </ul>
        </li>


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
        <li class="hd-dropdown-hover"><a href='/video.html'> Video </a></li>

	</ul>

</nav>



<script type="text/javascript">

	$(function() {

		$('nav#menu').mmenu({

			extensions	: [ 'effect-slide-menu', 'pageshadow' ],

			searchfield	: false,

			counters	: false,

			navbar 		: {

				title		: '<a href=".">Bác sĩ sữa mũi</a>'

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