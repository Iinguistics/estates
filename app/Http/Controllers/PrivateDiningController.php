<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Event;

class PrivateDiningController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('events.index', [
            'events' => $events
        ]);
    }


    public function store(){

        // get an instance of the event table
        $event = new Event();

        // use request() to get the value from the form
        $event->name = request('name');
        $event->email = request('email');
        $event->phone = request('phone');
        $event->space = request('space');
        $event->date = request('date');
        $event->start = request('start');
        $event->end= request('end');
       //$toppings = request('toppings')->json();
       // $event->toppings = request($toppings);
        // save event to data base...since $event is an instance of the model it has access to all the sql methods
        $event->save();
        
        // use with() method to chain on to the redirect...session data
        return redirect('/')->with('event-submit-message', 'Your event has been submitted');
    }


    public function show($id){
        // use the $id variable to query the db for a record

        $event = Event::findOrFail($id);
        return view('events.show', ['event' => $event]);
    }


    public function destroy($id){
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect('/events')->with('event-destroy-message', 'Event has been deleted');
    }



}
