<?php
if(!isset($_POST) || $_POST == false){
	show_source(__FILE__);
	exit;
}

extract($_POST);

function goAway() {
    error_log("Hacking attempt.");
    header('Location: /error/');
}

if (!isset($pi) || !is_numeric($pi)) {
    goAway();
}

if (!assert("(int)$pi == 3")) {
    echo "This is not pi.";
} else {
    echo "This might be pi.";
}
