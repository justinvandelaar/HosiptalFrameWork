<h1> Do you want to delete this client </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
{foreach $client as $info}
	Name: <br>
	<input type="text" name="name" value="{$info['name']}" readonly> <br>
	Adress: <br>
	<input type="text" name="adress" value="{$info['adress']}" readonly> <br>
	Age: <br>
	<input type="text" name="age" value="{$info['age']}" readonly> <br>
	E-mail: <br>
	<input type="text" name="email" value="{$info['email']}" readonly> <br>
	pet_name: <br>
	<input type="text" name="pet_name" value="{$info['pet_name']}" readonly> <br>
	Cheked-in: <br>
	<input type="text" name="Cheked-in" value="{$info['cheked_in']}" readonly> <br>
	<input type="submit" name="yes" value="yes"><br>
	<input type="submit" name="no" value="no">
{/foreach}
</form>