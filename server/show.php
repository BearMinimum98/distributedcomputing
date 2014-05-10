<?php
	include_once "vars.php";
	$result = mysql_query("SELECT * FROM projects") or die("Query failed");
	$projects = array();
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$projects[] = $line;
	}
	echo stripslashes(json_encode($projects));
	mysql_free_result($result);
	mysql_close($db);
?>
