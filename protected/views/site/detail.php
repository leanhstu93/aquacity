 <div class="page">
        <div id="header" class="header wrapper">
            <div class="wrapper-background" style="">
                <div class="wrapper-content">
                    <div class="container">
                        <div class="row padB5">
                            <!-- logo -->
                            <div class="col-md-3 col-xs-3 col-sm-3 hidden-xs">
                                <div class="wrapper">
    <h1 class="logo"><a href="/">
        <img src="<?php echo Common::getLogo(); ?>" alt="Vinhomes" title="Vinhomes" /></a>
    </h1>
</div>

                            </div>
                             <!-- header mobile-->
                            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                                <!--RenderView Share.Header.MobileNav-->
                                <!-- <ul class="nav nav-pills top-nav fLeft">
    <li class="">
      <a href="#mmenu">
       <button type="button" class="navbar-toggle mmenu-left" style="right:0px;margin-right:0px;padding:0px;top:0px">	
           						
                  <span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar" style="background-color:#888"></span>
                  <span class="icon-bar" style="background-color:#888"></span>
       					  <span class="icon-bar" style="background-color:#888"></span>
                       
        </button>      
      </a>
    </li>
    <li class="padL7">
        <a class="icon icon-flaguk" target="_blank" href="/en/rent-real-estate"></a>
    </li>
   <li><a href="/lien-he"><span class="icon icon-phone"></span></li>
</ul>
<ul class="nav nav-pills top-nav list-social fRight">
 
    <li class="google">
        <a class="icon icon-googleplus" target="_blank" href="https://plus.google.com/100633001398302771937"></a>
      
    </li>
  <li class="" style="left:5px;	">
        <a class="icon icon-face" target="_blank" href="https://www.facebook.com/vinhomes.vn"></a>
    </li>

</ul>
 -->
 <?php $this->renderPartial('//layouts/top-header') ?>

                  <!-- end top header -->
                    <div class="clearfix"></div>
                </div>     
                     
                             <!-- menu -->
   <?php $this->renderPartial('//layouts/menu') ?>
<!-- end menu -->



                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row padT5 twocolum">
                            


<div class="col-md-9 col-md-offset-3 col-xs-12" >
    <h2 class="page-title">Tin tức</h2>
</div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="header-bg">
            

            <?php $anhnen = Gioithieu::model()->find() ?>

<p><img src="<?php echo $anhnen->HinhAnh ?>" alt="Mua b&aacute;n" width="1400" height="196" /></p>


<script type="text/javascript">
    $(document).ready(function () {
        var backgroundSrc = $(".header-bg img").attr("src");
        if (backgroundSrc != undefined && backgroundSrc!="" ) {
            $("#header").backstretch(backgroundSrc);
        }
        
    })

</script>

        </div>
        <div class="wrapper-content">
            <div class="container">
                <div class="row ">
                    
                    <div id="sidebar" class="col-md-3 col-sm-3  col-xs-12 hidden-xs">
                        <div class="row">
    <div class="col-md-12">
        <form class="frmSearch" action="/tim-kiem">
            <div class="input-group">
                <input class="form-control" type="text" name="keyword" value="" placeholder="T&#236;m kiếm b&#224;i viết" />
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="icon icon-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>
    <div class="clear padT20"></div>
</div><div class="row sidebar-block">
<div class="col-md-12">
<div class="block-title">Tin tức</div>
<div class="list-article col-md-12">
    <?php
        $dk = new CDbCriteria; 
            $dk ->condition = 'Active = 1 and id != '.$tintuc->id;
            $dk ->limit = '4';
            $dk->order = "id desc";
            $tintucl = TintucLang::model()->findAll($dk);
            foreach ($tintucl as $value) {
            ?>
<div class="item  padB10">
<div class="thumbnail  col-sm-5 col-xs-5 col-md-5"><a href="<?php echo Yii::app()->homeUrl ?>tin-tuc/<?php echo $value->Alias ?>" title="SẢN PHẨM CHẤT LƯỢNGCAO"> <img data-src="holder.js/80x46" src="<?php echo $value->HinhAnh ?>" alt="SẢN PHẨM CHẤT LƯỢNGCAO" title="SẢN PHẨM CHẤT LƯỢNGCAO" width="80" height="56" /> </a></div>
<div class="col-sm-7 col-xs-7 col-md-7">
<h3 class="title "><a href="<?php echo Yii::app()->homeUrl ?>tin-tuc/<?php echo $value->Alias ?>" title="SẢN PHẨM CHẤT LƯỢNGCAO"><?php echo $value->TieuDe ?></a></h3>
</div>
<div class="clearfix"></div>
</div>
<?php } ?>
</div>
</div>
</div>
<div class="clear padB5"></div>
 <?php $this->renderPartial('//layouts/quangcao') ?>
                    </div>
                    <div id="mainbar" class="col-md-9 col-sm-9 col-xs-12 ">
                        <div class="article ">
    <div class=" article-detail">
                <h1 class="title"><?php echo $tintuc->TieuDe ?></h1>
                <div class="fLeft">
                    
                </div>
                <div class="fRight padB10">
                    <div class="share-social">
	 <!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style addthis_16x16_style">
	<a class="addthis_button_facebook"></a>
	<a class="addthis_button_twitter"></a>
	<a class="addthis_button_email"></a>
	<a class="addthis_button_print"></a>
	</div>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52de4e2a2200d28b"></script>

	<!-- AddThis Button END -->
</div>
                </div>
                <div class="clear"></div>
              <div class="content"><?php echo $tintuc->NoiDung ?></div>

    </div>
</div>

 <div class="clear padT10"></div>
<div class="row">
   
    <div class="col-md-12">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
            <a class="addthis_button_tweet"></a>
            <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"></a>
            <a class="addthis_counter addthis_pill_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = { "data_track_addressbar": false };</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52de4e2a2200d28b"></script>
        <!-- AddThis Button END -->

    </div>
    <div class="clear padT10"></div>
</div>


<!-- Intro.ListOtherLimit -->
<div class="list-other ">
    <div class="row">
        <div class="col-md-12">
            <h3 class="title-border"></h3>
        </div>
        <div class="clear"></div>
    </div>
  

      <div id="article-project-carousel">
        
            <div id="carousel" class="flexslider padB20">
              
              <ul class="slides">

                
              </ul>
              
        </div>
        
        <div class="clearfix"></div>     
    </div>

    
<script>
    $(window).load(function () {
        $('#article-project-carousel .flexslider').flexslider({
            animation: "slide",
            directionNav:true,
          	controlNav: false, 
            animationLoop: true,          	  
            itemWidth: 220,
            itemMargin: 20,
            prevText: "",
            nextText: "",
            slideshowSpeed: 2000,  
            move:1
        });
    });
</script>
  
</div>

<!-- End Intro.ListOtherLimit -->


                    </div>
                    <div class="clearfix"></div>
                    <div id="main" class="col-md-12 padB20">
                        
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
        <!--  footer   -->
        <?php $this->renderPartial('//layouts/footer') ?>
       <!-- end footer -->
    </div>

   