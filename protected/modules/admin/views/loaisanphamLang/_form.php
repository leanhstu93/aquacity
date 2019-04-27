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
    <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Logo'); ?></span> 
    </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Menu cha:</label>
    <div class="col-sm-6">
        <select name='Loaisanpham[Parent]' style="width:100%">
        <option value="0"> Gốc </option>
            <?php $data = Loaisanpham::model()->findAll();
            echo Common::dequyOptions($data,0,"--",$parent,$id);  ?>
        </select>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> 
    </div>
</div>
 <div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Thứ tự:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Order',array('required'=>'required','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Order',array("text"=>"aaa")); ?></span> </div>
</div>
<div class="tabngonngu">
    <a class="active" href=""> Tiếng Việt </a>
    <a  href=""> Tiếng Anh </a>
</div>
<div class="tt_tv">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tên loại:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($lsp,'Name',array('required'=>'required','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Name',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
</div>
 <div class="tt_ta">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tên loại:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($lsp_,'Name',array('required'=>'required','name'=>'LoaisanphamLang_[Name]','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Name',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
</div>
<!-- tab -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm loại sản phẩm' : 'Lưu loại sản phẩm'); ?>
    </div>
</div>
<script type="text/javascript">
    function setFile(url)
    {
        jQuery('#Loaisanpham_UrlImage').val(url);
    }
</script>
 <?php
    $this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
));
 ?>
<?php $this->endWidget(); ?>
