<?php
function cstr_dbconnect() {
	global $cstr_dbhost, $cstr_dbname, $cstr_dbuser, $cstr_dbpwd, $lc_error;
/*	$str = "host=" . $cstr_dbhost . " port=5432 dbname=" . $cstr_dbname . " user=" . $cstr_dbuser . " password=" . $cstr_dbpwd;
	$dbconn = pg_pconnect($str);
	if (!is_resource($dbconn)) {
		$lc_error .= $str . "<br>";
	}*/
	$str = "pgsql:host=" . $cstr_dbhost . ";port=5432;dbname=" . $cstr_dbname . ";user=" . $cstr_dbuser . ";password=" . $cstr_dbpwd;
	$dbconn = new PDO($str);
	return $dbconn;
}

function cstr_query($ares, $aqry) {
	$result = pg_query($ares, $aqry);
	if ($result === false) {
		error_log($aqry);
		error_log(pg_last_error($ares));
	} else {
		if (!is_resource($result)) {
//			ibase_commit_ret($ares);
		}
	}
	return $result;
}
function cstr_fetch_assoc($ares) {
	$result = pg_fetch_assoc($ares);
	return $result;
}

function cstr_free_result($ares) {
	if (is_resource($ares)) {
		$result = pg_free_result($ares);
	} else {
		$result = true;
	}
	return $result;
}
