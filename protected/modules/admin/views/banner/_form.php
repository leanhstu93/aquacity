
<script src="<?php echo Yii::app()->request->baseUrl ?>/ckeditor/ckeditor.js"></script>

<?php $form=$this->beginWidget('CActiveForm', array(
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

<?php echo $form->errorSummary($model); ?>


<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Tiêu đề:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'TieuDe',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TieuDe',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'HinhAnh', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'UrlImage'); ?></span> </div>
</div>




<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Link:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Link',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Link',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Sethome:</label>
    <div class="col-sm-6">
     <?php echo $form->checkBox($model,'SetHome',array('size'=>60,'maxlength'=>100,'class'=>'form-control',"style"=>"width:auto")); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'SetHome',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm banner' : 'Lưu banner'); ?>
    </div>
</div>
<script>
    function setFile(url)
    {
        jQuery('#Banner_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
</script>
<?php
$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
))
?>
<?php $this->endWidget(); ?>
