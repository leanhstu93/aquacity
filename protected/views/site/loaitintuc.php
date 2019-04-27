<?php $this->renderPartial("//layouts/header");?> 
<section class="container w1000 wrap-loaitin">
<div class="w1000">
 <?php $this->renderPartial("//layouts/menuleft");?> 
    <div class="right page-cate">
      <div class="w100">
      <?php 
       $arrBread[0]["Name"] = $lt->loaitin_lang->Name;
        $criteria = new CDbCriteria();
        $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
         $criteria->addInCondition("idLoaiTin",$this->arridloai);
        $criteria->order = "t.id desc";
        $criteria->with = "loaitin_lang";
         $arrloai = Loaitin::model()->findAll($criteria);
        $j = 0;
         for ($i= (count($arrloai)-1); $i >= 0; $i--) { 
            $j++;
         $arrBread[$j]["Href"] = "loai-tin/".$arrloai[$i]->loaitin_lang->Alias.".html";
          $arrBread[$j]["Name"] = $arrloai[$i]->loaitin_lang->Name;
        
        }
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
        <!-- end breadbrum -->
        <div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
      </div>
         <div class="head w100"><?php echo $lt->loaitin_lang->Name ?></div>
         <div class="clear"></div>
          <ul class="list-pro">
        <?php
        $i = 0;
        foreach ($data as $key => $value) {
          $i++;
        ?>
         <li <?php echo ($i%3 == 0)? "sub":"" ?> >
          <a href="/tin-tuc/<?php echo $value->tintuc_lang->Alias ?>.html">
            <div class="wrap-img-cate">
                <img src="<?php echo $value->UrlImage ?>">
            </div>
            <div class="wrap-des-cate">
              <h3 ><?php echo $value->tintuc_lang->Name ?></h3>
              <div class="time-stamp">
                <small><i>In</i> <?php echo $lt->loaitin_lang->Name; ?></small> &nbsp;
                <small class="date"><i class="fa fa-clock-o"></i> <?php echo date("d/m/Y",$value->Date) ?></small>
               
              </div>
              <p class="w100">
              <?php
              if($value->tintuc_lang->Description != "" && strlen($value->tintuc_lang->Description) > 300)
                $mota = $value->tintuc_lang->Description;
              else
                $mota = $value->tintuc_lang->Content;
               echo Common::getDescription($mota,300); ?> 
              </p>
            </div>
        </a>
            </li>
         <?php } ?>
         </ul> 
            <div class="clear"></div>
          <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
      </div>
      </div>
    </div>
    
</section>
