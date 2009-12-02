<?php
require_once "TimeTrack.class.php";
$tt = new TimeTrack();

function getTimes($tt) {
	$tt->parseData();
	$ld=$tt->getLastDay();
	echo($ld['diff']."\n");
	echo($ld['monthdiff']."\n");
	echo($ld['laststateIn']."\n");
}

error_reporting(E_ALL);
ini_set("display_errors", 1);

$action=$_GET['a'];
$hash=$_GET['h'];

if (!$tt->login(null, null, $hash)) {
	die('INVALID LOGIN');
}

if ($action=="times") {
	getTimes($tt);
}

if ($action=="login") {
	getTimes($tt);
}

if ($action=="logout") {
	getTimes($tt);
}
?>