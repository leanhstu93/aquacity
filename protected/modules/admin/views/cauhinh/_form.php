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

<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Tiêu đề:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Title',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Mô tả:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'Description',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Description',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Từ khóa:</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'Keyword',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Keyword',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Email:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Email',array("text"=>"aaa")); ?></span> </div>
</div>

<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Appid:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Appid',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Appid',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Google map:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'googlemap',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'googlemap',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Robots:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'robots',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'robots',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Head</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'head',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'head',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Body</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'body',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'body',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Footer</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'footer',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'footer',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->

<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Thống kê truy cập</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($ntc,'Count',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($ntc,'Count',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm loại sản phẩm' : 'Lưu thông tin cấu hình'); ?>
    </div>
</div>

<?php
	$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages1',
    'function' => 'setFile1',
));
 ?>
 <?php
	$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
));
 ?>
 <script>
 CKEDITOR.replace('Thongtinchung_DiaChi', {height: 300, });
    function setFile(url)
    {
        jQuery('#Thongtinchung_Logo').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
    function setFile1(url)
    {
        jQuery('#Thongtinchung_Banner').val(url);
        jQuery('#previewHinh1').attr('src', url);
    }
     </script>
    <style type="text/css">
    .tabngonngu{
        width: 100%;
	    margin-bottom: 22px;
	    border-bottom: 1px solid #ccc;
	    margin-left: -2%;
	    display: block;
	    float: left;
    }
    .tabngonngu a.active{
        font-weight: bold;
	    color: black;
	    background: -webkit-linear-gradient(top,#f3f3f3,#fff);
	    background: -moz-linear-gradient(top,#f3f3f3,#fff);
	    border-color: #ccc #ccc #fff;
	    border-radius: 5px 5px 0 0;
	    border-style: solid;
	    border-width: 1px;
	    -moz-border-bottom-colors: none;
	    -moz-border-image: none;
	    -moz-border-left-colors: none;
	    -moz-border-right-colors: none;
	    -moz-border-top-colors: none;
	    box-shadow: none;

	}
    
    .tabngonngu a:hover{
        background: white;
    }
    .tabngonngu a{
        top: 2px;
	    width: 137px;
	    float: left;
	    display: block;
	    margin-left: 5px;
	    position: relative;
	    /* top: 18px; */
	    padding: 14px 30px;
	    line-height: 0.7em;
	    min-width: 55px;
	    text-align: center;
	    color: #CAC8C8;
	    font-size: 10px;
	    font-weight: bold;
	    text-transform: uppercase;
	    letter-spacing: 1px;
	    cursor: pointer;
	    text-shadow: 1px 1px 1px rgba(255,255,255,0.3);
	    background: -webkit-linear-gradient(top,#f3f3f3,#fff);
	    background: -moz-linear-gradient(top,#f3f3f3,#fff);
	    border-radius: 5px 5px 0 0;
	    box-shadow: 2px 0px 2px rgba(0,0,0,0.1),-2px 0 2px rgba(0,0,0,0.1)/*0.1*/;
    }
    .tt_ta{display: none;}
</style>
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
