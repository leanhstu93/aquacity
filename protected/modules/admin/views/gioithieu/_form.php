
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
            <?php echo $form->textField($gt,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Name',array("text"=>"aaa")); ?></span> 
        </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'UrlImage'); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'SetFooter', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
          <?php
         
          echo $form->dropDownList($model, 'SetFooter',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'SetFooter'); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
          <?php
         
          echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> </div>
</div>

<div class="tt_tv">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Mô tả:</label>
        <div class="col-sm-6">
            <?php echo $form->textArea($gt,'Description',array('size'=>1000,'maxlength'=>1000,'class'=>'form-control','id'=>'mota')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($gt,'Description',array("text"=>"aaa")); ?></span>
    </div>
</div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Nội dung:</label>
        <div class="col-sm-6">
            <?php echo $form->textArea($gt,'Content',array('size'=>60,'maxlength'=>100,'class'=>'form-control','id'=>'noidung')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($gt,'Content',array("text"=>"aaa")); ?></span> </div>
    </div>
</div>



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm giới thiệu' : 'Cập nhật'); ?>
    </div>
</div>
<script type="text/javascript">
    function setFile(url)
    {
        jQuery('#Gioithieu_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
</script>
<?php
$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
))
?>
<script type="text/javascript">
      CKEDITOR.replace('noidung', {height: 300, });
</script>

<?php $this->endWidget(); ?>
