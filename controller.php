<?php
include('autoconf.php');
$uri=$_SERVER['REQUEST_URI'];

// index
if(preg_match("/\/index[.](php|htm|html)(\/?)$/i",$uri)) {
  $p=strrpos($uri,'/',-2);
  $uri=substr($uri,0,$p+1);
  header("Location: ".$uri,TRUE,301);
  exit;
}
if($uri==='' || $uri==='/') {
  include('index.php');
  exit;
}

// uri terminant par .php
if(preg_match('/[.]php$/i',$uri)) {
  $uri=substr($uri,0,-4);
  header("Location: ".$uri,TRUE,301);
  exit;
}
// url terminant par /
if(preg_match('/.\/$/',$uri)) {
  // correspond à un fichier php existant ?
  $p=strrpos($uri,'/',-2);                                             
  $filename=rtrim(substr($uri,$p+1),'/');
  $filepath=realpath($_SERVER["DOCUMENT_ROOT"].'/'.$filename.'.php');
  if($filepath!==false) {  
    header("Location: ".substr($uri,0,-1),TRUE,301);
    exit;
  }
  // ne correspond pas à un fichier php existant : on serait à la vraie racine du dossier/alias : afficher l'index
  include('index.php');
  exit;
}


// url avec .php masqué
$p=strrpos($uri,'/',-1);
$filename=rtrim(substr($uri,$p+1),'/');
$filepath=realpath($_SERVER["DOCUMENT_ROOT"].'/'.$filename.'.php');
if($filepath!==false) {
  include($filepath);
  exit;
}


// rien de tout cela. Erreur 404 
include('404.php');
