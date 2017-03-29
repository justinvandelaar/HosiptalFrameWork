<?php
/* Smarty version 3.1.29, created on 2017-03-29 11:38:24
  from "C:\wamp64\www\HosiptalFramework\view\specie\delete.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58db8090988ab4_58546023',
  'file_dependency' => 
  array (
    'ed438ea7409360a7716aaaed536e1d6862fe8879' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\specie\\delete.php',
      1 => 1490780303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db8090988ab4_58546023 ($_smarty_tpl) {
?>
<body>
<h1> Do you want to delete this pet </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['specie']->value;
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
	Sort: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort'];?>
" readonly> <br>
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
