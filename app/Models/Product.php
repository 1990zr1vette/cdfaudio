<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \App\Models\ProductType;

class Product extends Model {

	protected $fillable = array(
		'product', 
		'product_fr', 
		'keywords', 
		'keywords_fr', 
		'description', 
		'description_fr', 
		'active');
	
	var $ProductTypes = array();
	
    public function ProductTypes()
    {
        return $this->hasMany('\App\Models\ProductType');
    }
	
    public function ProductBrands()
    {
        return $this->hasMany('\App\Models\BrandProduct');
    }

	public function InventoryItems()
    {
        return $this->hasMany('\App\Models\InventoryItem');
    }
	
	public static function getProducts()
	{	
		// ***** Get all the active products ***** //
		$Products = Product::where('products.active', 1)->get();

		// ***** For each product get all the active product types ***** //
		foreach($Products as &$Product)
		{
			$Product->ProductTypes = ProductType::where('active', 1)->where('product_id', $Product->id)->get();
		}
		
		// ***** Set the url for each product and all its types ***** //
		foreach($Products as &$Product)
		{
			$Product->href = languages(PRODUCTS, PRODUCTS_FR) . 
							 '/' . 
						     fixSegment($Product->product, $Product->product_fr) . 
							  '/' .
							 $Product->id;
							 
			foreach ($Product->ProductTypes as &$ProductType)
			{
				$ProductType->href = languages(PRODUCTS, PRODUCTS_FR) . '/' . 
				              fixSegment($Product->product, $Product->product_fr) . '/' . 
							  fixSegment($ProductType->type, $ProductType->type_fr) . '/' . 
							  $Product->id . '/' . 
							  $ProductType->id;
			}
		}
		
		return $Products;	
	}
	
	// ***** Get all the products that are not associated with a brand *****//
	public static function nonBrandProducts($brand_id)
	{		
		$sql = "SELECT products.* FROM products ";
		$sql .= "LEFT JOIN brand_products ";
		$sql .= "ON products.id=brand_products.product_id ";
		$sql .= "AND brand_products.brand_id=" . $brand_id . " "; 
		$sql .= "WHERE brand_products.id IS NULL";

		return \DB::select($sql);
	}	
}
