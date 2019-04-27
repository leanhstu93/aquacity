<?php $this->renderPartial("//layouts/header");?> 
<section class="container w1000">
    <div class="w1000">
       <?php $this->renderPartial("//layouts/menuleft");?> 
      <div class="right page-news-detail">
      <div class="w100"> 
        <?php 
        $arrBread[0]["Name"] = $model->tintuc_lang->Name;
        $criteria = new CDbCriteria();
        $criteria->with = "loaitin_lang";
        $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
        $criteria->order = "t.id desc";
        $criteria->addInCondition("idLoaiTin",$this->arridloai);
        $arrloai = Loaitin::model()->findAll($criteria);
        $j = 0;
        for ($i= (count($arrloai)-1); $i >= 0; $i--) { 
          # code...
          $j++;
          $arrBread[$j]["Name"] = $arrloai[$i]->loaitin_lang->Name;
           $arrBread[$j]["Href"] = "loai-tin/".$arrloai[$i]->loaitin_lang->Alias.".html";
        }
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
        <div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
      </div>
      <div class="tieude-news w100"><?php echo $model->tintuc_lang->Name ?></div>
      <div class="time-stamp w100">
            
          <small class="date"><i class="fa fa-clock-o"></i> <?php echo date("d/m/Y",$model->Date) ?></small> | 
          <small> <i class="fa fa-user"></i> <?php echo $model->quantri->HoTen ?></small> </div>
          <?php $this->renderPartial("//layouts/sharepost");?> 
      <div class="des-newsdetail w100"><?php echo $model->tintuc_lang->Description ?></div>
      <div class="ct-newsdetail w100">
      <?php echo $model->tintuc_lang->Content ?>
      </div>
      <div class="clear"></div>
      <style type="text/css">
         .share-news li img{width: 100%}
        .share-news li{
          float: right;
          width: 30px;
        }
      </style>
      <div class="w100 share-news">
        <ul>

          <li> <a class="fbshare" href="https://www.facebook.com/dialog/share?app_id=<?php  echo $this->ch->Appid; ?> &display=popup&caption=<?php echo $_SERVER['HTTP_HOST'] ?>&href=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank">
            <img src="images/icfb.jpg">
          </a> </li>
          <li> <a class="ggshare" href="https://plus.google.com/share?url=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank">
            <img src="images/icgg.jpg">
          </a> </li>
          <li> <a class="twshare" href="https://twitter.com/intent/tweet?original_referer=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>&ref_src=twsrc%5Etfw&text=aa&tw_p=tweetbutton&url=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank">
            <img src="images/ictw.jpg">
          </a> </li>
          <li style="width: 75px;">Chia sẻ: </li>
        </ul>
      </div>
     <?php $this->renderPartial("//layouts/comment");?>
      <div class="rela-news w100">
        <div class="head"><?php echo $this->ngonngu[40] ?></div>
        <div class="line w100">
            <img class="w100" src="/images/line.jpg">
        </div>
        <ul class="w100">
          <?php
          $tlq = Common::postRelated($model->id,$model->idLoaiTin,$this->lang);
          if(isset($tlq)){
              foreach ($tlq as $key => $value) {
          ?>
          <li>
            <a href="/tin-tuc/<?php echo $value->tintuc_lang->Alias ?>.html" class="fa fa-link">
                <img width="100px" class="icon-arrow" src="<?php echo $value->UrlImage ?>">
                <label><?php echo $value->tintuc_lang->Name; ?></label>
                </a>
          </li>
          <?php } 
        }
          ?>
        </ul>
      </div>
      </div>
    </div>
</section>