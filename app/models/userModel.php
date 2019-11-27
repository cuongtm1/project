<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class UserModel extends Model{
	protected $table = 'users';
	public $timestamps = false;

	public function getParent()
	{
		return $this->hasOne('App\Models\ParentModel', 'id_users', 'id');
	}

}
?>