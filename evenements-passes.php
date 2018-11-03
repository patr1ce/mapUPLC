  <!doctype html>

<script src="assets/js/jquery.min.js"></script>

<?php 

$lang='fr-FR';
if(isset($_GET['locale']) && $_GET['locale']!='')
  $lang = $_GET['locale'];
$validValues = array('fr-FR','en-US');
if (!in_array($lang, $validValues, true)) 
    $lang='fr-FR';

include('./assets/locales/'.$lang.'.php');
?>
<script>
require("./assets/locales/<?php echo $lang; ?>.js");
</script>


<head>
  <link rel="icon" href="https://united4earth.org/wp-content/uploads/2018/09/cropped-logo-1-32x32.jpg" sizes="32x32" />
<link rel="icon" href="https://united4earth.org/wp-content/uploads/2018/09/cropped-logo-1-192x192.jpg" sizes="192x192" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="title" content="">
<meta name="description" content="Une carte pour trouver des intiatives pour agir sur les problèmes climatiques. Rejoignez des groupes et des évenements ctioyens prêt de chez vous en un clic !">
<meta property="og:type" content="website" />
<meta name="keywords" content="carte, climat, unis pour le climat, uplc, marches">
<meta property="og:image" content="https://united4earth.org/wp-content/uploads/2018/09/logo-1.jpg" />
<meta property="og:url" content="https://united4earth.org/fr/marche-climat/" />
<meta property="og:title" content="Carte interactive des initiatives pour le climat"/>
<meta property="og:description" content="Une carte pour trouver des intiatives pour agir sur les problèmes climatiques. Des groupes et des évenements prêt de chez vous en un clic."/>
<link href='//api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<meta name="canonical" href="https://united4earth.org/fr/marche-climat/">
<link rel="alternate" hreflang="FR_fr" href="https://united4earth.org/climate-map.html" />

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
<div id="header" class='lato'>

  <div class="main-title-area">
    <div style="margin-bottom: 4px;">
      <div id='spiel'>
        <strong><?php echo $locale["INDEX_HEADER1"]; ?></strong><br>
        <?php echo $locale["INDEX_SUBTITLE1"]; ?>

      </div>
        <div id='spiel'>
      
    </div>
  </div> 

  <nav>
    <ul id="nav">
     <!-- <a style="color: white;" href="./climate-map.html"><li class="nav-contribute">EN</a></li>-->
      <li class="nav-contribute"><a style="color: white;" href="./inde.php" id="linktopastevt"><?php echo $locale["INDEX_CURRENTEVENT"]; ?></a></li>
      <script>if(lang=='en-US') document.getElementById('lnktofutur').setAttribute('href','./climate-map.html?locale=en-US');</script>
      <li><a href="../" class="contribute contribute-big"><?php echo $locale["INDEX_HOME"]; ?></a></li>
      <li>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-text="" data-related="" data-count="none"><?php echo $locale["INDEX_TWEET"]; ?></a>&nbsp;&nbsp;<div class="fb-share-button" data-href="" data-layout="button">
        <a href="javascript:fbShare('', 'Fb Share', 'Facebook share popup', 'h', 520, 350)"><img src='./assets/img/icon/fb.png' /><span><?php echo $locale["INDEX_SHARE"]; ?></span></a></div>

      </li>
    </ul>
  </nav>
  <div style="clear: both"></div>
