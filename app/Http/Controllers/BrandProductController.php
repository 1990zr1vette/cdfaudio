<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;
use \App\Models\BrandProduct;
use \App\Models\Product;

class BrandProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($brand_id)
	{
		$BrandProducts = BrandProduct::with('Product')
			->where('brand_id', $brand_id)
			->get();

		//foreach($BrandProducts as $BrandProduct)
		//{
			//print_r((array)$BrandProduct->Product->product);
			//echo $BrandProduct->Product->product;
			//die();
		//}

		return view('admin/brandproducts/brandproducts')
			->with('title', 'Brands Products')
			->with('Brand', Brand::where('id', $brand_id)->first())
			->with('BrandProducts', $BrandProducts);			
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($brand_id)
	{
		return view('admin/brandproducts/addbrandproduct')
			->with('title', 'Brand Product Add')
			->with('Brand', Brand::where('id', $brand_id)->first())
			->with('Products', Product::nonBrandProducts($brand_id));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		BrandProduct::create($request->all());
		return redirect('admin/brands/' . $request->get('brand_id') . '/products');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
