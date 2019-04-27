<script src="<?php echo Yii::app()->request->baseUrl ?>/ckeditor/ckeditor.js"></script>

<?php 
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'class'=>'form-horizontal',
    ),
)); ?>

<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Tiêu đề:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Title',array("text"=>"aaa")); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Hình ảnh công ty:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'ImageCompany', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control','required'=>'required')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'ImageCompany'); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Mô tả:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Description',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Từ khóa:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'Keyword',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Keyword',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Email:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Email',array("text"=>"aaa")); ?></span> </div>
</div>

<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Appid:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Appid',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Appid',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Google map:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'googlemap',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'googlemap',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Head</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'head',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'head',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Body</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'body',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'body',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Footer</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'footer',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'footer',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm loại sản phẩm' : 'Lưu thông tin cấu hình'); ?>
    </div>
</div>

<?php
	$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
));
 ?>
 <script type="text/javascript">
     function setFile(url)
    {
        jQuery('#Cauhinh_ImageCompany').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
 </script>
<?php $this->endWidget(); ?>
