<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Information;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        $event = Event::all();
        return view('landing.index', compact('gallery','event'));
    }
    
    public function view()
    {
        $info = Information::all();
        return view('admin.contact.view', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new Information;
        $info->name = $request->input('name');
        $info->email = $request->input('email');
        $info->message = $request->input('message');
        $res = $info->save();

        if($res)
        {
            Toastr::success('Your inquiry has been submitted successfully!', 'Success!');
            return redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Information::find($id);

        $res = $info->delete();

        if($res)
        {
            Toastr::error('Inquiry deleted successfully!', 'Success!');
            return redirect('/admin/inquiry');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }
}
