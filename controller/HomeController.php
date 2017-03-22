<?php
require (ROOT . 'model/PatientModel.php');

function index()
{
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$treaded = array();
	$patients = array('patient' => getAllPatients());
	render($smarty->assign('patients', $patients),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('index.php'));
}