<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\BrandProduct;
use \App\Models\Product;
use \App\Models\ProductType;
use \App\Models\InventoryItem;

use Input;

use Session;

class InventoryItemController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($brand_id, $product_id)
	{
		$InventoryItems = InventoryItem::where('brand_id', $brand_id)
			->where('product_id', $product_id)
			->get();
		
		return view('admin/inventoryitems/inventoryitems')
			->with('title', 'Inventory Items')
			->with('Brand', Brand::find($brand_id))
			->with('Product', Product::find($product_id))			
			->with('InventoryItems', $InventoryItems);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($brand_id, $product_id)
	{
		$ProductTypes = ProductType::where('product_id', $product_id)->get();
		
		return view('admin/inventoryitems/addinventoryitem')
			->with('title', 'Add Inventory Item')
			->with('Product', Product::find($product_id))
			->with('Brand', Brand::find($brand_id))
			->with('ProductTypes', $ProductTypes);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$redirect = 'admin/brands/' .
			$request->get('brand_id') .
			'/products/' .
			$request->get('product_id') .
			'/inventoryitems';
		
		return $this->newRecord('InventoryItem', $request, $redirect);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($brand_id, $product_id, $id)
	{
		return view('admin/inventoryitems/inventory_item')
			->with('title', 'Edit Inventory Item')
			->with('InventoryItem', InventoryItem::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $brand_id, $product_id, $id)
	{
		$redirect = 'admin/brands/' . 
			$request->get('brand_id') . 
			'/products/' . 
			$request->get('product_id') . 
			'/inventoryitems';
			
		return $this->updateRecord('InventoryItem', $request, $id, $redirect);
	}

	// ************** GET INVENTORY BY PRODUCT ID (BRAND OPTIONAL) *************** //
	public function products($product, $product_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','EN');
		return $this->productsBlade($product, $product_id, $brand, $brand_id);
	}
	
	public function produits($product, $product_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','FR');
		return $this->productsBlade($product, $product_id, $brand, $brand_id);
	}
	
	public function productsBlade($product, $product_id, $brand, $brand_id)
	{ 
		$Product = Product::findOrFail($product_id);
		
		$ProductBrands = BrandProduct::with('Brand')
			->where('product_id', $product_id)
			->get();
		
		$InventoryItems = InventoryItem::getInventoryItems($brand_id, $product_id, null);
		
		$url_ol = languages(PRODUCTS_FR, PRODUCTS) . '/' .  
		          fixSegment($Product->product_fr, $Product->product) . '/' .
				  $Product->id;

		$brandurl = languages(PRODUCTS, PRODUCTS_FR) . '/' .
			        fixSegment($Product->product, $Product->product_fr) . '/' .
					$product_id . '/' . 
					languages('brand/', 'marque/');
		
		$description = languages($Product->description, $Product->description_fr);
		$keywords = languages($Product->keywords, $Product->keywords_fr);		
		
		return view('inventoryitems/inventoryitems')		
			->with('title', languages($Product->product, $Product->product_fr))		
			->with('description', $description)
			->with('keywords', $keywords)
			->with('urlol', $url_ol)
			->with('brandurl', $brandurl)
			->with('Product', $Product)
			->with('ProductBrands', $ProductBrands)
			->with('InventoryItems', $InventoryItems);
	}
	// ************** GET INVENTORY BY PRODUCT ID (BRAND OPTIONAL) *************** //

	// *************** GET INVENTORY BY PRODUCT AND TYPE ID (BRAND OPTIONAL) *************** //
	public function typesen($product_name, $type_name, $product_id, $product_type_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','EN');
		return $this->typesBlade($product_name, $type_name, $product_id, $product_type_id, $brand, $brand_id);
	}
	
	public function typesfr($product_name, $type_name, $product_id, $product_type_id, $brand = null, $brand_id = null)
	{
		Session::put('lang','FR');
		return $this->typesBlade($product_name, $type_name, $product_id, $product_type_id, $brand, $brand_id);
	}
	
	public function typesBlade($product_name, $type_name, $product_id, $product_type_id, $brand, $brand_id)
	{
		$Product = Product::findOrFail($product_id);
		
		$ProductType = ProductType::findOrFail($product_type_id);
		
		$ProductBrands = BrandProduct::with('Brand')
			->where('product_id', $product_id)
			->get();
		
		$InventoryItems = InventoryItem::getInventoryItems($brand_id, $product_id, $product_type_id);
		
		$url_ol = languages('produits/', 'products/') . 
				  fixSegment($Product->product_fr, $Product->product)  . '/' .
				  fixSegment($ProductType->type_fr, $ProductType->type) . '/' . 
				  $Product->id  . '/' .
				  $ProductType->id;
		
		$brandurl = languages(PRODUCTS, PRODUCTS_FR) . '/' .
			        fixSegment($Product->product, $Product->product_fr) . '/' .
					fixSegment($ProductType->type, $ProductType->type_fr) . '/' .
					$product_id . '/' .
					$product_type_id . '/' .
					languages('brand/', 'marque/');

		$title = languages(
			$Product->product . ' ' . $ProductType->type, 
			$Product->product_fr . ' ' . $ProductType->type_fr);
		
		$description = languages($ProductType->description, $ProductType->description_fr);
		$keywords = languages($ProductType->keywords, $ProductType->keywords_fr);
		
		return view('inventoryitems/inventoryitems')
			->with('title', $title)		
			->with('description', $description)
			->with('keywords', $keywords)
			->with('urlol',  $url_ol)	
			->with('brandurl', $brandurl)			
			->with('Product', $Product)
			->with('ProductType', $ProductType)
			->with('ProductBrands', $ProductBrands)
			->with('InventoryItems', $InventoryItems);
	}
	// *************** GET INVENTORY BY PRODUCT AND TYPE ID (BRAND OPTIONAL) *************** //	
}
