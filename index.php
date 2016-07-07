<?php

function __autoload($class){
	if( strstr($class, 'Controller')){
		$folder = "Controllers/";
	} else if (strstr($class, 'View')){
		$folder = "Views/";
	} else {
		$folder = "Models/";
	}

	$filename = $folder . $class. ".php";
	require $filename;

}

// require "Models/Database.php";
// require "Models/Movie.php";


require "routes.php";



?>
