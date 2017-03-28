<ul>
	<li><a href="../index"> Go back </a></li>
</ul>
<form action="../index" method="post">
{foreach $files as $patient}
	Name: <br>
	<input type="text" name="name" value="{$patient['name']}"> <br>
    Species: <br>
    <input type="text" name="species" value="{$patient['species']}"> <br>
	Status: <br>
	<textarea type="text" name="status" rows="5" cols="30">{$patient['status']}</textarea><br>
	Gender:<br>
    <input type="radio" name="male" value="male"> Male<br>
    <input type="radio" name="female" value="female"> Female<br>
    <input type="radio" name="unkown" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Save"> <br>
{/foreach}
</form>