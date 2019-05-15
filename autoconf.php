<?php

// recupere le nom de domaine courant (ndd)
$askeddomain=null;
if(isset($_SERVER['HTTP_HOST'])) {
	$askeddomain = $_SERVER['HTTP_HOST'];
} elseif(isset($_SERVER['SERVER_NAME'])) {
	$askeddomain = $_SERVER['SERVER_NAME'];
} else {
  // par défaut
	$askeddomain = '';
}
// supprime le numéro de port si présent
$portpos=strpos($askeddomain, ':');
if(!$portpos===false) {
	$askeddomain=substr($askeddomain,0,$portpos);
}
$askeddomain=strtolower($askeddomain);


// charge la config
$config=array();
require_once('./confs/default/config.php');
if(file_exists('./confs/'.$askeddomain.'/config.php'))
  include_once('./confs/'.$askeddomain.'/config.php');

// detecte la longue et charge les libelles localises
$lang=$config['default_locale'];
if(isset($_GET['locale']) && $_GET['locale']!='')
  $lang = $_GET['locale'];
$validValues = array('fr-FR','en-US');
if (!in_array($lang, $validValues, true)) 
  $lang=$config['default_locale'];

include('./locales/default/'.$lang.'.php');

/*
if (strpos($_SERVER["HTTP_URI"]), "deplastification") {
	include('./locales/default/'."fr-FR-plastic".'.php');

	else{
		
	}
}
*/
// surcharges les libelles par la variante personnalisee
if(file_exists('./locales/'.$askeddomain.'/'.$lang.'.php'))
  include_once('./locales/'.$askeddomain.'/'.$lang.'.php');
