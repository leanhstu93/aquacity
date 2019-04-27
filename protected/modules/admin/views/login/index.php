  <?php $form=$this->beginwidget('CActiveForm', array('id'=>'frm', 'enableClientValidation'=>true, 'clientOptions'=>array('validateOnSubmit'=>true), 'htmlOptions'=>array('class'=>'formBox'))); ?>
    <div class="top">
      <?php 
                    $ttc = Thongtinchung::model()->find("id = 1");
                    if($ttc->Logo == "")
                    { 
                     ?>
                    <img
                        src="<?php echo yii::app()->theme->baseurl ?>/images/vnetcom.png"
                           class="icon">
                        <?php }
                        else
                        { ?>
                      <img
                        src="<?php echo $ttc->Logo ?>"
                        width="150" >
                        <?php }
                         ?>
                

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
      
      <?php echo Chtml::submitButton('Đăng nhập', $htmlOptions=array('class'=>'btn btn-default btn-block', 'name'=>'submit'));?>
    </div>
  <?php $this->endWidget();?>