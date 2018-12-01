<?php
$config['default_locale']='fr-FR';
if((isset($_GET['lang']) && $_GET['lang']=='en') || preg_match('/^\/en/i',$_SERVER['REQUEST_URI'])) {
  $config['default_locale']='en-US'; 
}

$config['additional_css']='./assets/css/citizens-for-climate.css';
