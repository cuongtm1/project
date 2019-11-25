<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
class ChildenModel extends Model{
=======
use App\models\lop;
class childenModel extends Model{
>>>>>>> cc6d448d019e6f1a4d839f5d60700eeaba91c9f7
	
	protected $table = 'childrens';
	public $timestamps = false;

	public function showlop(){
    	return $this->belongsto('App\models\lop','class_id','id');
   }
}
?>