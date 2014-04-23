<?php
class Plugin_browser extends Plugin {
	
	public function index() {
		
		$string = $_SERVER['HTTP_USER_AGENT'];
		
		if (strpos($string, 'Chrome')) {
			return 'chrome';
		} elseif (strpos($string, 'Firefox')) {
			return 'firefox';
		} elseif (strpos($string, 'Safari')) {
			return 'safari';
		} else {
			return false;
		}
	}
}