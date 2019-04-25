<div class="chat_btn">
        <figure class="_toggle">
        <img src="modules/popupsdt/img/P-bac-si.png" alt="Chat Girl">
        <span></span>
        <div class="anim">
        <div class="anim_1"></div>
        <div class="anim_2"></div>
        <div class="anim_3"></div>
        </div>
        </figure>
        <div class="hover_block">
        Xin chào ! Click vào tôi để chuyên gia gọi bạn </div>
</div>
<div class="che"></div>
<div class="popupsdt">
	<div class="wrap-popup">
		<div class="close-pop">
			<img src="/modules/popupsdt/img/icon-dau-cong.png">
		</div>
		<div class="hed-pop w100">
			<div class="wrap-logo">
				<img src="/modules/popupsdt/img/P-logo.png" class="w100">
			</div>
		</div>
		<div class="body-pop w100">
			<div class="txt-pop">
				<p> <strong>NHẬP SỐ ĐIỆN THOẠI <br> BÁC SĨ TƯ VẤN CHO BẠN </strong></p>
				<p class="red blink">*Mọi thông tin tuyệt đối bảo mật*</p>
			</div>
			<div class="pos-bs">
				<img src="/modules/popupsdt/img/P-bac-si.png">
			</div>
		</div>
		<div class="footer-pop w100">
			<input type="text" name="txtsdt" placeholder="Số điện thoại" id="txtphone">
			<input type="submit" name="" value="GỬI" id="sbphone">
			<?php echo Common::sendphone("#sbphone","#txtphone"); ?>
		</div>
	</div>
</div>
<style type="text/css">
	.chat_btn {
    position: fixed;
    right: 70px;
    top: 50px;
    width: 64px;
    height: 64px;
    z-index: 5;
}
.chat_btn figure {
    padding-top: 2px;
    background: white;
    position: relative;
    width: 64px;
    height: 64px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -webkit-box-shadow: 0 2px 9px 3px rgba(0,0,0,.25);
    -moz-box-shadow: 0 2px 9px 3px rgba(0,0,0,.25);
    box-shadow: 0 2px 9px 3px rgba(0,0,0,.25);
    cursor: pointer;
}
.chat_btn figure img {
    position: relative;
    z-index: 1;
    display: block;
    width: 40px;
    margin: auto;
    margin-top: 5px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}
.chat_btn figure span {
    display: block;
    width: 10px;
    height: 10px;
    position: absolute;
    z-index: 2;
    right: 2px;
    top: 6px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    background: #21cd83;
    background: -webkit-gradient(linear,left bottom,left top,color-stop(0,#15bc79),color-stop(1,#51e9a1));
    background: -ms-linear-gradient(bottom,#15bc79,#51e9a1);
    background: -moz-linear-gradient(center bottom,#15bc79 0,#51e9a1 100%);
    background: -o-linear-gradient(#51e9a1,#15bc79);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#51e9a1', endColorstr='#15bc79', GradientType=0);
}
.chat_btn figure .anim {
    z-index: 0;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin: -28px auto auto -28px;
    width: 120px;
    height: 120px;
}
.chat_btn figure .anim div {
    position: absolute;
    background: rgba(48,204,147,.3);
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 0;
    height: 0;
    margin: auto;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    transition-timing-function: linear;
}
.chat_btn figure .anim_2 {
    animation: pulse 10s infinite;
    animation-delay: 3.3s;
}
.chat_btn figure .anim_3 {
    animation: pulse 10s infinite;
    animation-delay: 4s;
}
.chat_btn .hover_block {
    visibility: hidden;
    -moz-opacity: 0;
    -khtml-opacity: 0;
    -webkit-opacity: 0;
    opacity: 0;
    -ms-filter: alpha(opacity=0);
    filter: alpha(opacity=0);
    -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out;
    position: absolute;
    right: 50px;
    top: 12px;
    background: #43b38a;
    color: #FFF;
    font-size: 12px;
    font-weight: 700;
    padding: 13px 14px 14px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    white-space: nowrap;
}
.chat_btn:hover .hover_block {
    visibility: visible;
    -moz-opacity: 1;
    -khtml-opacity: 1;
    -webkit-opacity: 1;
    opacity: 1;
    -ms-filter: alpha(opacity=100);
    filter: alpha(opacity=100);
    right: 78px;
}
@keyframes pulse{0%{width:0;height:0}10%{width:120px;height:120px}100%,20%{width:0;height:0}}
	.che{position: fixed; top: 0px;bottom: 0px;background: rgba(0, 0, 0, 0.75); width: 100%;z-index: 9999;display: none;}
	.che.active{display: block;}
	.popupsdt .footer-pop{background: white;padding: 15px;}
	.popupsdt .close-pop{position: absolute; top: 5px;right: 5px}
	.popupsdt .footer-pop input[type="text"]{border:1px solid #01baaf; padding: 8px;border-radius: 5px;width: 100%;float: left;outline: none; margin-bottom: 10px;color: black}
	.popupsdt .footer-pop input[type="text"] *{color: black}
	.popupsdt .footer-pop input[type="submit"]{ width: 100px; padding: 8px; background: #ed2541;color: white;margin:auto; border:1px solid #ed2541; display: block;margin-top: 10px;outline: none; border-radius: 3px}
	.popupsdt .footer-pop input[type="submit"]:hover{background: white; border:1px solid #ed2541; color: #ed2541}
	.popupsdt .hed-pop{background: white;padding: 20px 0; }
	.popupsdt .pos-bs{position: absolute; left:0px;bottom: 0px}
	.popupsdt *{color: 	white}
	.popupsdt{position: fixed; margin:auto; width: 451px; z-index: 9999 ;top: 50px; display: none;left: 0px;right: 0px}
	.popupsdt.active{display: block;}
	.popupsdt .wrap-popup{width: 451px;display: 	block;margin:auto;background: white;position: relative;}
	.popupsdt .body-pop{background: #01baaf; padding-top: 20px;position: relative;}
	.popupsdt .body-pop .txt-pop{width: 60%;float: 	right;}
	.popupsdt .body-pop .txt-pop p strong{font-weight: bold;font-size: 115%;line-height: 25px}
	.popupsdt .body-pop .txt-pop p.red{margin: 10px 0 20px}
	.popupsdt .wrap-logo{width: 68%;float: 	right; padding-right: 10%}
	
</style>
<script type="text/javascript">
	$(".che").click(function(event) {
		/* Act on the event */
		$(".popupsdt").removeClass('active');
		$(".che").removeClass('active');
	});
	$(".chat_btn").click(function(event) {
		/* Act on the event */
		$(".popupsdt").addClass('active');
		$(".che").addClass('active');
	});
	$(".close-pop").click(function(event) {
		/* Act on the event */
		$(".popupsdt").removeClass('active');
		$(".che").removeClass('active');

	});
</script>