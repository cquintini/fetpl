<?php
	// loop function to repeat
	function repeatEl($el, $times){
		for ($i = 1; $i <= $times; $i++) {
		if(substr_count($el, '.html') ) {
			include $el;
		} else {
			echo $el; 
			}
		}
	} // Usage: repeatEl('String', Number);
	
	// #Get current page name/url
	function curPageName() {
	 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	
	
?>