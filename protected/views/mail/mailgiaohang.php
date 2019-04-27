<table cellpadding="0" border="0" style="width:650px;border-top:1px dotted #cccccc">
	<tbody>
		<tr>
			<td>
				<h1>
					<span style="font-size:20px;color:#cc0000"><strong><?php echo $_SERVER['HTTP_HOST'] ?></strong> vừa nhận được đơn giao hàng.</span>
				</h1>
				<span style="display:block;padding:10px 0px"> 
					Chào  quản trị <strong><?php echo $_SERVER['HTTP_HOST'] ?></strong>
				</span>
				<p style="margin-bottom:0.0001pt;line-height:normal;background-repeat:initial initial">
					<strong><?php echo $_SERVER['HTTP_HOST'] ?></strong> vừa nhận được đơn hàng với thông tin như sau:&nbsp;
				</p>
				<div style="background:#eff0f4;border:1px solid #e2e2e2;margin-top:10px;width:100%">
					<table bgcolor="#FFFFFF" cellpadding="0" border="0" width="100%" style="padding:10px">
						<tbody>
							<tr style="padding:10px">
								<td style="padding:2px 8px 0px 15px">
									Mã số đơn hàng
								</td>
								<td style="padding:2px 8px 0px 15px">
									<strong>
									<a href="#">
										<?php echo $data->idDH ?>
									</a>
								</strong>
								</td>
							</tr>
							<tr>
								<td style="padding:2px 8px 0px 15px">
									Thời gian đặt hàng:	
								</td>
								<td style="padding:2px 8px 0px 15px">
									<strong>
									<?php echo date("d/y/Y h:m:s",$data->ThoiGianDat) ?>
								</strong>
								</td>
							</tr>
							<tr>
								<td style="padding:2px 8px 0px 15px">
									Phương thức vận chuyển:	
								</td>
								<td style="padding:2px 8px 0px 15px">
									<strong>
										<?php $_SERVER['HTTP_HOST'] ?> vận chuyển
									</strong>
								</td>
							</tr>
							<tr>
								<td style="padding:2px 8px 0px 15px">
									Phương thức thanh toán:	
								</td>
								<td style="padding:2px 8px 0px 15px">
									<strong>
									 Thanh toán khi giao hàng.
									</strong>
								</td>
							</tr>
							<tr>
								<td style="padding:2px 8px 0px 15px">
									Thông tin người nhận:
								</td>
								<td style="padding:2px 8px 0px 15px">
									<strong>
									<?php echo $data->TenNguoiNhan ?>
								</strong>
								</td>
							</tr><tr>
								<td style="padding:2px 8px 0px 15px">
									Lưu ý về đơn hàng:
								</td>
								<td style="padding:2px 8px 0px 15px">
									<strong> <?php echo $data->GhiChu ?> </strong>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</td>
		</tr>
	</tbody>
</table>

<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="650px" style="margin-top: 20px">
	<tbody>
		<tr bgcolor="#cc0000" style="color:#fff;height:25px">
			<th scope="col" style="padding:5px">
				Sản phẩm
			</th>
			<th scope="col" style="padding:5px">
				Mã hàng
			</th>
			<th scope="col" style="padding:5px">
				Đơn giá
			</th>
			<th scope="col" style="padding:5px">
				Số lượng
			</th>
			<th scope="col" style="padding:5px">
				Thành tiền
			</th>
		</tr>
		<?php 
		$dhct = NncmsDonhangchitiet::model()->findAll("idDH = ".$data->idDH);
		$tongtien = 0;
		foreach ($dhct as $key => $value) {
			$criteria = new CDbCriteria();
	        $criteria->with="sanpham_lang";
	        $criteria->condition = "idNgonNgu = 1 and t.id = ".$value->idSP;
			$sp = Sanpham::model()->find($criteria);
		?>
		
		<tr>
			<td style="padding:5px 0 5px 15px">
				<p style="display: inline-block; vertical-align: middle;padding-right:10px">
					<img src="<?php echo $_SERVER['HTTP_HOST'].$sp->UrlImage ?>" width=100px>
				</p>
				<div style="display: inline-block;vertical-align: middle;">
					<div><?php echo $sp->sanpham_lang->Name ?></div>
					
				</div>
			</td>
			<td style="padding:5px 0;text-align:center"><?php echo $data->idDH ?></td>
			<td style="padding:5px 0;text-align:right"><?php echo number_format($sp->Gia) ?></td>
			<td style="padding:5px 0;text-align:center"><?php echo $value->SoLuong ?></td>
			<td style="padding:5px 15px 5px 0px;text-align:right"><?php echo number_format($value->SoLuong*$sp->Gia) ?></td>
		</tr>
		<?php $tongtien = ($value->SoLuong*$sp->Gia) + $tongtien ?>
		<?php } ?>
		<tr align="center">
			<td align="right" colspan="4" style="border-bottom:1px solid #eff0f4;padding:5px">Chi phí đơn hàng</td> 
			<td align="right" style="border-bottom:1px solid #eff0f4;padding:5px 16px 5px 5px"><?php echo number_format($tongtien) ?></td>
		</tr>
		<tr align="center">
			<td align="right" colspan="4" style="border-bottom:1px solid #eff0f4;padding:5px">Chi phí vận chuyển</td>
			<td align="right" style="border-bottom:1px solid #eff0f4;padding:5px 16px 5px 5px">Tùy khoảng cách</td>
		</tr>
		<!--
		<tr align="center">
			<td align="right" colspan="4" style="border-bottom:1px solid #eff0f4;padding:5px">Shop hỗ trợ PVC</td> 
			<td align="right" style="border-bottom:1px solid #eff0f4;padding:5px 16px 5px 5px">-15,000VNĐ</td>
		</tr>

		<tr align="center">
			<td align="right" colspan="4" style="border-bottom:1px solid #eff0f4;padding:5px"><strong>Tổng giá trị
				đơn hàng</strong>
			</td> 
			<td align="right" style="border-bottom:1px solid #eff0f4;padding:5px 16px 5px 5px"><strong>375,000</strong>VNĐ
			</td>
		</tr>
		-->
	</tbody>
</table>
