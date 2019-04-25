
   <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/menu/styles.css">

   <script src="<?php echo Yii::app()->request->baseUrl ?>/js/menu/script.js"></script>

<div id='cssmenu' class="w100">
<ul style="display: none;">
   <!--<li><a class="active home" href='#'></a></li>-->
   <li ><a class="active" href='#'> <?php echo $this->ngonngu[37] ?></a></li>
   <li class='has-sub'><a href="#"><?php echo $this->ngonngu[39] ?></a>
      <ul>
   <?php
   $criteria = new CDbCriteria();
   $criteria->condition = "Active = 1 and idNgonNgu = $this->lang";
   $criteria->with = "gioithieu_lang";
   $data = Gioithieu::model()->findAll($criteria);
   foreach ($data as $key => $value) {
      # code...
      echo ' <li><a href="gioi-thieu/'.$value->gioithieu_lang->Alias.'.html">'.$value->gioithieu_lang->Name.' </a></li>';
   }
   ?>
      </ul>
   </li>
   <?php 
       $criteria = new CDbCriteria();
       $criteria->with = "loaisanpham_lang";
       $criteria->condition ="Active = 1 and Parent = 0 and idNgonNgu = $this->lang" ;
       $criteria->order = "t.Order";
       $model = Loaisanpham::model()->findAll($criteria);
       $count = Loaisanpham::model()->count($criteria);
      
      ?>
      <li class="has-sub">
      <a href="<?php echo $_SERVER['REQUEST_URI'] ?>"><?php echo $this->ngonngu[165] ?></a>
       <?php if($count > 0){ ?> <ul class="dropdown-menu"> <?php } ?>
     <?php 
       foreach ($model as $key => $value) {
       Common::menudacap4($value->id,"Loaisanpham",$this->lang);
  
       }
       if($count > 0){ echo "</ul>"; }
     ?>
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
      <!--
      <li>
        <a href="/noi-bat/">
          Nổi bật
        </a>
      </li>
      
      <li>
        <a href="/khuyen-mai/">Khuyến mãi</a>
      </li>
      -->
      <li>
        <a href="/video.html">
          Video
        </a>
      </li>
      <li>
        <a href="/thu-vien-hinh-anh.html">
          <?php echo $this->ngonngu[49] ?>
        </a>
      </li>
      <li>
        <a href="/lien-he.html"><?php echo $this->ngonngu[46] ?></a>
      </li>

</ul>
</div>

