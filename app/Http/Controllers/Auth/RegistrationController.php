<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
// use Hash;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alumniindex()
    {
        return view('auth.alumniregistration');
    }

    public function memberindex()
    {
        return view('auth.memberregistration');
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

    public function trial()
    {
        $result = DB::connection('mysql1')->table('graduates')->pluck('yearofgraduation');
        return $result;
    }

    public function memberstore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'telephone' => 'required|min:10|unique:users',
            'employment' => 'required|min:2',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->employment = $request->employment;
        $user->password = Hash::make($request->password);
        $user->role_id = '2';
        $res = $user->save();
        if($res)
        {
            Toastr::info('Registration successful, wait for the confirmation!', 'Notice!');
            return redirect('/membersignup');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect('/membersignup');
        }
    }

    public function alumnistore(Request $request)
    {
        $user = new User();

        $existUser = [];
        $yog = [];
        $existUser = DB::connection('mysql1')->table('graduates')->pluck('school_id');
        $yog = DB::connection('mysql1')->table('graduates')->pluck('yearofgraduation');
        $list = new Collection($existUser);
        $years = new Collection($yog);

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
            'password' => 'required|min:6|confirmed',
        ]);
        if($request->employment_status == 'employed'){
            $request->validate(['employment' => 'required|min:2']);
        }
        
        // dd($request);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->faculty = $request->faculty;
        $user->department = $request->department;
        $user->yearofgraduation = $request->yearofgraduation;
        $user->school_id = $request->school_id;
        $user->address = $request->address;
        $user->employment_status = $request->employment_status;
        $user->employment = $request->employment;
        $user->password = Hash::make($request->password);
        $user->status = 'active';
        $user->role_id = '3';

        // if(in_array($request->school_id, $existUser))
        if($list->contains($request->school_id) && $years->contains($request->yearofgraduation))
        {
            $res = $user->save();

            if($res)
            {
                Toastr::success('Registration successful!', 'Success!');
                return redirect('/alumnisignup');
            } else 
            {
                Toastr::error('Something went wrong!', 'Warning!');
                return redirect('/alumnisignup');
            }
        }
        else 
        {
            Toastr::error('You are not apart of the school alumni!', 'Warning!');
            return redirect('/alumnisignup');
        }
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
