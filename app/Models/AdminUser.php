<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model {

	protected $fillable = array(
		'userName', 
		'password', 
		'firstName', 
		'lastName',  
		'active');

	public function setPassword()
	{
		$this->password = \Hash::make($this->password);
	}
	
	public function fullName()
	{
		return $this->firstName . ' ' . $this->lastName;
	}
	

}
