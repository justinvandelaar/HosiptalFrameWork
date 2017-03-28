<?php

function index()
{
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->display('home/index.php'));
}