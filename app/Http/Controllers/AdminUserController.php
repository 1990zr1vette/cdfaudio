<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\AdminUser;

use Input;

use Session;

class AdminUserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/adminusers/adminusers')
			->with('title', 'Admin Users')
			->with('AdminUsers', AdminUser::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/adminusers/addadminuser')
			->with('title', 'Add Admin User');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$request->merge(['password' => \Hash::make($request->password)]);
		AdminUser::create($request->all());
		return redirect('admin/adminusers');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/adminusers/adminuser')
			->with('title', 'Edit Admin User')
			->with('AdminUser', AdminUser::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$AdminUser = AdminUser::findOrFail($id);
		$AdminUser->fill(Input::all())->save();
		return redirect('admin/adminusers');
	}
}
