<style type="text/css">
	.wrap-pop{width: 640px; display: block; position: fixed; top: 50px;right: 0px;left: 0px;margin:auto;background:url(images/HTB1.0L9QpXXXXXDXFXX760XFXXXP.png) no-repeat; background-size: 100% 100%; display: none;z-index: 999}
	.wrap-pop.active{display: block;}
	.wrap-pop .tt-pop{width: 100%;float: left;padding-top: 20px;color: white; text-align: center;font-size: 225%;margin-bottom: 15px;margin-top: 30px}
	.wrap-pop .txt-pop{color: white;text-align: center;    margin-bottom: 15px}
	.wrap-pop .newuser-coupon-info{
		width: 294px;
    height: 133px;
    padding: 0 0 0 20px;
    margin: 0 auto 25px;
     background: url(images/sprites-icon.b4f713be.png) no-repeat -3px -53px;display: flex; margin-bottom: 80px;
	}
	.wrap-pop .newuser-coupon-title{float: left;
    width: 20px;
    height: 123px;
    overflow: hidden;
    padding: 5px 0;
    font-size: 20px;
    writing-mode: tb-rl;color: white;padding-top: 24px}
    .wrap-pop .newuser-coupon-denomination{
    	float: left;color: white;
    padding: 20px 0 0 20px;
    width: 250px;
    font-size: 72px;
    line-height: 80px;text-align: center;padding-top: 15px;
    }
    .btn-close-pop{    position: absolute;
    right:5px;
    top: 5px;}
    @media screen and (max-width: 650px) {
    	.wrap-pop{width: 100% }
    	.wrap-pop .txt-pop{padding: 0 7%}
    }
</style>
<script type="text/javascript">
$(function(){
	$(".btn-close-pop").click(function(event) { 
		/* Act on the event */
		var has = $(".wrap-pop").hasClass('active');
		if(has == false)
			$(".wrap-pop").addClass('active');
		else
			$(".wrap-pop").removeClass('active');
	});
})
</script>
<div class="wrap-pop active">
	<div class="tt-pop">
		Khuyến mãi đặc biệt
		<img class="btn-close-pop" src="/images/letter-x.png">
	</div>
	<div class="txt-pop w100">
		Khuyến mãi từ 20-7 -> 26-7 áp dụng cho 500 đơn hàng đầu tiên tại TP.HCM
	</div>
	<div class="newuser-coupon-info">
		<div class="newuser-coupon-title">
			sales off
		</div>
		<div class="newuser-coupon-denomination">
			20%
		</div>
	</div>
</div>