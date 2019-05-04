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

<?php foreach ($custom_image as $key_parent => $item){?>
<div class="form-group" style="margin-bottom:0px">
    <label class="col-sm-2 control-label form-label"><?php echo $item['name'] ?>:</label>
    <div class="col-sm-6">
        <select name="Custom[data][<?php echo $key_parent ?>][data]">
            <?php
            $criteria=new CDbCriteria();
            $criteria->condition = "active = 1";
            $loai_hinh_anh= Loaihinhanh::model()->findAll($criteria);
            $listdata = CHtml::listData($loai_hinh_anh,'id','name');
            foreach ($listdata as $key => $name){

                $selected = $key == $item['data'] ? $selected = 'selected' : '';
                ?>
            <option <?php echo $selected ?> value="<?php echo $key ?>">  <?php echo $name ?> </option>
            <?php } ?>
        </select>
        <span class="help-block" id="helpBlock"><?php echo $form->error($model,'idCategory'); ?></span>
    </div>
</div>
<?php } ?>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm hình ảnh' : 'Lưu hình ảnh'); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
