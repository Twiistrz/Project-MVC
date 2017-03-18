<?php

// Sessions
class Session {
	// Initialize
	public static function init() { session_start(); }

	public static function set($key, $value) { $_SESSION[$key] = $value; }

	public static function get($key) { return (isset($_SESSION[$key])) ? $_SESSION[$key] : false; }

	public static function destroy() {
		unset($_SESSION);
		session_destroy();
		Controller::redirect('login/');
	}
}