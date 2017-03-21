<?php

function openDatabaseConnection() 
{
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
	
	$db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);

	return $db;
}

/*
$filename, 
require(ROOT . 'view/' . $filename . '.php');
*/
function render($data = null)
{

	if ($data) {

		foreach($data as $key => $value) {
			$$key = $value;
		}
	} 

	require(ROOT . 'inc/loadsmarty.php');
	require(ROOT . 'inc/loadsmarty.php');
	require(ROOT . 'view/templates/header.php');
	require(ROOT . 'view/templates/footer.php');
}