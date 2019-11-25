<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
use App\models\lop;
class childenModel extends Model{
<<<<<<< HEAD

=======
	
>>>>>>> eb1ded18289e7ea9d206df28650da2357f787b0c
	protected $table = 'childrens';
	public $timestamps = false;

	public function showlop(){
    	return $this->belongsto('App\models\lop','class_id','id');
   }
}
?>