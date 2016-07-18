<?php

$cstr_sessionprefix = "CASTOR_";

class cstr_objsession {
	public $uid = 0;
	public $lstusers = array();
	public $lstcli = array();

	function cstr_sessionstart($atimeout) {
		global $lc_error, $cstr_sessionprefix;
		session_start();
		if (isset($_SESSION[$cstr_sessionprefix . "LASTACTIVITY"]) && (time() - $_SESSION[$cstr_sessionprefix . "LASTACTIVITY"] > $atimeout * 60)) {
			cstr_sessionstop();
			session_start();
		}
		$_SESSION[$cstr_sessionprefix . "LASTACTIVITY"] = time();
		if (isset($_SESSION["LC_ERROR"])) {
			$lc_error = $_SESSION["LC_ERROR"];
			$_SESSION["LC_ERROR"] = "";
		}
	}

	function cstr_sessionstop() {
		session_unset();
		session_destroy();
	}

	function __construct() {
		cstr_sessionstart(60);
	}
}

$cstr_session = new cstr_objsession();