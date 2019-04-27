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
    <label class="col-sm-2 control-label form-label" for="input001">Loại cha:</label>
    <div class="col-sm-6">
        <select name='Loaisanpham[Parent]'>
        <option value="0"> Gốc </option>
            <?php 
 $data = Loaisanpham::model()->findAll();
echo Common::dequyOptions($data,0,"--",$parent,$id);  ?>
        </select>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Tên loại:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'TenLoai',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TenLoai',array("text"=>"aaa")); ?></span> </div>
</div>


<!-- tab -->



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm loại sản phẩm' : 'Lưu loại sản phẩm'); ?>
    </div>
</div>


<?php $this->endWidget(); ?>