</div>
</section>
<section id='activity-area' class='clearfix'>
  <article id='events'>
    <div id='filters'>
      <div id='loading-icon' class='lato'><?php echo $locale["INDEX_LOADING"]; ?></div>
      <h3 id='switch-link'>
          <a href='javascript: void(null)' onclick='window.mapManager.toMapView()' id='to-map-view'><?php echo $locale["INDEX_SEEMAP"]; ?></a>
        <a href='javascript: void(null)' onclick='window.mapManager.toListView()' id='to-list-view'><?php echo $locale["INDEX_SEEMAP"]; ?></a>
      </h3>
      <h4 class='lato title'>
        <span id='screen-title'><?php echo $locale["INDEX_FILTERS"]; ?></span>
        <span id='mobile-title'><?php echo $locale["INDEX_MOBILE"]; ?></span>
      </h4>
      <form id='filter-form'>
        <table>
          <tr>
            <td>
              <h5 class='lato'><?php echo $locale["INDEX_ZIPCODE"]; ?></h5>
              <?php echo "<input type='text' name='zipcode' maxlength='5' placeholder='".$locale["INDEX_ZIPCODE"]."'onclick=\"this.select();\" >";?>
            </td>
            <td>
              <h5 class='lato'><?php echo $locale["INDEX_DISTANCE"]; ?></h5>
              <select name='distance'>
                <option value='5'><?php echo $locale["INDEX_DISTANCE5"]; ?></option>
                <option value='20'><?php echo $locale["INDEX_DISTANCE20"]; ?></option>
                <option value='50' selected='selected'><?php echo $locale["INDEX_DISTANCE50"]; ?></option>
                <option value='100'><?php echo $locale["INDEX_DISTANCE100"]; ?></option>
              </select>
            </td>
            <td>
              <h5 class='lato'><?php echo $locale["INDEX_FILTERBY"]; ?></h5>
              <select name='sort'>
                <option value='time'><?php echo $locale["INDEX_TIME"]; ?></option>
                <option value='distance' selected='selected'><?php echo $locale["INDEX_DISTANCE"]; ?></option>
              </select>
              <input type='button' style='position: absolute; z-index: -1; opacity: 0;' id='hidden-button'/>
            </td>
          </tr>
        </table>
        <div id='filter-popup-area' class='lato'>
          <a href='javascript: void(null)' class='filter-button show-filter' onclick='$("#events").addClass("show-type-filter");'>
            <?php echo $locale["INDEX_SEARCH"]; ?>
          </a>
          <div id='filter-list-area'>
            <h5><?php echo $locale["INDEX_SEARCH"]; ?></h5>
            <div id='f-container'>
              <div id='filter-list-container'>
                <ul id='filter-list'></ul>
              </div>
              <div style='text-align: center; font-size: 11px; margin-top: 10px; color: lightgray;'>
              <a href='javascript: void(null)' id='show-all'
                 onclick='$("#filter-list").find("input[type=checkbox]").prop("checked", true).trigger("change");'><?php echo $locale["INDEX_SEEALL"]; ?></a> &bull;
              <a href='javascript: void(null)'
                 onclick='$("#filter-list").find("input[type=checkbox]").prop("checked", false).trigger("change")'><?php echo $locale["INDEX_HIDEALL"]; ?></a>
              </div>
            </div>
            <p align='right'>
              <a href='javascript: void(null)' class='filter-button'
                 onclick='$("#events").removeClass("show-type-filter");'>
                <?php echo $locale["INDEX_HIDELEGEND"]; ?>
              </a>
            </p>
          </div>
        </div>
      </form>
    </div>

    <div id='event-list-container'>
      <div id='hide-show-office' data-count="0">
        <a href='javascript: void(null)' class='contribute-big show-office' onclick='$("body").addClass("show-office")'>
          <span class='show-offices'>&#8882; <?php echo $locale["INDEX_SEEOFFICE"]; ?> (<span id='campaign-off-count'></span>)</span>
        </a>
        <a href='javascript: void(null);' class='contribute-big hide-office' onclick='$("body").removeClass("show-office")'>
          <span class='hide-offices'>&#8883; <?php echo $locale["INDEX_HIDEOFFICE"]; ?></span>
        </a>
      </div>
      

      <footer>
        <div id='footer-area' >
          <h5><?php echo $locale["INDEX_HEADER2"]; ?></h5>
          
        </div>
<div></div>


  <div style="">
 <!-- <a id="click-ulule" href="https://fr.ulule.com/citizen-lobbying/" target="_blank" style="color: white;"><div style="margin: 10% auto 5% auto;width: 80%;background-color: #ea504e;padding: 2%;">
<p style="vertical-align: bottom; text-align: center;font-weight: bolder;text-transform: uppercase;">J-2 FINANCEMENT LOBBY CITOYEN</a></p>
</div>
  <p><img class="no-mobile" alt="Logo United4Earth" style="margin-left:10%;border: 0px solid black" src="https://united4earth.org/wp-content/uploads/2018/10/french-video-gif-no-repeat.gif"  width="80%" ></p>
</div>-->
      </footer>

    </div>
  </article>
  <article id='map'>
    <div id='map-container'></div>
  </article>
