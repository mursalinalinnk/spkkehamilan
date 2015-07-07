<?
	session_start();
	include("connect.php");
	include("fungsi.php");
?>
<html>
	<head>
		<title>Cek Kehamilan</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>
	<body>

<?
	$pilih		= $_GET['pilih'];
	
	echo("<center>");
		echo("<div id=\"pagecell\" align=\"left\">");
			if(!$pilih){
				include("welcome.php");
			}else{
				if(file_exists("{$pilih}.php")){
					include("{$pilih}.php");
				}else{
					include("welcome.php");
				}
			}	
		echo("</div>");
	echo("</center>");
?>
	</body>
</html>