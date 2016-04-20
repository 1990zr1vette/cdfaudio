<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model {

	protected $fillable = array(
		'title', 
		'title_fr', 
		'title', 
		'description', 
		'description_fr', 
		'image', 
		'active');

}
