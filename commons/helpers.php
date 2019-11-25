<<<<<<< HEAD

<?php
=======
<?php

function dd($value){
	var_dump($value);
	die;
}

>>>>>>> eb1ded18289e7ea9d206df28650da2357f787b0c
function ss($key,$value){
	$_SESSION[$key] = $value;
}
function sss($key){
<<<<<<< HEAD

=======
>>>>>>> eb1ded18289e7ea9d206df28650da2357f787b0c
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
<<<<<<< HEAD

=======
>>>>>>> eb1ded18289e7ea9d206df28650da2357f787b0c
}