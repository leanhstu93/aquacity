
$(function(){
	$(".a-login").click(function(){
		$(".frm-login").addClass("active");
		$(".divche").show();
	});
  $(".contrinue-shopping").click(function(){
    $(".frm-login").removeClass("active");
    $(".pop-addcart").removeClass("active");
    $(".divche").hide();
  });
  $(".fancybox-close").click(function(){
    $(".frm-login").removeClass("active");
    $(".pop-addcart").removeClass("active");
    $(".divche").hide();
  });
	$(".divche").click(function(){
		$(".frm-login").removeClass("active");
		$(".pop-addcart").removeClass("active");
		$(".divche").hide();
	});
	$("a.username").click(function(){
		$(this).addClass("active");
		$(".ul-thongtintk").addClass("active");
	});
	$('li.username-li').hover(function(){
        
    },function(){
        $("a.username").removeClass("active");
		$(".ul-thongtintk").removeClass("active");
	});

		$('#topmenu>ul>li').hover(
		  function() {
			$(this).find('ul').show();
		  },
		  function() {
			$(this).find('ul').hide();
		  });

//them gio hang
/*{
"employees":[
    {"firstName":"John", "lastName":"Doe"}, 
    {"firstName":"Anna",  "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]
}*/
			$(".order.datxe").click(function(){
        var date_arr = {items:[
          {
        }
        ]};
       // var date_end = $("nha")
        var leng = $(".ngaynhanxe-start").length;
        var h = 0;
        for( var i =0; i < leng; i++)
        {
          if( $(".ngaynhanxe-end:eq("+i+")").val() != "")
          {
            if( $(".ngaynhanxe-start:eq("+i+")").val() > $(".ngaynhanxe-end:eq("+i+")").val())
            {
              alert("Ngày sau phải lớn hơn ngày trước");
              $(".ngaynhanxe-end:eq("+i+")").focus();
              return false;
            }
          }
          // kiem tra ngay nhan khac rong thi them vao data json
          if($(".ngaynhanxe-start:eq("+i+")").val() != "")
      {
        var nn = $(".ngaynhanxe-start:eq("+i+")").val() ;
        var nt = $(".ngaynhanxe-end:eq("+i+")").val();
        if(nt == "") nt = nn;
           //add ngay dang json
        date_arr.items.push(
          {ngaynhanxe: nn,ngaytraxe:nt}
          ) ;
      }
          if($(".ngaynhanxe-start:eq("+i+")").val() == ""  ) h++;
        }
        if(h == leng) 
          {
            alert("Chưa chọn ngày nhận xe  ");
            $(".ngaynhanxe-start:eq(0)").focus();
            return false;
      }       
			$(this).addClass("loading");
      $(this).hide();
      $(".loading1").show();
		  var taixe = $(".taixe").val();
     var idsp = $(this).attr("idsp"); 
     var diachi = "http://tuananh.pweb.vn/addtocart/add/" + idsp+"/"+taixe;
     $.ajax({   
    url:diachi,
     type : "post",
     cache:false,
    data:{
      date : date_arr
    },
     dataType:"json",
    success: function(dulieu) {
      if(dulieu["error"]== 1)
      {
        alert("Ngày thuê phải lớn hơn ngày hiện tại");
         $(".order.datxe").show();
        $(".loading1").hide();
        return false;
      }
       if(dulieu["error"]== 2)
      {
        alert(" '"+dulieu["datefail"]+"' Không nằm trong danh sách ngày thuê. CLick xem ngày thuê để xem danh sách ngày cho thuê!");
         $(".order.datxe").show();
        $(".loading1").hide();
        return false;
      }
      if(dulieu["error"]== 3)
      {
        alert(" '"+dulieu["datefail"]+"' có người thuê. Vui lòng chọn ngày khác!");
         $(".order.datxe").show();
        $(".loading1").hide();
        return false;
      }
      $(".pop-addcart").addClass("active");
      $(".divche").show();
      $(".order.datxe").removeClass("loading");
      $(".order.datxe").show();
        $(".loading1").hide();
      //
      $("#giohangtt").html(dulieu); 
     $(".count-cart strong").html(dulieu["0"]);
     $(".a-right .value").html(dulieu["1"]);
     $(".slgh").html("<span>"+dulieu["0"]+"</span>");
      //$("body").scrollTop(0);
       $("#cart-items-num").load("/giohangtt");
       $(".note").load("/note_themgiohang");
    },
    error: function(dulieu){
      alert("Lỗi!");
        $(".order.datxe").show();
        $(".loading1").hide();
      return false;
    }
     });
     return false;
  }); //chonhang

$(".removesp").click(function(){
   var idsp = $(this).attr("idsp");
   var taixe = 0;
   var diachi= "http://tuananh.pweb.vn/addtocart/remove/" + idsp+"/"+taixe;           
   $.ajax({ 
  url:diachi, cache:false,
  success: function(dulieu) {
       // $(".cart-main").html(dulieu);
            $(".cart-main").load("http://tuananh.pweb.vn/giohangchitiet1"); }
  });
      return false;
}); //removesp

$(".capnhatsoluong").click(function(){
     var idsp = $(this).attr("idsp");
   var soluong = $(this).parent().parent().find('#sl').val();
   var diachi= "/addtocart/update/" + idsp + "/" + soluong;
   $.ajax({   
  url:diachi, cache:false,
  success: function(dulieu) { 
            $("#giohang_detail").html(dulieu); 
           $("#giohang_detail").load("/giohangchitiet1");
           }
  });
      return false;
});//capnhatsoluong
$("#btnxoagiohang").click(function() { 
     var diachi= "/addtocart/removeall/";
     $.ajax({ url:diachi, cache:false, success: function(d) 
    { $("#giohangtt").html(d); $("#giohang_detail").html(d); }
     });
});
$("#btntieptucmuahang").click(function() {document.location="http://tolix.vn/loai/tatca/"; })
$("#btncapnhatgiohang").click(function(){
    var diachi= "/addtocart/updatecart/";
     $.ajax({   
      url:diachi, cache:false, type:'post',data:$("#formGiohang").serialize(),
  success: function(dulieu) { 
         //$("#giohangtt").html(dulieu); 
         $("#giohang_detail").load("/giohangchitiet1");
      }
    }); 
});// btncapnhatgiohang


});

