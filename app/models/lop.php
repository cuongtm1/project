<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class lop extends Model{
	
	protected $table = 'class';
	public $timestamps = false;

	public function GetChidreninClass(){
		return $this->hasMany('App\models\childenModel', 'class_id', 'id');
	}




}
?>