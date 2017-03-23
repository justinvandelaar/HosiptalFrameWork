<h1> Do you want to delete this patient </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form action="" method="post">
{foreach $patient as $info}
	Name: <br>
	<input type="text" name="name" value="{$info['name']}" readonly> <br>
	Species: <br>
	<input type="text" name="species" value="{$info['species']}" readonly> <br>
	Status: <br>
	<textarea name="status" cols="30" rows="5" readonly>{$info['status']}</textarea> <br>
	<input type="submit" name="yes" value="yes"><br>
	<input type="submit" name="no" value="no">
{/foreach}
</form>