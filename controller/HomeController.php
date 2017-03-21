<?php

function index()
{
	$pagetitle = "mine game";
	require (ROOT . 'inc/loadsmarty.php');
	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->display('index.php'));
}