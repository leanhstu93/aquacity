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

<!-- Start Fourth Row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="form-group">
                <div class="col-sm-6">
                    <input name="data" class="form-control" value="<?php echo $data ?>">
                </div>
            </div>

            <div class="form-group">
                <div class=" col-sm-6">
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Thêm tin tức' : 'Cập nhật', ['class' => 'pull-right btn btn-default']); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Fourth Row -->

<?php $this->endWidget(); ?>
