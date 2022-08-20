<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alumniIndex()
    {
        $alumni = User::all()->where('role_id', 3);
        return view('admin.alumni.index', compact('alumni'));
    }

    public function memberIndex()
    {
        $member = User::all()->where('role_id', 2);
        return view('admin.member.index', compact('member'));
    }

    public function mchangestatus($id)
    {
        $change = User::find($id);

        if($change->status == 'active')
        {
            $change->status = 'inactive';
        }
        else
        {
            $change->status = 'active';
        }

        $res = $change->update();

        if($res)
        {
            Toastr::success('Status changed!', 'Success!');
            return redirect('/admin/member');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }

    public function achangestatus($id)
    {
        $change = User::find($id);

        if($change->status == 'active')
        {
            $change->status = 'inactive';
        }
        else
        {
            $change->status = 'active';
        }

        $res = $change->update();

        if($res)
        {
            Toastr::success('Status changed!', 'Success!');
            return redirect('/admin/alumni');
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
        //
    }
}
