<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>DistrProg | Login</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://images.kingdomofloathing.com/scripts/md5.js" type="text/javascript"></script>
</head>
<body>
	<section class="container">
	<div class="login">
		<h1 style="font-family: 'Open Sans Condensed', sans-serif;">AP CompSci Final Project</h1>
		<form method="post" action="processlogin.php" onsubmit="return validate();">
		<p><input type="text" name="username" value="" placeholder="Username or Email"></p>
		<p><input type="password" name="password" id="password" value="" placeholder="Password"></p>
		<input type="hidden" id="challenge" value="<?php 
			echo bin2hex(openssl_random_pseudo_bytes(16));
		?>" />
		<input type="hidden" id="response" value="" />
		<p class="remember_me">
			<label style="font-family: 'Open Sans Condensed', sans-serif;">
			<input type="checkbox" name="remember_me" id="remember_me" > 
			Remember me on this computer
			</label>
		</p>
		<p class="submit"><input type="submit" name="commit" value="Login"></p>
		<span style="text-align: center;padding: 8px 0;display: block;color: red;" id="errormsg"></span>
		</form>
	</div>
	</section>
	<script type="text/javascript">
		var queryObj = {};
		if (location.queryString != "") {
		var queries = location.search.substring(1).split("&");
		for (var i = 0; i < queries.length; i++) {
			queryObj[queries[i].split("=")[0]] = queries[i].split("=")[1];
		}
		if ("error" in queryObj) {
			document.getElementById("errormsg").innerHTML = decodeURIComponent(queryObj["error"]);
		}
	}
	function validate() {
		document.getElementById("response").value = hex_md5(queryObj["challenge"] + password);
		document.getElementById("password").value = "";
		return true;
	}
	</script>
</body>
</html>