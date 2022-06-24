<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ContactusData;
use App\Mail\ContactusMail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
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
        Log::debug( $request);
        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required',
          'phone' => 'nullable',
          'message' => 'required',
        ]);
        $maildata=array();
        $maildata['name']    		= $request->name;
        $maildata['email'] 		=  $request->email;
        $maildata['subject'] 		=  'Contactus Enquiry';
        $maildata['phone'] 		=  $request->phone;
        $maildata['message']		=  '';
           

        $data = new ContactusData;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $res = $data->save();
        if($res) {
            Mail::send(new ContactusMail($maildata));
            return redirect('/')->with('status', 'Ajax Form Data Has Been validated and store into database');
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
        //
    }
}
