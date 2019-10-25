<?php 
session_start();

if(isset($_GET["theme"]))
{
	$theme = $_GET["theme"];

	if($theme == "light" || $theme == "dark")
	{
		echo $theme;
		$_SESSION["theme"] = $theme;
	}
}

?>