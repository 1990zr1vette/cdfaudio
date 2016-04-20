<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Restaurant;

use Input;

use Session;

class RestaurantController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/restaurants/restaurants')
			->with('title', 'Restaurants')
			->with('Restaurants', Restaurant::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/restaurants/addrestaurant')
			->with('title', 'Add Restaurant');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Restaurant::create($request->all());
		return redirect('admin/restaurants/create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/restaurants/restaurant')
			->with('title', 'Edit Restaurant')
			->with('Restaurant', Restaurant::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Restaurant = Restaurant::findOrFail($id);		 
		$Restaurant->fill(Input::all())->save(); 
		return redirect('admin/restaurants');
	}

}
