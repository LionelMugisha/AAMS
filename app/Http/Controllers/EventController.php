<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

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
        $request->validate([
            'name' => 'required|max:255',
            'details' => 'required|max:255',
            'timeHappening' => 'required',
            'dateHappening' => 'required',
            'picture' => 'required',
            'place' => 'required|max:255',
        ]);
        $event->name = $request->input('name');
        $event->details = $request->input('details');
        $event->place = $request->input('place');
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
        
        $res = $event->save();

        if($res)
        {
            Toastr::success('Event registered successfully!', 'Success!');
            return redirect('/admin/event');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
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

        $request->validate([
            'name' => 'required|max:255',
            'details' => 'required|max:255',
            'timeHappening' => 'required',
            'dateHappening' => 'required',
            'picture' => 'required',
            'place' => 'required|max:255',
        ]);

        $event->name = $request->input('name');
        $event->details = $request->input('details');
        $event->place = $request->input('place');
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

        $res = $event->update();

        if($res)
        {
            Toastr::success('Event updated successfully!', 'Success!');
            return redirect('/admin/event');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }

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

        $res = $event->delete();

        if($res)
        {
            Toastr::success('Event deleted successfully!', 'Success!');
            return redirect('/admin/event');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }

    }
}
