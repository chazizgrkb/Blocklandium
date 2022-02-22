<?php
$dlg = new \stdClass();
$dlg->type = "recent";

$recentData = query("SELECT $userfields v.id, v.title, v.author FROM videos v JOIN users u ON v.author = u.id ORDER BY RAND() LIMIT 12");

$ar = array();
foreach($recentData as $recent) {
	$o = new \stdClass();
	$o->id = $recent['id'];
	$o->name = $recent['title'];
	$o->board = "Category that doesn't exist";
	$o->version = "1.3.3.7";
	
	$ar[] = $o;
}
$dlg->uploads = $ar;
$dlg->updates = $ar;

$dlg->date = time();

$res = array($dlg);

$msg = new \stdClass();
$msg->type = "message";
$msg->message = "cheeseRox Vitre API Prototype";
$msg->date = time();
$res[] = $msg;

$ret = new \stdClass();
$ret->status = "success";
$ret->data = $res;

echo json_encode($ret, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
