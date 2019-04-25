$(function(){
	$("#spin-up").click(function(event) {
		/* Act on the event */
		var val = $(".add-to-cart .input-text").val();
		var val =parseInt(val);
		if(val < 0) val =0;
		val++;
		$(".add-to-cart .input-text").val(val);
	});
	$(".increase-quantity").click(function(event) {
		/* Act on the event */
		var val = $(this).parent().parent().find(".cart-qua-text").val();
		var val =parseInt(val);
		if(val < 0) val =0;
		val++;
				$(this).parent().parent().find(".cart-qua-text").val(val);
	});
	$("#spin-down").click(function(event) {
		/* Act on the event */
		var val = $(".add-to-cart .input-text").val();console.log(val);
		var val =parseInt(val);
		val--;
		if(val <= 0) val =1;

		$(".add-to-cart .input-text").val(val);
	});
	$(".decrease-quantity").click(function(event) {
		/* Act on the event */
		var val = $(this).parent().parent().find(".cart-qua-text").val();
		var val =parseInt(val);
		val--;
		if(val <= 1) val =1;
		$(this).parent().parent().find(".cart-qua-text").val(val);
	});
	$(".btn-cart").click(function(event) {
		/* Act on the event */
		var idsp = $(this).attr("idsp");
		var qua = $(".inp-quantity").val();
		qua =parseInt(qua);
		$.ajax({
			url: "/site/addtocart",
			type: "post",
			dataType: "json",
			data: {
				idsp: idsp,
				qua : qua
			},
		success : function(result){
			alert("Thêm vào giỏ hàng thành công!");
		},
		error : function(){
			alert("Thêm vào giỏ hàng thất bại!");
		}
	});
	});
	$(".wrp-restart").click(function(event) {
		/* Act on the event */
		var idsp = $(this).attr("idsp");
		var qua = $(this).parent().find(".cart-qua-text").val();
		qua = parseInt(qua);
		$.ajax({
			url: "/site/Viewcartajax",
			type: "post",
			dataType: "html",
			data: {
				idsp: idsp,
				qua : qua
			},
			success : function(result){
				alert("Cập nhật thành công!");
				$(".view-cart").html(result);
			},
			error : function(){

			},
		});
	});
	$(".btn-remove-all").click(function() { 
	     var diachi= "/site/removeAllcart";
	     $.ajax({ url:diachi, cache:false, success : function(result){
				alert("Xóa giỏ hàng thành công!");
				$(".view-cart").html(result);
			},
			error : function(){

			},
	     });
	});

	$("#btncapnhatgiohang").click(function(){
    var diachi= "/site/Capnhatgiohang";
    console.log($("#formGiohang").serialize());
     $.ajax({ 	
      url:diachi, cache:false, type:'post',data:$("#formGiohang").serialize(),
	success : function(result){
				alert("Cập nhật thành công!");
				$(".view-cart").html(result);
			},
    }); 
});// btncapnhatgiohang

	/* deleta giohang */
	$(".btn-cart-delete").click(function(event) {
		/* Act on the event */
		var idsp = $(this).attr("idsp");
		$.ajax({
			url: "site/removecart",
			type: "post",
			dataType: "html",
			data:{
				idsp : idsp
			},
			success : function(result){
				$(".view-cart").html(result);
			}
		});
	});
	/* end delete giohang*/
	$(window).scroll(function(){
			if($(this).scrollTop()>250){
				$(".menu").addClass("fix-scroll");
				
			}
			else{
				$(".menu").removeClass("fix-scroll");
			}
		});
	$(".sl-lang").change(function(event) {
		/* Act on the event */
		var lang = $(this).val();
		window.location="/Languagechange/"+lang;
	});
})