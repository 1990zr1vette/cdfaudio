<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Editorial;

use Input;
use Session;

class EditorialController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/editorials/editorials')
			->with('title', 'Editorials')
			->with('Editorials', Editorial::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/editorials/addeditorial')
			->with('title', 'Add Editorial');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $this->newRecord('Editorial', $request, 'admin/editorials');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/editorials/editorial')
			->with('title', 'Edit Editorial')
			->with('Editorial', Editorial::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		return $this->updateRecord('Editorial', $request, $id, 'admin/editorials');
	}
	
	// ****************************** EDITORIAL ****************************** //
	public function editorial($id)
	{
		Session::put('lang','EN');
		return $this->editorialblade($id);
	}
	
	public function article($id)
	{
		Session::put('lang','FR');
		return $this->editorialblade($id);
	}	
	
	private function editorialblade($id)
	{
		$url_ol = languages('article/', 'editorial/') . $id;
		
		return view('editorials/editorial')
			->with('title', languages(EDITORIALS, EDITORIALS_FR))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', $url_ol)	
			->with('Editorial', Editorial::find($id));
	}
	// ****************************** EDITORIAL ****************************** //
	
	// ****************************** EDITORIALS ****************************** //
	public function editorials()
	{
		Session::put('lang','EN');
		return $this->editorialsblade();		
	}
	
	public function editorialsfr()
	{
		Session::put('lang','FR');
		return $this->editorialsblade();				
	}

	private function editorialsblade()
	{
		$url_ol = languages(replaceAccents(EDITORIALSURL_FR), EDITORIALSURL);
		
		return view('editorials/editorials')
			->with('title', languages(EDITORIALS, EDITORIALS_FR))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', $url_ol)	
			->with('Editorials', Editorial::where('active',1)->get());
	}
	// ****************************** EDITORIALS ****************************** //		

}
