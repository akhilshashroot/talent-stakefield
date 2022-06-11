<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\Models\EnquiryData;
use Illuminate\Support\Facades\Log;

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
      
        return redirect('/')->with('status', 'Ajax Form Data Has Been validated and store into database');
 
    }
}
