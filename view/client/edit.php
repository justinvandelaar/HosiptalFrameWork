<h1> Edit client </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
{foreach $clients as $client}
	Name: <br>
	<input type="text" name="name" value="{$client['name']}"> <br>
    Adress: <br>
	<input type="text" name="adress" value="{$client['adress']}"> <br>
	Age: <br>
	<input type="number" name="age" value="{$client['age']}"> <br>
	Email:<br>
	<input type="text" name="email" value="{$client['email']}"><br>
	Pet-Name:<br>
	<input type="text" name="pet_name" value="{$client['pet_name']}"><br>
	<input type="submit" name="submit" value="Save">
{/foreach}