  
  <link rel="stylesheet" type="text/css" href="/css/carousel/owl.carousel.css">
  <script type="text/javascript" src="/js/carousel/owl.carousel.min.js"></script>
  <div class="slide Carousel">
    <?php 
    $criteria = new CDbCriteria();
    $criteria->with ="slide_lang";
        $criteria->condition = "Active = 1";
        $criteria->order ="t.id desc";
        $criteria->limit= 3;
        $slide = Slide::model()->findAll($criteria);
    foreach ($slide as $key => $value) {
  ?>
    <div>
      <img src="<?php echo $value->UrlImage ?>">
    </div>
  <?php } ?>
  <!-- <video class="video w100" height="300" poster="http://manforhimself.com/wp-content/uploads/2016/06/CLAY-WEBSITE-HOLDER.jpg" controls="controls" preload="auto" loop autoplay muted><source type="video/webm" src="http://manforhimself.com/wp-content/uploads/2017/04/CLAY-WEBSITE-.webm"><source type="video/mp4" src="http://manforhimself.com/wp-content/uploads/2017/04/CLAY-WEBSITE-.mp4">
      </video>-->
</div>

    <script>
      $(document).ready(function(){
        $(".slide").owlCarousel({
          autoplay:true,
          video:true,
          smartSpeed : 900,  
          navigation : true, // Show next and prev buttons
          paginationSpeed : 70000,
          loop:true,
          items:1
        });
        $('.slide').bind('slid', function (e) {
          console.log('slid event!');
          $('.owl-item.active').find('video')[0].play();
      });
      });

    </script>
<style type="text/css">
.slide .owl-dots{width: 100%;float: left;position: absolute;bottom: 10px;text-align: center}
.slide .owl-dot{width: 12px;height: 12px;border-radius: 50%;background: #d7d7d7;display: inline-block;margin-right: 10px}
.slide .owl-dot.active{background: #34090c}
.owl-carousel .owl-item > div{position: relative;}
  .txt-slide{position: absolute;top: 0px;right: 5%;bottom: 0px;display: inline-table;font-size: 550%;margin:auto;text-shadow: 6px 6px 0px #2c7bbd;color: white;font-weight: bold;animation-duration: 2.5s;
  animation-fill-mode: both;}
  .owl-carousel .owl-item.active .txt-slide{animation-duration: 1.5s; animation-fill-mode: both;}
  .title-part.line-5 {
  text-shadow: 
  #035bb2 1px 1px, #055db2 2px 2px, #085eb1 3px 3px, #0a60b1 4px 4px, #0d61b0 5px 5px, #0f63b0 6px 6px, #1264af 7px 7px, #1466af 8px 8px, #1767ae 9px 9px, #1a68ae 10px 10px, #1c6aad 11px 11px, #1f6bad 12px 12px, #216dac 13px 13px, #246eac 14px 14px, #2670ab 15px 15px, #2971ab 16px 16px, #2b72aa 17px 17px, #2e74aa 18px 18px
}
</style>