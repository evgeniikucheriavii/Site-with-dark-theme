<?php 
session_start();

if(isset($_GET["theme"]))
{
	$theme = $_GET["theme"];
}
else
{
	$theme = "light";
}

$_SESSION["theme"] = $theme;

echo $theme;

?>