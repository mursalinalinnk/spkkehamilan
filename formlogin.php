<?
	if(isset($_SESSION['action'])){
		echo($_SESSION['action']);
		unset($_SESSION['action']);
	}	
?>

<center>
	<form action="login.php" method="post">
		<table border="0">
			<tr><td>Username</td><td>:</td><td><input type="text" name="username" size="20"/></td></tr>
			<tr><td>Password</td><td>:</td><td><input type="password" name="password" size="20"/></td></tr>
			<tr><td align="right" colspan="3"><input type="submit" value="Login"/> <input type="button" value="Cancel" onclick="window.history.go(-1);"/></td></tr>
		</table>
	</form>
</center>