<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
class userModel extends Model{
=======
class UserModel extends Model{
>>>>>>> a669fd3404d802eb724c2755950b9a2a4966e4b1
	protected $table = 'users';
	public $timestamps = false;

	public function getParent()
	{
		return $this->hasOne('App\Models\ParentModel', 'id_users', 'id');
	}

}
?>