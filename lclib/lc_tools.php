<?php
if (isset($lc_debug) && $lc_debug) {
	error_reporting(E_ALL);
} else {
	error_reporting(E_ALL ^ E_WARNING);
}

function lc_errorhandler($errno, $errstr, $errfile, $errline) {
	global $lc_error;

	switch ($errno) {
		case E_USER_ERROR:
		case E_ERROR:
			$lc_error .= "<b>ERREUR</b> [$errno] $errstr<br />\n";
			$lc_error .= "  Sur la ligne $errline dans le fichier $errfile<br />\n";
			break;

		case E_USER_WARNING:
		case E_WARNING:
			$lc_error .= "<b>ALERTE</b> [$errno] $errstr<br />\n";
			$lc_error .= "  Sur la ligne $errline dans le fichier $errfile<br />\n";
			break;

		case E_USER_NOTICE:
		case E_NOTICE:
			$lc_error .= "<b>AVERTISSEMENT</b> [$errno] $errstr<br />\n";
			$lc_error .= "  Sur la ligne $errline dans le fichier $errfile<br />\n";
			break;

		case E_USER_DEPRECATED:
		case E_DEPRECATED:
			$lc_error .= "<b>OBSOLETE</b> [$errno] $errstr<br />\n";
			$lc_error .= "  Sur la ligne $errline dans le fichier $errfile<br />\n";
			break;

		default:
			$lc_error .= "Erreur inconnu : [$errno] $errstr<br />\n";
			$lc_error .= "  Sur la ligne $errline dans le fichier $errfile<br />\n";
			break;
	}

	$_SESSION["LC_ERROR"] = $lc_error;
	return true;
}

function lc_geterror() {
	global $lc_debug, $lc_error;
	if (isset($lc_debug) && $lc_debug && ($lc_error != "")) {
		$_SESSION["LC_ERROR"] = "";
		return "<div style=\"background-color:#FFFFAA;color:#ff0000\">" . $lc_error . "</div>";
		$lc_error = "";
	}
}

function lc_showerror() {
	global $lc_debug, $lc_error;
	if (isset($lc_debug) && $lc_debug && ($lc_error != "")) {
		$_SESSION["LC_ERROR"] = "";
		echo "<div id=\"divError\" style=\"position:absolute;bottom:0;left:0;background-color:#FFFFAA;color:#ff0000;max-height:600px;overflow:auto;\" align=\"left\">";
		echo "<div><a href=\"javascript:;\" onclick=\"jQuery('#divError').hide();\">X</a></div>";
		echo "<div>" . $lc_error . "</div>";
		echo "</div>";
		$lc_error = "";
	}
}

function lc_isdate($adate) {
	return (isset($adate) && !is_null($adate) && is_object($adate) && (get_class($adate) == "DateTime"));
}


$lc_error = "";
if (isset($lc_debug) && $lc_debug) {
//	ini_set("track_errors", 1);
	$old_error_handler = set_error_handler("lc_errorhandler", E_ALL);
}

