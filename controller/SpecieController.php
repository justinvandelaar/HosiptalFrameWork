<?php
require (ROOT . 'model/SpecieModel.php');

function index()
{
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$species = array('species' => getAllSpecies());
	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->assign('species', $species),
		$smarty->display('specie/index.php'));
}

function create() {
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';

	if(isset($_POST['submit'])) {
	$sort = $_POST['sort'];
	createSpecie($sort);
	 echo "Created succesful";
	}

	render($smarty->assign('pagetitle', $pagetitle),
		$smarty->display('specie/create.php'));
}

function edit() {	
	require (ROOT . 'inc/loadsmarty.php');
	$pagetitle = 'Hosiptal';
	$id = $_GET['id'];
	$specie = getSpecie($id);

	if(isset($_POST['submit'])) {
		$sort = $_POST['sort'];
		editSpecie($sort, $id);
	}

	render($smarty->assign('species', $specie),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('specie/edit.php'));
}

function delete() {
	require (ROOT . 'inc/loadsmarty.php');
	$id = $_GET['id'];
	$pagetitle = 'Hosiptal';
	$specie = getSpecie($id);

		if(isset($_POST['yes'])) {
			deleteSpecie($id);
		} elseif (isset($_POST['no'])) {
			echo "Okay press go back";
		}

	render($smarty->assign('id', $id),
		$smarty->assign('specie', $specie),
		$smarty->assign('pagetitle', $pagetitle),
		$smarty->display('specie/delete.php'));
}