<?php

function lc_pgreadfld($acmd, $afldname) {
	if (is_array($acmd)) {
		$result = $acmd[$afldname];
	} elseif (is_object($acmd)) {
		$result = $acmd->{$afldname};
	} else {
		if (!is_resource($acmd)) {
			error_log(print_r(debug_backtrace(), TRUE));
		}
		$result = odbc_result($acmd, $afldname);
	}
	return $result;
}

function lc_pgreaddatefld($acmd, $afldname) {
	$result = lc_pgreadfld($acmd, $afldname);
	$result = (is_null($result)) ? NULL : new DateTime($result);
	return $result;
}

function lc_pgreadstrfld($acmd, $afldname) {
	$result = lc_pgreadfld($acmd, $afldname);
	return $result;
}
function lc_pgreadnumfld($acmd, $afldname) {
	$result = lc_pgreadfld($acmd, $afldname);
	if (!is_numeric($result)) {
		$result = 0;
	}
	return $result + 0;
}

function lc_pgwritestr($astr) {
	if (isset($astr)) {
		$result = "'" . pg_escape_string($astr) . "'";
	} else {
		$result = "''";
	}
	return $result;
}

function lc_pbwritefloat($afloat) {
	if (isset($afloat)) {
		$result = str_replace(",", ".", $afloat);
	} else {
		$result = "0";
	}
	return $result;
}

function lc_pgwriteint($aint) {
	if (isset($aint)) {
		$result = (string) $aint;
	} else {
		$result = "0";
	}
	return $result;
}

function lc_pgwritedatetime($adate) {
	if (lc_isdate($adate)) {
		try {
			$result = "'" . $adate->format("Y-m-d H:i:s") . ".00" . "'";
		} catch (Exception $e) {
			$result = "NULL";
		}
	} else {
		$result = "NULL";
	}
	return $result;
}

function lc_pgwritedate($adate) {
	if (lc_isdate($adate)) {
		try {
			$result = "'" . $adate->format("Y-m-d") . "'";
		} catch (Exception $e) {
			$result = "NULL";
		}
	} else {
		$result = "NULL";
	}
	return $result;
}

