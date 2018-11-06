<?php
$config['default_locale']='fr-FR';

if(preg_match('/^\/climate-map/',$_SERVER['REQUEST_URI']))
  $config['default_locale']='en-US'; 
