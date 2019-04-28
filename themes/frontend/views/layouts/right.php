<div class="right menuright">
	<div class="wrp-httt w100">
		<label class="w100">
			Hỗ trợ trực tuyến
		</label>
		<ul>
			<li>
				<div class="wrp-img">
					<img src="/images/Customer-Service.png" class="w100">
				</div>
				<div class="wrp-right">
					<p>
						<span>0902 936 849</span>
						<span>
							<img src="/images/ic_phone.png">
							<img src="/images/ic_zalo.png">
						</span>
					</p>
					<p>
						intkk.com@gmail.com
					</p>
					<p>
						<a href="skype:intkk.com?chat">
						<img src="/images/ic_skype.png"><span> (intkk.com)</span>
						</a>
					</p>
				</div>
			</li>
			<li>
				<div class="wrp-img">
					<img src="/images/Customer-Service.png" class="w100">
				</div>
				<div class="wrp-right">
					<p>
						<span>0932420553</span>
						<span>
							<img src="/images/ic_phone.png">
							<img src="/images/ic_zalo.png">
						</span>
					</p>
					<p>
						intkk.com@gmail.com
					</p>
					<p>
						<img src="/images/ic_skype.png"><span> (intkk.com)</span>
					</p>
				</div>
			</li>
		</ul>
	</div>
	<?php
        $criteria = new CDbCriteria(); 
          $criteria->with = "tintuc_lang";
          $criteria->condition = "idNgonNgu = 1 and Active = 1 and SetHome = 1";
          $criteria->limit = 5;
          $criteria->order = "t.id desc";
          $data = Tintuc::model()->findAll($criteria);
    ?>
    <div class="wrp-dvnb w100">
    	<label class="w100">Tin tức nổi bật</label>
    	<ul>
    		<?php  foreach ($data as $key => $value) {  ?>
    		<li>
    			<a href="/tin-tuc/<?php echo  $value->tintuc_lang->Alias ?>.html">
    				<div class="wrp-img">
    					<img src="<?php echo  $value->UrlImage ?>" class="w100">
    				</div>
    				<label>
    					<?php echo  $value->tintuc_lang->Name ?>
    				</label>
    			</a>
    		</li>
    		<?php } ?>
    	</ul>
    </div>
    <div class="wrp-baogia2 w100">
      <label class="w100">Báo giá</label>
      <ul>
        <?php
        $criteria = new CDbCriteria(); 
          $criteria->with = "sanpham_lang";
          $criteria->condition = "idNgonNgu = 1 and Active = 1 and SetHome = 1";
        
          $criteria->order = "t.id desc";
          $data = Sanpham::model()->findAll($criteria);
          foreach ($data as $key => $value) {
        ?>
        <li>
          <a href="/sp/<?php echo  $value->sanpham_lang->Alias ?>.html">
            <label class="">
              <?php echo  $value->sanpham_lang->Name ?>
            </label>
          </a>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="wrp-baogia w100">
    	<label class="w100">
    		Yêu cầu báo giá
    	</label>
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
                        'class'=>'form-horizontal w100',

                    ),
                )); ?>
                <?php echo $form->errorSummary($model); ?>
                <ul>
                  <li>
                   
                    <?php echo $form->textField($model,'Name',array("placeholder"=>"Họ tên")); ?>
                    <?php echo $form->error($model,'Name'); ?>
                     
                  </li>
                 <li>
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
                  <li>
                  	<p>
                  	Chúng tôi sẽ liên hệ với Quý khách trong thời gian sớm nhất
                  </p>
                  </li>
                </ul>
                <?php $this->endWidget(); ?>
    </div>
    <div class="qc center">
    	<label class="w100">Ưu đãi</label>
    	<div class="wrp-img">
    		<img src="/images/left-banner.jpg">
    	</div>
    </div>
</div>