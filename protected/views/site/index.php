 <?php $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang "); ?>
 <section class="wrap-slide w100">
    <?php $this->renderPartial("//layouts/slide",array('slide'=>$slide));?> 
    <div class="pos">
      <div class="rel w100">
      <section class="headerPart-top">
            <ul>
            <li>
                <a href="/cart.html"><?php echo $this->ngonngu[35] ?>(<span class="items_total"><?php echo Yii::app()->shoppingCart->getCount(); ?></span>)</a>
              </li>
              <li>
                <select class="sl-lang">
                  <option value="1" > Tiếng việt</option>
                  <option value="2" <?php echo $this->lang == 2 ? "selected" : "" ?>>  English</option>
                </select>
              </li>
              <li>
                <img src="/images/ictime.png" /><?php echo $this->ngonngu[38] ?> 11h - 22h
              </li>
              <li>
                <img src="/images/icphone.png" /><?php echo $ttc->Tel ?>
              </li>
              <li>
                <img src="/images/icmap.png" /><?php echo $ttc->Address ?>
              </li>
            </ul>
      </section>
       <section class="menu w100">
          <div class="wrap-menu w100">
             <div class="w1000">
             <div class="wrp-logo">
               <img class="w100" src="<?php echo $ttc->Logo ?>">
             </div>
            <?php $this->renderPartial("//layouts/menu",array('ttc'=>$ttc));?> 
          </div>
        </div>
      </section>
      </div>
  </div>
  <div class="bg-rangcua"></div>
  </section>
<section class="quangcao w100">
	<?php
		$criteria = new CDbCriteria();
    if($this->lang == 1)
    	$criteria->condition = "Type = 0 and Active = 1";
   	else
   		$criteria->condition = "Type = 1 and Active = 1";
    $model = Quangcao::model()->find($criteria);
	?>
	<img src="<?php echo $model->UrlImage ?>">
</section>
<section class="spnb">
  <div class="w1000">
      <div class="tt">
      <span><?php echo $this->ngonngu[41] ?></span><br>
      <img src="/images/mt-0889-img.png">
    </div>
    <div class="ct w100">
      <ul class="list-pro">
          <?php
           foreach ($spnb as $key => $value) {
             # code...
           ?>
        <li>
          <a href="/mon/<?php echo $value->sanpham_lang->Alias ?>.html">
          <div class="w100 wrap-img-sp">
            <img src="<?php echo $value->UrlImage ?>" class="w100">
          </div>
          <div class="pad3 w100">
            <label >
              <?php echo $value->sanpham_lang->Name ?>
            </label>
            <div class="price">
              <?php echo number_format($value->Gia) ?> VND
            </div>
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
</section>
<section class="csvc w100">
  <div class="w1000">
    <ul>
      <li>
        <img src="/images/mt-0975-home-icon1.png">
        <label>11h - 22h</label>
        <div class="gach"></div>
        <span class="w100"><?php echo $this->ngonngu[14] ?></span>
      </li>
      <li>
        <img src="/images/icgiaohang.png">
        <label><?php echo $this->ngonngu[16] ?> </label>
        <div class="gach"></div>
        <span><?php echo $this->ngonngu[36] ?><br>
        <strong><?php echo $this->ngonngu[104] ?>: </strong> <?php echo $this->ttc->Tel ?>
        </span>
      </li>
      <li>
        <img src="/images/mt-0975-home-icon3.png">
        <label><?php echo $this->ngonngu[18] ?> </label>
        <div class="gach"></div>
        <span><?php echo $this->ngonngu[19] ?></span>
      </li>
      <li>
        <img src="/images/mt-0975-home-icon4.png">
        <label><?php echo $this->ngonngu[54] ?></label>
        <div class="gach"></div>
        <span><?php echo $this->ngonngu[58] ?></span>
      </li>
    </ul>
  </div>
</section>
<section class="hinhanh">
   <div class="tt">
      <span><?php echo $this->ngonngu[49] ?></span><br>
      <img src="/images/mt-0889-img.png">
    </div>
  <ul>
    <?php 
      foreach ($hinhanh as $key => $value) {
        # code..
    ?>
    <li>
      <img src="<?php echo $value->UrlImage ?>" class="w100">
    </li>
    <?php } ?>
  </ul>
</section>
<script>
    $(function(){
      $(window).scroll(function(){
        if($(this).scrollTop()>250){
          $(".wrap-menu").addClass("fix-scroll");
        }
        else{
          $(".wrap-menu").removeClass("fix-scroll");
        }
      });
    }); 
  </script>
  <style type="text/css">
    .wrap-menu.fix-scroll{position: fixed;width: 100%;float:  left;background:black;    padding-bottom: 11px;top: 0px;z-index: 99}
  </style>