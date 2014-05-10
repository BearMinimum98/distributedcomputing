<?php
    if (file_exists("projects/" . sha1($_GET["name"] . ".zip") . "/" . $_GET["name"] . ".zip")) {
        //header("Location: " . "projects/" . sha1($_GET["name"] . ".zip") . "/" . $_GET["name"] . ".zip");
        $data = array(
            "src" => "projects/" . sha1($_GET["name"] . ".zip") . "/" . $_GET["name"] . ".zip",
            "name" => $_GET["name"],
            "abspath" => "http://omniwarenetworks.com/projects/distributedcomputing/projects/" . sha1($_GET["name"] . ".zip") . "/" . $_GET["name"] . ".zip",
        );
        echo stripslashes(json_encode($data));
    } else {
        header("HTTP/1.0 404 Not Found");
        echo stripslashes(json_encode(array("error" => "Project not found.")));
    }
?>