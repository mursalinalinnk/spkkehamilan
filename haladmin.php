<?
	{
		echo("<script language=\"javascript\">window.location='?pilih=formlogin';</script>");
	}else{
		echo("<a href=\"logout.php\">Logout</a>");
		echo("<br/><br/>");
		$tblData	= "data";
		
		$action		= $_GET['action'];
		if(!$action){
			$result 	= mysql_query("select * from {$tblData} order by id");
			if(mysql_num_rows($result)){
				echo("<table border=\"1\" cellspacing=\"0\" bordercolor=\"black\">");
					echo("<tr><td><b>ID</b></td><td><b>Pertanyaan</b></td><td><b>IfYes</b></td><td><b>IfNo</b></td><td colspan=\"2\"><b>Action</b></td></tr>");
				while($row=mysql_fetch_array($result)){
					echo("<tr valign=\"top\"><td>{$row['id']}</td><td>{$row['pertanyaan']}</td><td>{$row['ifyes']}</td><td>{$row['ifno']}</td><td><a href=\"?pilih=haladmin&action=edit&id={$row['id']}\">Edit</a></td><td><a href=\"?pilih=haladmin&action=hapus&id={$row['id']}\">Hapus</a></td></tr>");
				}
				echo("</table>");
			}
			echo("<br/><br/>");
			?>
			<hr/>
			<form method="post" action="?pilih=haladmin&action=tambah">
				<table>
					<tr><td>ID</td><td>:</td><td><input type="text" name="id" size="30"/></td></tr>
					<tr valign="top"><td>Pertanyaan</td><td>:</td><td><textarea name="pertanyaan" cols="23" rows="2"></textarea></td></tr>
					<tr><td>IfYes</td><td>:</td><td><input type="text" name="ifyes" size="30"/></td></tr>
					<tr><td>IfNo</td><td>:</td><td><input type="text" name="ifno" size="30"/></td></tr>
					<tr><td colspan="3" align="right"><input type="submit" value="Submit"/></td></tr>
				</table>
			</form>
			<?
		}elseif($action=="tambah"){
			$id 		= $_POST['id'];
			$pertanyaan = $_POST['pertanyaan'];
			$ifyes		= $_POST['ifyes'];
			$ifno		= $_POST['ifno'];
			
			mysql_query("insert into {$tblData} values('{$id}', '{$pertanyaan}', '{$ifyes}', '{$ifno}')");
			echo("<script language=\"javascript\">window.location='?pilih=haladmin';</script>");
		}elseif($action=="edit"){
			$id			= $_GET['id'];
			$result		= mysql_query("select * from {$tblData} where id='{$id}'");
			$row		= mysql_fetch_array($result);
			echo("
			<form method=\"post\" action=\"?pilih=haladmin&action=edit2\">
				<table>
					<tr><td>ID</td><td>:</td><td><input type=\"text\" name=\"id\" size=\"30\" value=\"{$row['id']}\"/></td></tr>
					<tr valign=\"top\"><td>Pertanyaan</td><td>:</td><td><textarea name=\"pertanyaan\" cols=\"23\" rows=\"2\">{$row['pertanyaan']}</textarea></td></tr>
					<tr><td>IfYes</td><td>:</td><td><input type=\"text\" name=\"ifyes\" size=\"30\" value=\"{$row['ifyes']}\"/></td></tr>
					<tr><td>IfNo</td><td>:</td><td><input type=\"text\" name=\"ifno\" size=\"30\" value=\"{$row['ifno']}\"/></td></tr>
					<tr><td colspan=\"3\" align=\"right\"><input type=\"submit\" value=\"Submit\"/></td></tr>
				</table>
			</form>");
		}elseif($action=="edit2"){
			$id 		= $_POST['id'];
			$pertanyaan = $_POST['pertanyaan'];
			$ifyes		= $_POST['ifyes'];
			$ifno		= $_POST['ifno'];
			
			mysql_query("update {$tblData} set pertanyaan='{$pertanyaan}', ifyes='{$ifyes}', ifno='{$ifno}' where id='{$id}'");
			echo("<script language=\"javascript\">window.location='?pilih=haladmin';</script>");
		}elseif($action=="hapus"){
			$id	= $_GET['id'];
			mysql_query("delete from {$tblData} where id='{$id}'");
			echo("<script language=\"javascript\">window.location='?pilih=haladmin';</script>");
		}
	}
?>