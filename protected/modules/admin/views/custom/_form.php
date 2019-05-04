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
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Data', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'dataBanner ', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control Ta__js-image-value')); ?>
        <input type="button" value="Chọn hình ảnh" class="Ta__js-select-image">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" class="Ta__js-image-preview" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Data'); ?></span> </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm hình ảnh' : 'Lưu hình ảnh'); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
