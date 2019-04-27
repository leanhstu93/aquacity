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
        <?php echo $form->labelEx($model, 'Position', array('class' => 'col-sm-2 control-label form-label')); ?>
        <div class="col-sm-6">
              <?php
              echo $form->dropDownList($model, 'Position',array(0=>"TRANG CHỦ"), array( 'class' => 'form-control ')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Position'); ?></span> </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
        <div class="col-sm-6">
              <?php echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> </div>
        </div>
<div class="tabngonngu">
    <a class="active" href=""> Tiếng Việt </a>
    <a  href=""> Tiếng Anh </a>
</div>
<div class="tt_tv">
     <div class="form-group" style="margin-bottom:0px">
        <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <input type="button" value="Chọn hình ảnh" id="selectImages">
            <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
            <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Logo'); ?></span> </div>
    </div>
   <div class="form-group" style="margin-bottom:0px">
            <label class="col-sm-2 control-label form-label" for="input001"> Mô tả:</label>
            <div class="col-sm-6">
                <?php echo $form->textArea($model,'Description',array('class'=>'form-control')); ?>
                <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Link',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
</div>
 <div class="tt_ta">
  <div class="form-group" style="margin-bottom:0px">
        <?php echo $form->labelEx($model_, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
        <div class="col-sm-6">
            <?php echo $form->textField($model_, 'UrlImage', array('size' => 60,'name'=>'Quangcao_[UrlImage]', 'maxlength' => 100, 'class' => 'form-control')); ?>
            <input type="button" value="Chọn hình ảnh" id="selectImages1">
            <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh1" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
            <span class="help-block" id="helpBlock"><?php echo $form->error($model_, 'Logo'); ?></span> </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
            <label class="col-sm-2 control-label form-label" for="input001"> Mô tả:</label>
            <div class="col-sm-6">
                <?php echo $form->textArea($model_,'Description',array('class'=>'form-control','name'=>'Quangcao_[Description]')); ?>
                <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Link',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
</div>
<!-- tab -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm quảng cáo' : 'Lưu quảng cáo'); ?>
    </div>
</div>
<?php
$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
));
?>
<?php
$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages1',
    'function' => 'setFile1',
));
?>
<script>
    CKEDITOR.replace('Quangcao__Content', {height: 300, });
    function setFile(url)
    {
        jQuery('#Quangcao_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    };
    function setFile1(url)
    {
        jQuery('#Quangcao__UrlImage').val(url);
        jQuery('#previewHinh1').attr('src', url);
    };
</script>

    <script type="text/javascript">
/*<![CDATA[*/
jQuery("#selectImages").click(function(e){
    e.preventDefault();
    CKFinder.popup({basePath:"http://<?php echo $_SERVER['HTTP_HOST'] ?>filemanager",selectActionFunction:setFile});
});
/*]]>*/
</script>
 <script type="text/javascript">
/*<![CDATA[*/
jQuery("#selectImages1").click(function(e){
    e.preventDefault();
    CKFinder.popup({basePath:"http://<?php echo $_SERVER['HTTP_HOST'] ?>filemanager",selectActionFunction:setFile1});
});
/*]]>*/
</script>

<?php $this->endWidget(); ?>
