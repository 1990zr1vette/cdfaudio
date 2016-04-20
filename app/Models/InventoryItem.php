<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model {

	protected $fillable = array(
		'brand_id',
		'product_id',
		'product_type_id',
		'model',
		'description',
		'description_fr',
		'image',
		'active');

	public function Brand()
    {
        return $this->belongsTo('\App\Models\Brand');
    }
	
	public function Product()
    {
        return $this->belongsTo('\App\Models\Product');
    }
	
	public static function getInventoryItems($brand_id, $product_id, $product_type_id)
	{		
		$sql = "SELECT i.*, b.brand FROM inventory_items AS i ";
		$sql .= "JOIN brands AS b ";
		$sql .= "ON i.brand_id=b.id ";
		$sql .= "WHERE i.product_id=" . $product_id . " ";
		if ($brand_id)
		{
			$sql .= "AND i.brand_id=" . $brand_id . " ";
		}
		if ($product_type_id)
		{
			$sql .= "AND i.product_type_id=" . $product_type_id . " ";
		}
		$sql .= "AND i.active=1 ";
		$sql .= "ORDER BY b.brand, i.model ";
		
		return \DB::select($sql);
	}
}
