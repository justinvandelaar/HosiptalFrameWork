<h1> Welcome to the patient section </h1>
<ul>
	<li><a href="index"> go back </a></li>
</ul>

<div id="createForm">
<form  method="post">
	Name: <br>
	<input type="text" name="name"> <br>
	Species: <br>
	<select name="species">
		{foreach $specie as $info}
		{foreach $info as $species}
		<option value="{$species['sort']}">{$species['sort']}</option>
		{/foreach}
		{/foreach}
	</select> <br>
	Status: <br>
	<input type="text" name="status"><br>	
	Gender:<br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="unkown"> Unkown<br>
	<input type="submit" name="submit" value="Create patient">
</form>
</div>