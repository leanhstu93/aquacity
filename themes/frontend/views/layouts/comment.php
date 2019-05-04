<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : appid,
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 <div class="comments-area mb-30">
   <style type="text/css">
       .fb_iframe_widget,
        .fb_iframe_widget span,
        .fb_iframe_widget span iframe[style] {
          min-width: 100% !important;
          width: 100% !important;
        }

   </style>
    <!-- Heading -->
    <div class="primary-heading">
        <h2>Bình luận</h2>
    </div>
    <!-- Heading -->

    <div class="comment-holder p-30 light-shadow white-bg">
        <!-- comment list -->
  <div class="fb-comments" data-href="<?php $_SERVER['REQUEST_URI'] ?>" data-numposts="5"></div>
        <!-- comment list -->
    </div>
</div>