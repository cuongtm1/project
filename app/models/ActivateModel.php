<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class ActivateModel extends Model{
	
	protected $table = 'activates';
	public $timestamps = false;

	public function getChildren()
	{
	    return $this->belongsToMany('App\models\childenModel', 'join_activate', 'activate_id', 'children_id');
	}
	public function getJoinActivate()
	{
	    return $this->hasOne('App\models\Join_activate', 'activate_id', 'id');
	}
}
?>