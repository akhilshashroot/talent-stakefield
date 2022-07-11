<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StakefieldUser;
use Illuminate\Support\Facades\Log;
use App\Models\EnquiryData;
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
            'name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'comments' => 'nullable',
            'skillset' => 'required',
            'experience' => 'required',
            'time' => 'required',
            'availability' => 'required',
            'rate' => 'required',
            'talentid' => 'required',
            'userid'=>'nullable',
            'ectc' => 'nullable'
        ]);
        if($validated['userid']) {
            $user =  StakefieldUser::where('id',$validated['userid'])->first();
        } else {
            $user = new StakefieldUser;
        }
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->skill_set = preg_replace('/(?<!,) {2,}/', ' ', $validated['skillset']);
        $user->experience = $validated['experience'];
        $user->turnaround_time = $validated['time'];
        $user->availability = $validated['availability'];
        $user->rate = $validated['rate'];
        $user->employee_id = $validated['talentid'];
        $string= str_replace(' ', '',$validated['skillset']);
        $user->skill_data =$string;
        $user->comments =$validated['comments'];
        $user->ectc =$validated['ectc'];
        $res = $user->save();
       // dd($validated);
     //   $this->curlAdd($validated);
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
    public function show($talentid)
    {
        $employee = StakefieldUser::where('employee_id',$talentid)->first();
        return response()->json($employee, 200);
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
        $validated=['id'=>$id];
        $this->curlDelete($validated);
        return redirect()->route('home')->with('message', 'Employee deleted successfully');
    }



    public function curlAdd($request)
    {
        $fields_string  =  $request;
       // Log::info( "curlrequest",[$fields_string]);

        $header         = [
                            'Accept: application/json',
                            'Cache-Control: no-cache',
                          ];
       
            $url          = 'http://talents.hashroot.org/api/employee-add';
      
     
            $ch         = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response   = curl_exec($ch);
            curl_close ($ch);
       
    }
    

    public function curlDelete($request)
    {
        $fields_string  =  $request;
       // Log::info( "curlrequest",[$fields_string]);

        $header         = [
                            'Accept: application/json',
                            'Cache-Control: no-cache',
                          ];
       
            $url          = 'http://talents.hashroot.org/api/employee-delete';
      
     
            $ch         = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response   = curl_exec($ch);
            curl_close ($ch);
       
    }
}
