<?
require_once("inc/config.php");
require_once("inc/db_func.php");

if(isset($_SESSION["idUser"]))
	{
	require_once($LOCAL_PATH."/maket/framework.php");
	}
	else
	{
	require_once($LOCAL_PATH."/maket/login.php");
	}
?>