</section>
<section id='campaign-offices'>
  <div class='viewport'>
    <h3 class='title'>Nearby Campaign Offices</h3>
    <a class='close-button lato' href='javascript: void(null);' onclick='$("body").removeClass("show-office")'>x</a>
    <div class='container'>
      <ul id='campaign-office-list'></ul>
    </div>
  </div>
</section>


<script src='assets/js/d3' type='text/javascript'></script>
<script id='zipcodes-datadump' type='text/plain'></script>
<script src='//dcxc7a0ls04u1.cloudfront.net/js/deparam.min.gz'></script>
<script src='assets/js/mapbox'></script>
<!-- <script src='/assets/js/leaflet-bouncer.js'></script> -->
<script src='//dcxc7a0ls04u1.cloudfront.net/js/moment.min.js'></script>
<script src='./assets/js/js-cookie.js'></script>
<script src='./assets/js/MapManager.js'></script>
<script type='text/javascript'>
window.eventTypeFilters = [
  {
    name: '<?php echo $locale["INDEX_PASTEVENT"];?>',
    id: 'Marches'
  },
  {
    name: '<?php echo $locale["INDEX_GROUPS"];?>',
    id: 'campaign-office'
  },
  {
    name: '<?php echo $locale["INDEX_OTHER"];?>',
    id: 'other'
  }
];
</script>
<script type='text/javascript'>
(function($, d3) {
var date = new Date();
$("#loading-icon").show();
$.ajax({
  url: 'assets/d/event-data-1310.json',
  dataType: 'script',
  cache: true, // otherwise will get fresh copy every page load
  success: function(data) {
    d3.csv('assets/d/campaign-offices.csv',
      function(campaignOffices) {
        //Load zipcodes
        //dcxc7a0ls04u1.cloudfront.net
        d3.csv('assets/d/postal_codes.csv',
         function(zipcodes) {
           $("#loading-icon").hide();
          //Clean data
          window.EVENT_DATA.results.forEach(function(d) {
            d.filters = [];
            //Set filter info
            switch(d.event_type_name) {
              case "Actions": d.filters.push("Actions"); break;
              case "Marches": d.filters.push("Marches"); break;
              case "office": d.filters.push("campaign-office"); break;
              default: d.filters.push('other'); break;
            }

          });

          var oldDate = new Date()


          window.EVENT_DATA.results = window.EVENT_DATA.results.concat(
            campaignOffices.map(function(d){
              return {
                filters: d.type == 'office' ? ["campaign-office"] : ["gotv-center"],
                url: "https://maps.google.com?saddr=Current+Location&daddr=" + encodeURIComponent(d.address),
                longitude: d.lon,
                latitude: d.lat,
                name: d.name,
                location: d.state,
                event_type_name: d.type == 'office' ? '<?php echo $locale["INDEX_GROUPS"];?>' : "GOTV Center",
                capacity: 0,
                id_obfuscated: d.address,
                phone: d.phone,
                is_official: false,
                image: d.type == 'office' ? d.photo : null,
                is_campaign_office: d.type == 'office',
                is_gotv_center: d.type == 'gotv',
                opening_event: d.opening_event == "" ? null : d.opening_event
              };
            })
          );

          /* Extract default lat lon */
          var m = /.*\?c=(.+?),(.+?),(\d+)z#?.*/g.exec(window.location.href)
          if (m && m[1] && m[2] && m[3]) {
            var defaultCoord = {
              center: [parseFloat(m[1]), parseFloat(m[2])],
              zoom: parseInt(m[3])
            };
            window.mapManager = MapManager(window.EVENT_DATA.results, campaignOffices, zipcodes, { defaultCoord: defaultCoord });
            var params = $.deparam
            window.mapManager.filterByCoords(defaultCoord.center, 50, params.sort, params.f);
          } else {
            window.mapManager = MapManager(window.EVENT_DATA.results, campaignOffices, zipcodes);
          }

          if($("input[name='zipcode']").val() == '' && Cookies.get('map.uplc.zipcode') && window.location.hash == '') {
            $("input[name='zipcode']").val(Cookies.get('map.uplc.zipcode'));
            window.location.hash = $("#filter-form").serialize();
          } else {
            $(window).trigger("hashchange");
          }
        });
      }
    );
  }, error: function(a,b,c) {
    console.log("ERROR", b,c);
  }
});

// Registration Data items
d3.csv('assets/d/registration-data.csv', function(votinginfo) {
  window.votingInfoManager = VotingInfoManager(votinginfo);
})

 /** initial loading before activating listeners...
  */

 var params = $.deparam(window.location.hash.substring(1));
  if (params.zipcode) {
    $("input[name='zipcode']").val(params.zipcode);
  }

  if (params.distance) { $("select[name='distance']").val(params.distance);}
  if (params.sort) { $("select[name='sort']").val(params.sort);}

/* Prepare filters */
$("#filter-list").append(
  window.eventTypeFilters.map(function(d) {
    return $("<li />")
              .append(
                $("<input type='checkbox' class='filter-type' />")
                    .attr('name', 'f[]')
                    .attr("value", d.id)
                    .attr("id", d.id)
                    .prop("checked", !params.f ? true : $.inArray(d.id, params.f) >= 0)
              )
              .append($("<label />").attr('for', d.id).append($("<span />").addClass('filter-on')
                        .append(d.onItem ? d.onItem : $("<span>").addClass('circle-button default-on')))
              .append($("<span />").addClass('filter-off')
                        .append(d.offItem ? d.offItem : $("<span>").addClass('circle-button default-off')))
                        .append($("<span>").text(d.name)));
  })
);
/***
 *  define events
 */
 //only numbers and letters
 $("input[name='zipcode']").on('keyup keydown', function(e) {
  if (e.type == 'keydown' && ((e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 65 || e.keyCode > 90) && (e.keyCode < 97 || e.keyCode > 122))
      && e.keyCode != 8 && !(e.keyCode >= 37 || e.keyCode <= 40)) {
    return false;
  }

  if (e.type == 'keyup' && $(this).val().length == 5) {
    if (! ((e.keyCode >= 37 && e.keyCode <= 40)  || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 97 && e.keyCode <= 122)) ) {
      $(this).closest("form#filter-form").submit();
      $("#hidden-button").focus();
    }
  }
 });

 /***
  *  onchange of select
  */
  $("select[name='distance'],select[name='sort']").on('change', function(e) {
    $(this).closest("form#filter-form").submit();
  });

  /**
  * On filter type change
  */
  $(".filter-type").on('change', function(e) {
    $(this).closest("form#filter-form").submit();
  })

 //On submit
 $("form#filter-form").on('submit', function(e) {
  var serial = $(this).serialize();
  window.location.hash = serial;
  e.preventDefault();
  return false;
 });

 $(window).on('hashchange', function(e) {

  var hash = window.location.hash;
  if (hash.length == 0 || hash.substring(1) == 0) { $("#loading-icon").hide(); return false; }

  var params = $.deparam(hash.substring(1));

  //Custom feature for specific default lat/lon
  //lat=40.7415479&lon=-73.8239609&zoom=17

  setTimeout(function() {
    $("#loading-icon").show();

    if ( window.mapManager._options && window.mapManager._options.defaultCoord && params.zipcode.length != 5) {
      window.mapManager.filterByType(params.f);
      window.mapManager.filterByCoords(window.mapManager._options.defaultCoord.center, params.distance, params.sort, params.f);
    } else {
      window.mapManager.filterByType(params.f);
      window.mapManager.filter(params.zipcode, params.distance, params.sort, params.f);
    }
    $("#loading-icon").hide();

    var $info = window.votingInfoManager.getInfo(window.mapManager._zipcodes[params.zipcode].state);
    $(".registration-msg").remove();
    if ($info) {
      $info.prependTo("#event-list-container");
    }

  }, 10);
  // $("#loading-icon").hide();
  if (params.zipcode.length == 5 && $("body").hasClass("initial-view")) {
    $("#events").removeClass("show-type-filter");
    $("body").removeClass("initial-view");
  }
 });

  var pre = $.deparam(window.location.hash.substring(1));
  if ($("body").hasClass("initial-view")) {
    if ($(window).width() >= 600 && (!pre.zipcode || pre && pre.zipcode.length != 5)) {
      $("#events").addClass("show-type-filter");
    }
  }


})(jQuery, d3);

</script>

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
</body>
<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
</script>