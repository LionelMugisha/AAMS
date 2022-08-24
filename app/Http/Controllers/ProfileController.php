<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function medit()
    {
        // $users = User::find($id)->where($id, '==' ,auth()->user()->id);
        return view('member.profile.index')->with('user', auth()->user());
    }

    public function aledit()
    {
        // $users = User::find($id)->where($id, '==' ,auth()->user()->id);
        return view('alumni.profile.index')->with('user', auth()->user());
    }

    public function mupdate(Request $request)
    {
        $user = auth()->user();
        
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|max:255|unique:users',
            'telephone' => 'required|min:10',
            'employment' => 'required|min:3',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->employment = $request->input('employment');
        
        $res = $user->update();

        if($res)
        {
            Toastr::success('Profile updated successfully!', 'Success!');
            return redirect('/member/profile');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }

    public function alupdate(Request $request)
    {
        $user = auth()->user();
        
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'telephone' => 'required|min:10|unique:users',
            'faculty' => 'required|min:2',
            'department' => 'required|min:2',
            'yearofgraduation' => 'required|min:4',
            'address' => 'required|min:2',
            'school_id' => 'required|min:5',
            // 'employment_status' => 'required',
            'employment_status' => 'in:employed,unemployed',
        ]);
        if($request->employment_status == 'employed'){
            $request->validate(['employment' => 'required|min:2']);
        }
        
        // dd($request);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->faculty = $request->input('faculty');
        $user->department = $request->input('department');
        $user->yearofgraduation = $request->input('yearofgraduation');
        $user->school_id = $request->input('school_id');
        $user->address = $request->input('address');
        $user->employment_status = $request->input('employment_status');
        $user->employment = $request->input('employment');
        
        $res = $user->update();

        if($res)
        {
            Toastr::success('Profile updated successfully!', 'Success!');
            return redirect('/alumni/profile');
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
