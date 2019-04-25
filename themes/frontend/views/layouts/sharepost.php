<div class="grp-share w100">
			<?php 
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$urlzalo = '{"url":"'.$url.'?utm_source=zalo&utm_medium=zalomsg&utm_campaign=zingdesktop"}';
			$baseurlzale = base64_encode($urlzalo);
			?>
			<ul class="the-article-share">
				<li>
					<a class="a-share-fb a-share-social" href="https://www.facebook.com/dialog/share?app_id=<?php  echo $this->ch->Appid; ?> &display=popup&caption=<?php echo $_SERVER['HTTP_HOST'] ?>&href=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank">
						<img src="/images/icfb.png"> Share
					</a>
				</li>
				<li>
					<a class="a-share-google a-share-social" href="https://plus.google.com/share?url=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank">
						<img src="/images/icgg.png"> Share
					</a>
				</li>
				<li>
					<a class="a-share-tw a-share-social" href="https://twitter.com/intent/tweet?original_referer=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>&ref_src=twsrc%5Etfw&text=aa&tw_p=tweetbutton&url=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" target="_blank">
					
					<img src="/images/ictw.png"> Tweet
					</a> 
				</li>
				<li class="zalo-share-button">
					<a href="https://sp.zalo.me/share_inline?d=<?php echo $baseurlzale ?>" title="Chia sẻ Zalo" target="_blank">
							
						<span class="ti-zalo"></span>Zalo
					</a>
					<iframe scrolling="no" frameborder="0" width="435" height="355" src="https://sp.zalo.me/share_inline?d=<?php echo $baseurlzale ?>"></iframe>
				</li>
			</ul>
		</div>
<style type="text/css">
	.the-article-share{text-align: left;width: 100%;float: left;margin-bottom: 2%}
	.the-article-share li{ padding: 0 10px 0 10px;border-radius: 3px}
	.the-article-share li:nth-child(1){background: #5e83c6; }
	.the-article-share li:nth-child(2){background: white;border: 1px solid #dcdada}
	.the-article-share li:nth-child(2) a{color: black}
	.the-article-share li:nth-child(3){background: #33b9ff}
	.the-article-share li:not(:nth-child(4)){display: inline-block;}
	.the-article-share li a{float: left;    font-weight: bold; font-size: 73%;    line-height: 21px;}
	.the-article-share li img{width: 12px;vertical-align: middle;    border-radius: 3px;}
	.ti-zalo {
    background: url(../images/icon_zalomessage.png) no-repeat 100% 100%;
    width: 13px;
    height: 13px;
    display: inline-block;
    background-size: 13px;
    vertical-align: middle;
    margin-right: 2px;
    position: absolute;
    top: 0px;left: 12px;bottom: 0px;margin: auto;
}
.zalo-share-button{width: 83px;background: #018fe5;  margin-left: 5px;display: inline-block; position: relative;}
.zalo-share-button a{width: 100%;float: left; position: relative;    padding-left: 41px;
    box-sizing: border-box;text-align: center}
.the-article-share *{color: white}
.zalo-share-button iframe{position: absolute;top: 29px;display: none}
.zalo-share-button iframe.active{display: block;}
</style>
<script type="text/javascript">

			$(".zalo-share-button a").click(function(event) {
				/* Act on the event */
				var href = $(this).attr("href");
				var left = (screen.width - 435)/2;
	            window.open(href,"_blank","width = 435, height=355, left ="+left);

			});
			
			 $(".a-share-social").click(function(){
			 	var href = $(this).attr("href");
	            if(screen.width >= 500)
	            {
	                var left = (screen.width - 500)/2;
	            }
	            else
	                left = 0;
	            window.open(href,"_blank","width = 500, height=600, left ="+left);
	        });
		</script>
