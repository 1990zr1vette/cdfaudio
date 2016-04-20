<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Event;

use Input;

use Session;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/events/events')
			->with('title', 'Events')
			->with('Events', Event::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/events/addevent')
			->with('title', 'Events Add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $this->newRecord('Event', $request, 'admin/events');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/events/event')
			->with('title', 'Event Edit')
			->with('Event', Event::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		return $this->updateRecord('Event', $request, $id, 'admin/events');
	}
	
	// ****************************** EVENT ****************************** //
	public function event($id)
	{
		Session::put('lang','EN');
		return $this->eventblade($id);
	}
	
	public function evenement($id)
	{
		Session::put('lang','FR');
		return $this->eventblade($id);
	}	
	
	private function eventblade($id)
	{
		$url_ol = languages(JOURNAL_FR, JOURNAL) . '/' . 
				  languages(rtrim(EVENTS, 's'), rtrim(EVENTS_FR, 's')) . $id;
		
		return view('events/event')
			->with('title', languages(EVENTS, EVENTS_FR))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', $url_ol)	
			->with('Event', Event::find($id));
	}
	// ****************************** EVENT ****************************** //
	
	// ****************************** EVENTS ****************************** //
	public function events()
	{
		Session::put('lang','EN');
		return $this->eventsblade();		
	}
	
	public function evenements()
	{
		Session::put('lang','FR');
		return $this->eventsblade();				
	}

	private function eventsblade()
	{
		$url_ol = languages(JOURNAL_FR, JOURNAL) . '/' . 
				  languages(replaceAccents(EVENTS_FR), EVENTS) . '/';
		
		return view('events/events')
			->with('title', languages(EVENTS, EVENTS_FR))
			->with('description', languages(DESCRIPTION, DESCRIPTION_FR))
			->with('keywords', languages(KEYWORDS, KEYWORDS_FR))			
			->with('urlol', $url_ol)	
			->with('Events', Event::where('active',1)->get());
	}
	// ****************************** EVENTS ****************************** //	
}
