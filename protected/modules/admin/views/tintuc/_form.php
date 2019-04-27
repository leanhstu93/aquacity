
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
));
 ?>

<?php echo $form->errorSummary($model); ?>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control', 'required' => 'required', 'style'=>'width:80%;float:left')); ?>
        <span style="font-size: 11px; width:20%;float: left;padding-top: 5px;color: #005f90"> (191px X 136px)</span>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'UrlImage'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Loại tin:</label>
    <div class="col-sm-6"> <?php
        $criteria=new CDbCriteria();
        $criteria->with=array("loaitin_lang");
        $loaitin= Loaitin::model()->findAll($criteria);
        $listdata = CHtml::listData($loaitin,'id','loaitin_lang.Name');
        echo $form->dropDownList($model, 'idLoaiTin',$listdata, array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> 
    </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'SetHome', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->dropDownList($model, 'SetHome',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'SetHome'); ?></span> 
    </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> 
    </div>
</div>    
<div class="form-group">
    <label class="col-sm-2 control-label form-label" for="input001"> SEO</label>
</div>
<hr style="margin-top:0px;">
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Description</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'Seo_Description',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
       <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Seo_Description',array("text"=>"aaa")); ?></span> 
    </div>
</div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Keyword</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model,'Seo_Keywords',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Seo_Keyword',array("text"=>"aaa")); ?></span> 
    </div>
</div>
<div class="tabngonngu">
    <a class="active" href=""> Tiếng Việt </a>
    <a  href=""> Tiếng Anh </a>
</div>
<div class="tt_tv">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tiêu đề:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($tt,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TieuDe',array("text"=>"aaa")); ?></span> </div>
    </div>
        <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Mô tả:</label>
        <div class="col-sm-6">
            <?php echo $form->textArea($tt,'Description',array('size'=>60,'rows'=>5,'maxlength'=>100,'class'=>'form-control','id'=>'mota')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Description',array("text"=>"aaa")); ?></span> </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Nội dung:</label>
        <div class="col-sm-6">
            <?php echo $form->textArea($tt,'Content',array('size'=>60,'maxlength'=>100,'class'=>'form-control','id'=>'noidung')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Content',array("text"=>"aaa")); ?></span> </div>
    </div>
</div>
<div class="tt_ta">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tiêu đề:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($tt_,'Name',array('name'=>'TintucLang_[Name]','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TieuDe',array("text"=>"aaa")); ?></span> </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Mô tả:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($tt_,'Description',array('name'=>'TintucLang_[Description]','rows'=>5,'size'=>60,'maxlength'=>100,'class'=>'form-control','id'=>'mota')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Description',array("text"=>"aaa")); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Nội dung:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($tt_,'Content',array('name'=>'TintucLang_[Content]','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Content',array("text"=>"aaa")); ?></span> </div>
</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm tin tức' : 'Lưu tin tức'); ?>
    </div>
</div>
<script>
    CKEDITOR.replace('noidung', {height: 300, });
    CKEDITOR.replace('TintucLang__Content', {height: 300, });
    function setFile(url)
    {
        jQuery('#Tintuc_UrlImage').val(url);
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
