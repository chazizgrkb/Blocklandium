<?php
chdir('../../');
$rawOutputRequired = true;
require('lib/common.php');

$ret    = new stdClass();

header('Content-Type: text/json');

$action = $_REQUEST['action'] ?? false;

// $ret->status = "failed";
// $ret->message = $_REQUEST['action'];

switch($action) {
	case "ident":
		$ret->status = "success";
		$ret->ident  = "assballs";
	break;
}

echo json_encode($ret, JSON_PRETTY_PRINT);