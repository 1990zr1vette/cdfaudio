<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Http\Requests\CreateArtistRequest;

use \App\Models\Artist;

use Input;

use Session;

class ArtistController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/artists/artists')
			->with('title', 'Artists')
			->with('Artists', Artist::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/artists/addartist')
			->with('title', 'Add Artist');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	//public function store(Request $request)
	public function store(CreateArtistRequest $request)
	{
		Artist::create($request->all());
		return redirect('admin/artists/create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/artists/artist')
			->with('title', 'Edit Artist')
			->with('Artist', Artist::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Artist = Artist::findOrFail($id);		 
		$Artist->fill(Input::all())->save(); 
		return redirect('admin/artists');
	}

}
