<div class="wrap-mess-fb active">
	<label>Facebook Chat</label>
	<div class="fb-page"
	     data-href="<?php echo $this->ttc->Facebook ?>"
	     data-tabs="messages"
	     data-width="400"
	     data-height="300"
	     data-small-header="true">
	    <div class="fb-xfbml-parse-ignore">
	        <blockquote></blockquote>
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$(".wrap-mess-fb").click(function(event) {
			/* Act on the event */
			var has = $(this).hasClass('active');
			if(has == true)
			{
				$(this).removeClass('active');
			}
			else
				$(this).addClass('active');
		});
	})
</script>
<style type="text/css">

	.wrap-mess-fb{width: 300px;position: fixed;bottom: -300px;right: 0;webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;z-index: 999}
	.wrap-mess-fb.active{bottom: 0}
	.wrap-mess-fb label{width: 100%;float: left;
    height: 36px;
    padding: 3px 8px;
    line-height: 36px;
    color: #fff;
    text-align: center;
    background: url(images/arrowtop.png) no-repeat #3a5795 right 10px center;
    background-size: 13px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    margin: 0px;
    cursor: pointer;
    position: relative;
    bottom: -1px;
    	z-index: 9;
	}
    .wrap-mess-fb.active label{
    	background: url(images/arrowbottom.png) no-repeat #3a5795 right 10px center;
    	background-size: 13px;
    }
</style>