<script src="<?php echo Yii::app()->request->baseUrl ?>/ckeditor/ckeditor.js"></script>

<?php 
$model_=$this->loadModel(2);
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
    <?php echo $form->labelEx($model, 'Favicon', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'Favicon', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control Ta__js-image-value')); ?>
        <input type="button" value="Chọn hình ảnh" class="Ta__js-select-image">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" class="Ta__js-image-preview" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Favicon'); ?></span>
    </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Logo', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'Logo', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Logo'); ?></span>
    </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Logo footer</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'LogoMobile', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control Ta__js-image-value')); ?>
        <input type="button" value="Chọn hình ảnh" class="Ta__js-select-image">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" class="Ta__js-image-preview" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'LogoMobile'); ?></span>
    </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Slogan', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'Slogan', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control Ta__js-image-value')); ?>
        <input type="button" value="Chọn hình ảnh" class="Ta__js-select-image">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" class="Ta__js-image-preview" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Slogan'); ?></span> </div>
</div>

<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Email</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Email',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Email',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Fax</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Fax',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Fax',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Di đông</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Phone',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Phone',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Điện thoại</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Tel',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Tel',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Facebook</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Facebook',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Facebook',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Twitter</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Twitter',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Twitter',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Google</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Google',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Google',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Youtube</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Youtube',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Youtube',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Linkedin</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Pinterest',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Pinterest',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->

<!-- tab -->


 <div class="tt_tv">
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Tên công ty</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'Company',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Company',array("text"=>"aaa")); ?></span> </div>
</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Địa chỉ </label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'Address',array('rows'=>6,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Address',array("text"=>"aaa")); ?></span> </div>
</div>
</div>
<!-- tiếng anh -->
 
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm loại sản phẩm' : 'Lưu thông tin chung'); ?>
    </div>
</div>
<!-- chon hinh -->
<script type="text/javascript">
    /*<![CDATA[*/
    function setFileSlogan(){

    }
    jQuery(".Ta__js-select-image1").click(function(e){
        e.preventDefault();
        CKFinder.popup({basePath:"http://anhle93.com:93/filemanager",selectActionFunction:setFileSlogan});
    });
    /*]]>*/
</script>
 <?php
	$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
));
 ?>

 <script>
    function setFile(url)
    {
        jQuery('#Thongtinchung_Logo').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
     function setFileSlogan(url)
     {
         jQuery('#Thongtinchung_Slogan').val(url);
         jQuery('#previewHinhSlogan').attr('src', url);
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
