<h1> Edit the patient </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>
<form method="post">
{foreach $files as $patient}
	Name: <br>
	<input type="text" name="name" value="{$patient['name']}"> <br>
    Species: <br>
    <select name="species">
		{foreach $specie as $info}
		{foreach $info as $species}
		<option value="{$species['sort']}">{$species['sort']}</option>
		{/foreach}
		{/foreach}
	</select> <br>
    <!-- <input type="text" name="species" value="{$patient['species']}"> <br> -->
	Status: <br>
	<textarea type="text" name="status" rows="5" cols="30">{$patient['status']}</textarea><br>
	Gender:<br>
    <input type="radio" name="male" value="male"> Male<br>
    <input type="radio" name="female" value="female"> Female<br>
    <input type="radio" name="unkown" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Save"> <br>
{/foreach}
</form>