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
 <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tên dịch vụ:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($spl,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control','required'=>'required')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'Name',array("text"=>"aaa")); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Tên menu:</label>
    <div class="col-sm-6">
        <?php echo $form->textField($spl,'NameShort',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'NameShort',array("text"=>"aaa")); ?></span>
    </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001">Loại dịch vụ:</label>
    <div class="col-sm-6"> <?php
        $criteria=new CDbCriteria();
        $criteria->with=array("loaisanpham_lang");
       $loaisanpham = Loaisanpham::model()->findAll($criteria);
       $listdata = CHtml::listData($loaisanpham,'id','loaisanpham_lang.Name');
          echo $form->dropDownList($model, 'idLoai',$listdata, array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'UrlImage', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
        <?php echo $form->textField($model, 'UrlImage', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control','required'=>'required')); ?>
        <input type="button" value="Chọn hình ảnh" id="selectImages">
        <?php 
        $prive = Yii::app()->request->baseUrl."/images/demo.jpg";
        if(isset($model->UrlImage)) $prive = $model->UrlImage;
        ?>
        <img src="<?php echo $prive ?>" alt="Hiển thị hình ảnh" id="previewHinh" height="100" width="100" style="margin-left: 10px;margin-top: 10px;">
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Logo'); ?></span> </div>
</div>

    <script type="text/javascript">
    function setFile4(url)
    {
        var leng = $(".hinhanhlienquan .thumb").length;
        if(leng == 2) {alert(" Chỉ được thêm 10 hình ảnh liên quan "); return false;}
        var num = leng +1;
        $(".hinhanhlienquan").append("<div class='thumb'> <div class='iconx' ><i class='fa fa-times fa-1' aria-hidden='true'></i></div> <input name='Thumbnails[]' class=' thumb-"+num+"' type='hidden' value='"+url+"' /> <img  class='nail'  src='"+url+"'  />  </div>");
        //jQuery('#Sanpham_UrlImage').val(url);
        //jQuery('#previewHinh').attr('src', url);
        $(".iconx").click(function(){
            $(this).parent().remove();

        });
    }
/*<![CDATA[*/
</script>
<script type="text/javascript">
function openKCFinder(textarea) {
    window.KCFinder = {
        callBackMultiple: function(files) {
            window.KCFinder = null;
            textarea.value = "";
            for (var i = 0; i < files.length; i++){
                num = 1 + i;
                  var leng = $(".hinhanhlienquan .thumb").length;
                  if(leng >= 2) {alert("Chỉ được thêm tối đa 2 hình ảnh liên quan.");
                    break;
                    }
                  else
                 $(".hinhanhlienquan").append("<div class='thumb'> <div class='iconx' ><i class='fa fa-times fa-1' aria-hidden='true'></i></div> <input name='Thumbnails[]' class=' thumb-"+num+"' type='hidden' value='"+files[i]+"' /> <img  class='nail'  src='"+files[i]+"'  />  </div>");
               
            }
        }
    };
    window.open('http://<?php echo $_SERVER['SERVER_NAME'] ?>/kcfinder/browse.php?type=files&dir=files/public',
        'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script>
<!-- end hinh anh len quan -->
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'SetHome', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
          <?php echo $form->dropDownList($model, 'SetHome',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'SetHome'); ?></span> </div>
</div>
<div class="form-group" style="margin-bottom:0px">
    <?php echo $form->labelEx($model, 'Active', array('class' => 'col-sm-2 control-label form-label')); ?>
    <div class="col-sm-6">
          <?php
          echo $form->dropDownList($model, 'Active',array("Không","Có"), array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model, 'Active'); ?></span> </div>
    </div>
<div class="tt_tv">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Mô tả </label>
        <div class="col-sm-6">
            <?php echo $form->textArea($spl,'MoTa',array('rows'=>3,'class'=>'form-control','resize' => false)); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'MoTa',array("text"=>"aaa")); ?></span>
        </div>
    </div>

    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Nội dung </label>
        <div class="col-sm-6">
            <?php echo $form->textArea($spl,'Content',array('rows'=>6,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'Content',array("text"=>"aaa")); ?></span>
        </div>
    </div>
<!-- end iteam -->

</div>
<!-- tab -->
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label" for="input001"> SEO</label>
</div>
<hr style="marin-top:0px">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Description:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model,'Description',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'Description',array("text"=>"aaa")); ?></span> </div>
    </div>
      <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Keywords:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model,'Keywords',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'Keywords',array("text"=>"aaa")); ?></span> </div>
    </div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm dịch vụ' : 'Lưu dịch vụ'); ?>
    </div>
</div>

 <?php
    $this->widget('ext.toan_ckfinder.Toan_ckfinder', array(
    'target' => '#selectImages',
    'function' => 'setFile',
));
 ?>
 <script>
  CKEDITOR.replace('SanphamLang_Content', {height: 300, });
    function setFile(url)
    {
        jQuery('#Sanpham_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
</script>
<?php $this->endWidget(); ?>
