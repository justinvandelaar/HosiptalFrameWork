<?php
/* Smarty version 3.1.29, created on 2017-03-28 13:49:56
  from "C:\wamp64\www\HosiptalFramework\public\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58da4de4c660d3_17179283',
  'file_dependency' => 
  array (
    '5daf09bf3641f76dd69edd4f4a3f2100902394ce' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\public\\index.php',
      1 => 1490105318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da4de4c660d3_17179283 ($_smarty_tpl) {
echo '<?php

';?>define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

require(ROOT . "core/config.php");
require(ROOT . "core/route.php");
require(ROOT . "core/core.php");
route();<?php }
}
