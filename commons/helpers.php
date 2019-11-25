
<?php

function ss($key,$value){
	$_SESSION[$key] = $value;
}
function sss($key){
	if( isset($_SESSION[$key] ) ){
	echo "<p class='alert alert-success'>".$_SESSION[$key] ."</p>";
	unset($_SESSION[$key]);
	}
}