<<<<<<< HEAD
<?php

function dd($value){
	var_dump($value);
	die;
}
=======

<?php

>>>>>>> cc6d448d019e6f1a4d839f5d60700eeaba91c9f7
function ss($key,$value){
	$_SESSION[$key] = $value;
}
function sss($key){
<<<<<<< HEAD
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
=======
	if( isset($_SESSION[$key] ) ){
	echo "<p class='alert alert-success'>".$_SESSION[$key] ."</p>";
	unset($_SESSION[$key]);
	}
>>>>>>> cc6d448d019e6f1a4d839f5d60700eeaba91c9f7
}