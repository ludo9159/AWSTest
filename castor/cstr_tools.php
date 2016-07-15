<?php

function cstr_getlocalscript($ascript) {
	global $cstr_dirbase, $rep_dirlocal;
	if (is_file($rep_dirlocal . $ascript)) {
		$result = $rep_dirlocal . $ascript;
	} elseif (is_file($cstr_dirbase . $ascript)) {
		$result = $cstr_dirbase . $ascript;
	} else {
		$result = $ascript;
	}
	return $result;
}
