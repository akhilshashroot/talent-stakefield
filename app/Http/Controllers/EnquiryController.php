<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\Models\EnquiryData;
use App\Models\StakefieldUser;
use Illuminate\Support\Facades\Log;
use App\Mail\EnquiryMail;
use Illuminate\Support\Facades\Mail;
class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        Log::debug( $request);
        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required',
        ]);
        $save = new EnquiryData;
 
        $save->name = $request->name;
        $save->email = $request->email;
        $save->phone = $request->phone;
        $save->user_id = $request->idkl;
        $save->save();
        $talent_id=StakefieldUser::find($request->idkl)->employee_id;
        $data=array();
        $data['name']    		= $request->name;
        $data['email'] 		=  $request->email;
        $data['subject'] 		=  'Enquiry';
        $data['phone'] 		=  $request->phone;

        $data['message']		=  'There is an enquiry for Talent Id'.$talent_id;
     //   try {
           Mail::send(new EnquiryMail($data));
          //  $er['stat'] = 1;
          //  $er['statusmsg'] = "Mail has been sent successfully!";     
          //  return response()->json($er);
           
     //     } catch (\Exception $e) {
                
  //          $er['stat'] = 0;
  //  $er['statusmsg'] = "Something went wrong! Please contact us at info@hashroot.com";
  //          return response()->json($er);

  //      }
        return redirect('/')->with('status', 'Ajax Form Data Has Been validated and store into database');
 
    }
}
