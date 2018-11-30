<?php
$config['default_locale']='fr-FR';
if(isset($_GET['lang']) && $_GET['lang']=='en') {
  $config['default_locale']='en-US'; 
}

$config['additional_css']='./assets/css/citizens-for-climate.css';
