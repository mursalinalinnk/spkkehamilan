<?
	session_start();
	include("connect.php");
	
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	
	$result		= mysql_query("select * from `admin` where username='{$username}'");
	if(mysql_num_rows($result)){
		$row	= mysql_fetch_array($result);
		if(md5($password) == $row['password']){
			$_SESSION['username'] = $username;
			header("Location: ". dirname($_SERVER['REQUEST_URI']) ."?pilih=haladmin");
			exit;
		}
	}
	
	$_SESSION['action'] = "<font size=\"1\" color=\"red\">Login gagal, periksa username dan password anda.</font>";
	header("Location: ". dirname($_SERVER['REQUEST_URI']) ."?pilih=formlogin");
?>