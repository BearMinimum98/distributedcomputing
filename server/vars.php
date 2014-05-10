<?php
    $server = "distcomp.db.11560964.hostedresource.com";
    $user = "distcomp";
    $password = "a1#qoiwWQ";
    $database = "distcomp";
    $db = mysql_connect($server, $user, $password) or die('Could not connect to DB ' . mysql_error());
    mysql_select_db($database) or die("Could not select database.");
?>