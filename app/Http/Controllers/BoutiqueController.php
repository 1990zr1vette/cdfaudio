<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Boutique;

use Input;

use Session;

class BoutiqueController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/boutiques/boutiques')
			->with('title', 'Boutiques')
			->with('Boutiques', Boutique::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/boutiques/addboutique')
			->with('title', 'Add Boutiques');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Boutique::create($request->all());
		return redirect('admin/boutiques/create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/boutiques/boutique')
			->with('title', 'Edit Boutiques')
			->with('Boutique', Boutique::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Boutique = Boutique::findOrFail($id);		 
		$Boutique->fill(Input::all())->save(); 
		return redirect('admin/boutiques');
	}

}
