<script type="text/javascript" src="/js/ta.js"></script>
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
				<?php } die();?>