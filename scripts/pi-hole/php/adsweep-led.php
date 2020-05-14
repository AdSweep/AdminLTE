<?php

//lees led data

//header terug naar vorige pagina
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER']))
{
	$previous = $_SERVER['HTTP_REFERER'];
}
header($previous);
die();

?>