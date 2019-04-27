<?php $this->renderPartial("//layouts/header");?>
<div class="content w100 wrap-checkout">
	<div class="w1000">
		<?php 
		    $arrBread[0]["Name"] = "Đặt hàng";
		    $arrBread[1]["Name"] = "Giỏ hàng";
		    $arrBread[1]["Href"] = "/cart.html";
		    $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
		?>
		<div class="wrap-dathang w100">
			<div class="left">
				<div class="tt-dh">Thông tin nhận hàng</div><?php echo CHtml::errorSummary($donhang); ?>
				<?php 
				$form=$this->beginWidget('CActiveForm', array(
				    'id'=>'checkout',
				    // Please note: When you enable ajax validation, make sure the corresponding
				    // controller action is handling ajax validation correctly.
				    // There is a call to performAjaxValidation() commented in generated controller code.
				    // See class documentation of CActiveForm for details on this.
				    'enableAjaxValidation'=>false,
				    'htmlOptions'=>array(
				        'class'=>'form-horizontal',
				    ),
				)); ?>
				<ul>
					<li>
						<label>Email</label>
						<?php echo $form->textField($nguoidung, 'Email', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control','placeholder'=>'Nhập email của bạn')); ?>
						<span class="help-block" id="helpBlock"><?php echo $form->error($nguoidung,'Email',array("text"=>"aaa")); ?></span> 
					</li>
					<li>
						<label>Họ Tên</label>
						<?php echo $form->textField($nguoidung, 'HoTen', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control','placeholder'=>'Nhập họ tên của bạn')); ?>
						<span class="help-block" id="helpBlock"><?php echo $form->error($nguoidung,'HoTen',array("text"=>"aaa")); ?></span> 
					</li>
					<li>
						<label>Điện Thoại</label>
						<?php echo $form->textField($nguoidung, 'DienThoai', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control','placeholder'=>'Nhập số điện thoại của bạn')); ?>
						<span class="help-block" id="helpBlock"><?php echo $form->error($nguoidung,'DienThoai',array("text"=>"aaa")); ?></span> 
					</li>
					<li>
						<label>Địa Chỉ</label>
						<?php echo $form->textArea($donhang, 'DiaDiemGiao', array('rows' => 4, 'maxlength' => 1000, 'class' => 'form-control','placeholder'=>'Nhập địa chỉ của bạn')); ?>
						<span class="help-block" id="helpBlock"><?php echo $form->error($donhang,'DiaDiemGiao',array("text"=>"aaa")); ?></span> 
					</li>
					
				</ul>
				<input class="btn-checkout" value="Đặt hàng" type="submit">
					
				<?php $this->endWidget(); ?>
			</div>
			<div class="right">
				<div class="tt-dh">
					Thông tin đơn hàng
				</div>
				<div class="tb-ttdh w100">
					<div class="row panel">
						<div class="col3">
							Món 
						</div>
						<div class="col3">
							Số lượng 
						</div>
						<div class="col3">
							Giá
						</div>
					</div>
					<?php 
						foreach ($data as $key => $value) {
					?>
					<div class="row">
						<div class="col3">
							<?php echo $value->sanpham_lang->Name ?>
						</div>
						<div class="col3">
							<?php echo $value->getQuantity() ?>
						</div>
						<div class="col3">
							<?php echo number_format($value->getSumPrice())."VND"; ?>
						</div>
					</div>
					<?php } ?>
					<div class="row last">
						<div class="part-left">
							Tổng tiền
						</div>
						<div class="part-right">
							<?php echo number_format(Yii::app()->shoppingCart->getCost())."VND"; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>