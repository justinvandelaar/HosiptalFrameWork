<?php
/* Smarty version 3.1.29, created on 2017-03-29 11:27:33
  from "C:\wamp64\www\HosiptalFramework\view\specie\edit.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58db7e058bbc22_59758135',
  'file_dependency' => 
  array (
    '9c306c96bccc2cfa0ad190f03c9365179953b3bf' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\specie\\edit.php',
      1 => 1490779652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db7e058bbc22_59758135 ($_smarty_tpl) {
?>
<h1> Welcome to the edit section for species </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['species']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specie_0_saved_item = isset($_smarty_tpl->tpl_vars['specie']) ? $_smarty_tpl->tpl_vars['specie'] : false;
$_smarty_tpl->tpl_vars['specie'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specie']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specie']->value) {
$_smarty_tpl->tpl_vars['specie']->_loop = true;
$__foreach_specie_0_saved_local_item = $_smarty_tpl->tpl_vars['specie'];
?>
	Sort: <br>
	<input type="text" name="sort" value="<?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
"> <br>
	<input type="submit" name="submit" value="Save">
<?php
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_0_saved_local_item;
}
if ($__foreach_specie_0_saved_item) {
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_0_saved_item;
}
?>
</form><?php }
}
