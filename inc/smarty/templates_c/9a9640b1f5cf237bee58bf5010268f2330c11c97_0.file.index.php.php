<?php
/* Smarty version 3.1.29, created on 2017-03-22 12:48:11
  from "C:\wamp64\www\HosiptalFramework\view\home\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58d2647bb9dc52_56366762',
  'file_dependency' => 
  array (
    '9a9640b1f5cf237bee58bf5010268f2330c11c97' => 
    array (
      0 => 'C:\\wamp64\\www\\HosiptalFramework\\view\\home\\index.php',
      1 => 1490183290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d2647bb9dc52_56366762 ($_smarty_tpl) {
echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery-latest.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../Js/jquery.tablesorter.js"><?php echo '</script'; ?>
>

  <h1> Welcome to the patient section </h1>
<ul>
    <li><a href="create.php"> Create patient </a></li>
</ul>

<table id="myTable">
  <thead>
    <tr class="head">
      <th>Name &nbsp;</th>
      <th>Species &nbsp;</th>
      <th>Stataus &nbsp;</th>
      <th>Gender &nbsp;</th>
      <th></th>
      <th></th>
    </tr>
</thead>

<tbody> 
  <tr>
  <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['patients']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['patients']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
    <?php echo var_dump($_smarty_tpl->tpl_vars['patients']->value);?>

    <td><?php echo $_smarty_tpl->tpl_vars['patients']->value[$_smarty_tpl->tpl_vars['foo']->value];?>
&nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['patients']->value[$_smarty_tpl->tpl_vars['foo']->value];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['patients']->value[$_smarty_tpl->tpl_vars['foo']->value];?>
 &nbsp; </td>
    <td><?php echo $_smarty_tpl->tpl_vars['patients']->value[$_smarty_tpl->tpl_vars['foo']->value];?>
 &nbsp; </td>
    <td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"> Edit </a></td>
    <td><a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
"> Delete</a></td>
  <?php }
}
?>

  </tr>
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
