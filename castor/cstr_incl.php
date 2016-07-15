<?php

$cstr_dirbase = dirname(__FILE__) . "/";
$cstr_urlbase = "/castor/";
$cstr_dirlclib = str_replace("castor", "lclib", $cstr_dirbase);
$cstr_urllclib = "/lclib/";
$cstr_dirlocal = realpath(".") . "/";
$cstr_urlglobal = (($_SERVER["HTTPS"] == "off")?"http":"https") . "://" . $_SERVER["SERVER_NAME"];
$cstr_urllocaldir = dirname($_SERVER["SCRIPT_NAME"]) . "/";
if ($cstr_urllocaldir == "//") {
	$cstr_urllocaldir = "/";
}
$cstr_urllocal = "http://" . $_SERVER["SERVER_NAME"];

if ($cstr_urllocaldir == "/") {
	$cstr_localwwwroot = $cstr_dirlocal;
} else {
	$cstr_localwwwroot = str_ireplace($cstr_urllocaldir, "", $cstr_dirlocal) . "/";
}

require_once($cstr_dirlclib . "lc_tools.php");
require_once($cstr_dirlclib . "lc_dbtools.php");

require_once($cstr_dirbase . "cstr_tools.php");
require_once($cstr_dirbase . "cstr_dbtools.php");
