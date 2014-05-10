<!DOCTYPE html>
<html>
    <head>
		<title>DistComp</title>
	</head>
	<body>
<?php
    include_once "vars.php";
	if ($_FILES["file"]["error"] > 0) {
		echo "Error " . $_FILES["file"]["error"] . "<br />";
	} else {
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		if ($extension == "zip") {
			if (file_exists("projects/" . sha1($_FILES["file"]["name"]) . "/" . $_FILES["file"]["name"])) {
				echo "Error: project already exists";
			} else {
				$fh = @fopen($_FILES["file"]["tmp_name"], "r");
				$blob = fgets($fh, 5);
				if (strpos($blob, 'PK') !== false) {
					mkdir("projects/" . sha1($_FILES["file"]["name"]));
					mysql_query("INSERT INTO projects VALUES (\"" . "projects/" . sha1($_FILES["file"]["name"]) . "/" . $_FILES["file"]["name"] . "\", \"" . sha1($_FILES["file"]["name"]) . "\", \"" . $_FILES["file"]["name"] . "\")");
                    if (mysql_error() != null) {
                        echo "Error with inserting into table";
                        echo mysql_error();
                    }
					move_uploaded_file($_FILES["file"]["tmp_name"], "projects/" . sha1($_FILES["file"]["name"]) . "/" . $_FILES["file"]["name"]);
					echo "Project uploaded. Project ID: " . sha1($_FILES["file"]["name"]);
				} else {
					echo "Invalid ZIP file";
				}
			}
		} else {
			echo "Not ZIP file";
		}
	}
?>
	</body>
</html>