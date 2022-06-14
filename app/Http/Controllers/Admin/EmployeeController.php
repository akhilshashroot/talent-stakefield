<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StakefieldUser;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone' => 'nullable',
            'skillset' => 'required',
            'experience' => 'required',
            'time' => 'required',
            'availability' => 'required',
            'rate' => 'required',
            'talentid' => 'required',
            'userid'=>'nullable'
        ]);
        if($validated['userid']) {
            $user =  StakefieldUser::where('id',$validated['userid'])->first();
        } else {
            $user = new StakefieldUser;
        }
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->skill_set = $validated['skillset'];
        $user->experience = $validated['experience'];
        $user->turnaround_time = $validated['time'];
        $user->availability = $validated['availability'];
        $user->rate = $validated['rate'];
        $user->employee_id = $validated['talentid'];
        $res = $user->save();
        if($res && $validated['userid']) {
            return redirect()->route('home')->with('message', 'Employee updated successfully');
        } elseif($res) {
            return redirect()->route('home')->with('message', 'Employee added successfully');
        } else {
            return redirect()->route('home')->with('error', 'Some errors occur');
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
        $employee = StakefieldUser::where('id',$id)->first();
        return response()->json($employee, 200);
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
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StakefieldUser::find($id)->delete();
  
        return back();
    }
}