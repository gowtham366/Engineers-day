<?php
error_reporting(1);
	function connectdb($SQL)
	{
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("ed",$con);
		
		$result = mysql_query ($SQL);
		
		mysql_close ();
		
		return $result;
	}
?>