<?php
namespace App\Controllers\Backend;
use App\Controllers\BaseController;
use App\models\userModel;
/**
 * 
 */
class loginController extends BaseController
{

	function login(){
		$this->render('login');
    }
    function loguot(){
        unset($_SESSION['user']);
		header("location:".BASE_URL."login");
    }
    

    function postlogin(){
        $sdt= isset($_POST['phone']) == true ? $_POST['phone'] :"";
        $pass= isset($_POST['pass']) == true ? $_POST['pass'] :"";

        $user= userModel::where('phone',$sdt)->first();
        $password=password_verify($pass, $user->password);

        if($user == null || $password == false){
            header("location:".BASE_URL."login");
        }else{
            $_SESSION['user']=[
                'role'=>$user->role,
            ];
            header("location:".BASE_URL."admin");
        }
    }
    













}

?>