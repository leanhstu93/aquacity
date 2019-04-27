
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
        <?php echo $form->textField($model, 'HinhAnh', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'HinhAnh'); ?></span> </div>
</div>





<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Nội dung:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'NoiDung',array('size'=>60,'maxlength'=>100,'class'=>'form-control','id'=>'noidung')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'NoiDung',array("text"=>"aaa")); ?></span> </div>
</div>




<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Seo description:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'seo_description',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'seo_description',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Keyword:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'keyword',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'keyword',array("text"=>"aaa")); ?></span> </div>
</div>





<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm tin tức' : 'Lưu tin tức'); ?>
    </div>
</div>
<script>
    CKEDITOR.replace('noidung', {height: 300, });
    function setFile(url)
    {
        jQuery('#TintucLang_HinhAnh').val(url);
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
