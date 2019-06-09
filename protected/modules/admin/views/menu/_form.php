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
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-title">
                <h1>Menu hiện tại</h1>
                <ul class="panel-tools">
                    <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                    <?php echo $form->hiddenField($model,'data',array('size'=>60,'maxlength'=>100,'class'=>'form-control Ta_js-data-menu')); ?>
                    <ol class="list-group simple_with_animation">
                        <?php
                        $dataArr = json_decode($model->data,true);
                        $dataId = array_column($dataArr,'id');
                        foreach ($dataArr as $item) {
                        ?>
                        <li class="list-group-item" data-link="<?php echo $item['link'] ?>" data-name="<?php echo $item['name'] ?>" data-id="<?php echo $item['id'] ?>">
                            <i class="fa-arrows-alt fa"></i>
                            <?php echo $item['name'] ?>  [Module: <?php echo $item['module'] ?>]
                            <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/chinh-sua-menu/<?php echo $item['id'] ?>" class="Ta_js-edit-name">
                                <i class="fa fa-pencil-square-o pull-right"></i>
                            </a>
                        </li>
                        <?php } ?>
                    </ol>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <?php echo CHtml::submitButton('Lưu dữ liệu',['class' => 'btn btn-default pull-right']); ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-title">
                <h1>Menu có sẵn</h1>
                <ul class="panel-tools">
                    <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                    <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                    <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <ol class="list-group simple_with_animation module-menu-default">
                    <?php
                    foreach (Menu::DATA_MENU as $item) {
                        if(in_array($item['id'], $dataId)) continue;
                        ?>
                        <li class="list-group-item" data-link="<?php echo $item['link'] ?>" data-module="<?php echo $item['module'] ?>" data-name="<?php echo $item['name'] ?>" data-id="<?php echo $item['id'] ?>">
                            <i class="fa-arrows-alt fa"></i> <?php echo $item['name'] ?> [<?php echo $item['module'] ?>]
                            <a href="<?php echo Yii::app()->request->baseUrl ?>/admin/chinh-sua-menu/<?php echo $item['id'] ?>" class="Ta_js-edit-name">
                                <i class="fa fa-pencil-square-o pull-right"></i>
                            </a>
                        </li>
                 <?php  } ?>
                </ol>
            </div>
        </div>
    </div>

</div>
<!-- End Fourth Row -->

<?php $this->endWidget(); ?>
