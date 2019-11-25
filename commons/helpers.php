<?php

function dd($value){
	var_dump($value);
	die;
}
function ss($key,$value){
	$_SESSION[$key] = $value;
}
function sss($key){
	if(isset($_SESSION[$key])){
		echo "<p class='alert alert-success'>$_SESSION[$key]</p>";
		unset($_SESSION[$key]);
	}
}
function gender($number){
	if($number==0){
		$gender = 'Nữ';
	}else{
		$gender = 'Nam';
	}
	return $gender;
}