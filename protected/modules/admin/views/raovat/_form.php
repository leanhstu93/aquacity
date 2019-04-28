
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
            <?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TieuDe',array("text"=>"aaa")); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'SetHome', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php
        echo $form->dropDownList($model, 'SetHome',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'SetHome'); ?></span> </div>
</div>
 <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Giá:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model,'Price',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Price',array("text"=>"aaa")); ?></span> </div>
</div>
 <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Ngày bắt đầu:</label>
        <div class="col-sm-6">
            <?php echo $form->dateTimeField($model,'Start',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Start',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control', 'style'=>'width:80%;float:left')); ?>
        <span style="font-size: 11px; width:20%;float: left;padding-top: 5px;color: #005f90"> (267px X 187px)</span>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'UrlImage'); ?></span> </div>
</div> 
        <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Mô tả:</label>
        <div class="col-sm-6">
            <?php echo $form->textArea($model,'Description',array('class'=>'form-control','id'=>'mota')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Description',array("text"=>"aaa")); ?></span> </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Nội dung:</label>
        <div class="col-sm-6">
            <?php echo $form->textArea($model,'Content',array('class'=>'form-control','id'=>'noidung')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Content',array("text"=>"aaa")); ?></span> </div>
    </div>

<div class="form-group">
    <label class="col-sm-2 control-label form-label" for="input001"> SEO</label>
</div>
<hr style="margin-top:0px;">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Description</label>
        <div class="col-sm-6">
          <?php echo $form->textArea($model,'Seo_Description',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TieuDe',array("text"=>"aaa")); ?></span> </div>
    </div>
     <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Keyword</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model,'Seo_Keywords',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TieuDe',array("text"=>"aaa")); ?></span> </div>
    </div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm rao vặt' : 'Lưu rao vặt'); ?>
    </div>
</div>
<script>
    CKEDITOR.replace('mota', {height: 300, });
    CKEDITOR.replace('noidung', {height: 300, });
    function setFile(url)
    {
        jQuery('#Raovat_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
</script>
<?php
$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
))
?><?php $this->endWidget(); ?>
