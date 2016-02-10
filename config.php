<?php 

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);

//access to app
define('APP',ROOT.'app'.DS);
//access to links
define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));

?>