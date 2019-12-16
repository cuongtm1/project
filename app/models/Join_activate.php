<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class Join_activate extends Model{
	
	protected $table = 'join_activate';
	public $timestamps = false;

	public function getChildrenJoinActivate()
	{
	    return $this->belongsTo('App\Models\ChildenModel', 'children_id', 'id');
	}
	public function getActivatefromChildren()
	{
	    return $this->belongsTo('App\Models\ActivateModel', 'activate_id', 'id');
	}
	// public function user()
	// {
	//     return $this->hasOne(User::class, 'foreign_key', 'local_key');
	// }
}
?>