<?php
session_start();
if ( !ini_get( 'display_errors' ) ) {
    ini_set( 'display_errors', 1 );
}
ini_set( 'log_errors', 0 );

$FULL_SITE_PATH="http://baka.ru";

$db_param=array();
$db_param["server"]="localhost";
$db_param["base"]="baka";
$db_param["user"]="root";
$db_param["pass"]="";

?>