<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Team;

use Input;

use Session;

class TeamController extends Controller {

	private $model = 'Team';
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/team/members')
			->with('title', 'Members')
			->with('Members', Team::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/team/addmember')
			->with('title', 'Add Member');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $this->newRecord($this->model, $request, 'admin/team');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/team/member')
			->with('title', 'Create Member')
			->with('Member', Team::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		return $this->updateRecord($this->model, $request, $id, 'admin/team');
	}
}
