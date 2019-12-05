

<?php
function dd($value){
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
	die;
}
function getGender($number){
	if($number==0){
		return 'Nữ';
	}
	if($number==1){
		return 'Nam';
	}
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
function slug($str) {
	$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
	$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
	$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
	$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
	$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
	$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
	$str = preg_replace("/(đ)/", 'd', $str);
	$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
	$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
	$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
	$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
	$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
	$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
	$str = preg_replace("/(Đ)/", 'D', $str);
	$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
	$str = preg_replace("/( )/", '-', $str);
	return strtolower($str);
} 


function CountChidreninClass($data){
		$data =  $data->toArray();
		return count($data);
}

function GetAge($birthday){ 
	$tuoi = date_format(date_create($birthday),"m/d/Y");
             // tinhs tuooir
             $birthDate = $tuoi;
             //explode the date to get month, day and year
             $birthDate = explode("/", $birthDate);
             //get age from date or birthdate
             $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                 ? ((date("Y") - $birthDate[2]) - 1)
                 : (date("Y") - $birthDate[2]));
            return $age;
}
function getClassByAge($childrennull){
	foreach ($childrennull as $value) {
		
	}
}