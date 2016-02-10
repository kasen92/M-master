<?php 

//first phase
//enviroment
//developer mode
ini_set('display_errors',1);
//iniforme de errores
error_reporting(E_ALL);

include('config.php');
require('sys/helper.php');
//reading configuration

/*
$conf=Registry::getInstance();
$conf->welcome='Hola';
$msg=$conf->welcome;
$conf->delete('welcome');
$conf->delete();
*/

Core::init();

//MODIFICACION EN EL FICHERO HTACCES PARA EVITAR PROBLEMAS EN EL FICHERO CSS
//TENEMOs QUe AÑADIR UNAS CONDICIONES DE ESCRITURAS

//Options +FollowSymLinks
//RewriteEngine On
//RewriteCond %{REQUEST_FILENAME} -s [OR]
//RewriteCond %{REQUEST_FILENAME} -l [OR]
//RewriteCond %{REQUEST_FILENAME} -d
//RewriteRule ^.*$ - [NC,L]
//RewriteRule ^.*$ index.php [NC,L]
?>