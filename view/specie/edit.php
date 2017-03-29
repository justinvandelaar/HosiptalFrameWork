<h1> Welcome to the edit section for species </h1>
<ul>
	<li><a href="../index"> Go back </a></li>
</ul>

<form method="post">
{foreach $species as $specie}
	Sort: <br>
	<input type="text" name="sort" value="{$specie['sort']}"> <br>
	<input type="submit" name="submit" value="Save">
{/foreach}
</form>