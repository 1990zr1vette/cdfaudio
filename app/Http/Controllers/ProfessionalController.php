<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Professional;

use Input;

use Session;

class ProfessionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/professionals/professionals')
			->with('title', 'Professionals')
			->with('Professionals', Professional::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/professionals/addprofessional')
			->with('title', 'Add Professional');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Professional::create($request->all());
		return redirect('admin/professionals/create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/professionals/professional')
			->with('title', 'Edit Professional')
			->with('Professional', Professional::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Professional = Artist::findOrFail($id);		 
		$Professional->fill(Input::all())->save(); 
		return redirect('admin/professionals');
	}

}
