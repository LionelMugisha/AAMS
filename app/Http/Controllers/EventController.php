<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->details = $request->input('details');
        $event->timeHappening = $request->input('timeHappening');
        $event->dateHappening = $request->input('dateHappening');
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filname = time().'.'.$extension;
            $file->move('uploads/events/', $filname);
            $event->picture = $filname;
        }
        $event->save();
        return redirect()->back()->with('status', 'Event added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->details = $request->input('details');
        $event->timeHappening = $request->input('timeHappening');
        $event->dateHappening = $request->input('dateHappening');
        if($request->hasFile('picture'))
        {
            $destination = 'uploads/events/'.$event->picture;
            if (File::exists($destination)) 
            {
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filname = time().'.'.$extension;
            $file->move('uploads/events/', $filname);
            $event->picture = $filname;
        }
        $event->update();
        return redirect()->back()->with('status', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        
        $destination = 'uploads/events/'.$event->picture;
        
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $event->delete();
        return redirect()->back()->with('status', 'Event deleted successfully');

    }
}
