<?php $this->renderPartial("//layouts/header");?>
<div class="ct w100 page-cart">
	<div class="w1000">
		<div class="tt">
          <span>Giỏ Hàng</span>
        </div>
        <?php 
        /*
		    $arrBread[0]["Name"] = "Giỏ hàng";
		    $this->renderPartial("//layouts/breadcrumb",array('data'=>$arrBread));
		*/
		?>
		<form id="formGiohang">
			<div class="clear"></div>

			<div class="wrap-cart w100">
				<div class="continue-shop">
					<a href="">
						Tiếp tục đặt món
						<img src="/images/arrowright.png">
					</a>
				</div>
				<div class="head-view-cart w100">
					<div class="col2">Sản phẩm</div>
					<div class="col2">
						<div class="col3">
							Số lượng
						</div>
						<div class="col3">
							Giá 
						</div>
						<div class="col3">
							Tổng tiền
						</div>
					</div>
				</div>
				<div class="view-cart w100">
					<?php 
					foreach ($data as $key => $value) {
					?>
						<div class="row w100">
							<div class="col2">
								<div class="img-cart">
									<img class="w100" src="<?php echo $value->UrlImage ?>">
								</div>
								<div class="name-iteam-cart">
									<a href="/mon/<?php echo $value->sanpham_lang->Alias ?>.html" target="_blank">
										<?php echo $value->sanpham_lang->Name ?>
									</a>
								</div>
							</div>
							<div class="col2">
								<div class="col3">
									<div class="wrap-pos">
										<div class="wrp-restart" idsp="<?php echo $value->getId(); ?>">
											<img src="/images/restart.png" class="w100" >
											<input type="hidden" name="idsp[]" value="<?php echo $value->getId(); ?>">
										</div>
										<div class="quantity-option-wrapper">
											<div class="increase-quantity"></div>
											<div class="decrease-quantity"></div>
										</div>
										<input class="cart-qua-text" type="text" value="<?php echo $value->getQuantity() ?>" name="sl[]">
										<div class="btn-cart-delete" idsp="<?php echo $value->getId() ?>">
											<img src="/images/icon-delete.gif">
										</div>
									</div>
								</div>
								<div class="col3 vta center">
									<?php echo number_format($value->Price) ?>
								</div>
								<div class="col3 vta center"> <?php echo number_format($value->getSumPrice()) ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="wrap-up-de w100">
					<div class="btn-update-all" id="btncapnhatgiohang">
						
							Cập nhật
						
					</div>
					<div class="btn-remove-all">
						
							Xóa hết
						</a>
					</div>
					<div class="btn-checkout">
						<a href="/checkout.html" class="w100">
							Đặt hàng
						</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>