<?php
$config['default_locale']='fr-FR';
if(preg_match('/^\/climate-map/',$_SERVER['REQUEST_URI'])) {
  $config['default_locale']='en-US'; 
}

$config['additional_css']='./assets/css/citizens-for-climate.css';