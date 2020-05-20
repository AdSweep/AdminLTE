<?php

shell_exec('adsweep-toggle-led');

//header terug naar vorige pagina
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER']))
{
	$previous = $_SERVER['HTTP_REFERER'];
}

header("Location: " . $previous);
die();

?>