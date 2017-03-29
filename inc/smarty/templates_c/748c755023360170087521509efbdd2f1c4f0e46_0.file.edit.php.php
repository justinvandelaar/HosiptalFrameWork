<?php
/* Smarty version 3.1.29, created on 2017-03-29 09:07:06
  from "C:\wamp64\www\HosiptalFramework\view\client\edit.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58db5d1a6cc712_61768113',
  'file_dependency' => 
  array (
    '748c755023360170087521509efbdd2f1c4f0e46' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\client\\edit.php',
      1 => 1490771224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db5d1a6cc712_61768113 ($_smarty_tpl) {
?>
<h1> Edit client </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
<?php
$_from = $_smarty_tpl->tpl_vars['clients']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_client_0_saved_item = isset($_smarty_tpl->tpl_vars['client']) ? $_smarty_tpl->tpl_vars['client'] : false;
$_smarty_tpl->tpl_vars['client'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['client']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->_loop = true;
$__foreach_client_0_saved_local_item = $_smarty_tpl->tpl_vars['client'];
?>
	Name: <br>
	<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['name'];?>
"> <br>
    Adress: <br>
	<input type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
"> <br>
	Age: <br>
	<input type="number" name="age" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['age'];?>
"> <br>
	Email:<br>
	<input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
"><br>
	Pet-Name:<br>
	<input type="text" name="pet_name" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['pet_name'];?>
"><br>
	<input type="submit" name="submit" value="Save">
<?php
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_0_saved_local_item;
}
if ($__foreach_client_0_saved_item) {
$_smarty_tpl->tpl_vars['client'] = $__foreach_client_0_saved_item;
}
}
}
