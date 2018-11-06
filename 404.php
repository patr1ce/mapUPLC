<?php
header("HTTP/1.0 404 Not Found");
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr($lang,0,2); ?>" lang="<?php echo substr($lang,0,2); ?>" dir="ltr" prefix="og: http://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link rel="icon" href="./assets/img/logo.png" sizes="32x32" />
<link rel="icon" href="./assets/img/logo.png" sizes="192x192" />
<meta name="robots" content="noindex,follow">
<link rel="stylesheet" type="text/css" href="./assets/css/events-map.css">
<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Merriweather:400,900,700' />
<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Lato:100,900,700,400,300' />
<?php echo "<title>".$locale["INDEX_TITLE"]."</title>";?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N4VHRC7');</script>
<!-- End Google Tag Manager -->

</head>
<body class='list-view initial-view'>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4VHRC7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section id='header'>
  <div class='lato'>
    <div class="main-title-area">
      <div style="margin-bottom: 4px;">
        <div id='spiel'>
          <strong><?php echo $locale["INDEX_HEADER1"]; ?></strong><br>
          <?php echo $locale["INDEX_SUBTITLE1"]; ?>
  
        </div>
      </div>
    </div> 
  
    <nav>
      <ul id="nav">
       <!-- <a style="color: white;" href="./climate-map.html"><li class="nav-contribute">EN</a></li>-->
        <li class="nav-contribute"><a style="color: white;" href="./"><?php echo $locale["INDEX_CURRENTEVENT"]; ?></a></li>
        <li><a href="../" class="contribute contribute-big"><?php echo $locale["INDEX_HOME"]; ?></a></li>
        <li>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-text="" data-related="" data-count="none"><?php echo $locale["INDEX_TWEET"]; ?></a>&nbsp;&nbsp;<div class="fb-share-button" data-href="" data-layout="button">
          <a href="javascript:fbShare('', 'Fb Share', 'Facebook share popup', 'h', 520, 350)"><img src='./assets/img/icon/fb.png' alt="facebook" /><span><?php echo $locale["INDEX_SHARE"]; ?></span></a></div>
  
        </li>
      </ul>
    </nav>
    <div style="clear: both"></div>
  </div>
</section>
<section id='area404' class="lato" style="height:calc(100vh - 70px); min-height:200px; text-align:center; background-color:#EDEDED; line-height:1.5; padding-top: calc(50vh - 180px);">
   <p style="font-size:64px;"><?php echo $locale['404_MESSAGE'] ?></p>
   <p style="font-size:20px;"><a href="./"><?php echo $locale['404_BACKTOMAP']; ?></a></p>
</section>


<!-- SOCIAL -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125394386-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125394386-1');
</script>


  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^https:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
</script>
</body>
</html>
