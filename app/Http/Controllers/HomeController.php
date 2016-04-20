<?php namespace App\Http\Controllers;

use \App\Models\Brand;

use \App\Models\Announcement;
use \App\Models\Editorial;
use \App\Models\Event;

use Session;

class HomeController extends Controller {

	/**
	 * Show the home blade to the user.
	 *
	 * @return View
	 */
	public function home()
	{
		Session::put('lang','EN');
		return $this->homeblade();
	}
	
	public function acceuil()
	{
		Session::put('lang','FR');
		return $this->homeblade();
	}
	
	public function homeblade()
	{
		$Event = Event::where('current', 1)->first();
		
		if (!$Event)
		{
			$Event = Event::where('active', 1)->first();
		}
		
		return view('home/home')
			->with('title', languages(HOME, HOME_FR))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', languages(HOME_FR, HOME))			
			->with('Brands', Brand::where('active', '1')->get())
			->with('Announcement', Announcement::where('current',1)->first())
			->with('Editorial', Editorial::where('current',1)->first())
			->with('Event', $Event);
	}
}
