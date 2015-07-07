<?
	//cek load
	if(ereg("tanya.php", $_SERVER['PHP_SELF']))
	{
		header('Location: index.php');
		exit;
	}
	
	$answer		= $_GET['answer'];
	$tblData	= "data";
	
	if(!$answer) $answer = 1;
	
	$result 	= mysql_query("select * from {$tblData} where id='{$answer}'");
	if(mysql_num_rows($result)){
		$row 		= mysql_fetch_array($result);
		$pertanyaan = nl2br($row['pertanyaan']);
		echo($pertanyaan);
		echo("<br/><br/>");
		if($row['ifyes'] != "0" && $row['ifno'] != "0"){
			echo("<a href=\"?pilih=tanya&answer={$row['ifyes']}\">Ya</a>&nbsp;<a href=\"?pilih=tanya&answer={$row['ifno']}\">Tidak</a>");
		}else{
			echo("<a href=\"". dirname($_SERVER['PHP_SELF']) ."\">Back To Home</a>");
		}
	}
?>