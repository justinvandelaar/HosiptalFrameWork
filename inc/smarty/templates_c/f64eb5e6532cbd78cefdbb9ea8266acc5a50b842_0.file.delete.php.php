<?php
/* Smarty version 3.1.29, created on 2017-03-28 14:06:15
  from "C:\wamp64\www\HosiptalFramework\view\patient\delete.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58da51b7027309_25580073',
  'file_dependency' => 
  array (
    'f64eb5e6532cbd78cefdbb9ea8266acc5a50b842' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\patient\\delete.php',
      1 => 1490702772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da51b7027309_25580073 ($_smarty_tpl) {
?>
<h1> Do you want to delete this patient </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form action="" method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['patient']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_0_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_0_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
	Name: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" readonly> <br>
	Species: <br>
	<input type="text" name="species" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['species'];?>
" readonly> <br>
	Status: <br>
	<textarea name="status" cols="30" rows="5" readonly><?php echo $_smarty_tpl->tpl_vars['info']->value['status'];?>
</textarea> <br>
	<input type="submit" name="yes" value="yes"><br>
	<input type="submit" name="no" value="no">
<?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
}
?>
</form><?php }
}
