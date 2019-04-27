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
        <select name='Loaitin[Parent]'>
            <option value="0"> Gốc </option>
            <?php 
            $criteria=new CDbCriteria();
            $criteria->with=array("loaitin_lang");
            $data = Loaitin::model()->findAll($criteria);
            echo Common::dequyOptions1($data,0,"--",$parent,$id);  ?>
        </select>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> 
    </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> 
    </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Thứ tự:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Order',array('required'=>'required','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Order',array("text"=>"aaa")); ?></span>
    </div>
</div>
<div class="tabngonngu">
    <a class="active" href=""> Tiếng Việt </a>
    <a  href=""> Tiếng Anh </a>
</div>
 <div class="tt_tv">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tên loại:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($lt,'Name',array('required'=>'required','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($lt,'Name',array("text"=>"aaa")); ?></span> </div>
    </div>
</div>
 <div class="tt_ta">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tên loại:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($lt_,'Name',array('required'=>'required','name'=>'LoaitinLang_[Name]','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($lt,'Name',array("text"=>"aaa")); ?></span> </div>
    </div>
</div>


<!-- tab -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 tlt">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm loại tin' : 'Lưu loại tin'); ?>
    </div>
</div>
<script type="text/javascript">
$(function(){
    $(".tabngonngu a:first").click(function(){
        $(".tabngonngu a:last").removeClass("active");
        $(this).addClass("active");
        $(".tt_tv").show();
        $(".tt_ta").hide();
        return false;
    })
    $(".tabngonngu a:last").click(function(){
        $(".tabngonngu a:first").removeClass("active");
        $(this).addClass("active");
        $(".tt_tv").hide();
        $(".tt_ta").show();
        return false;
    })
})
</script>
<?php $this->endWidget(); ?>
