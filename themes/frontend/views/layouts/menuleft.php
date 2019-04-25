
 <div class="left menuleft">
      <!--
        <div class="searchbg w100">
          <input type="text" class="search-home key" name="key"  placeholder="Tìm kiếm.....">
          <div class="timkiembg"><span class="btn_timkiem"><img alt="icon tìm kiếm" src="images/search.png"></span></div>
        </div>
      -->
        <div class="head w100">Menu</div>
          <?php
          $criteria = new CDbCriteria();
          $criteria->with = "loaisanpham_lang";
          $criteria->condition = "Active = 1 and Parent = 0 and idNgonNgu = ".$this->lang;
          $criteria->order= "t.Order";
          $data = Loaisanpham::model()->findAll($criteria);
          foreach ($data as $key => $value) {
            # code...
          ?>
          <ul>
            <li><a href="loai-san-pham/<?php echo $value->loaisanpham_lang->Alias ?>.html"><?php echo $value->loaisanpham_lang->Name ?></a></li>
            <?php
            if($value->id == 10)
            {
              $criteria = new CDbCriteria();
              $criteria->with = "sanpham_lang";
              $criteria->condition = "Active = 1 and t.idLoai = ".$value->id;
              $criteria->order= "t.id";
              $data1 = Sanpham::model()->findAll($criteria);
              foreach ($data1 as $key1 => $value1) {?>
                <li><a href="sp/<?php echo $value1->sanpham_lang->Alias ?>.html"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $value1->sanpham_lang->Name ?></a></li>
         <?php     }
            } 
            else{
              $criteria = new CDbCriteria();
              $criteria->with = "loaisanpham_lang";
              $criteria->condition = "Active = 1 and Parent = ".$value->id;
              $criteria->order= "t.Order";
              $data1 = Loaisanpham::model()->findAll($criteria);
            
              foreach ($data1 as $key1 => $value1) { ?>
                 <li><a href="loai-san-pham/<?php echo $value1->loaisanpham_lang->Alias ?>.html"><i class="fa fa-caret-right" ></i> <?php echo $value1->loaisanpham_lang->Name ?></a></li>
         <?php }
         }
            ?>
          <?php } ?>    
          <div class="clear"></div>
           <?php $this->renderPartial("//layouts/minislide");?>       
  <div class="grp-support w100">
    <div class="head w100">
      <?php echo $this->ngonngu[145] ?>
    </div>
    <?php $ttc = Thongtinchung::model()->find(" idNgonNgu = $this->lang "); ?>
    <ul>
      <li>
        <strong>Hotline:</strong><?php echo $ttc->Tel ?>
      </li>
      <li>
        <strong><?php echo $this->ngonngu[8] ?>:</strong> <?php echo $ttc->Address ?>
      </li>
      <li>
        <strong>Email:</strong><?php echo $ttc->Email ?>
      </li>
    </ul>
  </div>
  <div class="grp-menu w100">
    <div class="head w100">
      Video
    </div>
    <div class="img-youtube w100">
      <iframe width="231" height="130" src="<?php echo $this->ttc->Youtube ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>