<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery;

        $request->validate([
            'picture' => 'required',
        ]);

        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filname = time().'.'.$extension;
            $file->move('uploads/gallery/', $filname);
            $gallery->picture = $filname;
        }

        $res = $gallery->save();

        if($res)
        {
            Toastr::success('Gallery added successfully!', 'Success!');
            return redirect('/admin/gallery');
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
        $gallery = Gallery::find($id);
        
        $destination = 'uploads/gallery/'.$gallery->picture;
        
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $res = $gallery->delete();

        if($res)
        {
            Toastr::error('Gallery deleted successfully!', 'Success!');
            return redirect('/admin/gallery');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }
}
