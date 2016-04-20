<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	protected $fillable = array(
		'brand', 
		'about', 
		'about_fr', 
		'image', 
		'website', 
		'keywords', 
		'keywords_fr', 
		'description', 
		'description_fr', 
		'active');

    public function Products()
    {
        return $this->hasMany('\App\Models\BrandProduct');
    }
	
    public function InventoryItems()
    {
        return $this->hasMany('\App\Models\InventoryItem');
    }

}
