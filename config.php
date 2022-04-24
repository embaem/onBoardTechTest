<?php 

define('SITE_ROOT', __DIR__);
define('URL', ((isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != 'off')) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST']);

//function files

require_once(SITE_ROOT. '/functions/api.php' ) ;


//component files

require_once(SITE_ROOT.'/components/card.php');
require_once(SITE_ROOT.'/components/searchModal.php');