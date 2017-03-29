<?php
/* Smarty version 3.1.29, created on 2017-03-29 11:21:57
  from "C:\wamp64\www\HosiptalFramework\view\specie\create.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58db7cb5bfc762_04503105',
  'file_dependency' => 
  array (
    'e89c0e2ee35b53c4782012b9e59dc4a05fac0c8a' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\specie\\create.php',
      1 => 1490779309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db7cb5bfc762_04503105 ($_smarty_tpl) {
?>
<h1> Welcome to the Specie section </h1>
<ul>
	<li><a href="index"> go back </a></li>
</ul>

<div id="createForm">
<form method="post">
	Sort: <br>
	<input type="text" name="sort"> <br>
	<input type="submit" name="submit" value="Create Specie">
</form>
</div><?php }
}
