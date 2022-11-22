<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Mail\DecisionMail;
use App\Mail\DecisionsMail;
use Illuminate\Support\Facades\Mail;
use PDF;

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

        // dd($change->email);

        $res = $change->update();

        if($res)
        {
            Toastr::success('Status changed!', 'Success!');
            if($change->status == 'active') {
                Mail::to($change['email'])->send(new DecisionMail($change));
            } else
            {
                Mail::to($change['email'])->send(new DecisionsMail($change));
            }
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
            if($change->status == 'active') {
                Mail::to($change['email'])->send(new DecisionMail($change));
            } else
            {
                Mail::to($change['email'])->send(new DecisionsMail($change));
            }
            return redirect('/admin/alumni');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }
    }

    public function viewAlumni($id)
    {
        $alumni = User::find($id);
        return view('admin.alumni.view', compact('alumni'));
    }

    public function deleteAlumni($id)
    {
        $alumni = User::find($id);

        $res = $alumni->delete();

        if($res)
        {
            Toastr::success('Alumni deleted successfully!', 'Success!');
            return redirect('/admin/alumni');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }

    }

    public function viewMember($id)
    {
        $member = User::find($id);
        return view('admin.member.view', compact('member'));
    }

    public function deleteMember($id)
    {
        $member = User::find($id);

        $res = $member->delete();

        if($res)
        {
            Toastr::success('Member deleted successfully!', 'Success!');
            return redirect('/admin/member');
        } else 
        {
            Toastr::error('Something went wrong!', 'Warning!');
            return redirect()->back();
        }

    }

    public function viewTables()
    {
        $alumni = User::all()->where('role_id', 3)->where('status', 'active');
        $alumnis = User::all()->where('role_id', 3)->where('status', 'active')->where('employment_status', 'unemployed');
        $alumn = User::all()->where('role_id', 3)->where('status', 'active')->where('employment_status', 'employed');
        $member = User::all()->where('role_id',2)->where('status', 'active');
        return view('admin.report.view', compact('alumni','alumnis','alumn','member'));
    }

    public function export_alumni_pdf()
    {
        $alumni = User::all()->where('role_id', 3)->where('status', 'active');
        $pdf = PDF::loadView('pdf.allumni', [
            'alumni'=>$alumni
        ]);
        // return $pdf->stream();
        return $pdf->download('allumni.pdf');
    }

    public function export_unemployed_alumni_pdf()
    {
        $alumni = User::all()->where('role_id', 3)->where('status', 'active')->where('employment_status', 'unemployed');
        $pdf = PDF::loadView('pdf.unemployed', [
            'alumni'=>$alumni
        ]);
        // return $pdf->stream();
        return $pdf->download('unemployed.pdf');
    }

    public function export_employed_alumni_pdf()
    {
        $alumni = User::all()->where('role_id', 3)->where('status', 'active')->where('employment_status', 'employed');
        $pdf = PDF::loadView('pdf.employed', [
            'alumni'=>$alumni
        ]);
        // return $pdf->stream();
        return $pdf->download('employed.pdf');
    }

    public function export_members_pdf()
    {
        $members = User::all()->where('role_id', 2)->where('status', 'active');
        $pdf = PDF::loadView('pdf.members', [
            'members'=>$members
        ]);
        // return $pdf->stream();
        return $pdf->download('members.pdf');
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
