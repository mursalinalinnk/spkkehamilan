<?
	function isLogin(){
		if(empty($_SESSION['username'])){
			return(false);
		}
		return(true);
	}
?>