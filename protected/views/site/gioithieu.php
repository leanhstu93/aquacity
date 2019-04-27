<?php $this->renderPartial("//layouts/header");?> 
<section class="container w1000">
    <div class="w1000">
      <div class="w100 pages-abouts " style="width: 100%">
      <div class="w100"> 
        <?php 
        $arrBread[0]["Name"] = $model->gioithieu_lang->Name;
       $arrBread[1]["Name"] =  $this->ngonngu[39] ;
       $arrBread[1]["Href"] = "#";
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
      </div>
      <div class="line w100">
        <img src="/images/line.jpg" class="w100">
      </div>
      <div class="tieude-news w100"><?php echo $model->gioithieu_lang->Name ?></div>
     
      <div class="des-newsdetail w100"><?php echo $model->gioithieu_lang->Description ?></div>
      <div class="ct-newsdetail w100">
      <?php echo $model->gioithieu_lang->Content ?>
      </div>
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