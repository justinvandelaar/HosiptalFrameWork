<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="../Js/jquery-latest.js"></script>
<script type="text/javascript" src="../Js/jquery.tablesorter.js"></script>

  <h1> Welcome to the patient section </h1>
<ul>
    <li><a href="create"> Create patient </a></li>
    <li><a href="../home/index"> Go back </a></li>
</ul>

<table id="myTable">
  <thead>
    <tr class="head">
      <th>Name &nbsp;</th>
      <th>Adress &nbsp;</th>
      <th>Age &nbsp;</th>
      <th>Email &nbsp;</th>
      <th>Pet Name &nbsp;</th>
      <th>Checked in &nbsp;</th>
      <th>Checked out &nbsp;</th>
      <th></th>
      <th></th>
    </tr>
</thead>

<tbody>
<!-- loop twice because we get a multi array back -->
  {foreach $clients as $info}
  {foreach $info as $client} 
  <tr>
    <td>{$client['name']}&nbsp; </td>
    <td>{$client['adress']} &nbsp; </td>
    <td>{$client['age']} &nbsp; </td>
    <td>{$client['email']} &nbsp; </td>
    <td>{$client['pet_name']} &nbsp; </td>
    <td>{$client['cheked_in']} &nbsp; </td>
    <td>{$client['cheked_out']} &nbsp; </td>
    <td><a href="edit/?id={$client['id']}"> Edit </a></td>
    <td><a href="delete/?id={$client['id']}"> Delete</a></td>   
  </tr>
      {/foreach}
  {/foreach}
  </tbody>
</table>

<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
</script>