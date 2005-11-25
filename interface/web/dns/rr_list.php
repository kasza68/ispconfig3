<?php
require_once('../../lib/config.inc.php');
require_once('../../lib/app.inc.php');

/******************************************
* Begin Form configuration
******************************************/

$list_def_file = "list/rr.list.php";

/******************************************
* End Form configuration
******************************************/

// Checking module permissions
if(!stristr($_SESSION["s"]["user"]["modules"],$_SESSION["s"]["module"]["name"])) {
        header("Location: ../index.php");
        exit;
}

$app->uses('listform_actions');

// Generate the page
$app->listform_actions->onLoad();


?>