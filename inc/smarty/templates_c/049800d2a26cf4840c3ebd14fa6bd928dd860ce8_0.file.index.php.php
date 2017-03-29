<?php
/* Smarty version 3.1.29, created on 2017-03-29 11:20:01
  from "C:\wamp64\www\HosiptalFramework\view\specie\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58db7c41d8b266_52753834',
  'file_dependency' => 
  array (
    '049800d2a26cf4840c3ebd14fa6bd928dd860ce8' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\specie\\index.php',
      1 => 1490779194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58db7c41d8b266_52753834 ($_smarty_tpl) {
echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery.tablesorter.js"><?php echo '</script'; ?>
>

  <h1> Welcome to the Specie section </h1>
<ul>
    <li><a href="create"> Create Specie </a></li>
    <li><a href="../home/index"> Go back </a></li>
</ul>

<table id="myTable">
  <thead>
    <tr class="head">
      <th>Sort &nbsp;</th>
      <th></th>
      <th></th>
    </tr>
</thead>

<tbody>
<!-- loop twice because we get a multi array back -->
  <?php
$_from = $_smarty_tpl->tpl_vars['species']->value;
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
  <?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_specie_1_saved_item = isset($_smarty_tpl->tpl_vars['specie']) ? $_smarty_tpl->tpl_vars['specie'] : false;
$_smarty_tpl->tpl_vars['specie'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['specie']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['specie']->value) {
$_smarty_tpl->tpl_vars['specie']->_loop = true;
$__foreach_specie_1_saved_local_item = $_smarty_tpl->tpl_vars['specie'];
?> 
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['specie']->value['sort'];?>
&nbsp; </td>
    <td><a href="edit/?id=<?php echo $_smarty_tpl->tpl_vars['specie']->value['id'];?>
"> Edit </a></td>
    <td><a href="delete/?id=<?php echo $_smarty_tpl->tpl_vars['specie']->value['id'];?>
"> Delete</a></td>   
  </tr>
      <?php
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_1_saved_local_item;
}
if ($__foreach_specie_1_saved_item) {
$_smarty_tpl->tpl_vars['specie'] = $__foreach_specie_1_saved_item;
}
?>
  <?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
}
?>
  </tbody>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
<?php echo '</script'; ?>
><?php }
}
