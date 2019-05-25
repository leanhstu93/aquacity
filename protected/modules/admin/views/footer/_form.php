<script src="<?php echo Yii::app()->request->baseUrl ?>/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/filemanager/ckfinder.js"></script>
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
    <label class="col-sm-2 control-label form-label" for="input001">Cột 1 </label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'col1',array('rows'=>3,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'col1',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Cột 2 </label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'col2',array('rows'=>3,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'col2',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Cột 3 </label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'col3',array('rows'=>3,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'col3',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm hình ảnh' : 'Lưu hình ảnh'); ?>
    </div>
</div>
<script>
    CKEDITOR.replace('Footer_col1', {height: 300, });
    CKEDITOR.replace('Footer_col2', {height: 300, });
    CKEDITOR.replace('Footer_col3', {height: 300, });
</script>
<?php $this->endWidget(); ?>
