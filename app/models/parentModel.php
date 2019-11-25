<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class ParentModel extends Model{

	protected $table = 'parents';
	public $timestamps = false;
	public function getUser()
	{
	    return $this->belongsTo('App\Models\UserModel', 'id_users','id');
	}
	public function getChildren()
	{
	    return $this->hasMany('App\Models\ChildenModel', 'parent_id', 'id');
	}
}
?>