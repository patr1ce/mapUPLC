<?php
$config['default_locale']='en-US';
if(preg_match('/^\/fr/i',$_SERVER['REQUEST_URI'])) {
  $config['default_locale']='fr-FR'; 
}

$config['additional_css']='./assets/css/citizens-for-climate.css';
