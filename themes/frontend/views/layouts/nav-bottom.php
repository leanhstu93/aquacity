<div class="nav-bottom">
	<ul>
		<li>
			<a href="tel:<?php echo $this->ttc->Tel ?>" >
				<i class="fa fa-whatsapp tada" aria-hidden="true" ></i>
				Gọi điện
			</a>
		</li>
		<li>
			<a href="<?php echo $this->ttc->MessengerFB ?>" target="_blank" class="">
				<i class="fa fa-comments-o blink" aria-hidden="true"></i>
				Chat
			</a>
		</li>
		<li>
			<a href="/lien-he.html">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				Liên hệ
			</a>
		</li>
		<li>
			<a href="/lien-he.html/#baogia" class="">
				<i class="fa fa-cc-discover" aria-hidden="true"></i>
				Báo giá
			</a>
		</li>
	</ul>
</div>
<style type="text/css">
	.nav-bottom{z-index: 99;width: 100%;display: none;position: fixed;bottom: 0px;left: 0px;    background-color: #e6e6e6;
    -webkit-box-shadow: 0 2px 4px 1px rgba(0,0,0,0.06), 0 4px 5px 0 rgba(0,0,0,0.06), 0 1px 10px 0 rgba(0,0,0,0.08);
    box-shadow: 0 2px 4px 1px rgba(0,0,0,0.06), 0 4px 5px 0 rgba(0,0,0,0.06), 0 1px 10px 0 rgba(0,0,0,0.08);}
	.nav-bottom li{width: calc(100% / 4);float: left;border-right: 1px solid #34090c;list-style: none;text-align: center}
	.nav-bottom li:last-child{border-right: 0}
	.nav-bottom li a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
    width: 100%;float: left;
	}
	.nav-bottom li i {
    color: #34090c;
    font-size: 20px;
    display: block;
    margin-bottom: 5px;
}
	@media screen and (max-width: 1000px){
		.wrap-mess-fb{display: none !important;}
		.nav-bottom{display: block;}
	}
</style>