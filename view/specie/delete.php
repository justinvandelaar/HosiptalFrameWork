<body>
<h1> Do you want to delete this pet </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
{foreach $specie as $info}
	Sort: <br>
	<input type="text" name="name" value="{$info['sort']}" readonly> <br>
	<input type="submit" name="yes" value="yes"><br>
	<input type="submit" name="no" value="no">
{/foreach}
</form>