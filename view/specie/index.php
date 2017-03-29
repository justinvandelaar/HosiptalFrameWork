<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="../Js/jquery-latest.js"></script>
<script type="text/javascript" src="../Js/jquery.tablesorter.js"></script>

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
  {foreach $species as $info}
  {foreach $info as $specie} 
  <tr>
    <td>{$specie['sort']}&nbsp; </td>
    <td><a href="edit/?id={$specie['id']}"> Edit </a></td>
    <td><a href="delete/?id={$specie['id']}"> Delete</a></td>   
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