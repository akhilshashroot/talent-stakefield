<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StakefieldUser;
use Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = StakefieldUser::get();
        return view('home',compact('employees'));
    }
    public function showChangePasswordGet() {
        return view('auth.passwords.change-password');
    }
}
