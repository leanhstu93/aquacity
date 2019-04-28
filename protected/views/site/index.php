
<div class="wrp-bg-white w100">
 <section class="wrp-slide w100">    
       <?php $this->renderPartial("//layouts/slide"); ?>
    </section>
     <section class="taisao w100" style="position: relative">
      
      <div class="w1000">
        <div class="wrp-col4">
          <div class="col4">
            <div class="tr-icon"> <i class="fa fa-thumbs-up">  </i> </div>
            <label>SẢN PHẨM CHẤT LƯỢNG CAO</label>
            <p class="w100">
              Thiết bị hiện đại, thợ lành nghề, cho ra sản phẩm in siêu nét, chuẩn màu
            </p>
          </div>
          <div class="col4">
            <div class="tr-icon"> <i class="fa fa-rocket" aria-hidden="true"></i>
 </div>
            <label>CAM KẾT GIAO HÀNG ĐÚNG HẸN</label>
            <p class="w100">
              Thiết bị hiện đại, thợ lành nghề, cho ra sản phẩm in siêu nét, chuẩn màu
            </p>
          </div>
          <div class="col4">
            <div class="tr-icon"> <i class="fa fa-paper-plane"></i> </div>
            <label>CAM KẾT GIÁ TỐT NHẤT </label>
            <p class="w100">
              Thiết bị hiện đại, thợ lành nghề, cho ra sản phẩm in siêu nét, chuẩn màu
            </p>
          </div>
          <div class="col4">
            <div class="tr-icon"> <i class="fa fa-money"></i> </div>
            <label>TIẾN ĐỘ SẢN XUẤT NHANH </label>
            <p class="w100">
              Thiết bị hiện đại, thợ lành nghề, cho ra sản phẩm in siêu nét, chuẩn màu
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
    <section class="dichvunb">
      <div class="w1000">
        <div class="tt w100 center">
          Dịch vụ nổi bật
        </div>
        <span class="icon-title">
              <span></span>
              <i class="fa fa-star"></i>
        </span>
        <div class="wrp-col4">
        <?php
        $criteria = new CDbCriteria();
        $criteria->with = "sanpham_lang";
        $criteria->condition = "Active = 1 and SetHome = 1";
        $criteria->order = "t.id desc";
        $criteria->limit = 4;
        $data = Sanpham::model()->findAll($criteria);
        if($data != false){
        foreach ($data as $key => $value) {
          # code...
        
      ?>
            <div class="col4">
              <a href="/sp/<?php echo  $value->sanpham_lang->Alias ?>.html">
                <div class="wrp-img W100">
                  <img src="<?php echo $value->UrlImage ?>" class="w100">
                </div>
                <label class="w100">
                  <?php echo $value->sanpham_lang->Name ?>
                </label>
                <p class="w100">
                  <?php 
                      if($value->sanpham_lang->MoTa != "" )
                          $mota = $value->sanpham_lang->MoTa;
                        else
                          $mota = $value->sanpham_lang->Content;
                       echo Common::getDescription($mota,250);  
                  ?> 
                </p>
              </a>
            </div>
      <?php   }
    }
        ?>
        </div>
      </div>
    </section>
    <section class="newshome w100">
      <div class="w1000">
       <div class="tt w100 center">
          Bài viết mới nhất
        </div>
        <span class="icon-title">
              <span></span>
              <i class="fa fa-star"></i>
        </span>
        <div class="ct w100">
           <?php $this->renderPartial("//layouts/slidenews"); ?>
        </div>
      </div>
    </section>
    <section class="khachhang w100" style="position: relative;">
      <canvas></canvas>
      <div class="tt w100 center">
         	Cảm nhận khách hàng
        </div>
        <span class="icon-title">
              <span></span>
              <i class="fa fa-star"></i>
        </span>
        <div class="w1000">
          <div class="ct w100">
            
            <?php $this->renderPartial("//layouts/camnhankhachhang"); ?>
          </div>
        </div>
    </section>
    <section class="yeucaubaogia w100">
    	<div class="w1000">
    		<div class="tt w100 center">
         		Báo giá
        	</div>
	        <span class="icon-title">
              <span></span>
              <i class="fa fa-star"></i>
	        </span>	
          <div class="ct w100">
            <div class="wrp-frm w100">
              <?php 
              $model=new Baogia;
                $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'checkout',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'enableAjaxValidation'=>false,
                    'action' => '/site/Xulybaogia',
                    'htmlOptions'=>array(
                        'class'=>'form-horizontal',

                    ),
                )); ?>
                <?php echo $form->errorSummary($model); ?>
                <ul>
                  <li>
                   
                    <?php echo $form->textField($model,'Name',array("placeholder"=>"Họ tên")); ?>
                    <?php echo $form->error($model,'Name'); ?>
                     <?php echo $form->textField($model,'Phone',array("placeholder"=>"Điện thoại")); ?>
                    <?php echo $form->error($model,'Phone'); ?>
                  </li>
                 
                   <li>
                   
                    <?php echo $form->textField($model,'Email',array("placeholder"=>"Email")); ?>
                    <?php echo $form->error($model,'Email'); ?>
                  </li>
                   <li>
                    
                    <?php echo $form->textArea($model,'Description',array("placeholder"=>"Mô tả chi tiết sản phẩm cần báo giá (VD: Kích thước, số lượng, loại giấy...)","rows"=>8)); ?>
                    <?php echo $form->error($model,'Description'); ?>
                  </li>
                  <li>
                    <?php echo CHtml::submitButton("Gửi",array("name"=>"Gui")); ?>
                  </li>
                </ul>
                <?php $this->endWidget(); ?>
            </div>
          </div>
    	</div>
    </section>
    <script type="text/javascript" src="http://netbaseteam.com/wordpress/theme/landingpage/printshop/js/Stats.js"></script>
<script type="text/javascript" src="http://netbaseteam.com/wordpress/theme/landingpage/printshop/js/constellation.js"></script>