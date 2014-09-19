<?php
	// loop function to repeat
	function repeatEl($el, $times){
		for ($i = 1; $i <= $times; $i++) {
		if(substr_count($el, '.php') ) {
			include $el;
		} else {
			echo $el; 
			}
		}
	} // Usage: repeatEl('String', Number);
	
	// #Get current page name/url
	function current_title() {
        $current_url = explode("?id=", $_SERVER['REQUEST_URI']);
          return ucwords(str_replace("-", " ", $_GET['id']));
	}
?>
