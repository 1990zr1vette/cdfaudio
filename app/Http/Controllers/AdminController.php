<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return view
	 */
	public function index()
	{
		return view('admin/admin/admin')
			->with('title', 'Manage');
	}


}
