<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="<?php echo substr($lang,0,2); ?>" lang="<?php echo substr($lang,0,2); ?>" dir="ltr" prefix="og: https://ogp.me/ns#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<script src="assets/js/jquery.min.js"></script>
<script>
function require(script) {
    $.ajax({
        url: script,
        dataType: "script",
        async: false,           // <-- This is the key
        success: function () {
            // all good...
        },
        error: function () {
            throw new Error("Could not load script " + script);
        }
    });
}
require("./assets/locales/<?php echo $lang; ?>.js");

</script>

<link rel="icon" href="./assets/img/logo.png" sizes="32x32" />
<link rel="icon" href="./assets/img/logo.png" sizes="32x32" />
<link rel="icon" href="./assets/img/logo.png" sizes="192x192" />
<meta name="title" content="<?php echo $locale["META_TITLE"]; ?>">
<meta name="description" content="<?php echo $locale["META_DESC"]; ?>">
<meta property="og:type" content="website" />
<meta name="keywords" content="<?php echo $locale["META_KEYWORD"]; ?>">
<meta property="og:image" content="https://united4earth.org/wp-content/uploads/climate-event-map-2.png" />
<meta property="og:url" content="/" />
<meta property="og:title" content="<?php echo $locale["META_OGTITLE"]; ?>"/>
<meta property="og:description" content="<?php echo $locale["META_OGDESC"]; ?>"/>
<link href='//api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css' rel='stylesheet' />
<meta name="robots" content="index,follow">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<link rel="canonical" href="<?php echo $locale["INDEX_CANONICAL"]; ?>">
<?php
if($lang!='en') {
  echo '<link rel="alternate" hreflang="en-US" href="'.$locale["INDEX_HREFLANG_EN"].'">';
}
if($lang!='fr') {
  echo '<link rel="alternate" hreflang="fr-FR" href="'.$locale["INDEX_HREFLANG_FR"].'">';
}
?>

<!-- shared css -->
<link rel="stylesheet" type="text/css" href="./assets/css/events-map.css">

<!-- site specific css -->
<?php
if(!empty($config['additional_css'])) echo '<link rel="stylesheet" type="text/css" href="'.$config['additional_css'].'">';
?> 

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

<section id='header' >
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
      <ul id="nav" >
       <!-- <a style="color: white;" href="./climate-map.html"><li class="nav-contribute">EN</a></li>-->
        
          <a href="<?php echo $locale['LINK_HOME']; ?>" class="contribute contribute-big"><li>
            <?php echo $locale["INDEX_HOME"]; ?>
        </li></a>

          <a class="contribute contribute-big" href="<?php echo $locale["INDEX_CLP_LINK"]; ?>"><li><?php echo $locale["INDEX_CLP"]; ?>
        </li></a>
       
          <a href="<?php echo $locale["INDEX_NEWEVENT_LINK"]; ?>" class="contribute contribute-big" target="_blank">
            <li><?php echo $locale["INDEX_NEWEVENT"]; ?>
        </li></a>
        

        <a class="contribute contribute-big"  href="<?php if($lang=='en-US') echo './past-events'; else echo './evenements-passes'; ?>">
          <li><?php echo $locale["INDEX_PASTEVENT"]; ?>
        </li></a>
        <a style="color: white;" href="<?php echo $locale["INDEX_LANG_CHANGE_LINK"]; ?>"> <li class="nav-contribute">
          <?php echo $locale["INDEX_LANG_CHANGE"]; ?>
        </li></a>

        <li>
          <a href="https://twitter.com/share" class="social-media" data-url="" data-text="" data-related="" data-count="none"><img src="./assets/img/icon/twitter-new.png"> </a>&nbsp;&nbsp;<div class="fb-share-button" data-href="" data-layout="button">
          <a href="javascript:fbShare()"><img src='./assets/img/icon/facebook-new.png' alt="facebook" /><span><?php echo $locale["INDEX_SHARE"]; ?></span></a></div>
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
              <?php echo "<input type='text' name='zipcode' maxlength='5' placeholder='".$locale["INDEX_ZIPCODE"]."' onclick=\"this.select();\" >";?>
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
              <input type='button' style='position: absolute; z-index: -1; opacity: 0;' id='hidden-button' value=' '/>
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
            <p>
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
          <p><img class="no-mobile" alt="People of the world together for Earth" style="margin-left:10%;border: 0px solid black" src="https://united4earth.org/wp-content/uploads/yak-earth-citizens.jpg"  width="80%" ></p>

        </div>
      </footer>
    </div> 

 <!--
  <div style="">
 <a id="click-ulule" href="https://fr.ulule.com/citizen-lobbying/" target="_blank" style="color: white;"><div style="margin: 10% auto 5% auto;width: 80%;background-color: #ea504e;padding: 2%;">
<p style="vertical-align: bottom; text-align: center;font-weight: bolder;text-transform: uppercase;">J-2 FINANCEMENT LOBBY CITOYEN</a></p>
</div>

</div>
-->
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
<script src='./assets/js/moment.min.js'></script>
<script src='./assets/js/js-cookie.js'></script>
<script src='./assets/js/MapManager.js'></script>
<script type='text/javascript'>
window.eventTypeFilters = [
  {
    name: '<?php echo $locale["INDEX_EVENT1"];?>',
    id: 'Plastic attacks'
  },
  {
    name: '<?php echo $locale["INDEX_EVENT2"];?>',
    id: 'Boycott citoyen'
  },
  {
    name: '<?php echo $locale["INDEX_EVENT3"];?>',
    id: 'Communication'
  },
    {
    name: '<?php echo $locale["INDEX_EVENT4"];?>',
    id: 'Climate Challenge'
  },
    {
    name: '<?php echo $locale["INDEX_EVENT5"];?>',
    id: 'Lobbying Citoyen'
  },
    {
    name: '<?php echo $locale["INDEX_EVENT6"];?>',
    id: 'Déplot de plastique'
  },
    {
    name: '<?php echo $locale["INDEX_EVENT7"];?>',
    id: 'Sensibilisation de commerçants'
  },

    {
    name: '<?php echo $locale["INDEX_EVENT8"];?>',
    id: 'Sensibilisation d\'entreprise'
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
  url: 'assets/d/deplastification-event.json',
  dataType: 'script',
  cache: true, // otherwise will get fresh copy every page load
  success: function(data) {
    d3.csv('assets/d/deplastification-global.csv',
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
              case "Plastic attacks": d.filters.push("Plastic attacks"); break;
              case "Boycott citoyen": d.filters.push("Boycott citoyen"); break;
              case "Communication": d.filters.push("Communication"); break;
              case "Climate Challenge": d.filters.push("Climate Challenge"); 
              break;
              case "Lobbying Citoyen": d.filters.push("Lobbying Citoyen"); 
              break;
              case "Déplot de plastique": d.filters.push("Déplot de plastique"); 
              break;
              case "Sensibilisation de commerçants": d.filters.push("Sensibilisation de commerçants"); 
              break;
              case "Sensibilisation d'entreprise": d.filters.push("Sensibilisation d'entreprise"); 
              break;
              //case "fridayfuture": d.filters.push("fridayfuture"); break;
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
<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('https://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
</script>
</body>
</html>