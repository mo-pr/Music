<?php include('head.php');?>

<form id="registrate">
	<p class="inputText">E-Mail:</p>
	<input type="email" name="email" class="input" required name="username">
	<p class="inputText">Username:</p>
	<input type="text" name="userName" class="input" required name="username">
	<p class="inputText">Password:</p>
	<input type="password" name="passw" class="input" required name="password">
	<p class="inputText">Password:</p>
	<input type="password" name="repeatpassw" class="input" required name="password"><br>
	<input type="submit" value="Registrate" class="submit">
</form>

<?php include('footer.php');?>