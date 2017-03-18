<?php 

// URL Clean Path
define('ROOTPATH',$_SERVER['DOCUMENT_ROOT']);
define('THISPATH',dirname($_SERVER['PHP_SELF']));
define('ONLYPATH',str_replace(ROOTPATH, '', THISPATH));
define('HTTPHOST',(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]".ONLYPATH."/");