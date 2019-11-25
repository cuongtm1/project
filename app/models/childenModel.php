<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
use App\models\lop;
class childenModel extends Model{
	
	protected $table = 'childrens';
	public $timestamps = false;

	public function showlop(){
    	return $this->belongsto('App\models\lop','class_id','id');
   }
}
?>