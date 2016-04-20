<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Product;
use \App\Models\ProductType;

use Input;

class ProductTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($product_id)
	{
		return view('admin/producttypes/producttypes')
			->with('title', 'Product Types')
			->with('Product', Product::where('id', $product_id)->first())
			->with('ProductTypes', ProductType::where('product_id', $product_id)->get());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($product_id)
	{
		return view('admin/producttypes/addproducttype')
			->with('title', 'Product Types -> Add')
			->with('Product',Product::where('id',$product_id)->first());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		ProductType::create($request->all());
		return redirect('admin/products/' . $request->get('product_id') . '/producttypes');		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($product_id, $id)
	{
		return view('admin/producttypes/producttype')
			->with('title', 'Product Type -> Edit')
			->with('ProductType', ProductType::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($product_id, $id)
	{
		$ProductType = ProductType::findOrFail($id);		
		$ProductType->fill(Input::all())->save();
		return redirect('admin/products/' . $ProductType->product_id . '/producttypes');
	}

}
