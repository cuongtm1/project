<?php 
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class imageModel extends Model{
	
	protected $table = 'beautiful_pictures';
	public $timestamps = false;

	// public function getPicture()
	// {
	//     return $this->hasOne('App\Models\PictureModel', 'beautiful_picture_id', 'id');
	// }
	public function getPicture()
	{
	    return $this->hasMany('App\Models\PictureModel', 'beautiful_picture_id', 'id');
	}
}
?>