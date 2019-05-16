<div id="Ta__js-tu-van" class="modal hide fade" tabindex="-1" data-width="760">
    <?php
    $model=new Baogia;
    $form=$this->beginWidget('CActiveForm', array(
        'id'=>'checkout',
        // Please note: When you enable ajax validation, make sure the corresponding

        // controller action is handling ajax validation correctly.

        // There is a call to performAjaxValidation() commented in generated controller code.

        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
        'action' => '/site/Xulybaogia',
        'htmlOptions'=>array(
            'class'=>'form-horizontal',
        ),
    )); ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="pop-logo">
            <img src="<?php echo $this->ttc->Logo ?>" alt="<?php echo $this->ttc->Company ?>">
        </div>
        <h3>ĐĂNG KÍ TƯ VẤN MIỄN PHÍ</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">
            <div class="span12">
                <?php echo $form->errorSummary($model); ?>
                    <div class="form-group">
                        <?php echo $form->textField($model,'Name',array("placeholder"=>"Họ tên:", 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $form->textField($model,'Phone',array("placeholder"=>"Điện thoại:*", 'class' => 'form-control', 'required' => 'required')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $form->textField($model,'Email',array("placeholder"=>"Email:", 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $form->textArea($model,'Description',array("placeholder"=>"Mô tả:","rows"=>3, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model,'Description'); ?>
                    </div>

            </div>
        </div>
    </div>
    <div class="modal-footer">
        <?php echo CHtml::submitButton("Đăng ký",array("name"=>"Gui")); ?>
        <p class="w100">Tư vấn trực tiếp 24/7: <a href="tel:<?php echo $this->ttc->Phone ?>"><?php echo $this->ttc->Phone ?></a></p>
    </div>
    <?php $this->endWidget(); ?>
</div>