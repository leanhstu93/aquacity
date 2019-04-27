<?php $this->renderPartial("//layouts/header");?> 
<section class="container w100 wrap-lsp">
    <div class="w1000">
       <?php $this->renderPartial("//layouts/menuleft");?> 
      <div class="right page-cate">
      <!-- breadbrum -->
      <div class="w100"> 
        <?php 
        $arrBread[0]["Name"] = $lsp->loaisanpham_lang->Name;
        $criteria = new CDbCriteria();
        $criteria->with = "loaisanpham_lang";
        $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
        $criteria->order = "t.id desc";
        $criteria->addInCondition("idLoai",$this->arridloai);
        $arrloai = Loaisanpham::model()->findAll($criteria);
        $j = 0;
        for ($i= (count($arrloai)-1); $i >= 0; $i--) { 
          # code...
          $j++;
          $arrBread[$j]["Name"] = $arrloai[$i]->loaisanpham_lang->Name;
           $arrBread[$j]["Href"] = "loai-san-pham/".$arrloai[$i]->loaisanpham_lang->Alias.".html";
        }
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
        <div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
      </div>
        <!-- end breadbrum -->
         <div class="head w100"><?php echo $lsp->loaisanpham_lang->Name ?></div>
         <div class="clear"></div>
        <ul class="list-pro">
        <?php
        $i=0;
        foreach ($sp as $key => $value) {
          # code...
          $i++;
         ?>
          <li class="<?php echo ($i%3 == 0)? "last":"" ?>" >
            <a href="/mon/<?php echo $value->sanpham_lang->Alias ?>.html">
              <div class="wrap-img-cate wrap-img-sp">
                <img src="<?php echo $value->UrlImage ?>">
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
        <div class="clear"></div>
          <?php $this->renderPartial("//layouts/pagination",array("pages"=>$pages));?> 
            </div>  
      </div>
    </div>
</section>