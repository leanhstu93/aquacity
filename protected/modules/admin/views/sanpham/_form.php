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
    <label class="col-sm-2 control-label form-label" for="input001">Loại sản phẩm:</label>
    <div class="col-sm-6"> <?php
        $criteria=new CDbCriteria();
        $criteria->with=array("loaisanpham_lang");
       $loaisanpham = Loaisanpham::model()->findAll($criteria);
       $listdata = CHtml::listData($loaisanpham,'id','loaisanpham_lang.Name');
          echo $form->dropDownList($model, 'idLoai',$listdata, array( 'class' => 'form-control ')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'id'); ?></span> </div>
</div>
 <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Giá:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($model,'Gia',array('size'=>60,'maxlength'=>100,'class'=>'form-control','required'=>'required')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($model,'Gia',array("text"=>"aaa")); ?></span> </div>
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
<!-- hinh anh len quan -->
<!-- hinh anh len quan -->

<hr>
<div class="form-group">
    <label class="col-sm-2 control-label form-label" for="input001"> Hình ảnh liên quan</label>
    <div class="hinhanhlienquan">
        <img id="halq" src="<?php echo Yii::app()->theme->baseUrl ?>/images/photo-icon.png" style="width:100px">
        <?php
if($model->isNewRecord != true)
{?>

<script type="text/javascript">
    $(function(){
         $(".iconx").click(function(){
            $(this).parent().remove();

        });
    })
</script>
    <?php
    $thum = Thumbnails::model()->findAll("idSP = $model->id");
    foreach ($thum as $key => $value) { ?>
       <div class="thumb"> 
        <div class="iconx">
            <i class="fa fa-times fa-1" aria-hidden="true"></i>
        </div> 
        <input name="Thumbnails[]" class=" thumb-1" type="hidden" value="<?php echo $value->UrlImage ?>">
         <img class="nail" src="<?php echo $value->UrlImage ?>">  </div>
 <?php   }
    
}
 ?>
    </div>
</div>
<hr>
<style>
.hinhanhlienquan .thumb{
    width: 100px;
    float: left;
}
.hinhanhlienquan .thumb img{
    width: 100px;
    padding-right: 5px;
    float: left;
}
.hinhanhlienquan .thumb img.nail{
    width: 100px;
    padding-right: 5px;
    float: left;
    position: relative;
    top: -14px;
    z-index: 1;
}
.hinhanhlienquan img.iconx{
    width: 20px;
    position: relative;
    left: 80px;
    z-index: 2;
}
.hinhanhlienquan .thumb .iconx .fa{
    position: relative;
    z-index: 0;
    color: white;
}
.hinhanhlienquan .thumb:hover .iconx .fa{
    display: inline-block;
        border-radius: 100%;
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
    background: black;
    width: 19px;
    height: 19px;
    text-align: center;
    color: white;
    line-height: 16px;
    border: 2px solid white;
    position: relative;
    z-index: 9;
    left: 82px;
}


</style>

    <script type="text/javascript">
    function setFile4(url)
    {
        var leng = $(".hinhanhlienquan .thumb").length;
        if(leng == 4) {alert(" Chỉ được thêm 4 hình ảnh liên quan "); return false;}
        var num = leng +1;
        $(".hinhanhlienquan").append("<div class='thumb'> <div class='iconx' ><i class='fa fa-times fa-1' aria-hidden='true'></i></div> <input name='Thumbnails[]' class=' thumb-"+num+"' type='hidden' value='"+url+"' /> <img  class='nail'  src='"+url+"'  />  </div>");
        //jQuery('#Sanpham_UrlImage').val(url);
        //jQuery('#previewHinh').attr('src', url);
        $(".iconx").click(function(){
            $(this).parent().remove();

        });
    }
/*<![CDATA[*/
jQuery("#halq").click(function(e){
                   e.preventDefault();
                   CKFinder.popup({basePath:"http://<?php echo $_SERVER['SERVER_NAME'] ?>/filemanager",selectActionFunction:setFile4});
                });
</script>
<!-- end hinh anh len quan -->
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
    <!-- tab -->
    <div class="tabngonngu">
        <a class="active" href=""> Tiếng Việt </a>
        <a  href=""> Tiếng Anh </a>
    </div>
    <div class="tt_tv">
        <div class="form-group" style="margin-bottom:0px">
            <label class="col-sm-2 control-label form-label" for="input001">Tên sản phẩm:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($spl,'Name',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl_,'TenLoai',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Mô tả </label>
        <div class="col-sm-6">
            <?php echo $form->textArea($spl,'MoTa',array('rows'=>6,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl_,'MoTa',array("text"=>"aaa")); ?></span>
        </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Chi tiết </label>
        <div class="col-sm-6">
        <?php echo $form->textArea($spl,'Content',array('rows'=>6,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl,'Content',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
</div>
 <div class="tt_ta">
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Tên sản phẩm:</label>
        <div class="col-sm-6">
            <?php echo $form->textField($spl_,'Name',array('name'=>'SanphamLang_[Name]','size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
            <span class="help-block" id="helpBlock"><?php echo $form->error($spl_,'Name',array("text"=>"aaa")); ?></span> 
        </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Mô tả </label>
        <div class="col-sm-6">
            <?php echo $form->textArea($spl_,'MoTa',array('name'=>'SanphamLang_[MoTa]','rows'=>6,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($spl_,'MoTa',array("text"=>"aaa")); ?></span> 
    </div>
    </div>
    <div class="form-group" style="margin-bottom:0px">
        <label class="col-sm-2 control-label form-label" for="input001">Chi tiết </label>
        <div class="col-sm-6">
            <?php echo $form->textArea($spl_,'Content',array('name'=>'SanphamLang_[Content]','rows'=>6,'maxlength'=>100,'class'=>'form-control')); ?>
        <span class="help-block" id="helpBlock"><?php echo $form->error($spl_,'Content',array("text"=>"aaa")); ?></span> 
    </div>
</div>
  
</div>  
</div>
<!-- tab -->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm sản phẩm' : 'Lưu sản phẩm'); ?>
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
  CKEDITOR.replace('SanphamLang__Content', {height: 300, });

    function setFile(url)
    {
        jQuery('#Sanpham_UrlImage').val(url);
        jQuery('#previewHinh').attr('src', url);
    }
</script>
<?php $this->endWidget(); ?>
