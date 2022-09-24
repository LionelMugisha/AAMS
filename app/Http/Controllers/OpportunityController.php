<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aindex()
    {
        $opportunities = Opportunity::all();
        return view('admin.post.index', compact('opportunities'));
    }

    public function acreatepost()
    {
        return view('admin.post.create');
    }

    public function asavepost(Request $request)
    {
        $post = new Opportunity;
        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'picture' => 'required',
        ]);
        $post->name = $request->input('name');
        $post->position = $request->input('position');
        $post->user_id = auth()->user()->id;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filname = time().'.'.$extension;
            $file->move('uploads/post/', $filname);
            $post->picture = $filname;
        }
        
        $res = $post->save();

        if($res)
        {
            Toastr::success('Post registered successfully!', 'Success!');
            return redirect('/admin/job_opportunities');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }


    public function aluindex()
    {
        $posts = Opportunity::all()->where('user_id',auth()->user()->id);
        return view('alumni.post.index', compact('posts'));
    }

    public function alucreatepost()
    {
        return view('alumni.post.create');
    }

    public function alusavepost(Request $request)
    {
        $post = new Opportunity;

        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'picture' => 'required',
        ]);

        $post->name = $request->input('name');
        $post->position = $request->input('position');
        $post->user_id = auth()->user()->id;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filname = time().'.'.$extension;
            $file->move('uploads/post/', $filname);
            $post->picture = $filname;
        }
        
        $res = $post->save();

        if($res)
        {
            Toastr::success('Post registered successfully!', 'Success!');
            return redirect('/alumni/job_opportunities');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }


    public function mindex()
    {
        $jobs = Opportunity::all()->where('user_id',auth()->user()->id);
        return view('member.post.index', compact('jobs'));
    }

    public function mcreatepost()
    {
        return view('member.post.create');
    }

    public function msavepost(Request $request)
    {
        $post = new Opportunity;

        $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'picture' => 'required',
        ]);

        $post->name = $request->input('name');
        $post->position = $request->input('position');
        $post->user_id = auth()->user()->id;
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filname = time().'.'.$extension;
            $file->move('uploads/post/', $filname);
            $post->picture = $filname;
        }
        
        $res = $post->save();

        if($res)
        {
            Toastr::success('Post registered successfully!', 'Success!');
            return redirect('/member/job_opportunities');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function show(Opportunity $opportunity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function edit(Opportunity $opportunity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opportunity $opportunity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opportunity  $opportunity
     * @return \Illuminate\Http\Response
     */
    public function aludestroy($id)
    {
        $opportunity = Opportunity::find($id)->where('user_id',auth()->user()->id);
        
        $destination = 'uploads/post/'.$opportunity->picture;
        
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $res = $opportunity->delete();

        if($res)
        {
            Toastr::success('Job opportunity deleted successfully!', 'Success!');
            return redirect('/alumni/job_opportunities');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }

    public function mdestory($id)
    {
        $opportunity = Opportunity::find($id)->where('user_id',auth()->user()->id);
        
        $destination = 'uploads/post/'.$opportunity->picture;
        
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $res = $opportunity->delete();

        if($res)
        {
            Toastr::success('Job opportunity deleted successfully!', 'Success!');
            return redirect('/member/job_opportunities');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }

    }

    public function admindestroy($id)
    {
        $opportunity = Opportunity::find($id);
        
        $destination = 'uploads/post/'.$opportunity->picture;
        
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }

        $res = $opportunity->delete();

        if($res)
        {
            Toastr::success('Job opportunity deleted successfully!', 'Success!');
            return redirect('/admin/job_opportunities');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }
}
