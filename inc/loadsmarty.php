<?php

date_default_timezone_set('Europe/Amsterdam');
require_once ('smarty/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(ROOT . 'view/home');
$smarty->setCompileDir(ROOT  . 'inc/smarty/templates_c/');
$smarty->setConfigDir(ROOT   . 'inc/smarty/configs/');
$smarty->setCacheDir(ROOT    . 'inc/smarty/cache/');