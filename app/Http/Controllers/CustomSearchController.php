<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use DataTables;
class CustomSearchController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            DB::statement(DB::raw('set @rownum=0'));
            $data = User::select(DB::raw('@rownum := 0 r'))
            ->select(DB::raw('@rownum := @rownum + 1 AS rank'),'users.*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('approved')) && !empty($request->get('search'))) {
                            $search = $request->get('search');
                            $instance->where($request->get('approved'),'LIKE', "%$search%");
                        }
                        if (!empty($request->get('search')) && empty($request->get('approved'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('employee_id', 'LIKE', "%$search%")
                                ->orWhere('skill_set', 'LIKE', "%$search%")
                                ->orWhere('experience', 'LIKE', "%$search%")
                                ->orWhere('turnaround_time', 'LIKE', "%$search%")
                                ->orWhere('availability', 'LIKE', "%$search%")
                                ->orWhere('rate', 'LIKE', "%$search%");
                            });
                        }
                    })    
                    ->addColumn('action', function($row){
  
                        $btn = '<a  class="btn btn-primary btn-sm" id="passingID" style="color: #fff;" data-id='.$row['id'].'>Select</a>';

                         return $btn;
                 })
               
                 ->rawColumns(['action'])
                    ->make(true);


        }
        
     
     return view('stakefield');
    }
}

