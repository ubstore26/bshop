<?php
ob_start();
date_default_timezone_set("Asia/Phnom_Penh");

// define (base_url"," http://localhost:/nb/")

$public_end=strpos($_SERVER['SCRIPT_NAME'],'/frontend')+9;
$doc_root=substr($_SERVER['SCRIPT_NAME'],0,$public_end);
define("WW_ROOT",$doc_root);




?>