<?php
chdir('../../');
require('lib/common.php');
header('Content-Type: text/json');

$call = $_REQUEST['call']; //board, tag, home, search, addon, comments, build

if(is_file(dirname(__FILE__) . "/pages/" . $call . ".php")) {
  require_once dirname(__FILE__) . "/pages/" . $call . ".php";
} else {
	$ret = new \stdClass();
	$ret->status = "error";
	$ret->error = "Bart simpson fart";
	die(json_encode($ret, JSON_PRETTY_PRINT));
}