<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
use App\models\lop;
use App\models\parentModel;
class childenModel extends Model{
	protected $table = 'childrens';
	// public $timestamps = false;

	public function showlop(){
    	return $this->belongsto('App\models\lop','class_id','id');
   }

   public function showparents(){
		return $this->belongsto('App\models\parentModel', 'parent_id', 'id_users');
	}

}
?>