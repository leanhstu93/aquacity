<?php
  $ttc = Thongtinchung::model()->find(" idNgonNgu = 1 ");
?>
  <?php $form=$this->beginwidget('CActiveForm', array('id'=>'frm', 'enableClientValidation'=>true, 'clientOptions'=>array('validateOnSubmit'=>true), 'htmlOptions'=>array('class'=>'formBox'))); ?>
    <div class="top" style="background:#2c2d30">
      <img style="    width: 109px;
    margin: auto;" src="<?php echo "http://".$_SERVER["HTTP_HOST"].$ttc->Logo ?>" alt="icon" class="icon">

    </div>
    <div class="form-area">
        <?php echo $form->error($model, 'error'); ?>
      <div class="group">
        <input type="text" class="form-control" name="LoginForm[username]" id="LoginForm_username" maxlength="45" placeholder="Tên đăng nhập" />
        <i class="fa fa-user"></i>
        <?php echo $form->error($model,'username'); ?>
      </div>
      <div class="group">
        <input type="password" class="form-control" name="LoginForm[password]" id="LoginForm_password" maxlength="45" placeholder="Mật khẩu" />
        <i class="fa fa-key"></i>
        <?php echo $form->error($model,'password'); ?>
      </div>
      <div class="checkbox checkbox-primary">
        <?php echo $form->checkBox($model,'rememberMe',array('id'=>'checkbox101')); ?>
        <label for="checkbox101"> Duy trì đăng nhập</label>
      </div>
      
      <?php echo Chtml::submitButton('Đăng nhập', $htmlOptions=array('class'=>'btn btn-default btn-block', 'name'=>'submit','style'=>' background:#2c2d30'));?>
    </div>
  <?php $this->endWidget();?>