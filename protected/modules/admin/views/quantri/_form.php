


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
    <label class="col-sm-2 control-label form-label" for="input001">Tài khoản</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'TaiKhoan',array('class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'TaiKhoan'); ?></span> </div>
</div>


<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Mật khẩu</label>
    <div class="col-sm-6">
        <?php echo $form->passwordField($model,'MatKhau',array('class'=>'form-control',"max"=>100,"length"=>100,"size"=>100,'message'=>"Passwords don't match")); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'MatKhau'); ?></span> </div>
</div>

<?php $dataRole = Role::model()->findAll(); ?>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Vai trò</label>
    <div class="col-sm-6">
        <select name="Quantri[idRole]" id="Quantri_idRole" >
       <?php 
        $selected = "";
       foreach ($dataRole as  $value) {
           # code...
         if(isset($model->idRole))
       {
        if($model->idRole == $value->id) $selected = "selected";
        else $selected = "";
       }
        echo "<option $selected value='$value->id'>$value->rolename</option>";
       } ?>
       </select>
         <span class="help-block" id="helpBlock"></span>
</div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Họ và Tên</label>
    <div class="col-sm-6">
        <?php echo $form->textField($model,'HoTen',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'HoTen'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Giới tính</label>
    <div class="col-sm-6">
       <select name="QuanTri[GioiTinh]" id="Nguoidung_GioiTinh">
<option value="1">Nam</option>
<option value="0"> Nữ </option>
</select>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'GioiTinh'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Ngày sinh</label>
    <div class="col-sm-6">
        <?php echo $form->dateField($model,'NgaySinh',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'NgaySinh'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Email</label>
    <div class="col-sm-6">
        <?php echo $form->emailField($model,'Email',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Email',array("text"=>"aaa")); ?></span> </div>
</div>

<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001"> Điện thoại </label>
    <div class="col-sm-6">
        <?php echo $form->numberField($model,'SDT',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'SDT'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Địa chỉ</label>
    <div class="col-sm-6">
        <?php echo $form->textArea($model,'DiaChi',array('size'=>6000,'maxlength'=>1000,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'DiaChi'); ?></span> </div>
</div>
<script>
    function setFile(url)
    {
        jQuery('#User_images').val(url);
        jQuery('#previewHinh').attr('src',url);
    }
</script>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm ban quản trị' : 'Lưu ban quản trị'); ?>
    </div>
</div>
<?php $this->endWidget(); ?>
