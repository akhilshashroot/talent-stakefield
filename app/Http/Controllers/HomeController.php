<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StakefieldUser;

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
        $employees = StakefieldUser::whereNotIn('employee_id', ['ADMN123'])->get();
        return view('home',compact('employees'));
    }
}
