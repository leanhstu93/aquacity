
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
    <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <img src="<?php echo Yii::app()->request->baseUrl ?>/images/demo.jpg" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'UrlImage'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Loại khách hàng:</label>
    <div class="col-sm-6"> <?php
        $criteria=new CDbCriteria();
        $criteria->with=array("loaikhachhang_lang");
       $khachhang = Loaikhachhang::model()->findAll($criteria);
       $listdata = CHtml::listData($khachhang,'id','loaikhachhang_lang.Name');
          echo $form->dropDownList($model, 'idLoaiKhachHang',$listdata, array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'SetHome', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
          <?php
         
          echo $form->dropDownList($model, 'SetHome',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'SetHome'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
          <?php
         
          echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> </div>
</div>



<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm khách hàng' : 'Lưu khách hàng'); ?>
    </div>
</div>
<script>
    CKEDITOR.replace('noidung', {height: 300, });
    CKEDITOR.replace('KhachhangLang__Content', {height: 300, });
    function setFile(url)
    {
        jQuery('#Khachhang_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
</script>
<?php
$this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
))
?>
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
