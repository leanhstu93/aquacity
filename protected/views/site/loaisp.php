
<section class="container w1000 wrap-loaitin">
<div class="wrp-mar w100">
    <div class="left page-left">
      <div class="w100">
      <?php 
       $arrBread[0]["Name"] = $lsp->loaisanpham_lang->Name;
        $criteria = new CDbCriteria();
        $criteria->condition = "idNgonNgu = $this->lang and Active = 1";
         $criteria->addInCondition("idLoai",$this->arridloai);
        $criteria->order = "t.id desc";
        $criteria->with = "loaisanpham_lang";
         $arrloai = Loaisanpham::model()->findAll($criteria);
        $j = 0;
         for ($i= (count($arrloai)-1); $i >= 0; $i--) { 
            $j++;
         $arrBread[$j]["Href"] = "/loai-san-pham/".$arrloai[$i]->loaisanpham_lang->Alias.".html";
          $arrBread[$j]["Name"] = $arrloai[$i]->loaisanpham_lang->Name;
        
        }
        $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));?> 
        <!-- end breadbrum -->
        <div class="line w100"> <img class="w100" src="/images/line.jpg"> </div>
      </div>
         <div class="head w100"><?php echo $lsp->loaisanpham_lang->Name ?></div>
         <div class="clear"></div>
          <ul class="list-pro">
        <?php
        $i = 0;
        foreach ($data as $key => $value) {
          $i++;
        ?>
         <li <?php echo ($i%3 == 0)? "sub":"" ?> >
          <a href="/sp/<?php echo $value->sanpham_lang->Alias ?>.html">
            <div class="wrap-img-cate">
                <img src="<?php echo $value->UrlImage ?>">
            </div>
            <div class="wrap-des-cate">
              <h3 ><?php echo $value->sanpham_lang->Name ?></h3>
              <div class="time-stamp">
                <small><i>In</i> <?php echo $lsp->loaisanpham_lang->Name; ?></small> &nbsp;
                <small class="date"><i class="fa fa-clock-o"></i> <?php echo date("d/m/Y",$value->Date) ?></small>
               
              </div>
              <p class="w100">
              <?php
              if($value->sanpham_lang->MoTa != "" && strlen($value->sanpham_lang->MoTa) > 300)
                $mota = $value->sanpham_lang->MoTa;
              else
                $mota = $value->sanpham_lang->Content;
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
      <?php $this->renderPartial("//layouts/right"); ?>
      </div>

    </div>
    
</section>
