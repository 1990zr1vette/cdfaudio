<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\BrandProduct;
use \App\Models\Product;

use Input;

use Session;

class BrandController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/brands/brands')
			->with('title', 'Brands')
			->with('Brands', Brand::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/brands/addbrand')
			->with('title', 'Brands -> Add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $this->newRecord('Brand', $request, 'admin/brands');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/brands/brand')
			->with('title', 'Brand Edit')
			->with('Brand', Brand::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		return $this->updateRecord('Brand', $request, $id, 'admin/brands');
	}
	
	// ********** BRAND ********** //
	public function brand($brand_name, $id)
	{
		Session::put('lang','EN');
		return $this->brandBlade($brand_name, $id);
	}
	
	public function marque($brand_name, $id)
	{
		Session::put('lang','FR');
		return $this->brandBlade($brand_name, $id);
	}	
	
	private function brandBlade($brand_name, $id)
	{
		$Brand = Brand::with('Products')
			->where('active', 1)
			->find($id);
		
		if ($Brand)
		{
			$title = languages(BRANDS, BRANDS_FR) . ' ' . $Brand->brand;
				
			$urlol = languages(BRANDS_FR,BRANDS) . '/' . 
				fixSegment($Brand->brand) . '/' . 
				$Brand->id;
								
			return view('brands/brand')
				->with('title', $title)
				->with('description', $Brand->description)
				->with('keywords', $Brand->keywords)
				->with('urlol', $urlol)
				->with('Brand', $Brand);			
		}
		else
		{
			$title = languages('Brand does not exist', 'Marque n\'existe pas');
				
			$urlol = languages(BRANDS, BRANDS_FR); 
								
			return view('brands/nobrand')
				->with('title', $title)
				->with('description', '')
				->with('keywords', '')
				->with('urlol', $urlol);
		}
		
	}	
	// ********** BRAND ********** //
	
	// ********** ALL BRANDS ********** //
	public function brands()
	{
		Session::put('lang','EN');
		return $this->brandsblade();
	}
	
	public function marques()
	{
		Session::put('lang','FR');
		return $this->brandsblade();
	}
	
	public function brandsblade()
	{
		return view('brands/brands')
			->with('title', ucfirst(languages(BRANDS, BRANDS_FR)))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', languages(BRANDS_FR, BRANDS))
			->with('Brands', Brand::where('active', '1')->get());		
	}
	// ********** ALL BRANDS ********** //	

	// ********** BRAND PRODUCT *********** /
	public function brandproduct($brand_name, $product_name, $brand_id, $product_id)
	{
		Session::put('lang','EN');
		return $this->brandproductblade($brand_id, $product_id);		
	}
	
	public function marqueproduit($brand_name, $product_name, $brand_id, $product_id)
	{
		Session::put('lang','FR');
		return $this->brandproductblade($brand_id, $product_id);
	}
	
	public function brandproductblade($brand_id, $product_id)
	{
		return view('brands/brandproduct')
			->with('title', ucfirst(languages(BRANDS, BRANDS_FR)))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', languages(BRANDS_FR, BRANDS))
			->with('Brand', Brand::where('id', $brand_id)->first())
			->with('Product', Product::where('id', $product_id)->first());			
	}
	// ********** BRAND PRODUCT *********** /

}
