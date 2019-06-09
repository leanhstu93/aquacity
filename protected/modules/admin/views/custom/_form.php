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
    <?php if(!empty($custom['CUSTOM_IMAGE'])){ ?>
        <?php $this->renderPartial('block-setting-image', array('data'=>$custom['CUSTOM_IMAGE'], 'form' => $form)); ?>
    <?php } ?>

    <?php if(!empty($custom[Custom::KEY_LIBRARY_CATEGORY])){ ?>
        <?php $this->renderPartial('block-setting-library-image', array('data'=>$custom[Custom::KEY_LIBRARY_CATEGORY], 'form' => $form)); ?>
    <?php } ?>

    <?php if(!empty($custom['CUSTOM_SINGLE_PAGE'])){ ?>
        <?php $this->renderPartial('block-setting-single-page', array('data'=>$custom['CUSTOM_SINGLE_PAGE'], 'form' => $form)); ?>
    <?php } ?>

    <?php if(!empty($custom['CUSTOM_NEWS_CATEGORY'])){ ?>
        <?php $this->renderPartial('block-setting-news-category', array('data'=>$custom['CUSTOM_NEWS_CATEGORY'], 'form' => $form)); ?>
    <?php } ?>
</div>
<!-- End Fourth Row -->

<?php $this->endWidget(); ?>
